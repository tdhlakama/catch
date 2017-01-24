<?php

/*
 * File Name: case.php
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Case_file extends Generic_home
{

    public function __construct()
    {
        parent::__construct();
    }

    public function upload_view()
    {
        $this->breadcrumbs->push('Upload Case File', '/');
        $data['error'] = '';
        $this->load->view('case_file_upload_view', $data);
        $this->load->view('footer');
    }

    public function do_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $config['file_name'] = 'case_demographic.csv';

        $this->load->library('Upload', $config);
        $this->upload->initialize($config);

        $file = "./uploads/case_demographic.csv";
        if (!unlink($file)) {
            echo("Upload Failed");
        } else {
            echo("Upload Successfull  - Import Running");
        }
        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('case_file_upload_view', $error);
        } else {
            redirect('case_file/upload_success');
        }

    }

    public function upload_success()
    {
        $data['csv'] = array_map('str_getcsv', file('./uploads/case_demographic.csv'));
        $this->load->view('case_file_upload_sucess_view', $data);
        $this->load->view('footer');
    }

    public function save_success()
    {
        $data['csv'] = array_map('str_getcsv', file('./uploads/case_demographic.csv'));

        $count = 0;
        $errors = 0;
        $duplicate = '';

        $id = $this->upload_model->save($this->session->userdata('username'));
        foreach ($data['csv'] as $item) {
            $valid = true;
            $case_file_no = null;
            if ($this->case_file_model->check_duplicate(trim($item[0]))) {
                $valid = false;
                $duplicate = 'Duplicate ID found';
            } else {
                $case_file_no = $item[0];
            }

            if (!$this->is_valid_gender($item[3])) {
                $valid = false;
            }

            if (!$this->is_value_yes_no($item[9])) {
                $valid = false;
            }

            if (!$this->is_value_yes_no($item[11])) {
                $valid = false;
            }


            if ($valid) {

                $case_file_id = $this->case_file_model->save_upload(
                    $case_file_no,//file no
                    $item[1],//firstname
                    $item[2],//lastname
                    $item[3],//gender
                    $item[4],//date of birth
                    $item[5],//parents name
                    $item[6],//province
                    $item[7],//birth place
                    $item[8],//age
                    $this->blank_no($item[9]),//birth certificate
                    $item[10],//who verified
                    $this->blank_no($item[11]),//in_school
                    $item[12],//education level
                    $item[13],//living with
                    $item[14],//father status
                    $item[15],//mother status
                    $item[16],//ethicinity
                    $id
                );
                $count++;
            } else {
                $errors++;
            }

        }
        $this->upload_model->update($id, $count, $errors, "");

        if (!$valid && $count == 0) {
            $this->upload_model->delete($id);
        }

        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Updated Succesfully ' . $count . ' * Errors Found ' . $errors . ' </div>');
        redirect('case_file/upload_result');
    }

    public function upload_result()
    {
        $this->breadcrumbs->push('Upload Case File', '/');
        $data['upload_list'] = $this->upload_model->get_list();
        $this->load->view('case_file_upload_result', $data);
        $this->load->view('footer');
    }


    public function download_template_csv()
    {
        force_download("./assets/tool/case_demographic.csv", NULL);
    }

    function listAll()
    {
        $this->breadcrumbs->push('Case Files', '/case/listAll');
        $data['case_file_list'] = $this->case_file_model->get_list();
        $this->load->view('case_file_list_view', $data);
        $this->load->view('footer');
    }

    function get_search_list($q)
    {
        $this->breadcrumbs->push('Files', '/case/listAll');
        $data['case_file_list'] = $this->case_file_model->get_search_list($q);
        $this->load->view('case_file_list_view', $data);
        $this->load->view('footer');
    }

    function get_upload_list($q)
    {
        $this->breadcrumbs->push('Files', '/case/listAll');
        $data['case_file_list'] = $this->case_file_model->get_upload_list($q);
        $this->load->view('case_file_list_view', $data);
        $this->load->view('footer');
    }

    function delete($id)
    {
        $this->case_file_model->delete($id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Recorded Deleted from Database!!!</div>');
        redirect('case_file/listAll');
    }

    function search()
    {
        $keyword = $this->input->post('keyword');
        $data['case_total'] = $this->case_file_model->get_search_count($keyword);
        $data['key_word'] = $keyword;
        $this->load->view('search_result_view', $data);
        $this->load->view('footer');
    }

    function autocomplete()
    {
        $this->case_file_model->get_autocomplete();
    }

    function dashboard($id)
    {
        $this->breadcrumbs->push('case Settings', '/case/listAll');
        $this->breadcrumbs->push('case Dashboard', '/case/dashboard/' . $id);

        $data['emp'] = $this->case_file_model->get($id);
        $case_file_no = $data['emp']->case_file_no;
        $data['arrestlist'] = $this->arrest_model->get_arrest_list($case_file_no);
        $data['assesmentlist'] = $this->assesment_model->get_assesment_list($case_file_no);
        $data['releaselist'] = $this->release_model->get_release_list($case_file_no);
        $data['detentionlist'] = $this->detention_model->get_detention_list($case_file_no);
        $data['catchuploadlist'] = $this->catch_file_model->get_upload_list($case_file_no);
        $this->load->view('case_file_dashboard_view', $data);
        $this->load->view('footer');
    }

    function catch_upload($case_file_no)
    {
        $this->breadcrumbs->push('Upload Extra Files', '/');
        $data['error'] = '';
        $data['case_file_no'] = $case_file_no;
        $this->load->view('catch_file_upload_view', $data);
        $this->load->view('footer');
    }

    public function catch_upload_file($case_file_no)
    {
        $status = "";
        $file_element_name = 'userfile';
        if (empty($_POST['title'])) {
            $status = "error";
            $msg = "Please enter a title";
        }

        if ($status != "error") {
            $config['upload_path'] = './files/';
            $config['allowed_types'] = 'gif|jpg|png|doc|docx|txt';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($file_element_name)) {
                $data['error'] = $this->upload->display_errors();
                $data['case_file_no'] = $case_file_no;
                $this->load->view('catch_file_upload_view', $data);
                $this->load->view('footer');
            } else {
                $data = $this->upload->data();
                $file_id = $this->catch_file_model->save($data['file_name'], $_POST['title'], $case_file_no);
                if ($file_id) {
                    $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">File successfully uploaded!</div>');
                    $case_file = $this->case_file_model->get_by_case_file_no($case_file_no);
                    redirect('case_file/dashboard/' . $case_file->case_file_id);
                } else {
                    unlink($data['full_path']);
                    $data['error'] = $this->upload->display_errors();
                    $data['case_file_no'] = $case_file_no;
                    $this->load->view('catch_file_upload_view', $data);
                    $this->load->view('footer');
                }
                @unlink($_FILES[$file_element_name]);
            }
        }

    }

    public function delete_file($id)
    {
        $file = $this->catch_file_model->get($id);
        $case_file = $this->case_file_model->get_by_case_file_no($file->case_file_no);
        $this->catch_file_model->delete($id);
        unlink('./files/' . $file->file_name);
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">File Deleted successfully!</div>');
        redirect('case_file/dashboard/' . $case_file->case_file_id);
    }

    public function download_file($id)
    {
        $file = $this->catch_file_model->get($id);
        force_download("./files/" . $file->file_name, NULL);
    }

}

?>

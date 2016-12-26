<?php

/*
 * File Name: case.php
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Case extends Generic_home
{

    public function __construct()
    {
        parent::__construct();
    }

 public function upload_result()
    {
        $this->breadcrumbs->push('Upload', '/');
        $data['upload_list'] = $this->upload_model->get_list();
        $this->load->view('case_upload_result', $data);
        $this->load->view('footer');
    }

    public function upload_view()
    {
        $this->breadcrumbs->push('Upload', '/');
        $data['error'] = '';
        $data['upload_list'] = $this->upload_model->get_last_five_entries();
        $this->load->view('case_upload_view', $data);
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
            $this->load->view('upload_view', $error);
        } else {
            redirect('case/case_upload_success');
        }

    }

    public function upload_success()
    {
        $data['csv'] = array_map('str_getcsv', file('./uploads/case_demographic.csv'));
        $this->load->view('upload_sucess_view', $data);
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
            $child_no = null;
            if ($this->child_model->check_duplicate(trim($item[0]))) {
                $valid = false;
                $duplicate = 'Duplicate ID found';
            } else {
                $child_no = $item[0];
            }

            if ($valid) {

                $child_id = $this->child_model->save_upload(
                    $child_no,//file no
                    $item[1],//firstname
                    $item[2],//lastname
                    $item[3],//gender
                    $item[4],//date of birth
                    $item[5],//parents name
                    $item[6],//province
                    $item[7],//district
                    $item[8],//address
                    $item[9],//phone
                    $item[10],//birth place
                    $item[11],//displacement
                    $item[12],//age verified
                    $item[13],//verified by
                    $item[14],//who verified
                    $item[15],//educatio
                    $item[16],//living with
                    $item[17],//living at
                    $item[18],//father status
                    $item[19],//mother status
                    $item[20],//ethicinity
                    $id
                );
                $count++;
            } else {
                $errors++;
            }

        }
        $this->upload_model->update($id, $count, $errors, "");
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Updated Succesfully ' . $count . ' * Errors Found ' . $errors . ' </div>');
        redirect('setting/upload_success');
    }

    public function download_template_csv()
    {
        force_download("./assets/tool/case_demographic.csv", NULL);
    }


    function listAll()
    {
        $this->breadcrumbs->push('Files', '/case/listAll');
        $data['case_list'] = $this->case_model->get_list();
        $this->load->view('case_list_view', $data);
        $this->load->view('footer');
    }

    function get_search_list($q)
    {
        $this->breadcrumbs->push('Files', '/case/listAll');
        $data['case_list'] = $this->case_model->get_search_list($q);
        $this->load->view('case_list_view', $data);
        $this->load->view('footer');
    }

    function get_upload_list($q)
    {
        $this->breadcrumbs->push('Files', '/case/listAll');
        $data['case_list'] = $this->case_model->get_upload_list($q);
        $this->load->view('case_list_view', $data);
        $this->load->view('footer');
    }

    function delete($id)
    {
        $this->case_model->delete($id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Recorded Deleted from Database!!!</div>');
        redirect('case/listAll');
    }

    function search()
    {
        $keyword = $this->input->post('keyword');
        $data['case_total'] = $this->case_model->get_search_count($keyword);
        $data['location_total'] = $this->location_model->get_search_count($keyword);
        $data['demand_location_total'] = $this->demand_location_model->get_search_count($keyword);
        $data['worker_type_total'] = $this->worker_type_model->get_search_count($keyword);
        $data['worker_level_total'] = $this->worker_level_model->get_search_count($keyword);
        $data['key_word'] = $keyword;
        $this->load->view('search_result_view', $data);
        $this->load->view('footer');
    }

    function autocomplete()
    {
        $this->case_model->get_autocomplete();
    }

    function dashboard($id)
    {
        $this->breadcrumbs->push('case Settings', '/case/listAll');
        $this->breadcrumbs->push('case Dashboard', '/case/dashboard/' . $id);

        $data['emp'] = $this->case_model->get($id);
        $data['arrestlist'] = $this->arrest_model->get_arrest_list($id);
        $this->load->view('case_dashboard_view', $data);
        $this->load->view('footer');
    }

    function sendMailReminder()
    {
        $this->email->from('tdhlakama@gmail.com', 'Takunda L C Dhlakama');
        $this->email->to('tdhlakama@live.com');
        //$this->email->cc('tdhlakama@yahoo.com');
        $this->email->subject('Reminder Contracts Expiring');
        $emp = $this->case_model->get_list();
        $msg = 'Graduate list' . "<br/>";
        if (isset($emp)) {
            foreach ($emp as $item) {
                $msg .= $item->employee_name . "<br/>";
            }
        }
        if (isset($comp)) {
            foreach ($comp as $item) {
                $msg .= $item->company_name . "<br/>";
            }
        }
        $this->email->message($msg);
        if ($this->email->send())
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Reminder has been sent successfully!</div>');
        else
            $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
        redirect("home");
    }

}

?>


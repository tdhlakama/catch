<?php

/*
 * Service Name: case.php
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Case_service extends Generic_home
{

    public function __construct()
    {
        parent::__construct();
    }

    public function upload_view()
    {
        $this->breadcrumbs->push('Upload Case Services', '/');
        $data['error'] = '';
        $this->load->view('case_service_upload_view', $data);
        $this->load->view('footer');
    }

    public function do_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $config['file_name'] = 'case_services.csv';

        $this->load->library('Upload', $config);
        $this->upload->initialize($config);

        $file = "./uploads/case_services.csv";
        if (!unlink($file)) {
            echo("Upload Failed");
        } else {
            echo("Upload Successfull  - Import Running");
        }
        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('case_service_upload_view', $error);
        } else {
            redirect('case_service/upload_success');
        }

    }

    public function upload_success()
    {
        $data['csv'] = array_map('str_getcsv', file('./uploads/case_services.csv'));
        $this->load->view('case_service_upload_sucess_view', $data);
        $this->load->view('footer');
    }

    public function save_success()
    {
        $data['csv'] = array_map('str_getcsv', file('./uploads/case_services.csv'));

        $count = 0;
        $errors = 0;
        $duplicate = '';

        $id = $this->upload_model->save($this->session->userdata('username'));
        foreach ($data['csv'] as $item) {
            $valid = true;
            $service_no = null;
            if ($this->case_service_model->check_duplicate(trim($item[0]))) {
                $valid = false;
                $duplicate = 'Duplicate ID found';
            } else {
                $service_no = $item[1];
            }

            $case_file_no = null;
            if (!$this->case_file_model->check_duplicate(trim($item[1]))) {
                $valid = false;
                $duplicate = 'Case File ID NOT found';
            } else {
                $case_file_no = $item[1];
            }

            if (!$this->is_value_yes_no($item[2]) ||
                (!$this->is_value_yes_no($item[3])) ||
                (!$this->is_value_yes_no($item[4])) ||
                (!$this->is_value_yes_no($item[5])) ||
                (!$this->is_value_yes_no($item[6])) ||
                (!$this->is_value_yes_no($item[7])) ||
                (!$this->is_value_yes_no($item[8])) ||
                (!$this->is_value_yes_no($item[9])) ||
                (!$this->is_value_yes_no($item[10])) ||
                (!$this->is_value_yes_no($item[11])) ||
                (!$this->is_value_yes_no($item[12])) ||
                (!$this->is_value_yes_no($item[13]))
            ) {
                $valid = false;
            }


            if ($valid) {

                $case_service_id = $this->case_service_model->save_upload(
                    $service_no,//file no
                    $case_file_no,//$case_file_no
                    $this->blank_no($item[2]),//age
                    $this->blank_no($item[3]),//bill
                    $this->blank_no($item[4]),//therapy
                    $this->blank_no($item[5]),//mediation
                    $this->blank_no($item[6]),//counselling
                    $this->blank_no($item[7]),//app
                    $this->blank_no($item[8]),//consultan
                    $this->blank_no($item[9]),//representation
                    $this->blank_no($item[10]),//restitution
                    $this->blank_no($item[11]),//bus fare
                    $this->blank_no($item[12]),//mates
                    $this->blank_no($item[13])//escort

                );
                $count++;
            } else {
                $errors++;
            }

        }
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Updated Succesfully ' . $count . ' * Errors Found ' . $errors . ' </div>');
        redirect('case_service/upload_success');
    }

    public function download_template_csv()
    {
        force_download("./assets/tool/case_services.csv", NULL);
    }

    function listAll()
    {
        $this->breadcrumbs->push('Case Services', '/case_service/listAll');
        $data['case_service_list'] = $this->case_service_model->get_list();
        $this->load->view('case_service_list_view', $data);
        $this->load->view('footer');
    }

    function delete($id)
    {
        $this->case_service_model->delete($id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Recorded Deleted from Database!!!</div>');
        redirect('case_service/listAll');
    }
}

?>

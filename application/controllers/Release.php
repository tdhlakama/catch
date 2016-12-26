<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Arrest extends Generic_home
{

    public function __construct()
    {
        parent::__construct();
    }

    public function upload_result()
    {
        $this->breadcrumbs->push('Upload', '/');
        $this->load->view('footer');
    }

    public function upload_view()
    {
        $this->breadcrumbs->push('Upload', '/');
        $data['error'] = '';
        $this->load->view('arrest_upload_view', $data);
        $this->load->view('footer');
    }

    public function do_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $config['file_name'] = 'case_arrest.csv';

        $this->load->library('Upload', $config);
        $this->upload->initialize($config);

        $file = "./uploads/case_arrest.csv";
        if (!unlink($file)) {
            echo("Upload Failed");
        } else {
            echo("Upload Successfull  - Import Running");
        }
        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('arrest_upload_view', $error);
        } else {
            redirect('arrest/upload_success');
        }

    }

    public function upload_success()
    {
        $data['csv'] = array_map('str_getcsv', file('./uploads/case_arrest.csv'));
        $this->load->view('arrest_upload_sucess_view', $data);
        $this->load->view('footer');
    }

    public function save_success()
    {
        $data['csv'] = array_map('str_getcsv', file('./uploads/case_arrest.csv'));

        $count = 0;
        $errors = 0;
        $duplicate = '';
        
        $id = $this->upload_model->save($this->session->userdata('username'));
        foreach ($data['csv'] as $item) {
            $valid = true;
            $arrest_no = null;
            if ($this->arrest_model->check_duplicate(trim($item[0]))) {
                $valid = false;
                $duplicate = 'Duplicate ID found';
            } else {
                $arrest_no = $item[0];
            }

            if ($valid) {
 
                
                $arrest_id = $this->arrest_model->save_upload(
                    $arrest_no,//file no
                
                    $item[1],//$arrest_id
                    $item[2],//$date_of_arrest
                    $item[3],//$arresting_officer
                    $item[4],//$station
                    $item[5],//$parent_informed
                    $item[6],//$parents_contact
                    $item[7],//$arrested_before
                    $item[8],//$charges_communicated
                    $item[9],//$murder
                    $item[10],//$rape
                    $item[11],//$touting
                    $item[12]//$sodomy
                );
                $count++;
            } else {
                $errors++;
            }

        }
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Updated Succesfully ' . $count . ' * Errors Found ' . $errors . ' </div>');
        redirect('arrest/arrest_upload_success');
    }

    public function download_template_csv()
    {
        force_download("./assets/tool/case_arrest.csv", NULL);
    }

}

?>


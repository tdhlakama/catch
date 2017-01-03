<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Release extends Generic_home
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
        $this->load->view('release_upload_view', $data);
        $this->load->view('footer');
    }

    public function do_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $config['file_name'] = 'case_release.csv';

        $this->load->library('Upload', $config);
        $this->upload->initialize($config);

        $file = "./uploads/case_release.csv";
        if (!unlink($file)) {
            echo("Upload Failed");
        } else {
            echo("Upload Successfull  - Import Running");
        }
        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('release_upload_view', $error);
        } else {
            redirect('release/upload_success');
        }

    }

    public function upload_success()
    {
        $data['csv'] = array_map('str_getcsv', file('./uploads/case_release.csv'));
        $this->load->view('release_upload_sucess_view', $data);
        $this->load->view('footer');
    }

    public function save_success()
    {
        $data['csv'] = array_map('str_getcsv', file('./uploads/case_release.csv'));

        $count = 0;
        $errors = 0;
        $duplicate = '';
        
        $id = $this->upload_model->save($this->session->userdata('username'));
        foreach ($data['csv'] as $item) {
            $valid = true;
            $release_no = null;
            if ($this->release_model->check_duplicate(trim($item[0]))) {
                $valid = false;
                $duplicate = 'Duplicate ID found';
            } else {
                $release_no = $item[0];
            }

            $valid = true;
            $case_file_no = null;
            if (!$this->case_file_model->check_duplicate(trim($item[1]))) {
                $valid = false;
                $duplicate = 'Case File ID NOT found';
            }else{
                $case_file_no = $item[1];
            }

            if ($valid) {
                 
                $release_id = $this->release_model->save_upload(
                    $release_no,//file no
                    $case_file_no,
                    $item[2],//$date_of_release
                    $item[3],//$bail
                    $item[4],//$bail_amount
                    $this->blank_no($item[5]),//$parents_contact
                    $this->blank_no($item[6]),//$care_ngo
                    $this->blank_no($item[7]),//$care_orphange
                    $this->blank_no($item[8]),//$care_relative
                    $item[9],//$case_status
                    $item[10]//$comments

                );
                $count++;
            } else {
                $errors++;
            }

        }
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Updated Succesfully ' . $count . ' * Errors Found ' . $errors . ' </div>');
        redirect('release/upload_success');
    }

    public function download_template_csv()
    {
        force_download("./assets/tool/case_release.csv", NULL);
    }

}

?>


<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Detention extends Generic_home
{

    public function __construct()
    {
        parent::__construct();
    }

    public function upload_view()
    {
        $this->breadcrumbs->push('Upload Detention File', '/');
        $data['error'] = '';
        $this->load->view('detention_upload_view', $data);
        $this->load->view('footer');
    }

    public function do_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $config['file_name'] = 'case_detention.csv';

        $this->load->library('Upload', $config);
        $this->upload->initialize($config);

        $file = "./uploads/case_detention.csv";
        if (!unlink($file)) {
            echo("Upload Failed");
        } else {
            echo("Upload Successfull  - Import Running");
        }
        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('detention_upload_view', $error);
        } else {
            redirect('detention/upload_success');
        }

    }

    public function upload_success()
    {
        $this->breadcrumbs->push('Upload Detention File', '/');
        $data['csv'] = array_map('str_getcsv', file('./uploads/case_detention.csv'));
        $this->load->view('detention_upload_sucess_view', $data);
        $this->load->view('footer');
    }

    public function save_success()
    {
        $data['csv'] = array_map('str_getcsv', file('./uploads/case_detention.csv'));

        $count = 0;
        $errors = 0;
        $duplicate = '';

        $id = $this->upload_model->save($this->session->userdata('username'));
        foreach ($data['csv'] as $item) {
            $valid = true;
            $detention_no = null;
            if ($this->detention_model->check_duplicate(trim($item[0]))) {
                $valid = false;
                $duplicate = 'Duplicate ID found';
            } else {
                $detention_no = $item[0];
            }

            $valid = true;
            $case_file_no = null;
            if (!$this->case_file_model->check_duplicate(trim($item[1]))) {
                $valid = false;
                $duplicate = 'Case File ID NOT found';
            }else{
                $case_file_no = $item[1];
            }

            if (!$this->is_value_yes_no($item[9])
                || !$this->is_value_yes_no($item[10])
                || !$this->is_value_yes_no($item[11])
                || !$this->is_value_yes_no($item[12])
                || !$this->is_value_yes_no($item[13])
                || !$this->is_value_yes_no($item[14])
                || !$this->is_value_yes_no($item[18])
                || !$this->is_value_yes_no($item[20])
            ) {
                $valid = false;
            }

            if ($valid) {

                $detention_id = $this->detention_model->save_upload(
                    $detention_no,//detention_no
                    $case_file_no,//$case_file_id
                    $item[2],//$date_of_arrival
                    $item[3],//$detention_province
                    $item[4],//$detention_district
                    $item[5],//$detention_location
                    $item[6],//$facility_name
                    $item[7],//$facility_type
                    $item[8],//$date_of_transfer
                    $this->blank_no($item[9]),//$first_investigation_report
                    $this->blank_no($item[10]),//$age_verification
                    $this->blank_no($item[11]),//$child_statement
                    $this->blank_no($item[12]),//$medical_record
                    $this->blank_no($item[13]),//$medical_done_before
                    $this->blank_no($item[14]),//$legal_aid
                    $item[15],//$organisation
                    $item[16],//$lawyer
                    $item[17],//$phone
                    $this->blank_no($item[18]),//$met_lawyer
                    $item[19],//$met_how_many_times
                    $this->blank_no($item[20]),//$interrogated
                    $item[21],//$interogation_date
                    $item[22],//$interogation_duration
                    $item[23]//$done_by
                   
                );
                $count++;
            } else {
                $errors++;
            }

        }
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Updated Succesfully ' . $count . ' * Errors Found ' . $errors . ' </div>');
        redirect('detention/upload_success');
    }

    public function download_template_csv()
    {
        force_download("./assets/tool/case_detention.csv", NULL);
    }

}

?>


<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Assesment extends Generic_home
{

    public function __construct()
    {
        parent::__construct();
    }

    public function upload_view()
    {
        $this->breadcrumbs->push('Upload Assesment File', '/');
        $data['error'] = '';
        $this->load->view('assesment_upload_view', $data);
        $this->load->view('footer');
    }

    public function do_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $config['file_name'] = 'case_assesment.csv';

        $this->load->library('Upload', $config);
        $this->upload->initialize($config);

        $file = "./uploads/case_assesment.csv";
        if (!unlink($file)) {
            echo("Upload Failed");
        } else {
            echo("Upload Successfull  - Import Running");
        }
        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('assesment_upload_view', $error);
        } else {
            redirect('assesment/upload_success');
        }

    }

    public function upload_success()
    {
        $this->breadcrumbs->push('Upload Assesment File', '/');
        $data['csv'] = array_map('str_getcsv', file('./uploads/case_assesment.csv'));
        $this->load->view('assesment_upload_sucess_view', $data);
        $this->load->view('footer');
    }

    public function save_success()
    {
        $data['csv'] = array_map('str_getcsv', file('./uploads/case_assesment.csv'));

        $count = 0;
        $errors = 0;
        $duplicate = '';

        $id = $this->upload_model->save($this->session->userdata('username'));
        foreach ($data['csv'] as $item) {
            $valid = true;
            $assesment_no = null;
            if ($this->assesment_model->check_duplicate(trim($item[0]))) {
                $valid = false;
                $duplicate = 'Duplicate ID found';
            } else {
                $assesment_no = $item[0];
            }

            $valid = true;
            $case_file_no = null;
            if (!$this->case_file_model->check_duplicate(trim($item[1]))) {
                $valid = false;
                $duplicate = 'Case File ID NOT found';
            } else {
                $case_file_no = $item[1];
            }

            if ($valid) {

                $assesment_id = $this->assesment_model->save_upload(
                    $assesment_no,//assesment_no
                    $case_file_no,//$case_file_id
                    $item[2],//$date_of_assesment
                    $item[3],//$ill_treatment
                    $item[4],//$food_deprivation
                    $item[5],//$hand_cuffed
                    $item[6],//$electric_shock
                    $item[7],//$beaten_without_instrument
                    $item[8],//$beaten_with_instrument
                    $item[9],//$neglect
                    $item[10],//$slapping
                    $item[11],//$verbal_abuse
                    $item[12],//$shackle
                    $item[13],//$solitary_confinement
                    $item[14],//$toilet_deprivation
                    $item[15],//$sexual_abuse
                    $item[16],//$other_abuse
                    $item[17],//$abuse_details
                    $item[18],//$detainees
                    $item[19],//$police
                    $item[20],//$prison_guard
                    $item[21],//$detaining_officer
                    $item[22],//$prosecutor
                    $item[23],//$other_person
                    $item[24],//torture_details
                    $item[25],//$separate_facilities
                    $item[26],//$health_care
                    $item[27],//$education
                    $item[28],//$recreation
                    $item[29],//$water_sanitation
                    $item[30],//$number_of_prisoners
                    $item[31],//$food_times
                    $item[32],//family_visit
                    $item[33],//$_lessThan24hrs
                    $item[34],//$_24to48hrs
                    $item[35],//$_3to10days
                    $item[36],//$_10to21days
                    $item[37]//$_greaterThan21

                );
                $count++;
            } else {
                $errors++;
            }

        }
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Updated Succesfully ' . $count . ' * Errors Found ' . $errors . ' </div>');
        redirect('assesment/upload_success');
    }

    public function download_template_csv()
    {
        force_download("./assets/tool/case_assesment.csv", NULL);
    }

}

?>


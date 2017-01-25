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
        $this->breadcrumbs->push('Upload Human Rights Violations File', '/');
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
        $this->breadcrumbs->push('Upload Human Rights Violations File', '/');
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

            if (!$this->is_value_yes_no($item[3])
                || !$this->is_value_yes_no($item[4])
                || !$this->is_value_yes_no($item[5])
                || !$this->is_value_yes_no($item[6])
                || !$this->is_value_yes_no($item[7])
                || !$this->is_value_yes_no($item[11])
                || !$this->is_value_yes_no($item[12])
                || !$this->is_value_yes_no($item[13])
                || !$this->is_value_yes_no($item[14])
                || !$this->is_value_yes_no($item[15])
                || !$this->is_value_yes_no($item[16])
                || !$this->is_value_yes_no($item[17])
                || !$this->is_value_yes_no($item[18])
                || !$this->is_value_yes_no($item[19])
                || !$this->is_value_yes_no($item[20])
                || !$this->is_value_yes_no($item[21])
                || !$this->is_value_yes_no($item[22])

            ) {
                $valid = false;
            }

            if ($valid) {

                $assesment_id = $this->assesment_model->save_upload(
                    $assesment_no,//assesment_no
                    $case_file_no,//$case_file_id
                    $item[2],//Violation
                    $this->blank_no($item[3]),//Cuffed
                    $this->blank_no($item[4]),//beaten_without
                    $this->blank_no($item[5]),//Slapped
                    $this->blank_no($item[6]),//Verbal
                    $this->blank_no($item[7]),//Mixed
                    $this->blank_no($item[8]),//Coreced
                    $this->blank_no($item[9]),//Detained
                    $this->blank_no($item[10]),//Gallery
                    $this->blank_no($item[11]),//Charges
                    $this->blank_no($item[12]),//Child NOT REPRESENTED
                    $this->blank_no($item[13]),//Food
                    $this->blank_no($item[14]),//Solitary
                    $this->blank_no($item[15]),//Inadequate BEDDING
                    $this->blank_no($item[16]),//Inadequate DIET
                    $this->blank_no($item[17]),//Education
                    $this->blank_no($item[18]),//TRAINING
                    $this->blank_no($item[19]),//HEALTH
                    $this->blank_no($item[20]),//Sanitary
                    $this->blank_no($item[21]),//TOILTE Facilities
                    $this->blank_no($item[22]),//WAter Boarding
                    $this->blank_no($item[23]),//Water Boarding Facilities
                    $item[24],//Point of Violation
                    $item[25],//Perpertrator
                    $item[26],//Action Taken
                    $item[27]//Notes
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

    function listAll()
    {
        $this->breadcrumbs->push('Human Rights Violations Files', '/assesment/listAll');
        $data['assesmentlist'] = $this->assesment_model->get_list();
        $this->load->view('assesment_list_view', $data);
        $this->load->view('footer');
    }
}

?>


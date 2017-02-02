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

            try {
                if (!(strcasecmp($item[2], '') == 0)) {
                    $d = new DateTime($item[2]);
                    $timestamp = $d->getTimestamp(); // Unix timestamp
                    $formatted_date = $d->format('Y-m-d'); // 2003-10-16
                }
                } catch (Exception $e) {

            }

            if ($valid) {

                $detention_id = $this->detention_model->save_upload(
                    $detention_no,//detention_no
                    $case_file_no,//$case_file_id
                    $formatted_date,//$date_of_arrival
                    $item[3],//Facility NAME
                    $item[4],//Facility TYPE
                    $this->blank_no($item[5]),//MEDICAL CHECK UP
                    $item[6],//Received SERVICES RECEIVED
                    $item[7],//LEGAL AID
                    $item[8],//NAME OF ORGANISATION
                    $item[9],//LAWYERS NAME
                    $item[10],//PHONE
                    $item[11],//WHEN DID MEET
                    $item[12],//HOW MANY TIMES
                    $item[13],//NUMBER OF PRISIONERS
                    $this->blank_no($item[14]),//FAMILY VISIT
                    $item[15],//DURATION DETETENTION
                    $this->blank_no($item[16]),//UP TO 24
                    $this->blank_no($item[17]),//24 TO 48
                    $this->blank_no($item[18]),//3 TO 10
                    $this->blank_no($item[19]),//10 TO 21
                    $this->blank_no($item[20])//ABOVE 21

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

    function listAll()
    {
        $this->breadcrumbs->push('Detention Files', '/detention/listAll');
        $data['detentionlist'] = $this->detention_model->get_list();
        $this->load->view('detention_list_view', $data);
        $this->load->view('footer');
    }

}

?>


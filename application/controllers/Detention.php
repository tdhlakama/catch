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

            if ($valid) {

                $detention_id = $this->detention_model->save_upload(
                    $detention_no,//detention_no
                    $case_file_no,//$case_file_id
                    $item[2],//$date_of_detention
                    $item[3],//$detentioning_officer
                    $item[4],//$station
                    $item[5],//$parent_informed
                    $item[6],//$parents_contact
                    $item[7],//$detentioned_before
                    $item[8],//$similar_charges
                    $item[9],//$which_ones
                    $item[10],//$charges_communicated
                    $item[11],//$victim
                    $item[12],//$murder
                    $item[13],//$rape
                    $item[14],//$touting
                    $item[15],//$sodomy
                    $item[16],//$robbery
                    $item[17],//$attempted_murder
                    $item[18],//$indescent_assault
                    $item[19],//$kidnapping
                    $item[20],//$theft
                    $item[21],//$sex_with_minor
                    $item[22],//$malicious_damage
                    $item[23],//$unlawful_entry
                    $item[24],//$drug
                    $item[25],//$bulling
                    $item[26],//$stock_theft
                    $item[27],//$unknown
                    $item[28],//$others
                    $item[29],//$warrant_issued
                    $item[30],//$warrant_date
                    $item[31],//$given_to_child
                    $item[32],//$notice_period
                    $item[33],//$child_alone
                    $item[34],//$whom
                    $item[35],//$treated_at_detention
                    $item[36],//$placed_with
                    $item[37]//$comments

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


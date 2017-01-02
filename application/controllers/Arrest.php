<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Arrest extends Generic_home
{

    public function __construct()
    {
        parent::__construct();
    }

    public function upload_view()
    {
        $this->breadcrumbs->push('Upload Arrest File', '/');
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
        $this->breadcrumbs->push('Upload Arrest File', '/');
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

            $valid = true;
            $case_file_no = null;
            if (!$this->case_file_model->check_duplicate(trim($item[1]))) {
                $valid = false;
                $duplicate = 'Case File ID NOT found';
            } else {
                $case_file_no = $item[1];
            }

            if (!$this->case_file_model->check_duplicate(trim($item[1]))) {
                $valid = false;
                $duplicate = 'Case File ID NOT found';
            } else {
                $case_file_no = $item[1];
            }

            if (!$this->is_value_yes_no($item[5])
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
                || !$this->is_value_yes_no($item[23])
                || !$this->is_value_yes_no($item[24])
                || !$this->is_value_yes_no($item[25])
                || !$this->is_value_yes_no($item[26])
                || !$this->is_value_yes_no($item[27])
                || !$this->is_value_yes_no($item[29])
                || !$this->is_value_yes_no($item[31])
                || !$this->is_value_yes_no($item[33])
                || !$this->is_value_yes_no($item[36])
            ) {
                $valid = false;
            }

            if ($valid) {

                $arrest_id = $this->arrest_model->save_upload(
                    $arrest_no,//arrest_no
                    $case_file_no,//$case_file_id
                    $item[2],//$date_of_arrest
                    $item[3],//$arresting_officer
                    $item[4],//$station
                    $this->blank_no($item[5]),//$parent_informed
                    $item[6],//$parents_contact
                    $this->blank_no($item[7]),//$arrested_before
                    $item[8],//$similar_charges
                    $item[9],//$which_ones
                    $this->blank_no($item[10]),//$charges_communicated
                    $this->blank_no($item[11]),//$victim
                    $this->blank_no($item[12]),//$murder
                    $this->blank_no($item[13]),//$rape
                    $this->blank_no($item[14]),//$touting
                    $this->blank_no($item[15]),//$sodomy
                    $this->blank_no($item[16]),//$robbery
                    $this->blank_no($item[17]),//$attempted_murder
                    $this->blank_no($item[18]),//$indescent_assault
                    $this->blank_no($item[19]),//$kidnapping
                    $this->blank_no($item[20]),//$theft
                    $this->blank_no($item[21]),//$sex_with_minor
                    $this->blank_no($item[22]),//$malicious_damage
                    $this->blank_no($item[23]),//$unlawful_entry
                    $this->blank_no($item[24]),//$drug
                    $this->blank_no($item[25]),//$bulling
                    $this->blank_no($item[26]),//$stock_theft
                    $this->blank_no($item[27]),//$unknown
                    $item[28],//$others
                    $this->blank_no($item[29]),//$warrant_issued
                    $item[30],//$warrant_date
                    $this->blank_no($item[31]),//$given_to_child
                    $item[32],//$notice_period
                    $this->blank_no($item[33]),//$child_alone
                    $item[34],//$whom
                    $item[35],//$treated_at_arrest
                    $this->blank_no($item[36]),//$placed_with
                    $item[37]//$comments

                );
                $count++;
            } else {
                $errors++;
            }

        }
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Updated Succesfully ' . $count . ' * Errors Found ' . $errors . ' </div>');
        redirect('arrest/upload_success');
    }

    public function download_template_csv()
    {
        force_download("./assets/tool/case_arrest.csv", NULL);
    }

}

?>


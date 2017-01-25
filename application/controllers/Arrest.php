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

            if (!$this->is_value_yes_no($item[4])
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
                || !$this->is_value_yes_no($item[37])
                || !$this->is_value_yes_no($item[38])
                || !$this->is_value_yes_no($item[39])
                || !$this->is_value_yes_no($item[40])
                || !$this->is_value_yes_no($item[41])
                || !$this->is_value_yes_no($item[44])
                || !$this->is_value_yes_no($item[47])
            ) {
                $valid = false;
            }

            if ($valid) {

                $arrest_id = $this->arrest_model->save_upload(
                    $arrest_no,//arrest_no
                    $case_file_no,//$case_file_id
                    $item[2],//address
                    $item[3],//alleged crime
                    $this->blank_no($item[4]),//rape
                    $this->blank_no($item[5]),//touting
                    $this->blank_no($item[6]),//Sodomy
                    $this->blank_no($item[7]),//Robbery
                    $this->blank_no($item[8]),//Attempted murder
                    $this->blank_no($item[9]),//Murder
                    $this->blank_no($item[10]),//Indecent
                    $this->blank_no($item[11]),//Kidnapping
                    $this->blank_no($item[12]),//Theft
                    $this->blank_no($item[13]),//Stock
                    $this->blank_no($item[14]),//Drug
                    $this->blank_no($item[15]),//Malicious
                    $this->blank_no($item[16]),//Unlawful
                    $this->blank_no($item[17]),//Sexual
                    $this->blank_no($item[18]),//Bulling
                    $item[19],//Others
                    $item[20],//Police station
                    $item[21],//Arresting officer
                    $this->blank_no($item[22]),//Charge commicated
                    $this->blank_no($item[23]),//Parents informed
                    $this->blank_no($item[24]),//Arrested before
                    $this->blank_no($item[25]),//similiar charges
                    $this->blank_no($item[26]),//first time offence
                    $this->blank_no($item[27]),//Murder repeat
                    $this->blank_no($item[28]),//Rape repeat
                    $this->blank_no($item[29]),//Touting
                    $this->blank_no($item[30]),//Sodomy
                    $this->blank_no($item[31]),//Robbery
                    $this->blank_no($item[22]),//Attempted
                    $this->blank_no($item[33]),//Indecent
                    $this->blank_no($item[34]),//Kidnapping
                    $this->blank_no($item[35]),//Theft
                    $this->blank_no($item[36]),//Sexual
                    $this->blank_no($item[37]),//Malicious,
                    $this->blank_no($item[38]),//Unlaw,
                    $this->blank_no($item[39]),//Drug,
                    $this->blank_no($item[40]),//Bulling,
                    $this->blank_no($item[41]),//Stock,
                    $item[42],//Unknown,
                    $item[43],//Others,
                    $this->blank_no($item[44]),//Arrested alone,
                    $item[45],//Staying whom,
                    $item[46],//Staying at,
                    $this->blank_no($item[47])//working,
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

    function listAll()
    {
        $this->breadcrumbs->push('Arrest Files', '/arrest/listAll');
        $data['arrestlist'] = $this->arrest_model->get_list();
        $this->load->view('arrest_list_view', $data);
        $this->load->view('footer');
    }


    function count_murder_type($yes)
    {
        $this->db->from('assesment');
        $this->db->where('murder', $yes);
        $query = $this->db->get();
        return $query->num_rows();
    }

}

?>


<?php

/*
 * File Name: case_file_model.php
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Case_file_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_last_entries($total)
    {
        $this->db->distinct();
        $this->db->from('case_file', $total);
        $this->db->group_by('case_file_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_list()
    {
        $this->db->distinct();
        $this->db->from('case_file');
        $query = $this->db->get();
        return $query->result();
    }

    function get_by_case_file_no($case_file_no)
    {
        $this->db->from('case_file');
        $this->db->where('case_file_no', $case_file_no);
        $query = $this->db->get();
        return $query->row();
    }

    function get($id)
    {
        $this->db->from('case_file');
        $this->db->where('case_file_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    function get_row_count()
    {
        $this->db->distinct();
        return $this->db->count_all('case_file');
    }

    function get_search_count($q)
    {
        $this->db->from('case_file');
        $this->db->like('first_name', $q, 'both');
        $this->db->or_like('last_name', $q);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_count_by_gender($gender)
    {
        $this->db->from('case_file');
        $this->db->where('gender', $gender);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function delete($id)
    {
        $this->db->where('case_file_id', $id);
        $this->db->delete('case_file');
    }

    function get_search_list($q)
    {
        $this->db->from('case_file');
        $this->db->like('first_name', $q, 'both');
        $this->db->or_like('last_name', $q);
        $query = $this->db->get();
        return $query->result();
    }

    function get_gender_dropdown()
    {
        $_id = array('-SELECT-');
        $_name = array('-SELECT-');
        array_push($_id, 'M');
        array_push($_name, 'M');
        array_push($_id, 'F');
        array_push($_name, 'F');
        return $list_result = array_combine($_id, $_name);
    }

    function check_duplicate($case_file_no)
    {
        $this->db->from('case_file');
        $this->db->where('case_file_no', $case_file_no);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function save_upload($case_no, $case_file_no, $first_name, $last_name, $gender, $date_of_birth,
                                $parent_name, $address_province, $place_of_birth, $age, $birth_certificate, $who_verified,
                                $in_school, $education_level, $living_with, $father_status, $mother_status, $ethnicity,
                                $upload_id)
    {
        $this->case_no = $case_no;
        $this->case_file_no = $case_file_no;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $this->date_of_birth = $date_of_birth;
        $this->parent_name = $parent_name;
        $this->address_province = $address_province;
        $this->place_of_birth = $place_of_birth;
        $this->age = $age;
        $this->who_verified = $who_verified;
        $this->education_level = $education_level;
        $this->living_with = $living_with;
        $this->father_status = $father_status;
        $this->mother_status = $mother_status;
        $this->ethnicity = $ethnicity;
        $this->birth_certificate = $birth_certificate;
        $this->in_school = $in_school;
        $this->upload_id = $upload_id;
        $this->db->insert('case_file', $this);
        return $this->db->insert_id();
    }

    public function get_upload_list($upload_id)
    {
        $this->db->distinct();
        $this->db->from('case_file');
        $this->db->where('upload_id', $upload_id);
        $query = $this->db->get();
        return $query->result();
    }

    function export()
    {
        $query = $this->db->query("SELECT * FROM case_file");
        $delimiter = ",";
        $newline = "\r\n";
        $data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
        $data = str_replace('"', '', $data);
        return $data;
    }
}

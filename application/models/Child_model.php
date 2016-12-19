<?php

/*
 * File Name: child_model.php
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Child_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_last_entries($total)
    {
        $this->db->distinct();
        $this->db->from('child', $total);
        $this->db->group_by('child_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_all()
    {
        $this->db->distinct();
        $this->db->from('child');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_list()
    {
        $this->db->distinct();
        $this->db->from('child');
        $query = $this->db->get();
        return $query->result();
    }

    function get($id)
    {
        $this->db->from('child');
        $this->db->where('child_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function save()
    {
        $this->child_no = $this->input->post('child_no');
        $this->first_name = $this->input->post('first_name');
        $this->last_name = $this->input->post('last_name');
        $this->db->insert('child', $this);
        return $this->db->insert_id();
    }

    public function update($id)
    {
        $this->first_name = $this->input->post('first_name');
        $this->last_name = $this->input->post('last_name');
        $this->db->where('child_id', $id);
        $this->db->update('child', $this);
    }

    function get_row_count()
    {
        $this->db->distinct();
        return $this->db->count_all('child');
    }

    function get_search_count($q)
    {
        $this->db->from('child');
        $this->db->like('first_name', $q, 'both');
        $this->db->or_like('last_name', $q);
        $query = $this->db->get();
        return $query->num_rows();
    }


    function get_count_by_worker_type($id)
    {
        $this->db->from('child');
        $this->db->where('worker_type_id', $id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function delete($id)
    {
        $this->db->where('child_id', $id);
        $this->db->delete('child');
    }

    function get_search_list($q)
    {
        $this->db->from('child');
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

    function check_duplicate($child_no)
    {
        $this->db->from('child');
        $this->db->where('child_no', $child_no);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function save_upload($child_no, $first_name, $last_name, $gender, $date_of_birth,
                                $parent_name, $address_province, $address_district, $address_detail, $phone_number,
                                $place_of_birth, $displacement, $age_verified, $age_verified_by,$who_verified, $education_level, $living_with
        , $living_at, $father_status, $mother_status, $ethinicity, $upload_id)
    {
        $this->child_no = $child_no;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $currentDate = date('Y-m-d');
        $this->date_of_birth = $currentDate;
        $this->parent_name = $parent_name;
        $this->address_province = $address_province;
        $this->address_district = $address_district;
        $this->address_detail = $address_detail;
        $this->phone_number = $phone_number;
        $this->place_of_birth = $place_of_birth;
        $this->displacement = $displacement;
        $this->age_verified = $age_verified;
        $this->age_verified_by = $age_verified_by;
        $this->who_verified = $who_verified;
        $this->education_level = $education_level;
        $this->living_with = $living_with;
        $this->living_at = $living_at;
        $this->father_status = $father_status;
        $this->mother_status = $mother_status;
        $this->ethinicity = $ethinicity;
        $this->upload_id = $upload_id;
        $this->db->insert('child', $this);
        return $this->db->insert_id();
    }

    public function get_upload_list($upload_id)
    {
        $this->db->distinct();
        $this->db->from('child');
        $this->db->where('upload_id', $upload_id);
        $query = $this->db->get();
        return $query->result();
    }

    function export() {
        $query = $this->db->query("SELECT * FROM child");
        $delimiter = ",";
        $newline = "\r\n";
        $data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
        $data = str_replace('"','',$data);
        return $data;
    }
}

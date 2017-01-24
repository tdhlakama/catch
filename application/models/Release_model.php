<?php

/*
 * File Name: release_model.php
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Release_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_last_entries($total)
    {
        $this->db->distinct();
        $this->db->from('release', $total);
        $this->db->group_by('release_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_all()
    {
        $this->db->distinct();
        $this->db->from('release');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_list()
    {
        $this->db->distinct();
        $this->db->from('release');
        $query = $this->db->get();
        return $query->result();
    }

    function get($id)
    {
        $this->db->from('release');
        $this->db->where('release_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function save()
    {
        $this->release_no = $this->input->post('release_no');
        $this->first_name = $this->input->post('first_name');
        $this->last_name = $this->input->post('last_name');
        $this->db->insert('release', $this);
        return $this->db->insert_id();
    }

    public function update($id)
    {
        $this->first_name = $this->input->post('first_name');
        $this->last_name = $this->input->post('last_name');
        $this->db->where('release_id', $id);
        $this->db->update('release', $this);
    }

    function get_row_count()
    {
        $this->db->distinct();
        return $this->db->count_all('release');
    }

    function get_search_count($q)
    {
        $this->db->from('release');
        $this->db->like('first_name', $q, 'both');
        $this->db->or_like('last_name', $q);
        $query = $this->db->get();
        return $query->num_rows();
    }


    function get_count_by_worker_type($id)
    {
        $this->db->from('release');
        $this->db->where('worker_type_id', $id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function delete($id)
    {
        $this->db->where('release_id', $id);
        $this->db->delete('release');
    }

    function get_search_list($q)
    {
        $this->db->from('release');
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

    function check_duplicate($release_no)
    {
        $this->db->from('release');
        $this->db->where('release_no', $release_no);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function save_upload(
        $release_no, $case_file_no, $date_of_release, $bail, $bail_amount
        , $care_parent, $care_organisation)
    {
        $this->release_no = $release_no;
        $this->case_file_no = $case_file_no;
        $currentDate = date('Y-m-d');
        $this->date_of_release = $currentDate;
        $this->bail = $bail;
        $this->bail_amount = $bail_amount;
        $this->care_parent = $care_parent;
        $this->care_organisation = $care_organisation;
        $this->db->insert('release', $this);
        return $this->db->insert_id();
    }

    public function get_release_list($case_file_no)
    {
        $this->db->distinct();
        $this->db->from('release');
        $this->db->where('case_file_no', $case_file_no);
        $query = $this->db->get();
        return $query->result();
    }

    function export()
    {
        $query = $this->db->query("SELECT * FROM release");
        $delimiter = ",";
        $newline = "\r\n";
        $data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
        $data = str_replace('"', '', $data);
        return $data;
    }


}

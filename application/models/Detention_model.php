<?php

/*
 * File Name: detention_model.php
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Detention_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_last_entries($total)
    {
        $this->db->distinct();
        $this->db->from('detention', $total);
        $this->db->group_by('detention_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_all()
    {
        $this->db->distinct();
        $this->db->from('detention');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_list()
    {
        $this->db->distinct();
        $this->db->from('detention');
        $query = $this->db->get();
        return $query->result();
    }

    function get($id)
    {
        $this->db->from('detention');
        $this->db->where('detention_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function save()
    {
        $this->detention_no = $this->input->post('detention_no');
        $this->first_name = $this->input->post('first_name');
        $this->last_name = $this->input->post('last_name');
        $this->db->insert('detention', $this);
        return $this->db->insert_id();
    }

    public function update($id)
    {
        $this->first_name = $this->input->post('first_name');
        $this->last_name = $this->input->post('last_name');
        $this->db->where('detention_id', $id);
        $this->db->update('detention', $this);
    }

    function get_row_count()
    {
        $this->db->distinct();
        return $this->db->count_all('detention');
    }

    function get_search_count($q)
    {
        $this->db->from('detention');
        $this->db->like('first_name', $q, 'both');
        $this->db->or_like('last_name', $q);
        $query = $this->db->get();
        return $query->num_rows();
    }


    function get_count_by_worker_type($id)
    {
        $this->db->from('detention');
        $this->db->where('worker_type_id', $id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function delete($id)
    {
        $this->db->where('detention_id', $id);
        $this->db->delete('detention');
    }

    function get_search_list($q)
    {
        $this->db->from('detention');
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

    function check_duplicate($detention_no)
    {
        $this->db->from('detention');
        $this->db->where('detention_no', $detention_no);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function save_upload(
        $detention_no, $case_file_no, $date_of_detention, $detentioning_officer, $station
        , $parent_informed, $parents_contact, $detentioned_before
        , $similar_charges, $which_ones, $charges_communicated, $victim
        , $murder, $rape, $touting, $sodomy
        , $robbery, $attempted_murder, $indescent_assault, $kidnapping
        , $theft, $sex_with_minor, $malicious_damage, $unlawful_entry
        , $drug, $bulling, $stock_theft, $unknown
        , $others, $warrant_issued, $warrant_date, $given_to_child
        , $notice_period, $child_alone, $whom, $treated_at_detention
        , $placed_with, $comments)

    {
        $this->detention_no = $detention_no;
        $this->case_file_no = $case_file_no;
        $currentDate = date('Y-m-d');
        $this->date_of_detention = $currentDate;
        $this->detentioning_officer = $detentioning_officer;
        $this->station = $station;
        $this->parent_informed = $parent_informed;
        $this->parents_contact = $parents_contact;
        $this->detentioned_before = $detentioned_before;
        $this->charges_communicated = $charges_communicated;
        $this->similar_charges = $similar_charges;
        $this->which_ones = $which_ones;
        $this->victim = $victim;
        $this->murder = $murder;
        $this->rape = $rape;
        $this->touting = $touting;
        $this->sodomy = $sodomy;
        $this->robbery = $robbery;
        $this->attempted_murder = $attempted_murder;
        $this->indescent_assault = $indescent_assault;
        $this->kidnapping = $kidnapping;
        $this->unlawful_entry = $unlawful_entry;
        $this->theft = $theft;
        $this->sex_with_minor = $sex_with_minor;
        $this->drug = $drug;
        $this->bulling = $bulling;
        $this->malicious_damage = $malicious_damage;
        $this->stock_theft = $stock_theft;
        $this->unknown = $unknown;
        $this->others = $others;
        $this->warrant_issued = $warrant_issued;
        $this->warrant_date = $warrant_date;
        $this->given_to_child = $given_to_child;
        $this->warrant_date = $warrant_date;
        $this->notice_period = $notice_period;
        $this->child_alone = $child_alone;
        $this->whom = $whom;
        $this->treated_at_detention = $treated_at_detention;
        $this->placed_with = $placed_with;
        $this->comments = $comments;
        $this->db->insert('detention', $this);
        return $this->db->insert_id();
    }

    public function get_detention_list($case_file_no)
    {
        $this->db->distinct();
        $this->db->from('detention');
        $this->db->where('case_file_no', $case_file_no);
        $query = $this->db->get();
        return $query->result();
    }

    function export()
    {
        $query = $this->db->query("SELECT * FROM detention");
        $delimiter = ",";
        $newline = "\r\n";
        $data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
        $data = str_replace('"', '', $data);
        return $data;
    }


}

<?php

/*
 * File Name: assesment_model.php
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Assesment_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_last_entries($total)
    {
        $this->db->distinct();
        $this->db->from('assesment', $total);
        $this->db->group_by('assesment_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_all()
    {
        $this->db->distinct();
        $this->db->from('assesment');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_list()
    {
        $this->db->distinct();
        $this->db->from('assesment');
        $query = $this->db->get();
        return $query->result();
    }

    function get($id)
    {
        $this->db->from('assesment');
        $this->db->where('assesment_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function save()
    {
        $this->assesment_no = $this->input->post('assesment_no');
        $this->first_name = $this->input->post('first_name');
        $this->last_name = $this->input->post('last_name');
        $this->db->insert('assesment', $this);
        return $this->db->insert_id();
    }

    public function update($id)
    {
        $this->first_name = $this->input->post('first_name');
        $this->last_name = $this->input->post('last_name');
        $this->db->where('assesment_id', $id);
        $this->db->update('assesment', $this);
    }

    function get_row_count()
    {
        $this->db->distinct();
        return $this->db->count_all('assesment');
    }

    function get_search_count($q)
    {
        $this->db->from('assesment');
        $this->db->like('first_name', $q, 'both');
        $this->db->or_like('last_name', $q);
        $query = $this->db->get();
        return $query->num_rows();
    }


    function get_count_by_worker_type($id)
    {
        $this->db->from('assesment');
        $this->db->where('worker_type_id', $id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function delete($id)
    {
        $this->db->where('assesment_id', $id);
        $this->db->delete('assesment');
    }

    function get_search_list($q)
    {
        $this->db->from('assesment');
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

    function check_duplicate($assesment_no)
    {
        $this->db->from('assesment');
        $this->db->where('assesment_no', $assesment_no);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function save_upload(
        $assesment_no, $case_file_no, $date_of_assesment, $ill_treatment, $food_deprivation
        , $hand_cuffed, $electric_shock, $beaten_without_instrument, $beaten_with_instrument
        , $neglect, $slapping, $verbal_abuse, $shackle, $solitary_confinement
        , $toilet_deprivation, $sexual_abuse, $other_abuse, $abuse_details, $detainees
        , $police, $prison_guard, $detaining_officer, $prosecutor, $other_person, $torture_details
        , $separate_facilities, $health_care, $education
        , $recreation, $water_sanitation, $number_of_prisoners, $food_times, $family_visit
        , $_lessThan24hrs, $_24to48hrs, $_3to10days, $_10to21days, $_greaterThan21)
    {
        $this->assesment_no = $assesment_no;
        $this->case_file_no = $case_file_no;
        $currentDate = date('Y-m-d');
        $this->date_of_assesment = $currentDate;
        $this->ill_treatment = $ill_treatment;
        $this->electric_shock = $electric_shock;
        $this->food_deprivation = $food_deprivation;
        $this->hand_cuffed = $hand_cuffed;
        $this->shackle = $shackle;
        $this->neglect = $neglect;
        $this->slapping = $slapping;
        $this->verbal_abuse = $verbal_abuse;
        $this->beaten_with_instrument = $beaten_with_instrument;
        $this->beaten_without_instrument = $beaten_without_instrument;
        $this->solitary_confinement = $solitary_confinement;
        $this->toilet_deprivation = $toilet_deprivation;
        $this->sexual_abuse = $sexual_abuse;
        $this->other_abuse = $other_abuse;
        $this->abuse_details = $abuse_details;
        $this->detaining_officer = $detaining_officer;
        $this->number_of_prisoners = $number_of_prisoners;
        $this->food_times = $food_times;
        $this->detainees = $detainees;
        $this->police = $police;
        $this->torture_details = $torture_details;
        $this->other_person = $other_person;
        $this->prison_guard = $prison_guard;
        $this->prosecutor = $prosecutor;
        $this->separate_facilities = $separate_facilities;
        $this->health_care = $health_care;
        $this->education = $education;
        $this->recreation = $recreation;
        $this->water_sanitation = $water_sanitation;
        $this->family_visit = $family_visit;
        $this->_lessThan24hrs = $_lessThan24hrs;
        $this->_24to48hrs = $_24to48hrs;
        $this->_3to10days = $_3to10days;
        $this->_10to21days = $_10to21days;
        $this->_greaterThan21 = $_greaterThan21;
        $this->db->insert('assesment', $this);
        return $this->db->insert_id();
    }

    public function get_assesment_list($case_file_no)
    {
        $this->db->distinct();
        $this->db->from('assesment');
        $this->db->where('case_file_no', $case_file_no);
        $query = $this->db->get();
        return $query->result();
    }

    function export()
    {
        $query = $this->db->query("SELECT * FROM assesment");
        $delimiter = ",";
        $newline = "\r\n";
        $data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
        $data = str_replace('"', '', $data);
        return $data;
    }


}

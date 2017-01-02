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


    function get_count_by_type($food_deprivation
        , $hand_cuffed, $electric_shock, $beaten_without_instrument, $beaten_with_instrument
        , $neglect, $slapping, $verbal_abuse, $shackle, $solitary_confinement
        , $toilet_deprivation, $sexual_abuse, $other_abuse)
    {
        $this->db->from('assesment');
        if ($food_deprivation === "yes") {
            $this->db->where('murder', $food_deprivation);
        }
        if ($hand_cuffed === "yes") {
            $this->db->where('hand_cuffed', $hand_cuffed);
        }
        if ($electric_shock === "yes") {
            $this->db->where('electric_shock', $electric_shock);
        }
        if ($beaten_without_instrument === "yes") {
            $this->db->where('beaten_without_instrument', $beaten_without_instrument);
        }
        if ($beaten_with_instrument === "yes") {
            $this->db->where('beaten_with_instrument', $beaten_with_instrument);
        }
        if ($neglect === "yes") {
            $this->db->where('neglect', $neglect);
        }
        if ($slapping === "yes") {
            $this->db->where('slapping', $slapping);
        }
        if ($verbal_abuse === "yes") {
            $this->db->where('verbal_abuse', $verbal_abuse);
        }
        if ($shackle === "yes") {
            $this->db->where('shackle', $shackle);
        }
        if ($solitary_confinement === "yes") {
            $this->db->where('solitary_confinement', $solitary_confinement);
        }
        if ($toilet_deprivation === "yes") {
            $this->db->where('toilet_deprivation', $toilet_deprivation);
        }
        if ($solitary_confinement === "yes") {
            $this->db->where('solitary_confinement', $solitary_confinement);
        }
        if ($sexual_abuse === "yes") {
            $this->db->where('sexual_abuse', $sexual_abuse);
        }
        if ($other_abuse === "yes") {
            $this->db->where('other_abuse', $other_abuse);
        }


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

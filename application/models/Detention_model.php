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
        $detention_no, $case_file_no, $date_of_arrival, $detention_province, $detention_district
        , $detention_location, $facility_name, $facility_type, $date_of_transfer, $first_investigation_report, $age_verification
        , $child_statement, $medical_record, $medical_done_before, $legal_aid
        , $organisation, $lawyer, $phone, $met_lawyer, $met_how_many_times
        , $interrogated, $interogation_date, $interogation_duration, $done_by)
    {

        $this->detention_no = $detention_no;
        $this->case_file_no = $case_file_no;
        $currentDate = date('Y-m-d');
        $this->date_of_arrival = $currentDate;
        $this->detention_province = $detention_province;
        $this->detention_district = $detention_district;
        $this->detention_location = $detention_location;
        $this->facility_name = $facility_name;
        $this->facility_type = $facility_type;
        $this->date_of_transfer = $date_of_transfer;
        $this->first_investigation_report = $first_investigation_report;
        $this->age_verification = $age_verification;
        $this->child_statement = $child_statement;
        $this->medical_record = $medical_record;
        $this->medical_done_before = $medical_done_before;
        $this->legal_aid = $legal_aid;
        $this->organisation = $organisation;
        $this->interogation_date = $currentDate;
        $this->lawyer = $lawyer;
        $this->met_lawyer = $met_lawyer;
        $this->met_how_many_times = $met_how_many_times;
        $this->phone = $phone;
        $this->interrogated = $interrogated;
        $this->interogation_duration = $interogation_duration;
        $this->done_by = $done_by;
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

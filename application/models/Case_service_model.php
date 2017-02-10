<?php

/*
 * File Name: case_service_model.php
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Case_service_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_last_entries($total)
    {
        $this->db->distinct();
        $this->db->from('case_service', $total);
        $this->db->group_by('case_service_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_list()
    {
        $this->db->distinct();
        $this->db->from('case_service');
        $query = $this->db->get();
        return $query->result();
    }

    function get_by_case_service_no($case_service_no)
    {
        $this->db->from('case_service');
        $this->db->where('case_service_no', $case_service_no);
        $query = $this->db->get();
        return $query->row();
    }

    function get_service_list($case_file_no)
    {
        $this->db->distinct();
        $this->db->from('case_service');
        $this->db->where('case_file_no', $case_file_no);
        $query = $this->db->get();
        return $query->result();
    }

    function get($id)
    {
        $this->db->from('case_service');
        $this->db->where('case_service_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    function get_row_count()
    {
        $this->db->distinct();
        return $this->db->count_all('case_service');
    }

    function delete($id)
    {
        $this->db->where('case_service_id', $id);
        $this->db->delete('case_service');
    }

    function get_search_list($q)
    {
        $this->db->from('case_service');
        $this->db->like('first_name', $q, 'both');
        $this->db->or_like('last_name', $q);
        $query = $this->db->get();
        return $query->result();
    }

    function check_duplicate($service_no)
    {
        $this->db->from('case_service');
        $this->db->where('service_no', $service_no);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function save_upload($service_no, $case_file_no, $age_estimate, $bill_payment, $therapy, $mediation,
                                $counselling, $accompaniment, $consultation, $presentation, $restitution, $transport,
                                $assistance_inmates, $escort)
    {
        $this->service_no = $service_no;
        $this->case_file_no = $case_file_no;
        $this->age_estimate = $age_estimate;
        $this->bill_payment = $bill_payment;
        $this->therapy = $therapy;
        $this->mediation = $mediation;
        $this->counselling = $counselling;
        $this->accompaniment = $accompaniment;
        $this->consultation = $consultation;
        $this->presentation = $presentation;
        $this->restitution = $restitution;
        $this->transport = $transport;
        $this->assistance_inmates = $assistance_inmates;
        $this->escort = $escort;
        $this->db->insert('case_service', $this);
        return $this->db->insert_id();
    }

    function count_age_estimate($yes)
    {
        $this->db->from('case_service');
        $this->db->where('age_estimate', $yes);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_bill_payment($yes)
    {
        $this->db->from('case_service');
        $this->db->where('bill_payment', $yes);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_therapy($yes)
    {
        $this->db->from('case_service');
        $this->db->where('therapy', $yes);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_mediation($yes)
    {
        $this->db->from('case_service');
        $this->db->where('mediation', $yes);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_counselling($yes)
    {
        $this->db->from('case_service');
        $this->db->where('counselling', $yes);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_accompaniment($yes)
    {
        $this->db->from('case_service');
        $this->db->where('accompaniment', $yes);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_consultation($yes)
    {
        $this->db->from('case_service');
        $this->db->where('consultation', $yes);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_presentation($yes)
    {
        $this->db->from('case_service');
        $this->db->where('presentation', $yes);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_restitution($yes)
    {
        $this->db->from('case_service');
        $this->db->where('restitution', $yes);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_transport($yes)
    {
        $this->db->from('case_service');
        $this->db->where('transport', $yes);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_assistance_inmates($yes)
    {
        $this->db->from('case_service');
        $this->db->where('assistance_inmates', $yes);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_escort($yes)
    {
        $this->db->from('case_service');
        $this->db->where('escort', $yes);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function export()
    {
        $query = $this->db->query("SELECT * FROM case_service");
        $delimiter = ",";
        $newline = "\r\n";
        $data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
        $data = str_replace('"', '', $data);
        return $data;
    }
}

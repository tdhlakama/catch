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
        $assesment_no, $case_file_no, $date_of_assesment, $nature_of_violation,
        $hand_cuffed, $beaten_without_instrument, $slapping
        , $verbal_abuse, $mixed_with_adults, $coerced, $detained_48Hours, $gallery_cleared
        , $charges_explained, $child_represented, $food_deprivation, $solitary_confinement
        , $inadequate_bedding, $inadequate_diet, $education, $vocation_training
        , $health_care, $water_sanitation, $toilet_deprivation, $point_of_violation
        , $perpetrator, $action_taken, $additional_notes
    )
    {
        $this->assesment_no = $assesment_no;
        $this->case_file_no = $case_file_no;
        $currentDate = date('Y-m-d');
        $this->nature_of_violation = $nature_of_violation;
        $this->date_of_assesment = $currentDate;
        $this->food_deprivation = $food_deprivation;
        $this->hand_cuffed = $hand_cuffed;
        $this->vocation_training = $vocation_training;
        $this->slapping = $slapping;
        $this->verbal_abuse = $verbal_abuse;
        //$this->beaten_with_instrument = $beaten_with_instrument;
        $this->beaten_without_instrument = $beaten_without_instrument;
        $this->solitary_confinement = $solitary_confinement;
        $this->toilet_deprivation = $toilet_deprivation;

        $this->detained_48Hours = $detained_48Hours;
        $this->additional_notes = $additional_notes;
        $this->action_taken = $action_taken;
        $this->perpetrator = $perpetrator;
        $this->health_care = $health_care;
        $this->education = $education;
        $this->water_sanitation = $water_sanitation;
        $this->gallery_cleared = $gallery_cleared;
        $this->charges_explained = $charges_explained;
        $this->child_represented = $child_represented;
        $this->point_of_violation = $point_of_violation;
        $this->mixed_with_adults = $mixed_with_adults;
        $this->coerced = $coerced;
        $this->inadequate_bedding = $inadequate_bedding;
        $this->inadequate_diet = $inadequate_diet;

        $this->db->insert('assesment', $this);
        return $this->db->insert_id();
    }

    public
    function get_assesment_list($case_file_no)
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

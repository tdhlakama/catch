<?php

/*
 * File Name: arrest_model.php
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Arrest_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_last_entries($total)
    {
        $this->db->distinct();
        $this->db->from('arrest', $total);
        $this->db->group_by('arrest_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_list()
    {
        $this->db->distinct();
        $this->db->from('arrest');
        $query = $this->db->get();
        return $query->result();
    }

    function get($id)
    {
        $this->db->from('arrest');
        $this->db->where('arrest_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    function get_row_count()
    {
        $this->db->distinct();
        return $this->db->count_all('arrest');
    }

    function get_count_by_murder($value)
    {
        $this->db->from('arrest');
        $this->db->where('worker_type_id', $value);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_count_by_type($murder, $rape, $touting, $sodomy
        , $robbery, $attempted_murder, $indescent_assault, $kidnapping
        , $theft, $sex_with_minor, $malicious_damage, $unlawful_entry
        , $drug, $bulling, $stock_theft, $unknown
    )
    {
        $this->db->from('arrest');
        if ($murder === "yes") {
            $this->db->where('murder', $murder);
        }
        if ($rape === "yes") {
            $this->db->where('rape', $rape);
        }
        if ($touting === "yes") {
            $this->db->where('touting', $touting);
        }
        if ($sodomy === "yes") {
            $this->db->where('sodomy', $sodomy);
        }
        if ($robbery === "yes") {
            $this->db->where('robbery', $robbery);
        }
        if ($attempted_murder === "yes") {
            $this->db->where('attempted_murder', $attempted_murder);
        }
        if ($indescent_assault === "yes") {
            $this->db->where('indescent_assault', $indescent_assault);
        }
        if ($kidnapping === "yes") {
            $this->db->where('kidnapping', $kidnapping);
        }
        if ($theft === "yes") {
            $this->db->where('theft', $theft);
        }
        if ($sex_with_minor === "yes") {
            $this->db->where('sex_with_minor', $sex_with_minor);
        }
        if ($malicious_damage === "yes") {
            $this->db->where('malicious_damage', $malicious_damage);
        }
        if ($unlawful_entry === "yes") {
            $this->db->where('unlawful_entry', $unlawful_entry);
        }
        if ($drug === "yes") {
            $this->db->where('drug', $drug);
        }
        if ($bulling === "yes") {
            $this->db->where('bulling', $bulling);
        }
        if ($stock_theft === "yes") {
            $this->db->where('stock_theft', $stock_theft);
        }
        if ($unknown === "yes") {
            $this->db->where('unknown', $unknown);
        }
        $query = $this->db->get();
        return $query->num_rows();
    }

    function delete($id)
    {
        $this->db->where('arrest_id', $id);
        $this->db->delete('arrest');
    }

    function get_search_list($murder, $rape, $touting, $sodomy
        , $robbery, $attempted_murder, $indescent_assault, $kidnapping
        , $theft, $sex_with_minor, $malicious_damage, $unlawful_entry
        , $drug, $bulling, $stock_theft, $unknown
    )
    {
        $this->db->from('arrest');
        if ($murder === "yes") {
            $this->db->where('murder', $murder);
        }
        if ($rape === "yes") {
            $this->db->where('rape', $rape);
        }
        if ($touting === "yes") {
            $this->db->where('touting', $touting);
        }
        if ($sodomy === "yes") {
            $this->db->where('sodomy', $sodomy);
        }
        if ($robbery === "yes") {
            $this->db->where('robbery', $robbery);
        }
        if ($attempted_murder === "yes") {
            $this->db->where('attempted_murder', $attempted_murder);
        }
        if ($indescent_assault === "yes") {
            $this->db->where('indescent_assault', $indescent_assault);
        }
        if ($kidnapping === "yes") {
            $this->db->where('kidnapping', $kidnapping);
        }
        if ($theft === "yes") {
            $this->db->where('theft', $theft);
        }
        if ($sex_with_minor === "yes") {
            $this->db->where('sex_with_minor', $sex_with_minor);
        }
        if ($malicious_damage === "yes") {
            $this->db->where('malicious_damage', $malicious_damage);
        }
        if ($unlawful_entry === "yes") {
            $this->db->where('unlawful_entry', $unlawful_entry);
        }
        if ($drug === "yes") {
            $this->db->where('drug', $drug);
        }
        if ($bulling === "yes") {
            $this->db->where('bulling', $bulling);
        }
        if ($stock_theft === "yes") {
            $this->db->where('stock_theft', $stock_theft);
        }
        if ($unknown === "yes") {
            $this->db->where('unknown', $unknown);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function check_duplicate($arrest_no)
    {
        $this->db->from('arrest');
        $this->db->where('arrest_no', $arrest_no);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function save_upload(
        $arrest_no, $case_file_no, $address_detail, $alleged_crime
        , $rape, $touting, $sodomy, $robbery, $attempted_murder, $murder, $indecent_assault, $kidnapping
        , $theft, $stock_theft, $drug, $malicious_damage, $unlawful_entry, $sex_with_minor
        , $bulling, $others, $arresting_officer, $station, $charges_communicated
        , $parent_informed, $arrested_before, $similar_charges, $first_time
        , $murder_repeat, $rape_repeat, $touting_repeat, $sodomy_repeat
        , $robbery_repeat, $attempted_murder_repeat, $indecent_assault_repeat, $kidnapping_repeat
        , $theft_repeat, $sex_with_minor_repeat, $malicious_damage_repeat, $unlawful_entry_repeat
        , $drug_repeat, $bulling_repeat, $stock_theft_repeat
        , $unknown, $others_repeat, $child_alone, $whom, $arrested_where, $working)

    {
        $this->arrest_no = $arrest_no;
        $this->case_file_no = $case_file_no;
        $this->arresting_officer = $arresting_officer;
        $this->station = $station;
        $this->parent_informed = $parent_informed;
        $this->arrested_before = $arrested_before;
        $this->charges_communicated = $charges_communicated;
        $this->similar_charges = $similar_charges;
        $this->others_repeat = $others_repeat;
        $this->alleged_crime = $alleged_crime;
        $this->murder = $murder;
        $this->rape = $rape;
        $this->touting = $touting;
        $this->sodomy = $sodomy;
        $this->robbery = $robbery;
        $this->attempted_murder = $attempted_murder;
        $this->indecent_assault = $indecent_assault;
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
        $this->murder_repeat = $murder_repeat;
        $this->rape_repeat = $rape_repeat;
        $this->touting_repeat = $touting_repeat;
        $this->sodomy_repeat = $sodomy_repeat;
        $this->robbery_repeat = $robbery_repeat;
        $this->attempted_murder_repeat = $attempted_murder_repeat;
        $this->indecent_assault_repeat = $indecent_assault_repeat;
        $this->kidnapping_repeat = $kidnapping_repeat;
        $this->unlawful_entry_repeat = $unlawful_entry_repeat;
        $this->theft_repeat = $theft_repeat;
        $this->sex_with_minor_repeat = $sex_with_minor_repeat;
        $this->drug_repeat = $drug_repeat;
        $this->bulling_repeat = $bulling_repeat;
        $this->malicious_damage_repeat = $malicious_damage_repeat;
        $this->stock_theft_repeat = $stock_theft_repeat;
        $this->child_alone = $child_alone;
        $this->whom = $whom;
        $this->arrested_where = $arrested_where;
        $this->working = $working;
        $this->address_detail = $address_detail;
        $this->first_time = $first_time;

        $this->db->insert('arrest', $this);
        return $this->db->insert_id();
    }

    public function get_arrest_list($case_file_no)
    {
        $this->db->distinct();
        $this->db->from('arrest');
        $this->db->where('case_file_no', $case_file_no);
        $query = $this->db->get();
        return $query->result();
    }

    function export()
    {
        $query = $this->db->query("SELECT * FROM arrest");
        $delimiter = ",";
        $newline = "\r\n";
        $data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
        $data = str_replace('"', '', $data);
        return $data;
    }


}

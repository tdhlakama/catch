<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Location Model
 *
 * @author tdhlakama
 */
class Catch_file_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get($id)
    {
        $this->db->from('catch_file');
        $this->db->where('catch_file_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_upload_list($case_file_no)
    {
        $query = $this->db->get('catch_file');
        $this->db->where('case_file_no', $case_file_no);
        return $query->result();
    }

    public function save($file_name, $title, $case_file_no)
    {
        $this->file_name = $file_name;
        $this->title = $title;
        $this->case_file_no = $case_file_no;
        $this->db->insert('catch_file', $this);
        return $this->db->insert_id();
    }

    function delete($id)
    {
        $this->db->where('catch_file_id', $id);
        $this->db->delete('catch_file');
    }

}

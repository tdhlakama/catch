<?php

/*
 * File Name: child.php
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Child extends Generic_home
{

    public function __construct()
    {
        parent::__construct();
    }

    function listAll()
    {
        $this->breadcrumbs->push('Files', '/child/listAll');
        $data['child_list'] = $this->child_model->get_list();
        $this->load->view('child_list_view', $data);
        $this->load->view('footer');
    }

    function get_search_list($q)
    {
        $this->breadcrumbs->push('Files', '/child/listAll');
        $data['child_list'] = $this->child_model->get_search_list($q);
        $this->load->view('child_list_view', $data);
        $this->load->view('footer');
    }

    function get_upload_list($q)
    {
        $this->breadcrumbs->push('Files', '/child/listAll');
        $data['child_list'] = $this->child_model->get_upload_list($q);
        $this->load->view('child_list_view', $data);
        $this->load->view('footer');
    }

    function delete($id)
    {
        $this->child_model->delete($id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Recorded Deleted from Database!!!</div>');
        redirect('child/listAll');
    }

    function search()
    {
        $keyword = $this->input->post('keyword');
        $data['child_total'] = $this->child_model->get_search_count($keyword);
        $data['location_total'] = $this->location_model->get_search_count($keyword);
        $data['demand_location_total'] = $this->demand_location_model->get_search_count($keyword);
        $data['worker_type_total'] = $this->worker_type_model->get_search_count($keyword);
        $data['worker_level_total'] = $this->worker_level_model->get_search_count($keyword);
        $data['key_word'] = $keyword;
        $this->load->view('search_result_view', $data);
        $this->load->view('footer');
    }

    function autocomplete()
    {
        $this->child_model->get_autocomplete();
    }

    function dashboard($id)
    {
        $this->breadcrumbs->push('Child Settings', '/child/listAll');
        $this->breadcrumbs->push('Child Dashboard', '/child/dashboard/' . $id);

        $data['emp'] = $this->child_model->get($id);
        $this->load->view('child_dashboard_view', $data);
        $this->load->view('footer');
    }

    function sendMailReminder()
    {
        $this->email->from('tdhlakama@gmail.com', 'Takunda L C Dhlakama');
        $this->email->to('tdhlakama@live.com');
        //$this->email->cc('tdhlakama@yahoo.com');
        $this->email->subject('Reminder Contracts Expiring');
        $emp = $this->child_model->get_list();
        $msg = 'Graduate list' . "<br/>";
        if (isset($emp)) {
            foreach ($emp as $item) {
                $msg .= $item->employee_name . "<br/>";
            }
        }
        if (isset($comp)) {
            foreach ($comp as $item) {
                $msg .= $item->company_name . "<br/>";
            }
        }
        $this->email->message($msg);
        if ($this->email->send())
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Reminder has been sent successfully!</div>');
        else
            $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
        redirect("home");
    }

}

?>


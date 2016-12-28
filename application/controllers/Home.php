<?php

/**
 * Application Start
 *
 * @author tdhlakama
 */
class Home extends Generic_home
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['total_number_of_files'] = $this->case_file_model->get_row_count();
        $this->load->view('home_view', $data);
        $this->load->view('footer');
    }

 }

?>


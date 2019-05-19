<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
        }
    }
    
    public function index()
    {
        $this->load->view('_template/head');
        // $this->load->view('_template/breadcumbs');
        $this->load->view('_template/nav');
        $this->load->view('_template/content');
        $this->load->view('_template/footer');
        $this->load->view('_template/js.php');
    }

}

/* End of file Controllername.php */

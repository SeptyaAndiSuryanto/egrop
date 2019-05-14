<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

    function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
        }
  }
    public function index()//Admin
    {
        if($this->session->userdata('role') === '01'){
            redirect('Dashboard');
        }else{
            redirect('login');
        }
    }

}

/* End of file Controllername.php */

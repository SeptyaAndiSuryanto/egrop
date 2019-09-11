<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controllername extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
            $this->load->model('operational_model');
    }
    
    private function add_swipe_only($swipe){

    }

}

/* End of file Controllername.php */

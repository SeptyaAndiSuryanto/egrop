<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

    function validate($username,$password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('user',1);
        return $result;
    }
}

/* End of file ModelName.php */

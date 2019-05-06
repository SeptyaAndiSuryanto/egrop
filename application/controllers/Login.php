<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }
    
    public function index()
    {
        $this->load->view('Login');   
    }

    function auth(){
        $username = $this->input->post('username',TRUE);
        $password = md5($this->input->post('password',TRUE));
        $validate = $this->Login_model->validate($username,$password);
        if($validate->num_rows()>0){
            $data = $validate->row_array();
            $username = $data['username'];
            $name = $data['name'];
            $nik = $data['nik'];
            $role = $data['role'];
            
            $session_data = array(
                'username' => $username,
                'name' => $name,
                'nik' => $nik,
                'role' => $role
            );
            $this->session->set_userdata( $session_data );
            if($role === "01"){
                echo "this is admin";
            }else{
                echo "this is user";
            }
        }else{
            echo $this->session->set_flashdata('msg','Username or Password is Wrong');
            redirect('Login','refresh');
        }
    }
}

/* End of file Controllername.php */

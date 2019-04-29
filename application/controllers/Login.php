<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        if($this->user->logged_id()){
            $this->load->view('1');
        }else{
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_message('required','<div class="alert alert-danger" style="margin-top: 3px">
                <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}<b> harus diisi</div></div>');

            if ($this->form_validation->run() == TRUE) {
                $username = $this->input->post('username', TRUE);
                $password = MD5($this->input->post('password', TRUE));
                $checking = $this->user->check_login('user',array('username' => $username), array('password' => $password));
                if($checking != FALSE){
                    foreach($checking as $apps){
                        $session_data = array(
                            'user_id' => $apps->id,
                            'user_name' => $apps->username,
                            'user_pass' => $apps->password,
                            'name' => $apps->name
                        );
                        $this->session->set_userdata( $session_data );
                        $this->load->view('1');
                    }
                }else {
                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('Login', $data);
                }
            } else{
                $this->load->view('Login');
            }
        }
    }

    function logout(){
        $this->session->sess_destroy();
        
        redirect('login');
        
    }
}

/* End of file Login.php */

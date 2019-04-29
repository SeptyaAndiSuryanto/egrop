<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('user');
    }

    public function index()
    {
        if($this->user->loged_id()){
            redirect('dashboard');
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
                            'user_id' => $apps->id_user,
                            'user_name' => $APPS->username,
                            'user_pass' => $apps->password,
                            'name' => $apps->name
                        );
                        $this->session->set_userdata( $session_data );
                        redirect('dashboard');
                    }
                }
            } else {
                $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                $this->load->view('login', $data);
            }
        }
    }
}

/* End of file Controllername.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Machine extends CI_Controller{
  function __construct(){
    parent:: __construct();
    $this->load->model('Machine_model');
    if($this->session->userdata('logged_in') !== TRUE){
        redirect('login');
    }
 }

  function index(){
    $data['machine'] = $this->Machine_model->get_machine_data();
    $data['count']= $this->Machine_model->get_machine_data()->num_rows();
    $this->load->view('_template/head');
    $this->load->view('_template/nav');
    $this->load->view('_machines/machine',$data);
    $this->load->view('_template/footer');
    $this->load->view('_template/js.php');
    // $this->load->view('machine',$data);
  }

  function add_machine(){
    $this->form_validation->set_rules('machine_name', 'Nama Mesin', 'required|trim');
    $this->form_validation->set_rules('machine_type', 'Jenis Mesin', 'required|trim');
    $this->form_validation->set_rules('machine_price', 'Harga mesin', 'required|trim');
    $this->form_validation->set_rules('machine_status', 'Status mesin', 'required|trim');

    if($this->form_validation->run()==false){
      $this->load->view('template');
    } else{
      $count = (int)$this->Machine_model->count_machine();
      $num = $count+1;
      $data = array(
        'id' => 'MCH'.$num,
        'name' => $this->input->post('machine_name'),
        'type' => $this->input->post('machine_type'),
        'price' => $this->input->post('machine_price'),
        'date_added' => date('y-m-d'),
        'status' => $this->input->post('machine_status')
      );
      $this->Machine_model->add_machine($data);
      redirect('machine');
    }
  }
}

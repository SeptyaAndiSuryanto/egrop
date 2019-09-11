<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operational extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('operational_model');
    $this->load->database();
  }                                                                                               

  function load_opr(){
    $this->load->model('operational_model');
    // $query = $this->operational_model->get_opr_data();
    $data_opr['opr'] = $this->operational_model->get_opr_data();
    return $data_opr;
  }

  function videogames_counter(){
    $this->form_validation->set_rules('id_machine','ID Machine','required|trim');
    $this->form_validation->set_rules('counter_swipe', 'Counter Swipe', 'required|trim');
     if($this->form_validation->run()==false){
       $this->load->view('template');
      } else{
      $data = array(
        'nik' => $this->session->userdata('nik'),
        'id_machines' => $this->input->post('id_machine'),
        'date' => date('y-m-d'),
        'swipe_start' => $this->input->post('counter_swipe'),
      );
      $this->operational_model->insert_counter($data);
      redirect('Operational/videogames');
    }
  }

  function tablegames_counter(){
    $this->form_validation->set_rules('id_machine','ID Machine','required|trim');
    $this->form_validation->set_rules('counter_swipe', 'Counter Swipe', 'required|trim');
     if($this->form_validation->run()==false){
       $this->load->view('template');
      } else{
      $data = array(
        'nik' => $this->session->userdata('nik'),
        'id_machines' => $this->input->post('id_machine'),
        'date' => date('y-m-d'),
        'swipe_start' => $this->input->post('counter_swipe'),
      );
      $this->operational_model->insert_counter($data);
      redirect('Operational/tablegames');
    }
  }

  function add_counter(){
    // $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    $this->form_validation->set_rules('id_machine', 'ID Machine', 'required|trim');
    $this->form_validation->set_rules('counter_swipe', 'Counter Swipe', 'required|trim');
    $this->form_validation->set_rules('counter_ticket', 'Counter Ticket', 'required|trim');

    if($this->form_validation->run()==false){
      $this->load->view('template');
    } else{
      $data = array(
        'nik' => $this->session->userdata('nik'),
        'id_machines' => $this->input->post('id_machine'),
        'date' => date('y-m-d'),
        'swipe_start' => $this->input->post('counter_swipe'),
        'ticket_start' => $this->input->post('counter_ticket')
      );
      $this->operational_model->insert_counter($data);
      redirect('Operational/redemption');
    }
  }

  function index(){
    $data['opr'] = $this->operational_model->get_opr_data();
    $data['count_added']= $this->operational_model->get_opr_data()->num_rows();
    $data['count_notadded']= $this->operational_model->get_machine_name()->num_rows();
    $this->load->view('template',$data);
  }

  function redemption(){
    $data['opr'] = $this->operational_model->get_opr_data();
    $data['count_added']= $this->operational_model->get_opr_data()->num_rows();
    $data['count_notadded']= $this->operational_model->get_machine_name()->num_rows();
    $this->load->view('_template/head');
    $this->load->view('_template/nav');
    $this->load->view('operational/redemption',$data);
    $this->load->view('_template/footer');
    $this->load->view('_template/js.php');
  }

  public function machine_autocomplete() {
    $json = array();
    if(!empty($this->input->get("q"))){
        $this->db->like('name', $this->input->get("q"));
        $name = $this->input->get("q");
        $query = $this->operational_model->get_machine_name($name);
        $json = $query->result();
    }
    echo json_encode($json);
  }
// Kiddie Rides
  function kiddierides(){
    $data['opr']=$this->operational_model->get_kiddierides_data();
    $data['count_added']= $this->operational_model->get_kiddierides_data()->num_rows();
    $data['count_notadded']= $this->operational_model->get_kiddierides_data()->num_rows();
    $this->load->view('_template/head');
    $this->load->view('_template/nav');
    $this->load->view('operational/kiddierides',$data);
    $this->load->view('_template/footer');
    $this->load->view('_template/js.php');
  }
  public function kiddierides_autocomplete() {
    $json = array();
    if(!empty($this->input->get("q"))){
        $this->db->like('name', $this->input->get("q"));
        $name = $this->input->get("q");
        $query = $this->operational_model->get_kiddierides_name($name);
        $json = $query->result();
    }
    echo json_encode($json);
  }

    function kiddierides_counter(){
    $this->form_validation->set_rules('id_machine','ID Machine','required|trim');
    $this->form_validation->set_rules('counter_swipe', 'Counter Swipe', 'required|trim');
     if($this->form_validation->run()==false){
       $this->load->view('template');
      } else{
      $data = array(
        'nik' => $this->session->userdata('nik'),
        'id_machines' => $this->input->post('id_machine'),
        'date' => date('y-m-d'),
        'swipe_start' => $this->input->post('counter_swipe'),
      );
      $this->operational_model->insert_counter($data);
      redirect('Operational/kiddierides');
    }
  }
}

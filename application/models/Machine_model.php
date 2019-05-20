<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Machine_model extends CI_Model{
  function __construct(){
    parent::__construct();
  }

  function get_machine_data(){
    $this->db->select('*');
    $this->db->from('machines');
    return $this->db->get();
  }

  function count_machine(){
    $this->db->select('id');
    $this->db->from('machines');
    $query=$this->db->get();
    return $query->num_rows();
  }

  function add_machine($data){
    $this->db->insert('machines', $data);
  }

  public function get_machine($keyword){
    $this->db->like('id', $keyword);
    $this->db->or_like('name', $keyword);
    $result=$this->db->get('machine')->result();
    return $result;
  }

  public function GetRow($keyword) {
    $this->db->select('name');
    $this->db->order_by('id', 'ASC');
    $this->db->like("name", $keyword);
    return $this->db->get('machines')->result();
    }

}

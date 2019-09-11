<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  /**
   *
   */
  class Operational_model extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }

    function get_opr_data(){
      // //query = select machines.name, machines.price, operational.swipe_start, operational.ticket_start from machines LEFT JOIN operational ON machines.id=operational.id_machines WHERE operational.date='2019-1-8'
      $today = date('Y-m-d');
      $this->db->select('machines.name as name, machines.price as price, operational.swipe_start as swipe, operational.ticket_start as ticket, user.first_name as employee');
      $this->db->from('operational');
      $this->db->join('machines', 'machines.id = operational.id_machines', 'left');
      $this->db->join('user','user.nik = operational.nik','left');
      $this->db->where('operational.date',$today);
      return $this->db->get();
    }

    function get_kiddierides_data(){
      //select machines.name, machines.price, operational.swipe_start, operational.ticket_start, operational.date from machines LEFT JOIN operational ON machines.id=operational.id_machines WHERE operational.date='2019-5-22' AND machines.type='Kiddie Rides' OR machines.type='Redemption'
      $today = date('Y-m-d');
      $this->db->select('machines.name as name, machines.price as price, operational.swipe_start as swipe, machines.type as type, user.first_name as employee');
      $this->db->from('operational');
      $this->db->join('machines', 'machines.id = operational.id_machines', 'left');
      $this->db->join('user','user.nik = operational.nik','left');
      $this->db->where('operational.date',$today);
      $this->db->where("(machines.type='Kiddie Rides')");
      $this->db->order_by('machines.type','asc');
      return $this->db->get();
    }
    function get_kiddierides_name(){
      $today = (string)date('Y-m-d');
      $this->db->select('machines.id as id, machines.name as name');
      $this->db->limit(10);
      $this->db->from('machines');
      $this->db->where("
        NOT EXISTS(
          SELECT *
          FROM operational
          WHERE operational.date = '".$today."' AND machines.id = operational.id_machines)");
      $this->db->where("(machines.type='Kiddie Rides')");
      return $query = $this->db->get();
    }

    function insert_counter($data){
      $this->db->insert('operational', $data);
    }

    function get_stuck_counter(){
      $yesterday = date('y-m-d', strtotime("-1 days"));
      // $this->db->select('machines.name as name, operational.swipe_start as swipe_start, operational.swipe_end as swipe end, operational.ticket_start as ticket_start, operational.ticket_end as ticket_end');
      // $this->db->from('machines');
      // $this->db->join('operational', 'machines.id = operational.id_machines', 'left');
      // $this->db->where('operational.date', $yesterday);
      // $this->db->get();
    }

    //SELECT machines.id as id, machines.name as name FROM machines WHERE NOT EXISTS (SELECT * FROM operational WHERE operational.date = '2019-3-7' AND machines.id = operational.id_machines)
    function get_machine_name(){
      $today = (string)date('Y-m-d');
      $this->db->select('machines.id as id, machines.name as name');
      $this->db->limit(10);
      $this->db->from('machines');
      $this->db->where('machines.type');
      $this->db->where("
        NOT EXISTS(
          SELECT *
          FROM operational
          WHERE operational.date = '".$today."' AND machines.id = operational.id_machines)");
      return $query = $this->db->get();
    }
  }

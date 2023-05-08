<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

  public function create_user($data)
  {
    return $this->db->insert('mst_users', $data);
  }

  // public function get_user_by_email($email)
  // {
  //   $this->db->where('email', $email);
  //   $query = $this->db->get('users');
  //   return $query->row();
  // }
  public function check_user($username)
  {
    $this->db->select('a.*');
    $this->db->from('mst_users a');
    $this->db->where("(a.username = '$username' OR a.nip = '$username' OR a.email = '$username')");
    $this->db->limit(1);
    $user = $this->db->get()->row();
    return $user;
  }
}

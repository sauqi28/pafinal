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
    $this->db->select('id, username, fullname, email, password, category, status, roles');
    $this->db->from('mst_users a');
    $this->db->group_start();
    $this->db->where('username', $username);
    $this->db->or_where('nip', $username);
    $this->db->or_where('email', $username);
    $this->db->group_end();
    $this->db->limit(1);
    $user = $this->db->get()->row();
    return $user;
  }
}

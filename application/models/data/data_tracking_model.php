<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_tracking_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function get_users_view($id = NULL)
  {
    $this->db->select('a.*, b.*, c.*, d.*');
    $this->db->from('tb_sn a');
    $this->db->join('tb_history_insert b', 'a.id_insert = b.id_insert');
    $this->db->join('tb_file_path c', 'c.id_insert = b.id_insert');
    $this->db->join('master_machine d', 'c.idmachine = d.IdMachine');
    $this->db->where('a.id', $id);
    $query = $this->db->get();
    $user_additional_info = $query->row_array();

    return $user_additional_info;
  }


  public function get_users($search = NULL)
  {
    if ($search == NULL) {
      return [];
    }
    $this->db->select('*');
    $this->db->from('tb_sn');

    if ($search) {
      $this->db->like('Number', $search);  // Mengubah where menjadi like untuk pencarian
    }

    $query = $this->db->get();
    return $query->result_array();
  }




  public function get_users_count($search = NULL)
  {
    if ($search == NULL) {
      return 0;
    } else {
      $this->db->select('*');
      $this->db->from('tb_sn');

      if ($search) {
        $this->db->where('Number', $search);
      }
      $query = $this->db->get();
      return $query->num_rows();
    }
  }

  public function get_users_count_nonaktif($search)
  {
    $this->db->select('a.*');
    $this->db->from('mst_users a');
    $this->db->join('mst_user_position b', 'a.position = b.id', 'left');
    $this->db->join('mst_user_role c', 'a.role = c.id', 'left');
    $this->db->join('mst_user_category cat', 'a.category = cat.id', 'left');
    if ($search) {
      $this->db->like('a.fullname', $search);
      $this->db->or_like('a.email', $search);
      $this->db->or_like('a.username', $search);
      $this->db->or_like('a.nip', $search);
      $this->db->or_like('b.position_name', $search);
      $this->db->or_like('c.role_name', $search);
      $this->db->or_like('cat.category_name', $search);
    }
    $this->db->where('a.status', "inactive");
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function create_user()
  {
    $data = array(
      'nip' => trim($this->input->post('nip')),
      'username' => trim($this->input->post('username')),
      'fullname' => $this->input->post('fullname'),
      'position' => $this->input->post('position'),
      'email' => $this->input->post('email'),
      'no_wa' => $this->input->post('no_wa'),
      'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'role' => $this->input->post('role'),
      'category' => $this->input->post('kategori'),
      'created_at' => date('Y-m-d H:i:s'),
      'status' => "active",
      'vendor' => ($this->input->post('pilihvendor')) ? $this->input->post('pilihvendor') : 0
    );

    return $this->db->insert('mst_users', $data);
  }

  public function insert_wa_token($user_id, $wa_token)
  {
    $data = array(
      'wa_token' => $wa_token,
      'token_wa_created' => date('Y-m-d H:i:s')
    );
    $this->db->where('id', $user_id);
    $this->db->update('mst_users', $data);
  }

  public function insert_signature_token($user_id, $signature_token)
  {
    $data = array(
      'signature_token' => $signature_token,
      'token_signature_created' => date('Y-m-d H:i:s')
    );
    $this->db->where('id', $user_id);
    $this->db->update('mst_users', $data);
  }

  public function update_user($id)
  {
    $new_no_wa = $this->input->post('no_wa');

    // Ambil no_wa yang ada saat ini di database
    $this->db->select('no_wa');
    $this->db->where('id', $id);
    $current_no_wa = $this->db->get('mst_users')->row()->no_wa;

    $data = array(
      'nip' => trim($this->input->post('nip')),
      'username' => trim($this->input->post('username')),
      'fullname' => $this->input->post('fullname'),
      'position' => $this->input->post('position'),
      'email' => trim($this->input->post('email')),
      'role' => $this->input->post('role'),
      'no_wa' => $new_no_wa,
      'category' => $this->input->post('kategori'),
      'vendor' => ($this->input->post('pilihvendor')) ? $this->input->post('pilihvendor') : 0
    );

    // Jika no_wa baru berbeda dengan yang ada di database, set verified_wa menjadi 0
    if ($new_no_wa != $current_no_wa) {
      $data['verified_wa'] = 0;
    }

    if (!empty($this->input->post('password'))) {
      $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
    }

    $this->db->where('id', $id);
    return $this->db->update('mst_users', $data);
  }

  public function get_vendor_options()
  {
    $vendor_options = $this->db->select('id, vendor_name as name')->from('mst_vendors')->get()->result_array();
    return $vendor_options;
  }
  public function get_user($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('mst_users');
    return $query->row();
  }

  public function update_status($id, $status)
  {
    $data = array(
      'status' => $status
    );
    $this->db->where('id', $id);
    return $this->db->update('mst_users', $data);
  }



  public function get_all_positions()
  {
    $query = $this->db->get('mst_user_position');
    return $query->result();
  }
  public function get_all_category()
  {
    $query = $this->db->get('mst_user_category');
    return $query->result();
  }

  public function get_all_roles()
  {
    $query = $this->db->get('mst_user_role');
    return $query->result();
  }
}

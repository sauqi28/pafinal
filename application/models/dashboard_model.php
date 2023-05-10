<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
  public function grafik1()
  {
    $query = $this->db->query("SELECT sum(tot) as total_data, month(report_date) as bulan, year(report_date) as tahun FROM report_1 WHERE tot IS NOT NULL GROUP BY month(report_date), year(report_date)");
    $result = $query->result_array();
    foreach ($result as &$row) {
      $row['report_date'] = date("F/y", strtotime($row['tahun'] . '-' . $row['bulan'] . '-01'));
    }
    return $result;
  }
  public function grafik2()
  {
    $this->db->select_sum('tot', 'total_data');
    $this->db->select("YEAR(report_date) AS tahun");
    $this->db->where("report_date IS NOT NULL");
    $this->db->where("tot IS NOT NULL");
    $this->db->group_by("YEAR(report_date)");
    $this->db->order_by("YEAR(report_date)", "ASC");
    $query = $this->db->get('report_1');
    return $query->result_array();
  }

  public function total_mesin()
  {
    $query = $this->db->query('SELECT COUNT(*) as jumlah from master_machine');
    return $query->row()->jumlah;
  }
  public function total_po()
  {
    $query = $this->db->query('SELECT COUNT(*) as jumlah from tb_file_path');
    return $query->row()->jumlah;
  }
  public function total_data()
  {
    $query = $this->db->query('SELECT tot as jumlah from report_2');
    return $query->row()->jumlah;
  }
  public function raw_data()
  {
    $query = $this->db->query('select sum(file_size)/1000000000 as size from tb_file_path');
    return $query->row()->size;
  }
}

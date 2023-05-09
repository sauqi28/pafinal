<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
  public function grafik1()
  {
    $query = $this->db->query("SELECT sum(tot) as total_data, month(report_date) as bulan, year(report_date) as tahun FROM report_1 WHERE tot IS NOT NULL GROUP BY month(report_date), year(report_date) ORDER BY year(report_date) ASC, month(report_date) ASC");
    $result = $query->result_array();
    foreach ($result as &$row) {
      $row['bulan'] = date("M", strtotime('2000-' . $row['bulan'] . '-01'));
      $row['tahun'] = $row['tahun'];
      $row['report_date'] = $row['bulan'] . '/' . $row['tahun'];
      $row['total_data'] = $row['total_data'] / 1000000;
    }
    return $result;
  }
}

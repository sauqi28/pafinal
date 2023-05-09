<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
  public function grafik1()
  {
    $query = $this->db->query("SELECT sum(tot) as total_data, month(report_date) as bulan, year(report_date) as tahun FROM report_1 WHERE tot IS NOT NULL  GROUP BY month(report_date), year(report_date)");
    $result = $query->result_array();
    foreach ($result as &$row) {
      $row['report_date'] = date("M/y", strtotime($row['bulan'] . "/01/" . $row['tahun']));
    }
    return $result;
  }
}

<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
  public function grafik1()
  {
    $query = $this->db->query("SELECT sum(tot) as total_data, month(report_date) as bulan, year(report_date) as tahun FROM report_1 WHERE tot IS NOT NULL AND year(report_date) = 2023 GROUP BY month(report_date), year(report_date)");
    $result = $query->result_array();
    foreach ($result as &$row) {
      $row['bulan'] = date("M/y", strtotime($row['bulan'] . "/" . $row['tahun']));
    }
    return $result;
  }
}

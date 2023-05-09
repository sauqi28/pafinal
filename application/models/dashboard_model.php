<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
  public function grafik1()
  {
    $query = $this->db->query("SELECT sum(tot) as total_data, report_date FROM report_1 WHERE tot IS NOT NULL AND year(report_date) = 2023 GROUP BY month(report_date)");
    $result = $query->result_array();
    foreach ($result as &$row) {
      $row['report_date'] = date("M/y", strtotime($row['report_date']));
    }
    return $result;
  }
}

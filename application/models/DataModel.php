<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class DataModel extends CI_Model
{

  function getMainList(){
    $rows = $this->db->query("select * from main")->result();
    return $rows;
  }

  function getSubMainTableList($main)
  {
    // Select record
    $rows = $this->db->query("select * from iku
    where main='$main'")->result();
    return $rows;
  }
}

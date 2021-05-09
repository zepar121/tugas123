<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class DataModel extends CI_Model
{

  function getMainList(){
    $rows = $this->db->query("select * from main")->result();
    return $rows;
  }
}

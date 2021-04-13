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
    $rows = $this->db->query("select iku.id as id_iku, iku.main, iku.sub, iku.nama_iku, tabel.id as id_tabel, tabel.judul_tabel from iku
    INNER JOIN
    referensi_tabel AS RT
    ON iku.id = RT.id_iku
    INNER JOIN tabel
    ON RT.id_tabel = tabel.id
    where main='$main'
    group by id_iku")->result();
    return $rows;
  }
}

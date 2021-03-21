<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PageModel extends CI_Model
{

  function getMain($main)
  {
    // Select record
    $row = $this->db->get_where('nko', array('main' => $main))->row();
    return $row;
  }

  function getMains()
  {
  }

  function getSub($main, $sub)
  {
    // Select record
    $row = $this->db->get_where('iku', array('main' => $main, 'sub' => $sub))->row();

    return $row;
  }

  function getSubs($main)
  {
    $rows = $this->db->get_where('iku', array('main' => $main))->result();
    return $rows;
  }

  function getTabel($main, $sub)
  {
    $row = $this->db->get_where('iku', array('main' => $main, 'sub' => $sub))->row();

    $row = $this->db->get_where('referensi_tabel', array('id_iku' => $row->id))->row();

    $row = $this->db->get_where('tabel', array('id' => $row->id_tabel))->row();

    $explode_target = explode("#", $row->target);
    $explode_realisasi = explode("#", $row->realisasi);
    $explode_capaian = explode("#", $row->capaian);

    $data_tabel = array(
      "judul_tabel" => $row->judul_tabel,
      "target" => array(
        "Q1" => $explode_target[0],
        "Q2" => $explode_target[1],
        "Q3" => $explode_target[2],
        "Q4" => $explode_target[3]
      ),
      "realisasi" => array(
        "Q1" => $explode_realisasi[0],
        "Q2" => $explode_realisasi[1],
        "Q3" => $explode_realisasi[2],
        "Q4" => $explode_realisasi[3]
      ),
      "capaian" => array(
        "Q1" => $explode_capaian[0],
        "Q2" => $explode_capaian[1],
        "Q3" => $explode_capaian[2],
        "Q4" => $explode_capaian[3]
      )
    );

    return $data_tabel;
  }
}
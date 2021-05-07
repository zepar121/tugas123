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
    $rows = $this->db->query("SELECT * FROM iku
    INNER JOIN (
      SELECT id_iku, main_iku, id_tabel FROM referensi_tabel GROUP BY id_iku
    ) rt ON iku.id = rt.id_iku
    INNER JOIN tabel t ON rt.id_tabel = t.id 
    WHERE iku.main='$main'")->result();
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

  function getTabelList($main, $sub)
  {
    $row = $this->db->get_where('iku', array('main' => $main, 'sub' => $sub))->row();

    $tabel_list = array();
    $results = $this->db->query("select RT.*, tabel.* from referensi_tabel as RT 
    INNER JOIN tabel
    ON RT.id_tabel = tabel.id
    where RT.id_iku = $row->id")->result();

    foreach ($results as $row) {
      $explode_target = explode("#", $row->target);
      $explode_realisasi = explode("#", $row->realisasi);
      $explode_capaian = explode("#", $row->capaian);

      $data_tabel = array(
        "judul_tabel" => $row->judul_tabel,
        "main_iku" => $row->main_iku,
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

      array_push($tabel_list, $data_tabel);
    }

    return $tabel_list;
  }

  function getV2Pair($main, $sub)
  {
    $row = $this->db->get_where('iku', array('main' => $main, 'sub' => $sub))->row();
    $v2_pairs = $row->v2_pairs;
    $explode_v2_pairs = explode("#", $v2_pairs);

    if ($v2_pairs == ""){
      return array();
    }

    $where = array();
    foreach ($explode_v2_pairs as $item) {
      array_push($where, "iku.sub='" . explode("-", $item)[1] . "'");
    }
    $where = join(" OR ", $where);

    $tabel_list = array();
    $results = $this->db->query("SELECT * FROM iku
    INNER JOIN (
      SELECT id_iku, main_iku, id_tabel FROM referensi_tabel GROUP BY id_iku
    ) rt ON iku.id = rt.id_iku
    INNER JOIN tabel t ON rt.id_tabel = t.id 
    WHERE $where")->result();

    foreach ($results as $row) {
      $explode_target = explode("#", $row->target);
      $explode_realisasi = explode("#", $row->realisasi);
      $explode_capaian = explode("#", $row->capaian);

      $data_tabel = array(
        "judul_tabel" => $row->judul_tabel,
        "sub" => $row->sub,
        "main_iku" => $row->main_iku,
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

      array_push($tabel_list, $data_tabel);
    }

    return $tabel_list;
  }
}

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ProcessModel extends CI_Model
{

	function add($data)
	{
		$this->db->insert('iku', $data);

		// returning inserted id
		return ($this->db->trans_status()) ? $this->db->insert_id() : false;
	}

	function addTabelLain($id_iku, $tabel_lain_list)
	{
		foreach ($tabel_lain_list as $item) {
			$id_tabel = $item["id_tabel"];
			$main_iku = $item["main"];

			$data = array(
				"id_iku" => $id_iku,
				"id_tabel" => $id_tabel,
				"main_iku" => $main_iku
			);
			$this->db->insert('referensi_tabel', $data);
		}
	}

	function updateV2Pair($id_iku, $tabel_lain_list)
	{
		$combine = array();

		foreach ($tabel_lain_list["main"] as $key => $value){
			array_push($combine, $tabel_lain_list["main"][$key] . "-" . $tabel_lain_list["sub"][$key]);
		}

		$value = join("#", $combine);

		$this->db->where('id', $id_iku);
		$data = array(
			"v2_pairs" => $value
		);
		$this->db->update("iku", $data);

		return 1;
	}

	function updateTabelLain($id_iku, $tabel_lain_list)
	{
		$rows = $this->db->query("select * from referensi_tabel where id_iku=$id_iku")->result();

		// Jangan ubah ubah tabelnya sendiri di row 1
		array_shift($rows);

		foreach ($rows as $row) {
			if (count($tabel_lain_list) > 0) {
				$first = array_shift($tabel_lain_list);
				$id_tabel = $first["id_tabel"];
				$main_iku = $first["main"];

				$this->db->where('id', $row->id);
				$data = array(
					"id_tabel" => $id_tabel,
					"main_iku" => $main_iku
				);
				$this->db->update("referensi_tabel", $data);
			} else {
				// Enggak dihapus, cuma dikosongkan aja
				$this->db->where('id', $row->id);
				$data = array(
					"id_tabel" => "-1",
					"main_iku" => "-1"
				);
				$this->db->update("referensi_tabel", $data);
			}
		}

		foreach ($tabel_lain_list as $item) {
			$id_tabel = $item["id_tabel"];
			$main_iku = $item["main"];

			$data = array(
				"id_iku" => $id_iku,
				"id_tabel" => $id_tabel,
				"main_iku" => $main_iku
			);
			$this->db->insert('referensi_tabel', $data);
		}

		return 1;
	}

	function addTabel($id_iku, $judul_tabel, $data_tabel)
	{

		$data = array(
			"judul_tabel" => $judul_tabel,
			"target" => $data_tabel["target"]["Q1"] . "#" . $data_tabel["target"]["Q2"] . "#" . $data_tabel["target"]["Q3"] . "#" . $data_tabel["target"]["Q4"],
			"realisasi" => $data_tabel["realisasi"]["Q1"] . "#" . $data_tabel["realisasi"]["Q2"] . "#" . $data_tabel["realisasi"]["Q3"] . "#" . $data_tabel["realisasi"]["Q4"],
			"capaian" => $data_tabel["capaian"]["Q1"] . "#" . $data_tabel["capaian"]["Q2"] . "#" . $data_tabel["capaian"]["Q3"] . "#" . $data_tabel["capaian"]["Q4"]
		);
		$this->db->insert('tabel', $data);

		$inserted_id = ($this->db->trans_status()) ? $this->db->insert_id() : false;
		$row = $this->db->get_where('iku', array('id' => $id_iku))->row();
		$main_iku = $row->main;

		$data = array(
			"id_iku" => $id_iku,
			"id_tabel" => $inserted_id,
			"main_iku" => $main_iku
		);
		$this->db->insert('referensi_tabel', $data);

		// returning inserted id
		return $inserted_id;
	}

	function updateTabel($id_iku, $judul_tabel, $data_tabel)
	{
		$row = $this->db->get_where('referensi_tabel', array('id_iku' => $id_iku))->row();

		$this->db->where('id', $row->id_tabel);

		$data = array(
			"judul_tabel" => $judul_tabel,
			"target" => $data_tabel["target"]["Q1"] . "#" . $data_tabel["target"]["Q2"] . "#" . $data_tabel["target"]["Q3"] . "#" . $data_tabel["target"]["Q4"],
			"realisasi" => $data_tabel["realisasi"]["Q1"] . "#" . $data_tabel["realisasi"]["Q2"] . "#" . $data_tabel["realisasi"]["Q3"] . "#" . $data_tabel["realisasi"]["Q4"],
			"capaian" => $data_tabel["capaian"]["Q1"] . "#" . $data_tabel["capaian"]["Q2"] . "#" . $data_tabel["capaian"]["Q3"] . "#" . $data_tabel["capaian"]["Q4"]
		);

		if ($this->db->update('tabel', $data)) {
			return 1;
		} else {
			return 0;
		}
	}

	function update($data, $id)
	{

		$this->db->where('id', $id);

		if ($this->db->update("iku", $data)) {
			return 1;
		} else {
			return 0;
		}
	}
}

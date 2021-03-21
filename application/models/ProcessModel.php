<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ProcessModel extends CI_Model
{

	function add($data)
	{
		$this->db->insert('iku', $data);

		// returning inserted id
		return ($this->db->trans_status()) ? $this->db->insert_id() : false;
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

		$data = array(
			"id_iku" => $id_iku,
			"id_tabel" => $inserted_id
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

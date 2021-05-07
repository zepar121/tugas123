<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller {

	public function __construct(){
		parent::__construct();

		// Load model
		$this->load->model('ProcessModel');
	}

	public function sub_main_add(){
		$data = array();

		$judul_tabel = $_POST["judul_tabel"];
		$data_tabel = $_POST["tabel"];
		$tabel_lain = $_POST["tabel_lain"] ?? array();
		
		unset($_POST["judul_tabel"]);
		unset($_POST["tabel"]);
		unset($_POST["files"]);
		if (isset($_POST["tabel_lain"])) unset($_POST["tabel_lain"]);

		$inserted_id_iku = $this->ProcessModel->add($_POST);
		$this->ProcessModel->addTabel($inserted_id_iku, $judul_tabel, $data_tabel);
		$this->ProcessModel->addTabelLain($inserted_id_iku, $tabel_lain);
		
		$data["success"] = true;
		$data["message"] = "Data berhasil ditambah";

		echo json_encode($data);
	}

	public function sub_main_update(){
		$data = array();

		$tabel_lain = $_POST["tabel_lain"] ?? array();

		if (isset($_POST["tabel_lain"])) unset($_POST["tabel_lain"]);

		$id = $_POST["id"];
		unset($_POST["id"]);

		$isSuccess = $this->ProcessModel->updateV2Pair($id, $tabel_lain);

		if ($isSuccess){
			$data["success"] = true;
			$data["message"] = "Data berhasil diubah";
		}

		echo json_encode($data);
	}

}

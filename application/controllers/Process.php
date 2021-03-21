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
		
		unset($_POST["judul_tabel"]);
		unset($_POST["tabel"]);
		unset($_POST["files"]);

		$inserted_id_iku = $this->ProcessModel->add($_POST);
		$this->ProcessModel->addTabel($inserted_id_iku, $judul_tabel, $data_tabel);
		
		$data["success"] = true;
		$data["message"] = "Data berhasil ditambah";

		echo json_encode($data);
	}

	public function sub_main_update(){
		$data = array();

		$judul_tabel = $_POST["judul_tabel"];
		$data_tabel = $_POST["tabel"];
		
		unset($_POST["judul_tabel"]);
		unset($_POST["tabel"]);
		unset($_POST["files"]);

		$id = $_POST["id"];
		unset($_POST["id"]);

		$isSuccess = $this->ProcessModel->update($_POST, $id);
		$this->ProcessModel->updateTabel($id, $judul_tabel, $data_tabel);

		if ($isSuccess){
			$data["success"] = true;
			$data["message"] = "Data berhasil diubah";
		}

		echo json_encode($data);
	}

}

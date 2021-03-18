<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller {

	public function __construct(){
		parent::__construct();

		// Load model
		$this->load->model('ProcessModel');
	}

	public function sub_main_add(){
		unset($_POST["files"]);

		$inserted_id = $this->ProcessModel->add($_POST);

		echo "Data berhasil ditambah";

		header("refresh:2; url=" . base_url($_POST['main']));
	}

	public function sub_main_update(){
		unset($_POST["files"]);
		unset($_POST["id"]);

		$isSuccess = $this->ProcessModel->update($_POST, $id);

		if ($isSuccess){
			echo "Data berhasil diubah";
			header("refresh:2; url=" . base_url($_POST['main']));
		}
	}

}

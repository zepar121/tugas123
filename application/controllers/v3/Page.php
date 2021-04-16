<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Page extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		// Load model
		$this->load->model("PageModel");
	}

	public function index()
	{
		$this->load->view("base/header");
		$this->load->view("base/sidebar");
		$this->load->view("v3/dashboard");
		$this->load->view("base/v3/footer");
	}

	public function main($id)
	{
		$this->load->view("base/header");
		$this->load->view("base/sidebar");

		if ($id == "create") {

			// Create
			$this->load->view("v3/main/create");
		} else if ($id == "update") {

			$this->load->view("v3/sub_main/update");
		} else {

			// Read
			$rows = $this->PageModel->getSubs($id);
			$data = array(
				"rows" => $rows,
				"main" => $id
			);
			$this->load->view("v3/main/sub_list", $data);
			$this->load->view("base/v3/footer");
		}
	}

	public function sub($main, $sub)
	{
		$this->load->view("base/header");
		$this->load->view("base/sidebar");

		if ($sub == "create") {

			// Create
			$data = array("main" => $main);
			$this->load->view("v3/sub_main/create", $data);
			
		} else {

			// Read
			$row = $this->PageModel->getSub($main, $sub);
			$tabel_list = $this->PageModel->getTabelList($main, $sub);

			$data = array(
				"row" => $row,
				"tabel_list" => $tabel_list
			);

			$this->load->view("v3/sub_main/read", $data);
			$this->load->view("base/v3/footer");
		}
	}

	public function main_update($main)
	{
		$this->load->view("base/header");
		$this->load->view("base/sidebar");

		$row = $this->PageModel->getMain($main);
		$data = array(
			"row" => $row
		);
		$this->load->view("v3/main/update", $data);
	}

	public function sub_update($main, $sub)
	{
		$this->load->view("base/header");
		$this->load->view("base/sidebar");

		$row = $this->PageModel->getSub($main, $sub);
		$data_tabel = $this->PageModel->getTabel($main, $sub);
		$tabel_list = $this->PageModel->getTabelList($main, $sub);
		array_shift($tabel_list);

		$data = array(
			"row" => $row,
			"data_tabel" => $data_tabel,
			"tabel_list" => $tabel_list
		);

		$this->load->view("v3/sub_main/update", $data);
	}
}

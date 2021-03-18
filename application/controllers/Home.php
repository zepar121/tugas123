<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

		// Load model
		$this->load->model('HomeModel');
	}

	public function index()
	{
		$this->load->view('base/header');
		$this->load->view('base/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('base/footer');
	}

	public function main($id){
		$this->load->view('base/header');
		$this->load->view('base/sidebar');

		if ($id == "create"){

			$this->load->view('main/create');

		} else if ($id == "update"){

			$this->load->view('sub_main/update');

		} else {

			$rows = $this->HomeModel->getSubs($id);
			$data = array(
			    'rows' => $rows,
			    'main' => $id
			);
			$this->load->view("main/sub_list", $data);
			$this->load->view('base/footer');
		}
	}

	public function sub($main, $sub){
		$this->load->view('base/header');
		$this->load->view('base/sidebar');

		if ($sub == "create"){

			$data = array("main" => $main);
			$this->load->view('sub_main/create', $data);

		} else {

			$row = $this->HomeModel->getSub($main, $sub);
			$data = array(
			    'row' => $row
			);

			$this->load->view('sub_main/read', $data);
			$this->load->view('base/footer');
		}
	}

	public function sub_update($main, $sub){
		$this->load->view('base/header');
		$this->load->view('base/sidebar');

		$row = $this->HomeModel->getSub($main, $sub);
		$data = array(
		    'row' => $row
		);
		$this->load->view('sub_main/update', $data);
	}

}

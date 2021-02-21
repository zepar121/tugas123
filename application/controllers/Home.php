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
		$this->load->view("admin/$id");
		$this->load->view('base/footer');
	}

	public function sub($main, $sub){
		$this->load->view('base/header');
		$this->load->view('base/sidebar');

		// $this->load->view("admin/$main/$id");

		$content = $this->HomeModel->getSub($main, $sub);
		$data = array(
		    'content' => $content
		);

		$this->load->view('admin/sub', $data);
		$this->load->view('base/footer');
	}

}

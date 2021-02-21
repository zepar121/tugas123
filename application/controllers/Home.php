<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('base/header');
		$this->load->view('base/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('base/footer');
	}

	public function nko2018()
	{
		$this->load->view('base/header');
		$this->load->view('base/sidebar');
		$this->load->view('admin/nko2018');
		$this->load->view('base/footer');
	}

	public function iku1a19()
	{
		$this->load->view('base/header');
		$this->load->view('base/sidebar');
		$this->load->view('admin/iku1a19');
		$this->load->view('base/footer');
	}

	public function nko2020()
	{
		$this->load->view('base/header');
		$this->load->view('base/sidebar');
		$this->load->view('admin/nko2020');
		$this->load->view('base/footer');
	}
	public function nko2021()
	{
		$this->load->view('base/header');
		$this->load->view('base/sidebar');
		$this->load->view('admin/nko2021');
		$this->load->view('base/footer');
	}
}

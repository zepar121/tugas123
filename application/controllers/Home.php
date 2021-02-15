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

	public function nko()
	{
		$this->load->view('base/header');
		$this->load->view('base/sidebar');
		$this->load->view('admin/nko');
		$this->load->view('base/footer');

		// Ini komentar
	}
}

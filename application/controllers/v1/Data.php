<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Data extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		// Load model
		$this->load->model('DataModel');
	}

    public function getMainList(){
        $results = $this->DataModel->getMainList();
        header('Content-Type: application/json');
        echo json_encode($results, JSON_PRETTY_PRINT);
    }

    public function getSubMainTableList($main){
        $results = $this->DataModel->getSubMainTableList($main);
        header('Content-Type: application/json');
        echo json_encode($results, JSON_PRETTY_PRINT);
    }
    
}

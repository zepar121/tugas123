<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->is_logged_in()){
            redirect(base_url("login"));
        }
    }

    public function is_logged_in()
    {
        $this->load->library('session');
        $user = $this->session->userdata('user_data');
        return isset($user);
    }
}
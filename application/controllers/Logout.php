<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("UserModel");
    }

    public function do_logout()
    {
        $this->load->library('session');
        $this->session->unset_userdata("user_data", "logged_in");
        redirect(base_url());
    }
}

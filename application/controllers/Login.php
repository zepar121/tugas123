<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("UserModel");
    }

    public function index()
    {
        $this->load->view("login");
    }

    public function do_login()
    {
        $no_pegawai = $_POST["no_pegawai"];
        $password = $_POST["password"];

        $isUserExists = $this->UserModel->auth($no_pegawai, $password);

        $data = array();

        if ($isUserExists) {
            $data["success"] = true;
            $data["message"] = "Berhasil login!";

            $this->load->library('session');
            $this->session->set_userdata("user_data", "logged_in");
        } else {
            $data["success"] = false;
            $data["message"] = "Gagal login!";
        }

        echo json_encode($data);
    }
}

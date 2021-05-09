<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("UserModel");
    }

    public function index()
    {
        $this->load->view("register");
    }

    public function do_register()
    {
        $no_pegawai = $_POST["no_pegawai"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];

        $data = array();
        $isValid = true;

        if ($password != $password2) {
            $isValid = false;
            $data["success"] = false;
            $data["message"] = "Password tidak sama !";
        } else if (empty($no_pegawai) || empty($password) || empty($password2)) {
            $isValid = false;
            $data["success"] = false;
            $data["message"] = "Harap isi semua inputan !";
        } else if ($this->UserModel->is_user_exist($no_pegawai)) {
            $isValid = false;
            $data["success"] = false;
            $data["message"] = "User dengan no pegawai tersebut sudah terdaftar !";
        }

        if ($isValid) {
            $isSuccess = $this->UserModel->register($no_pegawai, $password, $password2);
            if ($isSuccess) {
                $data["success"] = true;
                $data["message"] = "Berhasil mendaftar !";
            } else {
                $data["success"] = false;
                $data["message"] = "Gagal mendaftar !";
            }
        }

        echo json_encode($data);
    }
}

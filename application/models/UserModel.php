<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{

    public function auth($no_pegawai, $password)
    {
        $row = $this->db->get_where('user', array('no_pegawai' => $no_pegawai, 'password' => $password))->row();

        if ($row != null){
            return true;
        } else {
            return false;
        }
    }

    public function is_user_exist($no_pegawai)
    {
        $row = $this->db->get_where('user', array('no_pegawai' => $no_pegawai))->row();

        if ($row != null){
            return true;
        } else {
            return false;
        }
    }

    public function register($no_pegawai, $password){
        $data = array(
			"no_pegawai" => $no_pegawai,
			"password" => $password,
		);
		$this->db->insert('user', $data);

		$inserted_id = ($this->db->trans_status()) ? $this->db->insert_id() : false;
        return $inserted_id;
    }
}

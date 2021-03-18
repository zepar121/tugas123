<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProcessModel extends CI_Model {

  function add($data){

	$this->db->insert('iku', $data);

	// returning inserted id
	return ($this->db->trans_status()) ? $this->db->insert_id() : false;
 
  }

  function update($data, $id){

	$this->db->where('id', $id);
	
	if ($this->db->update("iku", $data)){
		return 1;
	} else {
		return 0;
	}

  }

}
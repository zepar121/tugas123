<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeModel extends CI_Model {

  function getSub($main, $sub){
 
    // Select record
    $row = $this->db->get_where('iku', array('main' => $main, 'sub' => $sub))->row();

    return $row;
  }

  function getSubs($main){
  	$rows = $this->db->get_where('iku', array('main' => $main))->result();
  	return $rows;
  }

}
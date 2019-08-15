<?php

/**
* 
*/
class Praktikum extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function tambahdata($data){
		$this->db->insert('praktikan', $data);
	}
}

?>
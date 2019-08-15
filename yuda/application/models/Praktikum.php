<?php 

/**
* 
*/
class Praktikum extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		# code...
	}
	public function tambahdata($data){
		$this->db->insert('mhs', $data);
	}


}



 ?>
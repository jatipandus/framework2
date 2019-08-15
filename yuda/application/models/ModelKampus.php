<?php 

/**
* 
*/
class ModelKampus extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function masuk($value)
	{
		$this->db->insert('kelas',$value);
	}
}

 ?>
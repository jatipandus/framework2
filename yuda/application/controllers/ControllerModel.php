<?php 

/**
* 
*/
class ControllerModel extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Praktikum');

		# code...
	}
	public function input()
	{
		$mhs['nim']="1500018112";
		$mhs['nama']="yuda";
		$mhs['alamat']="Jogja";
		# code...
			$this->Praktikum->tambahdata($mhs);
	}


}




 ?>
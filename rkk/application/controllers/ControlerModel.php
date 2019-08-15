<?php

/**
* 
*/
class ControlerModel extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->Model('Praktikum');
	}
	public function input(){
		$plg['nim'] = "1500018127";
		$plg['nama'] = "raka";
	

		$this->Praktikum->tambahdata($plg);
	}
}

?>
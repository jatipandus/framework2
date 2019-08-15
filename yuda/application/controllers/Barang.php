<?php 

/**
* 
*/
class Barang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		# code...
	}
	public function index()
	{

		$data['nama_barang'] = array("Baju", "Celana", "Topi");
		$data['harga'] = array(1000,2000,3000);
		$data['jumlah'] = array(10,20,30);
		# code...
		$this->load->view('tampil_beli' ,$data);
	}
}

 ?>
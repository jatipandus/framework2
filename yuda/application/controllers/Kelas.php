<?php 
/**
* 
*/
class Kelas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('modelkampus');

	}

	public function index()
	{
		$this->load->view('form_kelas');
	}

	public function terima_data()
	{
		$x= $this->input->post('nama');
		$y= $this->input->post('kapasitas');
		

		$data['nama_kelas'] = $x;
		$data['kapasitas_kelas'] = $y;
		$this->modelkampus->masuk($data);
		
	}
}

 ?>
<?php

class Apaya extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
		# code...
		echo "hey firman";
	}
	public function tsani($nim="152",$nama="tsani")
	{
		# code...
		echo "hay sani"."<br>";
		echo "nama saya =".$nama."<br>";
		echo "nik saya =".$nim."<br>";
	}
	public function soni($nim,$nama,$judul)
	{
		# code...
		echo "hay praktikan".$judul."<br>";
		echo "nama saya =".$nama."<br>";
		echo "nik saya =".$nim."<br>";
	}
}
?>
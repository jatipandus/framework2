<?php 
/**
* 
*/
class Total  
{
	var $totalharga;
	function __construct()
	{
		$this->totalharga = 0;

	}

	public function hasil($harga, $jumlah)
	{
		$this->totalharga = $harga*$jumlah;
		return $this->totalharga;
		# code...
	}
}

 ?>
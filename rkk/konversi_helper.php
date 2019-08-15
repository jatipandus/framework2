<?php 

function rupiah($value)
{
	$ubah = 'Rp '.$value.',00,-';
	return $ubah;
}

function dollar($value)
{
	$dollar = '$'.$value/10000;
	return $dollar;
}

 ?>
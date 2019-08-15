<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="2">
	<tr>
		<td>No.</td>
		<td>Nama Barang</td>
		<td>Harga Barang</td>
		<td>Dollar</td>
	</tr>

	<?php 
	for ($i=1; $i <= 5; $i++) { 
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo "Barang Ke -".$i; ?></td>
		<td><?php echo rupiah($i*1000) ; ?></td>
		<td><?php echo dollar($i*1000); ?></td>
	</tr>	

<?php	}
	 ?>
</table>


</body>
</html>
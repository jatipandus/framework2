<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

	<table border="2">
		<tr>
			<td>Nama Barang</td>
			<td>Harga Satuan</td>
			<td>Jumlah Beli</td>
			<td>Total Harga</td>
		</tr>
	
	<?php 
	for ($i=0; $i < count($nama_barang); $i++) { 
		?>
		<tr>
			<td><?php echo $nama_barang[$i]; ?></td>
			<td><?php echo $harga[$i]; ?></td>
			<td><?php echo $jumlah[$i]; ?></td>
			<td><?php echo $this->total->hasil($harga[$i], $jumlah[$i]); ?></td>
		</tr>
	<?php }	?>

	</table>
</body>
</html>
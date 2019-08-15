<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="2">
	<tr>
		<td>No.</td>
		<td>MM</td>
		<td>CM</td>
		<td>DM</td>
		<td>M</td>
		<td>DAM</td>
		<td>HM</td>
		<td>KM</td>
	</tr>

	<?php 
	$a=5;
	for ($i=1; $i <= 5; $i++) { 
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo mm($i*1000); ?></td>
		<td><?php echo cm($i*100); ?></td>
		<td><?php echo dm($i*10); ?></td>
		<td><?php echo m($i); ?></td>
		<td><?php echo dam($i/10); ?></td>
		<td><?php echo hm($i/100); ?></td>
		<td><?php echo km($i/1000); ?></td>
	</tr>	
<?php	}	 ?>

</table>


</body>
</html>
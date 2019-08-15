<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="<?php echo base_url('kelas/terima_data') ?>">
		Nama Kelas : 
		<input type="text" name="nama">
		<br><br>
		Kapasitas Kelas :
		<input type="text" name="kapasitas">
		<br><br>
		<input type="submit" name="submit" value="simpan">


	</form>

</body>
</html>
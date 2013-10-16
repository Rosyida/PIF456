<!DOCTYPE HTML>
<html>
	<head>
		<title>Studi Kasus 1</title>
	</head>

	<body>
		
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Bulan
		<select name="bln">
			<option value="Januari">Januari
			<option value="Februari">Februari
			<option value="Maret">Maret
			<option value="April">April
			<option value="Mei"Selected>Mei
			<option value="Juni">Juni
			<option value="Juli">Juli
			<option value="Agustus">Agustus
			<option value="September">September
			<option value="Oktober">November
			<option value="Desember">Desember
		</select> <br />
		
		<input type="submit" value="OK" />
		</form>
		
		<?php
			if (isset($_POST['bln'])) {
				echo $_POST['bln'];
			}
		?>
		
	</body>
</html>
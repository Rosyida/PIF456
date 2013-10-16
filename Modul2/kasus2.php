<!DOCTYPE HTML>
<html>
	<head>
		<title>Studi Kasus 2</title>
	</head>

	<body>
		
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Hobi
			<input type="checkbox" name="hobby[]" value="Bersepeda"
			/>Bersepeda
			
			<input type="checkbox" name="hobby[]" value="Membaca"
			/>Membaca
			
			<input type="checkbox" name="hobby[]" value="Olahraga"
			/>Olahraga
			
			<input type="checkbox" name="hobby[]" value="Menyanyi"Checked
			/>Menyanyi <br />
			
			<input type="submit" value="OK" />
		</form>
		
		<?php
		//Ekstraksi Nilai
		if (isset($_POST['hobby'])){
			foreach ($_POST['hobby'] as $key => $val){
				echo $key . ' -> ' .$val . '<br />';
			}
		}
		?>

	</body>
</html>
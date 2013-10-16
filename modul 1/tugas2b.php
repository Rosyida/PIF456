<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>TUGAS 2 - MODUL 1</title>
	<style type="text/CSS">
	table {border-collapse: collapse; width: 100%; margin: 0; padding: 0; border: 1px solid #DEDEDE; border-right: none; font-size: 14px; background: #F5F5F5}
	td {margin: 0; padding: 8px; border: 1px solid #DEDEDE}
	</style>
</head>
<body>
	<?php
	$hitungan = 1;
	$sel = $_POST["sel"];
	$kolom = $_POST["kolom"];
	$baris = ceil($sel / $kolom);
	echo '<table>';
			for($a = 0; $a < $baris; $a++){
		echo '<tr>';
		for($b = 0; $b < $_POST["kolom"]; $b++){
			if($hitungan != NULL){
				echo '<td><center>' . $hitungan . '</center></td>';
				if ($hitungan < $sel AND $hitungan != NULL){
					$hitungan = $hitungan +1;
				}else{
					$hitungan = NULL;
				}
			}
		}
		echo '</tr>';
	}
	echo '</table>';
	?>
	<br /><a href="tugas2a.php">[KEMBALI]</a>
</body>
</html>

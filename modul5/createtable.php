<!DOCTYPE html>
<html>
	<head> 
		<title>Menciptakan Tabel</title>
	</head>

	<body> 
		<?php 
			error_reporting(0);
			require_once './koneksi.php';

			$sql = 'CREATE TABLE mahasiswa (
					nim VARCHAR(12) NOT NULL,
					nama VARCHAR(40) NOT NULL,
					alamat VARCHAR(100),
					PRIMARY KEY (nim)
					) ENGINE=MyISAM;';

			$res = mysql_query($sql);
			if($res) {
					echo 'Table Created';
					mysql_close($res);
			} else {
					echo mysql_error();
			}
		?>
	</body>
</html>
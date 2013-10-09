<HTML>
	<HEAD>
		<TITLE>Percabangan</TITLE>
	</HEAD>
	
	<BODY>
		<?php
			$ikan = 'Guppy';
			
			print "<h1> $ikan </h1><BR><BR><BR>";
			
			switch ($ikan)
			{
				case 'Persian':
					echo "Jenis Kucing";
				break;
				case 'Guppy';
					echo "Jenis Ikan";
				break;
				case 'Harimau';
					echo "Jenis Karnivora";
				break;
				default:
					echo "Tidak Terdefinisi";
				break;
			}
		?>
	</BODY>
</HTML>
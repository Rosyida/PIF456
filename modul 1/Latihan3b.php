<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Modul 1 | Latihan 3</title>
</head>
<body>
	<?php
	$str = '123abc';

	// casting nilai variabel $str ke integer
	$bil = (int) $str;
	// $bil = 123

	echo gettype($str);
	// output: string

	echo gettype($bil);
	// output: integer
	?>
</body>
</html>
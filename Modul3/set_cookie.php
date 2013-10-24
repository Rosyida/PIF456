<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/XHTML1-TRANSITIONAL.DTD">
<HTML xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Set Cookie</title>
</head>

<body>

<?php

//Men-set nilai cookie
setcookie('occy', '15');

//Mendapatkan nilai cookie
echo $_COOKIE['occy'];

?>

<p>
Tekan Refresh(F5);

</body>
</html>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/XHTML1-TRANSITIONAL.DTD">
<HTML xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Hapus Cookie</title>
</head>

<body>

<?php

setcookie('occy15', '15');

if (isset($_COOKIE['occy15'])) {
	echo 'cookie di-set <br />';
	//menghapus cookie, dengan masa berlaku 3 jam yang lalu
	setcookie('occy15', '', time() - 3 * 3600);
	echo 'cookie dihapus';
} else {
	echo 'unset';
}

?>

<p>
Tekan Refresh(F5);

</body>
</html>
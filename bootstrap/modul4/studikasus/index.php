<!DOCTYPE html>

<html>

<head> 
        <title>  Akses dan Manipulasi Data </title> 
        <style type="text/css">
        .even {
        background: #ddd;
        }
        </style>
</head>

<body> 

<?php
ini_set('display_error',1);

require_once './koneksi.php';
require_once './data_handler.php';

define('MHS', 'mahasiswa');

data_handler('?m=data');

?>

</body>
</html>
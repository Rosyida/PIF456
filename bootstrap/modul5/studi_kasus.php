<!DOCTYPE html>
    <html>
    <head>
    <title>Praktikum Pemrograman Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="dist/css/bootstrap.css" rel="stylesheet" media="screen">
    </head>
    <body>
          <nav class="navbar navbar-default" role="navigation">

 <div class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
	  <li class="active"><a href="http://localhost/bootstrap/modul4/studikasus">Studi Kasus Modul 4</a></li>
      <li class="active"><a href="http://localhost/bootstrap/modul4/tugas">Tugas Praktikum Modul 4</a></li>
	  <li class="active"><a href="http://localhost/bootstrap/modul5/studi_kasus.php">Studi Kasus Modul 5</a></li>
	  <li class="active"><a href="http://localhost/bootstrap/modul5/tugas.php">Studi Kasus Modul 5</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href = "#"  class ="dropdown-toggle" data-toggle="dropdown">
    		<span class="glyphicon glyphicon-user"></span>
			    Occy15
    		<b class="caret"></b>    						
        </a>
    	<ul class="dropdown-menu">
		    <li><a href="#">My Profile</a></li>
    	</ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/js/jquery.js"></script>
    <script src="dist/js/bootstrap-dropdown.js"></script>
    <script src="dist/js/bootstrap-collapse.js"></script>
    <script src="dist/js/application.js"></script>
    <script src="dist/js/bootstrap-affix.js"></script>
    <script src="dist/js/bootstrap-alert.js"></script>
    <script src="dist/js/bootstrap-button.js"></script>
    <script src="dist/js/bootstrap-carousel.js"></script>
    <script src="dist/js/bootstrap-modal.js"></script>
    <script src="dist/js/bootstrap-popover.js"></script>
    <script src="dist/js/bootstrap-scrollspy.js"></script>
    <script src="dist/js/bootstrap-tab.js"></script>
    <script src="dist/js/bootstrap-tooltip.js"></script>
    <script src="dist/js/bootstrap-typeahead.js"></script>
    </body>
    </html>
<?php 
require_once './koneksi.php'; 
//***************** Setup paging 
$sql = "SELECT * FROM Mahasiswa"; 
 
$self = $_SERVER['PHP_SELF']; 
$page = isset($_GET['page']) ? $_GET['page'] : 0; 
 
// Jumlah link counter, misal (prev 1 2 3 next) = 3 
$link_num   = 5; 
// Jumlah record per halaman 
$record_num = 1; 
 
// Item pertama yang akan ditampilkan 
$offset     = $page ? ($page - 1) * $record_num : 0; 
 
$total_rows = mysql_num_rows(mysql_query($sql)); 
//SQL LIMIT data
$query      = $sql. ' LIMIT ' . $offset . ', ' . $record_num; 
$result     = mysql_query($query); 
$max_page   = ceil($total_rows/$record_num); 
 
// Reset jika page tidak sesuai 
if ($page > $max_page || $page <= 0) { 
  $page = 1; 
} 
 
 
//***************** Generate paging 
$paging = ''; 
if($max_page > 1) { 
  //*** Render link previous 
  if ($page > 1) { 
    $paging .= ' <a href="'.$self.'?page='.($page-1).'"> previous </a> '; 
  } else { 
    $paging .= ' previous '; 
  } 
 
  //*** Render link counter halaman 
  for ($counter = 1; $counter <= $max_page; $counter += $link_num) { 
    if ($page >= $counter) { 
      $start = $counter; 
    } 
  } 
  if ($max_page > $link_num) { 
    $end = $start + $link_num; 
    if ($end > $max_page) { 
      $end = $max_page + 1; 
    } 
  } else { 
    $end = $max_page; 
  } 
  for ($counter = $start; $counter < $end; $counter++) { 
    if ($counter == $page) { 
      $paging .= $counter; 
    } else { 
      $paging .= ' <a href="'.$self.'?page='.$counter.'">' .$counter. 
'</a> '; 
    } 
  } 
 
  //*** Render link next 
  if ($page < $max_page) { 
    $paging.= ' <a href="' .$self.'?page='.($page+1).'"> next </a> '; 
  } else { 
    $paging.= ' next '; 
	  } 
 
} 
?> 
 
<table border=1 cellspacing=1 cellpadding=5> 
<tr> 
  <th>#</th> 
  <th width=100>NIM</th> 
  <th width=150>Nama</th> 
  <th>Alamat</th> 
</tr> 
<?php 
$i = 1; 
while ($row = mysql_fetch_row($result)) { ?> 
  <tr> 
    <td> 
      <?php echo $i;?> 
    </td> 
    <td> 
      <?php echo $row[0];?> 
    </td> 
    <td> 
      <?php echo $row[1];?> 
    </td> 
    <td> 
      <?php echo $row[2];?> 
    </td> 
  </tr> 
  <?php 
  $i++; 
} 
?> 
</table> 
 
 
<?php 
 
//***************** Tampilkan navigasi 
echo $paging; 
 
?> 
 
</body> 
</html> 

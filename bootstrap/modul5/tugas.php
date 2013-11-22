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

        <table border="1" width="500px">

                <?php
                        require "koneksi.php";
                        $query1 = "SELECT * FROM Mahasiswa ORDER BY nim ";
                        $urut = 'asc';
                        $urutbaru = 'asc';
                        if(isset($_GET['orderby'])){
                                $orderby=$_GET['orderby'];
                                $urut=$_GET['urut'];
                                
                                $query1="SELECT * FROM Mahasiswa order by $orderby $urut ";
                                if($urut=='asc'){
                                        $urutbaru='desc';                                        
                                }else{
                                        $urutbaru='asc';
                                }
                        }
                ?>
                <th>
                        <td><a href='tugas.php?orderby=nim&urut=<?=$urutbaru;?>'>Nim</a></td>
                        <td><a href='tugas.php?orderby=nama&urut=<?=$urutbaru;?>'>Nama</a></td>
                        <td><a href='tugas.php?orderby=alamat&urut=<?=$urutbaru;?>'>Alamat</a></td>
                </th>
                                                        
                <?php
                        $result = mysql_query($query1) or die (mysql_error());
                        $no = 1;
                        while($rows=mysql_fetch_object($result)){
                ?>

                <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $rows -> nim;?></td>
                        <td><?php echo $rows -> nama;?></td>
                        <td><?php echo $rows -> alamat;?></td>
                </tr>
                
                <?php
                        $no++;
                        }
                ?>

        </table>
</body>
</html>
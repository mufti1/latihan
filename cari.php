<!DOCTYPE html>
<html>
<head>
	<title>Hasil Pencarian Penipu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg">
<nav class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Penipu</a>
		</div>
		<div class="collapse navbar-collapse" id="example-navbar-collapse">
			<ul class="nav navbar-nav">
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="input.php">Lapor Penipu!!!</a></li>
			<li><a href="about.html">About</a></li>
			</ul>
		</div>
	</nav>
	<div>
		<h1 class="text-center color">HASIL BIODATA PENIPU YANG ANDA CARI</h1>
	</div>
	<div class="col-md-4">
		<table class="hasil">
			<th>Kesalahan Data</th>
			<tr><td class="lapor"><p>Jika ada Kesalahan data silahkan lapor <a href="update.php">disini</a></p></td></tr>
		</table>
		</div>
	</div>
	<div class="col-md-8">
		<?php 
			include('koneksi/koneksi.php');  
 		$cari = $_GET['cari'];
 		if (!(isset($_GET['submit'])) AND ($_GET['cari'] <> "")) {
 			
 		}
 		else{ 
  		$sql = mysql_query(" SELECT * FROM biodata WHERE nama LIKE '%$cari%' or ntelp like '%$cari%' or rekening like '%$cari%' ") or die(mysql_error());  
  		while ($res=mysql_fetch_array($sql)) {?>
  		<table class="col-md-8 hasil i">
  			<th colspan="3">Rekam Jejak Seller</th>
  			<tr><td>Nama Penipu</td><td>:</td><td><?php echo $res['nama'];?></td></tr>
  			<tr><td>Alamat Penipu</td><td>:</td><td><?php echo $res['alamat'];?></td></tr>
  			<tr><td>Nomor Telepon Penipu</td><td>:</td><td><?php echo $res['ntelp'];?></td></tr>
  			<tr><td>Rekening Penipu</td><td>:</td><td><?php echo $res['rekening'];?></td></tr>
  			<tr><td>Kronologi penipuan</td><td>:</td><td><?php echo $res['modus'];?></td></tr>
  			<tr><td>Link Sosmed Penipu</td><td>:</td><td><?php echo $res['sosmed'];?></td></tr>
  			<tr><td>Bukti Penipu</td><td>:</td><td><img src="image/<?php
		 $sql = mysql_query(" SELECT * FROM biodata WHERE nama LIKE '%$cari%' or ntelp like '%$cari%' or rekening like '%$cari%' ") or die(mysql_error());
		 while ($res=mysql_fetch_array($sql)){
		  echo $res['inputfile'];} ?>"width="200px"/></td></tr>
  		</table>
  		<?php } ?>
  		<?php } ?>
	</div>
</body>
</html>

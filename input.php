<!DOCTYPE html>
<html>
<head>
<title>website penipu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg">
<div>
	<nav class="navbar navbar-default" role="navigation">
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
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="input.php">Lapor Penipu!!!</a></li>
				<li><a href="about.html">About</a></li>
			</ul>
	</div>
	</nav>
<div>
<h1 align="center">MASUKAN BIODATA PENIPU DISINI</h1>
<form name="input" action="insert.php" method="post" enctype="multipart/form-data">
	<form class="form-horizontal" role="form">
		<div class="form-group">
			<label for="nama" class="col-sm-2 control-label">Nama Penipu</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" id="npenipu" required="required" autofocus="autofoucus" placeholder="Masukan nama penipu disini" name="nama">
			</div>
		</div><br><br><br>
		<div class="form-group">
			<label for="alamat" class="col-sm-2 control-label">Alamat</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" id="alamat" required="required" placeholder="Masukan alamat penipu disini" name="alamat">
			</div>
		</div><br><br>
		<div class="form-group">
			<label for="nomor" class="col-sm-2 control-label">Nomor Telepon</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" id="ntelepon" placeholder="Masukan nomor telepon penipu disini" name="ntelp">
			</div>
		</div><br><br>
		<div class="form-group">
			<label for="alamat" class="col-sm-2 control-label">No Rekening</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" id="sosmed" placeholder="Masukan no rekening penipu disini" name="sosmed">
			</div>
		</div><br><br>
		<div class="form-group">
			<label for="modus" class="col-sm-2 control-label">Kronologi</label>
			<div class="col-sm-9">
			<textarea type="text" class="form-control" id="modus" placeholder="Ceritakan kronologinya" name="modus"></textarea>
			</div>
		</div><br><br><br><br>
		<div class="form-group">
			<label for="sosmed" class="col-sm-2 control-label">Sosial Media</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" id="rekening" placeholder="Masukan sosmed penipu disini" name="rekening">
			</div><br><br>
		</div>
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-9">
			<label for="inputfile">Foto Bukti</label>
			<input type="file" id="inputfile" name="inputfile" onchange="PreviewImage();"/>
			<p class="help-block">Masukan bukti penipuan jika ada</p>
		</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-9">
				<button type="submit" class="btn btn-default">Kirim</button>
			</div>
		</div>
	</form>
</form>
</div>
</body>
</html>
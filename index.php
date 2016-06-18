<!DOCTYPE html>
<html>
<head>
<title>website penipu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
	.set {
		padding-top: 20%;
	}
	.content{
		background: url(image/Screen-shot-2013-11-13-at-2.49.25-PM.jpg);
		background-size: 100%;
	}
	</style>
</head>
<body class="content">
	<nav class="navbar navbar-default navbar-static-top nav" role="navigation">
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
		<div class="col-md-10 set">
		<form name="pencarian" method="get" action="cari.php">
			<input type="text" class="form-control" id="cari" required="required" autofocus="autofoucus" placeholder="Ketikan Nama, No telp, atau Rekening Penipu Disini" name="cari">
		</div>
		<div class="col-md-2 set">
			<button type="submit" class="btn btn-default" value="search" name="submit">Cari</button>
		</form>
		</div>
	</div>
</body>
</html>
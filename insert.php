<?php 
//panggil file config.php untuk menghubung ke server
include('koneksi/koneksi.php');
 
//tangkap data dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ntelp = $_POST['ntelp'];
$modus = $_POST['modus'];
$rekening = $_POST['rekening'];
$sosmed = $_POST['sosmed'];
$sumber = $_FILES ['inputfile'] ['tmp_name'];
$target = 'image/';
$gambar= $_FILES ['inputfile'] ['name'];
 //gambar
$pindah=move_uploaded_file($sumber, $target.$gambar);
if ($pindah) {
//simpan data ke database
$query = mysql_query("insert into biodata values('$nama', '$alamat', '$ntelp', '$modus', '$sosmed', '$rekening', '$gambar')") or die(mysql_error());
}
//menuju alamat berikutnya
if ($query) {
    header('location:index.php?message=success');
}
?>
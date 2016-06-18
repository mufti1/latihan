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
//simpan data ke database
$query = mysql_query("update biodata set nama='$nama', alamat='$alamat', ntelp='$ntelp', modus='$modus', sosmed='$sosmed', rekening='$rekening' where nama='$nama' or rekening='$rekening' or ntelp='$ntelp'") or die(mysql_error());
//menuju alamat berikutnya
if ($query) {
    header('location:index.php?message=success');
}
?>
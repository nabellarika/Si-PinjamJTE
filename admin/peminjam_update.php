<?php 
include'../koneksi.php';
$id = $_POST['id'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$prodi =$_POST['prodi'];
mysqli_query($koneksi, "update peminjam set npm='$npm', nama_peminjam ='$nama', email_peminjam ='$email', prodi = '$prodi' where id_peminjam ='$id'");
header("location:peminjam.php");
?>
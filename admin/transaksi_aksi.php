<?php
include '../koneksi.php';
$peminjam = $_POST['peminjam'];
$fasilitas = $_POST['fasilitas'];
$tgl_selesai = $_POST['tgl_selesai'];
$tgl_transaksi = date('Y-m-d');
$status = 0;
mysqli_query($koneksi,"insert into transaksi values('','$tgl_transaksi','$peminjam','$fasilitas','$tgl_selesai','$status')");
header("location:transaksi.php");
?>


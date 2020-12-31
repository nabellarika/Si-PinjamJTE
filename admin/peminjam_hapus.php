<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from peminjam where id_peminjam='$id'");
header("location:peminjam.php");
?>

<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from fasilitas where id_fasilitas='$id'");
header("location:fasilitas.php");
?>

<?php
include '../koneksi.php';
$id = $_POST['id_jenis_fasilitas'];
$nama = $_POST['nama_fasilitas'];
$lokasi = $_POST['lokasi_fasilitas'];
$deskripsi = $_POST['deskripsi_fasilitas'];
$jumlah = $_POST['jumlah_fasilitas'];
mysqli_query($koneksi,"insert into fasilitas values('','$id','$nama','$lokasi','$deskripsi','$jumlah')");
header("location:fasilitas.php");
?>

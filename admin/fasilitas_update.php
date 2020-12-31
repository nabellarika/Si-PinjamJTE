<?php 
include'../koneksi.php';
$id = $_POST['id'];
$id_jenis_fasilitas = $_POST['id_jenis_fasilitas'];
$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$deskripsi =$_POST['deskripsi'];
$jumlah =$_POST['jumlah'];
mysqli_query($koneksi, "update fasilitas set id_jenis_fasilitas='$id_jenis_fasilitas', nama_fasilitas ='$nama', lokasi_fasilitas ='$lokasi', deskripsi_fasilitas = '$deskripsi', jumlah_fasilitas='$jumlah' where id_fasilitas ='$id'");
header("location:fasilitas.php");
?>
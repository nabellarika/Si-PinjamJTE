<?php
    include '../koneksi.php';
    $npm = $_POST['npm'];
    $nama_peminjam = $_POST['nama_peminjam'];
    $email_peminjam = $_POST['email_peminjam'];
    $prodi = $_POST['prodi'];
    mysqli_query($koneksi,"insert into peminjam values('','$npm','$nama_peminjam','$email_peminjam','$prodi')");
    header("location:peminjam.php");
?>

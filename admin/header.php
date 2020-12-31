<!DOCTYPE html>
<html>
<head>
<title>SI-PINJAM JTE</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
    <link rel="icon" type="image/png" href="../img/Logo_UnivLampung.png">
   
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<style>
    body{
        font-family: 'Roboto', sans-serif;
    }



</style>
<body style="background: #000000">

<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
}
?>
<nav class="navbar navbar-inverse" style="border-radius: 0px">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" ariaexpanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">SI-PINJAM JTE</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
            <li><a href="peminjam.php"><i class="glyphicon glyphicon-user"></i> Peminjam</a></li>
            <li><a href="fasilitas.php"><i class="glyphicon glyphicon-folder-open"></i> Fasilitas</a></li>
            <li><a href="transaksi.php"><i class="glyphicon glyphicon-random"></i> Transaksi</a></li>
            <li><a href="laporan.php"><i class="glyphicon glyphicon-list-alt"></i> Laporan</a></li>
            <li><a href="ganti_password.php"><i class="glyphicon glyphicon-wrench"></i> Pengaturan</a></li>
            <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><p class="navbar-text">Halo, <b> <?php echo $_SESSION['username']; ?></b> !</p></li>
        </ul>
    </div>
</nav>

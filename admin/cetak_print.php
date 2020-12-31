<!DOCTYPE html>
<html>
<head>
    <title>SI-Pinjam JTE</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../index.php?pesan=belum_login");
    }
    ?>

    <?php
    include '../koneksi.php';
    ?>
    <div class="container">

        <center><h2>SI-Pinjam JTE</h2></center>
        <br/>
        <br/>
        <?php
        if(isset($_GET['dari']) && isset($_GET['sampai'])){

            $dari = $_GET['dari'];
            $sampai = $_GET['sampai'];
            ?>
            <h4>Data Laporan Peminjaman dari <b><?php echo $dari; ?></b> sampai <b><?php echo $sampai; ?></b></h4>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Invoice</th>
                    <th>Tanggal</th>
                    <th>Peminjam</th>
                    <th>Fasilitas</th>
                    <th>Tgl. Selesai</th>
                    <th>Status</th>
                </tr>

                <?php
                $data = mysqli_query($koneksi,"select * from peminjam,transaksi, fasilitas where peminjam_transaksi=id_peminjam and fasilitas_transaksi=id_fasilitas and date(tgl_transaksi) > '$dari' and date(tgl_transaksi) < '$sampai' order by id_transaksi desc");
                $no = 1;
                while($d=mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td>INVOICE-<?php echo $d['id_transaksi']; ?></td>
                        <td><?php echo $d['tgl_transaksi']; ?></td>
                        <td><?php echo $d['nama_peminjam']; ?></td>
                        <td><?php echo $d['nama_fasilitas']; ?></td>
                        <td><?php echo $d['tgl_selesai_transaksi']; ?></td>
                        <td>
                            <?php
                            if($d['status_transaksi']=="0"){
                                echo "<div class='label label-warning'>DIPINJAM</div>";
                            }else if($d['status_transaksi']=="1"){
                                echo "<div class='label label-success'>DIKEMBALIKAN</div>";
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php } ?>
        </div>
        <script type="text/javascript">
            window.print();
        </script>
    </body>
    </html>

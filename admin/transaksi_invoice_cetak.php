<!DOCTYPE html>
<html>
<head>
<title>SI-Pinjam JTEY</title>
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

        <div class="col-md-10 col-md-offset-1">
            <?php
            $id = $_GET['id'];
            $transaksi = mysqli_query($koneksi,"select * from transaksi,peminjam where id_transaksi='$id' and peminjam_transaksi=id_peminjam");
            while($t=mysqli_fetch_array($transaksi)){
                ?>
                <center><h2>SI-Pinjam JTE</h2></center>
                <br/>
                <br/>
                <table class="table">
                    <tr>
                        <th width="20%">No. Invoice</th>
                        <th>:</th>
                        <td>INVOICE-<?php echo $t['id_transaksi']; ?></td>
                    </tr>
                    <tr>
                        <th width="20%">Tgl. Transaksi</th>
                        <th>:</th>
                        <td><?php echo $t['tgl_transaksi']; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Peminjam</th>
                        <th>:</th>
                        <td><?php echo $t['nama_peminjam']; ?></td>
                    </tr>
                    <tr>
                        <th>NPM</th>
                        <th>:</th>
                        <td><?php echo $t['npm']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th>:</th>
                        <td><?php echo $t['email_peminjam']; ?></td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <th>:</th>
                        <td><?php echo $t['prodi']; ?></td>
                    </tr>
                    <tr>
                        <th>Tgl. Selesai</th>
                        <th>:</th>
                        <td><?php echo $t['tgl_selesai_transaksi']; ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <th>:</th>
                        <td>
                            <?php
                            if($t['status_transaksi']=="0"){
                                echo "<div class='label label-warning'>DIPINJAM</div>";
                            }else if($t['status_transaksi']=="1"){
                                echo "<div class='label label-info'>DIKEMBALIKAN</div>";}

                            ?>
                        </td>
                    </tr>
                </table>
                <br/>
                <h4 class="text-center">Daftar Pinjaman</h4>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Id Fasilitas</th>
                        <th>Nama Fasilitas</th>
                    </tr>
                    <?php
                    $id = $t['fasilitas_transaksi'];
                    $fasilitas = mysqli_query($koneksi,"select * from fasilitas where id_fasilitas='$id'");

                    while($p=mysqli_fetch_array($fasilitas)){
                        ?>
                        <tr>
                            <td  width="20%"><?php echo $p['id_fasilitas']; ?></td>
                            <td><?php echo $p['nama_fasilitas']; ?></td>
                        </tr>
                        <?php } ?>
                    </table>

                    <br/>
                    <p><center><i>"Universitas Lampung".</i></center></p>
                    <?php
                }
                ?>
            </div>
        </div>
        <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
        
<?php include 'header.php'; ?>

<?php
include '../koneksi.php';
?>
<style>

</style>

<div class="container">
    <div class="alert alert-info text-center">
        <h4 style="margin-bottom: 0px">SELAMAT DATANG DI <b>SISTEM INFORMASI PEMINJAMAN FASILITAS JTE</b></h4>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h4>Dashboard</h4>
        </div>
        <div class="panel-body">

            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-user"></i>
                                <span class="pull-right">
                                    <?php
                                    $peminjam = mysqli_query($koneksi,"select * from peminjam");
                                    echo mysqli_num_rows($peminjam);
                                    ?>
                                </span>
                            </h1>
                            Jumlah Data Peminjam
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-retweet"></i>
                                <span class="pull-right">

                                    <?php
                                    $pinjam = mysqli_query($koneksi,"select * from transaksi where status_transaksi='0'");
                                    echo mysqli_num_rows($pinjam);
                                    ?>
                                </span>
                            </h1>
                            Jumlah Fasilitas Dipinjam
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-info-sign"></i>
                                <span class="pull-right">

                                    <?php
                                    $kembali = mysqli_query($koneksi,"select * from transaksi where status_transaksi='1'");
                                    echo mysqli_num_rows($kembali);
                                    ?>
                                </span>
                            </h1>
                            Jumlah Fasilitas Dikembalikan
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h4>Riwayat Transaksi Terakhir</h4>
        </div>
        <div class="panel-body">
        <div class="table-responsive">
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
                $data = mysqli_query($koneksi,"select * from peminjam,transaksi where peminjam_transaksi=id_peminjam order by id_transaksi desc limit 7");
                $no = 1;
                while($d=mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td>INVOICE-<?php echo $d['id_transaksi']; ?></td>
                        <td><?php echo $d['tgl_transaksi']; ?></td>
                        <td><?php echo $d['nama_peminjam']; ?></td>
                        <td><?php echo $d['fasilitas_transaksi']; ?></td>
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
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

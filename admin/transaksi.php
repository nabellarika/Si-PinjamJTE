<?php error_reporting(0); include 'header.php'; ?>
<style>

</style>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4><i class="glyphicon glyphicon-random"></i> Data Transaksi Peminjaman</h4>
            <hr>
        </div>
        <div class="panel-body">
            <a href="transaksi_tambah.php" class="btn btn-sm btn-info pull-right">Transaksi Baru</a>
            <br/>
            <br/>

            <br>
            <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Invoice</th>
                    <th>Tanggal Peminjaman </th>
                    <th>Peminjam</th>
                    <th>Fasilitas</th>
                    <th>Tanggal Selesai</th>
                    <th>Status</th>
                    <th width="20%">OPSI</th>
                </tr>
                <?php
                include '../koneksi.php';
                $data = mysqli_query($koneksi,"select * from peminjam,transaksi, fasilitas where peminjam_transaksi=id_peminjam AND fasilitas_transaksi=id_fasilitas order by id_transaksi desc");
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
                        <td>
                            <a href="transaksi_invoice.php?id=<?php echo $d['id_transaksi']; ?>" target="_blank" class="btn btn-sm btn-warning">Invoice</a>
                            <a href="transaksi_edit.php?id=<?php echo $d['id_transaksi']; ?>" class="btn btn-sm btn-info">Edit</a>
                            <a href="transaksi_hapus.php?id=<?php echo $d['id_transaksi']; ?>" class="btn btn-sm btn-danger">Batalkan</a>
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

<?php include 'header.php'; ?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4><i class="glyphicon glyphicon-list-alt"></i> Filter Laporan</h4>
            <hr>
        </div>
        <div class="panel-body">

            <form action="laporan.php" method="get">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Dari Tanggal</th>
                        <th>Sampai Tanggal</th>
                        <th width="1%"></th>
                    </tr>
                    <tr>
                        <td>
                            <br/>
                            <input type="date" name="tgl_dari" class="form-control">
                        </td>
                        <td>
                            <br/>
                            <input type="date" name="tgl_sampai" class="form-control">
                            <br/>
                        </td>
                        <td>
                            <br/>
                            <input type="submit" class="btn btn-primary" value="Filter">
                        </td>
                    </tr>

                </table>
</div>
            </form>

        </div>
    </div>
    <br/>
    <?php
    if(isset($_GET['tgl_dari']) && isset($_GET['tgl_sampai'])){
        $dari = $_GET['tgl_dari'];
        $sampai = $_GET['tgl_sampai'];
        ?>
        <div class="panel">
            <div class="panel-heading">
                <h4>Data Laporan Laundry dari <b><?php echo $dari; ?></b> sampai <b><?php echo $sampai; ?></b></h4>
            </div>
            <div class="panel-body">

                <a target="_blank" href="cetak_print.php?dari=<?php echo $dari; ?>&sampai=<?php echo $sampai; ?>" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-print"></i> CETAK</a>
                <a target="_blank" href="cetak_pdf.php?dari=<?php echo $dari; ?>&sampai=<?php echo $sampai; ?>" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-print"></i> CETAK PDF</a>
                <br/>
                <br/>
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
                    include '../koneksi.php';
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
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php include 'footer.php'; ?>

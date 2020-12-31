<?php include 'header.php'; ?>
<?php
include '../koneksi.php';
?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Transaksi Peminjaman Baru</h4>
        </div>
        <div class="panel-body">
            <div class="col-md-8 col-md-offset-2">
                <a href="transaksi.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                <br/>
                <br/>
                <form method="post" action="transaksi_aksi.php">
                    <div class="form-group">
                        <label>Peminjam</label>
                        <select class="form-control" name="peminjam" required="required">
                            <option value="">- Pilih Peminjam</option>
                            <?php
                            $data = mysqli_query($koneksi,"select * from peminjam");
                            while($d=mysqli_fetch_array($data)){
                                ?>
                                <option value="<?php echo $d['id_peminjam']; ?>"><?php echo $d['nama_peminjam']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Fasilitas</label>
                        <select class="form-control" name="fasilitas" required="required">
                            <option value="">- Pilih Fasilitas</option>
                            <?php
                            $data = mysqli_query($koneksi,"select * from fasilitas");
                            while($d=mysqli_fetch_array($data)){
                                ?>
                                <option value="<?php echo $d['id_fasilitas']; ?>"><?php echo $d['nama_fasilitas']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    
                    </div>
                   
                    <div class="form-group">
                        <label>Tgl. Selesai</label>
                        <input type="date" class="form-control" name="tgl_selesai" required="required">
                    </div>
                    <br/>

                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

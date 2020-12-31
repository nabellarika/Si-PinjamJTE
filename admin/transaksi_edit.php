<?php include 'header.php'; ?>
<?php
include '../koneksi.php';
?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Edit Transaksi Peminjaman</h4>
        </div>
        <div class="panel-body">
            <div class="col-md-8 col-md-offset-2">
                <a href="transaksi.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                <br/>
                <br/>
                <?php
                $id = $_GET['id'];
                $transaksi = mysqli_query($koneksi,"select * from transaksi where id_transaksi='$id'");
                while($t=mysqli_fetch_array($transaksi)){
                    ?>
                    <form method="post" action="transaksi_update.php">
                        <input type="hidden" name="id" value="<?php echo $t['id_transaksi']; ?>">

                        <div class="form-group">
                            <label>Peminjam</label>
                            <select class="form-control" name="peminjam" required="required">
                                <option value="">- Pilih Peminjam</option>
                                <?php
                                $data = mysqli_query($koneksi,"select * from peminjam");
                                while($d=mysqli_fetch_array($data)){
                                    ?>
<option <?php if($d['id_peminjam']==$t['peminjam_transaksi']){echo "selected='selected'";} ?> value="<?php echo $d['id_peminjam']; ?>"><?php echo $d['nama_peminjam']; ?></option>
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
<option <?php if($d['id_fasilitas']==$t['fasilitas_transaksi']){echo "selected='selected'";} ?> value="<?php echo $d['id_fasilitas']; ?>"><?php echo $d['nama_fasilitas']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tgl. Selesai</label>
                            <input type="date" class="form-control" name="tgl_selesai" required="required" value="<?php echo $t['tgl_selesai_transaksi']; ?>">
                        </div>

                        <br/>

                            <div class="form-group alert alert-info">
                                <label>Status</label>
                                <select class="form-control" name="status" required="required">
                                    <option <?php if($t['status_transaksi']=="0"){echo "selected='selected'";} ?> value="0">DIPINJAM</option>
                                    <option <?php if($t['status_transaksi']=="1"){echo "selected='selected'";} ?> value="1">DIKEMBALIKAN</option>
                                
                                </select>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Ubah">
                        </form>
                        <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>

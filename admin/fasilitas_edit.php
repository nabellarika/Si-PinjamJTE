<?php include 'header.php'; ?>

<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Edit Data Fasilitas</h4>
            </div>
            <div class="panel-body">
                <?php
                include '../koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"select * from fasilitas where id_fasilitas ='$id'");
                while($d=mysqli_fetch_array($data)){
                    ?>
                   <form method="post" action="fasilitas_update.php">
                    <div class="form-group">
                            <label>Jenis Fasilitas</label>
                            <input type="hidden" name="id" value="<?php echo $d['id_fasilitas']; ?>">
                            <input type="text" class="form-control" name="id_jenis_fasilitas" value="<?php echo $d['id_jenis_fasilitas']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama Fasilitas</label>
                            <input type="text" class="form-control" name="nama" value="<?php echo $d['nama_fasilitas']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" value="<?php echo $d['lokasi_fasilitas']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" value="<?php echo $d['deskripsi_fasilitas']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" value="<?php echo $d['jumlah_fasilitas']; ?>">
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" value="Update">
                    </form>
                    
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>


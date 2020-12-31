<?php include 'header.php'; ?>

<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Edit Data Peminjam</h4>
            </div>
            <div class="panel-body">
                <?php
                include '../koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"select * from peminjam where id_peminjam ='$id'");
                while($d=mysqli_fetch_array($data)){
                    ?>
                    <form method="post" action="peminjam_update.php">
                    <div class="form-group">
                            <label>NPM</label>
                            <input type="hidden" name="id" value="<?php echo $d['id_peminjam']; ?>">
                            <input type="text" class="form-control" name="npm" placeholder="Masukkan nama .." value="<?php echo $d['npm']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan no.hp .." value="<?php echo $d['nama_peminjam']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Masukkan alamat .." value="<?php echo $d['email_peminjam']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Prodi</label>
                            <input type="text" class="form-control" name="prodi" placeholder="Masukkan alamat .." value="<?php echo $d['prodi']; ?>">
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


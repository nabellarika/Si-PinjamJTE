<?php include 'header.php'; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Peminjam Baru</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="peminjam_aksi.php">
                    <div class="form-group">
                        <label>NPM</label>
                        <input type="text" class="form-control" name="npm" placeholder="Masukkan npm..">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama_peminjam" placeholder="Masukkan nama ..">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email_peminjam" placeholder="Masukkan email ..">
                    </div>
                    <div class="form-group">
                        <label>Prodi</label>
                        <input type="text" class="form-control" name="prodi" placeholder="Masukkan prodi ..">
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

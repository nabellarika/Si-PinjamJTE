<?php include 'header.php'; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Fasilitas Baru</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="fasilitas_aksi.php">
                <div class="form-group">
                            <label>Jenis Fasilitas</label>
                            <input type="text" class="form-control" name="id_jenis_fasilitas" >
                        </div>
                        <div class="form-group">
                            <label>Nama Fasilitas</label>
                            <input type="text" class="form-control" name="nama_fasilitas" >
                        </div>
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input type="text" class="form-control" name="lokasi_fasilitas" >
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi_fasilitas" >
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlah_fasilitas" >
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </form>
                   
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

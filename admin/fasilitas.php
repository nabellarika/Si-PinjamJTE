<?php error_reporting(0); include 'header.php'; ?>
<style>

</style>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4><i class="glyphicon glyphicon-folder-open mr-2"></i> Data Fasilitas</h4>
            <hr>
        </div>
        <div class="panel-body">
            <div class="panel-body">
            <a href="fasilitas_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>
            <br/>
            <br>
            <div >
                <form class="navbar-form navbar-right  " action="" method="post"  >
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Masukkan data" autocomplete="off" autofocus name="cari">
                        <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                        </button>

                        </div>
                    </div>
                </form>

            </div>
            </div>
            <br/>
            <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Jenis Fasilitas</th>
                    <th>Nama Fasailitas</th>
                    <th>Lokasi</th>
                    <th>Deskripsi</th>
                    <th>Jumlah</th>
                    <th width="15%">OPSI</th>
                </tr>
                <?php
                include '../koneksi.php';
                $no = 1;
                $cari = $_POST['cari'];
                if($cari != ''){
                    $data = mysqli_query($koneksi,"select * from fasilitas where nama_fasilitas LIKE '%". $cari."%' ");
                }else{
                    $data = mysqli_query($koneksi,"select * from fasilitas ORDER BY nama_fasilitas ASC");
                }
                
                
                if(mysqli_num_rows($data)){
                while($d=mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['id_jenis_fasilitas']; ?></td>
                        <td><?php echo $d['nama_fasilitas']; ?></td>
                        <td><?php echo $d['lokasi_fasilitas']; ?></td>
                        <td><?php echo $d['deskripsi_fasilitas']; ?></td>
                        <td><?php echo $d['jumlah_fasilitas']; ?></td>
                        <td>
                            <a href="fasilitas_edit.php?id=<?php echo $d['id_fasilitas']; ?>" class="btn btn-sm btn-info">Edit</a>
                            <a href="fasilitas_hapus.php?id=<?php echo $d['id_fasilitas']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                                }}else{
                                    echo
                                    '<tr><td colspan="7"><center>Tidak ditemukan</center></td>
                                    
                                </tr>' ;
                                }
                                
                ?>
            </table>
                            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

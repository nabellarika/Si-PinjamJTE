<?php
error_reporting(0);
include 'header.php'; ?>

<style>

.table td,
.table th{
    padding: 20px;
}
.tooltip .arrow:before {
  border-left-color: #dc3545;
}
.tooltip .tooltip-inner {
  background: #dc3545;
}

</style>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            
            <div>
            
            <h4><i class="glyphicon glyphicon-user "></i> Data Peminjam</h4>
            
            </div>
            <hr>
            
        </div>
        <div class="panel-body">
            <div class="panel-body">
                    <a href="peminjam_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>
                <br/>
 <br>
                <div >
                <form class="navbar-form  navbar-right " action="" method="post"  >
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
            <div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" ">
                    <tr>
                        <th width="1%">No</th>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Prodi</th>
                        <th width="15%">OPSI</th>
                    </tr>
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $cari = $_POST['cari'];
                    if($cari != ''){
                        $data = mysqli_query($koneksi,"select * from peminjam where npm LIKE '%". $cari."%' 
                        OR nama_peminjam LIKE '%". $cari."%' ");
                    }else{
                        $data = mysqli_query($koneksi,"select * from peminjam ORDER BY npm ASC");
                    }

                    if(mysqli_num_rows($data)){
                    while($d=mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['npm']; ?></td>
                            <td><?php echo $d['nama_peminjam']; ?></td>
                            <td><?php echo $d['email_peminjam']; ?></td>
                            <td><?php echo $d['prodi']; ?></td>
                            <td>
                                <a href="peminjam_edit.php?id=<?php echo $d['id_peminjam']; ?>" class="btn btn-sm btn-info">Edit</a>
                                <a href="peminjam_hapus.php?id=<?php echo $d['id_peminjam']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }}else{
                        echo
                        '<tr><td colspan="6"><center>Tidak ditemukan</center></td>
                        
                    </tr>' ;
                    }
                    
                    ?>
                </table>
            </div>
            
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>

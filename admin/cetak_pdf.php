<?php
require_once("../assets/dompdf/dompdf_config.inc.php");
include '../koneksi.php';

$html = '<!DOCTYPE html>';
$html .= '<html>';
$html .= '<head>';
$html .='   <title>SISTEM INFORMASI PEMINJAMAN FASILITAS JURUSAN TEKNIK ELEKTRO</title>';
$html .= '</head>';
$html .= '<body>';
$html .= '<center><h2>SI-Pinjam JTE</h2></center>';

$dari = $_GET['dari'];
$sampai = $_GET['sampai'];

$html .= '<h4>Data Laporan Peminjaman Fasilitas dari <b>'.$dari.'</b> sampai <b>'.$sampai.'</b></h4>';
$html .= '<table border="1" width="100%">';
$html .= '<tr>';
$html .= '<th width="1%">No</th>';
$html .= '<th>Invoice</th>';
$html .= '<th>Tanggal</th>';
$html .= '<th>Peminjam</th>';
$html .= '<th>Fasilitas</th>';
$html .= '<th>Tgl. Selesai</th>';
$html .= '<th>Status</th>';
$html .= '</tr>';

$data = mysqli_query($koneksi,"select * from peminjam,transaksi, fasilitas where peminjam_transaksi=id_peminjam and fasilitas_transaksi=id_fasilitas and date(tgl_transaksi) > '$dari' and date(tgl_transaksi) < '$sampai' order by id_transaksi desc");
$no = 1;

while($d=mysqli_fetch_array($data)){

    $html .= '<tr>';
    $html .= '<td>'.$no++.'</td>';
    $html .= '<td>INVOICE-'.$d['id_transaksi'].'</td>';
    $html .= '<td>'.$d['tgl_transaksi'].'</td>';
    $html .= '<td>'.$d['nama_peminjam'].'</td>';
    $html .= '<td>'.$d['nama_fasilitas'].'</td>';
    $html .= '<td>'.$d['tgl_selesai_transaksi'].'</td>';
    $html .= '<td>';

    if($d['status_transaksi']=="0"){
        $html .= "DIPINJAM";
    }else if($d['status_transaksi']=="1"){
        $html .= "DIKEMBALIKAN";
    }

    $html .= '</td>';
    $html .= '</tr>';

}

$html .= '</table>';
$html .= '</body>';
$html .= '</html>';

$dompdf = new DOMPDF();
$dompdf->set_paper('a4','landscape');
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('laporan_dari'.$dari.'_sampai_'.$sampai.'.pdf');

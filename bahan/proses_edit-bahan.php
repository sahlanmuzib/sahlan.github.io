<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$kode_bahan = $_POST['kode_bahan'];
$nama_bahan = $_POST['nama_bahan'];
$kode_satuan = $_POST['kode_satuan'];
$stock_bahan = $_POST['stock_bahan'];
 
// update data ke database
mysqli_query($db,"update tb_bahan set kode_bahan='$kode_bahan', nama_bahan='$nama_bahan', kode_satuan='$kode_satuan', stock_bahan='$stock_bahan' where kode_bahan='$kode_bahan'");
 
// mengalihkan halaman kembali ke index.php
header("location:index-bahan.php");
 
?>
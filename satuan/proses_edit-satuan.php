<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$kode_satuan = $_POST['kode_satuan'];
$nama_satuan = $_POST['nama_satuan'];
 
// update data ke database
mysqli_query($db,"update tb_satuan set kode_satuan='$kode_satuan', nama_satuan='$nama_satuan'");
 
// mengalihkan halaman kembali ke index.php
header("location:index-satuan.php");
 
?>
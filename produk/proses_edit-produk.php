<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$kode_produk = $_POST['kode_produk'];
$nama_produk = $_POST['nama_produk'];
 
// update data ke database
mysqli_query($db,"update tb_produk set kode_produk='$kode_produk', nama_produk='$nama_produk'");
 
// mengalihkan halaman kembali ke index.php
header("location:index-produk.php");
 
?>
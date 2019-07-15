<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit']))
{

    // ambil data dari formulir
    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];

    mysqli_query($db,"insert into tb_produk values('$kode_produk','$nama_produk')");
   header("location:index-produk.php?sukses");
}
 ?>
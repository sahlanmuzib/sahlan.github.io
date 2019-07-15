<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit']))
{

    // ambil data dari formulir
    $kode_bahan = $_POST['kode_bahan'];
    $nama_bahan = $_POST['nama_bahan'];
    $kode_satuan = $_POST['kode_satuan'];
    $stock_bahan = $_POST['stock_bahan'];

    
    mysqli_query($db,"insert into tb_bahan values('$kode_bahan','$nama_bahan','$kode_satuan','$stock_bahan')");
   header("location:index-bahan.php?sukses");
}
 ?>

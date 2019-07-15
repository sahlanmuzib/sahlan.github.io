<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit']))
{

    // ambil data dari formulir
    $kode_satuan = $_POST['kode_satuan'];
    $nama_satuan = $_POST['nama_satuan'];

    mysqli_query($db,"insert into tb_satuan values('$kode_satuan','$nama_satuan')");
   header("location:index-satuan.php?sukses");
}
 ?>

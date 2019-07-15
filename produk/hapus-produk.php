<?php

include("config.php");

if( isset($_GET['kode_produk']) ){

    // ambil id dari query string
    $kode_produk = $_GET['kode_produk'];

    // buat query hapus
    $sql = "DELETE FROM tb_produk WHERE kode_produk=$kode_produk";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: /kafe/produk/index-produk.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
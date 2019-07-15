<?php

include("config.php");

if( isset($_GET['kode_bahan']) ){

    // ambil id dari query string
    $kode_bahan = $_GET['kode_bahan'];

    // buat query hapus
    $sql = "DELETE FROM tb_bahan WHERE kode_bahan=$kode_bahan";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: /kafe/bahan/index-bahan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
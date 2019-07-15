<?php

include("config.php");

if( isset($_GET['kode_satuan']) ){

    // ambil id dari query string
    $kode_satuan = $_GET['kode_satuan'];

    // buat query hapus
    $sql = "DELETE FROM tb_satuan WHERE kode_satuan=$kode_satuan";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: /kafe/satuan/index-satuan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
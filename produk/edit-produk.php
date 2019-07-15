<html>
<head>
    <title>Edit produk</title>
    <link rel="stylesheet" type="text/css" href="/kafe/produk/add-produk.css" >
</head>
<body id="body">
 <div id="container">
    <h2 class="judul">Form Edit</h2>
    <br/>
    <a href="/kafe/produk/index-produk.php" id="buat-baru">Kembali</a>
    <br/>
 
    <?php
    include 'config.php';
    $kode_produk = $_GET['kode_produk'];
    $data = mysqli_query($db,"select * from tb_produk where kode_produk='$kode_produk'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form class="form" method="post" action="proses_edit-produk.php">
            <table>
                <tr>            
                    <td>Kode produk</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="kode_produk" value="<?php echo $d['kode_produk']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama produk</td>
                    <td><input type="text" name="nama_produk" value="<?php echo $d['nama_produk']; ?>"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="Selesai"></td>
                </tr>       
            </table>
        </form>
        <?php 
    }
    ?>
</body>
</html>
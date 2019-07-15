<html>
<head>
    <title>Edit Bahan</title>
    <link rel="stylesheet" type="text/css" href="/kafe/bahan/add-bahan.css" >
</head>
<body id="body">
 <div id="container">
    <h2 class="judul">Form Edit</h2>
    <br/>
    <a href="/kafe/bahan/index-bahan.php" id="buat-baru">Kembali</a>
    <br/>
 
    <?php
    include 'config.php';
    $kode_bahan = $_GET['kode_bahan'];
    $data = mysqli_query($db,"select * from tb_bahan where kode_bahan='$kode_bahan'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form class="form" method="post" action="proses_edit-bahan.php">
            <table>
                <tr>            
                    <td>Kode Bahan</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="kode_bahan" value="<?php echo $d['kode_bahan']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama Bahan</td>
                    <td><input type="text" name="nama_bahan" value="<?php echo $d['nama_bahan']; ?>"></td>
                </tr>
                <tr>
                    <td>Kode Satuan</td>
                    <td><input type="text" name="kode_satuan" value="<?php echo $d['kode_satuan']; ?>"></td>
                </tr>
                <tr>
                    <td>Stock Bahan</td>
                    <td><input type="text" name="stock_bahan" value="<?php echo $d['stock_bahan']; ?>"></td>
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
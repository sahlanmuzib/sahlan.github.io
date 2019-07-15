<html>
<head>
    <title>Edit satuan</title>
    <link rel="stylesheet" type="text/css" href="/kafe/satuan/add-satuan.css" >
</head>
<body id="body">
 <div id="container">
    <h2 class="judul">Form Edit</h2>
    <br/>
    <a href="/kafe/satuan/index-satuan.php" id="buat-baru">Kembali</a>
    <br/>
 
    <?php
    include 'config.php';
    $kode_satuan = $_GET['kode_satuan'];
    $data = mysqli_query($db,"select * from tb_satuan where kode_satuan='$kode_satuan'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form class="form" method="post" action="proses_edit-satuan.php">
            <table>
                <tr>            
                    <td>Kode satuan</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="kode_satuan" value="<?php echo $d['kode_satuan']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama satuan</td>
                    <td><input type="text" name="nama_satuan" value="<?php echo $d['nama_satuan']; ?>"></td>
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
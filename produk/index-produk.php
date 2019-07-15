<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Produk</title>
	<link rel="stylesheet" type="text/css" href="/kafe/produk/index-produk.css" >
</head>
<body id="body">
<div id="container">
<h3 class="judul">Daftar Produk</h3>
		<a href='/kafe/produk/add-produk.php' id="buat-baru">Buat baru</a>
	<table border="1" width="100%" id="tabel">
		<tr>
            <th id="kolom1">Kode Produk</th>
            <th id="kolom2">Nama Produk</th>
            <th id="kolom5">Tindakan</th>
        </tr>


        <?php
        $sql = "SELECT * FROM tb_produk";
        $query = mysqli_query($db, $sql);

        while($produk = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$produk['kode_produk']."</td>";
            echo "<td>".$produk['nama_produk']."</td>";

            echo "<td>";
            echo "<a href='/kafe/produk/hapus-produk.php?kode_produk=".$produk['kode_produk']."' class='link'>Hapus</a> |";
            echo "<a href='/kafe/produk/edit-produk.php?kode_produk=".$produk['kode_produk']."' class='link'> Edit</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

	</table>
</div>
</body>
</html>
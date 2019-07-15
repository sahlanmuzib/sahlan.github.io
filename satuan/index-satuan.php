<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Satuan</title>
	<link rel="stylesheet" type="text/css" href="/kafe/satuan/index-satuan.css" >
</head>
<body id="body">
<div id="container">
<h3 class="judul">Daftar Satuan</h3>
		<a href='/kafe/satuan/add-satuan.php' id="buat-baru">Buat baru</a>
	<table border="1" width="100%" id="tabel">
		<tr>
            <th id="kolom1">Kode Satuan</th>
            <th id="kolom2">Nama Satuan</th>
            <th id="kolom5">Tindakan</th>
        </tr>


        <?php
        $sql = "SELECT * FROM tb_satuan";
        $query = mysqli_query($db, $sql);

        while($satuan = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$satuan['kode_satuan']."</td>";
            echo "<td>".$satuan['nama_satuan']."</td>";

            echo "<td>";
            echo "<a href='/kafe/satuan/hapus-satuan.php?kode_satuan=".$satuan['kode_satuan']."' class='link'>Hapus</a> |";
            echo "<a href='/kafe/satuan/edit-satuan.php?kode_satuan=".$satuan['kode_satuan']."' class='link'> edit</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

	</table>
</div>
</body>
</html>
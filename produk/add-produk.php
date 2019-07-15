<!DOCTYPE html>
<html>
<head>
	<title>formulir Produk</title>
	<link rel="stylesheet" type="text/css" href="/kafe/produk/add-produk.css" >
</head>
<body id="body">
<div id="container">
	<h3 class="judul">Formulir Untuk Memasukan produk</h3>
		<form class="form" action="/kafe/produk/proses_pemasukan-produk.php" method="post">
			<label for="daftar">Kode produk</label>
		        <input type="text" name="kode_produk" placeholder="Kode produk">
		        
		    <label for="daftar">Nama produk</label>
		        <input type="text" name="nama_produk" placeholder="Nama produk">
		   	 
		        <input type="submit" name="submit" value="submit">
		    </form>
</div>
</body>
</html>
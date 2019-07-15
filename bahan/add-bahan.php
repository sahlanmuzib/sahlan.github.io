<!DOCTYPE html>
<html>
<head>
	<title>formulir bahan</title>
	<link rel="stylesheet" type="text/css" href="/kafe/bahan/add-bahan.css" >
</head>
<body id="body">
<div id="container">
	<h3 class="judul">Formulir Untuk Memasukan Bahan</h3>
		<form class="form" action="/kafe/bahan/proses-pemasukan.php" method="post">
			<label for="daftar">Kode Bahan</label>
		        <input type="text" name="kode_bahan" placeholder="Kode">
		        
		    <label for="daftar">Nama Bahan</label>
		        <input type="text" name="nama_bahan" placeholder="Nama Bahan">
		    
		    <label for="daftar">Kode Satuan</label>
		        <input type="text" name="kode_satuan" placeholder="kode satuan"> 
		   
		    <label for="daftar">Stock Bahan</label>
		        <input type="text" name="stock_bahan" placeholder="jumlah"> 
		   	 
		        <input type="submit" name="submit" value="submit">
		    </form>

</div>
</body>
</html>
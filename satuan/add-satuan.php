<!DOCTYPE html>
<html>
<head>
	<title>formulir Satuan</title>
	<link rel="stylesheet" type="text/css" href="/kafe/satuan/add-satuan.css" >
</head>
<body id="body">
<div id="container">
	<h3 class="judul">Formulir Untuk Memasukan satuan</h3>
		<form class="form" action="/kafe/satuan/proses_pemasukan-satuan.php" method="post">
			<label for="daftar">Kode satuan</label>
		        <input type="text" name="kode_satuan" placeholder="Kode satuan">
		        
		    <label for="daftar">Nama satuan</label>
		        <input type="text" name="nama_satuan" placeholder="Nama satuan">
		   	 
		        <input type="submit" name="submit" value="submit">
		    </form>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h3>Prosedural programming</h3>
		<p>Latihan mengingat php</p>
	</div>
	<br/>
	<h1>CRUD OOP PHP</h1>
<h2>WWW.MALASNGODING.COM</h2>
<a href="index.php">Lihat Semua Data</a>
<h3>Tambah Data User</h3>
 
<form action="proses.php?aksi=tambah" method="post">
	
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td><input type="text" name="pekerjaan"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>
	
</body>
</html>
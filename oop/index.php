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
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
 
	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$db = new database();
		foreach($db->tampil_data() as $x){?>
			<tr>
				<td><?php echo $x['id']; ?></td>
				<td><?php echo $x['nama']; ?></td>
				<td><?php echo $x['alamat']; ?></td>
				<td><?php echo $x['pekerjaan']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
					<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
				</td>
			</tr>>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
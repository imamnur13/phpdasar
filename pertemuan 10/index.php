<!-- koneksi ke database -->
<?php 
	
	require 'functions.php';

//selanjutnya ambil data dari mysql, ambil tabel mahasiswa / queri mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa") 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>
<table border="1" cellpadding="10" cellspacing="0">
	
	
	 

	<tr>
		<th>No.</th>
		<th>ID</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NPM</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>

	</tr>

	<?php $i = 1; ?>
	<?php foreach ($mahasiswa as $row) : ?>
	<tr>
		<td> <?= $i; ?> </td>
		<td>ID2019<?= $row["id"]; ?></td>
		<td><a href="">edit </a> | <a href="hapus.php?id=<?= $row ["id"]; ?>">delete</a></td>
		<td><img src="img/<?= $row ["photo"]; ?> " width="70" > </td>
		<td> <?= $row["npm"]; ?> </td>
		<td> <?= $row["nama"]; ?> </td>
		<td> <?= $row["email"]; ?> </td>
		<td> <?= $row["jurusan"]; ?> </td>
	</tr>
<?php $i++; ?>

<?php endforeach; ?>
	
</table>
</body>
</html>
<!-- koneksi ke database -->
<?php 
$conn=mysqli_connect("localhost" /*ini nama host nya*/,"root"/*username mysqlnya*/,""/*password mysqlnya*/,"phpdasar");

//selanjutnya ambil data dari mysql, ambil tabel mahasiswa / queri mahasiswa
$result=mysqli_query($conn, "SELECT * FROM mahasiswa") 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<table border="1" cellpadding="10" cellspacing="0">
	
	
	 

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NPM</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>

	</tr>

	<?php $i = 1; ?>
	<?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
	<tr>
		<td> <?= $i; ?> </td>
		<td><a href="">edit </a> | <a href="">delete</a></td>
		<td><img src="img/<?php echo $row ["photo"]; ?> " width="50" > </td>
		<td> <?= $row["npm"]; ?> </td>
		<td> <?= $row["nama"]; ?> </td>
		<td> <?= $row["email"]; ?> </td>
		<td> <?= $row["jurusan"]; ?> </td>
	</tr>
<?php $i++; ?>
<?php endwhile; ?>
	
</table>
</body>
</html>
<?php 

//KONEKSI DULU  KE DBMS

require 'functions.php';

//kita cek dulu tombol nya sudah di tekan atau belum

if (isset($_POST["submit"])) {


	

	//cek apakah data berhasil di tambahkan atau tidak
	if ( tambah ($_POST) > 0) {
		echo "

			<script> 
				alert('data berhasil disimpan');
				document.location.href='index.php'

			</script>	
				";
	}else {
		echo "
		<script> 
				alert('data berhasil disimpan');
				document.location.href='index.php'

		</script>";
	}


}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah data mahasiswa</title>
</head>
<body>
<h1>Tambah Data Mahasiswa</h1>
<form action="" method="post">
<ul>
	<li>
		<label for="nama">Nama</label>
		<input type="text" name="nama" id="nama" required>
	</li>
	<li>
		<label for="npm">NPM</label>
		<input type="text" name="npm" id="npm" required>
	</li>
	<li>
		<label for="email">Email</label>
		<input type="text" name="email" id="email" required>
	</li>
	<li>
		<label for="jurusan">Jurusan</label>
		<input type="text" name="jurusan" id="jurusan" required>
	</li>
	<li>
		<label for="gambar">Gambar</label>
		<input type="text" name="photo" id="gambar" required>
	</li>

	<li>
		<button type="submit" name="submit">Tambah Data!</button>
	</li>
</ul>
</form>
</body>
</html>
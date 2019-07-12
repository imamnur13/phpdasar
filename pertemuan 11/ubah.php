<?php 

//KONEKSI DULU  KE DBMS

require 'functions.php';


//ambil data id dari url
$id = $_GET["id"];


//queri data mahasiswa berdasarkan di
$mhs = query( "SELECT * FROM mahasiswa WHERE id = $id" )[0];

//kita cek dulu tombol nya sudah di tekan atau belum

if (isset($_POST["submit"])) {


	

	//cek apakah data berhasil di ubah atau tidak
	if ( ubah ($_POST) > 0) {
		echo "

			<script> 
				alert('data berhasil diubah');
				document.location.href='index.php'

			</script>	
				";
	}else {
		echo "
		<script> 
				alert('data gagal didubah');
				

		</script>";
	}


}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Update data mahasiswa</title>
</head>
<body>
<h1>Update Data Mahasiswa</h1>
<form action="" method="post">
	<input type="hidden" name="id" value="<?= $mhs ["id"];  ?>">
<ul>
	<li>
		<label for="nama">Nama</label>
		<input type="text" name="nama" id="nama"  value="<?= $mhs["nama"];  ?>">
	</li>
	<li>
		<label for="npm">NPM</label>
		<input type="text" name="npm" id="npm" required value="<?= $mhs["npm"];  ?>">
	</li>
	<li>
		<label for="email">Email</label>
		<input type="text" name="email" id="email"  value="<?= $mhs["email"];  ?>">
	</li>
	<li>
		<label for="jurusan">Jurusan</label>
		<input type="text" name="jurusan" id="jurusan"  value="<?= $mhs["jurusan"];  ?>">
	</li>
	<li>
		<label for="gambar">Gambar</label>
		<input type="text" name="photo" id="gambar"  value="<?= $mhs["photo"];  ?>">
	</li>

	<li>
		<button type="submit" name="submit">Update Data!</button>
	</li>
</ul>
</form>
</body>
</html>
<?php 
//koneksi ke database myadmin

$conn = mysqli_connect("localhost" /*ini nama host nya*/,"root"/*username mysqlnya*/,""/*password mysqlnya*/,"phpdasar");



function query($query){

	global $conn;
	$result = mysqli_query($conn, $query);
	$rows=[];
	while ( $row = mysqli_fetch_assoc($result)){
		$rows[]=$row;

	}

	return $rows;
}


function tambah($data){
		//ambil data dari form

	global $conn;
	
	$nama = htmlspecialchars($data["nama"]);
	$npm = htmlspecialchars($data["npm"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["photo"]);

	//setelah itu query insert data

	$query = "INSERT INTO mahasiswa
				VALUES 
				
				('id','$nama','$npm','$email','$jurusan','$gambar')
				
				";
	mysqli_query($conn, $query);


	return mysqli_affected_rows($conn);
}



function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

	return mysqli_affected_rows($conn);
}





function ubah($data){

		global $conn;
	
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$npm = htmlspecialchars($data["npm"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["photo"]);

	//setelah itu query insert data

	$query = "UPDATE mahasiswa SET 
				nama = '$nama',
				npm = '$npm',
				email = '$email',
				jurusan = '$jurusan',
				photo = '$gambar'

				WHERE id = $id
				";


	mysqli_query($conn, $query);


	return mysqli_affected_rows($conn);



}









?>
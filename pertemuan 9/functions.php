<?php 
//koneksi ke database myadmin

$conn = mysqli_connect("localhost" /*ini nama host nya*/,"root"/*username mysqlnya*/,""/*password mysqlnya*/,"phpdasar");

if (!$conn) {
	die("Your Not Connected, Please check for database connection :" . mysqli_connect_error());
}else{
	echo "your is Connected Now";
}


function query($query){

	global $conn;
	$result = mysqli_query($conn, $query);
	$rows=[];
	while ( $row = mysqli_fetch_assoc($result)){
		$rows[]=$row;

	}

	return $rows;
}


?>
<?php
$server = "localhost";
$user	="root";
$password = "";
$nama_database = "proyek14";

$db = mysqli_connect($server, $user, $password, $nama_database);
//echo "Berhasil Terhubung.....<br>";
if( !$db ){
	die(mysqli_connect_error());
	}else{
		//echo "berhasil terkoneksi.......";
	}
?>
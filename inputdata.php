<?php
require_once'koneksiswa.php';
$nama=($_POST['nama']);
$alamat=($_POST['alamat']);
$jenisk=($_POST['gender']);
$agama=($_POST['agama']);
$sekolah=($_POST['asal']);

$query="insert into siswa (nama,alamat,jenisk,agama,sekolah)
		value ('$nama','$alamat','$jenisk','$agama','$sekolah');";
		//echo "$query";

		if (mysqli_query($db, $query)) 
		{
			//echo "Berhasil Menambahkan data";
			require_once'index.php';
			echo "<br><br>Data Berhasil Ditambahkan!";

		}
		else{
			//echo "Gagal Bro <br>";
			require_once'index.php';
			echo "<br><br>Data Gagal Ditambahkan!";		}


?>
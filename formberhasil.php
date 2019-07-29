<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
</head>

<body>
	<h2>Formulir Pendaftaran Siswa Baru</h2>
	<form action="inputdata.php" method="POST">
		<div class="container">
			<hr>
			<label for="nama"><b>Nama : </b></label>
			<input type="text" name="nama" placeholder="Nama" required>
			<br> <br>
			<label for="alamat"><b>Alamat : </b></label>
			<input type="text" name="alamat" placeholder="Alamat" required>
			<br><br>
			<label for="gender"><b>Jenis Kelamin</b></label>
				<form>
					<input type="radio" name="gender" value="Pria">Pria 
					<input type="radio" name="gender" value="Wanita">Wanita
				</form>
			<br><br>
			<label><b>Agama : </b></label>
					<select name="agama">
						<option value="pilih" selected="">Pilih</option>
						<option value="Islam">Islam</option>
						<option value="Kristen Katolik">Kristen Katolik</option>
						<option value="Kristen Protestan">kristen Protestan</option>
						<option value="Hindu">Hindu</option>
						<option value="Budha">Budha</option>
					</select>
				<br><br>
			<label for="asal"><b>Asal Sekolah : </b></label>
			<input type="text" name="asal" placeholder="Asal Sekolah" required>
			<br><br>
			<button type="submit" class="tambah">Input Data</button>
		</div>
	</form>
<?php
require_once'koneksiswa.php';
$nama=($_POST['nama']);
$alamat=($_POST['alamat']);
$jenisk=($_POST['gender']);
$agama=($_POST['agama']);
$sekolah=($_POST['asal']);

$query="insert into siswa (nama,alamat,jenisk,agama,sekolah)
		value ('$nama','$alamat','$jenisk','$agama','$sekolah');";
		echo "$query";

		if (mysqli_query($db, $query)) 
		{
			echo "Berhasil Menambahkan data";
		}
		else{
			echo "Gagal Bro <br>";
		}


?>
</body>
</html>
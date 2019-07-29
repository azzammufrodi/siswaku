<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="stylemenu.css">
</head>
<body>
	
	<div id=main>
	<table class="table table-striped">
	<thead>
		<h2>Daftar Database yang Tersedia</h2>
		<a href="formulir.php">(+)Daftar Baru<br><br></a>
		<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Jenis Kelamin</th>
		<th>Agama</th>
		<th>Asal Sekolah</th>
		<th>Keterangan</th>
		</tr>
	</thead>
<tbody>
	<?php
			require_once 'koneksiswa.php';
			$query = $db->prepare("SELECT * FROM siswa");
			$query -> execute();
			$result = $query->get_result();
			while($row=$result->fetch_assoc()) {
			?>
	<tr>
		<td><?php echo "string"; ?></td>
		<td><?php echo $row['nama'];?></td>
		<td><?php echo $row['alamat'];?></td>
		<td><?php echo $row['jenisk'];?></td>
		<td><?php echo $row['agama'];?></td>
		<td><?php echo $row['sekolah'];?></td>
		<td>
		<button type="button" class="btn btn-primary">Edit</button>
		<button type="button" class="btn btn-danger">Hapus</button>
		</td>
	</tr>
	<?php
	}
	?>
<a target="_blank" href="otwexcel.php"  class="btn btn-outline-info">Cetak Data</a>
</tbody>
</table>
</div>
</body>
</html>	
<!DOCTYPE html>
<html>
<head>
	<title>Data Peserta</title>
	
</head>
<body>
	
	<div id=main>
		<?php
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Data Peserta.xls");
		?>
	<table border="3" width="500px">
	<thead>
		<h2>Daftar Database yang Tersedia</h2>
		<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Jenis Kelamin</th>
		<th>Agama</th>
		<th>Asal Sekolah</th>
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
	</tr>
	<?php
	}
	?>

</tbody>
</table>
</div>
</body>
</html>	
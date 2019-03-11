<!DOCTYPE html>
<html>
<head>
	<title>Latihan CRUD</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<style>
		.tengah {
		position: absolute;
		margin-left: auto;
		margin-right: auto;
		left: 20px;
		right: 20px;
		width: auto;
		height : 800px;
		background-color: LightCyan;
		border: 1px solid black; }
	</style>
	</head>
<body>
	<div class="tengah">
	<h3><p align="center"><a href="index.php">Halaman Muka</a> / <a href="tambah.php">Halaman Admin</a></p>
	<p>Data Praktikan</p></h3>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#cccccc">
			<td>No.</td>
			<td>NIM</td>
			<td>Nama Lengkap</td>
			<td>KOM</td>
			<td>Jurusan</td>
			<td>Alamat</td>
			<td>Opsi</td>
		</tr>

		<?php
		include_once 'koneksi.php';
		$query = mysqli_query($koneksi, "SELECT * From db_mahasiswa order by nim desc") or die(mysqli_error());
		if (mysqli_num_rows($query) == 0) {
			echo "<tr align='center'><td colspan='6'>Tidak ada data !</td></tr>";
		} else {
			$no = 1;
			while ($data = mysqli_fetch_assoc($query)) {
				echo 	"<tr>".
						"<td>".$no."</td>".
						"<td>".$data['nim']."</td>".
						"<td>".$data['nama']."</td>".
						"<td>".$data['kom']."</td>".
						"<td>".$data['jurusan']."</td>".
						"<td>".$data['alamat']."</td>".
						"<td><a href='edit.php?id=".$data['id_mhs']."'>edit</a> / <a href='hapus.php?id=".$data['id_mhs']."' onclick='return confirm(\'yakin ?\')'>hapus</a></td>";
						$no++;
			}
		}
		
		?>
	</table>
	</div>
</body>
</html>
<?php
if (isset($_POST['tambah'])) {
	include_once 'koneksi.php';
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$kom = $_POST['kom'];
	$jurusan = $_POST['jurusan'];
	$alamat = $_POST['alamat'];
	$input = mysqli_query($koneksi,"Insert into db_mahasiswa values (null, '$nim', '$nama', '$kom', '$jurusan','$alamat')");
	if ($input) {
		echo '<h3>Data berhasil di tambahkan! <br>';
		echo '<a href="index.php">Beranda</a> &nbsp;&nbsp;';
		echo '<a href="tambah.php">Tambah</a>';
		echo "
		<script>
			window.location = 'index.php';
		</script>";	
	}else{
		echo 'Gagal menambahkan data! ';
		echo '<a href="tambah.php">Kembali</a>';	
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>

<?php
	include 'koneksi.php';
	$nim	= $_POST['nim'];
	$nama_mahasiswa	= $_POST['nama_mahasiswa'];
	$id_prodi	= $_POST['id_prodi'];

	
	$sql	= mysqli_query($connect, "UPDATE mahasiswa SET nim = '$nim',nama_mahasiswa = '$nama_mahasiswa' , id_prodi = '$id_prodi' WHERE `mahasiswa`.`id_prodi` = `id_prodi`");	
	if($sql){
		header('location:..\index.php?page=mahasiswa');
	}
	else{
		echo 'Gagal ba simpan leh';
	}
?>
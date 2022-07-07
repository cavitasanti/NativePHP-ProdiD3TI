<?php
	include 'koneksi.php';
	$id_prodi	= $_POST['id_prodi'];
	$nama_prodi	= $_POST['nama_prodi'];
	$konsentrasi_prodi	= $_POST['konsentrasi_prodi'];
	$diskripsi_prodi	= $_POST['diskripsi_prodi'];
	

	$sql	= mysqli_query($connect, "update prodi set nama_prodi = '$nama_prodi' , diskripsi_prodi = '$diskripsi_prodi', konsentrasi_prodi = '$konsentrasi_prodi' WHERE id_prodi = '$id_prodi'");	
	if($sql){
		header('location:..\index.php?page=prodi');
	}
	else{
		echo 'Gagal ba simpan leh';
	}


?>
<?php

include 'koneksi.php'; 

$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$id_prodi = $_POST['id_prodi'];


$sql = mysqli_query($connect, "insert into mahasiswa (nim,nama_mahasiswa,id_prodi) values('$nim','$nama_mahasiswa','$id_prodi')");

if($sql){header('location:..\index.php?page=mahasiswa');}
else{echo 'Gagal ba simpan leh';}
?>
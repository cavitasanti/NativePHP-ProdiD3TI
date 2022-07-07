<?php

include 'koneksi.php'; 

$nama_prodi = $_POST['nama_prodi'];
$konsentrasi_prodi = $_POST['konsentrasi_prodi'];
$diskripsi_prodi = $_POST['diskripsi_prodi'];


$sql = mysqli_query($connect, "insert into prodi (nama_prodi,konsentrasi_prodi,diskripsi_prodi) values('$nama_prodi','$konsentrasi_prodi','$diskripsi_prodi')");

if($sql){header('location:..\index.php?page=prodi');}
else{echo 'Gagal ba simpan leh';}
?>
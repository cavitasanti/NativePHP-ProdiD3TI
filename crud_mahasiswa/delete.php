<?php 
include 'koneksi.php'; 
$sql	= mysqli_query($connect, "select * from mahasiswa where nim = '$_GET[nim]'");
$data = mysqli_fetch_array($sql);

if ($data['nim']) {
	$sql	= mysqli_query($connect, "DELETE FROM mahasiswa WHERE nim = '$_GET[nim]'");
	 header('location:..\index.php?page=mahasiswa');
 
}
?>

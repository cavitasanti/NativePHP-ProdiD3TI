<?php 
include 'koneksi.php'; 
$sql	= mysqli_query($connect, "select * from prodi where id_prodi = '$_GET[id_prodi]'");
$data = mysqli_fetch_array($sql);

if ($data['id_prodi']) {
	$sql	= mysqli_query($connect, "DELETE FROM prodi WHERE id_prodi = '$_GET[id_prodi]'");?>
	<?php echo "<script>location='prodi.php'</script>";	
 
}
?>

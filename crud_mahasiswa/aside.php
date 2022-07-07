<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css\bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body> 
 <style type="text/css"> 
 body{
 	background-image: url("b.jpg");
 }
 .table{
 	text-align: center;
 	width: 60%;

 }
 img{
 	width: 50%;
 }

 </style>
<?php
	include 'koneksi.php'; 
	$sql = mysqli_query($connect, "select * from mahasiswa");
	$sql2 = mysqli_query($connect, "select id_prodi, konsentrasi_prodi from prodi"); ?>

<table border="1" class="table" align="center">
	<thead class="table-dark">
		<td colspan="3">Profile Mahasiswa</td>
	</thead>
		<?php while ($data = mysqli_fetch_array($sql)) { ?>

	<tr class="table-secondary">
		<td rowspan="4"><img src="crud_mahasiswa/foto.png"></td>
		<td>NIM</td>
		<td><?php echo $data['nim'];?></td>
	</tr>
		<tr class="table-secondary">
		<td>NAMA</td>
		<td><?php echo $data['nama_mahasiswa'];?></td>
	</tr>
	</tr>
		<tr class="table-secondary">
		<td>Konsentrasi</td>	<?php while ($data2 = mysqli_fetch_array($sql2) ) {?>
		<td><?php if ($data['id_prodi']=$data2['id_prodi']) {
			echo $data2['konsentrasi_prodi']; }?></td>
	</tr>
	<tr class="table-secondary">
		<td class="aaa" colspan="3"><?php if (isset($_SESSION['username'])) { ?>
		<center>	<a href="crud_mahasiswa/form_update.php?nim=<?php echo $data['nim']; ?>" class="btn btn-info">EDIT</a>
</td><?php ; }?></tr>
	<?php break;} }?>

</table>	
</body>
</html>
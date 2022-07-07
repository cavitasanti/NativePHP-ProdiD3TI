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
 }

 </style>
<?php
	include 'koneksi.php'; 
	$sql = mysqli_query($connect, "select * from mahasiswa");
	$sql2 = mysqli_query($connect, "select id_prodi, konsentrasi_prodi from prodi");
	$no=1; ?>

<table border="1" class="table">
	<thead class="table-dark">

		<td>NIM</td>
		<td>Nama Mahasiswa</td>
		<td>Konsentrasi</td>
		<td>Button</td>

	</thead>
	<?php while ($data = mysqli_fetch_array($sql)) { ?>

	<tr class="table-secondary">
		<td><?php echo $data['nim'];?></td>
		<td><?php echo $data['nama_mahasiswa'];?></td>	
		<?php while ($data2 = mysqli_fetch_array($sql2) ) {?>
		<td><?php echo $data['id_prodi']=$data2['konsentrasi_prodi']; break;}?></td>
		<td class="aaa">
			<a href="index.php?page=profile" class="btn btn-info">Profile</a>


		<?php 

    if (isset($_SESSION['username'])) { ?>
        		<td class="aaa"><a href="crud_mahasiswa/form_update.php?nim=<?php echo $data['nim']; ?>" class="btn btn-info">EDIT</a> 
			<a href="crud_mahasiswa/delete.php?nim=<?php echo $data['nim'];?>" class="btn btn-danger">DELETE</a></td><?php ; } }?>
	</tr>   <?php if (isset($_SESSION['username'])) { ?>
	<tr><td colspan="7"><center><a href='crud_mahasiswa/form.php' class="btn btn-warning">Create</a></td></tr>
		<?php ; }?>



			
</table>	
</body>
</html>
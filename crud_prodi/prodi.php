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
	$sql = mysqli_query($connect, "select * from prodi"); ?>

<table border="1" class="table">
	<thead class="table-dark">
		<td>ID PRODI</td>
		<td>Nama Prodi</td>
		<td>Konsentrasi</td>
		<td>Deskripsi</td>
		   <?php if (isset($_SESSION['username'])) { ?>
		<td>Button</td> <?php } ?>

	</thead>
	<?php while ($data = mysqli_fetch_array($sql)) {?>
	<tr class="table-secondary">
		<td><?php echo $data['id_prodi'];?></td>
		<td><?php echo $data['nama_prodi'];?></td>
		<td><?php echo $data['konsentrasi_prodi'];?></td>
		<td><?php echo $data['diskripsi_prodi'];?></td>
		<?php if (isset($_SESSION['username'])) { ?>
        		<td class="aaa"><a href="crud_prodi/form_update.php?id_prodi=<?php echo $data['id_prodi']; ?>" class="btn btn-info">EDIT</a> <a href="crud_prodi/delete.php?id_prodi=<?php echo $data['id_prodi'];?>" class="btn btn-danger">DELETE</a></td><?php ;}} ?>
	</tr>		<?php if (isset($_SESSION['username'])) { ?>
	<tr><td colspan="7"><center><a href='crud_prodi/form.php' class="btn btn-warning">Create</a></td></tr>
		<?php ;}?>


</table>	
</body>
</html>
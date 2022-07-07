<?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location:..\login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="..\css\bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
	<style type="text/css">
		form{

			text-align: center;
			position: fixed;
			bottom: 150px;
			right: 470px;
			width: 450px;
		}
		table{
			text-align: left;

		}
		.blabla{
			text-align: center;
		}
		body{
			background-color: #fafad2;
		}
	</style>
	<?php 
	include 'koneksi.php';
	$sql	= mysqli_query($connect, "select * from prodi where id_prodi = '$_GET[id_prodi]'");
	
	 $data = mysqli_fetch_array($sql) ?>
	<form action="update.php" method="POST">
		<table align="center" border="" class="table">
			<thead class="table-dark">
				<td colspan="2">Update Data Prodi</td>
			</thead> 
			<tr> <td>id prodi tak perlu diubah</td>
				<td> <input name="id_prodi" placeholder=""<?php echo $data['id_prodi']?>  maxlength="3" value="<?php echo $data['id_prodi']?> "></td>
			</tr> 
			<tr><td>Nama Prodi</td>
				<td> <input type="text" name="nama_prodi" required="" value="<?php echo $data['nama_prodi']?> "></td>
			</tr>
			<tr><td>Konsentrasi</td>
				<td> <input type="text" name="konsentrasi_prodi" required="" value="<?php echo $data['konsentrasi_prodi']?> "></td>
			</tr>
			<tr><td>Deskripsi</td>
				<td> <input type="text" name="diskripsi_prodi" maxlength="100" required="" value="<?php echo $data['diskripsi_prodi']?> "></td>
			</tr>
			<tr class="blabla">
				<td colspan="2"><input type="submit" value="Edit" class="btn btn-primary"> <input type="reset" class="btn btn-warning"></td>
			</tr>
		</table>
	</form>
</body>
</html>
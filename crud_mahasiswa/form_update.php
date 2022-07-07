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
	$sql	= mysqli_query($connect, "select * from mahasiswa where nim = '$_GET[nim]'");
	
	 $data = mysqli_fetch_array($sql) ?>
	<form action="update.php" method="POST">
		<table align="center" border="" class="table">
			<thead class="table-dark">
				<td  colspan="2">Update Mahasiswa</td>
			</thead> 
			<tr> <td>id prodi tak perlu diubah</td>
				<td> <input name="nim" placeholder=""<?php echo $data['nim']?>   value="<?php echo $data['nim']?> "></td>
			</tr> 
			<tr><td>Nama</td>
				<td> <input type="text" name="nama_mahasiswa" required="" value="<?php echo $data['nama_mahasiswa']?> "></td>
			</tr>
			<tr><td>Konsentrasi</td>
				<td> 
					<select name="id_prodi">
					  <option value="" selected></option>
					  <option value="1">Animasi 2 Dimensi</option>
					  <option value="2">Web Development</option>
					  <option value="3">Jaringan</option>
					  <option value="4">Desain Grafis</option>
					</select>
				</td>
			</tr>

			<tr class="blabla">
				<td colspan="2"><input type="submit" value="Edit" class="btn btn-primary"> <input type="reset" class="btn btn-warning"></td>
			</tr>
		</table>
	</form>
</body>
</html>
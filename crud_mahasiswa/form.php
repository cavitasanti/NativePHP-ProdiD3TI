<?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location:..\login.php');
    }
?>
<html>
<head>
<center>
	<title></title>
	<link rel="stylesheet" href="..\css\bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
			background-color: pink;
		}
	</style>
<body>
<tbody>
	<form action="create.php" method="post">
		<table align="center" class="table" width="60%">
		<thead class="table-dark">
		<td colspan="2"> INPUT DATA MAHASISWA </td>
		</thead>
			<tr> 
				<td> NIM </td>
					<td><input type="number" name="nim" required=""></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td> <input type="text" name="nama_mahasiswa" required=""></td>
			</tr>
			<tr><td>Konsentrasi</td>
				<td> <select name="id_prodi">
					  <option value="" selected>Konsentrasi</option>
					  <option value="1">Animasi 2 Dimensi</option>
					  <option value="2">Web Development</option>
					  <option value="3">Jaringan</option>
					  <option value="4">Desain Grafis</option>
					</select></td>
			</tr>
			<tr class="blabla">
				<td colspan="2"><input type="submit" value="Input" class="btn btn-primary"> &nbsp
				<input type="reset" class="btn btn-warning"> &nbsp
				<a href="..\index.php?page=mahasiswa.php" class="btn btn-info">Cari Data</a></td>
			</tr>
		</table>
	</form>
	</body></center></tbody>
</body>
</html>
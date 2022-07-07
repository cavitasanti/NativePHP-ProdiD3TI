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
		<td colspan="2"> INPUT DATA PROGRAM STUDI </td>
		</thead>
			<tr> 
				<td> Nama Prodi </td>
					<td><input type="text" name="nama_prodi" required=""></td>
			</tr>
			<tr>
				<td>Konsentrasi Prodi</td>
				<td> <input type="text" name="konsentrasi_prodi" required=""></td>
			</tr>
			<tr><td>Deskripsi</td>
				<td> <input type="text" name="diskripsi_prodi" required=""></td>
			</tr>
			<tr class="blabla">
				<td colspan="2"><input type="submit" value="Input" class="btn btn-primary"> &nbsp
				<input type="reset" class="btn btn-warning"> &nbsp
				<a href="tampilkamar.php" class="btn btn-info">Cari Data</a></td>
			</tr>
		</table>
	</form>
	</body></center></tbody>
</body>
</html>
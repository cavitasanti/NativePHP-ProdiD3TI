<html>
<head>
<center>
	<title></title>
	<link rel="stylesheet" href="css\bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		form{
			background-image: url("3.jpg");
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
	<form action="proseslogin.php" method="post">
		<table align="center" class="table" width="60%">
		<thead class="table-dark">
		<td colspan="2" align="center"> Silahkan Login </td>
		</thead>
			<tr> 
				<td> username </td>
					<td><input type="text" name="email" required=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td> <input type="password" name="password" required=""></td>
			</tr>
			<tr class="blabla">
				<td colspan="2"><input type="submit" value="Input" class="btn btn-primary"> &nbsp
				<input type="reset" class="btn btn-warning"> &nbsp
				<a href="index.php" class="btn btn-info">Back</a></td>
			</tr>
		</table>
	</form>
	</body></center></tbody>
</body>
</html>
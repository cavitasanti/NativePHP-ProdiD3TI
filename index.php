<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php include 'head.php'; ?>

<div class="content">
	<?php include 'navbar.php'; ?>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'prodi':
				include "crud_prodi/prodi.php";
				break;
			case 'mahasiswa':
				include "crud_mahasiswa/mahasiswa.php";
				break;	
			case 'profile':
				include "crud_mahasiswa/aside.php";
				break;
			case 'data':
				include "content.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "home.php";
	}
 
	 ?>
 
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>

	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=prodi">PROGRAM STUDI</a></li>
			<li><a href="index.php?page=mahasiswa">MAHASISWA</a></li>
			<li><a href="index.php?page=data">DATA</a></li>
			<?php 
    session_start();
    if (isset($_SESSION['username'])) {?>
        <li><a href="logout.php">Log Out</a>
   <?php ; }else{?><li><a href="login.php">LOGIN</a></li><?php } ?>
		</ul>
	</div>
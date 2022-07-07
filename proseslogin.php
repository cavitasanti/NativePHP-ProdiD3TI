<?php 
include 'koneksi.php'; 
session_start();
$sql = mysqli_query($connect, "select * from user");
$data = mysqli_fetch_array($sql);
$username = $data['email'];
$password = $data['password'];

if ($_POST['email'] && $_POST['password'] ){
	if ($_POST['email']==$username && $_POST['password']==$password) {
		$_SESSION['username']=$username;
		header('location:index.php');}
	elseif ($_POST['email']!=$username && $_POST['password']==$password) {
		echo "Email anda salah";}
	elseif ($_POST['email']==$username && $_POST['password']!=$password) {
		echo "Password anda salah";	}
	elseif ($_POST['email']!=$username && $_POST['password']!=$password) {
		echo "Email dan Pass anda salah";
	}}
else{
	echo "username dan Pass tidak boleh kosong";
}

 ?>
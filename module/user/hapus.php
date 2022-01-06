<?php
include 'koneksi.php';
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
if(empty($_SESSION['session_tiket_user']) && empty($_SESSION['session_tiket_pass'])){
	echo "Anda Harus Login. Login <a href=\"index.php\">Di Sini</a>";
}
else{
	if(access!="yes"){ 
		echo "Denied."; 
	} 
	else {
		$id=mysqli_real_escape_string($con,$_GET['id']);
		mysqli_query($con,"DELETE FROM tiket_user WHERE id='$id'");
		echo "<meta http-equiv='refresh' content='0; url=admin.php?page=user'>";
		
	}
}
?>
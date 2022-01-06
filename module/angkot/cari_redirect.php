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
		$cari=mysqli_real_escape_string($con, $_POST['q']);
		echo "<meta http-equiv='refresh' content='0; url=admin.php?page=angkot&action=cari&q=$cari'>";
	}
}
?>
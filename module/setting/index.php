<?php
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
		if(isset($_GET['action'])){
			$aksi = $_GET['action'];

		}else{
			$aksi = "";
		}
		switch($aksi){
			case 'ubah':
				include "ubah.php";
			break;
			
			case 'proses_ubah':
				include "proses_ubah.php";
			break;
			
			default:
				include "ubah.php";
			break;
		}
	}
}
?>
<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

if(empty($_SESSION['session_tiket_user']) && empty($_SESSION['session_tiket_pass'])){
	echo "Anda Harus Login. Login <a href=\"index.php\">Di Sini</a>";
}
else{
	if('access' == "yes"){ 
		echo "Denied."; 
	} 
	else {
		if(isset($_GET['action'])){
			$aksi = $_GET['action'];

		}else{
			$aksi = "";
		}
		switch( $aksi){
			case 'lihat':
				include "lihat.php";
			break;
			
			case 'tambah':
				include "tambah.php";
			break;
			
			case 'proses_tambah':
				include "proses_tambah.php";
			break;
			
			case 'ubah':
				include "ubah.php";
			break;
			
			case 'proses_ubah':
				include "proses_ubah.php";
			break;
			
			case 'hapus':
				include "hapus.php";
			break;
			
			case 'cari':
				include "cari.php";
			break;
			
			case 'cari_redirect':
				include "cari_redirect.php";
			break;
			
			case 'detail':
				include "detail.php";
			break;
			
			default:
				include "lihat.php";
			break;
		}
	}
}
?>
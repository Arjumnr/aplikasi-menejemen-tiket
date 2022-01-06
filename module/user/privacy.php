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
?>

<div class="theme-content-title">Ubah Password - Manajemen User</div>
<div class="theme-content-area">
	<?php
		$id=mysqli_real_escape_string($con,$_GET['id']);
		$query=mysqli_query($con, "SELECT * FROM tiket_user WHERE id='$id'");
		$data=mysqli_fetch_array($query);
	?>
	<form action="admin.php?page=user&action=proses_privacy" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
		<table cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td width="200" align="right">Password Baru</td>
				<td align="center" width="7">:</td>
				<td><input type="password" name="password" autocomplete="off"  /></td>
			</tr>
			<tr>
				<td width="200" align="right">Informasi</td>
				<td align="center" width="7">:</td>
				<td>* Jika password tidak ingin diubah, kosongkan saja.</td>
			</tr>
			<tr class="saveit">
				<td width="200">&nbsp;</td>
				<td width="7">&nbsp;</td>
				<td colspan="3"><input type="submit" name="submit" value="SIMPAN DATA" /></td>
			</tr>
		</table>
	</form>
</div>

<?php
	}
}
?>
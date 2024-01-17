<?php
require"../../koneksi.php";
$id=$_POST['id'];
$satu=$_POST['1'];
$dua=$_POST['2'];
$tiga=$_POST['3'];
	$query = mysqli_query($conn,"update admin set
	id_admin='$id', 	 			
	username='$satu',  			
	password='$dua', 			
	hak_akses='$tiga'
	where id_admin='$id'
	");
	if($query) {
	echo "data berhasil diedit";
	header('location:../web_akun.php');
	}
	else {
	echo "data gagal diedit";
	header('location:../web_akun.php');
	}
?>

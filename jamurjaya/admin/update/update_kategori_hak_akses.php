<?php
require"../../koneksi.php";
$id=$_POST['id'];
$satu=$_POST['1'];
$dua=$_POST['2'];
	$query = mysqli_query($conn,"update hak_akses set
	id_akses='$id', 	 			
	nama_hak_akses='$satu',  			
	deskipsi='$dua' 			
	where id_akses='$id'
	");
	if($query) {
header("refresh:0.1;url=../Add_Kategori_hak_akses.php");
	}
	else {
header("refresh:0.1;url=../Add_Kategori_hak_akses.php");

	}
	
?>
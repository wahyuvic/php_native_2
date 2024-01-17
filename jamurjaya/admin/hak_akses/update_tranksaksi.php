<?php
require"../../koneksi.php";
$id=$_POST['id'];
$data_update= htmlspecialchars($_POST['update_tranksaksi']);
	$query = mysqli_query($conn,"update gov_hak_akses set
	id_gov='$id', 	 			
	profil_akun='$data_update'	
	where id_gov='$id'
	");
	if($query) {
	echo "data transaksi berhasil diedit";
	}
	else {
	echo "data gagal di edit";
	}
?>
<?php
require"../../koneksi.php";
$id=$_POST['id'];
$data_update= htmlspecialchars($_POST['update_drink']);
	$query = mysqli_query($conn,"update gov_hak_akses set
	id_gov='$id', 	 			
	profil='$data_update'	
	where id_gov='$id'
	");
	if($query) {
	echo "data profil produksi berhasil diedit";
	}
	else {
	echo "data profil produksi di edit";
	}
?>
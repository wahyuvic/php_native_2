<?php
require"../koneksi.php";
//dekralasi variabel ////
$periode=$_POST['periode'];
$modal=$_POST['modal'];
$jumlah=$_POST['jumlah'];
$presentase=$_POST['presentase'];
$perkiraan=$_POST['perkiraan'];
$harga=$_POST['harga'];
$pendapatan=$_POST['pendapatan'];
/////////////////////////
	$id=$_POST['id'];
	$id_admin=$_COOKIE['id_admin'];
	$query = mysqli_query($conn,"update hasil_produksi set periode='$periode',modal='$modal',jumlah_baglog='$jumlah',presentase='$presentase',perkiraan='$perkiraan',harga='$harga',pendapatan='$pendapatan' where id_hasil='$id'");
		if($query) 
		{
		//jika query  berhasil 
		header('location:edit_prediksi.php?id='.$id_admin.'');
		}
		else 
		{
		//jika query tidak berhasil
		header('location:edit_prediksi.php?id='.$id_admin.'');
		}
	
?>
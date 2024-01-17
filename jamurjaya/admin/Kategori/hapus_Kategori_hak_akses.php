<?php
	require"../../koneksi.php";
	$id=$_GET['id'];
	$nomor=$_GET['no'];
	echo"$id";
	echo"$nomor";
	//*
	$sql1="DELETE FROM hak_akses WHERE hak_akses.id_akses='$id'";
	$sql2="DELETE FROM gov_hak_akses WHERE gov_hak_akses.id_hak_akses='$nomor'";
	$query1=mysqli_query($conn,$sql1);
	$query2=mysqli_query($conn,$sql2);
	header("refresh:0.1;url=../Add_Kategori_hak_akses.php");
	//*/
?>
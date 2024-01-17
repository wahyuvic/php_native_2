<?php
	include"../koneksi.php";
	$id=$_GET['id'];
	$sql="DELETE FROM  admin WHERE id_admin	='$id'";
	$query=mysqli_query($conn,$sql);
	header('location:web_akun.php');
?>
<?php
require"../koneksi.php";
//dekralasi variabel 
$username=$_POST['username'];
$password=$_POST['password'];
/////////////////////////////membuat insert update delete ///////////////////////////////
//no_urut
$no_urut = "SELECT MAX(id_admin) FROM app_admin";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////
//no_urut
$no_urut2 = "SELECT MAX(id_hasil) FROM hasil_produksi";
$result2 = mysqli_query($conn,$no_urut2);
$array_no_urut2 = mysqli_fetch_array($result2);
$no_urutnya2=$array_no_urut2[0]+1;
////////////////////////////////////////////////////////////////////////////////////////



$query = mysqli_query($conn,"insert  into app_admin values('$no_urutnya','$username','$password')");
$query2 = mysqli_query($conn,"insert  into hasil_produksi values('$no_urutnya2','1','0','0','0','0','0','0','$no_urutnya')");

	if($query) {
	//jika query tidak berhasil
	setcookie("pemberitahuan","$username Berhasil Daftar Akun", time()+10);
	setcookie("id_admin","$no_urutnya");
	setcookie("username","$username"); 
	header('location:index.php');
	}
	else {
	//jika query tidak berhasil
	setcookie("pemberitahuan","$username Gagal Daftar Akun", time()+10);
	header('location:app_login.php');
	
	
	}
?>
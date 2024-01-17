<?php
require"koneksi.php";
//dekralasi variabel 
$nama=$_POST['nama'];
$telepon=$_POST['no_telepon'];
$alamat=$_POST['alamat'];
$pesan=$_POST['pesan'];
//no_urut
$no_urut = "SELECT MAX(id_kontak) FROM kontak_kami";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

$query = mysqli_query($conn,"insert  into kontak_kami values('$no_urutnya','$nama','$alamat','$telepon','$pesan')");
	if($query) {
	//jika query  berhasil 
	setcookie("pemberitahuan","Pesan $nama Berhasil Di Kirim", time()+60);
	header('location:kontak.php');
	}
	else {
	//jika query tidak berhasil
	setcookie("pemberitahuan","Pesan Gagal Di Kirim", time()+60);
	header('location:kontak.php');
	} 

?>
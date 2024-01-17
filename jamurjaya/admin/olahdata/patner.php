<?php
require"../../koneksi.php";
//dekralasi variabel 
$judul=$_POST['Judul'];
$posisi=$_POST['posisi'];
$twitter=$_POST['twitter'];
$IG=$_POST['IG'];
$FB=$_POST['FB'];

$delete=$_GET['Olahdata'];
$olah_data=$_POST['Olahdata'];
//variabel menguplod gambar 
$tmp_name=$_FILES['gambar']['tmp_name'];
$nama_gambar=$_FILES['gambar']['name'];
/////////////////////////////membuat insert update delete ///////////////////////////////
//no_urut
$no_urut = "SELECT MAX(id_patner) FROM patner";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

if($olah_data=="Simpan")
{
//kondisi ketika gambar di simpan 
move_uploaded_file($tmp_name,"../../img/$nama_gambar");
$query = mysqli_query($conn,"insert  into patner values('$no_urutnya','$judul','$posisi','$nama_gambar','$twitter','$IG','$FB')");
	if($query) {
	//jika query tidak berhasil 
	header('location:../patner.php');
	}
	else {
	//jika query tidak berhasil
	header('location:../patner.php');
	}
} 

else if($olah_data=="Edit")
{
	$id=$_POST['id'];// dekralarsi edit untuk pengecualian
	if($nama_gambar=="")
	{
	//kondisi ketika edit tapi gambar tidak dirubah
	$query = mysqli_query($conn,"update patner set nama='$judul',posisi='$posisi',twiter='$twitter',instagram='$IG',fb='$FB' where id_patner='$id'");
		if($query) 
		{
		//jika query  berhasil 
		header('location:../patner.php');
		}
		else 
		{
		//jika query tidak berhasil
		header('location:../patner.php');
		}
	}
	else
	{
	move_uploaded_file($tmp_name,"../../img/$nama_gambar");
	$query = mysqli_query($conn,"update patner set nama='$judul',posisi='$posisi',foto='$nama_gambar',twiter='$twitter',instagram='$IG',fb='$FB' where id_patner='$id'");
		if($query) 
		{
		//jika query  berhasil 
		header('location:../patner.php');
		}
		else 
		{
		//jika query tidak berhasil
		echo"data Gagal di edit";
		//header('location:../patner.php');
		}
	}
}

else if($delete=="delete")
{
$id=$_GET['id'];
$sql="delete from patner where id_patner='$id'";
$query=mysqli_query($conn,$sql);
header('location:../patner.php');
}
?>
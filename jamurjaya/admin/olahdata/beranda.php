<?php
require"../../koneksi.php";
//dekralasi variabel 
$judul=$_POST['Judul'];
//$tanggal=$_POST['Tanggal'];
$keterangan=$_POST['keterangan'];
//$nama_gambar=$_POST['gambar'];
$delete=$_GET['Olahdata'];
$olah_data=$_POST['Olahdata'];
//variabel menguplod gambar 
$tmp_name=$_FILES['gambar']['tmp_name'];
$nama_gambar=$_FILES['gambar']['name'];
/////////////////////////////membuat insert update delete ///////////////////////////////
//no_urut
$no_urut = "SELECT MAX(id_beranda) FROM beranda";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

if($olah_data=="Simpan")
{
//kondisi ketika gambar di simpan 
move_uploaded_file($tmp_name,"../../img/$nama_gambar");
$query = mysqli_query($conn,"insert  into beranda values('$no_urutnya','$judul','$nama_gambar','$keterangan')");
	if($query) {
	//jika query tidak berhasil 
	header('location:../index.php');
	}
	else {
	//jika query tidak berhasil
	header('location:../index.php');
	}
} 

else if($olah_data=="Edit")
{
	$id=$_POST['id'];// dekralarsi edit untuk pengecualian
	if($nama_gambar=="")
	{
	//kondisi ketika edit tapi gambar tidak dirubah
	$query = mysqli_query($conn,"update beranda set judul='$judul',keterangan='$keterangan' where id_beranda='$id'");
		if($query) 
		{
		//jika query  berhasil 
		header('location:../index.php');
		}
		else 
		{
		//jika query tidak berhasil
		header('location:../index.php');
		}
	}
	else
	{
	move_uploaded_file($tmp_name,"../../img/$nama_gambar");
	$query = mysqli_query($conn,"update beranda set judul='$judul',gambar='$nama_gambar',keterangan='$keterangan'  where id_beranda='$id'");
		if($query) 
		{
		//jika query  berhasil 
		header('location:../index.php');
		}
		else 
		{
		//jika query tidak berhasil
		header('location:../index.php');
		}
	}
}

else if($delete=="delete")
{
$id=$_GET['id'];
$sql="delete from beranda where id_beranda='$id'";
$query=mysqli_query($conn,$sql);
header('location:../index.php');
}
?>
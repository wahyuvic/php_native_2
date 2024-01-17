<?php
require"../../koneksi.php";

$kategori=$_POST['kategori'];
$deskripsi=$_POST['deskripsi'];

if($kategori=="" && $deskripsi==""){
header("refresh:0.1;url=../Add_Kategori_hak_akses.php");
}
else if($kategori==""){

header("refresh:0.1;url=../Add_Kategori_hak_akses.php");
}

else if($deskripsi==""){
header("refresh:0.1;url=../Add_Kategori_hak_akses.php");
}

else{
///////////////////////////////////////////////////
$no_urut = "SELECT MAX(id_akses) FROM hak_akses ";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
echo"$no_urutnya";
///////////////////////////////////////////////////
$no_urut1 = "SELECT MAX(id_gov) FROM gov_hak_akses  ";
$result1 = mysqli_query($conn,$no_urut1);
$array_no_urut1 = mysqli_fetch_array($result1);
$no_urutnya1=$array_no_urut1[0]+1;

///////////////////////////////////////////////////

$query = mysqli_query($conn,"insert into hak_akses values
($no_urutnya,'$kategori','$deskripsi')");
///////////////////////////////////////////////////
$query2 = mysqli_query($conn,"insert into gov_hak_akses values
($no_urutnya1,'$no_urutnya','0','0','0','0','0','0')");
echo"$no_urutnya";
if($query2) {
echo "data $_POST[kategori] berhasil ditambahkan";
header("refresh:0.1;url=../Add_Kategori_hak_akses.php");
}
else {
header("refresh:0.1;url=../Add_Kategori_hak_akses.php");
echo "data gagal di ditambahkan";
}
}
?>
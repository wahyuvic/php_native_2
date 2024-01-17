<?php
require"../../koneksi.php";
//dekralasi variabel 
$delete=$_GET['Olahdata'];
////////////////////////////////////////////////////////////////////////////////////////
if($delete=="delete")
{
$id=$_GET['id'];
$sql="delete from hasil_produksi where id_admin='$id'";
$sql1="delete from app_admin where id_admin='$id'";
$query=mysqli_query($conn,$sql);
$query2=mysqli_query($conn,$sql1);
header('location:../app_prediksi.php');
}
?>
<?php
require"../../koneksi.php";
//dekralasi variabel 
$delete=$_GET['Olahdata'];
////////////////////////////////////////////////////////////////////////////////////////
if($delete=="delete")
{
$id=$_GET['id'];
$sql="delete from kontak_kami where id_kontak='$id'";
$query=mysqli_query($conn,$sql);
header('location:../pesan.php');
}
?>
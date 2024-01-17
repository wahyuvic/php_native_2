<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>Halaman Admin</title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" /></head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Halaman Admin Jamurku</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
<?php
include('aman.php');
require"../koneksi.php";
$id_admin=$_COOKIE['id'];
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sql="SELECT * FROM  gov_hak_akses,hak_akses  where gov_hak_akses.id_hak_akses=hak_akses.id_akses and gov_hak_akses.id_hak_akses='$id_admin'";
$query=mysqli_query($conn,$sql);
$hasil=mysqli_fetch_array($query);
$data_posisi="$hasil[nama_hak_akses]";//posisi dari admin
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($data==$data_posisi){
$privasi_beranda=substr($hasil[2],0,1);
$privasi_patner=substr($hasil[3],0,1);
$privasi_profil=substr($hasil[4],0,1);
$privasi_layanan=substr($hasil[5],0,1);
$privasi_kontak=substr($hasil[6],0,1);
$privasi_profil_akun=substr($hasil[7],0,1);
/////////////////////////////////////////////////////////////////
}
?>
       <?php 
		if($privasi_beranda=="V")
		{
		?>
		<li class="nav-item">
          <a class="nav-link text-white" href="index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Beranda</span>
          </a>
        </li>
		<?php 
		}
		else {
		} 
		if($privasi_patner=="V")
		{
		?>
        <li class="nav-item">
          <a class="nav-link text-white " href="patner.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Patner</span>
          </a>
        </li>
        <?php 
		}
		else {
		} 
		if($privasi_profil=="V")
		{
		?>
		<li class="nav-item">
          <a class="nav-link text-white " href="profil_produksi.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profil Produksi</span>
          </a>
        </li>
		<?php 
		}
		else {
		} 
		if($privasi_layanan=="V")
		{
		?>
        <li class="nav-item">
          <a class="nav-link text-white " href="layanan.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">layanan</span>
          </a>
        </li>
		<?php 
		}
		else {
		} 
		if($privasi_kontak=="V")
		{
		?>
        <li class="nav-item">
          <a class="nav-link text-white " href="pesan.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pesan</span>
          </a>
        </li>
        <li class="nav-item">
		<?php 
		}
		else {
		} 
		if($privasi_profil_akun=="V")
		{
		?>
          <a class="nav-link text-white " href="profil_admin.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profil</span>
          </a>
        </li>
		<?php 
		}
		else {
		} 
		?><a href="app_prediksi.php"></a>
		<li class="nav-item">
          <a class="nav-link text-white " href="app_prediksi.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Aplikasi Prediksi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="logout.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Keluar</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
   <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="logout.php">Halaman</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Halaman admin <?php $nama=$_COOKIE['username']; echo "$nama sebagai $data" ?></li>
          </ol>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="logout.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Keluar</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

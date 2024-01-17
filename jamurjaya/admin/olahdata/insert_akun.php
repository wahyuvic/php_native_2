<?php
require"../../koneksi.php";
$satu=$_POST['1'];
$dua=$_POST['2'];
$tiga=$_POST['3'];
//$empat=$_POST['4'];
$lima=$_POST['konfirmasi'];

	if($satu=="" && $dua=="" && $tiga=="--silahkan pilih--" && $lima==""){
	session_start();
	$_SESSION['pesan'] = 'Error !Username ,Password, Konfirmasi Password ,Hak akses  Dan Nama Cabang Harus Di isi  ';
	header('location:../web_akun.php');
	?>
		<?php
		
	}
	
	
	else if($satu=="" && $dua=="" && $tiga=="--silahkan pilih--"){
	session_start();
	$_SESSION['pesan'] = 'Error !Username ,Password ,Hak akses  Dan Nama Cabang Harus Di isi ';
	header('location:../web_akun.php');
	
	?>
		<?php
		
	}
	
	else if($satu=="" && $dua=="" && $tiga=="--silahkan pilih--" && $lima==""){
	session_start();
	$_SESSION['pesan'] = 'Error !Username ,Password ,Konfirmasi Password Dan Hak akses Harus Di isi ';
	header('location:../web_akun.php');
	
	?>
		<?php
		
	}
	
	else if($satu=="" && $dua=="" && $lima==""){
	session_start();
	$_SESSION['pesan'] = 'Error !Username ,Password ,Konfirmasi Password  Dan Nama Cabang Harus Di isi ';
	header('location:../web_akun.php');
	
	?>
		<?php
		
	}
	
	else if($satu=="" && $tiga=="--silahkan pilih--"  && $lima==""){
	session_start();
	$_SESSION['pesan'] = 'Error !Username ,Konfirmasi Password,Hak akses  Dan Nama Cabang Harus Di isi';
	header('location:../web_akun.php');
	

	
	?>
		<?php
		
	}

	else if($satu=="" && $dua=="" && $tiga=="--silahkan pilih--"){
	session_start();
	$_SESSION['pesan'] = 'Error !Username ,Password Dan Hak akses Harus Di isi';
	header('location:../web_akun.php');
	?>
		<?php
		
	}
	
	else if($satu=="" && $dua==""){
	session_start();
	$_SESSION['pesan'] = 'Error !Username ,Password , Dan Nama Cabang Harus Di isi ';
	header('location:../web_akun.php');
	?>
		<?php
		
	}
	
	else if($satu=="" && $dua=="" && $lima==""){
	session_start();
	$_SESSION['pesan'] = 'Error !Username ,Password , Dan Konfirmasi Password Harus Di Isi ';
	header('location:../web_akun.php');
	
	?>
		<?php
		
	}
	
	else if($satu=="" && $tiga=="--silahkan pilih--"){
	session_start();
	$_SESSION['pesan'] = 'Error !Username , Hak akses  Dan Nama Cabang Harus Di isi ';
	header('location:../web_akun.php');
	?>
		<?php
	}
	
	else if($dua=="" && $tiga=="--silahkan pilih--" && $lima==""){
	session_start();
	$_SESSION['pesan'] = 'Error !password , Hak akses , Konfirmasi Password Harus Di isi ';
	header('location:../web_akun.php');
	
	?>
		<?php
	}
	
	else if($dua=="" && $lima==""){
	session_start();
	$_SESSION['pesan'] = 'Error !password , Konfirmasi Password Dan Hak Akses  Harus Di isi ';
	header('location:../web_akun.php');
	
	?>
		
		<?php
		
	}
	
	

	else if($satu=="" && $dua==""){
	session_start();
	$_SESSION['pesan'] = 'Error !Username dan Password Harus Di isi ';
	header('location:../web_akun.php');
	?>
		<?php
		
	}
	else if($satu=="" && $tiga=="--silahkan pilih--"){
	session_start();
	$_SESSION['pesan'] = 'Error !Username Dan Hak akses   Harus Di Isi ';
	header('location:../web_akun.php');
	?>
		<?php
		
	}
	
	else if($satu==""){
	session_start();
	$_SESSION['pesan'] = 'Error !Username dan Nama Cabang Harus Di Isi ';
	header('location:../web_akun.php');
	
	?>
		<?php
		
	}
	
	else if($satu=="" && $lima==""){
	session_start();
	$_SESSION['pesan'] = 'Error !Username dan Konfrimasi Harus Di Isi ';
	header('location:../web_akun.php');
	
	?>
		<?php
		
	}
	
	else if($dua=="" && $tiga=="--silahkan pilih--"){
	session_start();
	$_SESSION['pesan'] = 'Error !Password Dan Hak akses  Harus Di Isi ';
	header('location:../web_akun.php');
	?>
		<?php
	}
	
	else if($dua==""){
	session_start();
	$_SESSION['pesan'] = 'Error !Password Nama Cabang Harus Di Isi ';
	header('location:../web_akun.php');
	
	?>
		<?php
	
	}
	
	else if($dua=="" && $lima==""){
	session_start();
	$_SESSION['pesan'] = 'Error !Password Nama Konfirmasi Password Harus Di Isi ';
	header('location:../web_akun.php');
	
	?>
		<?php
		
	}
	
	else if($tiga=="--silahkan pilih--"){
	session_start();
	$_SESSION['pesan'] = 'Error !Hak Akses Dan Nama Cabang Harus Di Isi ';
	header('location:../web_akun.php');
	
	?>
		<?php
		
	}

	else if($satu=="" ){
	session_start();
	$_SESSION['pesan'] = 'Error !Usename Harus Di Isi ';
	header('location:../web_akun.php');
	
	?>
		
		<?php
		
	}
	else if($dua=="" ){
	session_start();
	$_SESSION['pesan'] = 'Error !  Password   Harus Di Isi ';
	header('location:../web_akun.php');
	?>
		
		<?php
		
	}
	else if($tiga=="--silahkan pilih--"){
	session_start();
	$_SESSION['pesan'] = 'Error ! Hak Akses Harus Di Isi ';
	header('location:../web_akun.php');
	?>
		<?php
	}
	
	else if($lima==""){
	session_start();
	$_SESSION['pesan'] = 'Error ! Konfirmasi Password Di Isi ';
	header('location:../web_akun.php');
	?>
		<?php
		header("refresh:0.1;url=../web_akun.php");
	}
	
	else{
$query = mysqli_query($conn,"insert into admin values
(null,'$satu','$dua','$tiga')");
if($query) {
	
	header('location:../web_akun.php');
}
else {
echo"data gagag";
	//header('location:../web_akun.php');
}
}
?>
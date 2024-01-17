<?php
//koneksi ke database
include"../koneksi.php";
//akhir koneksi
$id=$_GET['id'];
#setting judul laporan dan header tabel
#setting judul laporan dan header tabel
	$lihat2=mysqli_query($conn,"select * from hasil_produksi where id_admin='$id'");
    while($hasil2=mysqli_fetch_array($lihat2))
   {
   
   $daftar="            Preiode : ".$hasil2[1]." Bulan";
   $daftar1="           Modal : Rp. ".$hasil2[2];
   $daftar2="           Jumlah Baglog : ".$hasil2[3];
   $daftar3="            Presentase : ".$hasil2[4]." %";
   $daftar4="            Perkiraan : ".$hasil2[5]." Kg";
   $daftar5="            Harga : Rp. ".$hasil2[6];
   $daftar6="            Pendapatan : Rp. ".$hasil2[7];
   $hasil=$hasil2[7]-$hasil2[2];
					  if($hasil>0){
					   $daftar7="            Hasil : Untung Rp.".$hasil;
					  }
					  else{
					  $daftar7="             Hasil : Rugi Rp.".$hasil;
					  }
  
    $judul = "------------------------------------------------------------------------------------------------------------------------ ";
	} 
	
	//$gambar="http://localhost/jamurku/app/jamurjaya.png";
	
 
#sertakan library FPDF dan bentuk objek
require_once ("fpdf.php");
$pdf = new FPDF('L','mm',array(96,96));
$pdf->AddPage();
 
#tampilkan judul laporan
//$pdf->Line(20, 55, 190, 55);
$pdf->SetFont('Arial','B','12');
//$pdf->Cell( 0, 0, $pdf->Image($gambar, $pdf->GetX(), $pdf->GetY(), 40), 20, 20, 'L', false );
$pdf->Cell(0,5, $judul, '0', 10, 'C');
$pdf->Cell(0,5, $daftar, '0', 10, 'C');
$pdf->Cell(0,5, $daftar1, '0', 10, 'C');
$pdf->Cell(0,5, $daftar2, '0', 10, 'C');
$pdf->Cell(0,5, $daftar3, '0', 10, 'C');
$pdf->Cell(0,5, $daftar4, '0', 10, 'C');
$pdf->Cell(0,5, $daftar5, '0', 10, 'C');
$pdf->Cell(0,5, $daftar6, '0', 10, 'C');
$pdf->Cell(0,5, $daftar7, '0', 10, 'C');
$pdf->Cell(0,5, $judul, '0', 10, 'C');
//////////////////////////////////

 #output file PDF

$tgl=date('d-m-Y');
$pdf->SetFont('Arial','B','12');
$pdf->Cell(0,5, '', '0', 10, 'L');
$pdf->Cell(0,5, 'Tanggal Cetak :'.$tgl, '0', 10, 'L');

$pdf->Output();
?>

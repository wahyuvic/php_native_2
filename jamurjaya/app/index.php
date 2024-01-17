<script type="text/javascript" src="js/jquery.min.js"></script>							<!--JQuery standard library-->		
<script type="text/javascript">
//angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
$(document).ready(function(){setTimeout(function(){$(".pemberitahuan").fadeIn('slow');}, 500);});
//angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
setTimeout(function(){$(".pemberitahuan").fadeOut('slow');}, 2000);

	</script>

<?php
	include('atas.php');
	include('aman2.php');
	$id=$_COOKIE['id_admin'];
				$query_layanan  ="SELECT * FROM hasil_produksi where id_admin='$id'";
			  	$result_layanan = mysqli_query($conn,$query_layanan);
			    while ($hasil_layanan = mysqli_fetch_array($result_layanan))
				{
	?>
    <!-- form login -->  <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" ">
                  <p class="fs-5 fw-bold text-primary">APLIKASI PREDIKSI PERHITUNGAN HASIL PRODUKSI                   
                  <p class="fs-5 fw-bold text-primary">Data Prediksi
                    <br />
                  <?php 
			/*menampilkan pesan jika ada pesan
			if (isset($_SESSION['pesan2']) && $_SESSION['pesan2'] <> '') {
                echo '<div class="pemberitahuan" style="color:#FF0000" >'.$_SESSION['pesan2'].'</div> ';
            }
			$_SESSION['pesan2'] = '';
			*/
			
			if(!isset($_COOKIE['pemberitahuan']))
			{
			}
			else{
			$data=$_COOKIE['pemberitahuan'];
			echo '<div class="pemberitahuan" style="color:#FF0000" >'.$data.'</div> ';

			}
        ?>
				  <table width="200" border="1">
                    <tr>
                      <td><div align="center">Hasil</div></td>
                      <td><div align="center">Olahdata</div></td>
                    </tr>
                    <tr>
                      <td><div align="center">
					  <?php 
					  $hasil=$hasil_layanan[7]-$hasil_layanan[2];
					  if($hasil>0){
					  echo"Untung Rp.".$hasil;
					  }
					  else{
					  echo"Rugi Rp.".$hasil;
					  }
					  ?>
					  </div></td>
                      <td><p align="center" ><a href="edit_prediksi.php?id=<?php echo"$hasil_layanan[8]";?>">Prediksi</a></td>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
                  <p class="btn btn-warning" ><a href="logout.php">KELUAR AKUN</a><br />
                      
                 </div>
                </div>
            </div>
        </div>
    </div>
	<?php
	}
	include('bawah.php');
	?>
   
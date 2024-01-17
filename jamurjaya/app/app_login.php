<script type="text/javascript" src="js/jquery.min.js"></script>							<!--JQuery standard library-->		
<script type="text/javascript">
//angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
$(document).ready(function(){setTimeout(function(){$(".pemberitahuan").fadeIn('slow');}, 500);});
//angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
setTimeout(function(){$(".pemberitahuan").fadeOut('slow');}, 2000);

	</script>
<?php
	include('atas.php');
	?>
    <!-- form login -->  <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn">
                    <p class="fs-5 fw-bold text-primary">APLIKASI PERHITUNGAN HASIL PRODUKSI JAMUR<br />
					
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
                  <form action="app_loginproses.php" method="get">
                        <div class="row g-3" >
                          <div class="col-md-6" align="center">
						  Masukan Username Dan Password Anda
                                <div class="form-floating">
                                  <input name="username" type="text" class="form-control" id="username" placeholder="Username Kamu " />
                                  <label for="name">Username</label>
                              </div>
							  <div class="form-floating">
                                  <input name="password" type="password" class="form-control" id="password" placeholder="Password Kamu " />
                                  <label for="name">Password</label>
							  </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-floating"></div>
                          </div>
                            <div class="col-12"></div>
                          <div class="col-12">
                                
                                <label>
                                <input type="submit" name="Submit" value="Masuk" class="btn btn-primary py-3 px-4"/>
                                </label>
                           
                                <p><br />
                                  <a href="daftar.php">Daftar Akun</a> </p>
                          </div>
                        </div>
              </form> </div>
          </div>
            </div>
        </div>
    </div>
	<?php
	include('bawah.php');
	?>
   

<?php
	include('atas.php');
	include('aman2.php');
	$id=$_GET['id'];
	$query="SELECT * FROM hasil_produksi where id_admin='$id'";
	$result=mysqli_query($conn,$query);
	while ($hasil_lopping = mysqli_fetch_array($result)) 
	{
	?>
	
	<script type="text/javascript" src="../js/jquery.min.js"></script>							<!--JQuery standard library-->		
	<script type="text/javascript">
	$( document ).ready(function() {
	$("#Hitung").click(function() {
	//////////////////////////////////////////////////////////////////////////////////
	//dekralasi varibel
	var periode = document.getElementById("periode").value;
	var modal = document.getElementById("modal").value;
	var presentase = document.getElementById("presentase").value;
	var jum = document.getElementById("jumlah").value;
	var ilustrasi = (presentase/100)*jum;
	var perkiraan = document.getElementById("perkiraan").value=ilustrasi;
	var harga = document.getElementById("harga").value;
	var hasil_p = harga*perkiraan;
	var pendapatan = document.getElementById("pendapatan").value = hasil_p;
	var laba_rugi = pendapatan-modal;
	if(laba_rugi>0){
	var hasil = document.getElementById("hasil").value ="Untung Rp." + laba_rugi;
	}
	else{
	var hasil = document.getElementById("hasil").value ="Rugi Rp." + laba_rugi;
	}
//	alert(hasil);
	//////////////////////////////////////////////////////////////////////////////////
	});		
	});
	</script>

    <!-- form login -->  <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" ">
                  <p class="fs-5 fw-bold text-primary">APLIKASI PREDIKSI PERHITUNGAN HASIL PRODUKSI                   
                  <p class="fs-5 fw-bold text-primary">Data Prediksi <?php
							   $user=$_COOKIE['username'];
							    echo"$user";
								?> | <a href="index.php"> Beranda</a> <br />
                 <form action="app_edit_produksi.php" method="post">
                        <div class="row g-3" >
                          <div class="col-md-6" align="center">
						  Data Anda
						    <label>
						    <input name="id" type="hidden" id="id" value="<?php echo"$hasil_lopping[0]";?>"/>
						    </label>
<div class="form-floating">
						      <select name="periode" size="1" class="form-control" id="periode">
						        <option value="<?php echo"$hasil_lopping[1]";?>"><?php echo"$hasil_lopping[1] bulan";?></option>
								<option value="1">1 bulan</option>
						        <option value="2">2 bulan</option>
						        <option value="3">3 bulan</option>
						        <option value="4">4 bulan</option>
						        <option value="5">5 bulan</option>
						        <option value="6">6 bulan</option>
						        <option value="7">7 bulan</option>
						        <option value="8">8 bulan</option>
						        <option value="9">9 bulan</option>
						        <option value="10">10 bulan</option>
						        <option value="11">11 bulan</option>
						        <option value="12">12 bulan</option>
					          </select>
						<label for="name">Periode</label>
                            </div>
							  <div class="form-floating">
                                  <input name="modal" type="text" class="form-control" id="modal" value="<?php echo"$hasil_lopping[2]";?>" placeholder="Password Kamu " />
                                  <label for="name">Modal (Rp)</label>
							  </div>
							   <div class="form-floating">
                                  <input name="jumlah" type="text" class="form-control" id="jumlah" value="<?php echo"$hasil_lopping[3]";?>" placeholder="Password Kamu " />
                                  <label for="name">Jumlah Baglog </label>
							   </div>
						    <div class="form-floating">
                                  <input name="presentase" type="text" class="form-control" id="presentase" value="<?php echo"$hasil_lopping[4]";?>" placeholder="Password Kamu " />
                                  <label for="name">Presentasi Produksi %</label>
					    </div>
							   <div class="form-floating">
                                  <input name="perkiraan" type="text" class="form-control" id="perkiraan" value="<?php echo"$hasil_lopping[5]";?>" placeholder="Password Kamu " />
                                  <label for="name">Perkiraan Produksifitas(Kg)</label>
                                
							  </div>
							   <div class="form-floating">
                                  <input name="harga" type="text" class="form-control" id="harga" value="<?php echo"$hasil_lopping[6]";?>" placeholder="Password Kamu " />
                                  <label for="name">Harga Jual (Rp)</label>
							  </div>
							   <div align="left">
							     <input type="button" name="Hitung" id="Hitung" value="Hitung" class="btn btn-primary py-3 px-4"/>
							     
					        </div>
							   <div class="form-floating">
                                  <input name="pendapatan" type="text" class="form-control" id="pendapatan" value="<?php echo"$hasil_lopping[7]";?>" placeholder="Password Kamu " />
                                  <label for="name">Pendapatan (Rp)</label>
							  </div>
						    <div class="form-floating">
                                  <input name="hasil" type="text" class="form-control" id="hasil" value=" <?php 
					  $hasil=$hasil_lopping[7]-$hasil_lopping[2];
					  if($hasil>0){
					  echo"Untung Rp.".$hasil;
					  }
					  else{
					  echo"Rugi Rp.".$hasil;
					  }
					  ?>" placeholder="Password Kamu " />
                                  <label for="name">Hasil</label>
						    </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-floating"></div>
                          </div>
                            <div class="col-12"></div>
                          <div class="col-12">
                                
                                <label>
                                <input type="submit" name="Submit" value="Simpan" class="btn btn-primary py-3 px-4"/>
                                </label>
                               
                                <a href="print_pdf.php?id=<?php echo"$hasil_lopping[8]";?>" class="btn btn-primary py-3 px-4">Cetak Pdf</a>
                                <p>&nbsp;</p>
                          </div>
                        </div>
                  </form>
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
   
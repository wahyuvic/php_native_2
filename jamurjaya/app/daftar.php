<?php
	include('atas.php');
	?>
    <!-- form login -->  <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" ">
                    <p class="fs-5 fw-bold text-primary">APLIKASI PERHITUNGAN HASIL PRODUKSI JAMUR<br />
	 <form action="app_daftar.php" method="post">
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
                                <input type="submit" name="Submit" value="Daftar Akun" class="btn btn-primary py-3 px-4"/>
                                </label>
                           
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
   
<?php include('atas.php'); ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Profil   Admin</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
			    <div align="center">
			    <?php
			$data=$_COOKIE['posisi'];
			if($data=='onwer'){
			?>
			    <a href="web_akun.php">Akun</a>  / <a href="web_hak_akses.php">Hak Akses</a>
			    <?php 
			}
			else{
			}
			?>
			    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php include('bawah.php'); ?>
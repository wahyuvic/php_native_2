<?php
include("atas.php");
?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
                <?php
		     	
				$query_beranda1  ="SELECT * FROM beranda order by id_beranda DESC  LIMIT 30 ";
			  	$result_beranda1 = mysqli_query($conn,$query_beranda1);
			    while ($hasil_hasil_beranda1 = mysqli_fetch_array($result_beranda1))
				{
				?> 
				<?php
				if($hasil_hasil_beranda1[0]=="1"){
				?>
				<div class="carousel-item active">
				<?php }
				else{
				?>
				<div class="carousel-item">
				<?php } ?>
                  <img class="w-100" src="img/<?php echo"$hasil_hasil_beranda1[2]";?>" alt="Image" />
                  <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h1 class="display-1 text-white mb-5 animated slideInDown"><?php echo"$hasil_hasil_beranda1[1]";?></h1>
                                    <?php echo"$hasil_hasil_beranda1[3]";?>
                                </div>
                            </div>
                        </div>
                  </div>
              </div>
			  <?php } ?>
              </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Kembali</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Lanjut</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Pelayanan Kami </p>
                <h1 class="display-5 mb-5">Layanan (Informasi Dan Tutorial) Yang Bisa Kami Berikan </h1>
            </div>
            <div class="row g-4">
                <?php
				$query_layanan  ="SELECT * FROM layanan order by id_layanan DESC  LIMIT 30 ";
			  	$result_layanan = mysqli_query($conn,$query_layanan);
			    while ($hasil_layanan = mysqli_fetch_array($result_layanan))
				{
				?>
				<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="img/<?php echo"$hasil_layanan[4]";?>" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/<?php echo"$hasil_layanan[3]";?>" alt="Icon">
                            </div>
                            <h4 class="mb-3"><?php echo"$hasil_layanan[1]";?> </h4>
                            <p class="mb-4"><?php 
							$isi_layanan=substr($hasil_layanan[2],0,100);
							echo"$isi_layanan ...";?></p>
                            <a class="btn btn-sm" href="isi_layanan.php?id=<?php echo"$hasil_layanan[0]";?>"><i class="fa fa-plus text-primary me-2"></i>lihat >>> </a>
                        </div>
                    </div>
                </div>
				<?php } ?>
                
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Quote Start -->
    <div class="container-fluid quote my-5 py-5" data-parallax="scroll">
        <div class="container py-5">
            <div class="row justify-content-center">
                
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Produksi Kami </p>
                <h1 class="display-5 mb-5">Profil Produki Kami </h1>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                   <?php 
				    /*<ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">Semua Produk</li>
                        <li class="mx-2" data-filter=".first">Produk </li>
                        <li class="mx-2" data-filter=".second">Produk 3-4 Bulan</li>
                    </ul>
					*/?>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <?php
				$query_profil  ="SELECT * FROM profil_produksi order by id_profil DESC  LIMIT 30 ";
			  	$result_profil = mysqli_query($conn,$query_profil);
			    while ($hasil_profil = mysqli_fetch_array($result_profil))
				{
				?> 
				<div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/<?php echo"$hasil_profil[2]";?>" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4"><?php echo"$hasil_profil[1]";?></h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/<?php echo"$hasil_profil[2]";?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href="isi_produk_kami.php?id=<?php echo"$hasil_profil[0]";?>"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>				
            </div>
        </div>
    </div>
    <!-- Projects End -->
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Patner Kami</p>
                <h1 class="display-5 mb-5">Patner Kami Dalam Berbisnis Dan Produksi </h1>
            </div>
            <div class="row g-4">
                <?php
				$query_patner  ="SELECT * FROM patner order by id_patner DESC  LIMIT 30 ";
			  	$result_patner = mysqli_query($conn,$query_patner);
			    while ($hasil_patner = mysqli_fetch_array($result_patner))
				{
				?>
				<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/<?php echo"$hasil_patner[3]";?>" alt="">
                        <div class="team-text">
                            <h4 class="mb-0"><?php echo"$hasil_patner[1]";?></h4>
                            <p class="text-primary"><?php echo"$hasil_patner[2]";?></p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href="<?php echo"$hasil_patner[6]";?>"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href="<?php echo"$hasil_patner[4]";?>"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href="<?php echo"$hasil_patner[5]";?>"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
              <?php }?>
			  </div>
        </div>
    </div>
    <!-- Team End -->
	<?php
	include('bawah.php');
	?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
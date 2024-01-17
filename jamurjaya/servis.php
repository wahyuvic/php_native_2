<?php
include('atas.php');
?>
    <!-- Page Header End -->

<!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Pelayanan Kami </p>
                <h1 class="display-5 mb-5">Layanan Yang Bisa Kami Berikan </h1>
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
                            <p class="mb-4"><?php echo"$hasil_layanan[2]";?></p>
                            <a class="btn btn-sm" href="isi_layanan.php?id=<?php echo"$hasil_layanan[0]";?>"><i class="fa fa-plus text-primary me-2"></i>lihat </a>
                        </div>
                    </div>
                </div>
				<?php } ?>
                
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Footer Start -->
    <!-- Footer End -->

<?php
include('bawah.php');
?>
    <!-- Copyright End -->


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
    <!-- Topbar End -->
	<?php
	include('atas.php');
	?>
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

    <!-- Footer Start -->
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
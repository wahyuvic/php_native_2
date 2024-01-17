    <!-- Topbar End -->
	<?php
	include('atas.php');
		$id=$_GET['id'];
	$query="SELECT * FROM layanan where id_layanan='$id'";
	$result=mysqli_query($conn,$query);
	while ($hasil_lopping = mysqli_fetch_array($result)) 
	{
	?>
    <!-- isi Start -->
    <div class="container-xxl py-5">
      <p><?php echo"$hasil_lopping[1]";?>      </p>
     <p><img src="img/<?php echo"$hasil_lopping[4]";?>"alt="user1"  width="300"/>     
     <p><?php echo"$hasil_lopping[2]";?><br />
      </div>
    <!-- About End -->
	<!-- Footer Start -->
	<?php
	}
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
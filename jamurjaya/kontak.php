	<script type="text/javascript" src="js/jquery.min.js"></script>							<!--JQuery standard library-->		
	<script type="text/javascript">
	$( document ).ready(function() {
	 
	 $('#name').change(function () {
	 $("#name").css("border","solid #a9a9a9 1px");
	 });
	 
	  $('#no_telepon').change(function () {
	 $("#no_telepon").css("border","solid #a9a9a9 1px");
	 });
	 
	  $('#alamat').change(function () {
	 $("#alamat").css("border","solid #a9a9a9 1px");
	 });
	 
	  $('#pesan').change(function () {
	 $("#pesan").css("border","solid #a9a9a9 1px");
	 });
	 
	$("#Klik_Pesan").click(function() {
	//////////////////////////////////////////////////////////////////////////////////
	//dekralasi varibel
	var nama = document.getElementById("name").value;
	var telepon = document.getElementById("no_telepon").value;
	var alamat = document.getElementById("alamat").value;
	var pesan = document.getElementById("pesan").value;
	//////////////////////////////////////////////////////////////////////////////////
	if(nama==""){
	event.preventDefault();
	$("#name").css("border","solid red 1px");	
	}
	if(telepon==""){
	event.preventDefault();
	$("#no_telepon").css("border","solid red 1px");	
	}
	
	if(alamat==""){
	event.preventDefault();
	$("#alamat").css("border","solid red 1px");	
	}
	
	if(pesan==""){
	event.preventDefault();
	$("#pesan").css("border","solid red 1px");	
	}	
	});
			
	});
	
	//angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
$(document).ready(function(){setTimeout(function(){$(".pemberitahuan").fadeIn('slow');}, 500);});
//angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
setTimeout(function(){$(".pemberitahuan").fadeOut('slow');}, 2000);

	</script>
	
<?php
include('atas.php');
?>
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" ">
                    <p class="fs-5 fw-bold text-primary">Kontak Kami<br />
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
				    <h1 class="display-5 mb-5">jika kamu ingin memesan jamur </h1>
                   
                    <form action="insert_pesan.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                  <input name="nama" type="text" class="form-control" id="name" placeholder="Nama Kamu" />
                                  <label for="name">Nama</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-floating">
                                <input name="no_telepon" type="text" class="form-control" id="no_telepon" placeholder="no telepon kamu" />
                                <label for="email">No Telepon</label>
                              </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input name="alamat" type="text" class="form-control" id="alamat" placeholder="alamat">
                                    <label for="subject">alamat</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                  <textarea name="pesan" class="form-control" id="pesan" style="height: 100px" placeholder="Pesan anda"></textarea>
                                  <label for="message">pesan</label>
                              </div>
                            </div>
                          <div class="col-12">
                                <label>
                                <input name="Klik_Pesan" type="submit" id="Klik_Pesan" class="btn btn-primary py-3 px-4" value="Kirimkan Pesan" />
                                </label>
                            </div>
                        </div>
                    </form>
              </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=rt%2001%20rw%2002%20ngingit-tumpang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/">divi discount</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">how to make a website map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
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
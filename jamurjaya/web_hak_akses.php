<script type="text/javascript" src="../js/jquery.min.js"></script>							<!--JQuery standard library-->		
<script type="text/javascript">
	$( document ).ready(function() {
	
	$('#konfirmasi').change(function () {
	var password = document.getElementById("2").value;
	var konfirmasi_passowrd = document.getElementById("konfirmasi").value;
	if(password==""){
	}
	else{
	if(password==konfirmasi_passowrd){
	document.getElementById("tidak").innerHTML= "Password dan Konfirmasi Password Sama";
	document.getElementById("tidak").style.color = "blue";	
	}
	else
	{
	document.getElementById("tidak").innerHTML= "Password dan Konfirmasi Salah";
	document.getElementById("tidak").style.color = "red";	
	}
	}
	});
			$('#2').change(function () {
	 		left = $(this).val().length;
			
			if(left < 8){
			document.getElementById("ok").disabled = true;
			document.getElementById("pemberitahuan").innerHTML="Data input minimal 8 angka dengan kombinasi huruf dan angka";
			document.getElementById("pemberitahuan").style.color = "red";	
			
			}else{
			document.getElementById("ok").disabled = false;//
			document.getElementById("pemberitahuan").innerHTML="";
			}
			});
	 	
	});
		
</script>		
		 <!--atas (end)-->
		  <?php include("atas.php"); ?><title>web master</title>
		  <div id="tabs" class="tabs">
            <nav>
              <ul>
                <li><a href="Admin.php?page=home" class="icon-shop" id="home">Home</a></li>
                <li><a href="drink.php" class="icon-cup"><span>Drinks</span></a></li>
                <li><a href="food.php" class="icon-food"><span>Foods</span></a></li>
                <li><a href="snack.php" class="icon-lab"><span>Snacks</span></a></li>
                <li><a href="order.php" class="icon-truck">Order </a></li>
                <li><a href="tranksaksi.php"> Tranksaksi </a></li>
                <li><a href="komentar.php" >Komentar </a></li>
                <li><a href="meja.php" >Meja </a></li>
                <li><a href="logout.php" >logout </a></li>
              </ul>
            </nav>
          </div>
		  <!--HEADER AREA (end)-->
          <!--BODY AREA (begin)-->
          <div id="body_menu_service_page_area">
            <!--jquery full width menu tab (begin)-->
            <div class="container_menu">
              <!-- /tabs -->
            </div>
            <!--jquery full width menu tab (end)-->
            <!--jquery full width service (begin)-->
            <div class="container_service">
              <div class="sub_container_service">
                <center>
                </center>
              </div>
            </div>
            <!--jquery full width service (end)-->
          </div>
          <!--notification info of services click ring bell for view my bill click, call waiter/waitress click, comments click (begin)-->
          <div class="background_transparent_notification_info_our_services">
            <div id="our_services_view_my_bill_notification_info_area">
              <div id="our_services_view_my_bill_notification_info_logo_area">
                <!--header bill area (begin)-->
                <div id="our_services_view_my_bill_address"></div>
                <div id="our_services_view_my_bill_telp"></div>
                <div id="our_services_view_my_bill_website"></div>
                <!--header bill area (end)-->
                <!--body bill area (begin)-->
                <div>
                  <div id="body_left_area">
                    <div id="our_services_view_my_bill_pax"></div>
                    <div id="our_services_view_my_bill_table_no"></div>
                  </div>
                  <div id="body_right_area">
                    <div id="our_services_view_my_bill_operator"></div>
                    <div id="our_services_view_my_bill_date_time"></div>
                  </div>
                  <div id="sub_main_body_bill_area">
                    <div class="our_services_dotted_line_separator"></div>
                  </div>
                </div>
                <!--body bill area (end)-->
                <!--footer bill area (begin)-->
                <!--footer bill area (end)-->
              </div>
            </div>
            <div id="our_services_call_waiter_waitress_notification_info_area"></div>
            <div id="our_services_comments_notification_info_area">
              <div id="our_services_comments_notification_header_area"></div>
              <div id="our_services_comments_notification_body_area">
                <div>
                  <center>
                    <div id="our_services_comments_cancel"></div>
                    <div id="our_services_comments_submit"></div>
                  </center>
                </div>
              </div>
            </div>
          </div>
          <div class="background_transparent_delete_menu"><div class="delete_menu_confirmation_area"><div class="delete_menu_confirmation_buttons_area"></div>
            </div>
          </div>
          <div class="background_transparent_detail_menu"> </div>
          <div id="footer_menu_page_area">
            <div id="footer_table_no"></div>
            <div id="footer_center_info_area">
              <div id="footer_center_recommended_info"></div>
              <div id="footer_center_new_info"></div>
              <div id="footer_center_tax_info"></div>
            </div>
          </div>
          <!--isi (end)-->
          <div class="panel-body"  style="border:#000000">
            <div class="table-responsive" style="background-color:">
              <p align="center"><strong>Setting </strong><br />
              <a href="web_master.php">Tampilan</a> / <a href="web_perusaahan.php"> Alamat Perusahaan </a>/ <a href="web_akun.php" >Akun</a> /<a href="web_hak_akses.php" id="snack">Hak Akses </a></p>
              <form action="insert/insert_akun.php" method="post" enctype="multipart/form-data">
                <div align="center"><strong><a href="web_master.php"><strong>
    		 <?php 

			if(isset($_GET['me']))
			{
			$data=$_GET['me'];
    		 echo '<div class="pesan">'.$data.'</div>';
			 }
			 //echo"$data";
            ?>
           
                </strong></a>Hak Akses </strong>                </div>
              </form>
              <div align="center"><a href="Add_Kategori_hak_akses.php" class="btn btn-primary">Olah Data Hak Akses</a></div>
            </div>
            
          </div>
          <div class="panel-body"  style="border:#000000">
            <tbody>
              <tr>
                <td width="47%"><div align="left">
                  <tbody>
                  </tbody>
                </div></td>
              </tr>
            </tbody>
            <div class="table-responsive" style="background-color:">
              <form action="insert/insert_akun.php" method="post" enctype="multipart/form-data">
                <div align="center">
                  <table width="100%" border="1" style="background-color:#CCCCCC">
                    <tr>
                      <td width="327"><div align="center">Posisi</div></td>
                      <td width="465"><div align="center">Deksipsi </div></td>
					  
                      <td width="487"><div align="center">Olah Hak Akses </div></td>
                    </tr>
                    <tr>
                      <?php
					require"../koneksi.php";
					$sql="SELECT * FROM hak_akses";//,shop  where shop.id_shop=hak_akses.id_shop ";
					$query=mysql_query($sql);
					while($hasil=mysql_fetch_array($query)){
					?>
                      <td><?php echo $hasil['1'];?></td>
                      <td><?php echo $hasil['2'];?></td>
					  
                      <td><table width="475" border="0">
                          <tr>
                            <td><div align="center"><a href="hak_akses.php?id=<?php echo $hasil['0'];?>"> Hak Akses</a></div>
                              </tr>
                      </table></td>
                    </tr>
                    <?php }?>
                  </table>
                </div>
              </form>
              <div align="center"><strong> </strong></div>
            </div>
            <!-- End  Basic Table  -->
          </div>
          <!--bawah (end)-->
		  <?php include "bawah.php";?>
		     <script src="jquery.min.js"></script>
        <script>
//            angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
            $(document).ready(function(){setTimeout(function(){$(".pesan").fadeIn('slow');}, 500);});
//            angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
            setTimeout(function(){$(".pesan").fadeOut('slow');}, 3000);
        </script>
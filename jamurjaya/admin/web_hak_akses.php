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
		  <?php include("atas.php"); ?>
          <!--isi (end)-->

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
			<div class="panel-body"  style="border:#000000">
            <div class="table-responsive" style="background-color:">
              <p align="center"><strong>Setting </strong><br />
              <a href="web_akun.php" >Akun</a> /<a href="web_hak_akses.php" id="snack">Hak Akses </a></p>
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
					$sql="SELECT * FROM hak_akses";//,shop  where shop.id_shop=hak_akses.id_shop ";
					$query=mysqli_query($conn,$sql);
					while($hasil=mysqli_fetch_array($query)){
					?>
                      <td><div align="center"><?php echo $hasil['1'];?></div></td>
                      <td><div align="center"><?php echo $hasil['2'];?></div></td>
					  
                      <td><div align="center">
                        <table width="475" border="0">
                          <tr>
                            <td><div align="center"><a href="hak_akses.php?id=<?php echo $hasil['0'];?>"> Hak Akses</a></div>                              </tr>
                        </table>
                      </div></td>
                    </tr>
                    <?php }?>
                  </table>
                </div>
              </form>
              <div align="center"><strong> </strong></div>
            </div>
            <!-- End  Basic Table  -->
          </div>

			    </div>
              </div>
            </div>
          </div>
        </div>
      </div>

                    <!--bawah (end)-->
		  <?php include "bawah.php";?>
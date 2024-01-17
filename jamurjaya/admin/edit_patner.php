<?php include('atas.php'); ?>

<script type="text/javascript" src="../js/jquery.min.js"></script>							<!--JQuery standard library-->		
	<script type="text/javascript">
	$( document ).ready(function() {
	 
	 $('#Judul').change(function () {
	 $("#Judul").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan1").innerHTML="";
	 });
	  
	  $('#posisi').change(function () {
	 $("#posisi").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan2").innerHTML="";
	 });
	 
	 $('#twitter').change(function () {
	 $("#twitter").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan3").innerHTML="";
	 });
	 
	 $('#IG').change(function () {
	 $("#IG").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan5").innerHTML="";
	 });
	 
	 $('#FB').change(function () {
	 $("#FB").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan5").innerHTML="";
	 });
	 
	 
	$("#ok").click(function() {
	//////////////////////////////////////////////////////////////////////////////////
	//dekralasi varibel
	var Judul = document.getElementById("Judul").value;
	var posisi = document.getElementById("posisi").value;
	//var Gambar = document.getElementById("gambar").value;
	var Twit = document.getElementById("twitter").value;
	var FB = document.getElementById("FB").value;
	var IG = document.getElementById("IG").value;
	//////////////////////////////////////////////////////////////////////////////////
	if(Judul==""){
	event.preventDefault();
	document.getElementById("pemberitahuan1").innerHTML=" Judul ? ";
	document.getElementById("pemberitahuan1").style.color = "red";
	$("#Judul").css("border","solid red 1px");	
	}
	
	if(posisi==""){
	event.preventDefault();
	document.getElementById("pemberitahuan2").innerHTML=" posisi ? ";
	document.getElementById("pemberitahuan2").style.color = "red";
	$("#posisi").css("border","solid red 1px");	
	}
	
	if(Twit==""){
	event.preventDefault();
	document.getElementById("pemberitahuan3").innerHTML=" Twitter ? ";
	document.getElementById("pemberitahuan3").style.color = "red";
	$("#twitter").css("border","solid red 1px");	
	}
	
	if(IG==""){
	event.preventDefault();
	document.getElementById("pemberitahuan5").innerHTML=" Instagram ?  ";
	document.getElementById("pemberitahuan5").style.color = "red";
	$("#IG").css("border","solid red 1px");	
	}
	
	if(FB==""){
	event.preventDefault();
	document.getElementById("pemberitahuan6").innerHTML=" Facebook ?  ";
	document.getElementById("pemberitahuan6").style.color = "red";
	$("#FB").css("border","solid red 1px");	
	}
	
	
	});
			
	});
	</script>
	
	<?php
	include "../koneksi.php";
	$id=$_GET['id'];
	$query="SELECT * FROM patner where id_patner='$id'";
	$result=mysqli_query($conn,$query);
	while ($hasil_lopping = mysqli_fetch_array($result)) 
	{
	?>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Edit Data Patner </h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
			    <div align="center">
			    
				<div align="center">
				  <form action="olahdata/patner.php" name="form1" method="post" enctype="multipart/form-data">
				     <input name="id" type="hidden" class="form-control" id="id" value="<?php echo"$hasil_lopping[0]";?>"/>
					<p>Masukan data yang akan dirubah </p>
				    <table width="616" border="0">
                      <tr>
                        <td width="145">Nama</td>
                        <td width="19">:</td>
                        <td width="445"><label>
                          <table width="452" border="0">
                            <tr>
                              <td width="188"><input name="Judul" type="text" class="form-control" id="Judul" value="<?php echo"$hasil_lopping[1]";?>"/></td>
                              <td></td>
							  <td width="251">  <div id="pemberitahuan1"></div></td>
                            </tr>
                          </table>
                         
                        </label></td>
                      </tr>
					  
					   <tr>
                        <td width="145">Posisi</td>
                        <td width="19">:</td>
                        <td width="445"><label>
                          <table width="452" border="0">
                            <tr>
                              <td width="188"><input name="posisi" type="text" class="form-control" id="posisi" value="<?php echo"$hasil_lopping[2]";?>"/></td>
                              <td></td>
							  <td width="251">  <div id="pemberitahuan2"></div></td>
                            </tr>
                          </table>
                         
                        </label></td>
                      </tr>
					  
                      <tr>
                        <td colspan="3">Twitter
                          <input name="twitter" type="text" id="twitter" value="<?php echo"$hasil_lopping[4]";?>" size="100"  />
                          <div id="pemberitahuan3"></div></label></td>
                      </tr>
					  
					  <tr>
                        <td colspan="3">Instagam
                          <input name="IG" type="text" id="IG" value="<?php echo"$hasil_lopping[5]";?>" size="100" />
                          <div id="pemberitahuan5"></div></label></td>
                      </tr>
					  
					  <tr>
                        <td colspan="3">Facebook
                          <input name="FB" type="text" id="FB" value="<?php echo"$hasil_lopping[6]";?>" size="100" />
                          <div id="pemberitahuan6"></div></label></td>
                      </tr>
					  
					  
                      <tr>
                        <td>Gambar</td>
                        <td>:</td>
                        <td><table width="453" border="0">
                            <tr>
                              <td width="218"><span class="form-group">
                                <input name="gambar" type="file" id="gambar" />
                              </span></td>
							  <td></td><td></td>
                              <td width="225"> <div id="pemberitahuan4"></div></td>
                            </tr>
                          </table>
                          <span class="form-group">                          </span>                          </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><label>
                          <input type="submit" name="Olahdata" value="Edit" class="btn btn-danger" id="ok"/>
                          <input type="reset" name="Submit2" value="Reset" class="btn btn-danger"/>
                        </label></td>
                      </tr>
                    </table>
				  </form>
			      </div>
				
			    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php 
}
include('bawah.php'); ?>
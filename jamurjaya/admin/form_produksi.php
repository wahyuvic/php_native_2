<?php include('atas.php'); ?>

<script type="text/javascript" src="../js/jquery.min.js"></script>							<!--JQuery standard library-->		
	<script type="text/javascript">
	$( document ).ready(function() {
	 
	 $('#Judul').change(function () {
	 $("#Judul").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan1").innerHTML="";
	 });
	  
	  $('#KT').change(function () {
	 $("#KT").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan3").innerHTML="";
	 });
	 
	  $('#gambar').change(function () {
	 $("#gambar").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan4").innerHTML="";
	 });
	 
	$("#ok").click(function() {
	//////////////////////////////////////////////////////////////////////////////////
	//dekralasi varibel
	var Judul = document.getElementById("Judul").value;
	//var Jenis = document.getElementById("Jenis").value;
	var Gambar = document.getElementById("gambar").value;
	var KT = document.getElementById("KT").value;
	//////////////////////////////////////////////////////////////////////////////////
	if(Judul==""){
	event.preventDefault();
	document.getElementById("pemberitahuan1").innerHTML=" Nama ? ";
	document.getElementById("pemberitahuan1").style.color = "red";
	$("#Judul").css("border","solid red 1px");	
	}
	
	if(KT==""){
	event.preventDefault();
	document.getElementById("pemberitahuan3").innerHTML=" Keterangan  ";
	document.getElementById("pemberitahuan3").style.color = "red";
	$("#KT").css("border","solid red 1px");	
	}
	
	if(Gambar==""){
	event.preventDefault();
	document.getElementById("pemberitahuan4").innerHTML=" Gambar ?";
	document.getElementById("pemberitahuan4").style.color = "red";
	$("#gambar").css("border","solid red 1px");	
	}	
	});
			
	});
	</script>
	

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
			    
				<div align="center">
				  <form action="olahdata/produksi.php" name="form1" method="post" enctype="multipart/form-data">
				    <p>Masukan Data Beranda Di Slideshow </p>
				    <table width="616" border="0">
                      <tr>
                        <td width="145">Nama</td>
                        <td width="19">:</td>
                        <td width="445"><label>
                          <table width="452" border="0">
                            <tr>
                              <td width="188"><input name="Judul" type="text" class="form-control" id="Judul"/></td>
                              <td></td>
							  <td width="251">  <div id="pemberitahuan1"></div></td>
                            </tr>
                          </table>
                         
                        </label></td>
                      </tr>
                      <tr>
                        <td colspan="3">Link
                          <input name="KT" type="text" id="KT" value="-" size="100" />
                        <div id="pemberitahuan3"></div></label></td>
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
                          <input type="submit" name="Olahdata" value="Simpan" class="btn btn-danger" id="ok"/>
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
<?php include('bawah.php'); ?>

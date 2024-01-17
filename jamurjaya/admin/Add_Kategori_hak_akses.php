<?php include "atas.php";?>
 <!--atas (end)-->
<script type="text/javascript" src="../js/jquery.min.js"></script>							<!--JQuery standard library-->		
<script type="text/javascript">
	$( document ).ready(function() {
	 
	 $('#kategori').change(function () {
	 $("#kategori").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan1").innerHTML="";
	 });
	 
	 $('#inputSuccess').change(function () {
	 $("#inputSuccess").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan2").innerHTML="";	 
	 });

	 
	
	$("#tambah_kategori").click(function() {
	var kategori = document.getElementById("kategori").value;
	var ket = document.getElementById("inputSuccess").value;
	if(kategori=="" && ket==""){
	document.getElementById("pemberitahuan1").innerHTML="Kategori Wajib Di isi ";
	document.getElementById("pemberitahuan1").style.color = "red";
	$("#kategori").css("border","solid red 1px");	
	document.getElementById("pemberitahuan2").innerHTML="Keterangan Wajib Di isi ";
	document.getElementById("pemberitahuan2").style.color = "red";
	$("#inputSuccess").css("border","solid red 1px");	
	}
	
	else if(kategori==""){
	document.getElementById("pemberitahuan1").innerHTML="Kategori Wajib Di isi ";
	document.getElementById("pemberitahuan1").style.color = "red";
	$("#kategori").css("border","solid red 1px");	
	
	}
	else if(ket==""){
	document.getElementById("pemberitahuan2").innerHTML="Keterangan Wajib Di isi ";
	document.getElementById("pemberitahuan2").style.color = "red";
	$("#inputSuccess").css("border","solid red 1px");	
	
	}
	
	else if(kategori!="" && ket !=""){
	
	$.ajax({ 
	type:"POST", 
	url:"http://localhost/jamurku/admin/Kategori/insert_kategori_hak_akses.php", 
	data:"kategori="+ kategori+"&deskripsi="+ket,
	success: function(data)
	{
	 alert(data);
	 //window.location = "web_hak_akses.php?me=Data "+kategori+" Berhasil  Ditambahkan";
	}});
	}
	
	});
			
	});
	</script>
	
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
  <div style="background-color:">
    <p align="center"><strong>Setting </strong><br />
      <a href="web_akun.php" id="snack">Akun</a> /<a href="web_hak_akses.php">Hak Akses </a></p>
    <div align="center"><table width="843" border="0" >
                <tr>
                  <td colspan="3"><div align="center" >
                    
					<p><strong>DATA HAK AKSES </strong><strong>
					</strong></p>
                    <table width="100%" border="1" style="background-color:#CCCCCC">
					
                      <tr>
					  <td colspan="1"><div align="center">NAMA</div></td>
					  <td colspan="1"><div align="center">DESKIPSI</div></td>
                        <td colspan="2"><div align="center">OLAH DATA</div></td>
                      </tr>
<?php
  $lihat=mysqli_query($conn,"select *from hak_akses ");
  while($hasil=mysqli_fetch_array($lihat))
  {
  ?>
                      <tr>
                        <td width="229"><?php echo"$hasil[1]";?></td>
   <td width="416"><?php echo"$hasil[2]";?></td>
                        <td width="170"><div align="center"><a href="edit_kategori_hak_akses.php?id=<?php echo $hasil['0'];?>
						 ">Edit</a> - <a href="Kategori/hapus_Kategori_hak_akses.php?id=<?php echo $hasil['0'];?>&no=<?php
						 $lihat2=mysqli_query($conn,"select * from gov_hak_akses where id_hak_akses='$hasil[0]'");
						  while($hasil2=mysqli_fetch_array($lihat2))
						  {
						 echo $hasil2['1'];
						 }
						 ?>
						 " onclick="return confirm('apakah yakin menghapus ?');">Hapus</a></div></td>
                      </tr>
					  <?php } ?>
                    </table>
                    <p><strong> <div id="pemberitahuan3"><br />
                    INPUT DATA HAK AKSES BARU </p>
                  </div></td>
                </tr>
				
                <tr>
                  <td width="154"><strong>Nama Hak Akses </strong></td>
                  <td width="9">&nbsp;</td>
                  <td width="666"><p>
                    <input name="kategori" type="text" class="form-control" id="kategori" />
                 <div id="pemberitahuan1"></div> </td>
                </tr>
				 <tr>
                  <td width="154"><strong>Deskripsi </strong></td>
                  <td width="9">&nbsp;</td>
                  <td width="666"><p>
				    <textarea name="deskripsi" class="form-control" id="inputSuccess"></textarea>                  <div id="pemberitahuan2"></div></td>
                </tr>
              </table>
			  
               </p>
   <p align="center">
     <button type="submit" class="btn btn-primary" id="tambah_kategori">Tambah  </button>
     <button type="reset" class="btn btn-primary">Reset </button>
   </p>
 
    <div align="center">
      <p>&nbsp;</p>
    </div>
  </div>
  <!-- End  Basic Table  -->

			    </div>
              </div>
            </div>
          </div>
        </div>
      </div>

</div>		  <?php include "bawah.php";?>
		    <!--bawah (end)-->
<?php include "atas.php";?>
<script type="text/javascript" src="../js/jquery.min.js"></script>							<!--JQuery standard library-->		
<script type="text/javascript">
	$( document ).ready(function() {
		$('#2').change(function () {
	 		left = $(this).val().length;
			if(left < 8){
			document.getElementById("ok").disabled = true;
			document.getElementById("pemberitahuan").innerHTML="Data input minimal 8 angka ";
			document.getElementById("pemberitahuan").style.color = "red";	
			
			}else{
			document.getElementById("ok").disabled = false;//
			document.getElementById("pemberitahuan").innerHTML="";
			}
			});
	
	 $('#2').change(function () {
	 var password = document.getElementById("2").value;
	 var angka = /^[0-9]+$/;
	 var huruf = /^[a-zA-Z]+$/;  
	 left = $(this).val().length;
 	if(left < 8 && password.match(angka))   
   {  
    //return true;  
	document.getElementById("ok").disabled = true;
	document.getElementById("pemberitahuan").innerHTML=" Data input minimal 8 angka dengan Password harus Mengunakan Kombinasi huruf Dan Angka ";
	document.getElementById("pemberitahuan").style.color = "red";	
   }
   else if (left < 8 && password.match(huruf)){
   document.getElementById("ok").disabled = true;
   document.getElementById("pemberitahuan").innerHTML="Data input minimal 8 angka dengan Password harus Mengunakan Kombinasi Huruf Dan Angka ";
	document.getElementById("pemberitahuan").style.color = "red";	
   }
   
   if(left > 7 && password.match(angka))   
   {  
    //return true;  
	document.getElementById("ok").disabled = true;
	document.getElementById("pemberitahuan").innerHTML="Password harus Mengunakan Kombinasi huruf Dan Angka ";
	document.getElementById("pemberitahuan").style.color = "red";	
   }
   else if (left > 7 && password.match(huruf)){
   document.getElementById("ok").disabled = true;
   document.getElementById("pemberitahuan").innerHTML="Password harus Mengunakan Kombinasi Huruf Dan Angka ";
	document.getElementById("pemberitahuan").style.color = "red";	
   }
   
   else if(left < 7){
			document.getElementById("ok").disabled = true;
			document.getElementById("pemberitahuan").innerHTML="Data input minimal 8 angka ";
			document.getElementById("pemberitahuan").style.color = "red";	
	}
   
  else  
  {   
  document.getElementById("ok").disabled = false;//
	document.getElementById("pemberitahuan").innerHTML=""; 
  }  
  });
	
	$('#konfirmasi').change(function () {
	var password = document.getElementById("2").value;
	var konfirmasi_passowrd = document.getElementById("konfirmasi").value;
	if(password==""){
	}
	else{
	if(password==konfirmasi_passowrd){
	document.getElementById("tidak").innerHTML= "";
	document.getElementById("tidak").style.color = "blue";
	document.getElementById("ok").disabled = false;//
	}
	else
	{
	document.getElementById("tidak").innerHTML= "Password dan Konfirmasi Salah";
	document.getElementById("tidak").style.color = "red";	
	document.getElementById("ok").disabled = true;
	}
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
    <form action="olahdata/insert_akun.php" method="post" enctype="multipart/form-data">
	
    <table width="100%" height="69" border="0" class="table" style="background-color:#CCCCCC">
      <thead>
	   <tr>
          <th height="23" colspan="3"><div align="center"><strong>
                   </strong>Tambah Akun</div></th>
          </tr>
        <tr>
          <th height="23"><div align="right">Username</div></th>
          <th><div align="center">:</div></th>
          <th>
            
              <div align="left">
                <input name="1" type="text" id="1"/>
           </div></th></tr>
      </thead>
      <tbody>
	 
        <tr>
          <td width="49%"><div align="right">
            <div align="right"><strong>Password</strong><br />
            </div></td>
          <td width="4%"><div align="center">:</div></td>
          <td width="47%">
            
              <div align="left">
                <table width="95" border="0">
                  <tr>
                    <td width="35"><input name="2" type="password" id="2"/></td>
                    <td width="50"><a href="delete/delete_snack.php?id=<?php echo $hasil['0'];?>" onclick="return confirm('apakah yakin menghapus ?');"></a></td>
                  </tr>
                </table>  
                <div id="pemberitahuan"></div>
            </div></td></tr>
      </tbody>
	   <tbody>
        <tr>
          <td width="49%"><div align="right">
            <div align="right"><strong>Konfirmasi Password </strong></p>
            </div></td>
          <td width="4%"><div align="center">:</div></td>
          <td width="47%">
            
              <label></label>
              <div align="left">
                <table width="95" border="0">
                  <tr>
                    <td width="35"><input name="konfirmasi" type="password" id="konfirmasi"/></td> <div id="tidak"></div>
                  </tr>
                </table>
				
				 <tr>          </tr>
            </div></td></tr>
      </tbody>
	  
	  <tbody>
        <tr>
          <td width="49%"><div align="right">
            <div align="right"><strong>Hak Akses </strong></p>
            </div></td>
          <td width="4%"><div align="center">:</div></td>
          <td width="47%">
            
              <label></label>
              <div align="left">
                <table width="590" border="0">
                  <tr>
                    <td width="584"><p>
                      <select name="3" id="3">
                           <option>--silahkan pilih--</option>
                        <?php
   $lihat=mysqli_query($conn,"select * from hak_akses");
  while($hasil=mysqli_fetch_array($lihat))
  {
  ?>
                          <?php
	  echo "<option value ='$hasil[0]'>$hasil[1] </option>";
	  }?>
                      </select>  
                    </p>
                    <p><a href="Add_Kategori_hak_akses.php" class="btn btn-primary">Tambahkan Hak Akses</a></p></td>
                  </tr>
                </table>
				
				 <tr>          </tr>
            </div></td></tr>
      </tbody>
	   
	  <tbody>
        <tr>
          </tr>
      </tbody>
	  <tr>
          <th height="23" colspan="3"><div align="center">
            <p><input type="submit" name="Submit" value="Simpan" id="ok"  class="btn btn-primary"/>
                </label>
                  </p>
          </div>          </th>
        </tr>
    </table>
	 
	<div align="center">
	  <p><strong>Data Penguna/Admin	  </strong></p>
	  <table width="100%" border="1">
	  
      <tr>
        <td width="353"><div align="center">Nama</div></td>
        <td width="235"><div align="center">Hak Akses </div></td>
		<td width="227"><div align="center">Olah Data </div></td>
      </tr>
      <tr>
				 
				  <?php
					$sql="SELECT * FROM  admin,hak_akses where admin.hak_akses=hak_akses.id_akses";
					$query=mysqli_query($conn,$sql);
					while($hasil=mysqli_fetch_array($query)){
					?>
        <td><div align="center"><?php echo $hasil['1'];?></div></td>
        <td><div align="center"><?php echo $hasil['5'];?></div></td>
		 <td><table width="227" border="0">
          <tr>
            <td width="113"><div align="center"><a href="edit_akun.php?id=<?php echo $hasil['0'];?>" > Edit</a></div></td>
            <td width="104"><div align="center"><a href="delete_akun.php?id=<?php echo $hasil['0'];?>" onclick="return confirm('apakah yakin menghapus ?');">Hapus</a></div></td>
          </tr>
		  
        </table></td>
      </tr>
	  <?php }?>
    </table>
	
	</div>
	
	</form>
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
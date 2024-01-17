		<?php include "atas.php";?>
		 <!--atas (end)-->
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
   
   if(left > 8 && password.match(angka))   
   {  
    //return true;  
	document.getElementById("ok").disabled = true;
	document.getElementById("pemberitahuan").innerHTML="Password harus Mengunakan Kombinasi huruf Dan Angka ";
	document.getElementById("pemberitahuan").style.color = "red";	
   }
   else if (left > 8 && password.match(huruf)){
   document.getElementById("ok").disabled = true;
   document.getElementById("pemberitahuan").innerHTML="Password harus Mengunakan Kombinasi Huruf Dan Angka ";
	document.getElementById("pemberitahuan").style.color = "red";	
   }
   
   else if(left < 8){
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

<div style="background-color:">
    <p align="center"><strong>Setting </strong><br />
      <a href="web_akun.php" id="snack">Akun</a> /<a href="web_hak_akses.php">Hak Akses </a></p>
  
    <form action="update/update_akun.php" method="post" enctype="multipart/form-data">
	<?php
					$id=$_GET['id'];
					$sql="SELECT * FROM  admin,hak_akses where admin.hak_akses=hak_akses.id_akses and id_admin='$id' ";
					$query=mysqli_query($conn,$sql);
					while($hasil=mysqli_fetch_array($query)){
					?>
    <table width="100%" height="69" border="0" class="table" style="background-color:#CCCCCC">
      <tr>
        <th height="23"><div align="right"> Username</div></th>
        <th><div align="center">:</div></th>
        <th> <div align="left">
            <input name="1" type="text" id="1" value="<?php echo $hasil['1'];?>"/>
            <input name="id" type="hidden" id="id"value="<?php echo $hasil['0'];?>" readonly="true" />
        </div></th>
      </tr>
     
      <thead>
	   <tr>
          <th height="23" colspan="3"><div align="center">
            <p>Tambah Akun</p>
            </div></th>
          </tr>
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
                    <td width="35"><input name="2" type="password" id="2" value="<?php echo $hasil['2'];?>"/></td>
                    <td width="50"><a href="delete/delete_snack.php?id=<?php echo $hasil['0'];?>" onclick="return confirm('apakah yakin menghapus ?');"></a></td>
                  </tr>
                </table><div id="pemberitahuan"></div>
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
                <table width="95" border="0">
                  <tr>
                    <td width="35"><select name="3" id="3">
					<option value="<?php echo $hasil['3'];?>"><?php echo $hasil['6'];?></option>
                      <?php
					  $id=$_GET['id'];
  $lihat=mysqli_query($conn,"SELECT * FROM  hak_akses");
  while($hasil=mysqli_fetch_array($lihat))
  {
  ?>
                      <?php
	  echo "<option value ='$hasil[0]'>$hasil[1] </option>";
	  }?>
                    </select></td>
                  </tr>
                </table>
				 <input type="submit" name="Submit2" value="Ganti"   class="btn btn-primary" id="ok"/>
				 <tr>          </tr>
            </div></td></tr>
      </tbody>
	    </tr>
    </table>
	<div align="center">
	  <strong>Data Account	  </strong>
	  <table width="100%" border="1">
	  
      <tr>
        <td width="552"><div align="center">Nama</div></td>
        <td width="249"><div align="center">Hak Akses </div></td>
        <td width="486"><div align="center">Olah Data </div></td>
      </tr>
      <tr>
	  <?php
					$sql="SELECT * FROM  admin,hak_akses where admin.hak_akses=hak_akses.id_akses ";
					$query=mysqli_query($conn,$sql);
					while($hasil=mysqli_fetch_array($query)){
					?>
        <td><?php echo $hasil['1'];?></td>
        <td><?php echo $hasil['6'];?></td>
        <td><table width="475" border="0">
          <tr>
            <td width="234"><div align="center"><a href="edit_akun.php?id=<?php echo $hasil['0'];?>"> Edit</a></div></td>
            <td width="231"><div align="center"><a href="delete_akun.php?id=<?php echo $hasil['0'];?>" onclick="return confirm('apakah yakin menghapus ?');"> Delete</a></div></td>
          </tr>
		  
        </table></td>
      </tr>
	  <?php }?>
    </table>
	</div>
	
	</form>
    <div align="center"><strong>
 
    </strong></div>
  </div>
  <!-- End  Basic Table  -->
</div>		  <?php  }include "bawah.php";?>
		    <!--bawah (end)-->
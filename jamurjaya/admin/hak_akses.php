		
		 <!--atas (end)-->
		  <?php include("atas.php"); ?><title>web master</title><div id="tabs" class="tabs">
           
		  </div>
		  <div class="table-responsive" style="background-color:">
              <p align="center"><strong>Setting </strong><br />
              <a href="web_akun.php" >Akun</a> /<a href="web_hak_akses.php" id="snack">Hak Akses </a></p>
            
                <div align="center"><strong>Hak Akses </strong>
             </div>
            </div>
          <div class="panel-body"  style="border:#000000">
            <tbody>
              <tr>
                <td width="47%">&nbsp;</td>
              </tr>
            </tbody>
            <div class="table-responsive" style="background-color:">
			 <?php
					$id=$_GET['id'];
					$sql="SELECT * FROM  gov_hak_akses,hak_akses  where gov_hak_akses.id_hak_akses=hak_akses.id_akses and gov_hak_akses.id_hak_akses='$id' ";
					$query=mysqli_query($conn,$sql);
					while($hasil=mysqli_fetch_array($query)){
					?>
              <div align="center">
                  <table width="100%" border="1" style="background-color:#CCCCCC">
                    <tr>
                      <td width="370"><div align="center">
                        <p><strong>
                          <label>                          </label>
                          <input name="id_gov" id="id_ku" type="hidden" value="<?php  echo"$hasil[0]"; ?>" />
                          <label>
                          <input name="id" id="no_akses" type="hidden" value="<?php  echo"$hasil[1]"; ?>" />
                          </label>
                        Posisi
                        (
                        <?php echo"$hasil[9]"?>
                        )
                          
                        ,Deskipsi : <?php echo"$hasil[10]"?>
                        <?php }?>
                        </strong></p>
                        </div></td>
                      <td width="434"><div align="center"><strong>Hak Aksek</strong></div></td>
                      <td width="475"><div align="center"><strong>Olah Hak Akses </strong></div></td>
                    </tr>
                    <tr>
                    
                      <td><div align="center">Beanda</div></td>
                      <td><div align="center">
                        <label>
                        <div align="left">
                        
                          <input name="VHOME" type="checkbox" id="VHOME" value="V" />
                          Lihat Data 
                        
						  <input name="AHOME" type="checkbox" id="AHOME" value="A" />
Tambah Data
</label>
<label> </label>
<label>
<div>
			    <div align="left"></div>
                          <div align="left"></div>
                        <div align="left">
                          <input name="EHOME" type="checkbox" id="EHOME" value="E" />
                          Edit 
                          <input name="DHOME" type="checkbox" id="DHOME" value="E" />
                          Hapus                        </div></div>
                        </div></td>
                      <td><div align="center">
                        <table width="475" border="0">
                          <tr>
                            <td><div align="center"><button type="submit" class="btn btn-primary" id="edit_home">Edit</button>
     </a></div>                            </tr>
                        </table>
                      </div></td>
                    </tr>
					
					  <tr>
                    
                      <td><div align="center">Patner</div></td>
                      <td><div align="center">
                        <label>
                        <div align="left">
                          
                          <input name="VDRINK" type="checkbox" id="VDRINK" value="V" />
Lihat Data
<input name="ADRINK" type="checkbox" id="ADRINK" value="A" />
                        Tambah Data</div>
                        <label>
                        <div align="left">
                          <input name="E_DRINK" type="checkbox" id="EDRINK" value="E" />
                          Edit
                          <input name="D_DRINK" type="checkbox" id="DDRINK" value="D" />
                          Hapus                        </div>
                      </div></td>
                      <td><div align="center">
                        <table width="475" border="0">
                          <tr>
                            <td><div align="center">
                              <button type="submit" class="btn btn-primary" id="edit_drink">Edit</button>
                            </a></div>                            </tr>
                        </table>
                      </div></td>
                    </tr>
					
					  <tr>
                    
                      <td><div align="center">Profil_Produki</div></td>
                      <td><div align="center">
                        <label>
                        <div align="left">
                          
                          <input name="VFOOD" type="checkbox" id="VFOOD" value="V" />
Lihat Data
<input name="AFOOD" type="checkbox" id="AFOOD" value="A" />
                        Tambah Data</div>
                        </label>
                        <label>
                        
                        <div align="left">
                          <input name="EFOOD" type="checkbox" id="EFOOD" value="E" />
                          Edit
                          <input name="DFOOD" type="checkbox" id="DFOOD" value="D" />
Hapus                        </div>
                      </div></td>
                      <td><div align="center">
                        <table width="475" border="0">
                          <tr>
                            <td><div align="center">
                              <button type="submit" class="btn btn-primary" id="edit_food">Edit</button>
                           </div>                            </tr>
                        </table>
                      </div></td>
                    </tr>
					
					  <tr>
                    
                      <td><div align="center">Layanan</div></td>
                      <td><div align="center"><label>
                        
                       
<div align="left">
 <input name="VSNACK" type="checkbox" id="VSNACK" value="V" />
Lihat Data
                          <input name="ASNACK" type="checkbox" id="ASNACK" value="A" />
                        Tambah Data</div>
                        </label>
                        <label>
                        <div align="left">
                          <input name="ESNACK" type="checkbox" id="ESNACK" value="E" />
                          Edit
                          <input name="DSNACK" type="checkbox" id="DSNACK" value="D" />
Hapus                        </div>
                      </div></td>
                      <td><div align="center">
                        <table width="475" border="0">
                          <tr>
                            <td>
                            <div align="center"><button type="submit" class="btn btn-primary" id="edit_snack">Edit</button></div>                            </tr>
                        </table>
                      </div></td>
                    </tr>
					
					  <tr>
                    
                      <td><div align="center">Pesan</div></td>
                      <td><div align="center">
                        <label>
                        <div align="left">
                          
                          <input name="VORDER" type="checkbox" id="VORDER" value="V" />
Lihat Data 
<input name="DORDER" type="checkbox" id="DORDER" value="D" />
Hapus                        </div>
                        </div></td>
                      <td><div align="center">
                        <table width="475" border="0">
                          <tr>
                            <td><div align="center">
                              <button type="submit" class="btn btn-primary" id="edit_order">Edit</button>
                           </div>                            </tr>
                        </table>
                      </div></td>
                    </tr>
					
					  <tr>
                    
                      <td><div align="center">Profil Admin </div></td>
                      <td><div align="center">
                        <label>
                        <div align="left">
                          
                          <input name="VTRAN" type="checkbox" id="VTRAN" value="V" />
Lihat Data</div>
                        </label>
                        <label>
                        <label>
                        <div align="left"></div>
                      </div></td>
                      <td><div align="center">
                        <table width="475" border="0">
                          <tr>
                            <td><div align="center">
                                <button type="submit" class="btn btn-primary" id="edit_trank">Edit</button>
                           </div></td>
                          </tr>
                        </table>
                      </div></td>
                    </tr>
					  <tr>                    </tr>
                  </table>
              </div>
              <div align="center"><strong> </strong></div>
            </div>
            <!-- End  Basic Table  -->
          </div>
		  <script type="text/javascript" src="../js/jquery.min.js"></script>							<!--JQuery standard library-->		
<script type="text/javascript">
	$( document ).ready(function() {
	//document.getElementById("VHOME").checked=true;
	var id_hak_akses = document.getElementById("no_akses").value;
	var url="http://localhost/jamurku/admin/hak_akses/json_hak_akses.php";
	$.ajax({ 
	type:"POST",
	dataType: "json", 
	url:url, 
	data:"id="+ id_hak_akses,
	success: function(data)
	{
	///////////////////////////////////////////////
	//////////////////HOME/////////////////////////
	//alert(data[0].Home);
	if(data[0].Home=="V,A,E,D"){
	document.getElementById("VHOME").checked=true;
	document.getElementById("AHOME").checked=true;
	document.getElementById("EHOME").checked=true;
	document.getElementById("DHOME").checked=true;
	}
	else if (data[0].Home=="V,A,E")
	{
	document.getElementById("VHOME").checked=true;
	document.getElementById("AHOME").checked=true;
	document.getElementById("EHOME").checked=true;
	document.getElementById("DHOME").checked=false;
	}
	
	else if (data[0].Home=="V,A,D")
	{
	document.getElementById("VHOME").checked=true;
	document.getElementById("AHOME").checked=true;
	document.getElementById("EHOME").checked=false;
	document.getElementById("DHOME").checked=true;
	}
	
	else if (data[0].Home=="V,A")
	{
	document.getElementById("VHOME").checked=true;
	document.getElementById("AHOME").checked=true;
	document.getElementById("EHOME").checked=false;
	document.getElementById("DHOME").checked=false;
	}
	else if (data[0].Home=="V,D")
	{
	document.getElementById("VHOME").checked=true;
	document.getElementById("AHOME").checked=false;
	document.getElementById("EHOME").checked=false;
	document.getElementById("DHOME").checked=true;
	}
	else if (data[0].Home=="V,E")
	{
	document.getElementById("VHOME").checked=true;
	document.getElementById("AHOME").checked=false;
	document.getElementById("EHOME").checked=true;
	document.getElementById("DHOME").checked=false;;
	}
	else if (data[0].Home=="V")
	{
	document.getElementById("VHOME").checked=true;
	document.getElementById("AHOME").checked=false;
	document.getElementById("EHOME").checked=false;
	document.getElementById("DHOME").checked=false;
	}
	else if (data[0].Home=="0")
	{
	document.getElementById("VHOME").checked=false;
	document.getElementById("AHOME").checked=false;
	document.getElementById("EHOME").checked=false;
	document.getElementById("DHOME").checked=false;
	}
	
	//////////////////END//////////////////////////
	if(data[0].patner=="V,A,E,D"){
	document.getElementById("VDRINK").checked=true;
	document.getElementById("ADRINK").checked=true;
	document.getElementById("EDRINK").checked=true;
	document.getElementById("DDRINK").checked=true;
	}
	
	else if(data[0].patner=="V,A,D"){
	document.getElementById("VDRINK").checked=true;
	document.getElementById("ADRINK").checked=true;
	document.getElementById("EDRINK").checked=false;
	document.getElementById("DDRINK").checked=true;
	}
	
	else if(data[0].patner=="V,E,D"){
	document.getElementById("VDRINK").checked=true;
	document.getElementById("ADRINK").checked=false;
	document.getElementById("EDRINK").checked=true;
	document.getElementById("DDRINK").checked=true;
	}
		
	else if(data[0].patner=="V,A,E"){
	document.getElementById("VDRINK").checked=true;
	document.getElementById("ADRINK").checked=true;
	document.getElementById("EDRINK").checked=true;
	document.getElementById("DDRINK").checked=false;
	}
		
	else if(data[0].patner=="V,D"){
	document.getElementById("VDRINK").checked=true;
	document.getElementById("ADRINK").checked=false;
	document.getElementById("EDRINK").checked=false;
	document.getElementById("DDRINK").checked=true;
	}
	
	else if(data[0].patner=="V,E"){
	document.getElementById("VDRINK").checked=true;
	document.getElementById("ADRINK").checked=false;
	document.getElementById("EDRINK").checked=true;
	document.getElementById("DDRINK").checked=false;
	}
	
	else if(data[0].patner=="V,A"){
	document.getElementById("VDRINK").checked=true;
	document.getElementById("ADRINK").checked=true;
	document.getElementById("EDRINK").checked=false;
	document.getElementById("DDRINK").checked=false;
	}
	
	
	
	else if(data[0].patner=="V"){
	document.getElementById("VDRINK").checked=true;
	document.getElementById("ADRINK").checked=false;
	document.getElementById("EDRINK").checked=false;
	document.getElementById("DDRINK").checked=false;
	}
	
	
	else if(data[0].patner=="0"){
	document.getElementById("VDRINK").checked=false;
	document.getElementById("ADRINK").checked=false;
	document.getElementById("EDRINK").checked=false;
	document.getElementById("DDRINK").checked=false;
	}
	
	/////////////////////////////////////////////
	
	if(data[0].profil=="V,A,E,D"){
	document.getElementById("VFOOD").checked=true;
	document.getElementById("AFOOD").checked=true;
	document.getElementById("EFOOD").checked=true;
	document.getElementById("DFOOD").checked=true;
	}
	
	else if(data[0].profil=="V,A,D"){
	document.getElementById("VFOOD").checked=true;
	document.getElementById("AFOOD").checked=true;
	document.getElementById("EFOOD").checked=false;
	document.getElementById("DFOOD").checked=true;
	}
	
	else if(data[0].profil=="V,E,D"){
	document.getElementById("VFOOD").checked=true;
	document.getElementById("AFOOD").checked=false;
	document.getElementById("EFOOD").checked=true;
	document.getElementById("DFOOD").checked=true;
	}
	
	else if(data[0].profil=="V,A,E"){
	document.getElementById("VFOOD").checked=true;
	document.getElementById("AFOOD").checked=true;
	document.getElementById("EFOOD").checked=true;
	document.getElementById("DFOOD").checked=false;
	}
	
	else if(data[0].profil=="V,D"){
	document.getElementById("VFOOD").checked=true;
	document.getElementById("AFOOD").checked=false;
	document.getElementById("EFOOD").checked=false;
	document.getElementById("DFOOD").checked=true;
	}
	
	else if(data[0].profil=="V,E"){
	document.getElementById("VFOOD").checked=true;
	document.getElementById("AFOOD").checked=false;
	document.getElementById("EFOOD").checked=true;
	document.getElementById("DFOOD").checked=false;
	}
	
	else if(data[0].profil=="V,A"){
	document.getElementById("VFOOD").checked=true;
	document.getElementById("AFOOD").checked=true;
	document.getElementById("EFOOD").checked=false;
	document.getElementById("DFOOD").checked=false;
	}
	
	
	else if(data[0].profil=="V"){
	document.getElementById("VFOOD").checked=true;
	document.getElementById("AFOOD").checked=false;
	document.getElementById("EFOOD").checked=false;
	document.getElementById("DFOOD").checked=false;
	}
	
	else if(data[0].profil=="0"){
	document.getElementById("VFOOD").checked=false;
	document.getElementById("AFOOD").checked=false;
	document.getElementById("EFOOD").checked=false;
	document.getElementById("DFOOD").checked=false;
	}
	/////////////////////////////////////////////////
	
	////////////////////////////////////////////
	if(data[0].layanan=="V,A,E,D"){
	//alert(data[0].layanan);
	document.getElementById("VSNACK").checked=true;
	document.getElementById("ASNACK").checked=true;
	document.getElementById("ESNACK").checked=true;
	document.getElementById("DSNACK").checked=true;
	}
	
	else if(data[0].layanan=="V,A,D"){
	document.getElementById("VSNACK").checked=true;
	document.getElementById("ASNACK").checked=true;
	document.getElementById("ESNACK").checked=false;
	document.getElementById("DSNACK").checked=true;
	}
	
	else if(data[0].layanan=="V,E,D"){
	document.getElementById("VSNACK").checked=true;
	document.getElementById("ASNACK").checked=false;
	document.getElementById("ESNACK").checked=true;
	document.getElementById("DSNACK").checked=true;
	}
	
	
	else if(data[0].layanan=="V,A,E"){
	document.getElementById("VSNACK").checked=true;
	document.getElementById("ASNACK").checked=true;
	document.getElementById("ESNACK").checked=true;
	document.getElementById("DSNACK").checked=false;
	}
	
	else if(data[0].layanan=="V,D"){
	document.getElementById("VSNACK").checked=true;
	document.getElementById("ASNACK").checked=false;
	document.getElementById("ESNACK").checked=false;
	document.getElementById("DSNACK").checked=true;
	}
	
	else if(data[0].layanan=="V,E"){
	document.getElementById("VSNACK").checked=true;
	document.getElementById("ASNACK").checked=false;
	document.getElementById("ESNACK").checked=true;
	document.getElementById("DSNACK").checked=false;
	}
	
	else if(data[0].layanan=="V,A"){
	document.getElementById("VSNACK").checked=true;
	document.getElementById("ASNACK").checked=true;
	document.getElementById("ESNACK").checked=false;
	document.getElementById("DSNACK").checked=false;
	}
	
	else if(data[0].layanan=="V"){
	document.getElementById("VSNACK").checked=true;
	document.getElementById("ASNACK").checked=false;
	document.getElementById("ESNACK").checked=false;
	document.getElementById("DSNACK").checked=false;
	}
	
	else if(data[0].layanan=="0"){
	document.getElementById("VSNACK").checked=false;
	document.getElementById("ASNACK").checked=false;
	document.getElementById("ESNACK").checked=false;
	document.getElementById("DSNACK").checked=false;
	}

	/////////////////////////////////////////////////
	////////////////////////////////////////////
	if(data[0].kontak_kami=="V,D"){
	
	document.getElementById("VORDER").checked=true;
	document.getElementById("DORDER").checked=true;
	}
	
	else if(data[0].kontak_kami=="V"){
	document.getElementById("VORDER").checked=true;
	document.getElementById("DORDER").checked=false;
	}
	
	else if(data[0].kontak_kami=="0"){
	document.getElementById("VORDER").checked=false;
	document.getElementById("DORDER").checked=false;
	}
	/////////////////////////////////////////////////
	
	////////////////////////////////////////////
	 if(data[0].profil_akun=="V"){
	document.getElementById("VTRAN").checked=true;
	}
	
	else if(data[0].profil_akun=="0"){
	document.getElementById("VTRAN").checked=false;
	}
	
	
	}});
	///////////////////////////////////////////////////
	var id_ha=document.getElementById("id_ku").value;
	var Koneski="http://localhost/jamurku/admin/hak_akses/";
	//////////////////////////////////////////////////
	var vhome = document.getElementById("VHOME");
	var ahome = document.getElementById("AHOME");
	var ehome = document.getElementById("EHOME");
	var dhome = document.getElementById("DHOME");
	//////////////////////////////////////////////////////
	$("#edit_home").click(function()
	{
	if (vhome.checked==true &&  ahome.checked==true &&  ehome.checked==true && dhome.checked==true){
		data1="V,A,E,D";
		}
		else if (vhome.checked==true &&   ahome.checked==true &&  dhome.checked==true){
		data1="V,A,D";
		}
		else if (vhome.checked==true &&   ehome.checked==true &&  dhome.checked==true){
		data1="V,E,D";
		}
		else if (vhome.checked==true &&  ahome.checked==true &&  ehome.checked==true){
		data1="V,A,E";
		}
		
		else if (vhome.checked==true &&  dhome.checked==true){
		data1="V,D";
		}
		else if (vhome.checked==true &&  ehome.checked==true){
		data1="V,E";
		}
		else if (vhome.checked==true &&  ahome.checked==true){
		data1="V,A";
		}
		
		else if (vhome.checked==true){
		data1="V";
		}
		else if (vhome.checked==false){
		data1="0";
		}
		
		$.ajax({ 
		type:"POST", 
		url:Koneski+"update_home.php", 
		data:"id=" + id_ha + "&update_home=" + data1 , 
		success: function(data)
		{
		alert(data);
		}});
	
	});	
	///////////////////////////////////////////////////	
	var vdrink = document.getElementById("VDRINK");
	var adrink = document.getElementById("ADRINK");
	var edrink = document.getElementById("EDRINK");
	var ddrink = document.getElementById("DDRINK");
	//////////////////////////////////////////////////////
	///////////////////////////////////////////////////
	$("#edit_drink").click(function()
	{
	if(vdrink.checked==true &&  adrink.checked==true &&  edrink.checked==true && ddrink.checked==true){
		data1="V,A,E,D";
		}
		else if (vdrink.checked==true &&  adrink.checked==true &&  ddrink.checked==true){
		data1="V,A,D";
		}
		else if (vdrink.checked==true &&   edrink.checked==true &&  ddrink.checked==true){
		data1="V,E,D";
		}
		
		else if (vdrink.checked==true &&  adrink.checked==true &&   edrink.checked==true){
		data1="V,A,E";
		}
		
		else if (vdrink.checked==true &&  edrink.checked==true){
		data1="V,E";
		}
		
		else if (vdrink.checked==true &&  adrink.checked==true){
		data1="V,A";
		}
		
		else if (vdrink.checked==true &&  ddrink.checked==true){
		data1="V,D";
		}
		else if (vdrink.checked==true){
		data1="V";
		}
		else if (vdrink.checked==false){
		data1="0";
		}
		
		$.ajax({ 
		type:"POST", 
		url:Koneski+"update_drink.php", 
		data:"id=" + id_ha + "&update_drink=" + data1 , 
		success: function(data)
		{
		alert(data);
		}});
	
	});	
	////////////////////////////////////////////////////
	var vfood = document.getElementById("VFOOD");
	var afood = document.getElementById("AFOOD");
	var efood = document.getElementById("EFOOD");
	var dfood = document.getElementById("DFOOD");
	///////////////////////////////////////////////////
	$("#edit_food").click(function()
	{
	if (vfood.checked==true &&  afood.checked==true &&   efood.checked==true && dfood.checked==true){
		data1="V,A,E,D";
		}
		else if (vfood.checked==true &&  afood.checked==true && dfood.checked==true){
		data1="V,A,D";
		}
		else if (vfood.checked==true && efood.checked==true &&  dfood.checked==true){
		data1="V,E,D";
		}
		
		else if (vfood.checked==true &&  afood.checked==true &&  efood.checked==true){
		data1="V,A,E";
		}
		
		else if (vfood.checked==true &&  dfood.checked==true){
		data1="V,D";
		}
		else if (vfood.checked==true &&  efood.checked==true){
		data1="V,E";
		}
		
		else if (vfood.checked==true &&  afood.checked==true){
		data1="V,A";
		}
		
		else if (vfood.checked==true){
		data1="V";
		}
		else if (vfood.checked==false){
		data1="0";
		}
		
		$.ajax({ 
		type:"POST", 
		url:Koneski+"update_food.php", 
		data:"id=" + id_ha + "&update_food=" + data1 , 
		success: function(data)
		{
		alert(data);
		}});
	
	});	
	/////////////////////////////////////////////////////
	var vsnak = document.getElementById("VSNACK");
	var asnak = document.getElementById("ASNACK");
	var esnak = document.getElementById("ESNACK");
	var dsnak = document.getElementById("DSNACK");
	///////////////////////////////////////////////////
	$("#edit_snack").click(function(){
	
	if (vsnak.checked==true &&  asnak.checked==true &&   esnak.checked==true && dsnak.checked==true){
		data1="V,A,E,D";
		}
		else if (vsnak.checked==true &&  asnak.checked==true &&    dsnak.checked==true){
		data1="V,A,D";
		}
		else if (vsnak.checked==true &&  esnak.checked==true &&  dsnak.checked==true){
		data1="V,E,D";
		}
		
		else if (vsnak.checked==true &&  asnak.checked==true &&   esnak.checked==true){
		data1="V,A,E";
		}
		
		else if (vsnak.checked==true &&   dsnak.checked==true){
		data1="V,D";
		}
		else if (vsnak.checked==true &&  esnak.checked==true){
		data1="V,E";
		}
		else if (vsnak.checked==true &&  asnak.checked==true){
		data1="V,A";
		}
		
		else if (vsnak.checked==true){
		data1="V";
		}
		else if (vsnak.checked==false){
		data1="0";
		}
		
		$.ajax({ 
		type:"POST", 
		url:Koneski+"update_snack.php", 
		data:"id=" + id_ha + "&update_snaks=" + data1 , 
		success: function(data)
		{
		alert(data);
		}});
	
	});	
	
	///////////////////////////////////////////////////
	var vorder = document.getElementById("VORDER");
	var dorder = document.getElementById("DORDER");
	///////////////////////////////////////////////////
	$("#edit_order").click(function()
	{
	var data1;
		if (vorder.checked==true &&  dorder.checked==true){
		data1="V,D";
		}
		else if (vorder.checked==true){
		data1="V";
		}
		else if (vorder.checked==false){
		data1="0";
		}
		
		$.ajax({ 
		type:"POST", 
		url:Koneski+"update_order.php", 
		data:"id=" + id_ha + "&update_order=" + data1 , 
		success: function(data)
		{
		alert(data);
		}});
	
	});	
	///////////////////////////////////////////////////
	var vtran = document.getElementById("VTRAN");
	///////////////////////////////////////////////////
	$("#edit_trank").click(function()
	{
	var data1;
		
	 if (vtran.checked==true){
		data1="V";
		}
		else if (vtran.checked==false){
		data1="0";
		}
		
		
		$.ajax({ 
		type:"POST", 
		url:Koneski+"update_tranksaksi.php", 
		data:"id=" + id_ha + "&update_tranksaksi=" + data1 , 
		success: function(data)
		{
		alert(data);
		}});
	});	
		
	});	
	///////////////////////////////////////////////////
		
</script>
          <!--bawah (end)-->
		  <?php include"bawah.php";?>
		  
		  
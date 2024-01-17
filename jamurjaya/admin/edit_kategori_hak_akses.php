<?php include "atas.php";?>
 <!--atas (end)-->
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
    <form action="update/update_kategori_hak_akses.php" method="post" enctype="multipart/form-data">
	<?php
					$id=$_GET['id'];
					require"../koneksi.php";
					$sql="SELECT * FROM  hak_akses 	where id_akses='$id' ";
					$query=mysqli_query($conn,$sql);
					$hasil=mysqli_fetch_array($query);
					?>
    <table width="100%" height="69" border="0" class="table" style="background-color:#CCCCCC">
      <tr>
        <th height="23"><div align="right">Deskipsi</div></th>
        <th><div align="center">:</div></th>
        <th> <div align="left">
          <textarea name="2" id="2"><?php echo $hasil['2'];?></textarea>
        </div></th>
      </tr>
     
      <thead>
	   <tr>
          <th height="23" colspan="3"><div align="center">
            <p>Edit Hak Akses </p>
            </div></th>
          </tr>
        <tr>
          <th width="49%" height="23"><div align="right"><strong>Nama Akses </strong>
             
          </div></th>
          <th width="4%"><div align="center">:</div></th>
          <th width="47%">
            
              <div align="left">
                <div align="left">
                  <input name="1" type="text" id="1" value="<?php echo $hasil['1'];?>" />
                  <input name="id"  id="id" value="<?php echo $hasil['0'];?>" type="hidden"/>
                </div>
              </div></th></tr>
      </thead>
      <tbody>
      </tbody>
	  
	  <tbody>
      </tbody>
	  <tr>
          <th height="23" colspan="3"><div align="center">
            <label>
            <input type="submit" name="Submit" value="Ganti"   class="btn btn-primary"/>
            </label>
          </div></th>
        </tr>
    </table>
	<div align="center"></div>
	
	</form>
    <div align="center"><strong>
 
    </strong></div>
  </div>
  <!-- End  Basic Table  -->
</div>		  <?php  include"bawah.php";?>
		    <!--bawah (end)-->
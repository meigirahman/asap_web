 <?php
	
include "tanggal.php";		
include "koneksi.php";


$konek = mysqli_connect("localhost","root","","rka");
 ?>
     <form action='' method='POST' enctype='multipart/form-data' class='form-horizontal'>


      
  <div class="col-lg-12">
                    <div class="panel panel-success">
			<div class='panel-body'>
 
<div class="panel">	
                            <div class='row'>
                                <div class='col-lg-6'>	
<div class="panel panel-info">		
<div class="panel-heading">
                            <center>View Data</center>
                        </div>						
		 <?
	$sql_data   = "select * from belanja where kd_keg='$_GET[kd_keg]' and bid='$_SESSION[bidang]' ";
	
	$mysql_data = mysqli_query($konek, $sql_data) or die ("Query Data Error :" .mysql_error()); 
	
?>
 
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
					<tr>
						<th>Kode Rekening</th>
						<th>Uraian</th>
						<th>Aksi</th>
					</tr>
					</thead>
					<tbody>
				<?

				$no=1;
				while($data=mysqli_fetch_array($mysql_data))
				{ 
				echo "
					  <tr> 
					 
					  <td>$data[kd_rek]</td>
					  <td>$data[uraian]</td>

							  <td>
								<center>
								  <a href='?p=rinci_belanja&kd_prog=$data[kd_prog]&kd_keg=$data[kd_keg]&kd_rek=$data[kd_rek]&kd_blnj=$data[kd_blnj]&kd1=$data[kd1]&kd2=$data[kd2]&kd3=$data[kd3]&kd4=$data[kd4]&kd5=$data[kd5]' class='btn btn-primary btn-sm'>
									<span class='glyphicon glyphicon-edit'>Pilih</span> 
								  </a>
								  
								</center>
							  </td>
						  </tr>
						 ";
				$no++;
				}
	?>
</tbody></table>
</form>
		 
</div>                     
</div>    

			                 
<div class='col-md-5' style="padding-left: 40px; margin-left: 50px;">	 		
 <div class="panel panel-info">
									<div class="panel-heading">
									  <center><b>Input Data</b></center>
									</div>
									</div>	
	 
	
	
	<form role="form" name="tes" method="post" action="home.php?p=rek_simpan">

                                 
                              
                                <!-- /.col-lg-6 (nested) -->
								

								 
                                <input type="hidden" name="kd_prog" value="<? echo $_GET['kd_prog'] ?>">
                                <input type="hidden" name="kd_keg" value="<? echo $_GET['kd_keg'] ?>">
								
								

								
								 
									<div class="form-group">
										<label> Rekening 1 </label> 
										 <select class="form-control" name="kd1" id="kd1">
                                    <option value="-" selected></option>
                                    <?php
                                    $q = mysql_query("select * from rek1"); 
                                    while ($row1 = mysql_fetch_array($q))
									{
                                      echo "<option required='' value='".$row1['kd1']."'>".$row1['kd1']. ' | ' .$row1['nm1']."</option>";
                                    }
                                    ?>
                                    </select>
									</div>
									
									<div class="form-group">
										<label>  Rekening 2</label> 
										 <select class="form-control" name="kd2" id="kd2">
                                    <option value="-" selected></option>
 
                                    </select>
									</div>
									
									<div class="form-group">
										<label>  Rekening 3</label> 
										 <select class="form-control" name="kd3" id="kd3">
                                    <option value="-" selected></option>
 
                                    </select>
									</div>
									<div class="form-group">
										<label>  Rekening 4</label> 
										 <select class="form-control" name="kd4" id="kd4">
                                    <option value="-" selected></option>
                                    </select>
									</div>	
									<div class="form-group">
										<label>  Rekening 5</label> 
										 <select class="form-control" name="kd5" id="kd5"  >
                                    <option value="-" selected></option>
                                    </select>
									</div>
								 <div class="form-group">
									 
										 <select style="display: none" class="form-control" name="kd6" id="kd6"  >
									</div>

								<script>
									$("#kd1").change(function(){
										var kd1 = $("#kd1").val();
										$.ajax({
											type: "POST",
											dataType: "html",
											url: "rek1.php",
											data: "kd1="+kd1,
											success: function(msg){

												if(msg == ''){
													alert('Tidak ada data');
												}

												else{
													$("#kd2").html(msg);                                                     
												}
											}
										});  });
										
										$("#kd2").change(function(){
										var kd1 = $("#kd1").val();
										var kd2 = $("#kd2").val();
										$.ajax({
											type: "POST",
											dataType: "html",
											url: "rek2.php",
											data: "kd1="+kd1+"&kd2="+kd2,
											success: function(msg){

												if(msg == ''){
													alert('Tidak ada data');
												}

												else{
													$("#kd3").html(msg);                                                     
												}
											}
										});  });
										
											$("#kd3").change(function(){
										var kd1 = $("#kd1").val();
										var kd2 = $("#kd2").val();
										var kd3 = $("#kd3").val();
										$.ajax({
											type: "POST",
											dataType: "html",
											url: "rek3.php",
											data: "kd1="+kd1+"&kd2="+kd2+"&kd3="+kd3,
											success: function(msg){

												if(msg == ''){
													alert('Tidak ada data');
												}

												else{
													$("#kd4").html(msg);                                                     
												}
											}
										});  });
										
											$("#kd4").change(function(){
										var kd1 = $("#kd1").val();
										var kd2 = $("#kd2").val();
										var kd3 = $("#kd3").val();
										var kd4 = $("#kd4").val();
										$.ajax({
											type: "POST",
											dataType: "html",
											url: "rek4.php",
											data: "kd1="+kd1+"&kd2="+kd2+"&kd3="+kd3+"&kd4="+kd4,
											success: function(msg){

												if(msg == ''){
													alert('Tidak ada data');
												}

												else{
													$("#kd5").html(msg);                                                     
												}
											}
										});  });
										
										
											$("#kd5").change(function(){
										var kd1 = $("#kd1").val();
										var kd2 = $("#kd2").val();
										var kd3 = $("#kd3").val();
										var kd4 = $("#kd4").val();
										var kd5 = $("#kd5").val();
										$.ajax({
											type: "POST",
											dataType: "html",
											url: "rek5.php",
											data: "kd1="+kd1+"&kd2="+kd2+"&kd3="+kd3+"&kd4="+kd4+"&kd5="+kd5,
											success: function(msg){

												if(msg == ''){
													alert('Tidak ada data');
												}

												else{
													$("#kd6").html(msg);                                                     
												}
											}
										});  });
										
	
								</script>

								</div>

                                  <div align="center"> 
                                    <input name="fok" type="submit" id="fok" value="Simpan" class="btn btn-primary">
                                    <input name="fulang" type="reset" id="fulang" value="Reset" class="btn btn-default">
                                    <input name="fulang2" type="button" id="fulang2" value="Batal" onClick="javascript:history.back()" class="btn btn-warning">
                                  </div>
                                
								 
                                </form> 
        </div>
        </div>
	</div>
	</div>
	</div>
 	</div>


								

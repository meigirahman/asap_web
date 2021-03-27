<?php		
include "tanggal.php";		
include "koneksi.php";
?>

<link rel="stylesheet" href="css/themes/base/jquery-ui.css" />
   <script src="js/jquery-1.9.1.js"></script>
   <script src="js/ui/jquery-ui.js"></script>
   <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
   
   
<html>
	<head>
    <title> ENTRY DATA</title>
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<div id="wrapper">
          <div id="page-wrapper">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
 
                            
							<div class="col-lg-6">
                              <form role="form" name="tes" method="post" action="home.php?p=anggaran_simpan">

                                 
                                </div>
                                <!-- /.col-lg-6 (nested) -->
								

								<div class="col-lg-12">
                                  <div class="panel panel-success">
									<div class="panel-heading">
									  <center><b>Form Input DATA</b></center>
									</div>
                                </div>
                                </div>
						
                                
								
								

								
								<div class="col-lg-12">
									<div class="form-group">
										<label> Program </label> 
										 <select class="form-control" name="kd_prog" id="kd_prog">
                                    <option value="-" selected></option>
                                    <?php
                                    $q = mysql_query("select * from ref_prog"); 
                                    while ($row1 = mysql_fetch_array($q))
									{
                                      echo "<option required='' value='".$row1['kd_prog']."'>".$row1['kd_prog']. ' | ' .$row1['nm_prog']."</option>";
                                    }
                                    ?>
                                    </select>
									</div>
									
																		<div class="form-group">
										<label>  Kegiatan</label> 
										 <select class="form-control" name="kd_keg" id="kd_keg">
                                    <option value="-" selected></option>
 
                                    </select>
									</div>
									

									<div class="form-group">
										<label> Rekening Jenis</label> 
										 <select class="form-control" name="kd_jenis" id="kd_jenis">
                                    <option value="-" selected></option>
                                    <?php
                                    $q = mysql_query("select * from ref_jenis"); 
                                    while ($row1 = mysql_fetch_array($q))
									{
                                      echo "<option required='' value='".$row1['kd_jenis']."'>".$row1['kd_jenis']. ' | ' .$row1['nm_jenis']."</option>";
                                    }
                                    ?>
                                    </select>
									</div>
									
																		<div class="form-group">
										<label> Rekening Objek</label> 
										 <select class="form-control" name="kd_objek" id="kd_objek">
                                    <option value="-" selected></option>
 
                                    </select>
									</div>
									
																		<div class="form-group">
										<label> Rekening Rinci</label> 
										 <select class="form-control" name="kd_rinci" id="kd_rinci">
                                    <option value="-" selected></option>
 
                                    </select>
									</div>
									
									
 
 
							 
                            
								<script>
									$("#kd_prog").change(function(){
										var kd_prog = $("#kd_prog").val();
										$.ajax({
											type: "POST",
											dataType: "html",
											url: "cari_keg.php",
											data: "kd_prog="+kd_prog,
											success: function(msg){

												if(msg == ''){
													alert('Tidak ada data');
												}

												else{
													$("#kd_keg").html(msg);                                                     
												}
											}
										});  });
										
										$("#kd_jenis").change(function(){
										var kd_jenis = $("#kd_jenis").val();
										$.ajax({
											type: "POST",
											dataType: "html",
											url: "cari_objek.php",
											data: "kd_jenis="+kd_jenis,
											success: function(msg){

												if(msg == ''){
													alert('Tidak ada data');
												}

												else{
													$("#kd_objek").html(msg);                                                     
												}
											}
										});  });										
										$("#kd_objek").change(function(){
										var kd_objek = $("#kd_objek").val();
										$.ajax({
											type: "POST",
											dataType: "html",
											url: "cari_rinci.php",
											data: "kd_objek="+kd_objek,
											success: function(msg){

												if(msg == ''){
													alert('Tidak ada data');
												}

												else{
													$("#kd_rinci").html(msg);                                                     
												}
											}
										});  });
																		 
								</script>
                      
								
								
									
 
								
 
									
																	
																		<div class="form-group">
										<label> Jumlah Anggaran</label> 
										<input class="form-control" type="text" required= "" name="jlh" id="jlh"  />
									</div>
									
								</div>
								
                                <div class="col-lg-12">
                                  <div align="center"> 
                                    <input name="fok" type="submit" id="fok" value="Simpan" class="btn btn-primary">
                                    <input name="fulang" type="reset" id="fulang" value="Reset" class="btn btn-default">
                                    <input name="fulang2" type="button" id="fulang2" value="Batal" onClick="javascript:history.back()" class="btn btn-warning">
                                  </div>
                                </div>
								 
                                </form>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) --> 
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
	</body>
										
</html>

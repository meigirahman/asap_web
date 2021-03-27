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
								<form role="form" name="tes" method="post" action="home.php?p=detil_keg_simpan">
								<div class="col-lg-12">
                                  <div class="panel panel-info">
									<div class="panel-heading">
									  <center><b>Jumlah Dana</b></center>
									</div>
									</div>
								  
									
									<div class="form-group">						
										<label> Kode Kegiatan</label> 
										<select   class="form-control" name="kd_keg" id="kd_keg">
                                    <option value="-" selected></option>
                                    <?php
                                      $sql0 = mysql_query("select kd_keg from belanja where bid='$_SESSION[bidang]' group by kd_keg");
						 
									$no=1;
										while($row0 = mysql_fetch_array($sql0)){
											$kd_keg = $row0['kd_keg'];
											
									$q = mysql_query("select * from ref_keg where kd_keg='$kd_keg' "); 
                                    while ($row1 = mysql_fetch_array($q))
									{
                                      echo "<option required='' value='".$row1['kd_keg']."'>".$row1['kd_keg']. ' | ' .$row1['nm_keg']."</option>";
                                    }
										}
                                    ?>
                                    </select>
									</div>
									<div class="form-group">						
										<label> Jumlah Tahun n - 1</label> 
										<input class="form-control" type="text" required= "" name="nminus" id="nminus"  />
									</div>
									<div class="form-group">			
										<label> Jumlah Tahun n</label> 
										<input class="form-control" type="text" required= "" name="n" id="n"  />
									</div>
									
									<div class="form-group">					
										<label> Jumlah Tahun n + 1</label> 
										<input class="form-control" type="text" required= "" name="nplus" id="nplus"  />
									</div>
                                   
                                </div>
								<div class="col-lg-6">
									<div class="panel panel-danger">
									<div class="panel-heading">
									  <center><b>Tolak Ukur Kinerja</b></center>
									</div>
									</div>
                                						
									<div class="form-group">						
										<label> Masukan</label> 
										<input class="form-control" type="text" required= "" name="masukan_tolak" id="masukan_tolak"  />
									</div>
									
									<div class="form-group">			
										<label> Keluaran</label> 
										<input class="form-control" type="text" required= "" name="keluaran_tolak" id="keluaran_tolak"  />
									</div>
									
									<div class="form-group">					
										<label> Hasil</label> 
										<input class="form-control" type="text" required= "" name="hasil_tolak" id="hasil_tolak"  />
									</div>
										
									<div class="form-group">					
										<label> Manfaat</label> 
										<input class="form-control" type="text" required= "" name="manfaat_tolak" id="manfaat_tolak"  />
									</div>
										
									<div class="form-group">					
										<label> Dampak</label> 
										<input class="form-control" type="text" required= "" name="dampak_tolak" id="dampak_tolak"  />
									</div>
									
									
								</div>
								<div class="col-lg-6">
                                  <div class="panel panel-success">
									<div class="panel-heading">
									  <center><b>Target Kinerja</b></center>
									</div>
									</div>
                                						
									<div class="form-group">						
										<label> Masukan</label> 
										<input class="form-control" type="text" required= "" name="masukan_target" id="masukan_target"  />
									</div>
									
									<div class="form-group">			
										<label> Keluaran</label> 
										<input class="form-control" type="text" required= "" name="keluaran_target" id="keluaran_target"  />
									</div>
									
									<div class="form-group">					
										<label> Hasil</label> 
										<input class="form-control" type="text" required= "" name="hasil_target" id="hasil_target"  />
									</div>
										
									<div class="form-group">					
										<label> Manfaat</label> 
										<input class="form-control" type="text" required= "" name="manfaat_target" id="manfaat_target"  />
									</div>
										
									<div class="form-group">					
										<label> Dampak</label> 
										<input class="form-control" type="text" required= "" name="dampak_target" id="dampak_target"  />
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

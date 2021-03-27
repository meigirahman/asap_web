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
                              <form role="form" name="tes" method="post" action="home.php?p=sub_rinci_belanja_simpan">

                                     <input type="hidden" name="kd_prog" value="<? echo $_GET['kd_prog'] ?>">
                                <input type="hidden" name="kd_keg" value="<? echo $_GET['kd_keg'] ?>">
                                <input type="hidden" name="kd_rek" value="<? echo $_GET['kd_rek'] ?>">
                                <input type="hidden" name="kd_rinci" value="<? echo $_GET['kd_rinci'] ?>">
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
																		
										<label> Uraian</label> 
										<input class="form-control" type="text" required= "" name="uraian" id="uraian"  />
									</div>

	<div class="form-group">
																		
										<label> Volume</label> 
										<input class="form-control" type="text" required= "" name="volume" id="uraian"  />
									</div>

	<div class="form-group">
																		
										<label> Satuan</label> 
										<input class="form-control" type="text" required= "" name="satuan" id="uraian"  />
									</div>									
																	
								<div class="form-group">
																		
										<label> Harga Satuan</label> 
										<input class="form-control" type="text" required= "" name="harga_satuan" id="uraian"  />
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

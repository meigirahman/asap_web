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
 
                            
							 
								
                              <form role="form" name="tes" method="POST" action="page\lap_inventaris.php">

                                      
                               

								<div class="col-lg-6">
                                  <div class="panel panel-success">
									<div class="panel-heading">
									  <center><b>Pilih Periode Laporan</b></center>
									</div>
                                </div>
                               
						 
								
							 			
									<div class="form-group">						
										<label> Tanggal</label> 
										<select class="form-control" id="tgl"name="tgl">
    <option value="2021-01-31">Januari</option>
    <option value="2021-02-28">Februari</option>
    <option value="2021-03-31">Maret</option>
 
  </select> 
									</div>
									
									 
									
									  
									 
									
									
								 
								
                               
                                  <div align="center"> 
                                    <input name="fok" type="submit" id="fok" value="Tampilkan Laporan" class="btn btn-primary">
                                    
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

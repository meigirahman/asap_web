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
                              <form role="form" name="tes" method="post" action="home.php?p=rekening_simpan">

                                 
                                </div>
                                <!-- /.col-lg-6 (nested) -->
								

								<div class="col-lg-12">
                                  <div class="panel panel-success">
									<div class="panel-heading">
									  <center><b>Data Rekening</b></center>
									</div>
                                </div>
                                </div>
						
                                
								
								

								
								<div class="col-lg-12">
									<div class="form-group">
										<label> Program Kegiatan</label> 
										 <select class="form-control" name="id_keg" id="id_keg">
                                    <option value="-" selected></option>
                                    <?php
                                    $q = mysql_query("select * from tb_keg"); 
                                    while ($row1 = mysql_fetch_array($q))
									{
                                      echo "<option required='' value='".$row1['kd_keg']."'>".$row1['kd_keg']. ' | ' .$row1['nm_keg']."</option>";
                                    }
                                    ?>
                                    </select>
									</div>
									
 
										<div class="form-group">
										<label> Kode Rekening</label> 
										<input class="form-control" type="text" required= "" name="id_rek" id="id_rek"  />
									</div>
									
 <div class="form-group">
										<label> Nama Rekening</label> 
										<input class="form-control" type="text" required= "" name="nama" id="nama"  />
									</div>
 
							 
                            
							 
    </div><div class="col-lg-6">
									
										
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

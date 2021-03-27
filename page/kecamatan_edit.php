<?php		
include "koneksi.php";
$Kode_Kecamatan=$_GET['Kode_Kecamatan'];
$qrykoreksi=mysql_query("select * from kecamatan where Kode_Kecamatan='$Kode_Kecamatan' LIMIT 1");
$dataku=mysql_fetch_object($qrykoreksi);
?>
<html>
	<head>
    <title> <?php echo $dataku->nama ?></title>
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
		<!-- <style type="text/css">		body {
				padding-top: 20px;
				padding-bottom: 40px;
				font-size: 0.7em;
			} 
</style> -->
	</head>
	<body>
		<div id="wrapper">

                <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           
                        </h1>
                        
                    </div>
                </div>
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <center>Form Edit Data Kecamatan</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" name="tes" method="post" action="home.php?p=kecamatan_update">
                                    <div class="form-group">
                                     <label>Kode Desa</label> 
                                     <input class="form-control" type="text" required= "" name="Kode_Kecamatan" id="Kode_Kecamatan" size="100" maxlength="100" value="<?php echo $dataku->Kode_Kecamatan ?>" readonly="" />
									 </div>
                                    <div class="form-group">
                                     <label>Kecamatan</label> 
                                     <input class="form-control" type="text" required= "" name="Nama_Kecamatan" id="Nama_Kecamatan" size="100" maxlength="100"  value="<?php echo $dataku->Nama_Kecamatan ?>" />
                                    </div>
									 <div class="form-group">
                                     <label>Alamat Kecamatan</label> 
                                     <input class="form-control" type="text" required= "" name="Alamat" id="Alamat" size="100" maxlength="100" value="<?php echo $dataku->Alamat ?>" />
									 </div>
									  <div class="form-group">
                                     <label>Kode_NPWPD</label> 
                                     <input class="form-control" type="text" required= "" name="Kode_NPWP" id="Kode_NPWP" size="100" maxlength="100" value="<?php echo $dataku->Alamat ?>" />
									 </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                                <div class="col-lg-12">
                                    <div align="center"> 
                                    <input name="fok" type="submit" id="fok" value="Update" class="btn btn-primary">
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
        <!-- /#page-wrapper -->

    </div>
	</body>
</html>

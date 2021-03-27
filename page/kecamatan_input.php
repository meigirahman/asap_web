<?php		
include "tanggal.php";		
include "koneksi.php";
?>

<link rel="stylesheet" href="css/themes/base/jquery-ui.css" />
   <script src="js/jquery-1.9.1.js"></script>
   <script src="js/ui/jquery-ui.js"></script>
<html>
	<head>
    <title> S.I.W.P.D</title>
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<div id="wrapper">
          <div id="page-wrapper">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <center>Form Input Kecamatan</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="tes" method="post" action="home.php?p=kecamatan_simpan">
									<div class="form-group">
                                    <label>Nomor Pendaftaran</label> 
                                    <input class="form-control" type="text" name="no_pendaftaran" id="no_pendaftaran" size="50" maxlength="50" readonly=""
									<?php 
									$cek = mysql_fetch_array(mysql_query("SELECT Kode_Kecamatan FROM  kecamatan ORDER BY Kode_Kecamatan ASC LIMIT 1"));
									$d = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
										if($cek==null)
										{
											$cek="16.06.";
											$ex = explode('/', $cek);
										}
										else{
										$ex = explode('/', $cek['Kode_Kecamatan']);
										 }
										if (date('d')=='01'){ $a = '01'; }
										else{ 
										$a = '16.06.';
										$b = $ex[1]+1; 
										if(strlen($b) == 1)
										{
											$b = '000'.$b;
										}
										else if(strlen($b) == 3)
										{
											$b = '0'.$b;
										}	
										}
 
										$e = date('Y');
										$Kode_Kecamatan ='16.06.'.$b.'/'.$d[date('n')].'/'.$e;
										
									?> value="<?php  echo $Kode_Kecamatan; ?>"/></div>
									<div class="form-group">
                                     <label>Tanggal Pendaftaran</label> 
                                     <input class="form-control" type="date" required= "" name="tgl_pendaftaran" id="tgl_pendaftaran" size="50" maxlength="50" value="<?php echo $cetak =date('Y-m-d') ?>"/>
                                    </div>
                                    <div class="form-group">
                                     <label>Bidang Usaha</label> 
                                     <input class="form-control" type="text" required= "" name="bidang_usaha" id="bidang_usaha" size="100" maxlength="100" />
                                    </div>
                                    <div class="form-group">
                                     <label>Nama </label> 
                                     <input class="form-control" type="text" required="" name="nama" id="nama" size="50" maxlength="50" />
                                    </div>
									<div class="form-group">
                                     <label>NIK / NPWP </label> 
                                     <input class="form-control" type="text" required= "" name="nik" id="nik" size="50" maxlength="50" />
                                    </div>
									<div class="form-group">
                                     <label>Alamat</label> 
                                     <div>
                                        <label>
                                            <input class="form-control" type="text" required= "" name="alamat" id="alamat" size="200" maxlength="200"  />
                                        </label><b>RT. </b>
                                        <label>
                                            <input class="form-control" type="text" required= "" name="no_rt" id="no_rt" size="3" maxlength="3" />
                                        </label> <b>RW.</b> 
										 <label>
                                            <input class="form-control" type="text" required= "" name="no_rw" id="no_rw" size="3" maxlength="3" />
                                        </label>
                                     </div>
                                    </div>
									
								</div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
									<div class="form-group">
                                     <label>Desa / Kelurahan</label> 
                                     <input class="form-control" type="text" required= "" name="kelurahan" id="kelurahan" size="50" maxlength="50" />
                                    </div>
                                    <div class="form-group">
                                     <label>Kecamatan</label> 
                                     <input class="form-control" type="text" required= "" name="kecamatan" id="kecamatan" size="100" maxlength="100" />
                                    </div>
									<div class="form-group">
                                     <label>Kabupaten </label> 
                                     <input class="form-control" type="text" required= "" name="kabupaten" id="kabupaten" size="100" maxlength="100" value="Musi Banyuasin" readonly=""/>
                                    </div>
									<div class="form-group">
                                     <label>No. Telp / HP</label> 
                                     <input class="form-control" type="text" required= "" name="no_telp" id="no_telp" size="100" maxlength="100" />
                                    </div>
									<div class="form-group">
                                     <label>Email</label> 
                                     <input class="form-control" type="text" required= "" name="email" id="email" size="100" maxlength="100" />
                                    </div>
									<div class="form-group">
                                     <label>Kode Pos</label> 
                                     <input class="form-control" type="text" required= "" name="kode_pos" id="kode_pos" size="100" maxlength="100" />
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

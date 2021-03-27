<?
session_start();

if(!isset ($_SESSION['my_session'])){
    header('location:index.php');
}

include "tanggal.php";
include "koneksi.php";
$query = "SELECT max(no_surat) as maxKODE FROM tb_surat_usaha";

    $hasil = mysql_query($query);
    $data = mysql_fetch_array($hasil);
    $idMax = $data['maxKODE'];
    $noUrut = (int) substr($idMax, 6, 3);
    $noUrut++;
    $char="500/";
    $tanda="/";
    $tahun= date('Y');
    $no = $char . sprintf("%03s", $noUrut)  . $tanda  . $tahun;

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">



    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="img/favicon(1).ico">
    <script type="text/javascript" src="js/titlebar.js"></script>
    <script type="text/javascript" src="js/ajax_login.js"></script>
<script type="text/javascript">
function logout(){
    if(confirm("Logout ?")){
        doLogout();
    }
}
</script>

<link rel="stylesheet" href="css/themes/base/jquery-ui.css" />
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/ui/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#nama" ).autocomplete({
            source: "get_penduduk.php",
            minLength: 1,
            select: function( event, ui ) { 
			$('#nik').val(ui.item.nik);
			$('#jenis_kelamin').val(ui.item.jenis_kelamin);
            $('#tempat').val(ui.item.tempat);
			$('#tanggal_lahir').val(ui.item.tanggal_lahir);
            $('#kewarganegaraan').val(ui.item.kewarganegaraan);
            $('#agama').val(ui.item.agama);
            $('#status_nikah').val(ui.item.status_nikah);
            $('#pekerjaan').val(ui.item.pekerjaan);
            $('#no_rt').val(ui.item.no_rt);
            $('#no_rw').val(ui.item.no_rw);
            $('#no_kk').val(ui.item.no_kk);
            $('#status_hub').val(ui.item.status_hub);
            $('#pendidikan').val(ui.item.pendidikan);
            }
        });
    });
</script>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BESATI SEKAYU</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include "header.php"
    ?>
	
	<?php

  include "left_sidebar.php"
  
  ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    	<section class="content-header">
      <h1>
        Besati
        <small>Version 1.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
	

    <div id="wrapper">

        <!-- Navigation -->
       
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Form Input Data</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="tes" method="post" action="s_u.php">
                                    <div class="form-group">
                                     <label>No Surat</label> 
                                     <input class="form-control" type="text" name="no_surat" id="no_surat" size="20" maxlength="20" value="<?php echo $no;?>" readonly="" style="background: #bab7a8;"/></div>
                                    <div class="form-group">
                                     <label>Nama</label> 
                                     <input class="form-control" type="text" name="nama" id="nama" size="50" maxlength="30"/>
                                    </div>
                                    <div class="form-group">
                                     <label>NIK</label> 
                                     <input class="form-control" type="text" name="nik" id="nik" size="30" maxlength="16"/>
                                    </div>
                                    <div class="form-group">
                                     <label>Jenis Kelamin</label> 
                                     <input class="form-control" type="text" name="jenis_kelamin" id="jenis_kelamin" size="20" maxlength="10"/>
                                    </div>
                                    
                                    <div class="form-group">
                                     <label>Tempat, Tanggal Lahir</label> 
                                     <div>
                                     <label>
                                     <input class="form-control" type="text" name="tempat" id="tempat" size="20" maxlength="15"/>
                                     </label>
                                     <label>
                                     <input class="form-control" type="text" name="tanggal_lahir" id="tanggal_lahir" size="10" maxlength="10"/>
                                     </label>
                                     </div>
                                    </div>
                                    <div class="form-group">
                                     <label>Pekerjaan </label> 
                                     <input class="form-control" type="text" name="pekerjaan" id="pekerjaan" size="50" maxlength="50"/>
                                    </div>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                     <label>Agama </label> 
                                     <input class="form-control" type="text" name="agama" id="agama" size="20" maxlength="10"/>
                                    </div>
                                    <div class="form-group">
                                     <label>RT/RW</label> 
                                     <div>
                                        <label>
                                            <input class="form-control" type="text" name="no_rt" id="no_rt" size="2" maxlength="2"/>
                                        </label>
                                        <label>
                                            <input class="form-control" type="text" name="no_rw" id="no_rw" size="2" maxlength="2"/>
                                        </label>
                                     </div>
                                    </div>
                                    <div class="form-group">
                                     <label>Sektor Usaha</label> 
                                     <div>
                                        <input class="form-control" type="text" name="usaha" id="usaha" size="50" maxlength="50" />
                                        
                                     </div>
                                    </div>
                                    <div class="form-group">
                                     <label>Tanggal Input </label> 
                                     <input class="form-control" type="text" name="tanggal_input" id="tanggal_input" size="10" value="<?php echo $cetak =date('Y-m-d') ?>"/>
                                    </div>
                                    <div class="form-group">
                                     <label>Oleh</label> 
                                     <div>
                                        <label>
                                           <select name="oleh" id="oleh" class="form-control"> 
                                        <option value="ABDUL KHAYYI" selected>Kepala Desa</option>
                                        <option value="TOMSON">Sekdes</option> 
                                        </select>
                                        </label>
                                        
                                     </div>
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
    <!-- /#wrapper -->

    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

	

<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>

</html>


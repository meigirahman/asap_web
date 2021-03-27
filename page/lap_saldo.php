<?
session_start();
include "../koneksi.php"; 
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LAPORAN SALDO AWAL</title>
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

<link rel="stylesheet" href="gaya.css" type="text/css">
<script type="text/javascript" src="jquery-1.4.3.min.js"></script>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<link rel="shortcut icon" href="img/favicon(1).ico">
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script src="js/exporting.js" type="text/javascript"></script>
<script type="text/javascript">
function logout(){
    if(confirm("Logout ?")){
        doLogout();
    }
}
</script>

<link rel="stylesheet" type="text/css" href="Chartjs/Chart.min.css"> 
<script type="text/javascript" src="Chartjs/Chart.min.js"> </script>
<script type="text/javascript" src="assets/js/jquery.js"></script>

</head>

<body>



		
		<div id="page-wrapper">
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                       
						
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            
 
<div  > 
									<div class="panel panel-success">
									 
									  <font style="font-size: 15pt;"> <center>DAFTAR TRANSAKSI SALDO AWAL PERSEDIAAN</center>  
 <center>PER 31 DESEMBER 2020</center></td></tr>	</b> 
									 
									<div class = "panel-body">	
 
 
					  
								<form method="post"  onsubmit="return confirm('Update status?')" >
                                                                

	
  <?
									 $o="select * from tb_opd where kd_opd='$_SESSION[kd_opd]'";
                                    
                                    $oo=mysql_query($o) or die (mysql_error());
                                   $opd=mysql_fetch_object($oo);?>                                                              

	
		  </br> <font style="font-size: 14pt; align:left;">Perangkat Daerah : <?php echo $opd->nama?></br></br> 

                                    <table class="table table-bordered"  >
                                    <thead>
									<tr  style="background: #000000;color: #fff;"> 
							 
									<th align="center"><center>No</th>
									<th><center>Kode Rekening</th> 
									<th align="center"><center>Uraian</th>
                                    <th align="center"><center>Kuantitas</th>
                                    <th align="center"><center>Jumlah</th>
                                   
									</tr>
									 
									</thead>
                                    <?
                                    $myquery="select * from tb_stok where kd_opd='$_SESSION[kd_opd]' and opsi='saldo'";
                                    $no=1;
                                    $total1=0;
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    
									{
                                    ?>
                                    <tr>
								 
                                                         <td width="5px" align="center"><?php echo $no;?></td>
                              
                                    <td ><?php echo $dataku->kd_brg?></td>
                                    <td ><?php echo $dataku->uraian?></td> 
                                   
									<?
									 $a="select harga_satuan from tb_stok where kd_brg='$dataku->kd_brg' and kd_opd='$_SESSION[kd_opd]' order by harga_satuan desc limit 1 ";
                                    
                                    $aa=mysql_query($a) or die (mysql_error());
                                   $harga=mysql_fetch_object($aa);
								   ?>
										
                                    <td ><?php echo number_format($dataku->jumlah,2,',','.')?></td>
                                  
                                    <td style="text-align: right;"><?php echo number_format($total=$dataku->jumlah*$dataku->harga_satuan,2,',','.');?></td>
                                   
								 
									 
                                    </tr>
                                    
                                    <?php
									$total1=$total1+$total;
                                    $no++;
                                    }
                                    ?>
									<tr  style="background: #000000;color: #fff;"> 
									<td colspan=4><center><b>Total</td>
									<td style="text-align: right;"><b><?php echo "Rp. ". number_format($total1,2,',','.')?></td>
									 	
									</tr>
                                    <tbody>
                                    
                                    </tbody>
									</table>
									<div class="alert alert-primary" role="alert">
									<?php $myquery="select * from tb_stok order by jumlah desc limit 1";
                                    $no=1;
                                    
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    $dataku=mysql_fetch_object($daftar);
									?>
										
        
									</div>
	  
 
							</form>
							<table border=0>
							<tr><td>Disetujui Tanggal, 31 Desember 2020<br>Kuasa Pengguna Anggaran</td><td width="400px">&nbsp;</td><td>Petugas Pengelola Persediaan</td></tr>
							</table>
                                    
                            </div>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
		
		
		
    </div>
    </div>
    </div>
    <!-- /#wrapper -->

	    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
	
	
 
    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>


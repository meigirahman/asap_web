<?
session_start();
include "koneksi.php";
include "tanggal.php";
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LAPORAN INVENTARIS</title>
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
									 
									  <font style="font-size: 15pt;"> <center>DAFTAR INVENTARISASI FISIK PERSEDIAAN</center>  
 <center>PER 31 DESEMBER 2020</center></td></tr>	</b> 
									 
									<div class = "panel-body">	
 
 
					  
									<form method="post"  onsubmit="return confirm('Update status?')" >
									<?
									$o="select * from tb_opd where kd_opd='$_SESSION[kd_opd]'";
                                    
                                    $oo=mysql_query($o) or die (mysql_error());
									$opd=mysql_fetch_object($oo);
									?>                                                              

									</br> <font style="font-size: 14pt; align:left;">Perangkat Daerah : <?php echo $opd->nama?></br></br> 
                                    <table class="table table-bordered"  >
                                    <thead>
									<tr  style="background: #000000;color: #fff;"> 
							 
									<th align="center">No</th>
									<th><center>Klasifikasi Persediaan</th> 
									<th align="center"><center>Nama/Jenis Persediaan</th>
                                    <th align="center"><center>Unit</th>
                                    <th align="center"><center>Harga Satuan</th>
                                    <th align="center"><center>Total</th> 
                                    <th align="center"><center>Cara Penilaian Harga</th> 
                                    <th align="center"><center>Keterangan</th> 
									</tr>
									<tr style="background: #b9bec1; font-size: 10pt;" > 
									<th align="center">1</th>
									<th><center>2</th> 
									<th align="center"><center>3</th>
                                    <th align="center"><center>4</th>
                                    <th align="center"><center>5</th>
                                    <th align="center"><center>6 = ( 4 x 5 )</th> 
                                    <th align="center"><center>7</th> 
                                    <th align="center"><center>8</th> 
									</tr>
									</thead>
                                    <?
                                    $myquery="select *,sum(jumlah) as jumlah from tb_stok where kd_opd='$_SESSION[kd_opd]' and tgl between '2021-01-01' and '$_POST[tgl]' group by kd_brg ";
                                    $no=1;
                                    $nilai1=0;
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr>
									<td width="5px" align="center"><?php echo $no;?></td>
                              
                                    <td ><?php echo $dataku->kd_brg?></td>
                                    <td ><?php echo $dataku->uraian?></td> 
                                    <td ><?php echo number_format($dataku->jumlah,2,',','.')?></td> 
											<?
												$a="select harga_satuan from tb_stok where kd_brg='$dataku->kd_brg' and kd_opd='$_SESSION[kd_opd]' order by harga_satuan asc limit 1 ";
												$aa=mysql_query($a) or die (mysql_error());
												$harga=mysql_fetch_object($aa);
										   ?>
										
                                    <td style="text-align: right;"><?php echo number_format($hrg=$harga->harga_satuan,2,',','.')?></td>
                                    <td style="text-align: right;"><?php echo number_format($nilai=$dataku->jumlah*$hrg,2,',','.');?></td>
                                    <td >Harga perolehan terakhir</td>
                                    <td ></td>
								 
									 
                                    </tr>
                                    
                                    <?php
									$nilai1=$nilai1+$nilai;
									
                                    $no++;
                                    }
                                    ?>
                                    <tr  style="background: #000000;color: #fff;"> 
									<td colspan=5><center><b>JUMLAH</td>
									<td style="text-align: right;"><b><?php echo "Rp. ". number_format($nilai1,2,',','.')?></td> 
                                     <td > </td>
                                     <td > </td>
									 
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
<?
$t="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and jab='upb'";
                                    $tt=mysql_query($t) or die (mysql_error());
                                    $ttd=mysql_fetch_object($tt);
									
									$t2="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and jab='pengelola'";
                                    $tt2=mysql_query($t2) or die (mysql_error());
                                    $ttd2=mysql_fetch_object($tt2);
									
										?>
<tr><td>Disetujui Tanggal, <? echo date('d F Y');?><br><?php echo $ttd->jabatan?></td><td width="800px">&nbsp;</td><td><br><?php echo $ttd2->jabatan?></td></tr>
<tr><td> </td><td width="400px">&nbsp;</td><td> </td></tr>
<tr><td> </td><td width="400px">&nbsp;</td><td> </td></tr>
<tr><td> </td><td width="400px">&nbsp;</td><td> </td></tr>
<tr><td><?php echo $ttd->nama?></td><td width="400px">&nbsp;</td><td><?php echo $ttd2->nama?></td></tr>
<tr><td><?php echo "NIP. ".$ttd->nip?></td><td width="400px">&nbsp;</td><td><?php echo "NIP. ".$ttd2->nip?></td></tr>
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


<?php
// header("Content-type: application/vnd-ms-excel");
// header("Content-Disposition: attachment; filename=inventaris.xls");
?>

<?
session_start();
include "..\koneksi.php"; 
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LAPORAN RINCIAN PERSEDIAAN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->


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
									 
									  <font style="font-size: 15pt;"> <center><b>LAPORAN RINCIAN BARANG PERSEDIAAN</center>  
<center>Periode <?php echo date("d F Y", strtotime('2021-01-01')) ?> s.d. <?php echo date("d F Y", strtotime($_POST['tgl'])); ?></center></td></tr>	</b> 
									 <tr><td>&nbsp;</td></tr> 
									<div class = "panel-body">	
 
 
					  
								<form method="post"  onsubmit="return confirm('Update status?')" >
                                                                

	
  <?
									 $o="select * from tb_opd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]'";
                                    
                                    $oo=mysql_query($o) or die (mysql_error());
                                   $opd=mysql_fetch_object($oo);?>                                                              

  <table border=0 >
		  <tr> <font style="font-size: 14pt; align:left;"><b>Perangkat Daerah : <?php echo $opd->nama?></tr> 
 
                                  
                                    <thead>
									<tr  style="background: #b9bec1; font-size: 10pt;  border: 1px solid black;" > 
							 
									<th style="text-align: center;" rowspan=2>No</th>
									<th rowspan=2 ><center>Kode Persediaan</th> 
									<th rowspan=2 align="center"><center>Uraian</th>
                                    <th rowspan=2 align="center"><center>Satuan</th>
                                    <th rowspan=2 align="center"><center>Saldo Awal<br>1 Jan 2020</th>
                                    <th colspan=3 align="center"><center>Mutasi</th> 
                                    <th rowspan=2 align="center"><center>Harga Satuan</th>
                                    <th colspan=4 align="center"><center>Jumlah Total</th> 
                                    <th  rowspan=2 align="center"><center>Keterangan</th> 
									</tr>
									<tr  style="background: #b9bec1; font-size: 10pt;  border: 1px solid black;" > 
							 
								 
                                    <th width="70">Masuk</th>
                                    <th width="70">Keluar</th>
                                    <th width="80">Sisa</th>
                                    <th width="100">Saldo Awal</th>
									<th width="100">Pembelian</th>
                                    <th width="100">Pemakaian</th>
									<th width="100">Persediaan</th>
									</tr>
									<tr  style="background: #b9bec1; font-size: 10pt;  border: 1px solid black;" > 
							 
									<th align="center">1</th>
									<th><center>2</th> 
									<th align="center"><center>3</th>
                                    <th align="center"><center>4</th>
                                    <th align="center"><center>5</th>
                                    <th align="center"><center>6</th> 
                                    <th align="center"><center>7</th> 
                                    <th align="center"><center>8 = (5 + 6 - 7)</th> 
                                    <th align="center"><center>9</th> 
                                    <th align="center"><center>10 = ( 5 x 9 )</th> 
                                    <th align="center"><center>11 = ( 6 x 9 )</th> 
                                    <th align="center"><center>12 = ( 7 x 9 )</th> 
                                    <th align="center"><center>13 = ( 10+11-12 )</th> 
                                    <th align="center"><center>14</th> 
									</tr>
									</thead>
                                    <?
                                    $myquery="select *,sum(jumlah) as jumlah from tb_stok where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and tgl between '2021-01-01' and '$_POST[tgl]' group by kd_brg  ";
                                    $no=1;
                                    $totm1=0;
                                    $totk1=0;
                                    $tots1=0;
                                    $aw1=0;
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
                                    ?>
                                   <tr  style="border: 1px solid black;" > 
								 
                                                         <td width="5px" align="center"><?php echo $no;?></td>
                              
                                    <td><?php echo $dataku->kd_brg?></td>
                                    <td ><?php echo $dataku->uraian?></td>
                                    <td  style="text-align: center;" ><?php echo $dataku->satuan?></td>
									<?
									 $awal2="select sum(jumlah) as jumlah from tb_saldo_rinci where kd_brg='$dataku->kd_brg' and kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' group by kd_brg ";
                                    
                                    $awal1=mysql_query($awal2) or die (mysql_error());
                                   $awal=mysql_fetch_array($awal1);
								   ?>
								   
                                   <td  style="text-align: right;"><? if($awal['jumlah']>0)
								   
								   {echo $awal['jumlah'];}else
								   {echo $sawal=0;} ?>
	</td><?
									
									 $a="select * from tb_stok where kd_brg='$dataku->kd_brg' and kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' order by tgl desc limit 1 ";
                                    
                                    $aa=mysql_query($a) or die (mysql_error());
                                   $harga=mysql_fetch_object($aa);
								   ?>
										 <td style="text-align: right;" ><?
									 $mmm="select sum(jumlah) as jlh from tb_stok where kd_brg='$dataku->kd_brg' and opsi='masuk' and kd_opd='$_SESSION[kd_opd]'  and kd_sub='$_SESSION[kd_sub]' order by harga_satuan desc limit 1 ";
									 $kkk="select sum(positif) as jlh from tb_stok where kd_brg='$dataku->kd_brg' and opsi='keluar' and kd_opd='$_SESSION[kd_opd]'  and kd_sub='$_SESSION[kd_sub]' order by harga_satuan desc limit 1 ";
                                    
                                    $mm=mysql_query($mmm) or die (mysql_error());
                                   $msk=mysql_fetch_array($mm);
								   
								    $kk=mysql_query($kkk) or die (mysql_error());
                                   $k=mysql_fetch_array($kk);
								   
								   ?>
								   
								   <?php echo number_format($masuk=$msk['jlh'],2,',','.');?></td> 
								   <td  style="text-align: right;"> <?php if($keluar=$k['jlh']>0) {echo number_format($keluar=$k['jlh'],2,',','.');}else {echo number_format($keluar=0,2,',','.');}?></td> 
								   <td  style="text-align: right;"> <?php echo number_format($sisa=$awal['jumlah']+	$masuk-$keluar,2,',','.'); ?></td> 
                                    <td  style="text-align: right;"><?php echo number_format($hrg=$harga->harga_satuan,2,',','.')?></td>
                                    <td  style="text-align: right;"><?php echo number_format($aw=$awal['jumlah']*$harga->harga_satuan,2,',','.')?></td>
									
									
                                    <td style="text-align: right;"><?php echo number_format($totm=$hrg*$masuk,2,',','.')?></td>
                                    <td style="text-align: right;"><?php echo number_format($totk=$hrg*$keluar,2,',','.')?></td>
                                    <td style="text-align: right;"><?php echo number_format($tots=$hrg*$sisa,2,',','.')?></td>
                                
                                    <td > </td>
                                  
								 
									 
                                    </tr>
                                    
                                    <?php
									$aw1=$aw1+$aw;
									$totm1=$totm1+$totm;
									$totk1=$totk1+$totk;
									$tots1=$tots1+$tots;
                                    $no++;
									 
                                    }
                                    ?>
                                    <tr  style="background: #b9bec1; font-size: 10pt;  border: 1px solid black;" > 
									
									<td colspan=9><center><b>JUMLAH</td>
									<td style="text-align: right;"><b><?php echo "Rp. ". number_format($aw1,2,',','.')?></td>
									<td style="text-align: right;"><b><?php echo "Rp. ". number_format($totm1,2,',','.')?></td>
									<td style="text-align: right;"><b><?php echo "Rp. ". number_format($totk1,2,',','.')?></td>
									<td style="text-align: right;"><b><?php echo "Rp. ".number_format($tots1,2,',','.')?></td>
                                     <td > </td>
									 
								
								
									<div class="alert alert-primary" role="alert">
									<?php $myquery="select * from tb_stok order by jumlah desc limit 1";
 
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    $dataku=mysql_fetch_object($daftar);
									?> 
									</div>
	  
 
	</form> 
<?
$t="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and jab='upb'";
                                    $tt=mysql_query($t) or die (mysql_error());
                                    $ttd=mysql_fetch_object($tt);
									
									$t2="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and jab='pengelola'";
                                    $tt2=mysql_query($t2) or die (mysql_error());
                                    $ttd2=mysql_fetch_object($tt2);
									
										?>
										
<tr><td>&nbsp;</td></tr>									  
<tr><td> </td><td  colspan=2>Disetujui Tanggal, <?php echo $_POST['ttd']; ?><br><?php echo $ttd->jabatan?></td><td colspan=8></td><td colspan=2><br><?php echo $ttd2->jabatan?></td></tr>
<tr><td> </td><td  width="400px">&nbsp;</td><td> </td></tr>
<tr><td> </td><td width="400px">&nbsp;</td><td> </td></tr>
<tr><td> </td><td width="400px">&nbsp;</td><td> </td></tr>
<tr><td> </td><td colspan=2><?php echo $ttd->nama?></td> <td colspan=8></td><td colspan=2><?php echo $ttd2->nama?></td></tr>
<tr><td > </td><td colspan=2><?php echo "NIP. ".$ttd->nip?></td><td colspan=8></td><td  colspan=2><?php echo "NIP. ".$ttd2->nip?></td></tr>
 
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
<script>
    // window.print();
</script>
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


<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=kendali.xls");
?>

<?php
$server = "localhost";
$username = "root";
$password = "";
$databaseName = "oix";

$connection = mysql_connect($server, $username, $password) or die ("Error on Connect to Server ".mysql_error());
mysql_select_db($databaseName, $connection) or die ("Error on Database Name ".mysql_error());

?>


<link rel="shortcut icon" href="img/favicon(1).ico">
<script type="text/javascript">
function logout(){
    if(confirm("Logout ?")){
        doLogout();
    }
}
</script>


<script type="text/javascript" src="assets/js/jquery.js"></script>
</head>

<body>
	<?$jns=mysql_fetch_object(mysql_query("select * from tb_jenis where kd_jenis='$_GET[kd_jenis]'"));
	?>
  <table  >
  <tr><td colspan=7><td bgcolor="yellow" colspan=2 align=center><font style="font-size: 16pt;" ><strong><?php echo $jns->nm_jenis;?></td></tr> 
  <tr><td colspan=7><td bgcolor="yellow" colspan=2 align=center><font style="font-size: 16pt;" ><strong>TAHUN ANGGARAN 2019</td></tr> 
	 
</table>
	
	<p align="center"><font style="font-size: 18pt;" ><strong>KARTU KENDALI <br></font>
	REALISASI PENYERAPAN DANA DAN CAPAIAN OUTPUT KEGIATAN<br>
	DANA ALOKASI KHUSUS (DAK) FISIK<br>
	<?$bdg=mysql_fetch_object(mysql_query("select * from tb_bidang where kd_bidang='$_GET[kd_bidang]'"));
	?>
	<font style="font-size: 18pt;" >BIDANG  <?php echo $bdg->nm_bidang;?> </font><br>
		SAMPAI DENGAN TAHAP-<?php echo $_GET['tw'];?> <br>
	</p>
   <?
                                    $jlh=mysql_fetch_object(mysql_query("select sum(pagu) as pagu from tb_pagu where kd_bidang='$_GET[kd_bidang]'"));
                                    ?>
	<table>
	<p align="left"> 
	<tr><td colspan=8>PENERIMAAN DARI RKUN </td><td align="right"> </td></tr>
		<?$thp1=mysql_fetch_object(mysql_query("select sum(jlh) as jlh from tb_rkun where kd_bidang='$_GET[kd_bidang]' and tahap='1'"));
	?><?$thp2=mysql_fetch_object(mysql_query("select sum(jlh) as jlh  from tb_rkun where kd_bidang='$_GET[kd_bidang]' and tahap='2'"));
	?><?$thp3=mysql_fetch_object(mysql_query("select sum(jlh) as jlh  from tb_rkun where kd_bidang='$_GET[kd_bidang]' and tahap='3'"));
	?><?$thp=mysql_fetch_object(mysql_query("select sum(jlh) as jlh from tb_rkun where kd_bidang='$_GET[kd_bidang]' and tahap<='$_GET[tw]'"));
	?>
	<tr><td colspan=8>Tahap-1</td><td align="right"><?php echo  number_format($thp1->jlh,2,',','.');?></td></tr>
	<tr><td colspan=8>Tahap-2</td><td align="right"><?php if($_GET['tw']<2){echo  number_format('0',2,',','.');}else{echo  number_format($thp2->jlh,2,',','.');}?></td></tr>
	<tr><td colspan=8>Tahap-3</td><td align="right"><?php  if($_GET['tw']<2){echo  number_format('0',2,',','.');}else{echo  number_format($thp3->jlh,2,',','.');}?></td></tr>
	<tr><td colspan=8>Jumlah</td><td align="right"><?php echo  number_format($thp->jlh,2,',','.');?></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
	
	<tr><td colspan=8>Realisasi Pembayaran ke Pihak Ketiga melalui SP2D Daerah</td><td align="right"><?php echo  number_format('0',2,',','.');?></td></tr>

	 <?
									
									$twtot=mysql_fetch_object(mysql_query("select *,sum(jlh) as tot from tb_sp2d where tw<='$_GET[tw]' and kd_bidang='$_GET[kd_bidang]' "));
									$twini=mysql_fetch_object(mysql_query("select *,sum(jlh) as tot from tb_sp2d where tw='$_GET[tw]' and kd_bidang='$_GET[kd_bidang]'"));
									
										?>
										
<tr><td colspan=8>Triwulan ini</td><td align="right"><?php echo  number_format($twini->tot,2,',','.');?></td></tr>       
<tr><td colspan=8>Kumulatif s.d. Triwulan ini</td><td align="right"><?php echo  number_format($twtot->tot,2,',','.');?></td></tr>
<tr><td colspan=8>Sisa Dana Alokasi Khusus Fisik di RKUD</td><td align="right"><?php echo  number_format($sisa=$thp->jlh-$twtot->tot,2,',','.');?></td></tr>

		</table>
		
		</p>
		
		<div id="page-wrapper">
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
         
                  
					
						
	
  
									
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                             
  
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table border=1 >
                                    <thead >
									<tr  style="background: gray;color: #fff;"> 
									<th align="center" rowspan=2>No</th>
									<th align="center" rowspan=2>Bidang / Sub Bidang</th>
									<th align="center" valign="middle" rowspan=2>Pagu<br>(Rp.)</th>
									<th align="center" rowspan=2>Distribusi<br> Penyaluran<br>(Rp.)</th>
									<th align="center" colspan=3>Realisasi Pembayaran dari RKUD melalui SP2D Daerah</th>
									<th align="center" style="vertical-align:middle" rowspan=2>Sisa Dana di RKUD<br>(Rp.)</th>
									<th align="center" rowspan=2>Persentase Capaian<br> Output<br>(%)</th>
									</tr>
																		<tr  style="background: gray;color: #fff;"> 
									<th align="center">Triwulan sebelumnya<br>(Rp.)</th>
									<th align="center">Triwulan ini<br>(Rp.)</th>
									<th align="center">Kumulatif s.d. Triwulan ini<br>(Rp.)</th> 
									</tr>
									</thead>
									<tr height=10><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                    <?
                                    $myquery="select * from tb_pagu where kd_jenis='$_GET[kd_jenis]' and kd_bidang='$_GET[kd_bidang]' order by kd_jenis, kd_bidang, kd_subbid";
                                    $no=1;
                                    
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr>
                                   <td align="center"><?php echo $no;?></td>
  									<?
 
									if($dataku->kd_subbid=="")
									{	
									$bidang=mysql_fetch_object(mysql_query("select * from tb_bidang where kd_bidang='$_GET[kd_bidang]'"));
									
									?>
                                    <td align="left"><?php echo $bidang->nm_bidang?></td> 
									<?}
									else
									{	
									$subbid=mysql_fetch_object(mysql_query("select * from tb_subbid where kd_subbid='$dataku->kd_subbid' group by kd_subbid"));
									
										
									?>
                                    <td align="left"><?php echo $subbid->nm_subbid?></td> 
									<?}?>
                                    <td align="right"><?php echo  number_format($dataku->pagu,2,',','.');?></td> 
									<?$thpsubbid=mysql_fetch_object(mysql_query("select sum(jlh) as jlh from tb_rkun where kd_subbid='$dataku->kd_subbid' and tahap<='$_GET[tw]'"));?>
                                    <td><?php echo  number_format($thpsubbid->jlh,2,',','.');?></td> 
									<?
									$twz=$_GET['tw']-1;
									$tw0=mysql_fetch_object(mysql_query("select *,sum(jlh) as tot from tb_sp2d where tw<'$_GET[tw]' and kd_subbid='$dataku->kd_subbid' group by kd_subbid"));
									$tws=mysql_fetch_object(mysql_query("select *,sum(jlh) as tot from tb_sp2d where tw='$_GET[tw]' and kd_subbid='$dataku->kd_subbid' group by kd_subbid"));
									
										
									
										if($tw0!=""){ ?>
                                    <td align="right"><?php echo  number_format($tw0=$tw0->tot,2,',','.');?> </td> 
									<?}
										else{ 
											?> 
										<td align="right"><?php echo  number_format($tw0=0,2,',','.');?> </td>
										<?
											}
			 
									if($tws!=""){ 
									?>
									    <td align="right"><?php echo  number_format($tws=$tws->tot,2,',','.');?> </td> 
										
										<?
											} 
										else
										{ 
											 ?>
										<td align="right"><?php echo  number_format($tws=0,2,',','.');;?></td>
										
										<?
											}
										?> 
									 <td align="right"><?php echo number_format($twjum=$tw0+$tws,2,',','.');?> </td> 
                                   
                                    <td><?php 
										$twww=$thpsubbid->jlh;
										echo number_format($twww-$twjum,2,',','.');?> </td> 
                                    <td><?php 
									
 
										
$angka1=$twjum;
$angka2=$twww;
if ( $angka2!=0) {
 $persen=$angka1/$angka2*100;
} else {
 $persen=$angka1;
}
echo number_format($persen,2,',','.');

										
										?>
										
										
										</td> 
	   
									 </tr>

									
                                    <?php
                                    $no++;
									$jlh=mysql_fetch_object(mysql_query("select sum(pagu) as pagu from tb_pagu where kd_bidang='$dataku->kd_bidang'"));
                                    }
									$twk=$_GET['tw']-1;
									$twsb=mysql_fetch_object(mysql_query("select *,sum(jlh) as tot from tb_sp2d where tw='$twk' and kd_bidang='$_GET[kd_bidang]'"));
									
                                    ?>
									
																		<tr height=10><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>

									<tr>	<td></td>							
<td align=center>JUMLAH</td><td><?php echo number_format($jlh->pagu,2,',','.');?> </td><td><?php echo  number_format($thp->jlh,2,',','.');?></td><td><?php echo  number_format($twsb->tot,2,',','.');?></td><td><?php echo  number_format($twini->tot,2,',','.');?></td><td><?php echo  number_format($twtot->tot,2,',','.');?></td><td><?php echo  number_format($sisa,2,',','.');?></td><td><?php 
									
 
										
$angka1=$twtot->tot;
$angka2=$thp->jlh;
if ( $angka2!=0) {
 $persen=$angka1/$angka2*100;
} else {
 $persen=$angka1;
}
echo number_format($persen,2,',','.');

										
										?>
										
										
										
										</td></tr>                                    
									 
																		<tr height=10><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>

  
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                            </form>
                                    
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


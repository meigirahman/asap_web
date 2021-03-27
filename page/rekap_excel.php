<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=rekap.xls");
?>

<?php
$server = "localhost";
$username = "root";
$password = "";
$databaseName = "simdi";

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

<?php
function bulan($bulan)
{
Switch ($bulan){
    case 1 : $bulan="Januari";
        Break;
    case 2 : $bulan="Februari";
        Break;
    case 3 : $bulan="Maret";
        Break;
    case 4 : $bulan="April";
        Break;
    case 5 : $bulan="Mei";
        Break;
    case 6 : $bulan="Juni";
        Break;
    case 7 : $bulan="Juli";
        Break;
    case 8 : $bulan="Agustus";
        Break;
    case 9 : $bulan="September";
        Break;
    case 10 : $bulan="Oktober";
        Break;
    case 11 : $bulan="November";
        Break;
    case 12 : $bulan="Desember";
        Break;
    }
return $bulan;
}
?>
<script type="text/javascript" src="assets/js/jquery.js"></script>
</head>
 							

<body>

	                                    <table border=0 class="table table-striped table-bordered table-hover" id="dataTables-example">
    <tbody>
	<p><center><font style="font-size: 14pt; font-weight: bold;" >PEMERINTAH KABUPATEN MUSI BANYUASIN<p/>
	<tr><td ALIGN=CENTER COLSPAN=9><font style="font-size: 14pt; font-weight: bold;" >BADAN PENGELOLA KEUANGAN DAN ASET DAERAH		</td></tr>
	<tr><td ALIGN=CENTER  COLSPAN=9><font style="font-size: 14pt; font-weight: bold;">LAPORAN REALISASI BELANJA		 </td></tr>
	<tr><td  ALIGN=CENTER  COLSPAN=9><font style="font-size: 14pt; font-weight: bold;">PER <?php echo strtoupper(bulan($_GET['bln'])); ?> 2019		</font></td></tr>
 
	 
	<tr><td> </td></tr>
		<tr><td> </td></tr>


		
		<div id="page-wrapper">
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
         
 
						
 
							
									
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                             
  		<tr><td colspan=2>Urusan</td><td colspan=3>:  URUSAN PEMERINTAHAN FUNGSI PENUNJANG KEUANGAN</td></tr>
  		<tr><td colspan=2>Organisasi</td><td colspan=3>:  BADAN PENGELOLA KEUANGAN DAN ASET DAERAH</td></tr>
  		<tr><td colspan=2>Sub Unit Organisasi</td><td colspan=3>:  BADAN PENGELOLA KEUANGAN DAN ASET DAERAH</td></tr>
	    
 
	<tr><td> </td></tr>
		<tr><td> </td></tr>
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                     
                                  <thead>
									<tr valign=top  style="border: thin solid black" style="background: #276e95;color: #fff;"> 
 
									<th align="center"  >NO</th> 
									<th align="center" width=100 >KODE<br>REKENING</th>
									<th align="center" width=300>URAIAN</th> 
									<th align="center" width=>JUMLAH</th>
									<th align="center"width=150>SP2D</th>
									<th align="center" width=150>REALISASI</th>
									<th align="center" width=150>UYHD</th>
									<th align="center" width=150>SALDO ANGGARAN</th>
									<th align="center" width=50>%</th>
									</tr>
									
									<tr  style="background: #276e95;color: #fff; border: thin solid black"> 
									<th align="center">1
									<th align="center">2
									<th align="center">3
									<th align="center">4
									<th align="center">5
									<th align="center">6
									<th align="center">7
									<th align="center">8
									<th align="center">9

									 
									</tr>
									
									</thead>
									<?

									$sql0 = mysql_query("select kd_keg from tb_anggaran where bid='$_GET[bidang]' group by kd_keg");
						 
									$no=1;
									while($row0 = mysql_fetch_array($sql0))
									{
											$kd_keg = $row0['kd_keg'];
											
												 $myquery="select * from ref_keg where kd_keg='$kd_keg'";
												$daftar=mysql_query($myquery) or die (mysql_error());
												while($d=mysql_fetch_object($daftar))
												{
													?>
													<tr style="border: thin solid black" valign=top>
												   <td align="center"><?php echo $no;?></td>
													<td align="center"><?php echo $d->kd_keg?></td>
				 
													<td align=left ><?php echo $d->nm_keg?></td>
													<?php
													$keg=$d->kd_keg;
													$a="select sum(jlh) as jlh from tb_anggaran where kd_keg='$keg' ";
													 $b=mysql_query($a) or die (mysql_error());
													 $agr=mysql_fetch_object($b)
													?>
													<td align=right><?php echo number_format($agr->jlh,2,',','.');?></td>
													<?php
													$keg=$d->kd_keg;
													$a="select sum(jlh) as jlh from tb_data where kd_keg='$keg' and jns='sp2d' and periode<='$_GET[bln]'";
													 $b=mysql_query($a) or die (mysql_error());
													 $sp2d=mysql_fetch_object($b)
													?>
													<td align=right><?php echo number_format($sp2d->jlh,2,',','.');?></td>
													<?php
													$keg=$d->kd_keg;
													$a="select sum(jlh) as jlh from tb_data where kd_keg='$keg' and jns='belanja' and periode<='$_GET[bln]'";
													 $b=mysql_query($a) or die (mysql_error());
													 $blnj=mysql_fetch_object($b)
													?>
													<td align=right><?php echo number_format($blnj->jlh,2,',','.');?></td>
													<?php
													$keg=$d->kd_keg;
													$a="select sum(jlh) as jlh from tb_data where kd_keg='$keg' and jns='uyhd' and periode<='$_GET[bln]'";
													 $b=mysql_query($a) or die (mysql_error());
													 $c=mysql_fetch_object($b)
													?>
													<td align=right><?php echo number_format($c->jlh,2,',','.');?></td>
													<td align=right><?php echo number_format($agr->jlh-$sp2d->jlh,2,',','.');?></td>
 
													<td align=right><?php echo number_format($blnj->jlh/$agr->jlh*100,2,',','.');?></td>
													 
													</tr>
													
													<?php
                                   $anggaran=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_anggaran where bid='$_GET[bidang]'"));
								    $sp2d=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where jns='sp2d' and periode<='$_GET[bln]'"));
								    $belanja=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where jns='belanja' and periode<='$_GET[bln]'"));
								    $uyhd=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where jns='uyhd' and periode<='$_GET[bln]'"));
											}
 
 			
										$no++;
										
									}
									?>
												<tr style="border: thin solid black" valign=top >
																			   <td align="center"><?php echo $no;?></td>
																				<td align="center" colspan=2><?php echo 'JUMLAH ';?></td>
											 
																				<td ><?php echo number_format($anggaran['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($sp2d['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($belanja['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($uyhd['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($anggaran['jlh']-$sp2d['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($belanja['jlh']/$anggaran['jlh']*100,2,',','.');?></td>
										 
 
																			
																				 
																				</tr>

<tr><td> </td></tr>
		<tr><td> </td></tr>
			<tr><td> </td></tr>
	<tr><td colspan=3 align=center > </td><td align=center colspan=2> </td><td align=center  colspan=4>SEKAYU,      <?php echo strtoupper(bulan($_GET['bln'])); ?> 2019		
	</td></tr>
	<tr><td colspan=3 align=center >BENDAHARA PENGELUARAN </td><td align=center colspan=2>   </td><td align=center  colspan=4 >BENDAHARA  PENGELUARAN PEMBANTU	</td>		</tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
			
	
	<tr><td colspan=3 align=center >MAT RIFA'I, SE</td><td align=center colspan=2> </td><td align=center  colspan=4>AHMAD SYAWALLUDIN, SE.,M.Si			
	</td></tr>
	<tr><td colspan=3 align=center >NIP. 19800428 200701 1 004</td><td align=center colspan=2></td><td align=center  colspan=4>NIP. 19800908 201001 1 014			
		
	</td>		</tr>	
	<tr><td> </td></tr>
		<tr><td> </td></tr>
	<tr><td colspan=3 align=center > </td><td align=center colspan=2> MENGETAHUI, </td><td align=center  colspan=2>	</td>		</tr>
	<tr><td colspan=3 align=center > </td><td align=center colspan=2> KUASA PENGGUNA ANGGARAN  </td><td align=center  colspan=2>	</td>		</tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		
	<tr><td colspan=3 align=center ></td><td align=center colspan=2> GAJAH GIRINOTO, SE., M.Si.,Ak</td><td align=center  colspan=2>	</td></tr>
	<tr><td colspan=3 align=center ></td><td align=center colspan=2> NIP.  19730926 200212 1 003</td><td align=center  colspan=2></td>		</tr>	
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


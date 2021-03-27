<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=rekap_pajak.xls");
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
	<tr><td ALIGN=CENTER  COLSPAN=9><font style="font-size: 14pt; font-weight: bold;">REKAPITULASI SETORAN PAJAK	 </td></tr>
	<tr><td  ALIGN=CENTER  COLSPAN=9><font style="font-size: 14pt; font-weight: bold;">PER <?php echo strtoupper(bulan($_GET['bln'])); ?> 2019		</font></td></tr>
   <?
		   $kpa=mysql_fetch_object(mysql_query("select * from tb_user WHERE jabatan='Kuasa Pengguna Anggaran' and bid='$_GET[bidang]'"));
		   			 
		   	$bp=mysql_fetch_object(mysql_query("select * from tb_user WHERE jabatan='Bendahara Pengeluaran' and bid='$_GET[bidang]'"));
												$bpp=mysql_fetch_object(mysql_query("select * from tb_user WHERE jabatan='Bendahara Pengeluaran Pembantu' and bid='$_GET[bidang]'"));
										?>
	 
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
									<th align="center" rowspan=2  >No</th> 
									<th align="center" rowspan=2  >Kode Rekening</th>
									<th width=400 align="center" rowspan=2>Nama Kegiatan</th>
									<th align="center" colspan=5>Realisasi</th>
									<th align="center" rowspan=2 width=150>Jumlah</th>
									</tr>
									<tr  style="background: #276e95;color: #fff; border: thin solid black"> 
									<th align="center" width=120>PPH-21	
									<th align="center" width=120>PPH-22	
									<th align="center" width=120>PPH-23	
									<th align="center" width=120>PPN	
									<th align="center" width=120>PJK.DAERAH</th>
									 
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

									
						 
						 			$prg = mysql_query("SELECT * FROM tb_anggaran where bid='$_GET[bidang]' group by kd_prog");
														while($program = mysql_fetch_array($prg))
														{
															$kd_prog = $program['kd_prog'];
															$nm=mysql_fetch_object(mysql_query("select nm_prog from ref_prog where kd_prog='$kd_prog' "));
															
															echo '<tr  style="border: thin solid black"  valign=top style="background: #dcdcdc; " ><td></td><td align=center>4.04 . 4.04.01 . '.$program['kd_prog'].'</td><td>'.$nm->nm_prog.'</td><td colspan=6 align=right></td></tr><br>';
															
													
																			$q="SELECT * FROM tb_data WHERE kd_prog='$kd_prog' AND bid='$program[bid]' GROUP BY kd_keg ORDER BY kd_keg";
																			$qq=mysql_query($q) or die (mysql_error());
																			$no=1;
																			
																			while($qqq=mysql_fetch_array($qq))
																			{
																		
																				
																			 
																			$kd_keg = $qqq['kd_keg'];
																			
																			 $myquery="select * from ref_keg where kd_keg='$kd_keg' ";
																			$daftar=mysql_query($myquery) or die (mysql_error());
																			while($d=mysql_fetch_object($daftar))
																			{
																		
																				?>
																				<tr style="border: thin solid black" valign=top >
																			   <td align="center"><?php echo $no;?></td>
																				<td align="center"><?php echo '4.04 . 4.04.01 . '.$d->kd_keg?></td>
											 
																				<td ><?php echo $d->nm_keg?></td>
																				<?php
																				$keg=$d->kd_keg;
																				$a="select sum(jlh) as jlh from tb_data where dk='d' and kd_keg='$keg' and jns='pph21' and periode='$_GET[bln]'";
																				 $b=mysql_query($a) or die (mysql_error());
																				 $c1=mysql_fetch_object($b)
																				?>
																				<td><?php echo "Rp " . number_format($c1->jlh,2,',','.');?></td>
																				<?php
																				$keg=$d->kd_keg;
																				$a="select sum(jlh) as jlh from tb_data where dk='d' and kd_keg='$keg' and jns='pph22' and periode='$_GET[bln]'";
																				 $b=mysql_query($a) or die (mysql_error());
																				 $c2=mysql_fetch_object($b)
																				?>
																				<td><?php echo "Rp " . number_format($c2->jlh,2,',','.');?></td>
																				<?php
																				$keg=$d->kd_keg;
																				$a="select sum(jlh) as jlh from tb_data where dk='d' and kd_keg='$keg' and jns='pph23' and periode='$_GET[bln]' ";
																				 $b=mysql_query($a) or die (mysql_error());
																				 $c3=mysql_fetch_object($b)
																				?>
																				<td><?php echo "Rp " . number_format($c3->jlh,2,',','.');?></td>
																				<?php
																				$keg=$d->kd_keg;
																				$a="select sum(jlh) as jlh from tb_data where dk='d' and kd_keg='$keg' and jns='ppn' and periode='$_GET[bln]' ";
																				 $b=mysql_query($a) or die (mysql_error());
																				 $c4=mysql_fetch_object($b)
																				?>
																				<td><?php echo "Rp " . number_format($c4->jlh,2,',','.');?></td>
																				<?php
																				$keg=$d->kd_keg;
																				$a="select sum(jlh) as jlh from tb_data where dk='d' and kd_keg='$keg' and jns='pajak daerah' and periode='$_GET[bln]'";
																				 $b=mysql_query($a) or die (mysql_error());
																				 $c5=mysql_fetch_object($b)
																				?>
																				<td><?php echo "Rp " . number_format($c5->jlh,2,',','.');?></td>
																				<?php
																				$keg=$d->kd_keg;
																				$a="select sum(jlh) as jlh from tb_data where dk='d' and kd_keg='$keg' and (jns='pajak daerah' or jns='pph21' or jns='pph22' or jns='pph23' or jns='ppn') and periode='$_GET[bln]'";
																				 $b=mysql_query($a) or die (mysql_error());
																				 $c6=mysql_fetch_object($b)
																				?>
																				<td><?php echo "Rp " . number_format($c6->jlh,2,',','.');?></td>
																				 
																				</tr>
																				
																				<?php
																				
														 
																				$no++;
																			
																			}
																			
																			 $pph21=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and jns='pph21' and periode='$_GET[bln]' and bid='$_GET[bidang]'"));
																				 $pph22=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and jns='pph22' and periode='$_GET[bln]' and bid='$_GET[bidang]'"));
																				 $pph23=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and jns='pph23' and periode='$_GET[bln]' and bid='$_GET[bidang]'"));
																				 $ppn=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and jns='ppn' and periode='$_GET[bln]' and bid='$_GET[bidang]'"));
																				 $drh=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and jns='pajak daerah' and periode='$_GET[bln]' and bid='$_GET[bidang]'"));
																				 $tot=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and (jns='pajak daerah' or jns='pph21' or jns='pph22' or jns='pph23' or jns='ppn')  and periode='$_GET[bln]' and bid='$_GET[bidang]'"));
																	
																		 $pph21lalu=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and jns='pph21' and periode<'$_GET[bln]' and bid='$_GET[bidang]'"));
																				 $pph22lalu=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and jns='pph22' and periode<'$_GET[bln]' and bid='$_GET[bidang]'"));
																				 $pph23lalu=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and jns='pph23' and periode<'$_GET[bln]' and bid='$_GET[bidang]'"));
																				 $ppnlalu=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and jns='ppn' and periode<'$_GET[bln]' and bid='$_GET[bidang]'"));
																				 $totlalu=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and jns='pajak daerah' and periode<'$_GET[bln]' and bid='$_GET[bidang]'"));
																				 $drhlalu=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and (jns='pajak daerah' or jns='pph21' or jns='pph22' or jns='pph23' or jns='ppn')  and periode<'$_GET[bln]' and bid='$_GET[bidang]'"));
																				 
																				  $pph21sd=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and jns='pph21' and periode<='$_GET[bln]' and bid='$_GET[bidang]'"));
																				 $pph22sd=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and jns='pph22' and periode<='$_GET[bln]' and bid='$_GET[bidang]'"));
																				 $pph23sd=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and jns='pph23' and periode<='$_GET[bln]' and bid='$_GET[bidang]'"));
																				 $ppnsd=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and jns='ppn' and periode<='$_GET[bln]' and bid='$_GET[bidang]'"));
																				 $drhsd=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and jns='pajak daerah' and periode<='$_GET[bln]' and bid='$_GET[bidang]'"));
																				 $totsd=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_data where dk='d' and (jns='pajak daerah' or jns='pph21' or jns='pph22' or jns='pph23' or jns='ppn') and periode<='$_GET[bln]' and bid='$_GET[bidang]'"));
																	
																}

																?>
																			<tr style="background: #dcdcdc; "  style="border: thin solid black" valign=top >
																			   <td align="center"></td>
																				<td align="center" colspan=2><?php echo 'JUMLAH SETORAN BULAN INI';?></td>
											 
																				<td ><?php echo number_format($pph21['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($pph22['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($pph23['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($ppn['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($drh['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($tot['jlh'],2,',','.');?></td>
 
																			
																				 
																				</tr>
																				
																				<tr style="background: #dcdcdc; "  style="border: thin solid black" valign=top >
																			   <td align="center"></td>
																				<td align="center" colspan=2><?php echo 'JUMLAH SETORAN S/D BULAN LALU';?></td>
											 
																				<td ><?php echo number_format($pph21lalu['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($pph22lalu['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($pph23lalu['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($ppnlalu['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($drhlalu['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($totlalu['jlh'],2,',','.');?></td>
 
																			
																				 
																				</tr>
																				
																				<tr  style="background: #dcdcdc; "  style="border: thin solid black" valign=top >
																			   <td align="center"></td>
																				<td align="center" colspan=2><?php echo 'JUMLAH SETORAN S/D BULAN INI';?></td>
											 
																				<td ><?php echo number_format($pph21sd['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($pph22sd['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($pph23sd['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($ppnsd['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($drhsd['jlh'],2,',','.');?></td>
																				<td ><?php echo number_format($totsd['jlh'],2,',','.');?></td>
 
																			
																				 
																				</tr>
																			<?
														}
														
                                    ?>
<tr><td> </td></tr>
		<tr><td> </td></tr>
			<tr><td> </td></tr>
		<tr><td colspan=3 align=center > </td><td align=center  colspan=2> </td><td align=center  colspan=4>SEKAYU,      <?php echo strtoupper(bulan($_GET['bln'])); ?> 2019		
	</td></tr>
	<tr><td colspan=3 align=center  >BENDAHARA PENGELUARAN </td><td  colspan=2>   </td><td align=center  colspan=4>BENDAHARA  PENGELUARAN PEMBANTU	</td>		</tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
			
	
	<tr><td colspan=3 align=center ><? echo $bp->nama;?></td><td  colspan=2> </td><td align=center  colspan=4><? echo $bpp->nama;?>		
	</td></tr>
	<tr><td colspan=3 align=center >NIP. <? echo $bp->nip;?></td><td colspan=2 ></td><td align=center  colspan=4>NIP. <? echo $bpp->nip;?>			
		
	</td>		</tr>	
	<tr><td> </td></tr>
		<tr><td> </td></tr>
	<tr><td colspan=3 align=center > </td><td align=center  colspan=2> MENGETAHUI, </td><td align=center  colspan=4>	</td>		</tr>
	<tr><td colspan=3 align=center > </td><td align=center  colspan=2> KUASA PENGGUNA ANGGARAN  </td><td align=center  colspan=4>	</td>		</tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		
	<tr><td colspan=3 align=center ></td><td align=center colspan=2> <? echo $kpa->nama;?></td><td align=center  colspan=4>	</td></tr>
	<tr><td colspan=3 align=center ></td><td align=center  colspan=2> NIP.  <? echo $kpa->nip;?></td><td align=center  colspan=4></td>		</tr>	
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


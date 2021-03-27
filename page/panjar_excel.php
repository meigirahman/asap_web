<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=panjar.xls");
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
 <table>
	 <p align="center"><font style="font-size: 14pt; font-weight: bold" >PEMERINTAH KABUPATEN  MUSI BANYUASIN	</font></p> 
	<tr><td ALIGN=CENTER  COLSPAN=8><font style="font-size: 14pt; font-weight: bold" >BUKU PANJAR</td></tr>
	<tr><td  ALIGN=CENTER  COLSPAN=8><font style="font-size: 14pt; font-weight: bold" >BULAN :  <?php echo strtoupper(bulan($_GET['bln'])); ?> 2019</td></tr>
	<tr><td > </td></tr>
	<tr><td> </td></tr>
	 <?
		   $kpa=mysql_fetch_object(mysql_query("select nama from tb_user WHERE jabatan='Kuasa Pengguna Anggaran' and bid='$_GET[bidang]'"));
		    
		   	$bp=mysql_fetch_object(mysql_query("select nama from tb_user WHERE jabatan='Bendahara Pengeluaran' and bid='$_GET[bidang]'"));
												$bpp=mysql_fetch_object(mysql_query("select nama from tb_user WHERE jabatan='Bendahara Pengeluaran Pembantu' and bid='$_GET[bidang]'"));
										?>
										
	<tr><td colspan=3>SKPD</td><td colspan=4>:  BADAN PENGELOLA KEUANGAN DAN ASET DAERAH</td></tr>
	<tr><td colspan=3>Bidang</td><td>:   <?php echo strtoupper($_GET['bidang']); ?></td></tr>
<tr><td colspan=3>Kuasa Pengguna Anggaran</td><td>:  <? echo $kpa->nama;?>  </td></tr>
 
<tr><td colspan=3>Bendahara Pengeluaran</td><td>:  <? echo $bp->nama;?></td></tr>
<tr><td colspan=3>Bendahara Pengeluaran Pembantu</td><td colspan=4>:  <? echo $bpp->nama;?></td></tr>
	<tr><td> </td></tr>
		<tr><td> </td></tr>

 
		<div id="page-wrapper">
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
 
 	
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                               
                                  <thead>
								<tr valign=top  style="border: thin solid black" style="background: #276e95;color: #fff;"> 
									<th align="center">No</th>
									<th align="center" width=100>Tanggal</th>  
									<th align="center" colspan=2 width="500">Uraian</th>
									<th align="center" width=50>Ref</th>
									<th align="center" width=150>Penerimaan <br>(Rp.)</th>
									<th align="center" width=150>Pengeluaran <br>(Rp.)</th>
									<th align="center" width=150>Saldo <br>(Rp.)</th>
									</tr>
										<tr  style="background: #276e95;color: #fff; border: thin solid black"> 
									<th align="center">1
									<th align="center">2
									<th align="center" colspan=2>3
									<th align="center">4
									<th align="center">5
									<th align="center">6
									<th align="center">7 

									 
									</tr>
									
									</thead>
                                    <?
                                    $myquery0="select *, DATE_FORMAT(tgl, '%d-%m-%Y') as tgl from tb_data where jns='sp2d' and periode='$_GET[bln]' ";
                        
                                    $no=1;
                                    $daftar0=mysql_query($myquery0) or die (mysql_error());
                                    while($dataku0=mysql_fetch_array($daftar0))
                                    {
								
									$id_data=$dataku0['id_data'];
								
									$myquery="select *, DATE_FORMAT(tgl, '%d-%m-%Y') as tgl from tb_data where  id_data='$id_data' ";
                                    
                                    
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
											$kd_keg=$dataku->kd_keg;
											$kd_rinci=$dataku->kd_rinci;
											$dana=$dataku->dana;
											$tgl=$dataku->tgl;
								
													?>
													<tr style="border: thin solid black" valign=top>
												   <td align="center"><?php echo $no;?></td>
													<td align="center"><?php echo $dataku->tgl;?></td>
												
											 
					   
													<?php
													$kd=$dataku->jns."".$dataku->dk;
													$q="select narasi from tb_narasi where kd_narasi='$kd'";
													 $x=mysql_query($q) or die (mysql_error());
													 $z=mysql_fetch_object($x)
													?>
													<?php
													$keg=$dataku->kd_keg;
													$rek=$dataku->kd_rinci;
													$a="select nm_rinci from ref_rinci where kd_rinci='$rek' ";
													 $b=mysql_query($a) or die (mysql_error());
													 $c=mysql_fetch_object($b)
													?>
													
													<td  colspan=2><?php echo $z->narasi." ".$dataku->kpd." ".$c->nm_rinci." ".$dataku->uraian." Kode Kegiatan 4.04 . 4.04.01.".$keg?></td> 
	<td align="center"><?php echo $dataku->id_data;?></td>
													 <?php
													 
													 
													  $blnj=mysql_fetch_object(mysql_query("select *,sum(jlh) as jlh, DATE_FORMAT(tgl, '%d-%m-%Y') as tgl from tb_data where kd_keg='$kd_keg' and kd_rinci='$kd_rinci' and dana='ls' and periode='$_GET[bln]' and jns='belanja' ") );
													  $uyhd=mysql_fetch_object(mysql_query("select *,sum(jlh) as jlh, DATE_FORMAT(tgl, '%d-%m-%Y') as tgl from tb_data where kd_keg='$kd_keg' and kd_rinci='$kd_rinci' and periode='$_GET[bln]' and jns='uyhd'") );
													 
												 if($blnj->jlh!=0 or $uyhd->jlh!=0)
												 {
														 ?>
														 <td align="center"><?php echo number_format($dataku->jlh,2,',','.');?></td> 
														 <td align="center"><?php echo  number_format($blnj->jlh+$uyhd->jlh,2,',','.');?></td> 
														 <td align="center"><?php echo  number_format($blnj->jlh+$uyhd->jlh,2,',','.');?></td> 
														 
												 <?}else
												 {?>
													 <td align="center"><?php echo number_format($dataku->jlh,2,',','.');?> </td> 
														 <td align="center"><?php echo  number_format('0',2,',','.');?></td> 
														 <td align="center"><?php echo  number_format($dataku->jlh,2,',','.');?></td> 
									<?}
												 ?>
				 
													</tr>
												
                                 
													
													<?php
													$no++;
													}
									}
                                    ?>
                                 
 
	<tr><td> </td></tr>
		<tr><td> </td></tr>
			<tr><td> </td></tr>
	<tr><td colspan=3 align=center > </td><td align=center colspan=2> </td><td align=center  colspan=3>SEKAYU, <?php echo strtoupper(bulan($_GET['bln'])); ?> 2019		
	</td></tr>
	<tr><td colspan=3 align=center >BENDAHARA PENGELUARAN </td><td align=center colspan=2>   </td><td align=center  colspan=3>BENDAHARA  PENGELUARAN PEMBANTU	</td>		</tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
			
	
	<tr><td colspan=3 align=center >MAT RIFA'I, SE</td><td align=center colspan=2> </td><td align=center  colspan=3>AHMAD SYAWALLUDIN, SE.,M.Si			
	</td></tr>
	<tr><td colspan=3 align=center >NIP. 19800428 200701 1 004</td><td align=center colspan=2></td><td align=center  colspan=3>NIP. 19800908 201001 1 014			
		
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


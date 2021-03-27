<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=objek.xls");
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
	                                    <table border=0 class="table table-striped table-bordered table-hover" id="dataTables-example">
    <tbody>
	 <p align="center"><font style="font-size: 14pt; font-weight: bold" >PEMERINTAH KABUPATEN  MUSI BANYUASIN	</font></p> 
	<tr><td ALIGN=CENTER  COLSPAN=5><font style="font-size: 14pt; font-weight: bold;">BUKU REKAPITULASI PENGELUARAN</td></tr>
	<tr><td ALIGN=CENTER  COLSPAN=5><font style="font-size: 14pt; font-weight: bold;">PER-RINCIAN OBJEK BELANJA</td></tr> 
	<tr><td > </td></tr>
	<tr><td> </td></tr>
	<tr><td colspan=2>SKPD</td><td colspan=3>:  BADAN PENGELOLA KEUANGAN DAN ASET DAERAH</td></tr>
	   <?
		   $kpa=mysql_fetch_object(mysql_query("select nama from tb_user WHERE jabatan='Kuasa Pengguna Anggaran' and bid='$_GET[bidang]'"));
		   				$keg=mysql_fetch_object(mysql_query("select nm_keg from ref_keg WHERE kd_keg='$_GET[kd_keg]'"));
		   				$rinci=mysql_fetch_object(mysql_query("select nm_rinci from ref_rinci WHERE kd_rinci='$_GET[kd_rinci]'"));
		   	$bp=mysql_fetch_object(mysql_query("select nama from tb_user WHERE jabatan='Bendahara Pengeluaran' and bid='$_GET[bidang]'"));
												$bpp=mysql_fetch_object(mysql_query("select nama from tb_user WHERE jabatan='Bendahara Pengeluaran Pembantu' and bid='$_GET[bidang]'"));
												$pagu=mysql_fetch_object(mysql_query("select jlh from tb_anggaran WHERE kd_keg='$_GET[kd_keg]' and kd_rinci='$_GET[kd_rinci]'"));
										?>
					 
									<tr><td colspan=2>Kode Kegiatan</td><td colspan=3>:  4.04 . 4.04.01.<?php echo $_GET['kd_keg']; ?></td></tr>			
									<tr><td colspan=2>Nama Kegiatan</td><td colspan=3>: <? echo $keg->nm_keg;?></td></tr>		
									<tr><td colspan=2>Kode Rekening</td><td colspan=3>: <?php echo $_GET['kd_rinci']; ?></td></tr>			
									<tr><td colspan=2>Nama Rekening</td><td colspan=3>: <? echo $rinci->nm_rinci;?></td></tr>		
									<tr><td colspan=2>Pagu Anggaran</td><td colspan=3>: <?php echo "Rp " . number_format($pagu->jlh,2,',','.');?></td></tr>		
									<tr><td colspan=2>Bulan</td><td colspan=3>: <?php echo strtoupper(bulan($_GET['bln'])); ?> 2019</td></tr>		
									<tr><td colspan=2>Tahun Anggaran</td><td colspan=3>: 2019</td></tr>		
 
	<tr><td> </td></tr>
		<tr><td> </td></tr>

    </tbody>
		<div id="page-wrapper">
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
 
 	
                        <!-- /.panel-heading -->
                                     <thead>
									<tr style="background: #C0C0C0; " > 
									<th align="center" rowspan=2 width=50 style="border: thin solid black">No Urut</th>
									<th align="center" rowspan=2 width=300 style="border: thin solid black">Nomor dan Tanggal BKU</th>
									<th align="center" colspan=3 style="border: thin solid black">Pengeluaran</th>
									</tr>
									<tr style="background: #C0C0C0; ">
									<th align="center" width=200 style="border: thin solid black">LS</th>
									<th align="center" width=200 style="border: thin solid black">UP/GU/TU</th>
									<th align="center"width=200 style="border: thin solid black" >Jumlah</th>
									</tr>
									</thead>
 
                                <?
								
                                    $myquery="select *, DATE_FORMAT(tgl, '%d-%m-%Y') as tgl from tb_data where jns='belanja' and periode='$_GET[bln]' and kd_keg='$_GET[kd_keg]' and kd_rinci='$_GET[kd_rinci]'";
                                    $no=1;
                                    
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
                                    ?>
                                     <tr valign=top  >
                                   <td align="center"  style="border: thin solid black"><?php echo $no;?></td>
  									
	   
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
									
                                    <td  style="border: thin solid black"><?php echo "Nomor BKU ".$dataku->id_data." Tanggal ".$dataku->tgl." ".$dataku->uraian." Kode Kegiatan 4.04 . 4.04.01.".$keg?></td> 

									 <?php
									 if($dataku->dana=='ls')
									 {
										 ?>
										 <td style="border: thin solid black" align="right"><?php echo "Rp " . number_format($dataku->jlh,2,',','.');?></td> 
										 
										 <td style="border: thin solid black" align="center"> </td> 
										 <td style="border: thin solid black"  align="right"><?php echo "Rp " . number_format($dataku->jlh,2,',','.');?></td> 
										 <?
											 }
										 elseif($dataku->dana=='up' or $dataku->dana=='gu' or $dataku->dana=='tu')
										 {
									 ?>
											 <td style="border: thin solid black" align="center"> </td> 
											 <td style="border: thin solid black" align="right"><?php echo "Rp " . number_format($dataku->jlh,2,',','.');?></td> 
											 <td style="border: thin solid black" align="right"><?php echo "Rp " . number_format($dataku->jlh,2,',','.');?></td> 
											  <td></td>
											<? }
											 ?>
                                  

                                    </tr>

									
                                    <?php
                                    $no++;
                                    }
                                    ?>
									    <tr><td style="border: thin solid black" colspan="5"></td></tr>                                
									<tr style="background: #C0C0C0; ">
									 <?
									 
                                    $jlh="select A.d,B.k from (select sum(jlh) as d from tb_data where  jns='belanja' and periode='$_GET[bln]' and kd_keg='$_GET[kd_keg]' and kd_rinci='$_GET[kd_rinci]' and dana='ls') A, (select sum(jlh) as k from tb_data where  jns='belanja' and periode='$_GET[bln]' and kd_keg='$_GET[kd_keg]' and kd_rinci='$_GET[kd_rinci]' and dana!='ls') B";
                                    $dk=mysql_query($jlh) or die (mysql_error());
                                    while($data=mysql_fetch_object($dk))
                                    { ?>
										<td style="border: thin solid black" align="center" colspan=2>JUMLAH BULAN INI</td>
										<td style="border: thin solid black" align="center"><?php echo "Rp " . number_format($data->d,2,',','.');?>
										<td style="border: thin solid black" align="center" ><?php echo "Rp " . number_format($data->k,2,',','.');?></td>
										<td style="border: thin solid black" align="center" ><?php echo "Rp " . number_format($data->d+$data->k,2,',','.');?></td>
									<?php 
									} ?>
								   </tr>
  									
                                   
                                  									                                    
									<tr style="background: #C0C0C0; ">
									 <?
									 
                                    $jlh="select A.d,B.k from (select sum(jlh) as d from tb_data where  jns='belanja' and periode<'$_GET[bln]' and kd_keg='$_GET[kd_keg]' and kd_rinci='$_GET[kd_rinci]' and dana='ls') A, (select sum(jlh) as k from tb_data where  jns='belanja' and periode<'$_GET[bln]' and kd_keg='$_GET[kd_keg]' and kd_rinci='$_GET[kd_rinci]' and dana!='ls') B";
                                    $dk=mysql_query($jlh) or die (mysql_error());
                                    while($data=mysql_fetch_object($dk))
                                    { ?>
										<td style="border: thin solid black" align="center" colspan=2>JUMLAH SAMPAI DENGAN BULAN LALU</td>
										<td style="border: thin solid black" align="center"><?php echo "Rp " . number_format($data->d,2,',','.');?>
										<td style="border: thin solid black" align="center" ><?php echo "Rp " . number_format($data->k,2,',','.');?></td>
										<td style="border: thin solid black" align="center" ><?php echo "Rp " . number_format($data->d+$data->k,2,',','.');?></td>
									<?php 
									} ?>
								   </tr>
  									
								   
								   																		<tr style="background: #C0C0C0; ">
									 <?
									 
                                    $jlh="select A.d,B.k from (select sum(jlh) as d from tb_data where  jns='belanja' and periode<='$_GET[bln]' and kd_keg='$_GET[kd_keg]' and kd_rinci='$_GET[kd_rinci]' and dana='ls') A, (select sum(jlh) as k from tb_data where  jns='belanja' and periode<='$_GET[bln]' and kd_keg='$_GET[kd_keg]' and kd_rinci='$_GET[kd_rinci]' and dana!='ls') B";
                                    $dk=mysql_query($jlh) or die (mysql_error());
                                    while($data=mysql_fetch_object($dk))
                                    { ?>
										<td style="border: thin solid black" align="center" colspan=2>JUMLAH SAMPAI DENGAN BULAN INI</td>
										<td style="border: thin solid black" align="center"><?php echo "Rp " . number_format($data->d,2,',','.');?>
										<td style="border: thin solid black" align="center" ><?php echo "Rp " . number_format($data->k,2,',','.');?></td>
										<td style="border: thin solid black" align="center" ><?php echo "Rp " . number_format($data->d+$data->k,2,',','.');?></td>
									<?php 
									} ?>
								   </tr>
  									
  									
  
 
 
	<tr><td> </td></tr>
		<tr><td> </td></tr>
			<tr><td> </td></tr>
	<tr><td colspan=2 align=center > </td><td align=center> </td><td align=center  colspan=2>SEKAYU,       <?php echo strtoupper(bulan($_GET['bln'])); ?> 2019		
	</td></tr>
	<tr><td colspan=2 align=center >BENDAHARA PENGELUARAN </td><td align=center >   </td><td align=center  colspan=2 >BENDAHARA  PENGELUARAN PEMBANTU	</td>		</tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
			
	
	<tr><td colspan=2 align=center >MAT RIFA'I, SE</td><td align=center > </td><td align=center  colspan=2>AHMAD SYAWALLUDIN, SE.,M.Si			
	</td></tr>
	<tr><td colspan=2 align=center >NIP. 19800428 200701 1 004</td><td align=center ></td><td align=center  colspan=2>NIP. 19800908 201001 1 014			
		
	</td>		</tr>	
	<tr><td> </td></tr>
		<tr><td> </td></tr>
	<tr><td colspan=2 align=center > </td><td align=center > MENGETAHUI, </td><td align=center  colspan=2>	</td>		</tr>
	<tr><td colspan=2 align=center > </td><td align=center > KUASA PENGGUNA ANGGARAN  </td><td align=center  colspan=2>	</td>		</tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		
	<tr><td colspan=2 align=center ></td><td align=center > GAJAH GIRINOTO, SE., M.Si.,Ak</td><td align=center  colspan=2>	</td></tr>
	<tr><td colspan=2 align=center ></td><td align=center > NIP.  19730926 200212 1 003</td><td align=center  colspan=2></td>		</tr>	
	    </tbody></table>               
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


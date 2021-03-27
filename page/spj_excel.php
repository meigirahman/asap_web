<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=rka.xls");
?>

<?php 
$server = "localhost";
$username = "root";
$password = "";
$databaseName = "rka";

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




		
		<div id="page-wrapper">
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
         
 
						
 
							
									
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
       <table border=0 class="table table-striped table-bordered table-hover" id="dataTables-example">
    <tbody>
	<p><font style="font-size: 14pt; font-weight: bold;" ><center>RENCANA KERJA DAN ANGGARAN</p>
	<p><font style="font-size: 14pt; font-weight: bold;" ><center>SATUAN KERJA PERANGKAT DAERAH</p>
	 
	<p><font style="font-size: 14pt; font-weight: bold;" ><center>PEMERINTAH KABUPATEN MUSI BANYUASIN</p>
	<p><font style="font-size: 14pt; font-weight: bold;" ><center>TAHUN ANGGARAN : 2019</p>
 
	<tr><td > </td></tr>
	<tr><td> </td></tr>
	 
	 <?
		$prog=mysql_fetch_object(mysql_query("select nm_prog from ref_prog WHERE kd_prog='01'"));
		$keg=mysql_fetch_object(mysql_query("select nm_keg from ref_keg WHERE kd_keg='$_GET[kd_keg]'"));
		$detil=mysql_fetch_object(mysql_query("select * from detil_keg WHERE kd_keg='$_GET[kd_keg]'"));
		
		?>   
	<tr><td >Urusan Pemerintahan</td><td >: 4.03</td><td colspan=4>Urusan Pemerintahan Fungsi Penunjang Perencanaan</td></tr>
	<tr><td >Organisasi</td><td>: 4.03 . 4.03.01</td><td colspan=4>Badan Perencanaan Pembangunan Daerah</tr>
	<tr><td >Program</td><td>: 4.03 . 4.03.01 . 01</td><td colspan=4><? echo $prog->nm_prog;?></tr>
	 	
			
	<tr><td >Kegiatan</td><td>: 4.03 . 4.03.01 . <? echo $_GET['kd_keg'] ?></td><td colspan=4><? echo $keg->nm_keg;?></tr>
	<tr ><td >Lokasi Kegiatan</td><td>: Badan Perencanaan Pembangunan Daerah Kab. Muba</td><td colspan=4></tr>
	<tr><td> </td></tr>
	<tr><td>Jumlah Tahun n - 1</td><td>: Rp. <? echo number_format($detil->nmin,2,',','.');?></td></tr>
	<tr><td>Jumlah Tahun n </td><td>: Rp. <? echo number_format($detil->nmin,2,',','.');?></td></tr>
	<tr><td>Jumlah Tahun n + 1</td><td>: Rp. <? echo number_format($detil->nplus,2,',','.');?></td></tr>
	 
	 <tr><td> </td></tr>
	<tr  style="border: thin solid black" style="background: #276e95;color: #fff;"><td colspan=6><center>INDIKATOR & TOLAK UKUR KINERJA  BELANJA LANGSUNG</td></tr>
	<tr style="border: thin solid black; text-align:center; background: #276e95;color: #fff;"><td><center>INDIKATOR</td><td colspan=2><center>TOLAK UKUR KINERJA</td><td colspan=3><center>TARGET KINERJA</td></tr>
	<tr><td>MASUKAN</td><td colspan=2>: <? echo $detil->masukan_tolak ;?></td><td colspan=3>Rp. <? echo number_format($detil->masukan_target,2,',','.');?></tr>
	<tr><td>KELUARAN</td><td colspan=2>: <? echo $detil->keluaran_tolak ;?></td><td colspan=3><? echo $detil->keluaran_target;?></tr>
	<tr><td>HASIL</td><td colspan=2>: <? echo $detil->hasil_tolak ;?></td><td colspan=3><? echo $detil->hasil_target;?></tr>
	<tr><td>MANFAAT</td><td colspan=2>: <? echo $detil->manfaat_tolak ;?></td><td colspan=3><? echo $detil->manfaat_target;?></tr>
	<tr><td>DAMPAK</td><td colspan=2>: <? echo $detil->dampak_tolak ;?></td><td colspan=3><? echo $detil->dampak_target;?></tr> 
 	<tr ><td >Kelompok Sasaran Kegiatan</td><td>: Badan Perencanaan Pembangunan Daerah Kab. Muba</td><td colspan=4></tr>
	
	 						
	
 
	  </td></tr>
		<tr><td> </td></tr>
		
		<div id="page-wrapper">
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
         
 
						
 
							
									
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
 
					  
								<form name="FLaporan" method="GET" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
 
                                    <thead>
									<tr  style="border: thin solid black" style="background: #276e95;color: #fff;">
									<th align="center" colspan=6 >RINCIAN ANGGARAN BELANJA LANGSUNG MENURUT PROGRAM DAN PER KEGIATAN SATUAN KERJA PERANGKAT DAERAH</th> 
									<tr  style="border: thin solid black" style="background: #276e95;color: #fff;"> 
									<th align="center" rowspan=2 width=180 >Kode Rekening</th> 
								<th align="center" rowspan=2 width=500 >Uraian</th>  
								<th align="center" colspan=3 width=180 >Rincian  Perhitungan</th>  
								<th align="center" rowspan=2 width=180 >JUMLAH </th>  
 
									</tr>

									<tr  style="border: thin solid black" style="background: #276e95;color: #fff;"> 
									<th align="center" width=180  >Volume</th> 
								<th align="center" width=180  >Satuan</th> 
								<th align="center" width=180 >Harga Satuan</th>  
									</tr>
									</thead>
								<tbody>
							 <tr style="background: #48adfb"> 
							 <? 
							 $satu = mysql_fetch_array(mysql_query("select sum(harga_satuan*volume) as jlh from sub_rinci_belanja WHERE kd_keg='$_GET[kd_keg]' and bid='$_GET[bidang]' group by rek1"));
							 $dua = mysql_fetch_array(mysql_query("select sum(harga_satuan*volume) as jlh from sub_rinci_belanja WHERE kd_keg='$_GET[kd_keg]' and bid='$_GET[bidang]' group by rek2"));
	?>
							 <td>5</td>
							 <td>BELANJA</td>
							 <td> </td> <td> </td> <td> </td> <? echo '<td style=\'text-align:right\'>'.number_format($satu['jlh'],2,',','.').'</td>';?> 
							 
							 	 <tr style="background: #6abbf9" > 
							 <td>5.2</td>
							 	
							
							 <td>BELANJA LANGSUNG</td>
							 <td> </td> <td> </td> <td> </td> <? echo '<td style=\'text-align:right\'>'.number_format($dua['jlh'],2,',','.').'</td>';?> 
							 
								<?php
								// $bdg = mysql_query("select * from tb_anggaran where kd_keg='$_GET[kd_keg]' and bid='$_GET[bidang]'");

									// while($bidang = mysql_fetch_array($bdg))
									// {
										// $kd_jenis = $bidang['kd_jenis'];
										// $kd_objek = $bidang['kd_objek'];
										// $kd_rinci = $bidang['kd_rinci'];
 
			
		 
			
$obj = mysql_query("SELECT * FROM belanja_rek3 where bid='$_GET[bidang]' group by  kd_rek  ");
while($objek = mysql_fetch_array($obj))
{
	$nm = mysql_fetch_array(mysql_query("select nm3 from rek3 where kd_rek='$objek[kd_rek]'"));		
	$tiga = mysql_fetch_array(mysql_query("select sum(harga_satuan*volume) as jlh from sub_rinci_belanja where rek3='$objek[kd_rek]' and kd_keg='$_GET[kd_keg]' and bid='$_GET[bidang]' group by rek3"));
			
	echo '<tr   style="background: #94cefb; " >
	<td>'.$objek['kd_rek'].'</td> 
	<td>'.$nm['nm3'].'</td>  
	<td> </td> <td> </td> <td> </td> <td style=\'text-align:right\'>'.number_format($tiga['jlh'],2,',','.').'</td> 
	</tr>';

	$obj2 = mysql_query("SELECT * FROM belanja_rek4  where rek3='$objek[kd_rek]' group by kd_rek");
	while($objek2 = mysql_fetch_array($obj2))
	{
		$nm = mysql_fetch_array(mysql_query("select nm4 from rek4 where  kd_rek='$objek2[kd_rek]'"));
		$empat = mysql_fetch_array(mysql_query("select sum(harga_satuan*volume) as jlh from sub_rinci_belanja where rek4='$objek2[kd_rek]' and kd_keg='$_GET[kd_keg]' and bid='$_GET[bidang]' group by rek4"));
											
		echo '<tr style="background: #a4d5fb" >
		<td>'.$objek2['kd_rek'].'</td> 
		<td>'.$nm['nm4'].'</td>  
		<td> </td> <td> </td> <td> </td> <td style=\'text-align:right\'>'.number_format($empat['jlh'],2,',','.').'</td> 
		</tr>';
	
		$obj3 = mysql_query("SELECT * FROM belanja where rek4='$objek2[kd_rek]' and bid='$_GET[bidang]' and kd_keg='$_GET[kd_keg]' ");
		while($objek3 = mysql_fetch_array($obj3))
		{
			$rinci = mysql_fetch_array(mysql_query("select sum(harga_satuan*volume) as jlh from sub_rinci_belanja where kd_rek='$objek3[kd_rek]' and kd_keg='$_GET[kd_keg]' and bid='$_GET[bidang]' group by kd_rek"));
			echo '<tr style="background: #d0f0f8"  >
			<td>'.$objek3['kd_rek'].'</td> 
			<td>'.$objek3['uraian'].'</td> 
			<td> </td> <td> </td> <td> </td> 
			<td style=\'text-align:right\'>'.number_format($rinci['jlh'],2,',','.').'</td> 
			</tr>';
	 
			$obj4 = mysql_query("SELECT * FROM rinci_belanja where kd_blnj='$objek3[kd_blnj]'  ");
			while($objek4 = mysql_fetch_array($obj4))
			{
				$subrinci = mysql_fetch_array(mysql_query("select sum(harga_satuan*volume) as jlh from sub_rinci_belanja where kd_rinci='$objek4[kd_rinci]' and kd_keg='$_GET[kd_keg]' group by kd_rinci"));
				echo '<tr style="background: #e5f6fa" >
				<td> </td> 
				<td>- '.$objek4['uraian'].'</td> 
				<td> </td> <td> </td> <td> </td> 	<td style=\'text-align:right\'>'.number_format($subrinci['jlh'],2,',','.').'</td> 
				</tr>';
		 
				$obj5 = mysql_query("SELECT * FROM sub_rinci_belanja where kd_rinci='$objek4[kd_rinci]' and kd_keg='$_GET[kd_keg]' ");
				while($objek5 = mysql_fetch_array($obj5))
				{
				echo '<tr style="background: #e5f6fa" >
				<td> </td> 
				<td>--- '.$objek5['uraian'].'</td> 
				<td><center>'.$objek5['volume'].'</td> 
				<td><center>'.$objek5['satuan'].'</td>';  
echo "<td style='text-align:right'>".number_format($objek5['harga_satuan'],2,',','.')."</td>";
				echo "<td style='text-align:right'>".number_format($jlh=$objek5['volume']*$objek5['harga_satuan'],2,',','.')."</td> 
				</tr>";
 
							}
						}
					}
				 
				}
			}				
?>

                                	<tr><td> </td></tr>
		<tr><td> </td></tr>
			<tr><td> </td></tr>
	<tr><td colspan=2 align=center > </td><td align=center  > </td><td align=center  colspan=3>SEKAYU,        2019		
	</td></tr>
	<tr><td colspan=2>Keterangan</td><td  >   </td><td align=center  colspan=3 >KEPALA BAPPEDA KAB. MUBA	</td>		</tr>
		<tr><td colspan=2>- Tanggal Pembahasan </td></tr>
		<tr><td colspan=2>- Catatan Hasil Pembahasan</td></tr>
		<tr><td> </td></tr>
	<tr><td colspan=2 align=center > </td><td  > </td><td align=center  colspan=3>Ir. ZULFAKAR, M.Si.</td></tr>
	<tr><td colspan=2 align=center > </td><td  ></td><td align=center  colspan=3>NIP. 19640311 199103 1 012</td></tr>	
	<tr><td> </td></tr>
	<tr  style="border: thin solid black" style="background: #276e95;color: #fff;"><td colspan=6><center>TIM ANGGARAN PEMERINTAH DAERAH</td></tr>
	<tr style="border: thin solid black; text-align:center; background: #276e95;color: #fff;"><td align=center>No</td><td>Nama</td><td>NIP</td><td colspan=2>Jabatan</td><td>Tanda Tangan</td>	</tr>
	<tr style="border: thin solid black; height:100px; vertical-align:top"><td >1</td><td >Ir. ZULFAKAR, M.Si</td><td >19640311 199103 1 012</td><td colspan=2 >Kepala Bappeda</td><td ></td>	</tr>
	<tr style="border: thin solid black; height:100px; vertical-align:top"><td>2</td><td>MIRWAN SUSANTO, SE.,MM</td><td>19751029 200003 1 002</td><td colspan=2>Kepala BPKAD</td><td></td>	</tr>
	    	<tr><td> </td><td> </td><td> </td><td> </td><td> </td></tr>
			</tbody></table> 
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


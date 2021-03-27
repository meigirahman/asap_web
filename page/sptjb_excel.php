<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=sptjb.xls");
?>

<?php
error_reporting(0);
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




		
		<div id="page-wrapper">
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
         
                  
						
									
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
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

 
 
  <p align="center"><font style="font-size: 14pt; font-weight: bold" >
SURAT PERNYATAAN TANGGUNG JAWAB BELANJA	
 	</font>		
</p>
  <table  >
 
 
	<tr><td  ALIGN=CENTER  COLSPAN=7><font style="font-size: 14pt; font-weight: bold;">BULAN <?php echo strtoupper(bulan($_GET['bln'])); ?> 2019		</font></td></tr>
	<tr><td > </td></tr>
	<tr><td> </td></tr>
		<tr><td colspan=2>SKPD</td><td colspan=3>:  BADAN PENGELOLA KEUANGAN DAN ASET DAERAH</td></tr>
	   <?
		   $kpa=mysql_fetch_object(mysql_query("select nama from tb_user WHERE jabatan='Kuasa Pengguna Anggaran' and bid='$_GET[bidang]'"));
		   				$keg=mysql_fetch_object(mysql_query("select nm_keg from ref_keg WHERE kd_keg='$_GET[kd_keg]'"));
		   				$rinci=mysql_fetch_object(mysql_query("select nm_rinci from ref_rinci WHERE kd_rinci='$_GET[kd_rinci]'"));
		   	$bp=mysql_fetch_object(mysql_query("select nama from tb_user WHERE jabatan='Bendahara Pengeluaran' and bid='$_GET[bidang]'"));
												$bpp=mysql_fetch_object(mysql_query("select nama from tb_user WHERE jabatan='Bendahara Pengeluaran Pembantu' and bid='$_GET[bidang]'"));
												$pagu=mysql_fetch_object(mysql_query("select anggaran from tb_anggaran WHERE kd_keg='$_GET[kd_keg]' and kd_rinci='$_GET[kd_rinci]'"));
										?>
									<tr><td colspan=2>Bidang</td><td colspan=3>: <? echo strtoupper($_GET['bidang']);?></td></tr>
									<tr><td colspan=2>Kode Kegiatan</td><td colspan=3>:  4.04 . 4.04.01.<?php echo $_GET['kd_keg']; ?></td></tr>			
									<tr><td colspan=2>Nama Kegiatan</td><td colspan=3>: <? echo $keg->nm_keg;?></td></tr>		
									<tr><td colspan=2>Kode Rekening</td><td colspan=3>: <?php echo $_GET['kd_rinci']; ?></td></tr>			
									<tr><td colspan=2>Tanggal dan No. Pengesahan DPA SKPD</td><td colspan=3>:  </td></tr>			
									<tr><td colspan=2>Nama Rekening</td><td colspan=3>: <? echo $rinci->nm_rinci;?></td></tr>		
									 
									<tr><td colspan=2>Tahun Anggaran</td><td colspan=3>: 2019</td></tr>		
 
	<tr><td> </td></tr>
		<tr><td> </td></tr>
		
		
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                  
                                    <tr><td colspan=7>Yang bertanda tangan dibawah ini Kuasa Pengguna Anggaran kegiatan Kabupaten Musi Banyuasin Tahun Anggaran 2019. Menyatakan bahwa saya bertanggungjawab penuh atas segala pengeluaran yang telah dibayar lunas oleh Bendahara Pengeluaran Pembantu kepada yang berhak menerima dengan perincian sebagai berikut :</td></tr>
									<tr  style="border: thin solid black"  > 
									<th align="center" rowspan=2>No </th>
									<th align="center" rowspan=2>Kode Rekening </th>
									<th align="center" rowspan=2>Penerima</th>
									<th align="center" rowspan=2>Uraian</th>
									<th align="center" colspan=2>Bukti</th>
										<th align="center" rowspan=2>Nilai (Rp.)</th>
									</tr>
									
									<tr  style="border: thin solid black"> <th align="center" >Tanggal</th>
							 
									<th align="center" >Nomor</th>
									</tr>
							 
									
                                    <?
                                    $myquery="select *, DATE_FORMAT(tgl, '%d-%m-%Y') as tgl from tb_data where jns='belanja' and jlh<=5000000 and periode='$_GET[bln]' and kd_keg='$_GET[kd_keg]' and kd_rinci='$_GET[kd_rinci]'";
                                    $no=1;
                                    
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr valign=top style="border: thin solid black">
                                   <td align="center" ><?php echo $no;?></td>
                                   <td align="center"><?php echo $dataku->kd_rinci;?></td>
                                   <td align="left" ><?php echo $dataku->kpd;?></td>
                                   <td align="left" ><?php echo $dataku->uraian;?></td>
                                   <td align="center"  width=100><?php echo $dataku->tgl;?></td>
                                   <td align="center" ><?php echo $dataku->id_data;?></td>
                                   <td align="right" width=150 ><?php echo "Rp " . number_format($dataku->jlh,2,',','.');?></td>
  									
	   
									 

                                    </tr>

									
                                    <?php
                                    $no++;
                                    }
                                    ?>
									                                    
									 
  
                                    <tbody>
                                    
                                    </tbody>
                                </table>
								  <p align="left"> 
 <br>
						Bukti-bukti tersebut diatas disimpan sesuai ketentuan yang berlaku pada SKPD/Kegiatan **) <br>
untuk kelengkapan administrasi dan keperluan pemeriksaan aparat pengawasan fungsional. <br>
Demikian surat pernyataan ini dibuat dengan sebenarnya. <br>

 	</font>		
</p>
<table>
		<tr><td colspan=3 align=center > </td><td align=center colspan=4> SEKAYU,      <?php echo strtoupper(bulan($_GET['bln'])); ?> 2019  </td><td align=center  colspan=2>	</td>		</tr>
		<tr><td colspan=3 align=center > </td><td align=center colspan=4> KUASA PENGGUNA ANGGARAN  </td><td align=center  colspan=2>	</td>		</tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		
	<tr><td colspan=3 align=center ></td><td align=center colspan=4 > GAJAH GIRINOTO, SE., M.Si.,Ak</td><td align=center  colspan=2>	</td></tr>
	<tr><td colspan=3 align=center ></td><td align=center colspan=4> NIP.  19730926 200212 1 003</td><td align=center  colspan=2></td>		</tr>	
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


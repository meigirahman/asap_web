<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=bku_bulanan.xls");
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
	<tr><td ALIGN=CENTER COLSPAN=7><font style="font-size: 14pt; font-weight: bold;" >PEMERINTAH KABUPATEN MUSI BANYUASIN</td></tr>
	<tr><td ALIGN=CENTER  COLSPAN=7><font style="font-size: 14pt; font-weight: bold;">BUKU KAS UMUM</td></tr>
	<tr><td  ALIGN=CENTER  COLSPAN=7><font style="font-size: 14pt; font-weight: bold;">BULAN <?php echo strtoupper(bulan($_GET['bln'])); ?> 2019		</font></td></tr>
	<tr><td > </td></tr>
	<tr><td> </td></tr>
	<tr><td colspan=4>SKPD</td><td colspan=3>:  BADAN PENGELOLA KEUANGAN DAN ASET DAERAH</td></tr>
	   <?
		   $kpa=mysql_fetch_object(mysql_query("select * from tb_user WHERE jabatan='Kuasa Pengguna Anggaran' and bid='$_GET[bidang]'"));
		    
		   	$bp=mysql_fetch_object(mysql_query("select * from tb_user WHERE jabatan='Bendahara Pengeluaran' and bid='$_GET[bidang]'"));
												$bpp=mysql_fetch_object(mysql_query("select * from tb_user WHERE jabatan='Bendahara Pengeluaran Pembantu' and bid='$_GET[bidang]'"));
										?>
										<tr><td colspan=4>Bidang</td><td colspan=3>: <? echo strtoupper($_GET['bidang']);?></td></tr>
<tr><td colspan=4>Kuasa Pengguna Anggaran</td><td colspan=3>: <? echo $kpa->nama;?></td></tr>
 
									<tr><td colspan=4>Bendahara Pengeluaran</td><td colspan=3>: <? echo $bp->nama;?></td></tr>
<tr><td colspan=4 >Bendahara Pengeluaran Pembantu</td><td colspan=3>: <? echo $bpp->nama;?></td></tr>
	<tr><td> </td></tr>
		<tr><td> </td></tr>

    </tbody>
		<div id="page-wrapper">
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
 
 	
                        <!-- /.panel-heading -->
 
									<tr align="center" style="border: thin solid black"> 
									<th align="center" width=50 >No. <br>Urut</th>
									<th align="center" width=50 >No. <br>BKU</th>
									<th align="center" width=120 >Tanggal</th>
									<th align="center" width=120 >Kode <br>Rekening</th>
									<th align="center"  width=500 >Uraian</th>
									<th align="center" width=180 >Penerimaan<br>(Rp.)</th>
									<th align="center" width=180 >Pengeluaran<br>(Rp.)</th>
									</tr>
 
										<tr align="center"  style="border: thin solid black"> 
									<th align="center" width=50 >1</th>
									<th align="center" width=50 >2</th>
									<th align="center" width=100 >3</th>
									<th align="center" width=100 >4</th>
									<th align="center"  width=500 >5</th>
									<th align="center" width=180 >6</th>
									<th align="center" width=180 >7</th>
									</tr>
                                    <?
                                    $myquery="select *, DATE_FORMAT(tgl, '%d-%m-%Y') as tgl from tb_data where periode='$_GET[bln]' ";
                                    $no=1;
                                    
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr valign=top  >
                                   <td align="center"  style="border: thin solid black"><?php echo $no;?></td>
                                   <td align="center"   style="border: thin solid black"><?php echo $dataku->id_data;?></td>
  									
                                    <td align="center" style="border: thin solid black"><?php echo $dataku->tgl?></td>
                                    <td align="center"   style="border: thin solid black"><?php echo $dataku->kd_rinci?></td> 
	   
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
									
                                    <td  style="border: thin solid black" ><?php echo $z->narasi." ".$dataku->kpd." ".$c->nm_rinci." ".$dataku->uraian." Kode Kegiatan 4.04 . 4.04.01.".$keg?></td> 

									 <?php
									 if($dataku->dk=='D' or $dataku->dk=='d')
									 {
										 ?>
										 <td style="border: thin solid black" align="center"><?php echo "Rp " . number_format($dataku->jlh,2,',','.');?></td> 
										 <td style="border: thin solid black" align="center"> </td> 
										 <?
											 }
										 elseif($dataku->dk=='K' or $dataku->dk=='k')
										 {
									 ?>
											 <td  style="border: thin solid black" align="center"> </td> 
											 <td style="border: thin solid black" align="center"><?php echo "Rp " . number_format($dataku->jlh,2,',','.');?></td> 
											<? }
											 ?>
                                  
 
                                    </tr>
 
									
                                    <?php
                                    $no++;
                                    }
                                    ?>
									    <tr><td colspan="7"></td></tr>                                
									<tr>
									 <?
									 
                                    $jlh="select A.d,B.k from (select sum(jlh) as d from tb_data where periode='$_GET[bln]' and dk='d') A, (select sum(jlh) as k from tb_data where periode='$_GET[bln]' and dk='k') B";
                                    $dk=mysql_query($jlh) or die (mysql_error());
                                    while($data=mysql_fetch_object($dk))
                                    { ?>
										<td></td>
										<td></td>
										<td style="border: thin solid black" align="left" colspan=3><b>   JUMLAH BULAN INI</td>
										<td style="border: thin solid black" align="center"><?php echo "Rp " . number_format($data->d,2,',','.');?>
										<td style="border: thin solid black" align="center" ><?php echo "Rp " . number_format($data->k,2,',','.');?></td>
									<?php 
									} ?>
								   </tr>
  									
                                   
                                  									                                    
									<tr>
									 <?
                                    $jlh="select A.d,B.k from (select sum(jlh) as d from tb_data where periode<'$_GET[bln]' and dk='d') A, (select sum(jlh) as k from tb_data where periode<'$_GET[bln]' and dk='k') B";
                                    $dk=mysql_query($jlh) or die (mysql_error());
                                    while($data=mysql_fetch_object($dk))
                                    { ?>
										<td></td>
										<td></td>
										<td style="border: thin solid black" align="left" colspan=3><b>   JUMLAH SAMPAI BULAN LALU</td>
										<td style="border: thin solid black" align="center"><?php echo "Rp " . number_format($data->d,2,',','.');?>
										<td style="border: thin solid black" align="center"><?php echo "Rp " . number_format($data->k,2,',','.');?></td>
									<?php 
									} ?>
								   </tr>
								   
								   									<tr>
									 <?
                                    $jlh="select A.d,B.k from (select sum(jlh) as d from tb_data where periode<='$_GET[bln]' and dk='d') A, (select sum(jlh) as k from tb_data where periode<='$_GET[bln]' and dk='k') B";
                                    $dk=mysql_query($jlh) or die (mysql_error());
                                    while($data=mysql_fetch_object($dk))
                                    { ?>
										<td></td>
										<td></td>
										<td style="border: thin solid black" align="left" colspan=3><b>   JUMLAH SAMPAI BULAN INI</td>
										<td style="border: thin solid black" align="center"><?php echo "Rp " . number_format($data->d,2,',','.');?>
										<td style="border: thin solid black" align="center"><?php echo "Rp " . number_format($data->k,2,',','.');?></td>
									<?php 
									} ?>
								   </tr>
  									
									<tr>
									 <?
                                    $jlh="select A.d,B.k from (select sum(jlh) as d from tb_data where periode<='$_GET[bln]' and dk='d') A, (select sum(jlh) as k from tb_data where periode<='$_GET[bln]' and dk='k') B";
                                    $dk=mysql_query($jlh) or die (mysql_error());
                                    while($data=mysql_fetch_object($dk))
                                    { ?>
										<td></td>
										<td></td>
										<td style="border: thin solid black" align="left" colspan=3><b>   SISA KAS PADA HARI INI</td>
										<td style="border: thin solid black" align="center"></td>
										<td style="border: thin solid black" align="center"><?php echo "Rp " . number_format($data->d-$data->k,2,',','.');?></td>
									<?php 
									} ?>
								   </tr>
  
	<tr><td> </td></tr> 
	<tr><td> </td></tr>
	
                                 
 <tr>
									 <?
                                    $jlh="select A.d,B.k from (select sum(jlh) as d from tb_data where periode<='$_GET[bln]' and dk='d') A, (select sum(jlh) as k from tb_data where periode<='$_GET[bln]' and dk='k') B";
                                    $dk=mysql_query($jlh) or die (mysql_error());
                                    while($data=mysql_fetch_object($dk))
                                    { ?>
									<td></td>
										<td></td>
										<td align="left" colspan=2><b>   OLEH KAMI DIDAPAT DALAM KAS</td>
										<td align="left"><?php echo "Rp " . number_format($data->d-$data->k,2,',','.');?></td>
									<?php 
									} ?>
								   </tr>
								    
	<tr><td> </td></tr>
								    <tr>

											<td></td>
										<td></td>
										<td align="left" colspan=3><b>   TERDIRI DARI</td>
										<td align="center"></td>
										<td align="center"></td>

								   </tr>
  <?
                                    $jlh="select A.d,B.k from (select sum(jlh) as d from tb_data where periode<='$_GET[bln]' and dk='d') A, (select sum(jlh) as k from tb_data where periode<='$_GET[bln]' and dk='k') B";
                                    $dk=mysql_query($jlh) or die (mysql_error());
                                    while($data=mysql_fetch_object($dk))
                                    { ?>
												<td></td>
										<td></td>
										<td align="left" colspan=2><b>   A. UANG TUNAI</td>
										<td align="left"><?php echo "Rp " . number_format($data->d-$data->k,2,',','.');?></td>
									<?php 
									} ?>
								   </tr>
								   								    <tr>

											<td></td>
										<td></td>
										<td align="left" colspan=2><b>   B. SALDO BANK</td>
										<td align="left">NIHIL</td>
										<td align="center"></td>

								   </tr>
								   								    <tr>

											<td></td>
										<td></td>
										<td align="left" colspan=2><b>   C. SURAT BERHARGA</td>
										<td align="left">NIHIL</td>
										<td align="center"></td>

								   </tr>
	<tr><td> </td></tr>
		<tr><td> </td></tr>
			<tr><td> </td></tr>
	<tr><td colspan=4 align=center > </td><td align=center  > </td><td align=center  colspan=2>SEKAYU,      <?php echo strtoupper(bulan($_GET['bln'])); ?> 2019		
	</td></tr>
	<tr><td colspan=4 align=center >BENDAHARA PENGELUARAN </td><td  >   </td><td align=center  colspan=2 >BENDAHARA  PENGELUARAN PEMBANTU	</td>		</tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
			
	
	<tr><td colspan=4 align=center ><? echo $bp->nama;?></td><td  > </td><td align=center  colspan=2><? echo $bpp->nama;?>		
	</td></tr>
	<tr><td colspan=4 align=center >NIP. <? echo $bp->nip;?></td><td  ></td><td align=center  colspan=2>NIP. <? echo $bpp->nip;?>			
		
	</td>		</tr>	
	<tr><td> </td></tr>
		<tr><td> </td></tr>
	<tr><td colspan=4 align=center > </td><td align=center  > MENGETAHUI, </td><td align=center  colspan=2>	</td>		</tr>
	<tr><td colspan=4 align=center > </td><td align=center  > KUASA PENGGUNA ANGGARAN  </td><td align=center  colspan=2>	</td>		</tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		
	<tr><td colspan=4 align=center ></td><td align=center > <? echo $kpa->nama;?></td><td align=center  colspan=2>	</td></tr>
	<tr><td colspan=4 align=center ></td><td align=center  > NIP.  <? echo $kpa->nip;?></td><td align=center  colspan=2></td>		</tr>	
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


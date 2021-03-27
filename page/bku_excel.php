<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=bku.xls");
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
 <table>
	<tr><td ALIGN=CENTER COLSPAN=7>PEMERINTAH KABUPATEN MUSI BANYUASIN</td></tr>
	<tr><td ALIGN=CENTER  COLSPAN=7>BUKU KAS UMUM</td></tr>
	<tr><td  ALIGN=CENTER  COLSPAN=7>BULAN :  <?php echo strtoupper(bulan($_GET['bln'])); ?> 2019</td></tr>
	<tr><td > </td></tr>
	<tr><td> </td></tr>
	<tr><td colspan=3>SKPD</td><td colspan=4>:  BADAN PENGELOLA KEUANGAN DAN ASET DAERAH</td></tr>
	<tr><td colspan=3>Bidang</td><td>:  Akuntansi</td></tr>
<tr><td colspan=3>Pengguna Anggaran</td><td>:  Gajah Girinoto, SE, M.Si, Ak  </td></tr>
<tr><td colspan=3>Kode Kegiatan</td><td>:  4.04 . 4.04.01.<?php echo $_GET['kd_keg']; ?></td></tr>
<tr><td colspan=3>Nama Kegiatan</td><td colspan=4>:  PENYUSUNAN LAPORAN KEUANGAN PEMERINTAH DAERAH KAB. MUBA</td></tr>					
<tr><td colspan=3>Bendahara Pengeluaran</td><td>:  MAT RIFA'I, SE</td></tr>
<tr><td colspan=3>Bendahara Pengeluaran Pembantu</td><td colspan=4>:  AHMAD SYAWALLUDIN, SE.,M.Si</td></tr>
	<tr><td> </td></tr>
		<tr><td> </td></tr>

	</table>
		<div id="page-wrapper">
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
 
 	
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                                    <table border=1>
                                    <thead>
									<tr  style="background: #276e95;color: #fff;"> 
									<th align="center">No</th>
									<th align="center">Tanggal</th>
									<th align="center">Kode Rekening</th>
									<th align="center" width="500px">Uraian</th>
									<th align="center">Penerimaan (D)</th>
									<th align="center">Pengeluaran (K)</th>
									</tr>
									</thead>
                                    <?
                                    $myquery="select *, DATE_FORMAT(tgl, '%d-%m-%Y') as tgl from tb_data where periode='$_GET[bln]' and kd_keg='$_GET[kd_keg]'";
                                    $no=1;
                                    
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr>
                                   <td align="center"><?php echo $no;?></td>
  									
                                    <td align="center"><?php echo $dataku->tgl?></td>
                                    <td align="center"><?php echo $dataku->kd_keg?></td> 
	   
									<?php
									$kd=$dataku->jns."".$dataku->dk;
									$q="select narasi from tb_narasi where kd_narasi='$kd'";
									 $x=mysql_query($q) or die (mysql_error());
									 $z=mysql_fetch_object($x)
									?>
									<?php
									$keg=$dataku->kd_keg;
									$rek=$dataku->kd_rinci;
									$a="select nm_rinci from tb_rinci where kd_keg='$keg' and kd_rinci='$rek' ";
									 $b=mysql_query($a) or die (mysql_error());
									 $c=mysql_fetch_object($b)
									?>
									
                                    <td  ><?php echo $z->narasi." ".$dataku->kpd." ".$c->nm_rinci." ".$dataku->nm." Kode Kegiatan 4.04 . 4.04.01.".$keg?></td> 

									 <?php
									 if($dataku->dk=='d')
									 {
										 ?>
										 <td align="center"><?php echo "Rp " . number_format($dataku->jlh,2,',','.');?></td> 
										 <td align="center"> </td> 
										 <?
											 }
										 elseif($dataku->dk=='k')
										 {
									 ?>
											 <td align="center"> </td> 
											 <td align="center"><?php echo "Rp " . number_format($dataku->jlh,2,',','.');?></td> 
											<? }
											 ?>
                                  
 
                                    </tr>

									
                                    <?php
                                    $no++;
                                    }
                                    ?>
									    <tr><td colspan="6"></td></tr>                                
									<tr>
									 <?
									 
                                    $jlh="select A.d,B.k from (select sum(jlh) as d from tb_data where periode='$_GET[bln]' and dk='d') A, (select sum(jlh) as k from tb_data where periode='$_GET[bln]' and dk='k') B";
                                    $dk=mysql_query($jlh) or die (mysql_error());
                                    while($data=mysql_fetch_object($dk))
                                    { ?>
										<td align="center" colspan=4><?php echo "JUMLAH BULAN / TANGGAL"?></td><td align="center"><?php echo "Rp " . number_format($data->d,2,',','.');?><td align="center"><?php echo "Rp " . number_format($data->k,2,',','.');?></td>
									<?php 
									} ?>
								   </tr>
  									
                                   
                                  									                                    
									<tr>
									 <?
                                    $jlh="select A.d,B.k from (select sum(jlh) as d from tb_data where periode='$_GET[bln]-1' and dk='d') A, (select sum(jlh) as k from tb_data where periode='$_GET[bln]-1' and dk='k') B";
                                    $dk=mysql_query($jlh) or die (mysql_error());
                                    while($data=mysql_fetch_object($dk))
                                    { ?>
										<td align="center" colspan=4><?php echo "JUMLAH SAMPAI BULAN LALU"?></td><td align="center"><?php echo "Rp " . number_format($data->d,2,',','.');?><td align="center"><?php echo "Rp " . number_format($data->k,2,',','.');?></td>
									<?php 
									} ?>
								   </tr>
								   
								   									<tr>
									 <?
                                    $jlh="select A.d,B.k from (select sum(jlh) as d from tb_data where periode='$_GET[bln]' and dk='d') A, (select sum(jlh) as k from tb_data where periode='$_GET[bln]' and dk='k') B";
                                    $dk=mysql_query($jlh) or die (mysql_error());
                                    while($data=mysql_fetch_object($dk))
                                    { ?>
										<td align="center" colspan=4><?php echo "JUMLAH SAMPAI BULAN INI"?></td><td align="center"><?php echo "Rp " . number_format($data->d,2,',','.');?><td align="center"><?php echo "Rp " . number_format($data->k,2,',','.');?></td>
									<?php 
									} ?>
								   </tr>
  									
									<tr>
									 <?
                                    $jlh="select A.d,B.k from (select sum(jlh) as d from tb_data where periode='$_GET[bln]' and dk='d') A, (select sum(jlh) as k from tb_data where periode='$_GET[bln]' and dk='k') B";
                                    $dk=mysql_query($jlh) or die (mysql_error());
                                    while($data=mysql_fetch_object($dk))
                                    { ?>
										<td align="center" colspan=4><?php echo "SISA KAS PADA HARI INI"?></td><td align="center"></td><td align="center"><?php echo "Rp " . number_format($data->d-$data->k,2,',','.');?></td>
									<?php 
									} ?>
								   </tr>
 
                                    </tr>
                                    <tbody>
                                    
                                    </tbody>
                                </table>

 <table>
	<tr><td> </td></tr>
		<tr><td> </td></tr>
			<tr><td> </td></tr>
	<tr><td colspan=3 align=center > </td><td align=center colspan=2> </td><td align=center  colspan=2>SEKAYU, JANUARI 2019		
	</td></tr>
	<tr><td colspan=3 align=center >BENDAHARA PENGELUARAN </td><td align=center colspan=2>   </td><td align=center  colspan=2>BENDAHARA  PENGELUARAN PEMBANTU	</td>		</tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
		<tr><td> </td></tr>
			
	
	<tr><td colspan=3 align=center >MAT RIFA'I, SE</td><td align=center colspan=2> </td><td align=center  colspan=2>AHMAD SYAWALLUDIN, SE.,M.Si			
	</td></tr>
	<tr><td colspan=3 align=center >NIP. 19800428 200701 1 004</td><td align=center colspan=2></td><td align=center  colspan=2>NIP. 19800908 201001 1 014			
		
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


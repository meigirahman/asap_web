 

<?php
error_reporting(0);
$server = "localhost";
$username = "root";
$password = "";
$databaseName = "db_pajak";

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


		<p align="center"><font style="font-size: 14pt;" ><strong> 
 REKAPITULASI REALISASI PENYERAPAN<br>
KABUPATEN MUSI BANYUASIN<br>
TAHUN ANGGARAN 2019<br>

 


	</p></font>

		
		<div id="page-wrapper">
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
         
                  
						
						
	 
							 
										
									
									<div class="panel-body">
                            <div class="table-responsive">
                             
  
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table border=1 class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
									<tr  style="background: #276e95;color: #fff;"> 
									<th align="center" >NO</th>
									<th align="center" width=350 >JENIS/BIDANG/SUB BIDANG</th>
									<th align="center" width=200 >NILAI KONTRAK OMSPAN</th>
									<th align="center" width=200 >REALISASI PENYALURAN  DARI KPPN KE-RKUD</th>
									<th align="center" width=200>REALISASI PENYERAPAN DARI RKUD</th>
									<th align="center" width=200>SISA DANA DI RKUD</th>
									<th align="center" width=200>SISA KONTRAK YANG TIDAK DISALURKAN</th>
									<th align="center" >%</th>
 									</tr>
									
									<tr  style="background: #276e95;color: #fff;"> 
									<th align="center" >1</th>
									<th align="center" >2</th>
									<th align="center" >3</th>
									<th align="center" >4</th>
									<th align="center" >5</th>
									<th align="center" >6 = (4 - 5)</th>
									<th align="center" >7 = (3 - 4)</th>
									<th align="center" >8 = (5 / 4)</th>
 									</tr>
									</thead>
									
										<?php
									$sql0 = mysql_query("SELECT * FROM tb_jenis ORDER BY kd_jenis ASC");
										if(mysql_num_rows($sql0) != 0){

										while($row0 = mysql_fetch_assoc($sql0)){
											$kd_jenis = $row0['kd_jenis'];

									$sql = mysql_query("SELECT * FROM tb_objek WHERE kd_jenis='$kd_jenis'");
									
										$pagu=mysql_fetch_array(mysql_query("select sum(pagu) as pagu from tb_pagu WHERE kd_jenis='$kd_jenis'"));
												$kontrak=mysql_fetch_array(mysql_query("select sum(kontrak) as kontrak from tb_kontrak WHERE kd_jenis='$kd_jenis'"));
												$rkun=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_rkun WHERE kd_jenis='$kd_jenis'"));
												$sp2d=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_sp2d WHERE kd_jenis='$kd_jenis'"));
											
								echo '<tr style="background: pink;color: #fff;"><td></td>
								<td>'.$row0['nm_jenis'].'</td>
								<td align=right>'.number_format($kontrak['kontrak'],2,',','.').'</td>
								<td align=right>'.number_format($rkun['jlh'],2,',','.').'</td>
								<td align=right>'.number_format($sp2d['jlh'],2,',','.').'</td>
								<td>'.number_format($rkun['jlh']-$sp2d['jlh'],2,',','.').'</td>
								<td>'.number_format($kontrak['kontrak']-$rkun['jlh'],2,',','.').'</td>
								<td>'.number_format($sp2d['jlh']/$rkun['jlh']*100,2,',','.').'</td>
								</tr>';
									if(mysql_num_rows($sql) != 0){
								 $no=1;
								 
										while($row = mysql_fetch_assoc($sql)){
										
											$kd_objek = $row['kd_objek'];
											$sql2 = mysql_query("SELECT * FROM tb_rinci WHERE kd_objek='$kd_objek'");

	 
											
											$pagu2=mysql_fetch_array(mysql_query("select sum(pagu) as pagu from tb_pagu WHERE kd_bidang='$kd_bidang'"));
											$kontrak2=mysql_fetch_array(mysql_query("select sum(kontrak) as kontrak from tb_kontrak WHERE kd_bidang='$kd_bidang'"));
														$rkun2=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_rkun WHERE kd_bidang='$kd_bidang'"));
												$sp2d2=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_sp2d WHERE kd_bidang='$kd_bidang'"));
													
												
														
								echo '<tr style="background: #e8e8e8;"><td>'.$no.'</td>
								<td>'.$row['nm_objek'].'</td>
								<td align=right>'.number_format($kontrak2['kontrak'],2,',','.').'</td>
								<td align=right>'.number_format($rkun2['jlh'],2,',','.').'</td>
								<td align=right>'.number_format($sp2d2['jlh'],2,',','.').'</td>
								<td align=right>'.number_format($rkun2['jlh']-$sp2d2['jlh'],2,',','.').'</td>
								<td align=right>'.number_format($kontrak2['kontrak']-$rkun2['jlh'],2,',','.').'</td>
								<td align=right>'.number_format($sp2d2['jlh']/$rkun2['jlh']*100,2,',','.').'</td>
								</tr>';
											 
													
													while($row2 = mysql_fetch_assoc($sql2)){
													$text = str_replace(' ', '', $row2['kd_rinci']);
													$anggaran=mysql_fetch_array(mysql_query("select anggaran from tb_anggaran WHERE kd_rinci like '%$text%'"));
													$kontrak3=mysql_fetch_array(mysql_query("select kontrak from tb_kontrak WHERE kd_subbid='$row2[kd_subbid]'"));
													$rkun3=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_rkun WHERE kd_subbid='$row2[kd_subbid]'"));
												$sp2d3=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_sp2d WHERE kd_subbid='$row2[kd_subbid]'"));
													
 
			
																	
													echo '<tr><td></td>
													<td>'.str_replace(' ', '', $row2['kd_rinci']).'</td>
													<td align=right>'.number_format($anggaran['anggaran'],2,',','.').'</td>
													<td align=right>'.number_format($rkun3['jlh'],2,',','.').'</td>
													<td align=right>'.number_format($sp2d3['jlh'],2,',','.').'</td>
													<td align=right>'.number_format($rkun3['jlh']-$sp2d3['jlh'],2,',','.').'</td>
													<td align=right>'.number_format($kontrak3['kontrak']-$rkun3['jlh'],2,',','.').'</td>
													<td align=right>'.number_format($sp2d3['jlh']/$rkun3['jlh']*100,2,',','.').'</td>
													</tr>';
													
													}
													$no++; 
 
										}
									}
										

										}}
			$pagu=mysql_fetch_array(mysql_query("select sum(pagu) as pagu from tb_pagu"));
					$kontrak=mysql_fetch_array(mysql_query("select sum(kontrak) as kontrak from tb_kontrak"));
 
												$rkun=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_rkun"));
												$sp2d=mysql_fetch_array(mysql_query("select sum(jlh) as jlh from tb_sp2d"));
					
		echo '<tr style="background: pink;color: #fff;"><td></td>
								<td>'.$row0['nm_jenis'].'</td>
								<td align=right>'.number_format($kontrak['kontrak'],2,',','.').'</td>
								<td align=right>'.number_format($rkun['jlh'],2,',','.').'</td>
								<td align=right>'.number_format($sp2d['jlh'],2,',','.').'</td>
								<td>'.number_format($rkun['jlh']-$sp2d['jlh'],2,',','.').'</td>
								<td>'.number_format($kontrak['kontrak']-$rkun['jlh'],2,',','.').'</td>
								<td>'.number_format($sp2d['jlh']/$rkun['jlh']*100,2,',','.').'</td>
								</tr>';
									?>
	                   
									 
  
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                            </form>
                                    
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
									
                        <!-- /.panel-heading -->
                        
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
 

</body>

</html>


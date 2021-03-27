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


		<p align="center"><font style="font-size: 14pt;" ><strong> 
 REKAPITULASI REALISASI PENYERAPAN<br>
KABUPATEN MUSI BANYUASIN<br>
TAHUN ANGGARAN 2019<br>

 


	</p></font>

		
		<div id="page-wrapper">
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
         
                  
						
						
	 
							
									                                        <form action="">
                                        <a href='page/realisasi_dana_excel.php?kd_jenis=<?PHP ECHO $_POST['kd_jenis']?>&kd_bidang=<?PHP ECHO $_POST['kd_bidang']?>&tw=<?PHP ECHO $_POST['tw']?>'
                                    	target='_blank'
                                    	class="btn btn-primary" ><i class='fa fa-download'></i> Excel</a>
                                        </form>
										
									
									<div class="panel-body">
                            <div class="table-responsive">
                             
  
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
									<tr  style="background: #276e95;color: #fff;"> 
									<th align="center" >NO</th>
									<th align="center" width=300 >JENIS/BIDANG/SUB BIDANG</th>
									<th align="center" >NILAI KONTRAK OMSPAN</th>
									<th align="center" >REALISASI PENYALURAN  DARI KPPN KE-RKUD</th>
									<th align="center" >REALISASI PENYERAPAN DARI RKUD</th>
									<th align="center" >SISA DANA DI RKUD</th>
									<th align="center" >SISA KONTRAK YANG TIDAK DISALURKAN</th>
									<th align="center"width=100 >%</th>
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
									$sql0 = mysql_query("SELECT * FROM ref_jenis ORDER BY kd_jenis ASC");
									 

										while($row0 = mysql_fetch_assoc($sql0)){
											$kd_jenis = $row0['kd_jenis'];

											$sql = mysql_query("SELECT * FROM ref_bidang WHERE kd_jenis='$kd_jenis'");
									
										 
											$kontrak=mysql_fetch_array(mysql_query("select sum(jlh) as kontrak from tb_anggaran WHERE kd_jenis='$kd_jenis'"));
											 
											
											echo '<tr style="background: pink;color: #fff;"><td></td>
											<td>'.$row0['nm_jenis'].'</td><td align=right>'.number_format($kontrak['kontrak'],2,',','.').'</td></tr>';
											
										 
													while($row = mysql_fetch_assoc($sql)){
												
													$kd_objek = $row['kd_objek'];
													$sql2 = mysql_query("SELECT * FROM ref_rinci WHERE kd_objek='$kd_objek'");
 
													$kontrak2=mysql_fetch_array(mysql_query("select sum(kontrak) as kontrak from tb_kontrak WHERE kd_objek='$kd_objek'"));
									 
												
														
													echo '<tr style="background: #e8e8e8;"><td>'.$no.'</td><td>'.$row['nm_bidang'].'</td><td align=right>'.number_format($kontrak2['kontrak'],2,',','.').'</td></tr>';
											 
													
													while($row2 = mysql_fetch_assoc($sql2)){
												 
														$kontrak3=mysql_fetch_array(mysql_query("select jlh from tb_anggaran WHERE kd_rinci='$row2[kd_rinci]' and kd_keg='17.20' and bid='$_SESSION[bidang]'"));
																	
														echo '<tr><td></td><td>'.$row2['kd_rinci'].'</td><td align=right>'.number_format($kontrak3['jlh'],2,',','.').'</td>	</tr>';
													
													}
												 
 
											}
 
										}
			 
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


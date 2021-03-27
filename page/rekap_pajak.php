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
         
                  
						<form action="" method='POST'> 
										<label> 
										
										Bulan 
										<select class="form-control" name="bln" id="bln">
                                    <option value="" selected>-Pilih-</option>
                                    <option value="01" >Januari</option>
                                    <option value="02" >Februari</option>
                                    <option value="03" >Maret</option>
                                    <option value="04" >April</option>
                                    <option value="05" >Mei</option>
                                    <option value="06" >Juni</option>
                                    <option value="07" >Juli</option>
                                    <option value="08" >Agustus</option>
                                    <option value="09" >September</option>
                                    <option value="10" >Oktober</option>
                                    <option value="11" >Nopember</option>
                                    <option value="12" >Desember</option>
                                
                                    </select>
							 </label>
										 
									 
								 
									
						 <input type="submit" value="Filter" class="btn btn-primary">	
 
						</form>
						
	<form action="">
                                        <a href='page/rekap_pajak_excel.php?bln=<?PHP ECHO $_POST['bln']?>&bidang=<?PHP ECHO $_SESSION['bidang']?>&kd_keg=<?PHP ECHO $_POST['kd_keg']?>'
                                    	target='_blank'
                                    	class="btn btn-primary" ><i class='fa fa-download'></i> Excel</a>
                                        </form>
 
						</form>
 
						 					
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

 
 
  <p align="center"><font style="font-size: 14pt;" >
	  							
REKAPITULASI SETORAN PAJAK 									<br>
BULAN <?php echo strtoupper(bulan($_POST['bln'])); ?> 2019								<br><br>
						
 	</font>		
</p>
					
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                   
									<tr  style="background: #276e95;color: #fff;"> 
									<th align="center" rowspan=2 width=50>No</th> 
									<th align="center" rowspan=2 width=80>Kode Rekening</th>
									<th width=300px align="center" rowspan=2>Nama Kegiatan</th>
									<th align="center" colspan=5>Realisasi</th>
									<th align="center" rowspan=2 width=100>Jumlah</th>
									</tr>
									<tr  style="background: #276e95;color: #fff;"> 
									<th align="center" width=100>PPH-21	
									<th align="center" width=100>PPH-22	
									<th align="center" width=100>PPH-23	
									<th align="center" width=100>PPN	
									<th align="center" width=100>PJK.DAERAH</th>
									 
									</tr>
									
	 
									<?

									$sql0 = mysql_query("select kd_keg from tb_anggaran where bid='$_SESSION[bidang]' group by kd_keg");
						 
									$no=1;
									while($row0 = mysql_fetch_array($sql0))
									{
											$kd_keg = $row0['kd_keg'];
											
												 $myquery="select * from ref_keg where kd_keg='$kd_keg'";
												$daftar=mysql_query($myquery) or die (mysql_error());
												while($d=mysql_fetch_object($daftar))
												{
													?>
													<tr>
												   <td align="center"><?php echo $no;?></td>
													<td align="center"><?php echo $d->kd_keg?></td>
				 
													<td align=left ><?php echo $d->nm_keg?></td>
													<?php
													$keg=$d->kd_keg;
													$a="select sum(jlh) as jlh from tb_data where dk='d' and kd_keg='$keg' and jns='pph21' and periode='$_POST[bln]'";
													 $b=mysql_query($a) or die (mysql_error());
													 $c=mysql_fetch_object($b)
													?>
													<td align=right><?php echo number_format($c->jlh,2,',','.');?></td>
													<?php
													$keg=$d->kd_keg;
													$a="select sum(jlh) as jlh from tb_data where dk='d' and kd_keg='$keg' and jns='pph22' and periode='$_POST[bln]'";
													 $b=mysql_query($a) or die (mysql_error());
													 $c=mysql_fetch_object($b)
													?>
													<td align=right><?php echo number_format($c->jlh,2,',','.');?></td>
													<?php
													$keg=$d->kd_keg;
													$a="select sum(jlh) as jlh from tb_data where dk='d' and kd_keg='$keg' and jns='pph23' and periode='$_POST[bln]'";
													 $b=mysql_query($a) or die (mysql_error());
													 $c=mysql_fetch_object($b)
													?>
													<td align=right><?php echo number_format($c->jlh,2,',','.');?></td>
													<?php
													$keg=$d->kd_keg;
													$a="select sum(jlh) as jlh from tb_data where dk='d' and kd_keg='$keg' and jns='ppn' and periode='$_POST[bln]'";
													 $b=mysql_query($a) or die (mysql_error());
													 $c=mysql_fetch_object($b)
													?>
													<td align=right><?php echo number_format($c->jlh,2,',','.');?></td>
													<?php
													$keg=$d->kd_keg;
													$a="select sum(jlh) as jlh from tb_data where dk='d' and kd_keg='$keg' and jns='pajak daerah' and periode='$_POST[bln]'";
													 $b=mysql_query($a) or die (mysql_error());
													 $c=mysql_fetch_object($b)
													?>
													<td align=right><?php echo number_format($c->jlh,2,',','.');?></td>
													<?php
													$keg=$d->kd_keg;
													$a="select sum(jlh) as jlh from tb_data where dk='d' and kd_keg='$keg' and (jns='pajak daerah' or jns='pph21' or jns='pph22' or jns='pph23' or jns='ppn') and periode='$_POST[bln]'";
													 $b=mysql_query($a) or die (mysql_error());
													 $c=mysql_fetch_object($b)
													?>
													<td align=right><?php echo number_format($c->jlh,2,',','.');?></td>
													 
													</tr>
													
													<?php
                                   
											}
										$no++;
									}
                                    ?>
	                     <tbody>
                                    
                                    </tbody>
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


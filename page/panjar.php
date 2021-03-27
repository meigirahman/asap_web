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
                                        <a href='page/panjar_excel.php?bln=<?PHP ECHO $_POST['bln']?>&id_keg=<?PHP ECHO $_POST['kd_keg']?>&bidang=<?PHP ECHO $_SESSION['bidang']?>'
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
	 
PEMERINTAH KABUPATEN  MUSI BANYUASIN		<br>						 					
BUKU PANJAR		<br>						
								<br>
Bulan <?php echo bulan($_POST['bln']); ?> 2019									<br><br>
						
 	</font>		
</p>
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
									<tr  style="background: #276e95;color: #fff;"> 
									<th align="center">No</th>
									<th align="center">Kd Ref.</th> 
									<th align="center">Kode Rekening</th>
									<th align="center" width="500px">Uraian</th>
									<th align="center">Penerimaan <br>(Rp.)</th>
									<th align="center">Pengeluaran <br>(Rp.)</th>
									</tr>
									</thead>
                                    <?
                                    $myquery0="select *, DATE_FORMAT(tgl, '%d-%m-%Y') as tgl from tb_data where jns='sp2d' and periode='$_POST[bln]' ";
                        
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
													<tr>
												   <td align="center"><?php echo $no;?></td>
													
													<td align="center"><?php echo $dataku->id_data;?></td>
													<td align="center"><?php echo $dana?></td> 
					   
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
													
													<td  ><?php echo $z->narasi." ".$dataku->kpd." ".$c->nama." ".$dataku->uraian." Kode Kegiatan 4.04 . 4.04.01.".$keg?></td> 

													 <?php
													 
													 
													  $blnj=mysql_fetch_object(mysql_query("select *,sum(jlh) as jlh, DATE_FORMAT(tgl, '%d-%m-%Y') as tgl from tb_data where kd_keg='$kd_keg' and kd_rinci='$kd_rinci' and dana='ls' and periode='$_POST[bln]' and jns='belanja' ") );
													  $uyhd=mysql_fetch_object(mysql_query("select *,sum(jlh) as jlh, DATE_FORMAT(tgl, '%d-%m-%Y') as tgl from tb_data where kd_keg='$kd_keg' and kd_rinci='$kd_rinci' and periode='$_POST[bln]' and jns='uyhd'") );
													 
												 if($blnj->jlh!=0 or $uyhd->jlh!=0)
												 {
														 ?>
														 <td align="center"><?php echo number_format($dataku->jlh,2,',','.');?></td> 
														 <td align="center"><?php echo  number_format($blnj->jlh+$uyhd->jlh,2,',','.');?></td> 
														 
												 <?}else
												 {?>
													 <td align="center"><?php echo number_format($dataku->jlh,2,',','.');?> </td> 
														 <td align="center"><?php echo  number_format('0',2,',','.');?></td> 
													 <?}
												 ?>
				 
													</tr>

													
													<?php
													$no++;
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


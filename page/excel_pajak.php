<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=rekappajak.xls");
?>
<?php
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




		
		<div id="page-wrapper">
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
 
 
					 
							
									
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                             
  
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table border=1 >
                                    
									<tr  style="background: #276e95;color: #fff;"> 
									<th align="center" rowspan=2>No</th> 
									<th align="center" rowspan=2>Kode Rekening</th>
									<th width=300px align="center" rowspan=2>Nama Kegiatan</th>
									<th align="center" colspan=5>Realisasi</th>
									<th align="center" rowspan=2>Jumlah</th>
									</tr>
									<tr  style="background: #276e95;color: #fff;"> 
									<th align="center">PPH-21	
									<th align="center">PPH-22	
									<th align="center">PPH-23	
									<th align="center">PPN	
									<th align="center">PJK.DAERAH</th>
									 
									</tr>
									
								 
									<?php
                                    $q="select * from tb_kegiatan where bid='$_GET[bidang]'";
                                    $no=1;
                                    
                                    $daftar=mysql_query($q) or die (mysql_error());
                                    while($d=mysql_fetch_object($daftar))
                                    {
                                    ?>
									<tr> 
									<td valign=top align=center><? echo $no?></td> 
									 
									<td align=center valign=top width=20pt><?php echo "4.04 . 4.04.01. ".$d->id_keg ?></td>
									<td width="800"><?php echo $d->nama ?></td>
									<?php
									$keg=$d->id_keg;
									$a="select sum(jlh) as jlh from tb_data where dk='d' and id_keg='$keg' and jns='pph21' ";
									 $b=mysql_query($a) or die (mysql_error());
									 $c=mysql_fetch_object($b)
									?>
									<td width="100" valign=top ><?php echo "Rp " . number_format($c->jlh,2,',','.');?></td>
									<?php
									$keg=$d->id_keg;
									$a="select sum(jlh) as jlh from tb_data where dk='d' and id_keg='$keg' and jns='pph22' ";
									 $b=mysql_query($a) or die (mysql_error());
									 $c=mysql_fetch_object($b)
									?>
									<td valign=top width="100"><?php echo "Rp " . number_format($c->jlh,2,',','.');?></td>
									<?php
									$keg=$d->id_keg;
									$a="select sum(jlh) as jlh from tb_data where dk='d' and id_keg='$keg' and jns='pph23' ";
									 $b=mysql_query($a) or die (mysql_error());
									 $c=mysql_fetch_object($b)
									?>
									<td valign=top width="100"><?php echo "Rp " . number_format($c->jlh,2,',','.');?></td>
									<?php
									$keg=$d->id_keg;
									$a="select sum(jlh) as jlh from tb_data where dk='d' and id_keg='$keg' and jns='ppn' ";
									 $b=mysql_query($a) or die (mysql_error());
									 $c=mysql_fetch_object($b)
									?>
									<td valign=top width="100" ><?php echo "Rp " . number_format($c->jlh,2,',','.');?></td>
									<td width="100"></td>
									<td width="100"></td>
									
									</tr>
									
									<?
									$no++;
										}?>
									
                                   
									                                    
									 
  
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


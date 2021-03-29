<?
 
include "tanggal.php";
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
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <center>BUKU PERSEDIAAN</center>
                        </div>
						
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                             
											 
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
									<tr  style="background: #276e95;color: #fff;"> 
									<th align="center">No</th> 
									  
									<th align="center">Tgl</th>    
									<th align="center">Masuk</th>
									<th align="center">Keluar</th>
									<th align="center">Harga Beli</th>
									<th align="center">Sisa Stok</th>
									<th align="center">Jumlah Saldo</th> 
									
								 
									</tr>
									</thead>
                                    <?
                                    $myquery="select * from tb_stok where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and kd_brg='$_POST[kd_brg]'";
                                    $no=1;
                                    $sisa=0;
                                    $daftar=mysqli_query($konek,$myquery) or die (mysql_error());
                                    while($dataku=mysqli_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr>
                                   <td align="center"><?php echo $no;?></td> 
                                    <td align="center"><?php echo $dataku->tgl?></td> 
                                    <td align="center"><?php if($dataku->jumlah>0)
									{
									echo $masuk=$dataku->jumlah;
									}?></td>
									<td align="center"><?php if($dataku->jumlah<0)
									{
									echo $masuk=$dataku->jumlah;
									}?></td>
									
                                    <td align="center"><?php echo number_format($hrg=$dataku->harga_satuan,2,',','.')?></td>  
                                    <td align="center"><?php echo $sisa=$sisa+$dataku->jumlah?></td>  
                                    <td align="center"><?php echo number_format($tot=$hrg*$sisa,2,',','.')?></td>  
                                    
									 
                                    </tr>
                                    
                                    <?php
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


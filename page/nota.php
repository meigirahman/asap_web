<?

include "koneksi.php";
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
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <center>Data Standar Harga</center>
                        </div>
						
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                             
													  <a  href='home.php?p=nota_input' class='btn btn-primary btn-sm'>
						<span class='glyphicon glyphicon-edit'></span> Tambahkan Data
					  </a>
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
									<tr  style="background: #276e95;color: #fff;"> 
									<th align="center">No</th>
									<th align="center">Tanggal</th>
									<th align="center">Nomor Bukti/BAST</th> 
									<th align="center">Jumlah</th>
									 
									
									<th>Aksi</th>
									</tr>
									</thead>
                                    <?
                                    $myquery="select * from tb_beli ";
                                    $no=1;
                                    
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr>
                                   <td align="center"><?php echo $no;?></td>
                                    <td ><?php echo $dataku->tgl?></td>
                                    <td ><?php echo $dataku->uraian?></td>
                                   
                                
 
		  <td style="text-align:right"><? echo number_format('100000',2,',','.')."</td>"?>
 
 
									<td align="center">
                                    <a href='?p=sub_rinci_belanja&kd_opd=<?php echo $dataku->kd_opd?>&kd_beli=<?php echo $dataku->kd_beli?>&tgl=<?php echo $dataku->tgl?>' class='btn btn-primary btn-sm'>
						<span class='glyphicon glyphicon-edit'>Pilih</span> 
					  </a>
					  
					      <a href='?p=standar_hapus&kd_beli=<?php echo $dataku->kd_beli?>' class='btn btn-primary btn-sm'>
						<span class='glyphicon glyphicon-edit'>Hapus</span> 
					  </a>
					  
					  
									   
                                    </td>
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


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
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <center>DATA PENANDATANGAN DOKUMEN</center>
                        </div>
						
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                             
							 
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
									<tr  style="background: #f16721;color: #fff;"> 
									<th align="center">No</th>
									<th align="center">Nama</th> 
									<th align="center">NIP</th>
									<th align="center">Jabatan</th>
									
									<th>Aksi</th>
									</tr>
									</thead>
                                    <?
                                    $myquery="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]'";
                                    $no=1;
                                    
                                    $daftar=mysqli_query($konek,$myquery) or die (mysql_error());
                                    while($dataku=mysqli_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr>
                                   <td align="center"><?php echo $no;?></td>
                                    <td ><?php echo $dataku->nama?></td>
                                    <td ><?php echo $dataku->nip?></td>
                                    <td><?php echo $dataku->jabatan?></td>
 
									<td align="center">
                                    
									<a class='btn btn-warning btn-sm' href="home.php?p=user_edit&id=<?php echo $dataku->id?>" title="Edit" ><i class="fa fa-edit">Edit Data</i></a>
                                     
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


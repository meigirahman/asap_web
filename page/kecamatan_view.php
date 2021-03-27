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
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <center>Data Kecamatan</center>
                        </div>
						
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <button class='btn btn-warning'><a href=\"modul/view/kib_b/lap_kibb1a_sem1.php?opd=$_GET[opd]\">
								<span class='glyphicon glyphicon glyphicon-print'></span> Cetak</a></button><br><br>
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
									<tr  style="background: #276e95;color: #fff;"> 
									<th align="center">No</th>
									<th align="center">Kode Kecamatan</th>
									<th align="center">Nama Kecamatan</th>
									<th align="center">Alamat Kecamatan</th>
									<th align="center">Kode NPWPD Kecamatan</th>
									<th align="center">Keterangan</th>
									<th>Aksi</th>
									</tr>
									</thead>
                                    <?
                                    $myquery="select * from kecamatan ORDER BY Kode_Kecamatan ASC";
                                    $no=1;
                                    
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr>
                                    <td align="center"><?php echo $no;?></td>
                                    <td align="center"><?php echo substr($dataku->Kode_Kecamatan,0,30)?></td>
                                    <td><?php echo substr($dataku->Nama_Kecamatan,0,20)?></td>
                                    <td><?php echo substr($dataku->Alamat,0,50)?></td>
                                    <td><?php echo substr($dataku->Kode_NPWP,0,50)?></td>
                                    <td align="center"></td>

										
									<td align="center">
                                    
									<a href="home.php?p=kecamatan_edit&Kode_Kecamatan=<?php echo $dataku->Kode_Kecamatan?>" title="Edit" style="color: #1484CE;" ><i class="fa fa-edit"></i></a>
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


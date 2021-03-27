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
                            <center>Data</center>
                        </div>
						
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                             
													  <a  href='home.php?p=anggaran_input' class='btn btn-primary btn-sm'>
						<span class='glyphicon glyphicon-edit'></span> Tambahkan Data
					  </a>
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
									<tr  style="background: #276e95;color: #fff;"> 
									<th align="center">No</th>
									<th align="center">Kode Kegiatan</th> 
									<th align="center">Kode Rekening</th>
									<th align="center">Nama Rekening</th>
									<th align="center">Anggaran</th>
									
									<th>Aksi</th>
									</tr>
									</thead>
                                    <?
                                    $myquery="select * from tb_anggaran where bid='$_SESSION[bidang]' order by kd_keg,kd_rinci asc";
                                    $no=1;
                                    
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr>
                                   <td align="center"><?php echo $no;?></td>
                                    <td align="center"><?php echo $dataku->kd_keg?></td>
                                    <td align="center"><?php echo $dataku->kd_rinci?></td>
									
									<?php

									 $nm=mysql_fetch_object(mysql_query("select * from ref_rinci where kd_rinci='$dataku->kd_rinci'"));
									?>
									
									
                                    <td  ><?php echo $nm->nm_rinci?></td>
                                    <td align=right ><?php echo number_format($dataku->jlh,2,',','.')?></td>
 
 
 
									<td align="center">
                                    
									<a href="home.php?p=pajak_restoran_edit&no_surat=<?php echo $dataku->no_surat?>" title="Edit" style="color: #1484CE;" ><i class="fa fa-edit"></i></a>
                                    <a href="home.php?p=pajak_restoran_hapus&no_surat=<?php echo $dataku->no_surat?>" title="Hapus" style="color: #1484CE;" onclick="return confirm('Hapus data terpilih?')"><i class="fa fa-trash-o"></i></a>
                                    
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


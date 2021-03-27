<?

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

?>

 
<body>



		
		<div id="page-wrapper">
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <center>DATA PEMBELIAN</center>
                        </div>
						
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                             
													  <a  href='home.php?p=beli_input' class='btn btn-danger btn-sm'>
						<span class='glyphicon glyphicon-edit'></span> Tambah Nota Pembelian
					  </a>
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
									<tr  style="background: #f16721;color: #fff;"> 
									<th><center>No</th>
									<th><center>Tanggal</th>
									<th><center>Nomor Bukti/BAST</th> 
									<th><center>Jumlah</th>
									 
									
									<th><center>Aksi</th>
									</tr>
									</thead>
                                    <?
                                    $myquery="select * from tb_beli where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' order by tgl ";
                                    $no=1;
                                    
                                    $daftar=mysqli_query($konek,$myquery) or die (mysql_error());
                                    while($dataku=mysqli_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr>
                                   <td align="center"><?php echo $no;?></td>
                                    <td ><center><?php echo $dataku->tgl?></td>
                                    <td ><center><?php echo $dataku->uraian?></td>
                                   <?
								   $sql=mysqli_query($konek,"select sum(jumlah*harga_satuan) as total from tb_beli_rinci where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and kd_beli='$dataku->kd_beli' group by kd_beli") or die(mysql_error());
									$jlh=mysqli_fetch_object($sql);
		
									?>
                                
 
									<td style="text-align:right"><? echo number_format($jlh->total,2,',','.')."</td>"?>
 
 
									<td align="center">
                                    <a href='?p=sub_beli&kd_beli=<?php echo $dataku->kd_beli?>&tgl=<?php echo $dataku->tgl?>' class='btn btn-warning btn-sm'>
						<span class='glyphicon glyphicon-edit'>Pilih</span> 
					  </a>
					   <a  href='?p=beli_edit&kd_beli=<?php echo $dataku->kd_beli?>' class='btn btn-info btn-sm'>
						<span class='glyphicon glyphicon-edit'>EditData</span> 
					  </a>
					      <a href='?p=copy_data&kd_beli=<?php echo $dataku->kd_beli?>&tgl=<?php echo $dataku->tgl?>' class='btn btn-success btn-sm'>
						<span class='glyphicon glyphicon-edit'>CopyData</span> 
					  </a>
					      <a onclick="return confirm('Yakin Hapus?')" href='?p=beli_hapus&kd_beli=<?php echo $dataku->kd_beli?>' class='btn btn-danger btn-sm'>
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


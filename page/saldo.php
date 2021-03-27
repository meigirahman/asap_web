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
                            <center>DATA SALDO AWAL</center>
                        </div>
						
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                             
													  <a  href='home.php?p=saldo_input' class='btn btn-danger btn-sm'>
						<span class='glyphicon glyphicon-edit'></span> Tambah Nota 
					  </a>
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
									<tr  style="background: #f16721;color: #fff;"> 
									<th align="center">No</th>
									<th align="center">Tanggal</th>
									<th align="center">Nomor Bukti/BAST</th> 
									<th align="center">Jumlah</th>
									 
									
									<th>Aksi</th>
									</tr>
									</thead>
                                    <?
                                    $myquery="select * from tb_saldo where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' order by tgl asc ";
                                    $no=1;
                                    
                                    $daftar=mysqli_query($konek,$myquery) or die (mysql_error());
                                    while($dataku=mysqli_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr>
                                   <td align="center"><?php echo $no;?></td>
                                    <td ><?php echo $dataku->tgl?></td>
                                    <td ><?php echo $dataku->uraian?></td>
                                   <?
								   $sql=mysqli_query($konek,"select sum(jumlah*harga_satuan) as total from tb_saldo_rinci where kd_opd='$_SESSION[kd_opd]' and kd_saldo='$dataku->kd_saldo' group by kd_saldo") or die(mysqli_error());
									$jlh=mysqli_fetch_object($sql);
		
									?>
                                
 
		  <td style="text-align:right"><? echo number_format($jlh->total,2,',','.')."</td>"?>
 
 
									<td align="center">
                                    <a href='?p=sub_saldo&kd_saldo=<?php echo $dataku->kd_saldo?>&tgl=<?php echo $dataku->tgl?>' class='btn btn-warning btn-sm'>
						<span class='glyphicon glyphicon-edit'>Pilih</span> 
					  </a>
					  <a  href='?p=saldo_edit&kd_saldo=<?php echo $dataku->kd_saldo?>' class='btn btn-info btn-sm'>
						<span class='glyphicon glyphicon-edit'>EditData</span> 
					  </a>
					      <a  onclick="return confirm('Yakin Hapus?')" href='?p=saldo_hapus&kd_saldo=<?php echo $dataku->kd_saldo?>' class='btn btn-danger btn-sm'>
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


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
                            <center>Data</center>
                        </div>
						
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                             
													  <a  href='home.php?p=rek_input' class='btn btn-primary btn-sm'>
						<span class='glyphicon glyphicon-edit'></span> Tambahkan Data
					  </a>
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
									<tr  style="background: #276e95;color: #fff;"> 
									<th align="center">No</th> 
									<th align="center">Kode Rekening</th>
									<th align="center">Nama Barang</th>
									<th align="center">Jumlah</th>
									<th align="center">Satuan</th>
									<th align="center">Tanggal Kadaluarsa</th>
									<th align="center">Sisa hari</th>
									
									<th>Aksi</th>
									</tr>
									</thead>
                                    <?
                                    $myquery="select * from tb_stok where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]'";
                                    $no=1;
                                    
                                    $daftar=mysqli_query($konek,$myquery) or die (mysql_error());
                                    while($dataku=mysqli_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr>
                                   <td align="center"><?php echo $no;?></td>
                                    <td align="center"><?php echo $dataku->kd_brg?></td>
                                    <td><?php echo $dataku->uraian?></td>
                                    <td align="center"><?php echo $dataku->jumlah?></td>
                                    <td align="center"><?php echo $dataku->satuan?></td> 
                                    <td align="center"><?php echo $dataku->expired?></td> 
                                    <td align="center">
									<?php 
									 
                                
 
 
if($dataku->expired!=null)
{	
 
 $awal  = strtotime($dataku->expired); //Waktu awal

$akhir = time(); // Waktu sekarang atau akhir

$diff  = $awal - $akhir ;
$sisa=floor($diff / (60 * 60 * 24 ))+1;
 
 
 if($sisa<=0)
 {
	 if(date("Y-m-d", strtotime($dataku->expired))=='1970-01-01')
{
	echo "tanggal kadaluarsa tidak diisi";
}
else
{ echo "barang sudah kadaluarsa ";
 echo "<img src='d.png' width='25' />";
}
}
 else
 {
	 echo $sisa . ' hari sebelum kadaluarsa';
 }

}

else
{
	echo "tanggal kadaluarsa tidak diisi";
}
 ?>
 
 
 
 </td>
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


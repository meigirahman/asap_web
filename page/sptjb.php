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
										 
										 
										<label> Program Kegiatan
										 <select class="form-control" name="kd_keg" id="kd_keg">
                                    <option value="-" selected></option>
                                    <?php
                                    $sql0 = mysql_query("select kd_keg from tb_anggaran where bid='$_SESSION[bidang]' group by kd_keg");
						 
									$no=1;
										while($row0 = mysql_fetch_array($sql0)){
											$kd_keg = $row0['kd_keg'];
											
									$q = mysql_query("select * from ref_keg where kd_keg='$kd_keg' "); 
                                    while ($row1 = mysql_fetch_array($q))
									{
                                      echo "<option required='' value='".$row1['kd_keg']."'>".$row1['kd_keg']. ' | ' .$row1['nm_keg']."</option>";
                                    }
										}
                                    ?>
                                    </select>
								 
								 </label> 
								 
									<input type="hidden" id="bid" name="bid" value="<?php echo $_SESSION['bidang']; ?>">

									<div class="form-group">
									<label> Kode Rekening</label> 
										 <select class="form-control" name="kd_rinci" id="kd_rinci">
                                    <option value="-" selected></option>
 
                                    </select>
									</div>
									
										<script>

   
											$("#kd_keg").change(function(){

										// variabel dari nilai combo box provinsi
										var kd_keg = $("#kd_keg").val();
										var bid = $("#bid").val();
									   
										// mengirim dan mengambil data
										$.ajax({
											type: "POST",
											dataType: "html",
											url: "cari_rinci_keg.php",
											data     : 'kd_keg='+kd_keg+'&bid='+bid,
											success: function(msg){
											   
												// jika tidak ada data
												if(msg == ''){
													alert('Tidak ada data');
												}
											   
												// jika dapat mengambil data,, tampilkan di combo box kota
												else{
													$("#kd_rinci").html(msg);                                                     
												}
 
											}
										});    
									});
																		 
								</script>
									<br>
						 <input type="submit" value="Filter" class="btn btn-primary">	
 
						</form>
						<form action="">
                                        <a href='page/sptjb_excel.php?bln=<?PHP ECHO $_POST['bln']?>&bidang=<?PHP ECHO $_SESSION['bidang']?>&kd_keg=<?PHP ECHO $_POST['kd_keg']?>&kd_rinci=<?PHP ECHO $_POST['kd_rinci']?>'
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
	 
SURAT PERNYATAAN TANGGUNG JAWAB BELANJA								
					
								<br>
Bulan <?php echo bulan($_POST['bln']); ?> 2019									<br><br>
						
 	</font>		
</p>
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
									<tr  style="background: #276e95;color: #fff;"> 
									<th align="center" rowspan=2>No </th>
									<th align="center" rowspan=2>Kode Rekening </th>
									<th align="center" rowspan=2>Penerima</th>
									<th align="center" rowspan=2>Uraian</th>
									<th align="center" colspan=2>Bukti</th>
										<th align="center" rowspan=2>Nilai (Rp.)</th>
									</tr>
									
									<tr  style="background: #276e95;color: #fff;"> <th align="center" >Tanggal</th>
							 
									<th align="center" >Nomor</th>
									</tr>
									</thead>
									
                                    <?
                                    $myquery="select *, DATE_FORMAT(tgl, '%d-%m-%Y') as tgl from tb_data where jns='belanja' and jlh<=5000000 and periode='$_POST[bln]' and kd_keg='$_POST[kd_keg]' and kd_rinci='$_POST[kd_rinci]'";
                                    $no=1;
                                    
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr>
                                   <td align="center"><?php echo $no;?></td>
                                   <td align="center"><?php echo $dataku->kd_rinci;?></td>
                                   <td align="center"><?php echo $dataku->kpd;?></td>
                                   <td align="center"><?php echo $dataku->nm;?></td>
                                   <td align="center" width=100><?php echo $dataku->tgl;?></td>
                                   <td align="center"><?php echo $dataku->id_data;?></td>
                                   <td align="center" width=150 ><?php echo "Rp " . number_format($dataku->jlh,2,',','.');?></td>
  									
	   
									 

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


<?php
error_reporting(0);
$server = "localhost";
$username = "root";
$password = "";
$databaseName = "rka";

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
<form style=" display:inline;" action="" method='POST'> 
										  
										<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program Kegiatan</label> 
										 <select style="width:50%; display:inline;" class="form-control" name="kd_keg" id="kd_keg">
                                    <option value="-" selected></option>
                                    <?php
                                    $sql0 = mysql_query("select kd_keg from belanja where bid='$_SESSION[bidang]' group by kd_keg");
						 
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
								  <input type="submit" value="Pilih" class="btn btn-primary">	
									
 
									
										<script>

   
									$("#kd_keg").change(function(){

										// variabel dari nilai combo box provinsi
										var kd_keg = $("#kd_keg").val();

									   
										// tampilkan image load
										$("#imgLoad").show("");
									   
										// mengirim dan mengambil data
										$.ajax({
											type: "POST",
											dataType: "html",
											url: "cari_rinci.php",
											data: "kd_keg="+kd_keg,
											success: function(msg){
											   
												// jika tidak ada data
												if(msg == ''){
													alert('Tidak ada data');
												}
											   
												// jika dapat mengambil data,, tampilkan di combo box kota
												else{
													$("#kd_rinci").html(msg);                                                     
												}
											   
												// hilangkan image load
												$("#imgLoad").hide();
											}
										});    
									});
																		 
								</script>
								  
						
 
						</form>
						<form style=" display:inline;" action="">
                                        <a href='page/spj_excel.php?bln=<?PHP ECHO $_POST['bln']?>&bidang=<?PHP ECHO $_SESSION['bidang']?>&kd_keg=<?PHP ECHO $_POST['kd_keg']?>'
                                    	target='_blank'
                                    	class="btn btn-primary" ><i class='fa fa-download'></i> Excel</a>
                                        </form>
 
						</form>
	
	<div id="page-wrapper">
					<!-- /.row -->
		<div class="row">
			<div class="col-lg-12">
	 

					

						
								
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="table-responsive">

				  
							<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
								
								   <table class="table table-striped table-bordered table-hover"   >
								<thead>
								<tr  style="background: #276e95;color: #fff;"> 
								<th align="center" rowspan=2 width=180 >Kode Rekening</th> 
								<th align="center" rowspan=2 width=1680 >Uraian</th>  
								<th align="center" colspan=3 width=180 >Rincian  Perhitungan</th>  
								<th align="center" rowspan=2 width=180 >JUMLAH </th>  

								</tr>

								<tr  style="background: #276e95;color: #fff;"> 
								<th align="center" width=180  >Volume</th> 
								<th align="center" width=180  >Satuan</th> 
								<th align="center" width=180 >Harga Satuan</th>  									

								</tr>
								</thead>
								<tbody>
							 <tr style="background: #48adfb"> 
							 <? 
							  $satu = mysql_fetch_array(mysql_query("select sum(harga_satuan*volume) as jlh from sub_rinci_belanja WHERE kd_keg='$_POST[kd_keg]' and bid='$_SESSION[bidang]' group by rek1"));
							 $dua = mysql_fetch_array(mysql_query("select sum(harga_satuan*volume) as jlh from sub_rinci_belanja WHERE kd_keg='$_POST[kd_keg]' and bid='$_SESSION[bidang]' group by rek2"));
	?>
							 <td>5</td>
							 <td>BELANJA</td>
							 <td> </td> <td> </td> <td> </td> <? echo '<td style=\'text-align:right\'>'.number_format($satu['jlh'],2,',','.').'</td>';?> 
							 
							 	 <tr style="background: #6abbf9" > 
							 <td>5.2</td>
							 	
							
							 <td>BELANJA LANGSUNG</td>
							 <td> </td> <td> </td> <td> </td> <? echo '<td style=\'text-align:right\'>'.number_format($dua['jlh'],2,',','.').'</td>';?> 
							 
								<?php
								// $bdg = mysql_query("select * from tb_anggaran where kd_keg='$_POST[kd_keg]' and bid='$_SESSION[bidang]'");

									// while($bidang = mysql_fetch_array($bdg))
									// {
										// $kd_jenis = $bidang['kd_jenis'];
										// $kd_objek = $bidang['kd_objek'];
										// $kd_rinci = $bidang['kd_rinci'];
 
			
		 
			
$obj = mysql_query("SELECT * FROM belanja_rek3 where bid='$_SESSION[bidang]' group by  kd_rek  ");
while($objek = mysql_fetch_array($obj))
{
	$nm = mysql_fetch_array(mysql_query("select nm3 from rek3 where kd_rek='$objek[kd_rek]'"));		
	$tiga = mysql_fetch_array(mysql_query("select sum(harga_satuan*volume) as jlh from sub_rinci_belanja where rek3='$objek[kd_rek]' and kd_keg='$_POST[kd_keg]' and bid='$_SESSION[bidang]' group by rek3"));
			
	echo '<tr   style="background: #94cefb; " >
	<td>'.$objek['kd_rek'].'</td> 
	<td>'.$nm['nm3'].'</td>  
	<td> </td> <td> </td> <td> </td> <td style=\'text-align:right\'>'.number_format($tiga['jlh'],2,',','.').'</td> 
	</tr>';

	$obj2 = mysql_query("SELECT * FROM belanja_rek4  where rek3='$objek[kd_rek]' group by kd_rek");
	while($objek2 = mysql_fetch_array($obj2))
	{
		$nm = mysql_fetch_array(mysql_query("select nm4 from rek4 where  kd_rek='$objek2[kd_rek]'"));
		$empat = mysql_fetch_array(mysql_query("select sum(harga_satuan*volume) as jlh from sub_rinci_belanja where rek4='$objek2[kd_rek]' and kd_keg='$_POST[kd_keg]' and bid='$_SESSION[bidang]' group by rek4"));
											
		echo '<tr style="background: #a4d5fb" >
		<td>'.$objek2['kd_rek'].'</td> 
		<td>'.$nm['nm4'].'</td>  
		<td> </td> <td> </td> <td> </td> <td style=\'text-align:right\'>'.number_format($empat['jlh'],2,',','.').'</td> 
		</tr>';
	
		$obj3 = mysql_query("SELECT * FROM belanja where rek4='$objek2[kd_rek]' and bid='$_SESSION[bidang]' and kd_keg='$_POST[kd_keg]' ");
		while($objek3 = mysql_fetch_array($obj3))
		{
			$rinci = mysql_fetch_array(mysql_query("select sum(harga_satuan*volume) as jlh from sub_rinci_belanja where kd_rek='$objek3[kd_rek]' and kd_keg='$_POST[kd_keg]' and bid='$_SESSION[bidang]' group by kd_rek"));
			echo '<tr style="background: #d0f0f8"  >
			<td>'.$objek3['kd_rek'].'</td> 
			<td>'.$objek3['uraian'].'</td> 
			<td> </td> <td> </td> <td> </td> 
			<td style=\'text-align:right\'>'.number_format($rinci['jlh'],2,',','.').'</td> 
			</tr>';
	 
			$obj4 = mysql_query("SELECT * FROM rinci_belanja where kd_blnj='$objek3[kd_blnj]'  ");
			while($objek4 = mysql_fetch_array($obj4))
			{
				$subrinci = mysql_fetch_array(mysql_query("select sum(harga_satuan*volume) as jlh from sub_rinci_belanja where kd_rinci='$objek4[kd_rinci]' and kd_keg='$_POST[kd_keg]' group by kd_rinci"));
				echo '<tr style="background: #e5f6fa" >
				<td> </td> 
				<td>- '.$objek4['uraian'].'</td> 
				<td> </td> <td> </td> <td> </td> 	<td style=\'text-align:right\'>'.number_format($subrinci['jlh'],2,',','.').'</td> 
				</tr>';
		 
				$obj5 = mysql_query("SELECT * FROM sub_rinci_belanja where kd_rinci='$objek4[kd_rinci]' and kd_keg='$_POST[kd_keg]' ");
				while($objek5 = mysql_fetch_array($obj5))
				{
				echo '<tr style="background: #e5f6fa" >
				<td> </td> 
				<td>--- '.$objek5['uraian'].'</td> 
				<td><center>'.$objek5['volume'].'</td> 
				<td><center>'.$objek5['satuan'].'</td>';  
echo "<td style='text-align:right'>".number_format($objek5['harga_satuan'],2,',','.')."</td>";
				echo "<td style='text-align:right'>".number_format($jlh=$objek5['volume']*$objek5['harga_satuan'],2,',','.')."</td> 
				</tr>";
 
							}
						}
					}
				 
				}
			}			
?>

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


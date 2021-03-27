
   <form action='' method='POST' enctype='multipart/form-data' class='form-horizontal'>


                  <div class="col-lg-12">
                    <div class="panel panel-success">
				<div class='panel-body'>	
  <div class='row'>
                                <div class='col-lg-8'>	
<div class="panel panel-info">		
<div class="panel-heading">
                            <center>View Data</center>
                        </div>										
	<?
	$sql_data   = "select * from tb_pakai_rinci where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and kd_pakai='$_GET[kd_pakai]' ";
	
	$mysql_data = mysqli_query($konek, $sql_data) or die ("Query Data Error :" .mysql_error()); 
	
?>	 	
			<table class="table table-striped table-bordered bootstrap-datatable responsive" id="saldo">
			<thead>
			<tr>
				<th><center>No</th>
				<th><center>Uraian</th>
				<th><center>Volume</th>
				<th><center>Satuan</th>
				<th><center>Harga Satuan</th>
				<th><center>Jumlah</th>
				<th><center>Aksi</th>
			</tr>
			</thead>
			<tbody>
			 
<?
	$no=1;
	while($data=mysqli_fetch_array($mysql_data))
	{ 
	echo "
		  <tr>  
		  
		  <td><center>$no</td>
		  <td>$data[uraian]</td>
		  <td><center>$data[jumlah]</td>
		  <td><center>$data[satuan]</td>
		  <td style='text-align:right'>Rp " . number_format($data['harga_satuan'],2,',','.')."</td>
 
		  <td style='text-align:right'>";
		  
		  $jumlah=$data['jumlah']*$data['harga_satuan']; 
		  echo "Rp " . number_format($jumlah,2,',','.')."</td>";?>

				  <td>
					<center>
					  <a href="?p=sub_pakai_edit&kd_pakai=<? echo $_GET['kd_pakai']; ?>&kd_pakai_rinci=<? echo $data['kd_pakai_rinci']; ?>&tgl=<? echo $_GET['tgl']; ?>" class='btn btn-success btn-sm'>
						Edit 
					  </a><a onclick="return confirm('Yakin Hapus?')" href="?p=sub_pakai_hapus&kd_pakai=<? echo $_GET['kd_pakai']; ?>&kd_pakai_rinci=<? echo $data['kd_pakai_rinci']; ?>&tgl=<? echo $_GET['tgl']; ?>" class='btn btn-danger btn-sm'>
						Hapus 
					  </a>
					  
					</center>
				  </td>
			  </tr>
			 <?
	$no++;
	}
	?>
 </tbody></table>
        </form>
</div>                     
</div>                     
<div style='margin-left: 50px' class='col-lg-3'>	
 <div class="panel panel-info">
									<div class="panel-heading">
									  <center><b>Input Data</b></center>
									</div>
									</div> 
  <form role="form" name="tes" method="post" action="home.php?p=sub_pakai_simpan">

					 <input type="hidden" name="kd_pakai" value="<? echo $_GET['kd_pakai'] ?>">
				<input type="hidden" name="kd_opd" value="<? echo $_SESSION['kd_opd'] ?>">
				<input type="hidden" name="kd_sub" value="<? echo $_SESSION['kd_sub'] ?>">
				<input type="hidden" name="tgl" value="<? echo $_GET['tgl'] ?>">
				 
                              
                             
				<?

				 
				 
				$sql = "(select *,sum(jumlah) as stok from tb_stok where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and tgl<='$_GET[tgl]' group by kd_brg )";
			 
				$hs = mysqli_query($konek,$sql);

				while($rs = mysqli_fetch_array($hs)){
				   $json[] = array(
						'value' => $rs['uraian'] ,
				'label' => $rs['uraian'],

				'kd_brg' =>$rs['kd_brg'] ,
				'uraian' =>$rs['uraian'] ,
				'satuan' =>$rs['satuan'] ,
				'harga_satuan' =>$rs['harga_satuan'] , 
				'stok' =>$rs['stok'] , 

					);
				}

				?>

<link rel="stylesheet" href="css/themes/base/jquery-ui.css" />
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/ui/jquery-ui.js"></script> 
<script>
      var uraian = <?php echo json_encode($json); ?>; 
      $(document).ready(function() { 
        $("#uraian").autocomplete({
          source: uraian,
            select: function( event, ui ) { 

			$('#uraian').val(ui.item.uraian);
			$('#satuan').val(ui.item.satuan);			
			$('#kd_brg').val(ui.item.kd_brg);			
			$('#harga_satuan').val(ui.item.harga_satuan); 
			$('#stok').val(ui.item.stok); 

            }
        });


      });
</script>

 
	 
									<div class="form-group"> 						
										<label> Uraian</label> 
										<input class="form-control" placeholder='Search' type="text" name="uraian"  id="uraian"  />
								 
									</div>
									
									<div class="form-group"> 						
										<label> Kode Barang</label> 
										<input class="form-control" type="text" readonly name="kd_brg"  id="kd_brg"  />
								 
									</div>

									<div class="form-group"> 						
										<label> Jumlah</label> 
										<input class="form-control" type="text" required= "" name="jumlah" id="jumlah"  />
									</div>

									<div class="form-group"> 				
										<label> Satuan</label> 
										<input class="form-control" type="text" required= "" name="satuan" id="satuan"  />
									</div>									
																	
									<div class="form-group"> 				
										<label> Harga Satuan</label> 
										<input class="form-control" type="text" readonly required= "" name="harga_satuan" id="harga_satuan"  />
									</div>
																	
									<div class="form-group"> 				
										<label> Stok</label> 
										<input readonly class="form-control" type="text" required= "" name="stok" id="stok"  />
									</div>
								 
                                  <div align="center"> 
                                    <input name="fok" type="submit" id="fok" value="Simpan" class="btn btn-primary">
                                    <input name="fulang" type="reset" id="fulang" value="Reset" class="btn btn-default">
                                    <input name="fulang2" type="button" id="fulang2" value="Kembali" onclick="javascript:location.href='?p=pakai'" class="btn btn-warning">     </div>
                        
								 
                                </form>
								
								 </div>
	</div>
 	</div>		
 	</div>		
 	</div>		
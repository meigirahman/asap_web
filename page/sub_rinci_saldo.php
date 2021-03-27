 <?php
 
$konek = mysqli_connect("localhost","root","","asap");
 ?>
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
	$sql_data   = "select * from tb_saldo_rinci where kd_opd='$_GET[kd_opd]' and kd_saldo='$_GET[kd_saldo]' ";
	
	$mysql_data = mysqli_query($konek, $sql_data) or die ("Query Data Error :" .mysql_error()); 
	
?>	 	
			<table class="table table-striped table-bordered bootstrap-datatable responsive" id="saldo">
			<thead>
			<tr>
				<th>No</th>
				<th>Uraian</th>
				<th>Volume</th>
				<th>Satuan</th>
				<th>Harga Satuan</th>
				<th>Jumlah</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
				 
				<input type="hidden" name="kd_saldo_rinci" value="<? echo $_GET['kd_saldo_rinci'] ?>">
			 
<?
	$no=1;
	while($data=mysqli_fetch_array($mysql_data))
	{ 
	echo "
		  <tr>  
		  
		  <td>$no</td>
		  <td>$data[uraian]</td>
		  <td>$data[jumlah]</td>
		  <td>$data[satuan]</td>
		  <td>Rp " . number_format($data['harga_satuan'],2,',','.')."</td>
 
		  <td>";
		  
		  $jumlah=$data['jumlah']*$data['harga_satuan']; 
		  echo "Rp " . number_format($jumlah,2,',','.')."</td>

				  <td>
					<center>
					  <a href='?p=sub_rinci_belanja_hapus&kd_opd=$data[kd_opd]&kd_saldo_rinci=$data[kd_saldo_rinci]' class='btn btn-danger btn-sm'>
						Hapus 
					  </a>
					  
					</center>
				  </td>
			  </tr>
			 ";
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
  <form role="form" name="tes" method="post" action="home.php?p=sub_rinci_saldo_simpan">

					 <input type="hidden" name="kd_saldo" value="<? echo $_GET['kd_saldo'] ?>">
				<input type="hidden" name="kd_opd" value="<? echo $_GET['kd_opd'] ?>">
				<input type="hidden" name="tgl" value="<? echo $_GET['tgl'] ?>">
				 
                              
                             
				<?

				$conn = mysql_connect("localhost","root","");
				mysql_select_db("asap");
				$sql = "select * from standar";
				$hs = mysql_query($sql);

				while($rs = mysql_fetch_array($hs)){
				   $json[] = array(
						'value' => $rs['uraian'] ,
				'label' => $rs['uraian'],

				'kd_brg' =>$rs['kd_brg'] ,
				'uraian' =>$rs['uraian'] ,
				'satuan' =>$rs['satuan'] ,
				'harga' =>$rs['harga'] , 

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
			$('#harga_satuan').val(ui.item.harga); 

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
										<input class="form-control" type="text" name="kd_brg"  id="kd_brg"  />
								 
									</div>

									<div class="form-group"> 						
										<label> Volume</label> 
										<input class="form-control" type="text" required= "" name="jumlah" id="jumlah"  />
									</div>

									<div class="form-group"> 				
										<label> Satuan</label> 
										<input class="form-control" type="text" required= "" name="satuan" id="satuan"  />
									</div>									
																	
									<div class="form-group"> 				
										<label> Harga Satuan</label> 
										<input class="form-control" type="text" required= "" name="harga_satuan" id="harga_satuan"  />
									</div>
									
								 
                                  <div align="center"> 
                                    <input name="fok" type="submit" id="fok" value="Simpan" class="btn btn-primary">
                                    <input name="fulang" type="reset" id="fulang" value="Reset" class="btn btn-default">
                                    <input name="fulang2" type="button" id="fulang2" value="Batal" onClick="javascript:history.back()" class="btn btn-warning">
                                  </div>
                        
								 
                                </form>
								
								 </div>
	</div>
 	</div>		
 	</div>		
 	</div>		
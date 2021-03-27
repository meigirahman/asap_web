 
    


                  <div class="col-lg-12">
                    <div class="panel panel-success">
				<div class='panel-body'>	
  <div class='row'>
                                 

	
<div style='margin-left: 50px' class='col-lg-3'>	
 <div class="panel panel-info">
									<div class="panel-heading">
									  <center><b>Edit Data</b></center>
									</div>
									</div> 
  <form role="form" name="tes" method="post" action="home.php?p=sub_pakai_update">

					 <input type="hidden" name="kd_pakai" value="<? echo $_GET['kd_pakai'] ?>">
					 <input type="hidden" name="kd_pakai_rinci" value="<? echo $_GET['kd_pakai_rinci'] ?>">
				<input type="hidden" name="kd_opd" value="<? echo $_SESSION['kd_opd'] ?>">
				<input type="hidden" name="kd_sub" value="<? echo $_SESSION['kd_sub'] ?>">
				<input type="hidden" name="tgl" value="<? echo $_GET['tgl'] ?>">
				 
                              
                             
				<?

			 
			 
				$sql = "select * from standar";
				$hs = mysqli_query($konek,$sql);

				while($rs = mysqli_fetch_array($hs)){
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
	 	<?

$myquery="select * from tb_pakai_rinci where kd_pakai_rinci='$_GET[kd_pakai_rinci]' limit 1";
                                    
                                    
                                    $daftar=mysqli_query($konek,$myquery) or die (mysql_error());
                                    $dataku=mysqli_fetch_object($daftar);
?>	
 
									
									
									<div class="form-group"> 						
										<label> Uraian</label> 
										<input class="form-control" readonly=y  placeholder='Search' type="text" name="uraian" value="<?php echo $dataku->uraian?>" id="uraian"  />
								 
									</div>
									
									<div class="form-group"> 						
										<label> Kode Barang</label> 
										<input class="form-control" readonly=y type="text" name="kd_brg"  id="kd_brg" value="<?php echo $dataku->kd_brg?>" />
								 
									</div>

									<div class="form-group"> 						
										<label> Jumlah</label> 
										<input class="form-control" type="text" required= "" name="jumlah" id="jumlah"   value="<?php echo $dataku->jumlah?>"/>
									</div>

									<div class="form-group"> 				
										<label> Satuan</label> 
										<input class="form-control" type="text" required= "" name="satuan" id="satuan"   value="<?php echo $dataku->satuan?>"/>
									</div>									
																	
									<div class="form-group"> 				
										<label> Harga Satuan</label> 
										<input class="form-control" type="text" required= "" name="harga_satuan" id="harga_satuan"  value="<?php echo $dataku->harga_satuan?>" />
									</div>
									
								 
                                  <div align="center"> 
                                    <input name="fok" type="submit" id="fok" value="Simpan" class="btn btn-primary">
                                    <input name="fulang" type="reset" id="fulang" value="Reset" class="btn btn-default">
                                    <input name="fulang2" type="button" id="fulang2" value="Kembali" onclick="javascript:location.href='?p=pakai'" class="btn btn-warning">
                                  </div>
                        
								 
                                </form>
								
								 </div>
	</div>
 	</div>		
 	</div>		
 	</div>		
    <section class="content">
	
	<link rel="stylesheet" href="css/themes/base/jquery-ui.css" />
   <script src="js/jquery-1.9.1.js"></script>
   <script src="js/ui/jquery-ui.js"></script>
   <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
   
   

		
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-warning">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
 
                            
											<?

				 
				 
				$sql = "(select * from tb_stok where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' group by kd_brg )";
			 
				$hs = mysqli_query($konek,$sql);

				while($rs = mysqli_fetch_array($hs)){
				   $json[] = array(
						'value' => $rs['uraian'] ,
				'label' => $rs['uraian'],

				'kd_brg' =>$rs['kd_brg'] ,
				'uraian' =>$rs['uraian'] ,
			 

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
			 

            }
        });


      });
</script> 
								
                              <form role="form" name="tes" method="POST" action="home.php?p=bukupembantu_view">

                                      
                               

								<div class="col-lg-3">
								 

                                  <div class="panel panel-warning">
									<div class="panel-heading">
									  <center><b>Cari Barang</b></center>
									</div>
                                </div>
                               
						 <div class="form-group"> 						
										<label> Uraian</label> 
										<input class="form-control" placeholder='Search' type="text" name="uraian"  id="uraian"  />
								 
									</div>
									
									<div class="form-group"> 						
										<label> Kode Barang</label> 
										<input class="form-control" type="text" readonly name="kd_brg"  id="kd_brg"  />
								 
									</div>
								
							 			
									 
									
									 
									
									  
									 
									
									
								 
								
                               
                                  <div align="center"> 
                                    <input name="fok" type="submit" id="fok" value="Tampilkan Laporan" class="btn btn-primary">
                                    
                                  </div>
                                </div>
								 
                                </form>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) --> 
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        
    </section>
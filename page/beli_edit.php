<?

$myquery="select * from tb_beli where kd_beli='$_GET[kd_beli]' limit 1 ";
                                    
                                    
                                    $daftar=mysqli_query($konek,$myquery) or die (mysql_error());
                                    $dataku=mysqli_fetch_object($daftar);
?>										<section class="content">
		<div id="wrapper">
          <div id="page-wrapper">
           <div class="row">
                <div class="col-lg-3">
                    <div class="panel panel-warning">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
 
                            
							<div class="col-lg-12">
                              <form role="form" name="tes" method="post" action="home.php?p=beli_update">

                                      
                               
                                <!-- /.col-lg-6 (nested) -->
								

								<div class="col-lg-12">
                                  <div class="panel panel-warning">
									<div class="panel-heading">
									  <center><b>Form Input DATA</b></center>
									</div>
                                </div>
                                </div>
						 
								
							 <input class="form-control" type="hidden" required= "" value="<?php echo $dataku->kd_beli?>" name="kd_beli" id="kd_beli"  />
									
									<div class="form-group">						
										<label> Tanggal</label> 
										<input class="form-control" type="date" required= "" value="<?php echo $dataku->tgl?>" name="tgl" id="tgl"  />
									</div>
									
									<div class="form-group">			
										<label> Nomor Bukti / BAST</label> 
										<input class="form-control" type="text" required= "" value="<?php echo $dataku->uraian?>" name="uraian" id="uraian"  />
									</div>
									
									 
									
									
								</div>
								
                                <div class="col-lg-12">
                                  <div align="center"> 
                                    <input name="fok" type="submit" id="fok" value="Simpan" class="btn btn-primary">
                                    <input name="fulang" type="reset" id="fulang" value="Reset" class="btn btn-default">
                                    <input name="fulang2" type="button" id="fulang2" value="Batal" onClick="javascript:history.back()" class="btn btn-warning">
                                  </div>
                                </div>
								 
                                </form>
								 </div>
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
        </div>
        <!-- /#page-wrapper -->

     </section>
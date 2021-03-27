<?

$myquery="select * from tb_opd where id='$_GET[id]' limit 1 ";
                                    
                                    
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
                              <form role="form" name="tes" method="post" action="home.php?p=simda_update">

                                      
                               
                                <!-- /.col-lg-6 (nested) -->
								

								<div class="col-lg-12">
                                  <div class="panel panel-warning">
									<div class="panel-heading">
									  <center><b>Form Edit Data</b></center>
									</div>
                                </div>
                                </div>
						 
								
							 <input class="form-control" type="hidden" required= "" value="<?php echo $dataku->id?>" name="id" id="id"  />
									
									<div class="form-group">						
										<label> Perangkat Daerah</label> 
										<input class="form-control" type="text" readonly required= "" value="<?php echo $dataku->nama?>" name="nama" id="nama"  />
									</div>
									
									<div class="form-group">			
										<label> Nilai Belanja LRA Simda</label> 
										<input class="form-control" type="text" required= "" value="<?php echo $dataku->simda?>" name="simda" id="simda"  />
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
 
		<div id="wrapper">
          <div id="page-wrapper">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
 
                            
							<div class="col-lg-6">
                              <form role="form" name="tes" method="post" action="home.php?p=user_update">

                                 
                                </div>
                                <!-- /.col-lg-6 (nested) -->
								

								<div class="col-lg-12">
                                  <div class="panel panel-warning">
									<div class="panel-heading">
									  <center><b>Data Penandatangan</b></center>
									</div>
                                </div>
                                </div>
<?						$myquery="select * from tb_ttd where id='$_GET[id]'";
                                    $no=1;
                                    
                                    $daftar=mysqli_query($konek,$myquery) or die (mysql_error());
                                    $dataku=mysqli_fetch_object($daftar);
?>
								<div class="col-lg-12">
							 
							

								<div class="form-group">
								<label> Nama</label> 
								<input class="form-control" type="hidden" name="id" value="<?php echo $dataku->id?>"   />
								<input class="form-control" type="text" name="nama" value="<?php echo $dataku->nama?>"   />
								</div>
								
								<div class="form-group">
								<label> NIP</label> 
								<input class="form-control" type="text" required= "" name="nip" value="<?php echo $dataku->nip?>"  />
								</div>
							
								<div class="form-group">
								<label> Jabatan</label> 
								<input class="form-control" readonly type="text" required= "" name="jabatan" 	value="<?php echo $dataku->jabatan?>"    />
								</div>
 
							 
                            
							 
    </div><div class="col-lg-6">
									
										
								</div>
								
                                <div class="col-lg-12">
                                  <div align="center"> 
                                    <input name="fok" type="submit" id="fok" value="Simpan" class="btn btn-primary">
                                    <input name="fulang" type="reset" id="fulang" value="Reset" class="btn btn-default">
                                    <input name="fulang2" type="button" id="fulang2" value="Batal" onClick="javascript:history.back()" class="btn btn-warning">
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
        </div>
        <!-- /#page-wrapper -->

    </div>
 
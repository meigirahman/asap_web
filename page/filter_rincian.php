
	 
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-warning">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">

                              <form role="form" name="tes" method="POST" action="pdf_rincian.php">

								<div class="col-lg-3">
 
								<div class="panel panel-warning">
									<div class="panel-heading">
									  <center><b>Rincian Barang Persediaan</b></center>
									</div>
                                </div>
                               
								<div class="form-group">						
									<label> Tanggal Penandatangan</label> 
									<input class="form-control" type="date" required= "" name="ttd" id="ttd"  />
								</div>
								
							 			
									<div class="form-group">		
										<label> Pilih Periode Laporan</label> 
										<select class="form-control" id="tgl"name="tgl">
											<option value="2021-01-31">Januari</option>
											<option value="2021-02-28">Februari</option>
											<option value="2021-03-31">Maret</option>
											<option value="2021-04-30">April</option>
											<option value="2021-05-31">Mei</option>
											<option value="2021-06-30">Juni</option> 
											<option value="2021-07-31">Juli</option> 
											<option value="2021-08-31">Agustus</option> 
											<option value="2021-09-30">September</option> 
											<option value="2021-10-31">Oktober</option> 
											<option value="2021-11-30">November</option> 
											<option value="2021-12-31">Desember</option> 
 
									</select> 
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

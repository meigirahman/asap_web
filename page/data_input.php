<?php		
include "tanggal.php";		
include "koneksi.php";
?>

<link rel="stylesheet" href="css/themes/base/jquery-ui.css" />
   <script src="js/jquery-1.9.1.js"></script>
   <script src="js/ui/jquery-ui.js"></script>
   <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
   
   
<html>
	<head>
    <title> ENTRY DATA</title>
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<div id="wrapper">
          <div id="page-wrapper">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
 
                            
							<div class="col-lg-6">
                              <form role="form" name="tes" method="post" action="home.php?p=data_simpan">

                                 
                                </div>
                                <!-- /.col-lg-6 (nested) -->
								

								<div class="col-lg-12">
                                  <div class="panel panel-success">
									<div class="panel-heading">
									  <center><b>Form Input DATA</b></center>
									</div>
                                </div>
                                </div>
						
                                
								
								

											
								<div class="col-lg-6">
									<div class="form-group">
										<label> Program Kegiatan</label> 
										 <select class="form-control" name="kd_keg" id="kd_keg">
                                    <option value="-" selected></option>
                                    <?php
                                    $q = mysql_query("select * from tb_anggaran where bid='$_SESSION[bidang]' group by kd_keg order by kd_prog, kd_keg"); 
                                    while ($row1 = mysql_fetch_array($q))
									{
										 $nm=mysql_fetch_array(mysql_query("select * from ref_keg where kd_prog='$row1[kd_prog]' and kd_keg='$row1[kd_keg]'"));
                                      echo "<option required='' value='".$row1['kd_keg']."'>".$row1['kd_keg']. ' | ' .$nm['nm_keg']."</option>";
                                    }
                                    ?>
									
                                    </select>
									</div>
									
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
                      
								
								
									
 
								<div class="form-group">
                                  <label>Tanggal Transaksi</label> 
                                     <input class="form-control" type="date" required= "" name="tgl" id="tgl"  value="<?php echo $cetak =date('Y-m-d') ?>"/>
                                </div>
								
								<div class="form-group">
										<label> Jenis Transaksi</label> 
										<select class="form-control" name="jns" id="jns">
                                    <option value="" selected>-Pilih-</option>
                                    <option value="sptjb" >SPTJB</option>
                                    <option value="bkup" >BKU-P</option>
                                    <option value="sp2d" >SP2D</option>
                                    <option value="ppn" >PPN</option>
                                    <option value="pph21" >PPH-21</option>
                                    <option value="pph22" >PPH-22</option>
                                    <option value="pph23" >PPH-23</option>
                                    <option value="uyhd" >UYHD</option>
                                    <option value="belanja" >BELANJA</option>
                                    <option value="pajak" >PAJAK</option>
                                    <option value="bku" >BKU</option>
                                    </select>
									</div>
									
									<div class="form-group">
										<label> Kepada</label> 
										<input class="form-control" type="text" required= "" name="kpd" id="kpd"  />
									</div>
    </div><div class="col-lg-6">
									
																		<div class="form-group">
										<label> Nama, Nomor & Tgl Dokumen</label> 
										<input class="form-control" type="text" required= "" name="uraian" id="uraian"  />
									</div>
																		<div class="form-group">
										<label> Jumlah</label> 
										<input class="form-control" type="text" required= "" name="jlh" id="jlh"  />
									</div>
									<div class="form-group">
										<label> Debet / Kredit</label> 
										<select class="form-control" name="dk" id="dk">
                                    <option value="" selected>-Pilih-</option>
                                    <option value="d" >Debet</option>
                                    <option value="k" >Kredit</option>
                                
                                    </select>
									</div>
									<div class="form-group">
										<label> LS / UP / GU / TU</label> 
										<select class="form-control" name="dana" id="dana">
                                    <option value="" selected>-Pilih-</option>
                                    <option value="ls" >LS</option>
                                    <option value="up" >UP</option>
                                    <option value="gu" >GU</option>
                                    <option value="tu" >TU</option>
                                
                                    </select>
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
	</body>
										
</html>

 <?php
 
$konek = mysqli_connect("localhost","root","","asap");
 ?>
  
	<form action='' method='POST' enctype='multipart/form-data' class='form-horizontal'>


                <div class="col-lg-12">
                    <div class="panel panel-success">
			<div class='panel-body'>	
  <div class='row'>
                                <div class='col-lg-6'>	<div class="panel panel-info">		
<div class="panel-heading">
                            <center>View Data</center>
                        </div>					
	<?
	
	$sql_data   = "select * from tb_beli ";
	
	$mysql_data = mysqli_query($konek, $sql_data) or die ("Query Data Error :" .mysql_error()); 
	?>
 	
			<table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="saldo">
			<thead>
			<tr> 
				<th>No</th>
				<th>Tanggal</th>
				<th>Nomor</th>
				<th>Jumlah</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
<?
	$no=1;
	while($data=mysqli_fetch_array($mysql_data))
	{ 
	echo "
		  <tr> 
		  
		  <td>$no</td>
		  <td>$data[tgl]</td>
		  <td>$data[uraian]</td>
		  <td>Rp.  </td>

				  <td>
					<center>
					  <a href='?p=sub_rinci_belanja&kd_opd=$data[kd_opd]&kd_beli=$data[kd_beli]' class='btn btn-primary btn-sm'>
						<span class='glyphicon glyphicon-edit'>Pilih</span> 
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
</div>       </div>                 
<div class='col-lg-6'>	

 <div class="panel panel-info">
									<div class="panel-heading">
									  <center><b>Input Data</b></center>
									</div>
								
							<form role="form" name="tes" method="post" action="home.php?p=rinci_belanja_simpan">

                                     <input type="hidden" name="kd_prog" value="<? echo $_GET['kd_prog'] ?>">
                                <input type="hidden" name="kd_keg" value="<? echo $_GET['kd_keg'] ?>">
                                <input type="hidden" name="kd_rek" value="<? echo $_GET['kd_rek'] ?>">
                                <input type="hidden" name="kd_blnj" value="<? echo $_GET['kd_blnj'] ?>">
                               <input type="hidden" name="kd1" value="<? echo $_GET['kd1'] ?>">
							 <input type="hidden" name="kd2" value="<? echo $_GET['kd2'] ?>">
							 <input type="hidden" name="kd3" value="<? echo $_GET['kd3'] ?>">
							 <input type="hidden" name="kd4" value="<? echo $_GET['kd4'] ?>">
							 <input type="hidden" name="kd5" value="<? echo $_GET['kd5'] ?>">
								
								<div class="form-group">
																		
										<label> Tanggal</label> 
										<input class="form-control" type="date" required= "" name="tgl" id="tgl"  />
									</div>
									
									<div class="form-group">
																		
										<label> Nomor</label> 
										<input class="form-control" type="text" required= "" name="uraian" id="uraian"  />
									</div>
									
								
								
                                
                                  <div align="center"> 
                                    <input name="fok" type="submit" id="fok" value="Simpan" class="btn btn-primary">
                                    <input name="fulang" type="reset" id="fulang" value="Reset" class="btn btn-default">
                                    <input name="fulang2" type="button" id="fulang2" value="Batal" onClick="javascript:history.back()" class="btn btn-warning">
                                  </div>
                                
								 
                                </form>
        </div>	</div>
	</div>
 	</div>								
 	</div>								
 	</div>								

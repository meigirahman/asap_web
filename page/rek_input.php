

<?
 
$sql = "select * from rek5";
$hs = mysqli_query($konek,$sql);

while($rs = mysqli_fetch_array($hs)){

   $json[] = array(
		'value' => $rs['kd_aset1'].".".$rs['kd_aset2'].".".$rs['kd_aset3'].".".$rs['kd_aset4'].".".$rs['kd_aset5']." ".$rs['nm_aset5'],
'label' => $rs['kd_aset1'].".".$rs['kd_aset2'].".".$rs['kd_aset3'].".".$rs['kd_aset4'].".".$rs['kd_aset5']." ".$rs['nm_aset5'],

'nama' =>$rs['kd_aset1'] ,
'nama2' =>$rs['kd_aset2'] ,
'nama3' =>$rs['kd_aset3'] ,
'nama4' =>$rs['kd_aset4'] ,
'nama5' =>$rs['kd_aset5'] ,

	);
}
 
 
?>

<link rel="stylesheet" href="css/themes/base/jquery-ui.css" />
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/ui/jquery-ui.js"></script>  
		<script type="text/javascript" src="ajax.js">//memanggil script ajax</script>
<script>
      var no_kk = <?php echo json_encode($json); ?>;
       
	        
      $(document).ready(function() { 
        $("#no_kk").autocomplete({
          source: no_kk,
            select: function( event, ui ) { 

			$('#rek1').val(ui.item.nama);
			$('#rek2').val(ui.item.nama2);			
			$('#rek3').val(ui.item.nama3);
			$('#rek4').val(ui.item.nama4);
			$('#rek5').val(ui.item.nama5); 
			 

            }
        });
		 
 });
		 
     
</script>
<section class="content">
		<div id="wrapper">
          <div id="page-wrapper">
           <div class="row">
                <div class="col-lg-3">
                    <div class="panel panel-warning">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
 
                            
							<div class="col-lg-12">
                             
                                      
                               
                                <!-- /.col-lg-6 (nested) -->
								

								<div class="col-lg-12">
                                  <div class="panel panel-warning">
									<div class="panel-heading">
									  <center><b>Form Input DATA</b></center>
									</div>
                                </div>
                                </div>
						 


 
<form method="post" action="?p=rek_simpan" name="frm_ajax">
<label> Cari Rekening</label> 
<input class="form-control" placeholder='Search' type="text" name="no_kk"  id="no_kk"  />
			 
<table class='table table-condensed table-bordered'>
         <tbody>
         <tr>

			<input size='1' type='hidden' id='rek1' name='kd_aset1'>
			<input size='1' type='hidden' id='rek2' name='kd_aset2'>
			<input size='1' type='hidden' id='rek3' name='kd_aset3'>
			<input size='1' type='hidden' id='rek4' name='kd_aset4'>
			<input size='1' type='hidden' id='rek5' name='kd_aset5'> 
			</tr>
	
	 <div class="form-group">			
										<label> Uraian</label> 
										<input class="form-control" type="text" required= "" name="uraian" id="uraian"  />
									</div>
										 <div class="form-group">			
										<label> Satuan</label> 
										<input class="form-control" type="text" required= "" name="satuan" id="satuan"  />
									</div>
 </tbody>

</table>
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
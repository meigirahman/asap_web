

<?
 include "conn.php";
$sql = "select * from rek5";
$hs = mysql_query($sql) ;

while($rs = mysql_fetch_array($hs)){

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



 
<form method="post" name="frm_ajax">
<input class="form-control" placeholder='Search' type="text" name="no_kk"  id="no_kk" size="30" maxlength="16"/>
				<div id="pesan_kirim" style="display:none"></div>
<table class='table table-condensed table-bordered'>
         <tbody>
         <tr>

			<input size='1' type='text' id='rek1' name='rek1'>
			<input size='1' type='text' id='rek2' name='rek2'>
			<input size='1' type='text' id='rek3' name='rek3'>
			<input size='1' type='text' id='rek4' name='rek4'>
			<input size='1' type='text' id='rek5' name='rek5'>
			<input  type='text' id='kd_beli' name='kd_beli'>
			</tr>
	
	 
 </tbody>

</table>
 <input type="button" onclick="kirim_form();" value="Kirim"/>
</form>
 
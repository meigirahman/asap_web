<?

$conn = mysql_connect("localhost","root","");
mysql_select_db("rka");
$sql = "select * from standar";
$hs = mysql_query($sql);

while($rs = mysql_fetch_array($hs)){
   $json[] = array(
		'value' => $rs['uraian'].".".$rs['satuan'].".".$rs['harga'],
'label' => $rs['uraian'].".".$rs['satuan'].".".$rs['harga'],

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
      var no_kk = <?php echo json_encode($json); ?>; 
      $(document).ready(function() { 
        $("#no_kk").autocomplete({
          source: no_kk,
            select: function( event, ui ) { 

			$('#uraian').val(ui.item.uraian);
			$('#satuan').val(ui.item.satuan);			
			$('#harga_satuan').val(ui.item.harga); 

            }
        });


      });
</script>
	
                                     <input class="form-control" placeholder='Search' type="text" name="no_kk"  id="no_kk"  />

                                 
                                     
                                  
                               
                         
              
                   
  

<?php
    include "conn.php";
   
    $sql="select * from ref_rinci where kd_objek='".$_POST["kd_objek"]."'";
    $q=mysql_query($sql);	?>
	
	
        <option value="">Pilih Rekening</option><br>
		
		<?php
    while($rek2=mysql_fetch_array($q)){
   
    ?>
        <option value="<?php echo $rek2["kd_rinci"]; ?>"><?php echo $rek2["kd_rinci"]." | ".$rek2["nm_rinci"]; ?></option><br>
   
    <?php
    }
    ?>
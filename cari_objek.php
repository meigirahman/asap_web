<?php
    include "conn.php";
   
    $sql="select * from ref_objek where kd_jenis='$_POST[kd_jenis]'";
    $q=mysql_query($sql);	?>
	
	
        <option value="">Pilih Kegiatan</option><br>
		
		<?php
    while($rek2=mysql_fetch_array($q)){
   
    ?>
        <option value="<?php echo $rek2["kd_objek"]; ?>"><?php echo $rek2["kd_objek"]." | ".$rek2["nm_objek"]; ?></option><br>
   
    <?php
    }
    ?>
<?php
    include "conn.php";
   
    $sql="select * from rek3 where kd1='$_POST[kd1]' and kd2='$_POST[kd2]'";
    $q=mysql_query($sql);	?>
	
	
        <option value="">Pilih Kegiatan</option><br>
		
		<?php
    while($rek2=mysql_fetch_array($q)){
   
    ?>
        <option value="<?php echo $rek2["kd3"]; ?>"><?php echo $rek2["kd3"]." | ".$rek2["nm3"]; ?></option><br>
   
    <?php
    }
    ?>
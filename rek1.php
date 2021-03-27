<?php
    include "conn.php";
   
    $sql="select * from rek2 where kd1='$_POST[kd1]'";
    $q=mysql_query($sql);	?>
	
	
        <option value="">Pilih Kegiatan</option><br>
		
		<?php
    while($rek2=mysql_fetch_array($q)){
   
    ?>
        <option value="<?php echo $rek2["kd2"]; ?>"><?php echo $rek2["kd2"]." | ".$rek2["nm2"]; ?></option><br>
   
    <?php
    }
    ?>
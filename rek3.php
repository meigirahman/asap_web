<?php
    include "conn.php";
   
    $sql="select * from rek4 where kd1='$_POST[kd1]' and kd2='$_POST[kd2]' and kd3='$_POST[kd3]'";
    $q=mysql_query($sql);	?>
	
	
        <option value="">Pilih Kegiatan</option><br>
		
		<?php
    while($rek2=mysql_fetch_array($q)){
   
    ?>
        <option value="<?php echo $rek2["kd4"]; ?>"><?php echo $rek2["kd4"]." | ".$rek2["nm4"]; ?></option><br>
   
    <?php
    }
    ?>
<?php
    include "conn.php";
   
    $sql="select * from rek5 where kd1='$_POST[kd1]' and kd2='$_POST[kd2]' and kd3='$_POST[kd3]' and kd4='$_POST[kd4]'";
    $q=mysql_query($sql);	?>
	
	
        <option value="">Pilih Kegiatan</option><br>
		
		<?php
    while($rek2=mysql_fetch_array($q)){
   
    ?>
        <option value="<?php echo $rek2["kd5"]; ?>"><?php echo $rek2["kd5"]." | ".$rek2["nm5"]; ?></option><br>
   
    <?php
    }
    ?>
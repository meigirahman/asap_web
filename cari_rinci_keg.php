<?php
    include "conn.php";
           $bid= $_POST['bid']; 
        $kd_keg=$_POST['kd_keg']; 
		
		$qq = "select * from tb_anggaran where bid='$bid' and kd_keg='$kd_keg'"; 
    $q=mysql_query($qq);	?>
	
	

		
		<?php
    while($rek2=mysql_fetch_array($q)){
		
		$nm=mysql_fetch_array(mysql_query("select * from ref_rinci where kd_rinci='$rek2[kd_rinci]'"));
    ?>
	
        <option value="<?php echo $rek2["kd_rinci"]; ?>"><?php echo $rek2["kd_rinci"]." | ".$nm["nm_rinci"]; ?></option><br>
   
    <?php
    }
    ?>
	
	 
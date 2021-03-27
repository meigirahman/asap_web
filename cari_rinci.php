<?php
    include "conn.php";
   
 
                                 
						 
									?>
	
	
        <option value="">Pilih Rekening</option><br>
		
<?php    $sql0 = mysql_query("select * from tb_anggaran where kd_keg='$_POST[kd_keg]'");
										while($row0 = mysql_fetch_array($sql0)){
										$kd_rinci = $row0['kd_rinci'];
											
											$q = mysql_query("select * from ref_rinci where kd_rinci='$kd_rinci' "); 
											while ($row1 = mysql_fetch_array($q))
												{
											   ?>
											<option value="<?php echo $row1["kd_rinci"]; ?>"><?php echo $row1["kd_rinci"]." | ".$row1["nm_rinci"]; ?></option><br>
		   
											<?php
												}
										}
                                    ?>
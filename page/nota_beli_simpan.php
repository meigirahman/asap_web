<?php
		include "koneksi.php";
 
		$uraian=$_POST['uraian'];  
		$tgl=$_POST['tgl'];  
		 
 		
 
		
		mysql_query("insert into tb_beli(uraian,tgl,kd_opd,kd_sub) values ('$uraian','$tgl','$_SESSION[kd_opd]','$_SESSION[kd_sub]')") or die(mysql_error());
		
?>
<script type="text/javascript">
		
		alert("Data baru telah ditambahkan, Silahkan tunggu...");
		location.href="home.php?p=beli";
		
		</script>';
<?php
		include "koneksi.php";
 
		$uraian=$_POST['uraian'];  
		$satuan=$_POST['satuan'];  
		$harga=$_POST['harga'];  
 		
 
		
		mysql_query("insert into standar(uraian,satuan,harga) values ('$uraian','$satuan','$harga')") or die(mysql_error());
		
?>
<script type="text/javascript">
		
		alert("Data baru telah ditambahkan, Silahkan tunggu...");
		location.href="home.php?p=standar";
		
		</script>';
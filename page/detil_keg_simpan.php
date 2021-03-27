<?php
		include "koneksi.php";
		
		$kd_keg=$_POST['kd_keg']; 
		$nminus=$_POST['nminus']; 
		$n=$_POST['n'];  
		$nplus=$_POST['nplus'];  
		
		$masukan_tolak=$_POST['masukan_tolak'];  
		$keluaran_tolak=$_POST['keluaran_tolak'];  
		$hasil_tolak=$_POST['hasil_tolak']; 
		$manfaat_tolak=$_POST['manfaat_tolak']; 
		$dampak_tolak=$_POST['dampak_tolak']; 
		
		
		$masukan_target=$_POST['masukan_target'];  
		$keluaran_target=$_POST['keluaran_target'];  
		$hasil_target=$_POST['hasil_target']; 
		$manfaat_target=$_POST['manfaat_target']; 
		$dampak_target=$_POST['dampak_target']; 

 
 	$bidang=$_SESSION['bidang'];		
									
		mysql_query("insert into detil_keg
		(bid,kd_keg,nmin,n,nplus,masukan_tolak,keluaran_tolak,hasil_tolak,manfaat_tolak,dampak_tolak,masukan_target,keluaran_target,hasil_target,manfaat_target,dampak_target) 
		values 
		('$bidang','$kd_keg','$nminus','$n','$nplus','$masukan_tolak',' $keluaran_tolak',' $hasil_tolak','$manfaat_tolak',' $dampak_tolak','$masukan_target',' $keluaran_target',' $hasil_target','$manfaat_target','$dampak_target')") or die(mysql_error());
		
?>
<script type="text/javascript">
		
		alert("Data baru telah ditambahkan, Silahkan tunggu...");
		location.href="home.php?p=detil_keg";
		
		</script>';
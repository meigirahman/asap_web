<?php
		include "koneksi.php";
		$kd_prog=$_POST['kd_prog']; 
		$kd_keg=$_POST['kd_keg']; 
		$kd_jenis=$_POST['kd_jenis']; 
		$kd_objek=$_POST['kd_objek']; 
		$kd_rinci=$_POST['kd_rinci']; 
		$jlh=$_POST['jlh']; 
		$bidang=$_SESSION['bidang'];
				
 
		
		mysql_query("insert into tb_anggaran(kd_prog,kd_keg,kd_jenis,kd_objek,kd_rinci,jlh,bid) values ('$kd_prog','$kd_keg','$kd_jenis','$kd_objek','$kd_rinci','$jlh','$bidang')") or die(mysql_error());
		echo '<script type="text/javascript">alert("Data baru telah ditambahkan, Silahkan tunggu...");
		location.href="home.php?p=anggaran_view";</script>';
?>
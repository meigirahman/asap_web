<?php
		include "koneksi.php";
		$id_keg=$_POST['id_keg']; 
		$nama=$_POST['nama']; 
		$bidang=$_SESSION['bidang'];
				
 
		
		mysql_query("insert into tb_kegiatan (id_keg,nama,bid) values ('$id_keg','$nama','$bidang')") or die(mysql_error());
		echo '<script type="text/javascript">alert("Data baru telah ditambahkan, Silahkan tunggu...");
		location.href="home.php?p=kegiatan_view";</script>';
?>
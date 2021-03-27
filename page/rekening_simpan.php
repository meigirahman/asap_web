<?php
		include "koneksi.php";
		$id_keg=$_POST['id_keg']; 
		$id_rek=$_POST['id_rek']; 
		$nama=$_POST['nama']; 
		$bidang=$_SESSION['bidang'];
				
 
		
		mysql_query("insert into tb_rek (id_keg,id_rek,nama,bid) values ('$id_keg','$id_rek','$nama','$bidang')") or die(mysql_error());
		echo '<script type="text/javascript">alert("Data baru telah ditambahkan, Silahkan tunggu...");
		location.href="home.php?p=rekening_view";</script>';
?>
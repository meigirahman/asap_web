<?php
	include "koneksi.php";
	$Kode_Kecamatan=$_POST['Kode_Kecamatan'];
	$Nama_Kecamatan=$_POST['Nama_Kecamatan'];
	$Alamat=$_POST['Alamat'];
	$Kode_NPWP=$_POST['Kode_NPWP'];
																			
	mysql_query("update kecamatan set  Nama_Kecamatan='$Nama_Kecamatan',Alamat='$Alamat',Kode_NPWP='$Kode_NPWP' where Kode_Kecamatan ='$Kode_Kecamatan'");
										
	echo '<script type="text/javascript">alert("Data berhasil dirubah, Silahkan tunggu...");
	location.href="home.php?p=kecamatan_view";</script>';
?>
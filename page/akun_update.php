<?php
 
	$kd_opd=$_POST['kd_opd'];
	$kd_sub=$_POST['kd_sub'];
	$username=$_POST['username'];
	$password=$_POST['password']; 
	$nama=$_POST['nama']; 
																			
	mysqli_query($konek,"update tb_opd set nama='$nama',username='$username',password='$password' where kd_opd ='$kd_opd' and kd_sub='$kd_sub'");
										
	echo '<script type="text/javascript">alert("Data berhasil dirubah, Silahkan tunggu...");
	location.href="home.php?p=akun_view";</script>';
?>
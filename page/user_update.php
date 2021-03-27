<?php 
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$nip=$_POST['nip'];
	$jabatan=$_POST['jabatan']; 
																			
	mysqli_query($konek,"update tb_ttd set nama='$nama',nip='$nip' where id ='$id'");
										
	echo '<script type="text/javascript"> 
	location.href="home.php?p=user_view";</script>';
?>
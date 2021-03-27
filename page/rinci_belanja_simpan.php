<?php
		include "koneksi.php";
		$kd_prog=$_POST['kd_prog']; 
		$kd_keg=$_POST['kd_keg'];  
		$kd_rek=$_POST['kd_rek'];  
		$uraian=$_POST['uraian'];  
		$kd_blnj=$_POST['kd_blnj'];  
						$kd1=$_POST['kd1']; 
		$kd2=$_POST['kd2']; 
		$kd3=$_POST['kd3']; 
		$kd4=$_POST['kd4']; 
		$kd5=$_POST['kd5'];  		
 
 	$bidang=$_SESSION['bidang'];
		
		mysql_query("insert into rinci_belanja(bid,uraian,kd_prog,kd_keg,kd_rek,kd_blnj) values ('$bidang','$uraian','$kd_prog','$kd_keg','$kd_rek','$kd_blnj')") or die(mysql_error());
		
?>
<script type="text/javascript">
		
		alert("Data baru telah ditambahkan, Silahkan tunggu...");
		location.href="home.php?p=rinci_belanja&kd_rek=<?echo $kd_rek ?>&kd_prog=<?echo $kd_prog ?>&kd_keg=<?echo $kd_keg ?>&kd_blnj=<?echo $kd_blnj ?>&kd1=<?echo $kd1 ?>&kd2=<?echo $kd2 ?>&kd3=<?echo $kd3 ?>&kd4=<?echo $kd4 ?>&kd5=<?echo $kd5 ?>";
		
		</script>';
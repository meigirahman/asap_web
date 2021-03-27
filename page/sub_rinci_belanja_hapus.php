<?php

include "koneksi.php";
$kd_sub= $_GET['kd_sub'];
$kd_prog=$_GET['kd_prog']; 
$kd_rinci=$_GET['kd_rinci']; 
		$kd_keg=$_GET['kd_keg'];  
		$kd_rek=$_GET['kd_rek'];   
				$kd1=$_GET['kd1']; 
		$kd2=$_GET['kd2']; 
		$kd3=$_GET['kd3']; 
		$kd4=$_GET['kd4']; 
		$kd5=$_GET['kd5'];  
		
$myquery1 = "delete from sub_rinci_belanja where kd_sub='$kd_sub' limit 1";

$hapus = mysql_query($myquery1) or die ("gagal menghapus");
?>
<script type="text/javascript">alert("Data telah dihapus, Silahkan tunggu...");
location.href="home.php?p=sub_rinci_belanja&kd_rek=<?echo $kd_rek ?>&kd_prog=<?echo $kd_prog ?>&kd_keg=<?echo $kd_keg ?>&kd_rinci=<?echo $kd_rinci ?>&kd1=<?echo $kd1 ?>&kd2=<?echo $kd2 ?>&kd3=<?echo $kd3 ?>&kd4=<?echo $kd4 ?>&kd5=<?echo $kd5 ?>";
</script>';


 
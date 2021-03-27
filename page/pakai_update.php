<?php
 
$kd_pakai= $_POST['kd_pakai'];
$uraian=$_POST['uraian'];  
$tgl=$_POST['tgl'];  



$myquery = "update tb_pakai set uraian='$uraian', tgl='$tgl' where kd_pakai ='$kd_pakai'";
mysqli_query($konek,$myquery) or die ("gagal update1");
 
 $myquery = "update tb_pakai_rinci set tgl='$tgl' where kd_pakai ='$kd_pakai'";
mysqli_query($konek,$myquery) or die ("gagal update1");

 $myquery = "update tb_stok set tgl='$tgl' where kd_pakai ='$kd_pakai'";
mysqli_query($konek,$myquery) or die ("gagal update1");
 

echo '<script type="text/javascript">
 
location.href="home.php?p=pakai";</script>';

?>
<?php
 
$kd_beli= $_POST['kd_beli'];
$uraian=$_POST['uraian'];  
$tgl=$_POST['tgl'];  



$myquery = "update tb_beli set uraian='$uraian', tgl='$tgl' where kd_beli ='$kd_beli'";
mysqli_query($konek,$myquery) or die ("gagal update1");
 
 $myquery = "update tb_beli_rinci set tgl='$tgl' where kd_beli ='$kd_beli'";
mysqli_query($konek,$myquery) or die ("gagal update1");

 $myquery = "update tb_stok set tgl='$tgl' where kd_beli ='$kd_beli'";
mysqli_query($konek,$myquery) or die ("gagal update1");
 

echo '<script type="text/javascript">
 
location.href="home.php?p=beli";</script>';

?>
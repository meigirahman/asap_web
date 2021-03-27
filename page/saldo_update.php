<?php
 
$kd_saldo= $_POST['kd_saldo'];
$uraian=$_POST['uraian'];  
$tgl=$_POST['tgl'];  



$myquery = "update tb_saldo set uraian='$uraian', tgl='$tgl' where kd_saldo ='$kd_saldo'";
mysqli_query($konek,$myquery) or die ("gagal update1");
 
 $myquery = "update tb_saldo_rinci set tgl='$tgl' where kd_saldo ='$kd_saldo'";
mysqli_query($konek,$myquery) or die ("gagal update1");

 $myquery = "update tb_stok set tgl='$tgl' where kd_saldo ='$kd_saldo'";
mysqli_query($konek,$myquery) or die ("gagal update1");
 

echo '<script type="text/javascript">
 
location.href="home.php?p=saldo";</script>';

?>
<?php
 
$kd_beli= $_GET['kd_beli'];
$myquery1 = "delete from tb_beli where kd_beli ='$kd_beli'";
mysqli_query($konek,$myquery1) or die ("gagal menghapus");

$myquery2 = "delete from tb_beli_rinci where kd_beli ='$kd_beli'";
mysqli_query($konek,$myquery2) or die ("gagal menghapus 2");

$myquery3 = "delete from tb_stok where kd_beli ='$kd_beli'";
mysqli_query($konek,$myquery3) or die ("gagal menghapus 3");

echo '<script type="text/javascript">
 
location.href="home.php?p=beli";</script>';

?>
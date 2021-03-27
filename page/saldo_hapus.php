<?php
 
$kd_saldo= $_GET['kd_saldo']; 
$myquery1 = "delete from tb_saldo where kd_saldo ='$kd_saldo'";
mysqli_query($konek,$myquery1) or die ("gagal menghapus");

$myquery2 = "delete from tb_saldo_rinci where kd_saldo ='$kd_saldo'";
mysqli_query($konek,$myquery2) or die ("gagal menghapus 2");

$myquery3 = "delete from tb_stok where kd_saldo ='$kd_saldo'";
mysqli_query($konek,$myquery3) or die ("gagal menghapus 3");


$hapus = mysqli_query($konek,$myquery1) or die ("gagal menghapus");
echo '<script type="text/javascript"> 
location.href="home.php?p=saldo";</script>';

?>
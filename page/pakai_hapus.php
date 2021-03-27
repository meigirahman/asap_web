<?php
 
$kd_pakai= $_GET['kd_pakai'];
$myquery1 = "delete from tb_pakai where kd_pakai ='$kd_pakai'";
$hapus = mysqli_query($konek,$myquery1) or die ("gagal menghapus");

$myquery1 = "delete from tb_pakai_rinci where kd_pakai ='$kd_pakai'";
$hapus = mysqli_query($konek,$myquery1) or die ("gagal menghapus");

$myquery1 = "delete from tb_stok where kd_pakai ='$kd_pakai'";
$hapus = mysqli_query($konek,$myquery1) or die ("gagal menghapus");

echo '<script type="text/javascript"> 
location.href="home.php?p=pakai";</script>';

?>
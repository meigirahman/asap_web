<?php

 
$kd_beli_rinci= $_GET['kd_beli_rinci'];
$kd_beli= $_GET['kd_beli'];
$tgl= $_GET['tgl']; 

$myquery1 = "delete from tb_beli_rinci where kd_beli_rinci ='$kd_beli_rinci' limit 1";
$hapus = mysqli_query($konek,$myquery1) or die ("gagal menghapus 1");

$myquery1 = "delete from tb_stok where kd_beli_rinci ='$kd_beli_rinci' limit 1";
$hapus = mysqli_query($konek,$myquery1) or die ("gagal menghapus 2");

echo "

<script type='text/javascript'> 
location.href='home.php?p=sub_beli&kd_beli=$_GET[kd_beli]&tgl=$_GET[tgl]'

</script>

";

?>
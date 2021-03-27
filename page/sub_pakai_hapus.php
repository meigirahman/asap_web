<?php
 
$kd_pakai_rinci= $_GET['kd_pakai_rinci'];
$kd_pakai= $_GET['kd_pakai'];
$kd_brg= $_GET['kd_brg'];
$tgl= $_GET['tgl'];

$myquery1 = "delete from tb_pakai_rinci where kd_pakai_rinci ='$kd_pakai_rinci' limit 1";
$hapus = mysqli_query($konek,$myquery1) or die ("gagal menghapus 1");

$myquery1 = "delete from tb_stok where kd_pakai_rinci ='$kd_pakai_rinci' limit 1";
$hapus = mysqli_query($konek,$myquery1) or die ("gagal menghapus 2");

echo "

<script type='text/javascript'>
 
location.href='home.php?p=sub_pakai&kd_pakai=$_GET[kd_pakai]&tgl=$_GET[tgl]'

</script>

";

?>
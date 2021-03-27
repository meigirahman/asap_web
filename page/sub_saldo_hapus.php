<?php
 
$kd_saldo_rinci= $_GET['kd_saldo_rinci'];
$kd_saldo= $_GET['kd_saldo'];
$tgl= $_GET['tgl'];

$myquery1 = "delete from tb_saldo_rinci where kd_saldo_rinci ='$kd_saldo_rinci' limit 1";
$hapus = mysqli_query($konek,$myquery1) or die ("gagal menghapus 1");

$myquery1 = "delete from tb_stok where kd_saldo_rinci ='$kd_saldo_rinci' limit 1";
$hapus = mysqli_query($konek,$myquery1) or die ("gagal menghapus 2");

echo "

<script type='text/javascript'> 
location.href='home.php?p=sub_saldo&kd_saldo=$kd_saldo&tgl=$tgl'

</script>

";

?>
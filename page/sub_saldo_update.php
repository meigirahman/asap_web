<?php
 
$kd_saldo_rinci= $_POST['kd_saldo_rinci'];
$jumlah=$_POST['jumlah'];  
$satuan=$_POST['satuan'];  
$harga_satuan=$_POST['harga_satuan'];  
$kd_saldo= $_POST['kd_saldo'];
$tgl= $_POST['tgl']; 


$myquery = "update tb_saldo_rinci set jumlah='$jumlah', satuan='$satuan', harga_satuan='$harga_satuan' where kd_saldo_rinci ='$kd_saldo_rinci'";
mysqli_query($konek,$myquery) or die ("gagal update1");

$myquery = "update tb_stok set jumlah='$jumlah', satuan='$satuan', harga_satuan='$harga_satuan', positif='$jumlah' where kd_saldo_rinci='$kd_saldo_rinci'";
mysqli_query($konek,$myquery) or die ("gagal update2");
 
echo "

<script type='text/javascript'> 
location.href='home.php?p=sub_saldo&kd_saldo=$kd_saldo&tgl=$tgl'

</script>

";

?>
<?php
 
$kd_beli_rinci= $_POST['kd_beli_rinci'];
$jumlah=$_POST['jumlah'];  
$satuan=$_POST['satuan'];  
$harga_satuan=$_POST['harga_satuan'];  
$kd_beli= $_POST['kd_beli'];
$tgl= $_POST['tgl']; 


$myquery = "update tb_beli_rinci set jumlah='$jumlah', satuan='$satuan', harga_satuan='$harga_satuan' where kd_beli_rinci ='$kd_beli_rinci'";
mysqli_query($konek,$myquery) or die ("gagal update1");

$myquery = "update tb_stok set jumlah='$jumlah', satuan='$satuan', harga_satuan='$harga_satuan', positif='$jumlah' where kd_beli_rinci='$kd_beli_rinci'";
mysqli_query($konek,$myquery) or die ("gagal update2");
 
echo "

<script type='text/javascript'> 
location.href='home.php?p=sub_beli&kd_beli=$kd_beli&tgl=$tgl'

</script>

";

?>
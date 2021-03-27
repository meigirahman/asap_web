<?php
 
$kd_pakai_rinci= $_POST['kd_pakai_rinci'];
$positif=$_POST['jumlah'];  
$jumlah=0-$_POST['jumlah'];    
$satuan=$_POST['satuan'];  
$harga_satuan=$_POST['harga_satuan'];  
$kd_pakai= $_POST['kd_pakai'];
$tgl= $_POST['tgl']; 


$myquery = "update tb_pakai_rinci set jumlah='$positif', satuan='$satuan', harga_satuan='$harga_satuan' where kd_pakai_rinci ='$kd_pakai_rinci'";
mysqli_query($konek,$myquery) or die ("gagal update1");

$myquery = "update tb_stok set jumlah='$jumlah', satuan='$satuan', harga_satuan='$harga_satuan', positif='$positif' where kd_pakai_rinci='$kd_pakai_rinci'";
mysqli_query($konek,$myquery) or die ("gagal update2");
 
echo "

<script type='text/javascript'> 
location.href='home.php?p=sub_pakai&kd_pakai=$kd_pakai&tgl=$tgl'

</script>

";

?>
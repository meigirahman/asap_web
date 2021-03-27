<?php

include "koneksi.php";
$id= $_GET['id'];
$myquery1 = "delete from standar where id ='$id' limit 1";
$hapus = mysql_query($myquery1) or die ("gagal menghapus");
echo '<script type="text/javascript">alert("Data telah dihapus, Silahkan tunggu...");
location.href="home.php?p=standar";</script>';

?>
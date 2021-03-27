<?php
 
$id= $_POST['id'];
$simda=$_POST['simda'];  
 



$myquery = "update tb_opd set simda='$simda' where id ='$id'";
mysqli_query($konek,$myquery) or die ("gagal update1");
 
  

echo '<script type="text/javascript">
 
location.href="home.php?p=simda";</script>';

?>
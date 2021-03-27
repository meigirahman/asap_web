<?php 
/// edit sesuai dengan settingan database
$dbhost = "localhost";
$dbuser = "mubakabc_admin";
$dbpass = "m31g1r4hm4n";
$dbname = "mubakabc_asap";


$conn = mysql_connect("$dbhost","$dbuser","$dbpass");

if (!$conn) die ('Gagal Melakukan Koneksi');

mysql_select_db($dbname,$conn) or die ('Database Tidak Diketemukan di Server');
?>

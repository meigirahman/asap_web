<?php

include "koneksi.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = mysql_query("select nama from tb_penduduk where nama LIKE '%$q%'");
while($r = mysql_fetch_array($sql)) {
	
	$nama = $r['nama'];
	echo "$nama \n";
}

?>
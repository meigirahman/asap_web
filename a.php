<?php 
include "koneksi.php"; 
$cek = mysql_fetch_array(mysql_query("SELECT no_surat FROM tb_surat_usaha ORDER BY no_surat DESC LIMIT 1"));
$ex = explode('/', $cek['no_surat']);
 
// if (date('d')=='01'){ $a = '01'; }
// else{ 
$a = '920';
$b = $ex[1]+1; 
// }
 
// $b = 'PPID';
$c = 'SKU';
$d = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
$e = date('Y');
$no_surat = $a.'/'.$b.'/'.$c.'/'.$d[date('n')].'/'.$e;
// echo $no_surat;
echo $no_surat;

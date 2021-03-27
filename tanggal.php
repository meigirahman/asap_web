<?php


$bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
$hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"); 
$cetak_date = $hari[(int)date("w")] .', '. date("j ") . $bulan[(int)date('m')] . date(" Y");


?>
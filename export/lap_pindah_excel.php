<?php


?><?php
$firstdate=$_GET['firstdate'];
$lastdate=$_GET['lastdate'];
$nasabah=$_GET['nb'];
$format1 = date('d F Y', strtotime($firstdate ));
$format2 = date('d F Y', strtotime($lastdate ));
?>
<?php 
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=laporanPindah$firstdate.-.$lastdate;");
?>
<html>
<head>
<title>Laporan Data Kematian Periode s.d</title>
<style type="text/css">
table, td, th
{
border:1px solid black;
border-collapse:collapse;
}
th
{
background-color:#F2F2F2;
color:#000000;
}
</style>
</head>
<body>
<p align="center"><strong>Laporan Data Penduduk Pindah <br>
Kelurahan Citangtu Kecamatan Kuningan<br>
Alamat : Lingkungan Pahing RT 01/RW 01 Kode Pos : 45516 </strong><br /><?php echo $format1;?> s.d <?php echo $format2;?> </p>
<table width="459" border="1" align="center">
  <tr>
    <th><div align="center">No</div></th>
    <th><div align="center">Tanggal</div></th>
    <th><div align="center">No SKP </div></th>
    <th><div align="center">Nama</div></th>
    <th><div align="center">NIK</div></th>
    <th><div align="center">Jenis Kelamin</div></th>
    <th><div align="center">RW</div></th>
    <th><div align="center">RW</div></th>
    <th><div align="center">Tanggal pindah</div></th>
  </tr>
  <?php
   mysql_connect("localhost","root","");
   mysql_select_db("kependudukanok");
   $view=("SELECT DATE_FORMAT(tb_pend_pindah.tanggal_input, '%d-%m-%Y') as tanggal_input,
                                                    tb_detail_pend_pindah.no_surat_pindah,tb_detail_pend_pindah.nik, tb_detail_pend_pindah.nama, tb_detail_pend_pindah.jenis_kelamin,
                                                    tb_detail_pend_pindah.no_rt, tb_detail_pend_pindah.no_rw,
                                                    DATE_FORMAT(tb_pend_pindah.tanggal_pindah, '%d-%m-%Y') as tanggal_pindah from tb_pend_pindah,
                                                    tb_detail_pend_pindah where 	tb_detail_pend_pindah.no_surat_pindah=tb_pend_pindah.no_surat_pindah
                                            		 and tanggal_input BETWEEN '$firstdate' and '$lastdate'");
   $ok=mysql_query($view);
   $i=1;
   while($brs=mysql_fetch_array($ok))
   { 
echo"<tr>
    <td><div align=center>$i</div></td>
    <td><div align=center>$brs[tanggal_input]</div></td>
    <td><div align=center>$brs[no_surat_pindah]</div></td>
    <td><div align=left>$brs[nama]</div></td>
    <td><div align=center>$brs[nik]</div></td>
    <td><div align=center>$brs[jenis_kelamin]</div></td>
    <td><div align=center>$brs[no_rt]</div></td>
    <td><div align=center>$brs[no_rw]</div></td>
    <td><div align=center>$brs[tanggal_pindah]</div></td>
	</tr>";
  $i++;
   }

  ?>
</table>
</body>
</html>
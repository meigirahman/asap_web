<?php
$firstdate=$_GET['firstdate'];
$lastdate=$_GET['lastdate'];
$nasabah=$_GET['nb'];
$format1 = date('d F Y', strtotime($firstdate ));
$format2 = date('d F Y', strtotime($lastdate ));
?>
<?php 
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=laporanKTP$firstdate.-.$lastdate;");
?>
<html>
<head>
<title>Laporan Data Kartu Keluarga Periode s.d</title>
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
<p align="center"><strong>Laporan Data Kartu Tanda Penduduk <br>
Kelurahan Citangtu Kecamatan Kuningan<br>
Alamat : Lingkungan Pahing RT 01/RW 01 Kode Pos : 45516 </strong><br /><?php echo $format1;?> s.d <?php echo $format2;?> </p>
<table width="459" border="1" align="center">
  <tr>
    <th><div align="center">No</div></th>
    <th><div align="center">Tanggal</div></th>
    <th><div align="center">NIK </div></th>
    <th><div align="center">Nama</div></th>
    <th><div align="center">Jenis Kelamin</div></th>
    <th><div align="center">RT</div></th>
    <th><div align="center">RW</div></th>
  </tr>
  <?php
   mysql_connect("localhost","root","");
   mysql_select_db("kependudukanok");
   $view=("SELECT DATE_FORMAT(tb_ktp.tanggal_input, '%d-%m-%Y') as tanggal_input,
   tb_detail_ktp.no_rt, tb_detail_ktp.no_rw, tb_detail_ktp.nama, tb_detail_ktp.jenis_kelamin,
    tb_detail_ktp.nik from tb_ktp,tb_detail_ktp where tb_detail_ktp.nik=tb_ktp.nik and
   tanggal_input BETWEEN '$firstdate' and '$lastdate'");
   $ok=mysql_query($view);
   $i=1;
   while($brs=mysql_fetch_array($ok))
   { 
echo"<tr>
    <td><div align=center>$i</div></td>
    <td><div align=center>$brs[tanggal_input]</div></td>
    <td><div align=center>$brs[nik]</div></td>
    <td><div align=left>$brs[nama]</div></td>
    <td><div align=center>$brs[jenis_kelamin]</div></td>
    <td><div align=center>$brs[no_rt]</div></td>
    <td><div align=center>$brs[no_rw]</div></td>
	</tr>";
  $i++;
   }

  ?>
</table>
</body>
</html>
<?php
$firstdate=$_GET['firstdate'];
$lastdate=$_GET['lastdate'];
$nasabah=$_GET['nb'];
$format1 = date('d F Y', strtotime($firstdate ));
$format2 = date('d F Y', strtotime($lastdate ));
?>
<?php 
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=laporanPeriode$firstdate.-.$lastdate.xls;");
?>
<html>
<head>
<title>Laporan Register Surat Pengantar Periode s.d</title>
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
<p align="center"><strong>LAPORAN DATA PENDUDUK <br>
Kelurahan Citangtu Kecamatan Kuningan<br>
Alamat : Lingkungan Pahing RT 01/RW 01 Kode Pos : 45516 </strong><br /><?php echo $format1;?> s.d <?php echo $format2;?> </p>
<table width="459" border="1" align="center">
  <tr>
    <th><div align="center">No</div></th>
    <th><div align="center">Tanggal</div></th>
    <th><div align="center">Nama</div></th>
    <th><div align="center">Jenis Kelamin</div></th>
    <th><div align="center">Tempat</div></th>
    <th><div align="center">Tanggal Lahir</div></th>
    <th><div align="center">Status Nikah </div></th>
    <th><div align="center">RT</div></th>
    <th><div align="center">RW</div></th>
  </tr>
  <?php
   mysql_connect("localhost","root","");
   mysql_select_db("sikep");
   $view=("SELECT  DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input,
                                                    nama, jenis_kelamin,tempat, DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,
                                                    status_nikah,no_rt,no_rw from tb_penduduk where
   tanggal_input BETWEEN '$firstdate' and '$lastdate'");
   $ok=mysql_query($view);
   $i=1;
   while($brs=mysql_fetch_array($ok))
   { 
echo"<tr>
    <td><div align=center>$i</div></td>
    <td><div align=center>$brs[tanggal_input]</div></td>
    <td><div align=left>$brs[nama]</div></td>
    <td><div align=center>$brs[jenis_kelamin]</div></td>
    <td><div align=center>$brs[tempat]</div></td>
    <td><div align=center>$brs[tanggal_lahir]</div></td>
    <td><div align=center>$brs[status_nikah]</div></td>
    <td><div align=center>$brs[no_rt]</div></td>
    <td><div align=center>$brs[no_rw]</div></td>
	</tr>";
  $i++;
   }

  ?>
</table>
</body>
</html>
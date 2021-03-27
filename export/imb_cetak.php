<?php		
			
			require ('../inc/config.php');
			mysql_connect("localhost","root","");
   mysql_select_db("besati");
			$no_surat=$_GET['no_surat'];
$qrykoreksi=mysql_query("select nama, DATE_FORMAT(tanggal_input, '%Y - %m - %d') as tanggal_input,no_surat, keperluan, lokasi,
                         oleh from tb_surat_imb where no_surat='$no_surat' LIMIT 1");
$dataku=mysql_fetch_object($qrykoreksi);

function tanggal_indo($tanggal)
{
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split = explode('-', $tanggal);
	return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
}
?>

<?php 	
	$jab=$dataku->oleh;
	$query_mysql = mysql_query("select * from tb_penandatangan where jabatan='$jab'")or die(mysql_error());
	while($data = mysql_fetch_array($query_mysql)){
?>

<html>
	<head>
    <title> <?php echo $dataku->nama ?></title>
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
		<style type="text/css">		body {
				padding-top: 20px;
				padding-bottom: 40px;
				font-size: 0.7em;
			}
			.letter5 {line-height:25px}
</style>
	</head>
	<body >
		<div class='span1  offset12'>
                                    <center>
									<table cellpadding="9" cellspacing="9" border="0">
                                    <tr>
                                    <td rowspan="5"><img src="../img/kopa.png"/></td>
                                    </tr>
                                    </table>       
                                    <table border='0' style="font-size: 17px; font-family: Times New Roman; margin-left: 5px; text-align: justify; "cellpadding="5">
                                    
                                    <tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td><b>&nbsp;</b></td><td></td><td>Sekayu, <?php echo tanggal_indo($dataku->tanggal_input);?></td>
                                    </tr>
									 <tr>
                                     <td>Nomor</td><td>:</td><td><b><?php echo $dataku->no_surat ?></b></td><td>&nbsp;</td><td>Kepada</td>
                                    </tr>
									<tr>
                                    <td>Sifat</td><td>:</td><td>Biasa</td><td align="right">Yth. </td><td>Camat Sekayu</td>
                                    </tr>
									<tr>
                                    <td>Lampiran</td><td>:</td><td>I (satu) Berkas</td><td>&nbsp;</td><td>di -</td>
                                    </tr>
									<tr>
                                    <td>Perihal</td><td>:</td><td>Permohonan Izin Mendirikan Bangunan (IMB)</td><td>&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sekayu</td>
                                    </tr>
                                    <tr>
                                    <td>&nbsp;</td><td></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                    </tr>
                                    <tr><td>&nbsp;</td><td>&nbsp;</td><td></td><td>&nbsp;</td><td>&nbsp;</td></tr>
                                    
                                    <tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td colspan="3"><p class="letter5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terlampir bersama ini disampaikan kepada Bapak permohonan Izin Mendirikan Bangunan saudara/i <b><?php echo $dataku->nama ?></b> berupa <?php echo $dataku->keperluan ?> yang berlokasi di <?php echo $dataku->lokasi?> Kabupaten Musi Banyuasin.</p></td>
                                    </tr>
									
									<tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td colspan="3"><p class="letter5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada prinsipnya kami tidak berkeberatan atas diterbitkannya Rekomendasi Surat Izin Mendirikan Bangunan (IMB) yang bersangkutan guna diteruskan kepada Bupati Musi Banyuasin sepanjang permohonan tersebut memenuhi peraturan Perundang - undangan yang berlaku.</td>
                                    </tr>
                                  <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>&nbsp;<td></td>&nbsp;<td></td>&nbsp;<td></td></tr>
                                     <tr>
<td>&nbsp;</td><td></td><td>&nbsp;</td><td align="center" colspan="2"><b><?php echo $data['penandatangan'];  ?></b></td>
                                    </tr>
                                    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                                    <tr>
	<td></td><td>&nbsp;</td><td>&nbsp;</td><td colspan="2" align="center"><b><u><?php echo $data['nama']; ?></u></b></td>
                                    </tr>
									 <tr>
	<td></td><td>&nbsp;</td><td>&nbsp;</td><td colspan="2" align="center"><b>NIP. <?php echo $data['nip'];} ?></b></td>
                                    </tr>
									<tr>
                                     <td>&nbsp;</td><td>&nbsp;</td><td><b></b></td><td>&nbsp;</td><td>&nbsp;</td>
                                    </tr>
									<tr>
                                     <td>&nbsp;</td><td>&nbsp;</td><td><b></b></td><td>&nbsp;</td><td>&nbsp;</td>
                                    </tr>
									<tr>
                                     <td>&nbsp;</td><td>&nbsp;</td><td><b></b></td><td>&nbsp;</td><td>&nbsp;</td>
                                    </tr>
									<tr>
                                     <td>Tembusan</td><td>:</td><td><b></b></td><td>&nbsp;</td><td>&nbsp;</td>
                                    </tr>
									<tr>
                                     <td align="right">1</td><td>.</td><td>Yth. Kasat Pol PP Kab. Musi Banyuasin</td><td>&nbsp;</td><td>&nbsp;</td>
                                    </tr>
                                    </table></center>
                                    
                                    
                                    
            
			
		</div>
	</body>
</html>

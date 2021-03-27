<?php		
			
			require ('../inc/config.php');
			mysql_connect("localhost","root","p3md35");
   mysql_select_db("sikep");
			$no_surat=$_GET['no_surat'];
$qrykoreksi=mysql_query("select nama, alamat,no_rt,no_rw,DATE_FORMAT(tanggal_input, '%Y - %m - %d') as tanggal_input,no_surat, keperluan,hari,
										DATE_FORMAT(tanggal_acara, '%Y - %m - %d') as tanggal_acara,
										oleh from tb_surat_izin where no_surat='$no_surat' LIMIT 1");
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
                                    <td>Sifat</td><td>:</td><td>Biasa</td><td align="right">Yth. </td><td>Kapolres Muba</td>
                                    </tr>
									<tr>
                                    <td>Lampiran</td><td>:</td><td>I (satu) Berkas</td><td>&nbsp;</td><td>di -</td>
                                    </tr>
									<tr>
                                    <td>Perihal</td><td>:</td><td>Rekomendasi Izin Penutupan Jalan</td><td>&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempat</td>
                                    </tr>
									<tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td>Dalam Rangka "<b><?php echo $dataku->keperluan ?>"</b></td><td>&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    </tr>
                                    <tr>
                                    <td>&nbsp;</td><td></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                    </tr>
                                    <tr><td>&nbsp;</td><td>&nbsp;</td><td></td><td>&nbsp;</td><td>&nbsp;</td></tr>
                                    
                                    <tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td colspan="3"><p class="letter5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehubungan dengan surat saudara/i <?php echo $dataku->nama ?> warga <?php echo $dataku->alamat ?> RT.<?php echo $dataku->no_rt ?> RW. <?php echo $dataku->no_rw ?> Kelurahan Serasan Jaya Kecamatan Sekayu, tanggal <?php echo tanggal_indo($dataku->tanggal_input) ?> perihal Permohonan Izin Penggunaan dan Penutupan Sementara Jalan.</p></td>
                                    </tr>
									
									<tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td colspan="3"><p class="letter5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berkenaan dengan hal itu, setelah kami mempelajari, meneliti dan mempertimbangkan kemungkinan pemberian izin terhadap permohonan yang bersangkutan, maka pada prinsipnya kami tidak berkeberatan dan dapat memberikan rekomendasi izin Penggunaan dan Penutupan Sementara Jalan Satu Jalur yang berlokasi di <b><i> <?php echo $dataku->alamat ?> RT.<?php echo $dataku->no_rt ?> RW. <?php echo $dataku->no_rw ?> Kelurahan Serasan Jaya Kecamatan Sekayu</i></b> kepada yang bersangkutan untuk keperluan Acara <?php echo $dataku->keperluan ?> yang.</td>
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

<?php		
			

			mysql_connect("localhost","root","");
   mysql_select_db("besati");
			$no_surat=$_GET['no_surat_kematian'];
$qrykoreksi=mysql_query("select nama, 	DATE_FORMAT(tanggal_input, '%Y-%m-%d') as tanggal_input,no_surat_kematian, tempat,berdasarkan,pukul,hari_meninggal,tanggal_meninggal,
										DATE_FORMAT(tanggal_lahir, '%Y-%m-%d') as tanggal_lahir,jenis_kelamin,alamat,no_rt,no_rw,umur,sebab,tempat_meninggal,pekerjaan,agama,kebumikan,
										oleh from tb_kematian where no_surat_kematian='$no_surat' LIMIT 1");
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
                                    <table border='0' style="font-size: 17px;font-family: Times New Roman; margin-left: 25px;text-align: justify;"cellpadding="5" cellspacing="">
                                                                        
                                    <tr>
                                    <td colspan="5"><center><b style="font-size: 23px;"><u>SURAT KETERANGAN PENGUBURAN</u></b></center></td>
                                    </tr>
                                    <tr>
                                    <td colspan="5"><center>Nomor : <?php echo $dataku->no_surat_kematian ?></td></center>
                                    </tr>
                                    
                                    <tr>
                                    <td colspan="5">Yang bertanda tangan dibawah ini :</td>
                                    </tr>
                                     <tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td>Nama</td><td>:</td><td><b><?php echo $data['nama'];  ?></b></td>
                                    </tr>
                                    <tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td>Jabatan</td><td>:</td><td><?php echo $data['jabatan'];  ?></td>
                                    </tr>
									<td colspan="5">Dengan ini menerangkan bahwa : </td>
									<tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td>Nama</td><td>:</td><td><b><?php echo $dataku->nama ?></b></td>
                                    </tr>
                                    <tr>
									<tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td>Jenis Kelamin</td><td>:</td><td><?php echo $dataku->jenis_kelamin ?></td>
                                    </tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td>T.T.L</td><td>:</td><td><?php echo $dataku->tempat ?>, &nbsp;<?php echo tanggal_indo($dataku->tanggal_lahir) ?></td>
                                    </tr>
                                    <tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td>Pekerjaan</td><td>:</td><td><?php echo $dataku->pekerjaan ?></td>
                                    </tr>
									<tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td>Warga Negara</td><td>:</td><td>Indonesia</td>
                                    </tr>
									<tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td>Agama</td><td>:</td><td><?php echo $dataku->agama ?></td>
                                    </tr>									
                                    <tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td>Alamat</td><td>:</td><td><?php echo $dataku->alamat ?></td>
                                    </tr>
                                    <tr>
                                    <td></td><td></td><td>&nbsp;</td><td></td><td>RT. <?php echo $dataku->no_rt ?> / RW. <?php echo $dataku->no_rw ?> Kecamatan Sekayu Kabupaten Musi Banyuasin</td>
                                    </tr>
                                    <td colspan="5">Benar nama tersebut diatas telah meninggal dunia disebabkan <b><?php echo $dataku->sebab ?></b> dan dikebumikan di <b><?php echo $dataku->kebumikan ?></b> Kabupaten Musi Banyuasin pada :</td>
									<tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td>Hari</td><td>:</td><td><b><?php echo $dataku->hari_meninggal ?></b></td>
                                    </tr>
                                    <tr>
									<tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td>Tanggal</td><td>:</td><td><?php echo tanggal_indo($dataku->tanggal_meninggal) ?></td>
                                    <tr>
                                    <td>&nbsp;</td><td>&nbsp;</td><td>Pukul</td><td>:</td><td><?php echo $dataku->pukul ?> WIB</td>
                                    </tr>
									<tr><td>&nbsp;</td><td>&nbsp;</td><td  colspan="3">&nbsp;</td></tr>
									<tr><td>&nbsp;</td><td>&nbsp;</td><td  colspan="3">&nbsp;</td></tr>
									<tr>
                                    <td colspan="5">Surat keterangan ini dibuat atas dasar yang sebenarnya.</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                    </tr>
                                   
                                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                   <tr>
                                    <td>&nbsp;</td><td></td><td>&nbsp;</td><td align="center" colspan="2"><b>Sekayu, <?php echo tanggal_indo($dataku->tanggal_input);   ?></b></td>
                                    </tr>
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
                                    </table></center>
                                    
                                    
                                    
            
			
		</div>
	</body>
</html>

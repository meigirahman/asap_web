<?php		
			
			require ('../inc/config.php');
			$no_surat=$_GET['no_surat'];
			 mysql_connect("localhost","root","");
   mysql_select_db("kependudukanok");
$qrykoreksi=mysql_query("select nik, DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input,no_surat, nama, jenis_kelamin, tempat,
                                     DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,pekerjaan, agama, 
                                     no_rt, no_rw,oleh from tb_sktm where no_surat='$no_surat' LIMIT 1");
$dataku=mysql_fetch_object($qrykoreksi);

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
</style>
	</head>
	<body >
		<div class='span1  offset12'>
        
			
                                    
                                    <table cellpadding="9" cellspacing="9">
                                    
                                    
                                    <table style="font-size: 12px;font-family: Times New Roman; margin-left: 25px;text-align: justify;"cellpadding="5" cellspacing="">
                                    <tr>
                                    <td colspan="3"><center><b style="font-size: 14px;"><u>SURAT KETERANGAN TIDAK MAMPU</u></b></center></td>
                                    </tr>
                                    <tr>
                                    <td colspan="3"><center>Nomor : <?php echo $dataku->no_surat ?></td></center>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr>
                                    <tr>
                                    <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Yang bertanda tangan dibawah ini Lurah Citangtu Kecamatan Kuningan Kabupaten Kuningan,</td>
                                    </tr>
                                    <tr>
                                    <td colspan="3">menerangkan bahwa :</td>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr>
                                    <tr>
                                    <td>Nama</td><td>:</td><td><b><?php echo $dataku->nama ?></b></td>
                                    </tr>
                                    <tr>
                                    <td>Tempat & Tanggal Lahir</td><td>:</td><td><?php echo $dataku->tempat ?>, &nbsp;<?php echo $dataku->tanggal_lahir ?></td>
                                    </tr>
                                    <tr>
                                    <td>Agama</td><td>:</td><td><?php echo $dataku->agama ?></td>
                                    </tr>
                                    <tr>
                                    <td>Pekerjaan</td><td>:</td><td><?php echo $dataku->pekerjaan ?></td>
                                    </tr>
                                    
                                    <tr>
                                    <td>Alamat</td><td>:</td><td>Cempaka RT&nbsp;0<?php echo $dataku->no_rt ?>&nbsp;RW&nbsp;0<?php echo $dataku->no_rw ?>&nbsp;Kecamatan Bumijawa Kabupaten Tegal</td>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr>
                                    <tr>
                                    <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Adalah benar-benar dari keluarga tidak mampu. oleh karena itu kami mengharapkan kepada </td>
                                    </tr>
                                    <tr>
                                    <td colspan="3">pihak yang berkepentingan untuk memberikan keringanan.</td>
                                    </tr>
                                    <tr>
                                    <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Demikian untuk menjadikan maklum bagi yang berkepentingan.</tr>
                                    <tr>
                                    <td colspan="3" align="right">Citangtu, <?php echo $dataku->tanggal_input ?></td>
                                    </tr>
                                    <tr>
                                    <td>Tanda Tangan Pemegang</td><td>&nbsp;</td><td align="right">Lurah Citangtu</td>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
                                    <tr>
                                    <td><b><u><?php echo $dataku->nama ?></u></b></td><td>&nbsp;</td><td align="right"><b><u><?php echo $dataku->oleh ?></u></b></td>
                                    </tr>
                                    </table>
                                    
                                    
                                    
            
			
		</div>
	</body>
</html>

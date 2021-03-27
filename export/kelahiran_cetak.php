<?php		
			
			require ('../inc/config.php');
			$no_surat_kelahiran=$_GET['no_surat_kelahiran'];
$qrykoreksi=mysql_query("select no_surat_kelahiran, nama, jenis_kelamin, hari, tempat,
DATE_FORMAT(tanggal_lahir, '%d - %m - %Y') as tanggal_lahir, nama_ibu, nama_ayah,
no_kk, no_rt, no_rw, DATE_FORMAT(tanggal_input, '%d - %m - %Y') as tanggal_input from tb_kelahiran where no_surat_kelahiran='$no_surat_kelahiran' LIMIT 1");
$dataku=mysql_fetch_object($qrykoreksi);
list($tahun,$bulan,$tanggal) = explode('-',$dataku->tanggal_lahir);
list($hr,$pasaran) = explode(' ',$dataku->hari);
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
		<div class='span8  offset2'>
			<table cellpadding="4" cellspacing="0" style="font-size: 12.5px;margin: -15px 0 0 0;;" class="table-condensed">
				                    <tr>
                                    
                                    <td colspan="3">
                                    <table border="1" style="border: 1px solid #000;float: right;font-size: 12px;">
                                    <tr><td>LAMPIRAN A-3</td></tr></table>
                                    </td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3"><center><u><b>UNTUK YANG BERSANGKUTAN</b></u></center></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="3"><center> SURAT KELAHIRAN</center></td></tr>
                                    <tr>
                                    <td colspan="3"> <center>No. <?php echo $dataku->no_surat_kelahiran?></center></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3">Yang bertanda tangan di bawah ini menerangkan bahwa pada:</td>
                                    </tr>
                                   
                                    <td width="100px">Hari</td><td>:</td><td><?php echo $dataku->hari?></td>
                                    </tr>
                                    <tr>
                                    <td>Tanggal</td><td>:</td><td><?php echo $dataku->tanggal_lahir?></td>
                                    </tr>
                                    <tr>
                                    <td>Di</td><td>:</td><td><?php echo $dataku->tempat?></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="4">Telah lahir seorang anak &nbsp; <b><?php echo $dataku->jenis_kelamin?></b></td></tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td>Bernama</td><td>:</td>
                                    
                                    <td colspan="3"><b><?php echo $dataku->nama?></b></td></tr>
                                    <tr>
                                    <td colspan="3">Dari Seorang ibu bernama :</td>
                                    </tr>
                                    <tr><td colspan="3"><center><b><?php echo $dataku->nama_ibu?></b></center></td></tr>
                                    <tr>
                                    <td>Alamat</td><td>:</td>
                                    <td> Citangtu <?php echo $dataku->no_rt?> / <?php echo $dataku->no_rw?></td></tr>
                                    
                                    <tr>
                                    <td>Istri dari</td><td>:</td></tr>
                                    <tr>
                                    <td colspan="3"><center><b><?php echo $dataku->nama_ayah?></b></center></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3">Surat Keterangan ini dibuat atas dasar yang sebenarnya</td>
                                    </tr>
                                   <tr>
                                    <td colspan="3" align="right"> Citangtu, &nbsp <?php echo $dataku->tanggal_input ?></td>
                                    </tr>
                                    <tr><td colspan="3" align="center">Lurah Citangtu</td></tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="3"><center><b><u>Yadi Juharyadi</u></b></center></td></tr>
                                    
			</table>
			
		</div>
		</body>
		
			<body >
		<div class='span8  offset2'>
			<table cellpadding="4" cellspacing="0" style="font-size: 12.5px;margin: -15px 0 0 0;;" class="table-condensed">
				                    <tr>
                                    
                                    <td colspan="3">
                                    <table border="1" style="border: 1px solid #000;float: right;font-size: 12px;">
                                    <tr><td>LAMPIRAN A-2</td></tr></table>
                                    </td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3"><center><u><b>UNTUK KELURAHAN</b></u></center></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="3"><center> SURAT KELAHIRAN</center></td></tr>
                                    <tr>
                                    <td colspan="3"> <center>No. <?php echo $dataku->no_surat_kelahiran?></center></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3">Yang bertanda tangan di bawah ini</td>
                                    </tr>
                                    <tr><td colspan="3">menerangkan bahwa pada :</td></tr>
                                    <tr>
                                    <td width="100px">Hari</td><td>:</td><td><?php echo $dataku->hari?></td>
                                    </tr>
                                    <tr>
                                    <td>Tanggal</td><td>:</td><td><?php echo $dataku->tanggal_lahir?></td>
                                    </tr>
                                    <tr>
                                    <td>Di</td><td>:</td><td><?php echo $dataku->tempat?></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="4">Telah lahir seorang anak &nbsp; <b><?php echo $dataku->jenis_kelamin?></b></td></tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td>Bernama</td><td>:</td>
                                   <td colspan="3"><b><?php echo $dataku->nama?></b></td></tr>
                                    <tr>
                                    <td colspan="3">Dari Seorang ibu bernama :</td>
                                    </tr>
                                    <tr><td colspan="3"><center><b><?php echo $dataku->nama_ibu?></b></center></td></tr>
                                    <tr>
                                    <td>Alamat</td><td>:</td>
                                    <td> Citangtu <?php echo $dataku->no_rt?> / <?php echo $dataku->no_rw?></td></tr>
                                    
                                    <tr>
                                    <td>Istri dari</td><td>:</td></tr>
                                    <tr>
                                    <td colspan="3"><center><b><?php echo $dataku->nama_ayah?></b></center></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3">Surat Keterangan ini dibuat atas dasar yang sebenarnya</td>
                                    </tr>
                                   <tr>
                                    <td colspan="3" align="right"> Citangtu, &nbsp <?php echo $dataku->tanggal_input ?></td>
                                    </tr>
                                    <tr><td colspan="3" align="center">Lurah Citangtu</td></tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="3"><center><b><u>Yadi Juharyadi</u></b></center></td></tr>
                                    
			</table>
			
		</div>
	</body>
		
					<body >
		<div class='span8  offset2'>
			<table cellpadding="4" cellspacing="0" style="font-size: 12.5px;margin: -15px 0 0 0;;" class="table-condensed">
				                    <tr>
                                    
                                    <td colspan="3">
                                    <table border="1" style="border: 1px solid #000;float: right;font-size: 12px;">
                                    <tr><td>LAMPIRAN A-1</td></tr></table>
                                    </td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3"><center><u><b>UNTUK KELURAHAN</b></u></center></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="3"><center> SURAT KELAHIRAN</center></td></tr>
                                    <tr>
                                    <td colspan="3"> <center>No. <?php echo $dataku->no_surat_kelahiran?></center></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3">Yang bertanda tangan di bawah ini</td>
                                    </tr>
                                    <tr><td colspan="3">menerangkan bahwa pada :</td></tr>
                                    <tr>
                                    <td width="100px">Hari</td><td>:</td><td><?php echo $dataku->hari?></td>
                                    </tr>
                                    <tr>
                                    <td>Tanggal</td><td>:</td><td><?php echo $dataku->tanggal_lahir?></td>
                                    </tr>
                                    <tr>
                                    <td>Di</td><td>:</td><td><?php echo $dataku->tempat?></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="4">Telah lahir seorang anak &nbsp; <b><?php echo $dataku->jenis_kelamin?></b></td></tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td>Bernama</td><td>:</td>
                                   <td colspan="3"><b><?php echo $dataku->nama?></b></td></tr>
                                    <tr>
                                    <td colspan="3">Dari Seorang ibu bernama :</td>
                                    </tr>
                                    <tr><td colspan="3"><center><b><?php echo $dataku->nama_ibu?></b></center></td></tr>
                                    <tr>
                                    <td>Alamat</td><td>:</td>
                                    <td> Citangtu <?php echo $dataku->no_rt?> / <?php echo $dataku->no_rw?></td></tr>
                                    
                                    <tr>
                                    <td>Istri dari</td><td>:</td></tr>
                                    <tr>
                                    <td colspan="3"><center><b><?php echo $dataku->nama_ayah?></b></center></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3">Surat Keterangan ini dibuat atas dasar yang sebenarnya</td>
                                    </tr>
                                   <tr>
                                    <td colspan="3" align="right"> Citangtu, &nbsp <?php echo $dataku->tanggal_input ?></td>
                                    </tr>
                                    <tr><td colspan="3" align="center">Lurah Citangtu</td></tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="3"><center><b><u>Yadi Juharyadi</u></b></center></td></tr>
                                    
			</table>
			
		</div>
	</body>
		
		

		
		
		
		
		
		
		
		
		
		
		
	
</html>

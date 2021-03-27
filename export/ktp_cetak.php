<?php		
			
			require ('../inc/config.php');
			$nik=$_GET['nik'];
$qrykoreksi=mysql_query("select * from tb_detail_ktp where nik='$nik' LIMIT 1");
$qrykoreksi1=mysql_query("select DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input from tb_ktp where nik='$nik' LIMIT 1");
$dataku=mysql_fetch_object($qrykoreksi);
$dataku1=mysql_fetch_object($qrykoreksi1);
list($tahun,$bulan,$tanggal) = explode('-',$dataku->tanggal_lahir);

$desa='3328022013';
$alamat='CEMPAKA';
?>
<html>
	<head>
    <title> <?php echo $dataku->nama ?></title>
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
		<style type="text/css">		body {
		  padding-top: 20px;
				padding-bottom: 20px;
				font-size: 0.7em;
				
			}
</style>
<style type="text/css">
	span.block{
		font:normal 12px Tahoma,Verdana;
		border:#000 1px solid;
		padding: 0px;
		display:block;
		float:left;
		margin:0 0 0 0px;
		width:15px;
		text-align:center;
	}
	
</style>
	</head>
	<body>
		<div class='span5  '>
        
			<table cellpadding="0" cellspacing="0" style="font-size: 10px;margin:15px 0 0 0;" >
				                    <tr>
                                    <td colspan="30">
                                    <table cellpadding="0" cellspacing="0" width="580" style="font-size: 10px;border-bottom: 1px solid #000;">
                                    <tr>
                                    <td rowspan="5"><img src="../img/gambar.jpg" width="60" height="60"/></td>
                                    <tr><td colspan="4"><b style="font-size: 12px;"><center>PEMERINTAH KABUPATEN KUNINGAN</center></b>
                                    
                                    <table border="1" style="border: 1px solid #000;float: right;font-size: 8px;margin-top: -20px;">
                                    <tr><td>MODEL :  KP. 1</td></tr></table>
                                    </td>
                                    </tr>
                                    <tr><td><span class="block">&nbsp;</span> &nbsp;BARU</td>
                                    <td>KECAMATAN</td><td>:</td><td>KUNINGAN</td>
                                    </tr>
                                    <tr><td><span class="block">&nbsp;</span> &nbsp;RUBAH</td>
                                    <td>KELURAHAN</td><td>:</td><td>CITANGTU</td>
                                    </tr>
                                    <tr><td><span class="block">&nbsp;</span> &nbsp;HAPUS</td>
                                    <td>KODE KELURAHAN</td><td>:</td><td><?php echo pecahkata($desa,10); ?></td>
                                    </tr>
                                    </tr>
                                    
                                    </table>
                                    </td>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
                                    <tr>
                                    <td colspan="30"><center><u style="font-size: 12px;">FORMULIR ISIAN DATA PENDUDUK</u></center></td>
                                    </tr>
                                    <tr>
                                    <td colspan="30"><center>(diisi dengan huruf cetak)</center></td>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr>
                                    <tr><td colspan="10" style="font-size: 12px;"><b>I.&nbsp;&nbsp;DATA KTP</b></td></tr>
                                    <tr>
                                    <td></td><td>1.</td><td>Nomor KTP</td><td width="10px">:</td><td colspan="10"><?php echo pecahkata($dataku->nik,16); ?></td>
                                    </tr>
                                    <tr>
                                    <td></td><td>2.</td><td>Nama Lengkap</td><td>:</td><td colspan="10"><?php echo pecahkata($dataku->nama,25); ?></td>
                                    </tr>
                                    <tr>
                                    <td></td><td>3.</td><td>Jenis Kelamin</td><td>:</td>
                                    <td>
                                    <table style="font-size: 10px;width: 450px;"> <tr>
                                    <td>
                                    <span class="block"><input name="jenis_kelamin" type="checkbox" value="Laki-laki" <?php if($dataku->jenis_kelamin=='Laki-laki') echo "checked";?>></span>
                                    </td> 
                                    <td >Laki-laki</td>
                                    <td >
                                    <span class="block"><input name="jenis_kelamin" type="checkbox" value="Perempuan" <?php if($dataku->jenis_kelamin=='Perempuan') echo "checked";?>></span> 
                                    </td>
                                    <td>Perempuan</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                    <td>Golongan Darah</td>
                                    <td ><span class="block">&nbsp;</span><span class="block">&nbsp;</span></td>
                                    </tr></table>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td></td><td>4.</td><td>Tanggal Lahir</td><td>:</td>
                                    <td>
                                    <table style="font-size: 10px;width: 450px;"><tr>
                                    <td>Tgl.</td><td><?php echo pecahkata($tanggal,2); ?></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                    <td>Bulan.</td><td><?php echo pecahkata($bulan,2); ?></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                    <td>Tahun.</td><td><?php echo pecahkata($tahun,4); ?></td>
                                    </tr></table>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td></td><td>5.</td><td>Tempat Lahir</td><td>:</td><td colspan="10"><?php echo pecahkata($dataku->tempat,15); ?></td>
                                    </tr>
                                    <tr>
                                    <td></td><td>6.</td><td>Alamat</td><td>:</td><td colspan="10"><?php echo pecahkata($alamat,25); ?></td>
                                    </tr>
                                    
                                    <tr>
                                    <td></td><td></td><td></td><td></td>
                                    <td>
                                    <table style="font-size: 10px;width: 180px;float: right;"><tr>
                                    <td>RT</td><td><?php echo pecahkata(0,1); ?><?php echo pecahkata($dataku->no_rt,1); ?></td>
                                    <td  >RW</td><td><?php echo pecahkata(0,1); ?><?php echo pecahkata($dataku->no_rw,1); ?></td>
                                    </tr></table>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td></td><td>7.</td><td>Kewarganegaraan</td><td>:</td>
                                    <td>
                                    <table style="font-size: 10px;width: 170px;"><tr>
                                    <td><span class="block"><input  type="checkbox" value="WNI" checked></span></td> 
                                    <td>WNI</td>
                                    <td><span class="block"><input  type="checkbox" value="WNA" ></span> </td>
                                    <td>WNA</td>
                                    </tr></table>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td></td><td>8.</td><td >Agama</td><td>:</td>
                                    <td>
                                    <table style="font-size: 10px;width: 450px;">
                                    <tr>
                                    <td ><span class="block"><input name="agama" type="checkbox" <?php if($dataku->agama=='Islam') echo "checked";?>></span></td>
                                    <td>Islam</td>
                                    <td><span class="block"><input name="agama" type="checkbox" <?php if($dataku->agama=='Kristen') echo "checked";?>></span></td>
                                    <td>Kristen</td>
                                    <td><span class="block"><input name="agama" type="checkbox" <?php if($dataku->agama=='Katholik') echo "checked";?>></span></td>
                                    <td>Katolik</td>
                                    <td><span class="block"><input name="agama" type="checkbox" <?php if($dataku->agama=='Hindu') echo "checked";?>></span></td>
                                     <td>Hindu</td>  
                                     <td><span class="block"><input name="agama" type="checkbox" <?php if($dataku->agama=='Budha') echo "checked";?>></span></td>
                                    <td>Budha</td> 
                                    </tr></table>
                                    </td>
                                    </tr >
                                    <tr>
                                    <td></td><td>9.</td><td>Pekerjaan</td><td>:</td><td colspan="10"><?php echo pecahkata($dataku->pekerjaan,25); ?></td>
                                    </tr>
                                    <tr>
                                    <td></td><td>10.</td><td >Pendidikan</td><td>:</td>
                                    <td>
                                    <table style="font-size: 10px;width: 450px;"><tr>
                                    <td ><span class="block"><input name="pendidikan" type="checkbox" <?php if($dataku->pendidikan=='Tidak/Belum Sekolah') echo "checked";?>></span></td>
                                    <td>Tidak Sekolah</td>
                                    <td><span class="block"><input name="pendidikan" type="checkbox" <?php if($dataku->pendidikan=='Belum Tamat SD/Sederajat') echo "checked";?>></span></td>
                                    <td>Tidak Tamat SD</td>
                                    <td><span class="block"><input name="pendidikan" type="checkbox" <?php if($dataku->pendidikan=='Tamat SD/Sederajat') echo "checked";?>></span></td>
                                    <td>Tamat SD</td>
                                    </tr></table>
                                    </td>
                                    
                                    </tr >
                                    <tr>
                                    <td></td><td></td><td ></td><td></td>
                                    <td>
                                    <table style="font-size: 10px;width: 450px;"><tr>
                                    <td ><span class="block"><input name="pendidikan" type="checkbox" <?php if($dataku->pendidikan=='SLTP/Sederajat') echo "checked";?>></span></td>
                                    <td>Tamat SMTP</td><td>&nbsp;&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;&nbsp;</td>
                                    <td><span class="block"><input name="pendidikan" type="checkbox" <?php if($dataku->pendidikan=='SLTA/Sederajat') echo "checked";?>></span></td>
                                    <td>Tamat SMTA</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                    <td><span class="block"><input name="pendidikan" type="checkbox" <?php if($dataku->pendidikan=='Diploma IV/Strata I') echo "checked";?>></span></td>
                                    <td>Sarjana Muda</td>
                                    </tr></table>
                                    </td>
                                    
                                    </tr >
                                    <tr>
                                    <td></td><td></td><td ></td><td></td>
                                    <td>
                                    <table style="font-size: 10px;width: 100px;"><tr>
                                    <td ><span class="block"><input name="pendidkan" type="checkbox" <?php if($dataku->pendidkan=='Diploma IV/Strata I') echo "checked";?>></span></td>
                                    <td>Sarjana</td>
                                    </tr></table>
                                    </td>
                                    
                                    </tr >
                                    <tr>
                                    <td></td><td>11.</td><td style="font-size: 9px;" >Kawin/Tidak Kawin</td><td>:</td>
                                    <td>
                                    <table style="font-size: 10px;width: 400px;"><tr>
                                    <td ><span class="block"><input name="status_nikah" type="checkbox" <?php if($dataku->status_nikah=='Belum Kawin') echo "checked";?>></span></td>
                                    <td>Tidak Kawin</td>
                                    <td><span class="block"><input name="status_nikah" type="checkbox" <?php if($dataku->status_nikah=='Kawin') echo "checked";?>></span></td>
                                    <td>Kawin</td>
                                    <td><span class="block"><input name="status_nikah" type="checkbox" <?php if($dataku->status_nikah=='Cerai Mati') echo "checked";?>></span></td>
                                    <td>Janda</td>
                                    <td><span class="block"><input name="status_nikah" type="checkbox" <?php if($dataku->status_nikah=='Cerai Mati') echo "checked";?>></span></td>
                                     <td>Duda</td>  
                                     
                                    </tr></table>
                                    </td>
                                    </tr >
                                    <tr>
                                    <td></td><td>12.</td><td >Status keluarga</td><td>:</td>
                                    <td>
                                    <table style="font-size: 10px;width: 290px;"><tr>
                                    <td ><span class="block"><input name="status_hub" type="checkbox" <?php if($dataku->status_hub=='Kepala Keluarga') echo "checked";?>></span></td>
                                    <td>Kepala Keluarga</td><td></td>
                                    <td><span class="block"><input name="status_hub" type="checkbox"></span></td>
                                    <td>Anggota Keluarga</td>
                                    </tr></table>
                                    </td>
                                   </tr >
                                    <tr><td colspan="10" style="font-size: 12px;"><b>II.&nbsp;&nbsp;DATA KELUARGA (hanya diisi oleh Kepala Keluarga)</b></td></tr>
                                    <tr>
                                    <td></td><td>1.</td><td  colspan="3">Jumlah anggota keluarga yang memiliki KTP
                                    <table style="float: right;width: 100px;margin-right: 190px;"><tr><td><span class="block">&nbsp;</span><span class="block">&nbsp;</span></td></tr></table>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td></td><td>2.</td><td  colspan="10">Jumlah anggota keluarga yang belum berhak KTP berdasarkan kelompok umur</td>
                                    </tr>
                                    <tr><td></td><td></td><td></td><td></td>
                                    <td>
                                    <table style="font-size: 10px; width: 400px;"><tr>
                                    <td>15-16</td><td><span class="block">&nbsp;</span><span class="block">&nbsp;</span></td>
                                    <td>9-10</td><td><span class="block">&nbsp;</span><span class="block">&nbsp;</span></td>
                                    <td>3-4</td><td><span class="block">&nbsp;</span><span class="block">&nbsp;</span></td>
                                    </tr></table>
                                    </td>
                                    </tr>
                                    <tr><td></td><td></td><td></td><td></td>
                                    <td>
                                    <table style="font-size: 10px; width: 400px;"><tr>
                                    <td>13-14</td><td><span class="block">&nbsp;</span><span class="block">&nbsp;</span></td>
                                    <td>7-8</td><td><span class="block">&nbsp;</span><span class="block">&nbsp;</span></td>
                                    <td>2-3</td><td><span class="block">&nbsp;</span><span class="block">&nbsp;</span></td>
                                    </tr></table>
                                    </td>
                                    </tr>
                                    <tr><td></td><td></td><td></td><td></td>
                                    <td>
                                    <table style="font-size: 10px; width: 400px;"><tr>
                                    <td>11-12</td><td><span class="block">&nbsp;</span><span class="block">&nbsp;</span></td>
                                    <td>5-6</td><td><span class="block">&nbsp;</span><span class="block">&nbsp;</span></td>
                                    <td>1-2</td><td><span class="block">&nbsp;</span><span class="block">&nbsp;</span></td>
                                    </tr></table>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td></td><td>3.</td><td  colspan="10">Jumlah keluarga yang belum berhak KTP berdasarkan kelompok pendidikan</td>
                                    </tr>
                                    <tr><td></td><td></td>
                                    <td colspan="10">
                                    <table style="font-size: 10px; width: 400px;" >
                                    <tr>
                                    <td>a. Belum Sekolah</td><td></td><td></td><td><span class="block">&nbsp;</span><span class="block">&nbsp;</span></td>
                                    <td></td><td>c. Tamat SD</td><td></td><td><span class="block">&nbsp;</span><span class="block">&nbsp;</span></td><td></td>
                                    </tr>
                                    </table>
                                    </td></tr>
                                    <tr><td></td><td></td>
                                    <td colspan="10">
                                    <table style="font-size: 10px; width: 400px;"><tr>
                                    <td>b. Belum Tamat SD</td><td></td><td></td><td><span class="block">&nbsp;</span><span class="block">&nbsp;</span></td>
                                    <td></td><td>d. Tamat SMTP</td><td></td><td><span class="block">&nbsp;</span><span class="block">&nbsp;</span></td>
                                    
                                    </tr></table>
                                    </td></tr>
                                    <tr>
                                    <td colspan="30">
                                    <table cellpadding="0" cellspacing="0" width="580" style="font-size: 10px;border-top: 1px solid #000;">
                                    <tr><td>&nbsp;</td></tr>
                                     <tr>
                                     <td>Mengetahui,</td>
                                    <td align="right"> Citangtu, &nbsp <?php echo $dataku1->tanggal_input ?></td>
                                    </tr>
                                    <tr><td>Lurah Citangtu</td><td align="right">Pemohon</td></tr>
                                    <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr><td><b><u>Yadi Juharyadi</u></b></td><td align="right">( <?php echo $dataku->nama ?> )</td></tr>
                                    
                                    
			                         </table>
                                    </td>
                                    </tr>
                                   
                                    
                                    
			</table>
            <?php
function pecahkata($kata,$limit){
	//Hitung jumlah kata
	$block  = false;
	$jumlah = strlen($kata);
	for($i=0; $i<$jumlah; $i++){
		$huruf = substr($kata,$i,1);
		if(trim($huruf)==''){
			$huruf = '&nbsp;';
		}
		$block.= '<span class="block">'.$huruf.'</span>';
	}
	if($i<$limit){
		$selisih = $limit - $i;
		for($a=0; $a<$selisih; $a++){
			$block .='<span class="block">&nbsp;</span>';
		}
	}
	return $block;
}
?>
			
		</div>
	</body>
</html>

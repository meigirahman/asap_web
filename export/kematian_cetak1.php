<?php		
			
			require ('../inc/config.php');
			$no_surat_kematian=$_GET['no_surat_kematian'];
$qrykoreksi=mysql_query("select no_surat_kematian,DATE_FORMAT(tanggal_meninggal, '%d - %m - %Y') as tanggal_meninggal, hari_meninggal, tempat_meninggal,
umur, desa, kota, sebab, oleh,DATE_FORMAT(tanggal_input, '%d - %m - %Y') as tanggal_input from tb_kematian where  no_surat_kematian='$no_surat_kematian' LIMIT 1");
$qrykoreksi1=mysql_query("select * from tb_detail_kematian where  no_surat_kematian='$no_surat_kematian' LIMIT 1");
$dataku=mysql_fetch_object($qrykoreksi);
$dataku1=mysql_fetch_object($qrykoreksi1);
list($tahun_mngl,$bulan_mngl,$tanggal_mngl) = explode('-',$dataku->tanggal_meninggal);
list($tahun_lhr,$bulan_lhr,$tanggal_lhr) = explode('-',$dataku1->tanggal_lahir);

?>
<html>
	<head>
    <title> <?php echo $dataku1->nama ?></title>
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
		<style type="text/css">		body {
				padding-top: 20px;
				padding-bottom: 40px;
				font-size: 0.7em;
			}
</style>
	</head>
	<body>
		<div class='span7  offset2'>
			<table cellpadding="4" cellspacing="0" style="font-size: 12.5px;margin: -15px 0 0 0;" class="table-condensed">
				                    
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3"><center><u><b>UNTUK YANG BERSANGKUTAN</b></u></center></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="3"><center> <b> SURAT KEMATIAN</b></center></td></tr>
                                    <tr>
                                    <td colspan="3"> <center>No. <?php echo $dataku->no_surat_kematian?></center></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3">Yang bertanda tangan di bawah ini</td>
                                    </tr>
                                    <tr><td colspan="3">menerangkan bahwa pada</td></tr>
                                    <tr>
                                    <td width="82px">Nama</td><td>:</td><td><b><?php echo $dataku1->nama?></b></td>
                                    </tr>
                                    <tr>
                                    <td>Jenis Kelamin</td><td>:</td><td><?php echo $dataku1->jenis_kelamin?></td>
                                    </tr>
                                    <tr>
                                    <td>Alamat</td><td>:</td><td> CITANGTU &nbsp;<?php echo $dataku1->no_rt?>/<?php echo $dataku1->no_rw?></td>
                                    </tr>
                                    <tr><td>Umur</td><td>:</td><td> <?php echo $dataku->umur?> tahun</td>
                                    </tr>
                                    <tr><td></td></tr>
                                    <tr><td colspan="4">Telah meninggal dunia pada : </td></tr>
                        
                                    <tr>
                                    <td>Hari</td><td>:</td>
                                    <td><?php echo $dataku->hari_meninggal?></td></tr>
                                    <tr>
                                    <td>Tanggal</td><td>:</td><td> <?php echo $dataku->tanggal_meninggal?></td>
                                    </tr>
                                    <tr>
                                    <td>Di</td><td>:</td>
                                    <td><?php echo $dataku->tempat_meninggal?></td></tr>
                                    
                                    
                                    <tr><td><td></td></td><td><?php echo $dataku->desa?>, <?php echo $dataku->kota?></td></tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="3">Disebabkan karena :  <?php echo $dataku->sebab?></td></tr>
                                    
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3">Surat Keterangan ini dibuat atas dasar</td>
                                    </tr>
                                    <tr><td colspan="3">yang sebenarnya.</td></tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3" align="right"> Citangtu, &nbsp <?php echo $dataku->tanggal_input ?></td>
                                    </tr>
                                    <tr><td colspan="3" align="center">Lurah Citangtu </td></tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="3"><center><b><u>Yadi Juharyadi</u></b></center></td></tr>
                                    
			</table>
			
		</div>
        
       <div class='span6  offset1'>
			<table cellpadding="4" cellspacing="0" style="font-size: 12.5px;margin: -15px 0 0 0;" class="table-condensed">
				                    
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3"><center><u><b>UNTUK ARSIP DESA/KELURAHAN</b></u></center></td><td></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="3"><center><b> SURAT KEMATIAN</b></center></td></tr>
                                    <tr>
                                    <td colspan="3"> <center>No. <?php echo $dataku->no_surat_kematian?></center></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3">Yang bertanda tangan di bawah ini</td>
                                    </tr>
                                    <tr><td colspan="3">menerangkan bahwa pada</td></tr>
                                    <tr>
                                    <td width="82px">Nama</td><td>:</td><td><b><?php echo $dataku1->nama?></b></td>
                                    </tr>
                                    <tr>
                                    <td>Jenis Kelamin</td><td>:</td><td><?php echo $dataku1->jenis_kelamin?></td>
                                    </tr>
                                    <tr>
                                    <td>Alamat</td><td>:</td><td> CITANGTU &nbsp;<?php echo $dataku1->no_rt?>/<?php echo $dataku1->no_rw?></td>
                                    </tr>
                                    <tr><td>Umur</td><td>:</td><td> <?php echo $dataku->umur?> tahun</td>
                                    </tr>
                                    <tr><td></td></tr>
                                    <tr><td colspan="4">Telah meninggal dunia pada : </td></tr>
                        
                                    <tr>
                                    <td>Hari</td><td>:</td>
                                    <td><?php echo $dataku->hari_meninggal?></td></tr>
                                    <tr>
                                    <td>Tanggal</td><td>:</td><td> <?php echo $dataku->tanggal_meninggal?></td>
                                    </tr>
                                    <tr>
                                    <td>Di</td><td>:</td>
                                    <td><?php echo $dataku->tempat_meninggal?></td></tr>
                                    
                                    
                                    <tr><td><td></td></td><td><?php echo $dataku->desa?>, <?php echo $dataku->kota?></td></tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="3">Disebabkan karena :  <?php echo $dataku->sebab?></td></tr>
                                    
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3">Surat Keterangan ini dibuat atas dasar</td>
                                    </tr>
                                    <tr><td colspan="3">yang sebenarnya.</td></tr>
                                    <tr><td colspan="3">Nama yang melaporkan :</td></tr>
                                    <tr><td colspan="3">Hub. dengan yang mati :</td></tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <tr>
                                    <td colspan="3" align="right"> Citangtu, &nbsp <?php echo $dataku->tanggal_input ?></td>
                                    </tr>
                                    <tr><td colspan="3" align="center">Lurah Citangtu</td></tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="3"><center><b><u>YadiJuharyadi</u></b></center></td></tr>
                                    
			</table>
			
		</div>
        
        <div class='span9  offset3'>
			<center><table cellpadding="4" cellspacing="0" style="font-size: 12.5px;margin: -15px 0 0 0;;" class="table-condensed">
				                    
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                    <td colspan="3"><u><b>ARSIP UNTUK KECAMATAN</b></u></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="28"><center><b>SURAT KEMATIAN</b> </center></td></tr>
                                    <tr>
                                    <td colspan="28"> <center>No. <?php echo $dataku->no_surat_kematian?></center></td>
                                    </tr>
                                    <tr><td></td></tr><tr><td></td></tr>
                                    <table  cellpadding="4" cellspacing="0" style="font-size: 12.5px;margin: 0 0px 0 0;border: 1px solid#000;width: 540px;" class="table-condensed">
                                    <tr>
                                    <td>1.</td><td >Nama Lengkap</td><td>:</td>
                                    <td><?php echo $dataku1->nama?></td>
                                    </tr>
                                    <tr>
                                    <td>2.</td><td>Jenis Kelamin</td><td>:</td>
                                    <td>Laki-laki &nbsp;&nbsp;
                                        <input name="jenis_kelamin" type="checkbox" value="Laki-laki" <?php if($dataku1->jenis_kelamin=='Laki-laki') echo "checked";?>>
                                        &nbsp;&nbsp;Perempuan
                                        <input name="jenis_kelamin" type="checkbox" value="Perempuan" <?php if($dataku1->jenis_kelamin=='Perempuan') echo "checked";?>>
                                         </td>
                                    </tr>
                                    <tr>
                                    <td>3.</td><td>Alamat</td><td>:</td>
                                    <td> CITANGTU &nbsp;<?php echo $dataku1->no_rt?> / <?php echo $dataku1->no_rw?></td>
                                    </tr>
                                    <tr>
                                    <td>4.</td><td>Dilahirkan</td><td>:</td>
                                    <td>Tgl. &nbsp;&nbsp;<?php echo $tanggal_lhr?> &nbsp;&nbsp;bln. &nbsp;&nbsp;<?php echo $bulan_lhr?>&nbsp;&nbsp;&nbsp;th.&nbsp; &nbsp;<?php echo $tahun_lhr?></td>
                                    </tr>
                                    <tr>
                                    <td>5.</td><td>Tanggal Kematian</td><td>:</td>
                                    <td>Tgl. &nbsp;&nbsp;<?php echo $tahun_mngl?> &nbsp;&nbsp;bln. &nbsp;<?php echo $bulan_mngl?>&nbsp;&nbsp;th. &nbsp;<?php echo $tanggal_mngl?></td>
                                    </tr>
                                    <tr>
                                    <td>6.</td><td>Umur pada saat kematian </td><td>:</td>
                                    <td> <?php echo $dataku->umur?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; hari/bulan/tahun.*)</td>
                                    </tr>
                                    <tr>
                                    <td>7.</td><td>Kewarganegaraan</td><td>:</td>
                                    <td>WNRI &nbsp;&nbsp;
                                        <input  type="checkbox" value="WNRI" checked>
                                        &nbsp;&nbsp;Orang Asing
                                        <input  type="checkbox" value="Orang Asing">
                                         </td></tr>
                                    <tr>
                                    <td>8.</td><td >Agama</td><td>:</td>
                                    <td>Islam &nbsp;&nbsp;
                                        <input name="agama" type="checkbox" <?php if($dataku1->agama=='Islam') echo "checked";?>>
                                        &nbsp;&nbsp;Kristen &nbsp;&nbsp;
                                        <input name="agama" type="checkbox" <?php if($dataku1->agama=='Kristen') echo "checked";?>>
                                        &nbsp;&nbsp;Hindu &nbsp;&nbsp;
                                        <input name="agama" type="checkbox" <?php if($dataku1->agama=='Hindu') echo "checked";?>>
                                        &nbsp;&nbsp;Budha &nbsp;&nbsp;
                                        <input name="agama" type="checkbox" <?php if($dataku1->agama=='Budha') echo "checked";?>>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td></td><td></td><td></td><td>Lainnya &nbsp;&nbsp;
                                        <input name="agama" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>9.</td><td >Status Perkawinan</td><td>:</td>
                                    <td>Belum Kawin &nbsp;&nbsp;
                                        <input name="status_nikah" type="checkbox" <?php if($dataku1->status_nikah=='Belum Kawin') echo "checked";?>>
                                        &nbsp;&nbsp;Kawin
                                        <input name="status_nikah" type="checkbox" <?php if($dataku1->status_nikah=='Kawin') echo "checked";?>>
                                         &nbsp;&nbsp;Janda/Duda &nbsp;&nbsp;
                                        <input name="status_nikah" type="checkbox" <?php if($dataku1->status_nikah=='Cerai Mati') echo "checked";?>>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>10.</td><td >Pekerjaan</td><td>:</td>
                                    <td><?php echo $dataku1->pekerjaan?></td>
                                    </tr>
                                    <tr>
                                    <td>11.</td><td >Tempat Kematian</td><td>:</td>
                                    <td>Rumah Sakit &nbsp;&nbsp;
                                        <input name="tempat_meninggal" type="checkbox" <?php if($dataku->tempat_meninggal=='Rumah Sakit') echo "checked";?>>
                                        &nbsp;&nbsp;Bukan Rumah Sakit&nbsp;&nbsp;
                                        <input name="tempat_meninggal" type="checkbox" <?php if($dataku->tempat_meninggal=='Bukan Rumah Sakit') echo "checked";?>>
                                         </td>
                                    </tr>
                                    <tr>
                                    <td></td><td></td><td></td>
                                    <td>Desa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $dataku->desa?></td>
                                    </tr>
                                    <tr>
                                    <td></td><td></td><td></td>
                                    <td>Kab./Kota*)&nbsp;:&nbsp;<?php echo $dataku->kota?></td>
                                    </tr>
                                    <tr>
                                    <td>12.</td><td >Sebab Kematian</td><td>:</td>
                                    <td><?php echo $dataku->sebab?></td>
                                    </tr>
                                    <tr>
                                    <td></td><td >Yang menentukan</td><td>:</td>
                                    <td>Dokter &nbsp;&nbsp;
                                        <input name="oleh" type="checkbox" <?php if($dataku->oleh=='Dokter') echo "checked";?>>
                                        &nbsp;&nbsp;Perawat &nbsp;&nbsp;
                                        <input name="oleh" type="checkbox" <?php if($dataku->oleh=='Perawat') echo "checked";?>>
                                        &nbsp;&nbsp;Ten. Kes Lain &nbsp;&nbsp;
                                        <input name="oleh" type="checkbox" <?php if($dataku->oleh=='Ten. Kes Lain') echo "checked";?>>
                                        </tr>
                                    <tr>
                                    <tr>
                                    <td></td><td></td><td></td><td>Lainnya &nbsp;&nbsp;
                                        <input name="oleh" type="checkbox" <?php if($dataku->oleh=='Lainnya') echo "checked";?>></td>
                                    </td>
                                    </tr>
                                    <td>13.</td><td>No. Kartu Keluarga/ KTP</td><td>:</td>
                                    <td><?php echo $dataku1->no_kk?> / <?php echo $dataku1->nik?></td>
                                    </tr>
                                    </table>
                                    <table  cellpadding="4" cellspacing="0" style="font-size: 12.5px;float: right;" class="table-condensed">
                                     <tr>
                                    <td colspan="3" align="right"> Citangtu, &nbsp <?php echo $dataku->tanggal_input ?></td>
                                    </tr>
                                    <tr><td colspan="3" align="center">Lurah Citangtu</td></tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                    <tr><td colspan="3"><center><b><u>Yadi Juharyadi</u></b></center></td></tr>
                                    <table  cellpadding="4" cellspacing="0" style="font-size: 12.5px;float: left;" class="table-condensed">
                                    <tr><td>*) Coret yang tidak perlu</td></tr>
                                    </table>
                                    
			</table></center>
			
		</div>
	</body>
</html>

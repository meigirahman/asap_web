<?php		
			
			require ('../inc/config.php');
			$no_surat_pindah=$_GET['no_surat_pindah'];
$qrykoreksi=mysql_query("select * from tb_detail_pend_pindah where no_surat_pindah='$no_surat_pindah' ");
$qrykoreksi1=mysql_query("select nama_kk,no_kk,no_rt,no_rw,alasan, alamat_tujuan,rt_tujuan,rw_tujuan,kec_tujuan,kab_tujuan,prov_tujuan,
klsfksi_pindah,jenis_pindah,status_kk_tdkpindah,status_kk_pindah,DATE_FORMAT(tanggal_pindah, '%d-%m-%Y') as tanggal_pindah,DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input from tb_pend_pindah where no_surat_pindah='$no_surat_pindah' LIMIT 1");
$data=mysql_fetch_object($qrykoreksi);
$dataku=mysql_fetch_object($qrykoreksi1);
list($tahun,$bulan,$tanggal) = explode('-',$dataku->tanggal_pindah);

$kodepos='52466';
$telpon='    ';
?>
<html>
	<head>
    <title> <?php echo $data->nama ?></title>
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
		<style type="text/css">		body {
				padding-top: 20px;
				padding-bottom: 10px;
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
		width:29px;
		text-align:center;
	}
    span.block1{
		font:normal 12px Tahoma,Verdana;
		border:#000 1px solid;
		padding: 0px;
		display:block;
		float:left;
		margin:0 0 0 0px;
		width:23px;
		text-align:center;
	}
	
</style>
	</head>
	<body >
		<div class='span2  offset12'>
                    <table style="font-size: 10px; margin-left: -5px;text-align: justify;"cellpadding="3" cellspacing="">
                        <tr><td colspan="20"><center><b style="font-size: 14px;">SURAT KETERANGAN PINDAH DATANG WNI</b></center></td></tr>
                        <tr><td colspan="20"><b style="font-size: 12px;">DATA DAERAH ASAL</b></td></tr>
                        <tr>
                        <td>1.</td><td>Nomor Kartu Keluarga</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="5"><?php echo pecahkata($dataku->no_kk,16); ?></td>
                        </tr>
                        <tr>
                        <td>2.</td><td>Nama Kepala Keluarga</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="5">
                        <table style="border: 1px solid #000;font-size: 11px;width: 550px;"><tr><td><b><?php echo $dataku->nama_kk ?></b></td></tr></table>
                        </td>
                        </tr>
                        <tr>
                        <td>3.</td><td>Alamat</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="10">
                        <table style="border: 1px solid #000;font-size: 11px;width: 250px;"><tr><td><b>CEMPAKA</b></td></tr></table>
                        <table style="font-size: 11px;float: right;margin-top: -20px;margin-right: 3px;"><tr><td>RT</td><td>&nbsp;</td>
                        <td><?php echo pecahkata1(0,1); ?><?php echo pecahkata1(0,1); ?><?php echo pecahkata1($dataku->no_rt,1); ?></td><td>&nbsp;</td>
                        <td>RW</td><td>&nbsp;</td>
                        <td><?php echo pecahkata1(0,1); ?><?php echo pecahkata1(0,1); ?><?php echo pecahkata1($dataku->no_rw,1); ?></td></tr></table>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="10">
                        <table style="font-size: 11px;">
                        <tr>
                        <td>&nbsp;</td> <td>&nbsp;</td><td>a.&nbsp;&nbsp;Desa/Keluarahan</td><td></td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;&nbsp;</td>
                        <td>
                        <table style="border: 1px solid #000;font-size: 10px;width: 225px;"><tr><td><b>CEMPAKA</b></td></tr></table>
                        </td>
                         <td>&nbsp;</td>           
                        <td>&nbsp;</td><td>c.&nbsp;&nbsp;Kab/Kota</td><td></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>
                        <table style="border: 1px solid #000;font-size: 10px;width: 225px;"><tr><td><b>TEGAL</b></td></tr></table>
                        </td>
                        </tr>
                        </table>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="10">
                        <table style="font-size: 11px;">
                        <tr>
                        <td>&nbsp;</td> <td>&nbsp;</td><td>b.&nbsp;&nbsp;Kecamatan</td><td></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>
                        <table style="border: 1px solid #000;font-size: 10px;width: 225px;"><tr><td><b>BUMIJAWA</b></td></tr></table>
                        </td>
                         <td>&nbsp;</td>           
                        <td>&nbsp;&nbsp;</td><td>d.&nbsp;&nbsp;Provinsi</td><td></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td>
                        <td>
                        <table style="border: 1px solid #000;font-size: 10px;width: 225px;"><tr><td><b>JAWA TENGAH</b></td></tr></table>
                        </td>
                        </tr>
                        
                        </table>
                        </td>
                        </tr> 
                        <tr>
                        <td colspan="10">
                        <table style="font-size: 11px;">
                        <tr>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                         <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td> 
                         <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td> <td>&nbsp;</td><td>Kode Pos</td><td></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        
                        <td colspan="5"><?php echo pecahkata($kodepos,5); ?></td>
                         <td>&nbsp;</td> <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>          
                        <td>&nbsp;</td><td>Telpon</td><td></td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="5"><?php echo pecahkata1($telpon,10); ?></td>
                        </tr>
                        </table>
                        </td>
                        </tr> 
                        <tr><td colspan="20"><b style="font-size: 12px;">DATA KEPINDAHAN</b></td></tr>
                        <tr>
                        <td>1.</td><td>Alasan Pindah</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="5"><?php echo pecahkata($dataku->alasan,1); ?>
                        <table style="font-size: 11px;margin-top: -5px;margin-left: 50px;">
                        <tr><td>1. Pekerjaan &nbsp;&nbsp;&nbsp;</td><td>3. Keamanan&nbsp;&nbsp;&nbsp;</td><td>5. Perumahan&nbsp;&nbsp;&nbsp;</td><td>7. Lainnya (sebutkan)</td></tr>
                        <tr><td>2. Pendidikan&nbsp;&nbsp;&nbsp;</td><td>4. Kesehatan&nbsp;&nbsp;&nbsp;</td><td>6. Keluarga</td><td></td></tr>
                        </table>
                        </td>
                        </tr> 
                        <tr>
                        <td>3.</td><td>Alamat Tujuan Pindah</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="10">
                        <table style="border: 1px solid #000;font-size: 11px;width: 250px;"><tr><td><b><?php echo $dataku->alamat_tujuan ?></b></td></tr></table>
                        <table style="font-size: 11px;float: right;margin-top: -20px;margin-right: 3px;"><tr><td>RT</td><td>&nbsp;</td>
                        <td><?php echo pecahkata1(0,1); ?><?php echo pecahkata1(0,1); ?><?php echo pecahkata1($dataku->rt_tujuan,1); ?></td><td>&nbsp;</td>
                        <td>RW</td><td>&nbsp;</td>
                        <td><?php echo pecahkata1(0,1); ?><?php echo pecahkata1(0,1); ?><?php echo pecahkata1($dataku->rw_tujuan,1); ?></td></tr></table>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="10">
                        <table style="font-size: 11px;">
                        <tr>
                        <td>&nbsp;</td> <td>&nbsp;</td><td>a.&nbsp;&nbsp;Desa/Keluarahan</td><td></td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;&nbsp;</td>
                        <td>
                        <table style="border: 1px solid #000;font-size: 10px;width: 225px;"><tr><td><b><?php echo $dataku->alamat_tujuan ?></b></td></tr></table>
                        </td>
                         <td>&nbsp;</td>           
                        <td>&nbsp;</td><td>c.&nbsp;&nbsp;Kab/Kota</td><td></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>
                        <table style="border: 1px solid #000;font-size: 10px;width: 225px;"><tr><td><b><?php echo $dataku->kab_tujuan ?></b></td></tr></table>
                        </td>
                        </tr>
                        </table>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="10">
                        <table style="font-size: 11px;">
                        <tr>
                        <td>&nbsp;</td> <td>&nbsp;</td><td>b.&nbsp;&nbsp;Kecamatan</td><td></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>
                        <table style="border: 1px solid #000;font-size: 10px;width: 225px;"><tr><td><b><?php echo $dataku->kec_tujuan ?></b></td></tr></table>
                        </td>
                         <td>&nbsp;</td>           
                        <td>&nbsp;&nbsp;</td><td>d.&nbsp;&nbsp;Provinsi</td><td></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td>
                        <td>
                        <table style="border: 1px solid #000;font-size: 10px;width: 225px;"><tr><td><b><?php echo $dataku->prov_tujuan ?></b></td></tr></table>
                        </td>
                        </tr>
                        
                        </table>
                        </td>
                        </tr> 
                        <tr>
                        <td colspan="10">
                        <table style="font-size: 11px;">
                        <tr>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                         <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td> 
                         <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td> <td>&nbsp;</td><td>Kode Pos</td><td></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        
                        <td colspan="5"><?php echo pecahkata($telpon,5); ?></td>
                         <td>&nbsp;</td> <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>          
                        <td>&nbsp;</td><td>Telpon</td><td></td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="5"><?php echo pecahkata1($telpon,10); ?></td>
                        </tr>
                        </table>
                        </td>
                        </tr> 
                        <tr>
                        <td>3.</td><td>Klasifikasi Pindah</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="5"><?php echo pecahkata($dataku->klsfksi_pindah,1); ?>
                        <table style="font-size: 11px;margin-top: -5px;margin-left: 50px;">
                        <tr><td>1. Dalam satu Desa/Keluarahan &nbsp;&nbsp;&nbsp;</td><td>3. Antar Kecamatan&nbsp;&nbsp;&nbsp;</td><td>5. Antar Provinsi&nbsp;&nbsp;&nbsp;</td><td></td></tr>
                        <tr><td>2. Antar Desa/Kelurahan&nbsp;&nbsp;&nbsp;</td><td>4. Antar Kab/Kota&nbsp;&nbsp;&nbsp;</td><td></td><td></td></tr>
                        </table>
                        </td>
                        </tr>
                        <tr>
                        <td>4.</td><td>Jenis Kepindahan</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="5"><?php echo pecahkata($dataku->jenis_pindah,1); ?>
                        <table style="font-size: 11px;margin-top: -5px;margin-left: 50px;">
                        <tr><td>1. Kep. Keluarga &nbsp;&nbsp;&nbsp;</td><td>3. Kep. Keluarga dan Seluruh Sbg. Angg. Keluarga&nbsp;&nbsp;&nbsp;</td><td></td><td></td></tr>
                        <tr><td>2. Kep. Keluarga dan Seluruh Angg. Keluarga&nbsp;&nbsp;&nbsp;</td><td>4. Angg. Keluarga&nbsp;&nbsp;&nbsp;</td><td></td><td></td></tr>
                        </table>
                        </td>
                        </tr> 
                        <tr>
                        <td>5.</td><td>Status Nomor KK Bagi<br /> Yang Tidak Pindah</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="5"><?php echo pecahkata($dataku->status_kk_tdkpindah,1); ?>
                        <table style="font-size: 11px;margin-top: -5px;margin-left: 50px;">
                        <tr><td>1. Numpang KK &nbsp;&nbsp;&nbsp;</td><td>3. Tida Ada Angg. Keluarga Yang Ditinggal&nbsp;&nbsp;&nbsp;</td><td></td><td></td></tr>
                        <tr><td>2. Membuat KK Baru&nbsp;&nbsp;&nbsp;</td><td>4. Nomor KK Tetap&nbsp;&nbsp;&nbsp;</td><td></td><td></td></tr>
                        </table>
                        </td>
                        </tr>
                        <tr>
                        <td>6.</td><td>Status Nomor KK Bagi<br /> Yang Pindah</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="5"><?php echo pecahkata($dataku->status_kk_pindah,1); ?>
                        <table style="font-size: 11px;margin-left: 50px;">
                        <tr><td>1. Numpang KK &nbsp;&nbsp;&nbsp;</td><td>2. Membuat KK Baru&nbsp;&nbsp;&nbsp;</td><td>3. Nama Kep. Keluarga dan Nomor KK Tetap</td><td></td></tr>
                        </table>
                        </td>
                        </tr> 
                        <tr>
                        <td>7.</td><td>Rencana Tgl. Pindah</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="5"><?php echo pecahkata($dataku->tanggal_pindah,10); ?></td>
                        </tr>
                        <tr>
                        <td>8.</td><td>Keluarga Yang Pindah</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        </tr> 
                        <tr><td>&nbsp;</td><td colspan="20">
                        <table border="1" style="font-size: 11px;">
                                    <tr style="border: 1px solid #000;"> 
                                    <th style="border: 1px solid #000;" align="center">No</th>
                                    <th style="border: 1px solid #000;" align="center">NIK</th>
                                    <th style="border: 1px solid #000;" align="center" >NAMA</th>
                                    <th style="border: 1px solid #000;" align="center" colspan="2">SHDK</th>
                                    </tr>
                                    <?
                                    $no_surat_pindah=$_GET['no_surat_pindah'];
                                    $myquery="select  nama,nik from tb_detail_pend_pindah where no_surat_pindah='$no_surat_pindah' order by status_hub desc ";
                                    $no=1;
                                    
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr>
                                    <td style="border: 1px solid #000;" width="10px" align="center"><?php echo $no;?></td>
                                    <td style="border: 1px solid #000;" width="400px"><b><?php echo pecahkata1($dataku->nik,16)?></b></td>
                                    <td style="border: 1px solid #000;" width="210px">&nbsp;&nbsp;&nbsp;<b><?php echo $dataku->nama?></b></td>
                                    <td style="border: 1px solid #000;" width="20" align="center"></td>
                                    <td style="border: 1px solid #000;" width="30" align="center"></td>
                                    </tr>
                                    
                                    <?php
                                    $no++;
                                    }
                                    ?>
                                    </table>
                        </td></tr>
                        <?php		
                        require ('../inc/config.php');
                        $no_surat_pindah=$_GET['no_surat_pindah'];
                        $qrykoreksi1=mysql_query("select nama_kk,DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input,no_surat_pindah from tb_pend_pindah where no_surat_pindah='$no_surat_pindah' LIMIT 1");
                        $u=mysql_fetch_object($qrykoreksi1);
                        ?>
                        <table style="font-size: 11px;width:700px">
                        <tr><td></td><td></td><td></td><td></td><td></td><td>Diketahui Oleh :</td><td></td><td></td><td>&nbsp;</td><td></td><td></td><td></td><td><td></td><td></td><td>Diketahui Oleh :</td></tr>
                        <tr><td></td><td></td><td></td><td></td><td></td><td>Camat</td><td></td><td></td><td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemohon</td><td></td><td></td><td></td><td><td></td><td></td><td>Kepala Desa/Lurah</td></tr>
                        <tr><td></td><td></td><td></td><td></td><td></td><td>No...........................Tgl............................20...</td><td></td><td></td><td>&nbsp;</td><td></td><td></td><td></td><td></td><td></td><td><td>No.&nbsp;<b><?php echo $u->no_surat_pindah ?></b>&nbsp;&nbsp;Tgl.&nbsp;<b><?php echo $u->tanggal_input ?></b></td></tr>
                        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
                        <tr><td></td><td></td><td></td><td></td><td></td><td>(<u>..............................................................</u>)</td><td></td><td></td><td>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><b><?php echo $u->nama_kk ?></b></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td><td></td><td></td><td></td><td><td></td><td></td><td>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><b>ABDUL KHAYYI</b></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td></tr>
                        </table>
                        
                        </table><br />
                        <table style="font-size: 10px; margin-left: -5px;text-align: justify;"cellpadding="3" cellspacing="">
                        
                        <tr><td colspan="20"><b style="font-size: 12px;">DATA DAERAH TUJUAN</b></td></tr>
                        <?
                        $kosong='   ';
                        ?>
                        <tr>
                        <td>1.</td><td>Nomor Kartu Keluarga</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="5"><?php echo pecahkata($kosong,16); ?></td>
                        </tr>
                        <tr>
                        <td>2.</td><td>Nama Kepala Keluarga</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="5">
                        <table style="border: 1px solid #000;font-size: 11px;width: 550px;"><tr><td><b>&nbsp;</b></td></tr></table>
                        </td>
                        </tr>
                        <tr>
                        <td>3.</td><td>NIK Kepala Keluarga</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="5"><?php echo pecahkata($kosong,16); ?></td>
                        </tr>
                        <tr>
                        <td>4.</td><td>Status Nomor KK Bagi<br /> Yang Pindah</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="5"><?php echo pecahkata($kosong,1); ?>
                        <table style="font-size: 11px;margin-left: 50px;">
                        <tr><td>1. Numpang KK &nbsp;&nbsp;&nbsp;</td><td>2. Membuat KK Baru&nbsp;&nbsp;&nbsp;</td><td>3. Nama Kep. Keluarga dan Nomor KK Tetap</td><td></td></tr>
                        </table>
                        </td>
                        </tr>
                        <tr>
                        <td>5.</td><td>Rencana Tgl. Pindah</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="5"><?php echo pecahkata($dataku->tanggal_pindah,10); ?></td>
                        </tr>
                        
                        <tr>
                        <td>6.</td><td>Alamat</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="10">
                        <table style="border: 1px solid #000;font-size: 11px;width: 250px;"><tr><td><b>&nbsp;</b></td></tr></table>
                        <table style="font-size: 11px;float: right;margin-top: -20px;margin-right: 3px;"><tr><td>RT</td><td>&nbsp;</td>
                        <td><?php echo pecahkata1($kosong,3); ?></td><td>&nbsp;</td>
                        <td>RW</td><td>&nbsp;</td>
                        <td><?php echo pecahkata1($kosong,3); ?></td></tr></table>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="10">
                        <table style="font-size: 11px;">
                        <tr>
                        <td>&nbsp;</td> <td>&nbsp;</td><td>a.&nbsp;&nbsp;Desa/Keluarahan</td><td></td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;&nbsp;</td>
                        <td>
                        <table style="border: 1px solid #000;font-size: 10px;width: 225px;"><tr><td><b>&nbsp;</b></td></tr></table>
                        </td>
                         <td>&nbsp;</td>           
                        <td>&nbsp;</td><td>c.&nbsp;&nbsp;Kab/Kota</td><td></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>
                        <table style="border: 1px solid #000;font-size: 10px;width: 225px;"><tr><td><b>&nbsp;</b></td></tr></table>
                        </td>
                        </tr>
                        </table>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="10">
                        <table style="font-size: 11px;">
                        <tr>
                        <td>&nbsp;</td> <td>&nbsp;</td><td>b.&nbsp;&nbsp;Kecamatan</td><td></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>
                        <table style="border: 1px solid #000;font-size: 10px;width: 225px;"><tr><td><b>&nbsp;</b></td></tr></table>
                        </td>
                         <td>&nbsp;</td>           
                        <td>&nbsp;&nbsp;</td><td>d.&nbsp;&nbsp;Provinsi</td><td></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td>
                        <td>
                        <table style="border: 1px solid #000;font-size: 10px;width: 225px;"><tr><td><b>&nbsp;</b></td></tr></table>
                        </td>
                        </tr>
                        
                        </table>
                        </td>
                        </tr> 
                        <tr>
                        <td>7.</td><td>Keluarga Yang Datang</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        </tr> 
                        <tr><td>&nbsp;</td><td colspan="20">
                        <table border="1" style="font-size: 11px;">
                                    <tr style="border: 1px solid #000;"> 
                                    <th style="border: 1px solid #000;" align="center">No</th>
                                    <th style="border: 1px solid #000;" align="center">NIK</th>
                                    <th style="border: 1px solid #000;" align="center" >NAMA</th>
                                    <th style="border: 1px solid #000;" align="center" colspan="2">SHDK</th>
                                    </tr>
                                    <?
                                    $no=1;
                                    for($no=1;$no<=7;$no++){
                                    ?>
                                    <tr>
                                    <td style="border: 1px solid #000;" width="10px" align="center"></td>
                                    <td style="border: 1px solid #000;" width="400px"><b><?php echo pecahkata1($kosong,16)?></b></td>
                                    <td style="border: 1px solid #000;" width="210px">&nbsp;&nbsp;&nbsp;<b></b></td>
                                    <td style="border: 1px solid #000;" width="20" align="center"></td>
                                    <td style="border: 1px solid #000;" width="30" align="center"></td>
                                    </tr>
                                    <?
                                    }
                                    ?>
                                     
                                    </table>
                        </td></tr>
                        <table style="font-size: 11px;width:700px">
                        <tr><td></td><td></td><td></td><td></td><td></td><td>Diketahui Oleh :</td><td></td><td></td><td>&nbsp;</td><td></td><td></td><td></td><td><td></td><td></td><td>Diketahui Oleh :</td></tr>
                        <tr><td></td><td></td><td></td><td></td><td></td><td>Camat</td><td></td><td></td><td align="center"></td><td></td><td></td><td></td><td><td></td><td></td><td>Kepala Desa/Lurah</td></tr>
                        <tr><td></td><td></td><td></td><td></td><td></td><td>No...........................Tgl............................20...</td><td></td><td></td><td>&nbsp;</td><td></td><td></td><td></td><td></td><td></td><td><td>No...........................Tgl............................20...</td></tr>
                        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
                        <tr><td></td><td></td><td></td><td></td><td></td><td>(<u>..............................................................</u>)</td><td></td><td></td><td></td><td></td><td></td><td></td><td><td></td><td></td><td>(<u>..............................................................</u>)</td></tr>
                        </table>
                        
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
function pecahkata1($kata,$limit){
	//Hitung jumlah kata
	$block  = false;
	$jumlah = strlen($kata);
	for($i=0; $i<$jumlah; $i++){
		$huruf = substr($kata,$i,1);
		if(trim($huruf)==''){
			$huruf = '&nbsp;';
		}
		$block.= '<span class="block1">'.$huruf.'</span>';
	}
	if($i<$limit){
		$selisih = $limit - $i;
		for($a=0; $a<$selisih; $a++){
			$block .='<span class="block1">&nbsp;</span>';
		}
	}
	return $block;
}
?>
                     
            
			
		</div>
	</body>
</html>

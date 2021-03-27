<?php		
			
			require ('../inc/config.php');
			$no_reg_kk=$_GET['no_reg_kk'];
$qrykoreksi=mysql_query("select no_reg_kk, nama_kk,no_rt,no_rw,jml_anggota,DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input from tb_kk  where no_reg_kk='$no_reg_kk' LIMIT 1");
$kk=mysql_fetch_object($qrykoreksi);
$kodepos='52466';
$kosong=' ';
$prov='33'; $kab='28';$kec='02';$desa='2013';
?>
<html>
	<head>
    <title> <?php echo $kk->nama_kk ?></title>
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
        <link href="../assets/css/tab.css" rel="stylesheet">
		<style type="text/css">		body {
				padding-top: 20px;
				padding-bottom: 10px;
				font-size: 0.7em;
			}
</style>
<style type="text/css">
	span.block{
		font:normal 7px Tahoma,Verdana;
		border:#000 1px solid;
		padding: 0px;
		display:block;
		margin:0 0 0 0px;
		width:13px;
        height: 8px;
		text-align:center;
        	float: left;
	}
	
</style>
<style type="text/css">
	span.block1{
		font:normal 7px Tahoma,Verdana;
		border:#000 1px solid;
		padding: 0px;
		display:block;
		margin:0 0 0 0px;
		width:13px;
        height: 8px;
		text-align:center;
        
	}
	
</style>
<style type="text/css">
	span.block2{
		font:normal 7px Tahoma,Verdana;
		border:#000 1px solid;
		padding: 0px;
		display:block;
		float: left;
		margin:0 0 0 13px;
		width:13px;height: 8px;
		text-align:center;
	}
	
</style>
<style type="text/css">
	span.block3{
		font:normal 7px Tahoma,Verdana;
		border:#000 1px solid;
		padding: 0px;
		display:block;
		float: right;
		margin:0 12px 0 0px;
		width:13px;height: 8px;
		text-align:center;
	}
	
</style>
	</head>
	<body>
		<div class='span13'>
                <table style="font-size: 6px; margin-left: 25px;text-align: justify;margin-top: -10px;">
                    <tr>
                    <td>
                    <table width="800px">
                    <tr>
                    <td rowspan="3" width="100px"><img src="../img/tegal.jpg" width="30" height="30"/></td>
                    <td><b style="font-size: 14px;"><center>PEMERINTAH KABUPATEN TEGAL</center></b></td>
                    </tr>
                    <tr>
                    <td><b style="font-size: 10px;"><center>FORMULIR ISIAN BIODATA PENDUDUK UNTUK WNI (PER KELUARGA)</center></b></td>
                    </tr>
                    <tr>
                    <td align="right">
                    <table border="1" style="border: 1px solid #000;float: right;font-size: 8px;margin-top: -20px; ">
                    <tr><td>F-1.01</td></tr></table>
                    </td>
                    </tr>
                    <tr>
                    <td align="left" colspan="6">
                    <table border="1" style="border: 1px solid #000;float: left;font-size: 5px; ">
                    <tr><td >PERHATIAN: Isilah formulir ini dengan huruf cetak dan jelas, serta mengikuti "TATA CARA PENGISIAN FORMULIR" pada halaman sebaliknya</td></tr></table>
                    </td>
                    </tr>
                    </table>
                    </td>
                    </tr>
                    <tr><td colspan="10">DATA KEPALA KELUARGA</td></tr>
                    <tr>
                    <td colspan="20">
                    <table width="900px" style="font-size: 6px;">
                    <tr>
                    <td>
                    <table width="570px" style="font-size: 6px;">
                    <tr>
                    <td >Nama Kepala Keluarga</td><td>&nbsp;</td>
                    <td>
                    <table style="border: 1px solid #000;font-size: 7px;width:350px;"><tr><td><b><?php echo $kk->nama_kk ?></b></td></tr></table>
                    </td>
                    </tr>
                    <tr>
                    <td>Alamat</td><td>&nbsp;</td>
                    <td>
                    <table style="border: 1px solid #000;font-size: 7px;width: 350px;"><tr><td><b><?php echo "CEMPAKA" ?></b></td></tr></table>
                    </td>
                    </tr>
                    <tr>
                    <td>Kode Pos</td><td>&nbsp;</td>
                    <td>
                    <table style="font-size:6px;width: 350px;">
                    <tr>
                    <td><?php echo pecahkata($kodepos,5); ?></td>
                    <td>RT</td>
                    <td><?php echo pecahkata(0,1); ?><?php echo pecahkata(0,1); ?><?php echo pecahkata($kk->no_rt,1); ?></td>
                    <td>RW</td>
                    <td><?php echo pecahkata(0,1); ?><?php echo pecahkata(0,1); ?><?php echo pecahkata($kk->no_rw,1); ?></td>
                    <td>Jumlah Anggota Keluarg</td>
                    <td><?php echo pecahkata(0,1); ?><?php echo pecahkata(0,1); ?><?php echo pecahkata($kk->jml_anggota,1); ?></td><td> orang</td>
                    </tr>
                    </table></td>
                    </tr>
                    <tr>
                    <td>Telpon</td><td>&nbsp;</td>
                    <td>
                    <table style="font-size: 6px;width: 500px;"><tr>
                    <td><?php echo pecahkata($kosong,12); ?></td>
                    </tr>
                    </table></td>
                    </tr>
                    </table>
                    <table width="600px" style="font-size: 6px;float: right;margin-right: -150px;margin-top: -65px;">
                    <tr>
                    <td width="90px">Kode Nama Provinsi</td><td>&nbsp;</td>
                    <td width="60px"><?php echo pecahkata($prov,2); ?></td>
                    <td>
                    <table style="border: 1px solid #000;font-size: 7px;width: 240px;"><tr><td><b><?php echo "JAWA TENGAH" ?></b></td></tr></table>
                    </td>
                    </tr>
                    <tr>
                    <td>Kode Nama Kabupaten/Kota</td><td>&nbsp;</td>
                    <td><?php echo pecahkata($kab,2); ?></td>
                    <td>
                    <table style="border: 1px solid #000;font-size: 7px;width: 240px;"><tr><td><b><?php echo "TEGAL" ?></b></td></tr></table>
                    </td>
                    </tr>
                    <tr>
                    <td>Kode Nama Kecamatan</td><td>&nbsp;</td>
                    <td><?php echo pecahkata($kec,2); ?></td>
                    <td>
                    <table style="border: 1px solid #000;font-size: 7px;width: 240px;"><tr><td><b><?php echo "BUMIJAWA" ?></b></td></tr></table>
                    </td>
                    </tr>
                    <tr>
                    <td>Kode Nama Desa/Keluarahan</td><td>&nbsp;</td>
                    <td><?php echo pecahkata($desa,4); ?></td>
                    <td>
                    <table style="border: 1px solid #000;font-size: 7px;width: 240px;"><tr><td><b><?php echo "CEMPAKA" ?></b></td></tr></table>
                    </td>
                    </tr>
                    <tr>
                    <td>Kode Dusun/Dukuh Kampung<br />Lingkungan/Banjar/Nagari</td><td>&nbsp;</td>
                    
                    <td colspan="3">
                    <table style="border: 1px solid #000;font-size: 7px;width: 300px;"><tr><td><b><?php echo "CEMPAKA" ?></b></td></tr></table>
                    </td>
                    </tr>
                    </table>
                    </td>
                    </tr>
                    </table></td></tr>
                    <tr><td colspan="10">DATA KELUARGA</td></tr>
                    <tr>
                    <td>
                    <table  class="tab"  align="center">
                    <tr> 
                    <th align="center"width="20px">No</th>
                    <th align="center" width="400px">Nama Lengkap</th>
                    <th align="center"width="300px">No KTP/Nopen</th>
                    <th align="center"width="300px">Alamat Sebelumnya</th>
                    <th align="center"width="200px">Nomor Paspor</th>
                    <th align="center"width="300px">Tanggal Berakhir Paspor</th>
                    </tr>
                    <tr> 
                    <th align="center">1</th>
                    <th align="center" >2</th>
                    <th align="center">3</th>
                    <th align="center">4</th>
                    <th align="center">5</th>
                    <th align="center">6</th>
                    </tr>
                        <?
                        $no_reg_kk=$_GET['no_reg_kk'];
                        $myquery="select no_reg_kk, nama,nik from tb_detail_kk where no_reg_kk='$no_reg_kk'";
                        $no=1;
                        $daftar=mysql_query($myquery) or die (mysql_error());
						$jml_anggota=mysql_num_rows($daftar);
						$jml_kurang=10-$jml_anggota;
                            while($dataku=mysql_fetch_object($daftar))
                            {
                        ?>
                    <tr> 
                    <td align="center"><?php echo $no;?></td>
                    <td >&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dataku->nama?></td>
                    <td align="center"><?php echo $dataku->nik?></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    </tr>
                        <?
                        $no++;
                         }
                        ?>
					<?php
					for ($i=1;$i<=$jml_kurang;$i++){
					?>
					<tr> 
                    <td align="center"><?php echo $no;?></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    </tr>
					<?php $no++; } ?>
                    </table>
                    <br />
                    <table class="tab"  align="center" style="border: 1px solid black;">
                    <tr> 
                    <th align="center"width="20px">No</th>
                    <th align="center" width="50px">Jenis Kelamin</th>
                    <th align="center"width="300px">Tempat Lahir</th>
                    <th align="center"width="500px" style="font-size: 6px;">Tanggal/Bulan/Tahun<br />Lahir</th>
                    <th align="center"width="200px">Umur</th>
                    <th align="center"width="350px" style="font-size: 6px;">Akta Lahir/<br />Surat Lahir</th>
                    <th align="center"width="550px" style="font-size: 6px;">No Akta Kelahiran/<br />Surat Kenal Lahir</th>
                     <th align="center"width="300px">Golongan darah</th>
                     <th align="center"width="100px">Agama</th>
                     <th align="center"width="100px">Status Perkawinan</th>
                     <th align="center"width="300px" style="font-size: 6px;">Akta Perkwn/ Buku Nikah</th>
                     <th align="center"width="500px" style="font-size: 5px;"> No Akta Perkawinan/ Buku Nikah</th>
                     <th align="center"width="80px">Tanggal Perkawinan</th>
                      <th align="center"width="300px" style="font-size: 6px;">Akta Cerai/ Surat Cerai</th>
                      <th align="center"width="500px" style="font-size: 5px;"> No Akta Perceraian/ Surat Cerai</th>
                     <th align="center"width="80px">Tanggal Perceraian</th>
                    </tr>
                    <tr> 
                    <th align="center"></th>
                    <th align="center" >7</th>
                    <th align="center">8</th>
                    <th align="center">9</th>
                    <th align="center">10</th>
                    <th align="center">11</th>
                    <th align="center" >12</th>
                    <th align="center">13</th>
                    <th align="center">14</th>
                    <th align="center">15</th>
                    <th align="center">16</th>
                    <th align="center" >17</th>
                    <th align="center">18</th>
                    <th align="center">19</th>
                    <th align="center">20</th>
                    <th align="center">21</th>
                    </tr>
                        <?
                        $no_reg_kk=$_GET['no_reg_kk'];
                        $myquery="select jenis_kelamin,tempat,DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir, no_akta, agama,
                        status_nikah, no_akta_nikah,tanggal_nikah,no_akta_cerai, tanggal_cerai from tb_detail_kk where no_reg_kk='$no_reg_kk'";
                        $no=1;
                        $daftar=mysql_query($myquery) or die (mysql_error());
                        $jml_anggota=mysql_num_rows($daftar);
						$jml_kurang=10-$jml_anggota;
                            while($dataku=mysql_fetch_object($daftar))
                            {
                        ?>
                    <tr> 
                    <td align="center"><?php echo $no;?></td>
                    <td align="center" style="border-bottom:none;border-top:none;">
                    <?php
                    if($dataku->jenis_kelamin=='Perempuan'){
                        echo "<span class='block1'>2</span>";
                    }else if($dataku->jenis_kelamin=='Laki-laki'){
                        echo "<span class='block1'>1</span>";
                    }
                    ?>
                    </td>
                    <td align="center"><?php echo $dataku->tempat?></td>
                    <td align="center"><?php echo $dataku->tanggal_lahir?></td>
                    <td align="center"></td>
                    <td align="center" style="border-bottom:none;border-top:none;"><span class="block1">&nbsp;</span></td>
                    <td align="center"><?php echo $dataku->no_akta?></td>
                    <td align="center" style="border-bottom:none;border-top:none;"><span class="block2">&nbsp;</span><span class="block3">&nbsp;</span></td>
                    <td align="center" style="border-bottom:none;border-top:none;">
                    <?php
                    if($dataku->agama==' Islam '){
                        echo "<span class='block1'>1</span>";
                    }elseif($dataku->agama==' Kristen '){
                        echo "<span class='block1'>2</span>";
                    }elseif($dataku->agama==' Katholik '){
                        echo "<span class='block1'>3</span>";
                    }elseif($dataku->agama==' Hindu '){
                        echo "<span class='block1'>4</span>";
                    }elseif($dataku->agama==' Budha '){
                        echo "<span class='block1'>5</span>";
                    }elseif($dataku->agama==' Konghucu '){
                        echo "<span class='block1'>6</span>";
                    }else{
                        echo "<span class='block1'>7</span>";
                    }
                    ?>
                    </td>
                    <td align="center" style="border-bottom:none;border-top:none;">
                    <?php
                    if($dataku->status_nikah==' Kawin '){
                        echo "<span class='block1'>2</span>";
                    }else if($dataku->status_nikah==' Belum Kawin '){
                        echo "<span class='block1'>1</span>";
                    }else if($dataku->status_nikah==' Cerai Hidup '){
                        echo "<span class='block1'>3</span>";
                    }else if($dataku->status_nikah==' Cerai Mati '){
                        echo "<span class='block1'>4</span>";
                    }
                    ?>
                    </td>
                    <td align="center" style="border-bottom:none;border-top:none;"><span class="block1">&nbsp;</span></td>
                    <td align="center"><?php echo $dataku->no_akta_nikah?></td>
                    <td align="center"><?php echo $dataku->tanggal_nikah?></td>
                    <td align="center" style="border-bottom:none;border-top:none;"><span class="block1">&nbsp;</span></td>
                    <td align="center"><?php echo $dataku->no_akta_cerai?></td>
                    <td align="center"><?php echo $dataku->tanggal_cerai?></td>
                   
                    </tr>
                        <?
                        $no++;
                         }
                        ?>
					<?php
					for ($i=1;$i<=$jml_kurang;$i++){
					?>
					<tr> 
                    <td align="center"><?php echo $no;?></td>
                    <td align="center" style="border-bottom:none;border-top:none;"><span class="block1">&nbsp;</span></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"  style="border-bottom:none;border-top:none;"><span class="block1">&nbsp;</span></td>
                    <td align="center"></td>
                    <td align="center" style="border-bottom:none;border-top:none;"><span class="block2">&nbsp;</span><span class="block3">&nbsp;</span></td>
                    <td align="center"  style="border-bottom:none;border-top:none;"><span class="block1">&nbsp;</span></td>
                   <td align="center"  style="border-bottom:none;border-top:none;"><span class="block1">&nbsp;</span></td>
                    <td align="center" style="border-bottom:none;border-top:none;"><span class="block1">&nbsp;</span></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center" style="border-bottom:none;border-top:none;"><span class="block1">&nbsp;</span></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    </tr>
					<?php $no++; } ?>
                    </table> 
                    <br />
                    <table class="tab"  align="center" style="border: 1px solid black;">
                    <tr> 
                    <th align="center"width="20px">No</th>
                    <th align="center" width="83px">Status Hub<br />Dlm Keluarga</th>
                    <th align="center"width="40px">Kelainan Fisik&Mental</th>
                    <th align="center"width="50px">Penyandang Cacat</th>
                    <th align="center"width="68px">Pendidikan Terakhir</th>
                    <th align="center"width="72px">Pekerjaan</th>
                    <th align="center"width="300px">NIK Ibu</th>
                     <th align="center"width="300px">Nama Lengkap Ibu</th>
                     <th align="center"width="300px">NIK Ayah</th>
                     <th align="center"width="300px">Nama Lengkap Ayah</th>
                    </tr>
                    <tr> 
                    <th align="center"></th>
                    <th align="center" >22</th>
                    <th align="center">23</th>
                    <th align="center">24</th>
                    <th align="center">25</th>
                    <th align="center">26</th>
                    <th align="center" >27</th>
                    <th align="center">28</th>
                    <th align="center">29</th>
                    <th align="center">30</th>
                    
                    </tr>
                        <?
                        $no_reg_kk=$_GET['no_reg_kk'];
                        $myquery="select status_hub, pendidikan, pekerjaan, nama_ayah,nama_ibu from tb_detail_kk where no_reg_kk='$no_reg_kk'";
                        $no=1;
                        $daftar=mysql_query($myquery) or die (mysql_error());
                        $jml_anggota=mysql_num_rows($daftar);
						$jml_kurang=10-$jml_anggota;
                            while($dataku=mysql_fetch_object($daftar))
                            {
                        ?>
                    <tr> 
                    <td align="center"><?php echo $no;?></td>
                    
                    <td align="center" style="border-bottom:none;border-top:none;">
                    <?php
                    if($dataku->status_hub==' Kepala Keluarga '){
                        echo "<span class='block2'>0</span><span class='block3'>1</span>";
                    }elseif($dataku->status_hub==' Suami '){
                        echo "<span class='block2'>0</span><span class='block3'>2</span>";
                    }elseif($dataku->status_hub==' Istri '){
                        echo "<span class='block2'>0</span><span class='block3'>3</span>";
                    }elseif($dataku->status_hub==' Anak '){
                        echo "<span class='block2'>0</span><span class='block3'>4</span>";
                    }elseif($dataku->status_hub==' Menantu '){
                        echo "<span class='block2'>0</span><span class='block3'>5</span>";
                    }elseif($dataku->status_hub==' Cucu '){
                        echo "<span class='block2'>0</span><span class='block3'>6</span>";
                    }elseif($dataku->status_hub==' Orangtua '){
                        echo "<span class='block2'>0</span><span class='block3'>7</span>";
                    }elseif($dataku->status_hub==' Mertua '){
                        echo "<span class='block2'>0</span><span class='block3'>8</span>";
                    }elseif($dataku->status_hub==' Famili Lain '){
                        echo "<span class='block2'>0</span><span class='block3'>9</span>";
                    }elseif($dataku->status_hub==' Pembantu '){
                        echo "<span class='block2'>1</span><span class='block3'>0</span>";
                    }else{
                        echo "<span class='block2'>1</span><span class='block3'>1</span>";
                    }
                    ?>
                    </td>
                    <td align="center"  style="border-bottom:none;border-top:none;"><span class="block1">&nbsp;</span></td>
                    <td align="center" style="border: none;"><span class="block1">&nbsp;</span></td>
                    <td align="center" style="border-bottom:none;border-top:none;">
                    <?php
                    if($dataku->pendidikan==' Tidak/Belum Sekolah '){
                        echo "<span class='block2'>0</span><span class='block3'>1</span>";
                    }elseif($dataku->pendidikan==' Belum Tamat SD/Sederajat '){
                        echo "<span class='block2'>0</span><span class='block3'>2</span>";
                    }elseif($dataku->pendidikan==' Tamat SD/Sederajat '){
                        echo "<span class='block2'>0</span><span class='block3'>3</span>";
                    }elseif($dataku->pendidikan==' SLTP/Sederajat '){
                        echo "<span class='block2'>0</span><span class='block3'>4</span>";
                    }elseif($dataku->pendidikan==' SLTA/Sederajat '){
                        echo "<span class='block2'>0</span><span class='block3'>5</span>";
                    }elseif($dataku->pendidikan==' Diploma I/II '){
                        echo "<span class='block2'>0</span><span class='block3'>6</span>";
                    }elseif($dataku->pendidikan==' Akademi/Diploma III Sarjana Muda '){
                        echo "<span class='block2'>0</span><span class='block3'>7</span>";
                    }elseif($dataku->pendidikan==' Diploma IV/Strata I '){
                        echo "<span class='block2'>0</span><span class='block3'>8</span>";
                    }elseif($dataku->pendidikan==' Strata II '){
                        echo "<span class='block2'>0</span><span class='block3'>9</span>";
                    }elseif($dataku->pendidikan==' Strata III '){
                        echo "<span class='block2'>1</span><span class='block3'>1</span>";
                     
                    }
                    ?>
                    </td>
                    <td align="center" style="border-bottom:none;border-top:none;">
                    <?php
                    if($dataku->pekerjaan==' Belum/Tidak Bekerja '){echo "<span class='block2'>0</span><span class='block3'>1</span>";}
                    elseif($dataku->pekerjaan==' Mengurus Rumah Tangga '){echo "<span class='block2'>0</span><span class='block3'>2</span>";}
                    elseif($dataku->pekerjaan==' Pelajar/Mahasiswa '){echo "<span class='block2'>0</span><span class='block3'>3</span>";}
                    elseif($dataku->pekerjaan==' Pensiunan '){echo "<span class='block2'>0</span><span class='block3'>4</span>";}
                    elseif($dataku->pekerjaan==' Pegawai Negeri Sipil (PNS) '){echo "<span class='block2'>0</span><span class='block3'>5</span>";}
                    elseif($dataku->pekerjaan==' Tentara Nasional Indonesia (TNI) '){echo "<span class='block2'>0</span><span class='block3'>6</span>";}
                    elseif($dataku->pekerjaan==' Kepolisian RI (POLRI) '){echo "<span class='block2'>0</span><span class='block3'>7</span>";}
                    elseif($dataku->pekerjaan==' Perdagangan '){echo "<span class='block2'>0</span><span class='block3'>8</span>";}
                    elseif($dataku->pekerjaan==' Petani/Pekebun '){echo "<span class='block2'>0</span><span class='block3'>9</span>";}
                    elseif($dataku->pekerjaan==' Peternak '){echo "<span class='block2'>1</span><span class='block3'>0</span>";}
                    elseif($dataku->pekerjaan==' Nelayan/Perikanan '){echo "<span class='block2'>1</span><span class='block3'>1</span>";}
                    elseif($dataku->pekerjaan==' Industri '){echo "<span class='block2'>1</span><span class='block3'>2</span>";}
                    elseif($dataku->pekerjaan==' Konstruksi '){echo "<span class='block2'>1</span><span class='block3'>3</span>";}
                    elseif($dataku->pekerjaan==' Transportasi '){echo "<span class='block2'>1</span><span class='block3'>4</span>";}
                    elseif($dataku->pekerjaan==' Karyawan Swasta '){echo "<span class='block2'>1</span><span class='block3'>5</span>";}
                    elseif($dataku->pekerjaan==' Karyawan BUMN '){echo "<span class='block2'>1</span><span class='block3'>6</span>";}
                    elseif($dataku->pekerjaan==' Karyawan BUMD '){echo "<span class='block2'>1</span><span class='block3'>7</span>";}
                    elseif($dataku->pekerjaan==' Karyawan Honorer '){echo "<span class='block2'>1</span><span class='block3'>8</span>";}
                    elseif($dataku->pekerjaan==' Buruh Harian Lepas '){echo "<span class='block2'>1</span><span class='block3'>9</span>";}
                    elseif($dataku->pekerjaan==' Buruh Tani/Perkebunan '){echo "<span class='block2'>2</span><span class='block3'>0</span>";}
                    elseif($dataku->pekerjaan==' Buruh Nelayan/Perikanan '){echo "<span class='block2'>2</span><span class='block3'>1</span>";}
                    elseif($dataku->pekerjaan==' Buruh Peternakan '){echo "<span class='block2'>2</span><span class='block3'>2</span>";}
                    elseif($dataku->pekerjaan==' Pembantu Rumah Tangga '){echo "<span class='block2'>2</span><span class='block3'>3</span>";}
                    elseif($dataku->pekerjaan==' Tukang Cukur '){echo "<span class='block2'>2</span><span class='block3'>4</span>";}
                    elseif($dataku->pekerjaan==' Tukang Listrik '){echo "<span class='block2'>2</span><span class='block3'>5</span>";}
                    elseif($dataku->pekerjaan==' Tukang Batu '){echo "<span class='block2'>2</span><span class='block3'>6</span>";}
                    elseif($dataku->pekerjaan==' Tukang Kayu '){echo "<span class='block2'>2</span><span class='block3'>7</span>";}
                    elseif($dataku->pekerjaan==' Tukang Sol Sepatu '){echo "<span class='block2'>2</span><span class='block3'>8</span>";}
                    elseif($dataku->pekerjaan==' Tukang Las/Pandai Besi '){echo "<span class='block2'>2</span><span class='block3'>9</span>";}
                    elseif($dataku->pekerjaan==' Tukang Jahit '){echo "<span class='block2'>3</span><span class='block3'>0</span>";}
                    elseif($dataku->pekerjaan==' Tukang Gigi '){echo "<span class='block2'>3</span><span class='block3'>1</span>";}
                    elseif($dataku->pekerjaan==' Penata Rias '){echo "<span class='block2'>3</span><span class='block3'>2</span>";}
                    elseif($dataku->pekerjaan==' Penata Busana '){echo "<span class='block2'>3</span><span class='block3'>3</span>";}
                    elseif($dataku->pekerjaan==' Penata Rambut '){echo "<span class='block2'>3</span><span class='block3'>4</span>";}
                    elseif($dataku->pekerjaan==' Mekanik '){echo "<span class='block2'>3</span><span class='block3'>5</span>";}
                    elseif($dataku->pekerjaan==' Seniman '){echo "<span class='block2'>3</span><span class='block3'>6</span>";}
                    elseif($dataku->pekerjaan==' Tabib '){echo "<span class='block2'>3</span><span class='block3'>7</span>";}
                    elseif($dataku->pekerjaan==' Paraji '){echo "<span class='block2'>3</span><span class='block3'>8</span>";}
                    elseif($dataku->pekerjaan==' Perancang Busana '){echo "<span class='block2'>3</span><span class='block3'>9</span>";}
                    elseif($dataku->pekerjaan==' Penterjemah '){echo "<span class='block2'>4</span><span class='block3'>0</span>";}
                    elseif($dataku->pekerjaan==' Imam Masjid '){echo "<span class='block2'>4</span><span class='block3'>1</span>";}
                    elseif($dataku->pekerjaan==' Pendeta '){echo "<span class='block2'>4</span><span class='block3'>2</span>";}
                    elseif($dataku->pekerjaan==' Pastor '){echo "<span class='block2'>4</span><span class='block3'>3</span>";}
                    elseif($dataku->pekerjaan==' Wartawan '){echo "<span class='block2'>4</span><span class='block3'>4</span>";}
                    elseif($dataku->pekerjaan==' Ustadz/Mubaligh '){echo "<span class='block2'>4</span><span class='block3'>5</span>";}
                    elseif($dataku->pekerjaan==' Juru Masak '){echo "<span class='block2'>4</span><span class='block3'>6</span>";}
                    elseif($dataku->pekerjaan==' Promotor Acara '){echo "<span class='block2'>4</span><span class='block3'>7</span>";}
                    elseif($dataku->pekerjaan==' Anggota DPR-RI '){echo "<span class='block2'>4</span><span class='block3'>8</span>";}
                    elseif($dataku->pekerjaan==' Anggota DPD '){echo "<span class='block2'>4</span><span class='block3'>9</span>";}
                    elseif($dataku->pekerjaan==' Anggota BPK '){echo "<span class='block2'>5</span><span class='block3'>0</span>";}
                    elseif($dataku->pekerjaan==' Presiden '){echo "<span class='block2'>5</span><span class='block3'>1</span>";}
                    elseif($dataku->pekerjaan==' Wakil Presiden '){echo "<span class='block2'>5</span><span class='block3'>2</span>";}
                    elseif($dataku->pekerjaan==' Anggota Mahkamah Konstitusi '){echo "<span class='block2'>5</span><span class='block3'>3</span>";}
                    elseif($dataku->pekerjaan==' Anggota Kabinet Kementrian '){echo "<span class='block2'>5</span><span class='block3'>4</span>";}
                    elseif($dataku->pekerjaan==' Duta Besar '){echo "<span class='block2'>5</span><span class='block3'>5</span>";}
                    elseif($dataku->pekerjaan==' Gubernur '){echo "<span class='block2'>5</span><span class='block3'>6</span>";}
                    elseif($dataku->pekerjaan==' Wakil Gubernur '){echo "<span class='block2'>5</span><span class='block3'>7</span>";}
                    elseif($dataku->pekerjaan==' Bupati '){echo "<span class='block2'>5</span><span class='block3'>8</span>";}
                    elseif($dataku->pekerjaan==' Wakil Bupati '){echo "<span class='block2'>5</span><span class='block3'>9</span>";}
                    elseif($dataku->pekerjaan==' Walikota '){echo "<span class='block2'>6</span><span class='block3'>0</span>";}
                    elseif($dataku->pekerjaan==' Wakil Walikota '){echo "<span class='block2'>6</span><span class='block3'>1</span>";}
                    elseif($dataku->pekerjaan==' Anggota DPRP Prov '){echo "<span class='block2'>6</span><span class='block3'>2</span>";}
                    elseif($dataku->pekerjaan==' Anggota DPRP Kab/Kota '){echo "<span class='block2'>6</span><span class='block3'>3</span>";}
                    elseif($dataku->pekerjaan==' Dosen '){echo "<span class='block2'>6</span><span class='block3'>4</span>";}
                    elseif($dataku->pekerjaan==' Guru '){echo "<span class='block2'>6</span><span class='block3'>5</span>";}
                    elseif($dataku->pekerjaan==' Pilot '){echo "<span class='block2'>6</span><span class='block3'>6</span>";}
                    elseif($dataku->pekerjaan==' Pengacara '){echo "<span class='block2'>6</span><span class='block3'>7</span>";}
                    elseif($dataku->pekerjaan==' Notaris '){echo "<span class='block2'>6</span><span class='block3'>8</span>";}
                    elseif($dataku->pekerjaan==' Arsitek '){echo "<span class='block2'>6</span><span class='block3'>9</span>";}
                    elseif($dataku->pekerjaan==' Akuntan '){echo "<span class='block2'>7</span><span class='block3'>0</span>";}
                    elseif($dataku->pekerjaan==' Konsultan '){echo "<span class='block2'>7</span><span class='block3'>1</span>";}
                    elseif($dataku->pekerjaan==' Dokter '){echo "<span class='block2'>7</span><span class='block3'>2</span>";}
                    elseif($dataku->pekerjaan==' Bidan '){echo "<span class='block2'>7</span><span class='block3'>3</span>";}
                    elseif($dataku->pekerjaan==' Perawat '){echo "<span class='block2'>7</span><span class='block3'>4</span>";}
                    elseif($dataku->pekerjaan==' Apoteker '){echo "<span class='block2'>7</span><span class='block3'>5</span>";}
                    elseif($dataku->pekerjaan==' Psikiater/Psikolog '){echo "<span class='block2'>7</span><span class='block3'>6</span>";}
                    elseif($dataku->pekerjaan==' Penyiar Televisi '){echo "<span class='block2'>7</span><span class='block3'>7</span>";}
                    elseif($dataku->pekerjaan==' Penyiar Radio '){echo "<span class='block2'>7</span><span class='block3'>8</span>";}
                    elseif($dataku->pekerjaan==' Pelaut '){echo "<span class='block2'>7</span><span class='block3'>9</span>";}
                    elseif($dataku->pekerjaan==' Peneliti '){echo "<span class='block2'>8</span><span class='block3'>0</span>";}
                    elseif($dataku->pekerjaan==' Sopir '){echo "<span class='block2'>8</span><span class='block3'>1</span>";}
                    elseif($dataku->pekerjaan==' Pialang '){echo "<span class='block2'>8</span><span class='block3'>2</span>";}
                    elseif($dataku->pekerjaan==' Paranormal '){echo "<span class='block2'>8</span><span class='block3'>3</span>";}
                    elseif($dataku->pekerjaan==' Pedagang '){echo "<span class='block2'>8</span><span class='block3'>4</span>";}
                    elseif($dataku->pekerjaan==' Perangkat Desa '){echo "<span class='block2'>8</span><span class='block3'>5</span>";}
                    elseif($dataku->pekerjaan==' Kepala Desa '){echo "<span class='block2'>8</span><span class='block3'>6</span>";}
                    elseif($dataku->pekerjaan==' Biarawati '){echo "<span class='block2'>8</span><span class='block3'>7</span>";}
                    elseif($dataku->pekerjaan==' Wiraswasta '){echo "<span class='block2'>8</span><span class='block3'>8</span>";}
                    
                    ?>
                    </td>
                    <td align="center"></td>
                    <td align="center"><?php echo $dataku->nama_ibu?></td>
                    <td align="center"></td>
                    <td align="center"><?php echo $dataku->nama_ayah?></td>
                    
                   
                    </tr>
                        <?
                        $no++;
                         }
                        ?>
					<?php
					for ($i=1;$i<=$jml_kurang;$i++){
					?>
					<tr> 
                    <td align="center"><?php echo $no;?></td>
                    <td align="center" style="border-bottom:none;border-top:none;"> <span class="block2">&nbsp;</span><span class="block3">&nbsp;</span></td>
                    <td align="center" style="border-bottom:none;border-top:none;"><span class="block1">&nbsp;</span></td>
                    <td align="center" style="border-bottom:none;border-top:none;"><span class="block1">&nbsp;</span></td>
                    <td align="center" style="border-bottom:none;border-top:none;"> <span class="block2">&nbsp;</span><span class="block3">&nbsp;</span></td>
                    <td align="center" style="border-bottom:none;border-top:none;"> <span class="block2">&nbsp;</span><span class="block3">&nbsp;</span></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    
                    </tr>
                    
					<?php $no++; } ?>
                    </table>                  
                    </td>
                    </tr>
                    <tr>
                    <td colspan="20">
                    <table width="200px" style="font-size: 6px;">
                    <?
                    $no_reg_kk=$_GET['no_reg_kk'];
                    $no_rt=$_GET['no_rt'];
                    $no_rw=$_GET['no_rw'];
                    $qrykoreksi=mysql_query("select * from tb_rt where  no_rt='$no_rt' and no_rw='$no_rw' ");
                    $d=mysql_fetch_object($qrykoreksi);
                    ?>
                    <tr>
                    <td>Nama Ketua RT</td>
                    <td style="border-bottom: 1px solid black;width: 130px;"><?php echo $d->nama_rt ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                    <?
                    $no_reg_kk=$_GET['no_reg_kk'];
                    
                    $no_rw=$_GET['no_rw'];
                    $qrykoreksi=mysql_query("select * from tb_rw where  no_rw='$no_rw' ");
                    $d=mysql_fetch_object($qrykoreksi);
                    ?>
                    <tr>
                    <td>Nama Ketua RW</td>
                    <td style="border-bottom: 1px solid black;"><?php echo $d->nama_rw ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                    <td>Pernyataan:</td>
                    </tr>
                    </table>
                    <table width="290px" style="font-size: 6px;">
                    <tr>
                    <td>Demikian formulir ini saya/kami isi dengan sesungguhnya. apabila keterangan tersebut tidak sesuai dengan</td>
                    </tr>
                    <tr>
                    <td >keadaan sebenarnya, saya bersedia dikenakan sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.</td>
                    </tr>
                    </table>
                    <table width="200px" style="font-size: 6px;margin-top: -70px;" align="center">
                    <tr>
                    <td align="center" >Petugas/Register</td>
                    </tr>
                    <tr>
                    <td align="center" >Kabupaten/Kota atau Kecamatan atau Desa Kelurahan</td>
                    <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
                    </tr>
                    <tr>
                    <td width="200px" style="border-bottom: 1px solid black;">&nbsp;</td>
                    </tr>
                    </table>
                    <table width="100px" style="font-size: 6px;margin-top: -70px;margin-right:220px;" align="center">
                    <tr>
                    <td align="center" >Mengetahui,</td>
                    </tr>
                    <tr>
                    <td align="center" >Lurah/Kepala Desa</td>
                    <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
                    </tr>
                    <tr>
                    <td align="center" style="font-size: 7px;" ><b>ABDUL KHAYYI</b></td>
                    </tr>
                    </table>
                    <table width="100px" style="font-size: 6px;margin-top: -70px;float: right;margin-right: 30px;">
                    <tr>
                    <td align="center" >Cempaka, <?php echo $kk->tanggal_input ?></td>
                    </tr>
                    <tr>
                    <td align="center" >Kepala Keluarga:</td>
                    <tr><td>&nbsp;</td></tr><tr><td align="center"><i style="color: #999;">Ttd/Cap Jempol</i></td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
                    </tr>
                    <tr>
                    <td align="center" style="font-size: 7px;" ><b><?php echo $kk->nama_kk ?></b></td>
                    </tr>
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

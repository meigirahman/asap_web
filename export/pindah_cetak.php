<?php		
			
			require ('../inc/config.php');
			mysql_connect("localhost","root","");
   mysql_select_db("kependudukanok");
			$no_surat_pindah=$_GET['no_surat_pindah'];
$qrykoreksi=mysql_query("select no_surat_pindah,no_reg_pend,nama,nik,jenis_kelamin,tempat,agama,DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,status_nikah, pekerjaan,pendidikan,status_hub,no_rt,no_rw,no_kk from tb_detail_pend_pindah where no_surat_pindah='$no_surat_pindah' ");
$qrykoreksi1=mysql_query("select nama_kk,no_kk,no_rt,no_rw,alasan, alamat_tujuan,rt_tujuan,rw_tujuan,kec_tujuan,kab_tujuan,prov_tujuan,
klsfksi_pindah,jenis_pindah,status_kk_tdkpindah,status_kk_pindah,DATE_FORMAT(tanggal_pindah, '%d-%m-%Y') as tanggal_pindah,DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input from tb_pend_pindah where no_surat_pindah='$no_surat_pindah' LIMIT 1");
$data=mysql_fetch_object($qrykoreksi);
$dataku=mysql_fetch_object($qrykoreksi1);

?>
<html>
	<head>
    <title> <?php echo $data->nama ?></title>
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
        
			
                                    
                                    <table cellpadding="5" cellspacing="9">
                                   
                                    
                                    <table style="font-size: 12px;font-family: Times New Roman; margin-left: 25px;text-align: justify;"cellpadding="5" cellspacing="">
                                    <tr>
                                    <td colspan="6"><center><b style="font-size: 14px;margin-left: 70px;"><u>SURAT KETERANGAN PINDAH</u></b></center></td>
                                    </tr>
                                    <tr>
                                    <td colspan="6" ><center style="margin-left: 70px;">Nomor : <?php echo $data->no_surat_pindah ?></td></center>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr>
                                    <tr>
                                    <td>Nama Lengkap</td><td>:</td><td><b><?php echo $data->nama ?></b></td>
                                    </tr>
                                    <tr>
                                    <td>Jenis Kelamin</td><td>:</td><td><?php echo $data->jenis_kelamin ?></td>
                                    </tr>
                                    <tr>
                                    <td>Dilahirkan</td><td>:</td><td colspan="3">Di &nbsp;<?php echo $data->tempat ?>,&nbsp;&nbsp;&nbsp;tanggal &nbsp;<?php echo $data->tanggal_lahir ?></td>
                                    </tr>
                                    <tr>
                                    <td>Kewarganegaraan</td><td>:</td>
                                    <td>WNI</td>
                                    </tr>
                                    <tr>
                                    <td>Status Perkawinan</td><td>:</td>
                                    <td><?php echo $data->status_nikah ?></tr>
                                    <tr>
                                    <td>Pekerjaan</td><td>:</td><td><?php echo $data->pekerjaan ?></td>
                                    </tr>
                                    <tr>
                                    <td>Pendidikan</td><td>:</td><td><?php echo $data->pendidikan ?></td>
                                    </tr>
                                    <tr>
                                    <td>Alamat Asal</td><td>:</td><td colspan="3">Desa Cempaka RT 0<?php echo $data->no_rt ?>&nbsp;RT 0<?php echo $data->no_rw ?></td>
                                    </tr>
                                    <tr>
                                    <td></td><td></td><td colspan="3">Kecamatan Bumijawa Kabupaten Tegal</td>
                                    </tr>
                                    <tr>
                                    <td>No.& Tgl KTP</td><td>:</td><td><?php echo $data->nik?></td>
                                    </tr>
                                    <tr>
                                    <td>Pindah Ke</td><td>:</td>
                                    <td>Desa/Keluarahan</td><td>:</td><td><?php echo $dataku->alamat_tujuan ?>&nbsp;RT 0<?php echo $data->no_rt ?>&nbsp;RT 0<?php echo $data->no_rw ?></td>
                                    </tr>
                                    <tr>
                                    <td></td><td></td>
                                    <td>Kecamatan</td><td>:</td><td><?php echo $dataku->kec_tujuan ?></td>
                                    </tr>
                                    <tr>
                                    <td></td><td></td>
                                    <td>Kabupaten</td><td>:</td><td><?php echo $dataku->kab_tujuan ?></td>
                                    </tr>
                                    <tr>
                                    <td></td><td></td>
                                    <td>Provinsi</td><td>:</td><td><?php echo $dataku->prov_tujuan ?></td>
                                    </tr>
                                    <tr>
                                    <td></td><td></td>
                                    <td>Pada Tanggal</td><td>:</td><td><?php echo $dataku->tanggal_pindah ?></td><td></td><td></td>
                                    </tr>
                                    
                                    <tr>
                                    <td>Alasan Pindah</td><td>:</td>
                                    <td><?php
                                        if($dataku->alasan=='1'){
                                            echo "Pekerjaan";
                                        }else if($dataku->alasan=='2'){
                                            echo "Pendidikan";
                                        }else if($dataku->alasan=='3'){
                                            echo "Keamanan";
                                        }else if($dataku->alasan=='4'){
                                            echo "Kesehatan";
                                        }else if($dataku->alasan=='5'){
                                            echo "Perumahan";
                                        }else if($dataku->alasan=='6'){
                                            echo "Keluarga";
                                        }else if($dataku->alasan=='7'){
                                            echo "Lainnya";
                                        }
                                        ?></td>
                                    </tr>
                                    <tr>
                                    <td colspan="7" align="right">Citangtu, <?php echo $dataku->tanggal_input ?></td>
                                    </tr>
                                    <tr>
                                    <td colspan="8">Mengetahui</td>
                                    </tr>
                                    <tr>
                                    <td>Camat Kuningan</td><td colspan="4">&nbsp;</td><td align="right">Lurah Citangtu</td>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr><tr><td colspan="4">&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
                                    <tr>
                                    <td><b><u>...............................</u></b></td><td colspan="4">&nbsp;</td><td align="right"><b ><u>Sutarno,A.Md</u></b></td>
                                    </tr>
                                    </table>
                                    
                                    
                                    
            
			
		</div>
	</body>
</html>

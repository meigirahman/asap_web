 

<?
session_start();
include "koneksi.php";
include "tgl_indo.php"; 
include "tanggal.php";
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BA Persediaan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<link rel="stylesheet" href="gaya.css" type="text/css">
<script type="text/javascript" src="jquery-1.4.3.min.js"></script>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<link rel="shortcut icon" href="img/favicon(1).ico">
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script src="js/exporting.js" type="text/javascript"></script>
<script type="text/javascript">
function logout(){
    if(confirm("Logout ?")){
        doLogout();
    }
}
</script>

<link rel="stylesheet" type="text/css" href="Chartjs/Chart.min.css"> 
<script type="text/javascript" src="Chartjs/Chart.min.js"> </script>
<script type="text/javascript" src="assets/js/jquery.js"></script>

</head>

<body>

		<div id="page-wrapper">
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div >
                       
                        <!-- /.panel-heading -->
                        <div>
								<div> 
									<div> 
									<div class="panel panel-success">
									<table border=0 width="700px">
									<tr><td><font style="font-size: 15pt;"> 
									<center><b>PEMERINTAH KABUPATEN MUSI BANYUASIN<br>
									BERITA ACARA PEMERIKSAAN BARANG PERSEDIAAN<br><br></center>  
									</td></tr>	</b> 
									 
									<div class = "panel-body">				 

									<?
									$o="select * from tb_opd where kd_opd='$_SESSION[kd_opd]'";
                                    
                                    $oo=mysql_query($o) or die (mysql_error());
									$opd=mysql_fetch_object($oo); 

								   
								 
									$t="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and jab='upb'";
                                    $tt=mysql_query($t) or die (mysql_error());
                                    $ttd=mysql_fetch_object($tt);
									
									$t2="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and jab='pengelola'";
                                    $tt2=mysql_query($t2) or die (mysql_error());
                                    $ttd2=mysql_fetch_object($tt2);
									
									 
									 $hari   = date('l', microtime(date('Y-m-d')));
									 $hari_indonesia = array('Monday'  => 'Senin',
										'Tuesday'  => 'Selasa',
										'Wednesday' => 'Rabu',
										'Thursday' => 'Kamis',
										'Friday' => 'Jumat',
										'Saturday' => 'Sabtu',
										'Sunday' => 'Minggu');
									 ?>
                                <table border=0 width="700px">
 
								<tr> <td colspan=3>Pada hari ini <? echo $hari_indonesia[$hari]; ?> tanggal <? echo tgl_indo(date('Y-m-d')); ?> yang bertanda tangan dibawah ini :</td> </tr>
								<tr> <td colspan=3> &nbsp;</td> </tr>
								<tr><td>Nama Lengkap</td><td>:</td><td> <?php echo $ttd->nama?></td></tr>
								<tr><td>Jabatan</td><td>:</td><td> Kepala Dinas <?php echo $opd->nama?></td></tr>
								<tr><td>NIP</td><td>:</td><td> <?php echo $ttd->nip?></td></tr>
								
								<tr> <td colspan=3> &nbsp;</td> </tr>

								<tr> <td colspan=3>Sesuai dengan Peraturan Dalam Negeri Nomor 19 Tahun 2016 tentang Pedoman Pengelolaan BMD, 
								kami melakukan pemeriksaan setempat atas sisa barang persediaan (stock opname) yang dikelola oleh:</td> </tr>
								<tr><td>&nbsp;</td><td></td><td></td></tr>
								<tr><td>Nama Lengkap</td><td>:</td><td> <?php echo $ttd2->nama?></td></tr>
								<tr><td>Jabatan</td><td>:</td><td>Penyimpan/Pengurus Barang <?php echo $opd->nama?></td></tr>
								<tr><td>NIP</td><td>:</td><td> <?php echo $ttd2->nip?></td></tr>
								</table>
								
								<table border=0 width="700px">
								 
								<tr> <td colspan=3> &nbsp;</td> </tr>
								<tr> <td colspan=3>Berdasarkan Keputusan Bupati Musi Banyuasin Nomor 73/KPTS-BPKAD/2020 Tanggal 10 Januari 2020 ditugaskan mengurus 
								barang berdasarkan hasil pemeriksaan Fisik barang (stock opname) kami mendapatkan hasil sebagai berikut: <br></td> </tr>
								<tr><td>&nbsp;</td></tr>
								</table>
								
									<table width="700px" border=1>
                                    <thead>
									<tr> 							 
									<td><center>Rek Permendagri <br>No. 108/2016</td>
									<td><center>Uraian </td>
									<td><center>Rekening Belanja</td>
									<td><center>Uraian </td>
									<td><center>Jumlah</td></tr>
									</tr>
								 
									</thead>
                                    <?
                                    $no=1;
                                    $nilai1=0;
									$qq1="delete from sementara where kd_opd='$_SESSION[kd_opd]'";
									mysql_query($qq1) or die (mysql_error()); 	
									
									$x="select * from tb_stok group by rek4 ";
                                    
                                    $xx=mysql_query($x) or die (mysql_error());
                                    while($xxx=mysql_fetch_object($xx))
                                    {
										
									$myquery="select *,sum(jumlah) as jumlah from tb_stok where rek4='$xxx->rek4' and kd_opd='$_SESSION[kd_opd]' and tgl between '2021-01-01' and '$_POST[tgl]' group by kd_brg ";
                                    
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {	 
										$a="select harga_satuan from tb_stok where kd_brg='$dataku->kd_brg' and kd_opd='$_SESSION[kd_opd]' order by tgl desc limit 1 ";
										$aa=mysql_query($a) or die (mysql_error());
										$harga=mysql_fetch_object($aa);

                                   $rek4=$dataku->rek4;
                                   $jlh=$dataku->jumlah;
                                   $hrg=$harga->harga_satuan;
                                   $tot=$dataku->jumlah*$harga->harga_satuan;

								 	$qq="insert into sementara values('$rek4','$jlh','$hrg','$tot','$_SESSION[kd_opd]')";
                                    
                                    mysql_query($qq) or die (mysql_error()); 	
									
                                    $no++;
                                    }
									}
                                   
									$x="select *,sum(tot) as total from sementara where kd_opd='$_SESSION[kd_opd]' group by rek4 ";
                                    
                                    $xx=mysql_query($x) or die (mysql_error());
                                    while($xxx=mysql_fetch_object($xx))
                                    {
									?>
									 <tr>
									<?
										$a="select * from ref_mapping where rek_asap='$xxx->rek4'";
										$aa=mysql_query($a) or die (mysql_error());
										$map=mysql_fetch_object($aa); 
									?>
                                     
                                    <td ><?php echo $rek4=$xxx->rek4?></td>
                                    <td  style="width: 250px"><?php echo $rek4=$map->nm_asap?></td>
                                    <td ><?php echo $rek4=$map->rek_simda?></td>
                                    <td  style="width: 250px"><?php echo $rek4=$map->nm_simda?></td>
                                   
                                    <td style="text-align: right;"><?php echo number_format($tot=$xxx->total,2,',','.');?></td>
                              
									<? 
									$nilai1=$nilai1+$tot;
									}
									?>
									 
                                    </tr>
									
                                    <tr > 
									<td colspan=4><center><b>JUMLAH</td>
									<td style="text-align: right; width: 200px" ><b><?php echo "Rp. ". number_format($nilai1,2,',','.')?></td> 
 
									<tbody>
                                    
                                    </tbody>
                                
									</table>
 
								<table border=0 width="700px">
								<tr><td colspan=4>&nbsp;</td></tr>
								<tr><td style="width: 500px">Saldo menurut Buku Inventaris Barang Persediaan, register dan lain sebagainya berjumlah</td><td>:</td><td>Rp.</td><td align="right"><?php echo "Rp. ".number_format($nilai1,2,',','.');?></td></tr>
								<tr><td style="width: 500px">Perbedaan positif / Negatif antara saldo persediaan dan saldo Buku Inventaris Barang Persediaan</td><td>:</td><td>Rp.</td><td align="right"> 0,00</td></tr>
								<tr><td style="width: 500px">Penjelasan perbedaan positif / negatif</td><td>:</td><td></td><td></td></tr>
								</table>
								
								<table border=0 width="700px">
								<tr><td>&nbsp;</td></tr>
								<tr><td>Pemeriksa</td><td> </td><td>Yang diperiksa</td></tr>
								<tr><td>PPPB-SKPD/UKPD</td><td> </td><td>Pengurus Barang</td></tr>
								<tr><td>&nbsp;</td><td> </td><td> </td></tr>
								<tr><td>&nbsp;</td><td> </td><td> </td></tr>
								<tr><td>Nama Lengkap)</td><td> </td><td><?php echo $ttd2->nama?></td></tr>
								<tr><td>NIP...................</td><td> </td><td>NIP. <?php echo $ttd2->nip?></td></tr>
								<tr><td> </td><td>Mengetahui</td><td> </td></tr>
								<tr><td> </td><td>Pengguna Barang,</td><td> </td></tr>
								<tr><td> </td><td>&nbsp;</td><td> </td></tr>
								<tr><td> </td><td>&nbsp;</td><td> </td></tr>
								<tr><td> </td><td><?php echo $ttd->nama?></td><td> </td></tr>
								<tr><td> </td><td>NIP. <?php echo $ttd->nip?></td><td> </td></tr>
								</table>
								
								
								<div class="alert alert-primary" role="alert">
								<?php $myquery="select * from tb_stok order by jumlah desc limit 1";
								$no=1;
								
								$daftar=mysql_query($myquery) or die (mysql_error());
								$dataku=mysql_fetch_object($daftar);
								?>
										
        
								</div>
	 
	 
 
 
                                    
                            </div>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
		
		
		
    </div>
    </div>
    </div>
    <!-- /#wrapper -->

	    <!-- Bootstrap Core JavaScript -->
		<script>
    window.print();
</script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
	
	
 
    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>


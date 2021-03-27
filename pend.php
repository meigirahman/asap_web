<?
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();

if(!isset ($_SESSION['my_session'])){
    header('location:index.php');
}
include "koneksi.php";
include "tanggal.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="img/favicon(1).ico">
    <script type="text/javascript" src="js/titlebar.js"></script>
    <script type="text/javascript" src="js/ajax_login.js"></script>
<script type="text/javascript">
function logout(){
    if(confirm("Logout ?")){
        doLogout();
    }
}
</script>



</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="menu.php"><img src="img/2.png" width="700px" style="margin-top: -10px;"/></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" style="margin-top: 20px;margin-right: 30px;">
                <i class="fa fa-user fa-fw"></i> Hai, <b style="color: #fff;"><?php echo $_SESSION['my_name'];?></b> |
                 <a href="#" onclick="javascript:logout()" title="Logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <center><li ><b style="color: #fff;"><i class="fa  fa-calendar fa-fw"></i><?php  echo $cetak_date ?></b></li></center>
                        </li>
                        <li >
                            <a   href="menu.php"><i class="fa fa-home fa-fw"></i>     Home</a>
                        </li>
                        <li class="active" >
                            <a href="#"><i class="fa fa-file fa-fw"></i> File<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="penduduk.php"><i class="fa fa-user fa-fw"></i>    Data Penduduk</a>
                                </li>
                                <li>
                                    <a href="kk.php"><i class="fa fa-group fa-fw"></i>   Data KK</a>
                                </li>
                                <li>
                                    <a href="ktp.php"><i class="fa fa-credit-card fa-fw"></i>   Data KTP</a>
                                </li>
                                <li>
                                    <a href="rt.php"><i class="fa fa-table fa-fw"></i>   Data RT/RW</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li >
                            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i>  Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="kelahiran.php"><i class="fa fa-plus-circle fa-fw"></i>    Kelahiran</a>
                                </li>
                                <li>
                                    <a href="kematian.php"><i class="fa fa-minus-circle fa-fw"></i> Kematian</a>
                                </li>
                                <li>
                                    <a  href="pend_masuk.php"><i class="fa fa-arrow-circle-o-right fa-fw"></i>   Penduduk Masuk</a>
                                </li>
                                <li>
                                    <a href="pend_pindah.php"><i class="fa fa-arrow-circle-o-left fa-fw"></i>  Penduduk Pindah</a>
                                </li>
                                <li>
                                    <a href="surat.php"><i class="fa fa-envelope-o fa-fw"></i>    Surat-surat</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-book fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a  href="laporan.php"><i class="fa fa-book fa-fw"></i>    Kependudukan</a>
                                </li>
                                <li >
                                    <a href="lap_kk.php"><i class="fa fa-user fa-fw"></i>  Data Penduduk </a>
                                </li>
                                <li >
                                    <a href="lap_surat_domisili.php"><i class="fa fa-envelope fa-fw"></i>  Data Surat </a>
                                </li>
                                <li>
                                    <a href="grafik.php"><i class="fa fa-bar-chart-o fa-fw"></i>    Grafik</a>
                                </li>
                                
                            </ul>
                       
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Data</small> Penduduk
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="menu.php" style="color: #1484CE;">Home</a>
                            </li>
                            <li>
                                <i class="fa fa-file"></i>   File
                            </li>
                            <li class="active">
                                <i class="fa fa-user"></i> Data Penduduk
                            </li>
                        </ol>
                    </div>
                </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <center>Semua Penduduk</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="input-group custom-search-form">
                                <form action="" method="get" name="FCari" id="FCari">
                                    <input type="text" name="txtcari" id="txtcari" title="Pencarian Nama"  size="40" maxlength="30" value="<?php echo $_GET['txtcari']?>" class="form-control" placeholder="Pencarian Nama">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" name="Submit" title="Cari">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <button class="btn btn-default" type="button" name="fulang" title="Refresh" onClick="javascript:window.location='penduduk.php'">
                                        <i class="fa fa-repeat"></i>
                                    </button>
                                </span>
                                </form>
                                </div>
                                
                                <br />
                                 <form name="FLaporan" method="post" action="input_penduduk.php">
                                    <input name="fok" type="submit" id="fok" value="Input Data" class="btn btn-primary" style="margin-bottom: 10px;" title="Input Data Penduduk">
                                    
                                </form>   
                                <form name="FLaporan" method="post" action="hapus_banyak_penduduk.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    
                                    <table class="table" >
                                    <?php
                         
                                    $txtcari=$_GET['txtcari'];
                                    if(isset($txtcari))
                                    {
                                    $myquery="select no_rt, no_rw, no_reg_pend,nik,nama,jenis_kelamin, tempat, 
                                    DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,YEAR(NOW())-YEAR(tanggal_lahir)as umur,
                                    no_akta,agama,status_nikah, no_akta_nikah, tanggal_nikah, 
                                    no_akta_cerai,  tanggal_cerai, status_hub, pendidikan, pekerjaan,
                                    nama_ayah,nama_ibu,no_kk,no_surat_kelahiran,
                                    no_surat_masuk, DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input from tb_penduduk where nama='$txtcari' or nama LIKE '%$txtcari%'";
                                    if(empty($txtcari) ){
                                            		$myquery ="select no_rt, no_rw,no_reg_pend,nik,nama,jenis_kelamin, tempat, 
                                    DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,YEAR(NOW())-YEAR(tanggal_lahir)as umur,
                                    no_akta,agama,status_nikah, no_akta_nikah, tanggal_nikah, 
                                    no_akta_cerai, tanggal_cerai, status_hub, pendidikan, pekerjaan,
                                    nama_ayah,nama_ibu,no_kk,no_surat_kelahiran,
                                    no_surat_masuk, DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input from tb_penduduk limit 10";
                                            		}
                                    }
                                    else
                                    {
                                        $batas=10; //satu halaman menampilkan 10 baris
                                        $halaman=$_GET['halaman'];
                                        $posisi=null;
                                        if(empty($halaman)){
                                          $posisi=0;
                                          $halaman=1;
                                        }else{
                                          $posisi = ($halaman-1)* $batas;
                                          
                                        }                      
                                    $myquery="select no_rt, no_rw,no_reg_pend,nik,nama,jenis_kelamin, tempat, 
                                    DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,YEAR(NOW())-YEAR(tanggal_lahir)as umur,
                                    no_akta,agama,status_nikah, no_akta_nikah, tanggal_nikah, 
                                    no_akta_cerai, tanggal_cerai, status_hub, pendidikan, pekerjaan,
                                    nama_ayah,nama_ibu,no_kk,no_surat_kelahiran,
                                    no_surat_masuk, DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input from tb_penduduk limit $posisi,$batas ";
                                    $no=1;
                                    }
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr style="background: #ee1e1e;">
                                    <td width="1px" align="center">
                                    <input type="checkbox" title="Tandai" name="item[]" id="item[]" value="<?php echo $dataku->no_reg_pend?>" /></td>
                                    <td colspan="6"><a href="lihat_kk_asli.php?no_kk=<?php echo $dataku->no_kk?>" title="Lihat KK" ><i class="fa fa-group"></i> Lihat KK</a> |          
                                    <a href="edit_penduduk.php?no_reg_pend=<?php echo $dataku->no_reg_pend?>" title="Edit"><i class="fa fa-pencil"></i></a>|
                                    <a href="hapus_penduduk.php?no_reg_pend=<?php echo $dataku->no_reg_pend?>" title="Hapus" onclick="return confirm('Hapus data terpilih?')"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td rowspan="12"></td>
                                    <td><b>RT/RW</b></td><td width="10px">:</td>
                                    <td><b><?php echo $dataku->no_rt?>/<?php echo $dataku->no_rw?></b></td>
                                    <td>Kewarganegaraan</td><td>:</td><td>WNI</td>
                                    </tr>
                                    <tr>
                                    <td>No</td><td width="10px">:</td>
                                    <td><?php echo $no;?></td>
                                    
                                    <td>No Akta Cerai</td><td width="10px">:</td>
                                    <td><?php echo $dataku->no_akta_cerai?></td>
                                    </tr>
                                    <tr>
                                    <td>NIK</td><td width="10px">:</td>
                                    <td><?php echo $dataku->nik?></td>
                                    
                                    <td>Tanggal Cerai</td><td width="10px">:</td>
                                    <td><?php echo $dataku->tanggal_cerai?></td>
                                    </tr>
                                    <tr>
                                    <td>Nama</td><td width="10px">:</td>
                                    <td><?php echo $dataku->nama?></td>
                                    
                                    <td>Status Hubungan</td><td width="10px">:</td>
                                    <td><?php echo $dataku->status_hub?></td>
                                    </tr>
                                    <tr>
                                    <td>Jenis Kelamin</td><td width="10px">:</td>
                                    <td><?php echo $dataku->jenis_kelamin?></td>
                                    
                                    <td>Pendidikan</td><td>:</td>
                                    <td width="200px"><?php echo $dataku->pendidikan?></td>
                                    </tr>
                                    <tr>
                                    <td>Tempat, Tanggal Lahir</td><td width="10px">:</td>
                                    <td><?php echo $dataku->tempat?>, <?php echo $dataku->tanggal_lahir?></td>
                                    
                                    <td>Pekerjaan</td><td width="10px">:</td>
                                    <td><?php echo $dataku->pekerjaan?></td>
                                    </tr>
                                    <tr>
                                    <td>Umur</td><td width="10px">:</td>
                                    <td><?php echo $dataku->umur?> tahun</td>
                                    
                                    <td>Nama Ayah</td><td width="10px">:</td>
                                    <td><?php echo $dataku->nama_ayah?></td>
                                    </tr>
                                    <tr>
                                    <td>No Akta</td><td width="10px">:</td>
                                    <td><?php echo $dataku->no_akta?></td>
                                    
                                    <td>Nama Ibu</td><td width="10px">:</td>
                                    <td><?php echo $dataku->nama_ibu?></td>
                                    </tr>
                                    <tr>
                                    <td>Agama</td><td width="10px">:</td>
                                    <td><?php echo $dataku->agama?></td>
                                    
                                    <td>No KK</td><td width="10px">:</td>
                                    <td><?php echo $dataku->no_kk?></td>
                                    </tr>
                                    <tr>
                                    <td>Status Nikah</td><td width="10px">:</td>
                                    <td><?php echo $dataku->status_nikah?></td>
                                    
                                    <td>No Surat Lahir</td><td width="10px">:</td>
                                    <td><?php echo $dataku->no_surat_kelahiran?></td>
                                    </tr>
                                    <tr>
                                    <td>No Akta Nikah</td><td width="10px">:</td>
                                    <td><?php echo $dataku->no_akta_nikah?></td>
                                    
                                    <td>No Surat Masuk</td><td width="10px">:</td>
                                    <td><?php echo $dataku->no_surat_masuk?></td>
                                    </tr>
                                    <tr>
                                    <td>Tanggal Nikah</td><td width="10px">:</td>
                                    <td><?php echo $dataku->tanggal_nikah?></td>
                                    
                                    <td><b>Tanggal Input</b></td><td width="10px">:</td>
                                    <td><b><?php echo $dataku->tanggal_input?></b></td>
                                    </tr>
                                    
                                    <?php
                                    $no++;
                                    }
                                    ?>
                                    </table>
                                    <input  title="Hapus Banyak" name="fok11" type="submit" id="fok11" value="Hapus Banyak" class="btn btn-danger" >
                            </form>
                                    <table style="float: left; margin-left: 300px;"><tr><td>
                                    <p align="center" style="color: #1c64d1;">
                              <?php   
                        
                              $sql_paging = mysql_query("select *  from tb_penduduk");
                              $jmldata = mysql_num_rows($sql_paging);
                              if (isset($txtcari)){
                                $jumlah_halaman = ceil($batas);
                              }else{
                              $jumlah_halaman = ceil($jmldata / $batas);
                         
                              echo "Halaman : ";
                              for($i = 1; $i <= $jumlah_halaman; $i++)
                                if($i != $halaman) {
                                  echo "<a style='text-decoration:none;color:#1c64d1;' href=penduduk.php?halaman=$i>$i</a> | ";
                                } else {
                                  echo "<b style='color:#000;'>$i</b>|";
                                }
                                }
                              mysql_close();
                              ?>
                              <br>
    <strong>Jumlah Penduduk tercatat saat ini  : <?php echo $jmldata;?> jiwa</strong></p>
                               <br> </td></tr></table> 
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
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   <script type="text/javascript" src="js/jq-cilbut.js"></script>
<script type='text/javascript' src='js/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
<link rel="stylesheet" href="main.css" type="text/css" />

<script type="text/javascript">
$(document).ready(function() {   
    $("#txtcari").autocomplete("cari_penduduk.php", {
        width: 279
  });
   
});</script>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
</body>

</html>


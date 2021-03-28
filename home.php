<?
include "koneksi.php";

include 'tgl_indo.php';
		session_start();
		if(isset($_SESSION["kd_opd"])){ // jika ada sesi
			
			// jika tidak ada aktivitas pada browser 
			// selama 10 menit, maka
			if((time() - $_SESSION["last_login_timestamp"]) > 600){// 900 = 10 * 60?>
 <script type="text/javascript">
				// akan diarahkan kehalaman logout.php
				alert("Sesi telah habis silahkan login kembali...");
		location.href="logout.php";
			</script>
			<?
			} else {
				// jika ada aktivitas update waktu
				$_SESSION["last_login_timestamp"] = time();
		
			}
		} else {
			header("location:index.php");
		}
	?>
	
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ASAP</title>
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
<script type="text/javascript" src="notifikasi.js"></script>
<script type="text/javascript" src="notifikasi_2.js"></script>
<script type="text/javascript" src="notifikasi_3.js"></script>
<script type="text/javascript" src="notifikasi_4.js"></script>
<script type="text/javascript" src="notifikasi_5.js"></script>
<script type="text/javascript" src="notifikasi_6.js"></script>
<script type="text/javascript" src="notifikasi_7.js"></script>
<script type="text/javascript" src="notifikasi_8.js"></script>
<script type="text/javascript" src="notifikasi_9.js"></script>
<script type="text/javascript" src="notifikasi_10.js"></script>
<script type="text/javascript" src="notifikasi_11.js"></script>
<script type="text/javascript" src="notifikasi_12.js"></script>
<link rel="stylesheet" href="css/themes/base/jquery-ui.css" />
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/ui/jquery-ui.js"></script>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
 
 

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php

  include "header.php"; 
  
    ?>
	
	<?php
if($_SESSION['kelas']=='induk')
{  
	include "left_sidebar_induk.php";
}
else
{
	include "left_sidebar.php";
}	
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

	      <div class="row">
        <div class="col-md-12">
          <div class="box">

            <!-- /.box-header -->
			<?php
			if($_GET['p']=='welcome')
			{
			}
			else
				{
			?>
			 
				<?} ?>
				<!-- ./box-body -->

			<img src="asap.png" height="250px" width=100% />
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
	<?php
		$pages_dir = 'page';
		if(!empty($_GET['p'])){
			$pages = scandir($pages_dir, 0);
			unset($pages[0], $pages[1]);
 
			$p = $_GET['p'];
			if(in_array($p.'.php', $pages)){
				include($pages_dir.'/'.$p.'.php');
			} else {
				echo 'Halaman tidak ditemukan! :(';
			}
		} else {
			include($pages_dir.'/welcome.php');
		}
		?>
		


  </div>
  <!-- /.content-wrapper -->

	<?php

  include "footer.php"
  
  ?>



</div>
<!-- ./wrapper -->
    <!-- jQuery Version 1.11.0 
    <script src="js/jquery-1.11.0.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

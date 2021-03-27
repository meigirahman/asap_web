<!DOCTYPE html>
 
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LOGIN ASAP</title>
  <link rel="shortcut icon" href="img/favicon.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	 
    
    <link href="skitterwide.css" rel="stylesheet" />
	 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="jqueryskittermin.js"></script>
  
 
</head>
<body>



<body  style="background: url(img/a.png);     background-size: 1900px 800px" >
<?php
session_start();
include 'koneksi.php';
 
if(!empty($_POST)){
     
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql = "select * from tb_opd where username='".$username."' and password='".$password."'";
    #echo $sql."<br />";
    $query = mysqli_query($konek,$sql) or die (mysqli_error());
 
    // pengecekan query valid atau tidak
    if($query){
        $row = mysqli_num_rows($query);
        $row2 = mysqli_fetch_array($query);
         
	
        // jika $row > 0 atau username dan password ditemukan
        if($row > 0){
            $_SESSION['isLoggedIn']=1;
            $_SESSION['username']=$username;
			$_SESSION['my_session']=$username; 
			$_SESSION['kd_opd']=$row2['kd_opd'];
			$_SESSION['kd_sub']=$row2['kd_sub'];
			$_SESSION['nama']=$row2['nama'];
			$_SESSION['kelas']=$row2['kelas'];
			$_SESSION["last_login_timestamp"] = time();
			
            header('Location: home.php?p=welcome');
        }else{
            echo "<script> alert('Username atau Password salah!') ;</script>";
        }
    }
}
?>
<div class="login-box" >

  <div class="login-logo">
 <br>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Masukan Username dan Password</p>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="form-group has-feedback">
        <input type="username" class="form-control" placeholder="username" name="username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
 <div class='box_skitter_clean'>
                <div class='box_skitter'>
                    <ul>
                        <li>
                            <img src="foto/ceceh.jfif" />
                            <div class="label_text"><a href='#'>Tercepat Penyampaian Laporan Keuangan</a>
                                <p>Sekretariat Daaerah Kab Muba didampingi Kasubbid Akuntansi Penerimaan Daerah BPKAD</p>
                            </div>
                        </li>
                        <li>
                            <img src="foto/hz.jfif" />
                            <div class="label_text"><a href='#'>Tercepat Penyampaian Laporan Persediaan</a>
                                <p>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kab Muba didampingi Kasubbid Pelaporan dan Pertanggungjawaban BPKAD</p>
                            </div>
                        </li>
                        <li>
							<img src="foto/rina.jfif" />
                            <div class="label_text"><a href='#'>Tercepat Penyampaian Laporan Keuangan</a>
                                <p>Kecamatan Lawang Wetan dan Satgas didampingi Kasubbid Akuntansi Pengeluaran Daerah BPKAD</p>
                            </div>
                        </li>
                        <li>
                            <img src="foto/mg.jfif" />
                            <div class="label_text"><a href='#'>That's Me</a>
                                <p>Penyerahann hadiah berupa Buku Agendan dan Flashdisk kepada para pemenang</p>
                            </div>
                        </li>
                        <li>
                            <img src="foto/lalan.jfif" />
                            <div class="label_text"><a href='#'>Tercepat Penyampaian Laporan Persediaan</a>
                                <p>Kecamatan Lalan dan Satgas didampingi Kasubbid Pelaporan dan Pertanggungjawaban BPKAD</p>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </div>


 

<script>
    $(document).ready(function() {
        $('.box_skitter').skitter({
             theme: "clean", // minimalist, round, clean, square, untuk default baris ini dihilangkan
             numbers_align: "center", 
             dots: false, // true, false
             preview: true, // true, false
             controls: true, // true, false
             controls_position: "rightBottom", // center, leftTop, rightTop, leftBottom, rightBottom
             progressbar: true, // true, false
             enable_navigation_keys: true, // true, false
             animation:"randomSmart", // cube, cubeRandom, block, cubeStop, cubeHide, cubeSize, horizontal, showBars, showBarsRandom, tube, fade, fadeFour, paralell, blind, blindHeight, blindWidth, directionTop, directionBottom, directionRight, directionLeft, cubeStopRandom, cubeSpread, cubeJelly, glassCube, glassBlock, circles, circlesInside, circlesRotate, cubeShow, upBars, downBars, hideBars, swapBars, swapBarsBack, swapBlocks, cut, random, randomSmart
             labelAnimation: "slideUp", // Label animation type, slideUp, left, right, fixed
             interval: 3000, // waktu transisi
        });
    });
</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

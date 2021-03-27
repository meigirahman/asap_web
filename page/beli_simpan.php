<?php
	 
	// mengambil data barang dengan kode paling besar
	$query = mysqli_query($konek, "SELECT max(kd_beli) as kodeTerbesar FROM tb_beli");
	$data = mysqli_fetch_array($query);
	$kd_beli = $data['kodeTerbesar'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kd_beli, 1, 7);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "b";
	$kd_beli = $huruf . sprintf("%07s", $urutan);
 
 
		 
		$uraian=$_POST['uraian'];  
		$tgl=$_POST['tgl'];  
		 
 		
 
		
		mysqli_query($konek,"insert into tb_beli(kd_beli,uraian,tgl,kd_opd,kd_sub) values ('$kd_beli','$uraian','$tgl','$_SESSION[kd_opd]','$_SESSION[kd_sub]')") or die(mysql_error());
		
?>
<script type="text/javascript">
		 
		location.href="home.php?p=beli";
		
		</script>';
<?php
	// https://www.malasngoding.com
	// menghubungkan dengan koneksi database
 
	// mengambil data barang dengan kode paling besar
	$query = mysqli_query($konek, "SELECT max(kd_saldo) as kodeTerbesar FROM tb_saldo");
	$data = mysqli_fetch_array($query);
	$kd_saldo = $data['kodeTerbesar'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kd_saldo, 1, 7);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "a";
	$kd_saldo = $huruf . sprintf("%07s", $urutan);
	 
		 
		$uraian=$_POST['uraian'];  
		$tgl=$_POST['tgl'];  
		 
 		
 
		
		mysqli_query($konek,"insert into tb_saldo(kd_saldo,uraian,tgl,kd_opd,kd_sub) values ('$kd_saldo','$uraian','$tgl','$_SESSION[kd_opd]','$_SESSION[kd_sub]')") or die(mysql_error());
		
?>
<script type="text/javascript">
		
		 
		location.href="home.php?p=saldo";
		
		</script>';
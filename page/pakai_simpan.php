 <?php
	// https://www.malasngoding.com
	// menghubungkan dengan koneksi database
 
	// mengambil data barang dengan kode paling besar
	$query = mysqli_query($konek, "SELECT max(kd_pakai) as kodeTerbesar FROM tb_pakai");
	$data = mysqli_fetch_array($query);
	$kd_pakai = $data['kodeTerbesar'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kd_pakai, 1, 7);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "p";
	$kd_pakai = $huruf . sprintf("%07s", $urutan);
 
		 
		$uraian=$_POST['uraian'];  
		$tgl=$_POST['tgl'];  
		 
 		
 
		
		mysqli_query($konek,"insert into tb_pakai(kd_pakai,uraian,tgl,kd_opd,kd_sub) values ('$kd_pakai','$uraian','$tgl','$_SESSION[kd_opd]','$_SESSION[kd_sub]')") or die(mysql_error());
		
?>
<script type="text/javascript">
		 
		location.href="home.php?p=pakai";
		
		</script>';
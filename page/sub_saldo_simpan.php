<?php
	// https://www.malasngoding.com
	// menghubungkan dengan koneksi database
 
	// mengambil data barang dengan kode paling besar
	$query = mysqli_query($konek, "SELECT max(kd_saldo_rinci) as kodeTerbesar FROM tb_saldo_rinci");
	$data = mysqli_fetch_array($query);
	$kd_saldo_rinci = $data['kodeTerbesar'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kd_saldo_rinci, 2, 7);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "sa";
	$kd_saldo_rinci = $huruf . sprintf("%07s", $urutan);
	 
		 
		$kd_brg=$_POST['kd_brg']; 
	 $rek4=substr($_POST['kd_brg'],0,11); 
		$uraian=$_POST['uraian'];  
		$tgl=$_POST['tgl'];  
		 
		$jumlah=$_POST['jumlah'];  
		$satuan=$_POST['satuan'];  
		$harga_satuan=$_POST['harga_satuan'];  
			 
		$kd_opd=$_POST['kd_opd']; 
			$kd_sub=$_POST['kd_sub']; 
		$kd_saldo=$_POST['kd_saldo']; 
		 
	 
 	 
		
		mysqli_query($konek,"insert into tb_saldo_rinci(kd_saldo_rinci,kd_brg,uraian,jumlah,satuan,harga_satuan,kd_opd,kd_sub,kd_saldo)
		 
		values ('$kd_saldo_rinci','$kd_brg','$uraian','$jumlah','$satuan',$harga_satuan,'$kd_opd','$kd_sub','$kd_saldo')") or die(mysql_error());
		
		
 
	// mengambil data barang dengan kode paling besar
	$query = mysqli_query($konek, "SELECT max(kd_stok) as kodeTerbesar FROM tb_stok");
	$data = mysqli_fetch_array($query);
	$kd_stok = $data['kodeTerbesar'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kd_stok, 1, 7);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "s";
	$kd_stok = $huruf . sprintf("%07s", $urutan);
	
	
	mysqli_query($konek,"insert into tb_stok(kd_stok,kd_brg,tgl,uraian,jumlah,satuan,harga_satuan,kd_opd,kd_sub,kd_saldo,kd_saldo_rinci,opsi,rek4,positif)
		 
		values ('$kd_stok','$kd_brg','$tgl','$uraian','$jumlah','$satuan',$harga_satuan,'$kd_opd','$kd_sub','$kd_saldo','$kd_saldo_rinci','saldo','$rek4','$jumlah')") or die(mysql_error());
		
		
?>
<script type="text/javascript"> 
		location.href="home.php?p=sub_saldo&kd_saldo=<?echo $kd_saldo ?>&tgl=<?echo $tgl ?>";
		
		</script>
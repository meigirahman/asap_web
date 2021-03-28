<?php
	// https://www.malasngoding.com
	// menghubungkan dengan koneksi database
 
	// mengambil data barang dengan kode paling besar
	$query = mysqli_query($konek, "SELECT max(kd_beli_rinci) as kodeTerbesar FROM tb_beli_rinci");
	$data = mysqli_fetch_array($query);
	$kd_beli_rinci = $data['kodeTerbesar'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kd_beli_rinci, 2, 7);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "sb";
	$kd_beli_rinci = $huruf . sprintf("%07s", $urutan);
	 
		$kd_brg=$_POST['kd_brg']; 
		$rek4=substr($_POST['kd_brg'],0,11); 
	 
		$uraian=$_POST['uraian'];  
		$tgl=$_POST['tgl'];  
		 
		$jumlah=$_POST['jumlah'];  
		$satuan=$_POST['satuan'];  
		$harga_satuan=$_POST['harga_satuan'];  
		$expired=$_POST['expired'];  
			 
		$kd_opd=$_POST['kd_opd']; 
		$kd_sub=$_POST['kd_sub']; 
		$kd_beli=$_POST['kd_beli']; 
		 
	  
	  
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
	
		
		$sql=mysqli_query($konek,"SELECT kd_brg FROM tb_beli_rinci WHERE kd_brg = '$kd_brg' and kd_beli='$kd_beli' ") or die(mysql_error());
		 $jlh=mysqli_fetch_object($sql);
		if(!empty($jlh->kd_brg))
		{
			?>
			<script type="text/javascript">
			alert("Barang yang sama sudah ada dalam nota, silahkan buat nota lainnya");
			location.href="home.php?p=sub_beli&kd_beli=<?echo $kd_beli ?>&kd_opd=<?echo $kd_opd ?>&kd_sub=<?echo $kd_sub ?>&tgl=<?echo $tgl ?>";
			</script>
		<?php
		}
		else
		{
			mysqli_query($konek,"insert into tb_beli_rinci(kd_beli_rinci,kd_brg,uraian,jumlah,satuan,harga_satuan,kd_opd,kd_sub,kd_beli,tgl,expired)
			 
			values ('$kd_beli_rinci','$kd_brg','$uraian','$jumlah','$satuan',$harga_satuan,'$kd_opd','$kd_sub','$kd_beli','$tgl','$expired')") or die(mysql_error());
			
			 
	 
			mysqli_query($konek,"insert into tb_stok(kd_stok,kd_brg,tgl,uraian,jumlah,satuan,harga_satuan,kd_opd,kd_sub,kd_beli,kd_beli_rinci,opsi,rek4,positif,expired)
			 
			values ('$kd_stok','$kd_brg','$tgl','$uraian','$jumlah','$satuan',$harga_satuan,'$kd_opd','$kd_sub','$kd_beli','$kd_beli_rinci','masuk','$rek4','$jumlah','$expired')") or die(mysql_error());
			
		?>
		<script type="text/javascript">
		
		 
		location.href="home.php?p=sub_beli&kd_beli=<?echo $kd_beli ?>&tgl=<?echo $tgl ?>";
		
		</script>
		
	<?	}
		?>	
		

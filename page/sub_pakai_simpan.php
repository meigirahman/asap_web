<?php
	// https://www.malasngoding.com
	// menghubungkan dengan koneksi database
 
	// mengambil data barang dengan kode paling besar
	$query = mysqli_query($konek, "SELECT max(kd_pakai_rinci) as kodeTerbesar FROM tb_pakai_rinci");
	$data = mysqli_fetch_array($query);
	$kd_pakai_rinci = $data['kodeTerbesar'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kd_pakai_rinci, 2, 7);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "sp";
	$kd_pakai_rinci = $huruf . sprintf("%07s", $urutan);
 
	
	
		$kd_brg=$_POST['kd_brg']; 
	 
		$rek4=substr($_POST['kd_brg'],0,11); 
		
		
		$uraian=$_POST['uraian'];  
		$tgl=$_POST['tgl'];  
		 
		$jumlah=$_POST['jumlah'];  
		$satuan=$_POST['satuan'];  
		$harga_satuan=$_POST['harga_satuan'];  
			 
		$kd_opd=$_POST['kd_opd']; 
		$kd_sub=$_POST['kd_sub']; 
		$kd_pakai=$_POST['kd_pakai'];  
		 
		$rek4=substr($_POST['kd_brg'],0,11); 
	
		 
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
		
		$sql=mysqli_query($konek,"select sum(jumlah) as stok from tb_stok where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and kd_brg='$kd_brg' group by kd_brg") or die(mysql_error());
		 $jlh=mysqli_fetch_object($sql);
		if($jlh->stok<$jumlah)
		{
			?>
			<script type="text/javascript">
			alert("Stok kurang/kosong");
			location.href="home.php?p=sub_pakai&kd_pakai=<?echo $kd_pakai ?>&tgl=<?echo $tgl ?>";
			</script>
		<?php
		}
		else
		{
				mysqli_query($konek,"insert into tb_pakai_rinci(kd_pakai_rinci,kd_brg,uraian,jumlah,satuan,harga_satuan,kd_opd,kd_sub,kd_pakai,tgl)
		 
		values ('$kd_pakai_rinci','$kd_brg','$uraian','$jumlah','$satuan',$harga_satuan,'$kd_opd','$kd_sub','$kd_pakai','$tgl')") or die(mysql_error());
	 
		mysqli_query($konek,"insert into tb_stok(kd_stok,kd_brg,tgl,uraian,jumlah,satuan,harga_satuan,kd_opd,kd_sub,kd_pakai,kd_pakai_rinci,opsi,positif,rek4)
		 
		values ('$kd_stok','$kd_brg','$tgl','$uraian',0-'$jumlah','$satuan',$harga_satuan,'$kd_opd','$kd_sub','$kd_pakai','$kd_pakai_rinci','keluar','$jumlah','$rek4')") or die(mysql_error());
		?>
		<script type="text/javascript">
		
 
		location.href="home.php?p=sub_pakai&kd_pakai=<?echo $kd_pakai ?>&tgl=<?echo $tgl ?>";
		
		</script>
		
	<?	}
		?>	


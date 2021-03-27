<?php
		
		
		$kd_beli=$_GET['kd_beli'];
		
		
		
		$sql=mysqli_query($konek,"select kd_opd from tb_pakai where kd_pakai='c$kd_beli'") or die(mysql_error());
		 $jlh=mysqli_fetch_object($sql);
		if($jlh->kd_opd>0)
		{
			?>
			<script type="text/javascript">
			alert("Data Pembelian sudah pernah ada, hapus dulu ya");
			location.href="home.php?p=beli";
			</script>
		<?php
		}
		else
		{
			
			
			
		$sql=mysqli_query($konek,"select * from tb_beli where kd_beli='$kd_beli'") or die(mysql_error());
		while($data=mysqli_fetch_object($sql))
		{	
	
		$kd_pakai="c".$data->kd_beli;
		$uraian=$data->uraian;
		$kd_opd=$data->kd_opd;
		$kd_sub=$data->kd_sub;
		$tgl=$data->tgl;		
		 
		mysqli_query($konek,"insert into tb_pakai (kd_pakai,uraian,kd_opd,kd_sub,tgl) values
						('$kd_pakai','$uraian','$kd_opd','$kd_sub','$tgl')") or die(mysql_error());
		
		}
		
		
		$sql=mysqli_query($konek,"select * from tb_beli_rinci where kd_beli='$kd_beli'") or die(mysql_error());
		while($data=mysqli_fetch_object($sql))
		{		
		$kd_pakai_rinci="c".$data->kd_beli_rinci;
		$kd_brg=$data->kd_brg;
		$uraian=$data->uraian;
		$jumlah=$data->jumlah;
		$satuan=$data->satuan;
		$harga_satuan=$data->harga_satuan;
		$kd_opd=$data->kd_opd;
		$kd_sub=$data->kd_sub;
		$kd_pakai="c".$data->kd_beli;
		$tgl=$data->tgl;		
		$rek4=substr($kd_brg,0,11); 

		
		mysqli_query($konek,"insert into tb_pakai_rinci (kd_pakai_rinci,kd_brg,uraian,jumlah,satuan,harga_satuan,kd_opd,kd_sub,kd_pakai,tgl) values
						('$kd_pakai_rinci','$kd_brg','$uraian','$jumlah','$satuan','$harga_satuan','$kd_opd','$kd_sub','$kd_pakai','$tgl')") or die(mysql_error());
		
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
	
	
		mysqli_query($konek,"insert into tb_stok (kd_stok,tgl,kd_brg,uraian,jumlah,opsi,kd_pakai,kd_pakai_rinci,satuan,harga_satuan,kd_opd,kd_sub,positif,rek4) values
						('$kd_stok','$tgl','$kd_brg','$uraian',0-'$jumlah','keluar','$kd_pakai','$kd_pakai_rinci','$satuan','$harga_satuan','$kd_opd','$kd_sub','$jumlah','$rek4')") or die(mysql_error());
		}


		?>
		<script type="text/javascript">
		
		alert("Data sudah disalin ke pemakaian");
		location.href="home.php?p=beli";
		
		</script>
		<?}?>


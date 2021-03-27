<?php
 
		
	 
		$uraian=$_POST['uraian'];  
		$satuan=$_POST['satuan'];
		
	 $kd_aset2   = sprintf("%02s", $_POST['kd_aset2']);
	 $kd_aset3   = sprintf("%02s", $_POST['kd_aset3']);
	 $kd_aset4   = sprintf("%02s", $_POST['kd_aset4']);
	 $kd_aset5   = sprintf("%03s", $_POST['kd_aset5']);
	 
 
    

$q="select max(kd_brg) as kodeTerbesar FROM standar where k2='$kd_aset2' and k3='$kd_aset3' and k4='$kd_aset4' and k5='$kd_aset5'";
    $query=mysqli_query($konek,$q);
    
 
	$data = mysqli_fetch_array($query);
	
	 
if (!$query) { // add this check.
    die	('Invalid query: ' . mysql_error());
}
	
	if($data['kodeTerbesar']!=null)
	{	
$kd_beli = $data['kodeTerbesar'];
$urutan = substr($kd_beli, 19, 5);}
else
{	
$urutan='00000';
}
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "1.1.7.".$kd_aset2.".".$kd_aset3.".".$kd_aset4.".".$kd_aset5.".";
	$kd_brg = $huruf . sprintf("%05s", $urutan);
 
	
	 $urutan   = sprintf("%05s", $urutan);
		
		$simpan=mysqli_query($konek,"insert into standar(kd_brg,uraian,satuan,k1,k2,k3,k4,k5,k6) values
		('$kd_brg','$uraian','$satuan','1','$kd_aset2','$kd_aset3','$kd_aset4','$kd_aset5','$urutan')") or die(mysqli_error());
		
		
		if (!$simpan) { // add this check.
    die	('Invalid query: ' . mysql_error());
}else
{?>
			
		<script type="text/javascript">
		 alert("Berhasi ditambah");
		location.href="home.php?p=rek_input";
		
		</script>'
	
	<?	}
		
		
		?>
		
 
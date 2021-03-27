<?php
 include "conn.php";
   
 
   
   
 $kd_aset2   = sprintf("%02s", $_POST['kd_aset2']);
	 $kd_aset3   = sprintf("%02s", $_POST['kd_aset3']);
	 $kd_aset4   = sprintf("%02s", $_POST['kd_aset4']);
	 $kd_aset5   = sprintf("%03s", $_POST['kd_aset5']);


$q="select max(kd_brg) as kodeTerbesar FROM standar where k2='$kd_aset2' and k3='$kd_aset3' and k4='$kd_aset4' and k5='$kd_aset5'";
    $query=mysql_query($q);
    
 
	$data = mysql_fetch_array($query);
	
	 
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
	$kd_beli = $huruf . sprintf("%05s", $urutan);
 
	
	 
		print_r($kd_beli);
		?>
	 
 
		 
		 
 
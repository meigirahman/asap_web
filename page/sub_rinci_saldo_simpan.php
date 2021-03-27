<?php
		include "koneksi.php";
		$kd_brg=$_POST['kd_brg']; 
	 
		$uraian=$_POST['uraian'];  
		$tgl=$_POST['tgl'];  
		 
		$jumlah=$_POST['jumlah'];  
		$satuan=$_POST['satuan'];  
		$harga_satuan=$_POST['harga_satuan'];  
			 
		$kd_opd=$_POST['kd_opd']; 
		$kd_beli=$_POST['kd_beli']; 
	 
 	$bidang=$_SESSION['bidang'];
		
		mysql_query("insert into tb_beli_rinci(kd_brg,uraian,jumlah,satuan,harga_satuan,kd_opd,kd_beli)
		 
		values ('$kd_brg','$uraian','$jumlah','$satuan',$harga_satuan,'$kd_opd','$kd_beli')") or die(mysql_error());
		
		mysql_query("insert into tb_stok(kd_brg,tgl,uraian,jumlah,satuan,harga_satuan,kd_opd,kd_beli,opsi)
		 
		values ('$kd_brg','$tgl','$uraian','$jumlah','$satuan',$harga_satuan,'$kd_opd','$kd_beli','masuk')") or die(mysql_error());
		
		
?>
<script type="text/javascript">
		
		alert("Data baru telah ditambahkan, Silahkan tunggu...");
		location.href="home.php?p=sub_rinci_belanja&kd_beli=<?echo $kd_beli ?>&kd_opd=<?echo $kd_opd ?>";
		
		</script>
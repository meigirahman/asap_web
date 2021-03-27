<?php
 
	
		include "koneksi.php";
		$kd_prog=substr($_POST['kd_keg'],0,2);
		$kd_keg=$_POST['kd_keg']; 
		$kd_jenis=substr($_POST['kd_rinci'],0,5); 
		$kd_objek=substr($_POST['kd_rinci'],0,8); 
		$kd_rinci=$_POST['kd_rinci']; 
		$tgl=$_POST['tgl'];
		$periode=date('m', strtotime($tgl));
		$jns=$_POST['jns'];
		$kpd=$_POST['kpd'];
		$uraian=$_POST['uraian'];
		$jlh=$_POST['jlh'];
		$dk=$_POST['dk'];
		$dana=$_POST['dana'];
		 
		$bid=$_SESSION['bidang'];
				
 
		
		mysql_query("insert into tb_data
		(kd_prog,kd_keg,kd_jenis,kd_objek,kd_rinci,tgl,periode,jns,kpd,uraian,jlh,dk,dana,bid) " .
		 "values
		 ('$kd_prog','$kd_keg','$kd_jenis','$kd_objek','$kd_rinci','$tgl','$periode','$jns','$kpd','$uraian','$jlh','$dk','$dana','$bid'
		 )") 
		 or die(mysql_error());
		echo '<script type="text/javascript">alert("Data baru telah ditambahkan, Silahkan tunggu...");
		location.href="home.php?p=data_view";</script>';
?>
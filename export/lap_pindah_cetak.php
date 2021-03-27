<?php
$firstdate=$_GET['firstdate'];
$lastdate=$_GET['lastdate'];
$nasabah=$_GET['nb'];
$format1 = date('d F Y', strtotime($firstdate ));
$format2 = date('d F Y', strtotime($lastdate ));
?>
<?php		
			require ('../inc/config.php');
			$query=("SELECT * from tb_detail_pend_pindah,tb_pend_pindah WHERE tb_detail_pend_pindah.no_surat_pindah=tb_pend_pindah.no_surat_pindah AND tanggal_input BETWEEN '$firstdate' and '$lastdate'");
			$result = mysql_query($query) or die(mysql_error());
			$no = 1;?>
<html>
	<head>
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
		<style type="text/css">		body {
				padding-top: 20px;
				padding-bottom: 40px;
				font-size: 0.7em;
			}
</style>
<link href="../assets/css/table.css" rel="stylesheet">
	</head>
	<body>
		<div class='span1  offset12'>
        <table width="330px" align="left">
        <tr>
        <td colspan="3">
        <img src="../img/gambar.jpg" width="50" height="50" align="left"/>
        </td>
        <td>
        <h4> Laporan Data Penduduk Pindah <br /> Kelurahan Citangtu <br />Kecamatan Kuningan </h4>
        </td>
        </tr>
        </table>
        <table width="700px">
        <tr>
        <td colspan="3">
        <h5 align="right"> Periode <?php echo $format1;?> s.d <?php echo $format2;?></h5>
        </td>
        </tr>
        </table>
            
			
			<table  align="center" id="tablei">
                                            
                                            <thead>
                                            <tr   style="background: #1484CE;color: #fff;"> 
                                            <th align="center">No</th>
                                            <th align="center">Tanggal Input</th>
                                            <th align="center">No Surat</th>
                                            <th align="center">Nama</th>
                                            <th align="center">NIK</th>
                                            <th align="center">Jenis kelamin</th> 
                                             <th align="center">RT/RW</th> 
                                             <th align="center">Tanggal Pindah</th>
                                            </tr>
                                            </thead>
                                                                                        
                                             <?php
                                             
                                            		$sql = mysql_query("SELECT DATE_FORMAT(tb_pend_pindah.tanggal_input, '%d-%m-%Y') as tanggal_input,
                                                    tb_detail_pend_pindah.no_surat_pindah,tb_detail_pend_pindah.nik, tb_detail_pend_pindah.nama, tb_detail_pend_pindah.jenis_kelamin,
                                                    tb_detail_pend_pindah.no_rt, tb_detail_pend_pindah.no_rw,
                                                    DATE_FORMAT(tb_pend_pindah.tanggal_pindah, '%d-%m-%Y') as tanggal_pindah from tb_pend_pindah,
                                                    tb_detail_pend_pindah where 	tb_detail_pend_pindah.no_surat_pindah=tb_pend_pindah.no_surat_pindah
                                            		 and tanggal_input BETWEEN '$firstdate' and '$lastdate'");
                                        		
                                        		$no =  1;		
                                        		while ($r=mysql_fetch_array($sql)){				
                                        		
                                        		?>
                                                
                                                <tbody >
                                        		<tr><td width="25px"><?php echo $no; ?></td>
                                        		<td ><?php echo $r['tanggal_input'] ?></td>
                                        		<td ><?php echo $r['no_surat_pindah']; ?></td>
                                                <td ><?php echo $r['nama']; ?></td>
                                                <td ><?php echo $r['nik']; ?></td>
                                                <td ><?php echo $r['jenis_kelamin']; ?></td>
                                                <td ><?php echo $r['no_rt']; ?>/<?php echo $r['no_rw']; ?></td>
                                                <td ><?php echo $r['tanggal_pindah']; ?></td>
                                                </tr>
                                        		<?php $no++; } ?></tbody> 
                                        </table>
			
		</div>
	</body>
</html>

<?php
$firstdate=$_GET['firstdate'];
$lastdate=$_GET['lastdate'];
$nasabah=$_GET['nb'];
$format1 = date('d F Y', strtotime($firstdate ));
$format2 = date('d F Y', strtotime($lastdate ));
?>
<?php		
			require ('../inc/config.php');
			$query=("SELECT * from tb_detail_kematian,tb_kematian WHERE tb_detail_kematian.no_surat_kematian=tb_kematian.no_surat_kematian  AND tanggal_input BETWEEN '$firstdate' and '$lastdate'");
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
        <table width="300px" align="left">
        <tr>
        <td colspan="3">
        <img src="../img/gambar.jpg" width="50" height="50" align="left"/>
        </td>
        <td>
        <h4> Laporan Data Kematian <br /> Kelurahan Citangtu <br />Kecamatan Kuningan </h4>
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
                                            <th align="center">NIK</th>
                                            <th align="center">Nama</th>
                                            <th align="center">Jenis kelamin</th> 
                                             <th align="center">Tgl Meninggal</th>
                                              <th align="center">Umur</th>
                                            <th align="center">RT/RW</th> 
                                             <th align="center">Sebab</th>
                                            </tr>
                                            </thead>
                                                                                        
                                             <?php
                                             
                                            		$sql = mysql_query("SELECT DATE_FORMAT(tb_kematian.tanggal_input, '%d-%m-%Y') as tanggal_input,
                                                    tb_detail_kematian.nik, tb_detail_kematian.nama, tb_detail_kematian.jenis_kelamin,
                                                    DATE_FORMAT(tb_kematian.tanggal_meninggal, '%d-%m-%Y') as tanggal_meninggal,
                                                    tb_kematian.umur,tb_detail_kematian.no_rt, tb_detail_kematian.no_rw,
                                                    tb_kematian.sebab from tb_kematian,tb_detail_kematian
                                            		where tb_detail_kematian.no_surat_kematian=tb_kematian.no_surat_kematian
                                            		 and tanggal_input BETWEEN '$firstdate' and '$lastdate'");
                                        		
                                        		$no =  1;		
                                        		while ($r=mysql_fetch_array($sql)){				
                                        		
                                        		?>
                                                
                                                <tbody >
                                        		<tr><td width="25px"><?php echo $no; ?></td>
                                        		<td ><?php echo $r['tanggal_input'] ?></td>
                                        		<td ><?php echo $r['nik']; ?></td>
                                                <td ><?php echo $r['nama']; ?></td>
                                                <td ><?php echo $r['jenis_kelamin']; ?></td>
                                                <td ><?php echo $r['tanggal_meninggal']; ?></td>
                                                <td ><?php echo $r['umur']; ?></td>
                                        		<td ><?php echo $r['no_rt']; ?>/<?php echo $r['no_rw']; ?></td>
                                                <td ><?php echo $r['sebab']; ?></td>
                                                </tr>
                                        		<?php $no++; } ?></tbody> 
                                        </table>
			
		</div>
	</body>
</html>

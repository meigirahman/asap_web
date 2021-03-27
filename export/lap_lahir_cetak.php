<?php
$firstdate=$_GET['firstdate'];
$lastdate=$_GET['lastdate'];
$nasabah=$_GET['nb'];
$format1 = date('d F Y', strtotime($firstdate ));
$format2 = date('d F Y', strtotime($lastdate ));
?>
<?php		
			require ('../inc/config.php');
			$query=("SELECT * from tb_kelahiran WHERE  tanggal_input BETWEEN '$firstdate' and '$lastdate'");
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
        <h4> Laporan Data Kelahiran <br /> Kelurahan Citangtu <br />Kecamatan Kuningan </h4>
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
                                            <th align="center">No Surat Kelahiran</th>
                                            <th align="center">Nama</th>
                                            <th align="center">Jenis kelamin</th> 
                                            <th align="center">RT/RW</th> 
                                             <th align="center">Nama Orangtua</th> 
                                            
                                            </tr>
                                            </thead>
                                                                                        
                                             <?php
                                             
                                            		$sql = mysql_query("SELECT DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input,
                                                    nama, no_surat_kelahiran, jenis_kelamin, no_rt,no_rw,nama_ayah,nama_ibu from tb_kelahiran 
                                            		where  tanggal_input BETWEEN '$firstdate' and '$lastdate'");
                                        		
                                        		$no =  1;		
                                        		while ($r=mysql_fetch_array($sql)){				
                                        		
                                        		?>
                                                
                                                <tbody >
                                        		<tr><td width="25px"><?php echo $no; ?></td>
                                        		<td ><?php echo $r['tanggal_input'] ?></td>
                                        		<td ><?php echo $r['no_surat_kelahiran']; ?></td>
                                                <td ><?php echo $r['nama']; ?></td>
                                                <td ><?php echo $r['jenis_kelamin']; ?></td>
                                        		<td ><?php echo $r['no_rt']; ?>/<?php echo $r['no_rw']; ?></td>
                                                <td ><?php echo $r['nama_ayah']; ?> / <?php echo $r['nama_ibu']; ?></td>
                                                </tr>
                                        		<?php $no++; } ?></tbody> 
                                        </table>
			
		</div>
	</body>
</html>

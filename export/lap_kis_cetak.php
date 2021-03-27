<?php
$rt=$_GET['rt'];
$rw=$_GET['rw'];
$nasabah=$_GET['nb'];

?>
<?php		
			require ('../inc/config.php');
			$query=("SELECT no_surat_kelahiran,
                                                    nama, jenis_kelamin,tempat, DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,
                                                    status_nikah,no_rt,no_rw from tb_penduduk where
                                                     (no_rt= '$rt' and no_rw='$rw') and no_surat_kelahiran!='-' ");
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
        <table width="320px" align="left">
        <tr>
        <td colspan="3">
        <img src="../img/gambar.jpg" width="50" height="50" align="left"/>
        </td>
        <td>
        <h4> LAPORAN DATA PENDUDUK <br /> Kelurahan Citangtu <br />Kecamatan Kuningan </h4>
        </td>
        </tr>
        </table>
        <table width="700px">
        <tr>
        <td colspan="3">
        <h5 align="right"> RT <?php echo $rt;?> / RW <?php echo $rw;?></h5>
        </td>
        </tr>
        </table>
            
			
			<table  align="center" id="tablei">
                                            
                                            <thead>
                                            <tr   style="background: #1484CE;color: #fff;"> 
                                            <th align="center">No</th>
                                            <th align="center">Nomor KIS</th>
                                            <th align="center">NIK</th>
                                            <th align="center">Nama</th>
                                            <th align="center">Jenis kelamin</th>
                                            <th align="center">TTL</th>
                                             
                                            <th align="center">RT/RW</th>
                                            
                                            </tr>
                                            </thead>
                                                                                        
                                             <?php
                                             
                                            		$sql = mysql_query("SELECT no_surat_kelahiran,
                                                    nik,nama, jenis_kelamin,tempat, DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,
                                                    no_rt,no_rw from tb_penduduk where (no_rt= '$rt' and no_rw='$rw') and no_surat_kelahiran!='-' ");
                                        		
                                        		$no =  1;		
                                        		while ($r=mysql_fetch_array($sql)){				
                                        		
                                        		?>
                                                
                                                <tbody >
                                        		<tr><td width="25px"><?php echo $no; ?></td>
                                        		<td ><?php echo $r['no_surat_kelahiran'] ?></td>
                                                <td ><?php echo $r['nik']; ?></td>
                                        		<td ><?php echo $r['nama']; ?></td>
                                                <td ><?php echo $r['jenis_kelamin']; ?></td>
                                                <td ><?php echo $r['tempat']; ?>, <?php echo $r['tanggal_lahir']; ?></td>
                                                
                                        		<td ><?php echo $r['no_rt']; ?>/<?php echo $r['no_rw']; ?></td>
                                                </tr>
                                        		<?php $no++; } ?></tbody> 
                                        </table>
			
		</div>
	</body>
</html>

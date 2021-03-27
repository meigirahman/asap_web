<?php
$nama = $_GET['term'];
$conn = mysql_connect("localhost","root","");
// $conn = mysql_connect("10.16.156.11","root","");
mysql_select_db("sikep");
$sql = "select * from tb_penduduk where nama like '$nama%'";
$hs = mysql_query($sql);
$json = array();
while($rs = mysql_fetch_array($hs)){
	$json[] = array(
		'label' => $rs['nama'],
		'value' => $rs['nama'] ,
        'nama' => $rs['nama'] ,
        'no_reg_pend' => $rs['no_reg_pend'],
		'nik' => $rs['nik'],
		'jenis_kelamin' => $rs['jenis_kelamin'],
        'tempat' => $rs['tempat'],
        'tanggal_lahir' => $rs['tanggal_lahir'],
        'agama' => $rs['agama'],
        'status_nikah' => $rs['status_nikah'],
        'pekerjaan' => $rs['pekerjaan'],
        'no_rt' => $rs['no_rt'],
        'no_rw' => $rs['no_rw'],
        'no_kk' => $rs['no_kk'],
        'status_hub' => $rs['status_hub'],
        'pendidikan' => $rs['pendidikan'],
        'no_akta' => $rs['no_akta'],
        'no_akta_nikah' => $rs['no_akta_nikah'],
        'tanggal_nikah' => $rs['tanggal_nikah'],
        'no_akta_cerai' => $rs['no_akta_cerai'],
        'tanggal_cerai' => $rs['tanggal_cerai'],
        'nama_ayah' => $rs['nama_ayah'],
        'nama_ibu' => $rs['nama_ibu'],
		'alamat' => $rs['alamat'],
	);
}
header("Content-Type: application/json");
echo json_encode($json);
?>
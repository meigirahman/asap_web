<?php
define('FPDF_FONTPATH','plugins/fpdf17/font/');
require('plugins/fpdf17/fpdf.php');
 
class PDF extends FPDF
{
	//Page header
	function Header()
	{
		$this->SetFont('Arial','B',16);
		$this->Cell(190,7,'DAFTAR TRANSAKSI PEMBELIAN PERSEDIAAN',0,1,'C');
		$this->SetFont('Arial','B',12);
		$this->Cell(190,7,'Periode 01 January 2021 s.d. 31 January 2021',0,1,'C');
		$this->Ln(10);

		$o="select * from tb_opd where kd_opd='$_SESSION[kd_opd]'";
        $oo=mysql_query($o) or die (mysql_error());
        $opd=mysql_fetch_object($oo);                                                             

	
		$this->Cell(190,7,'Perangkat Daerah : '.$opd->nama,0,1,'L'); 
		  
		  

		$this->SetFont('Arial','B',8);
//width height teks border ln posisi
$this->Cell(10,6,'No',1,0);
$this->Cell(50,6,'Kode Rekening',1,0,'C');
$this->Cell(50,6,'Uraian',1,0);
$this->Cell(25,6,'Kuantitas',1,0);
$this->Cell(25,6,'Harga Satuan',1,0);
$this->Cell(25,6,'Jumlah',1,1);
	}
 
	//Page Content
	function Content()
	{
		$this->SetFont('Arial','',8);
		include 'koneksi.php';
		
$mahasiswa = mysql_query("select * from standar limit 100");
while ($row = mysql_fetch_array($mahasiswa)){
    $this->Cell(10,6,$row['id'],1,0);
    $this->Cell(50,6,$row['kd_brg'],1,0);
    $this->Cell(50,6,$row['uraian'],1,0);
    $this->Cell(25,6,$row['k6'],1,0); 
    $this->Cell(25,6,$row['k6'],1,0);   
    $this->Cell(25,6,$row['k6'],1,1); 
	}
	}
 
	//Page footer
	function Footer()
	{
		//atur posisi 1.5 cm dari bawah
		$this->SetY(-15);
		//buat garis horizontal
		$this->Line(10,$this->GetY(),200,$this->GetY());
		//Arial italic 9
		$this->SetFont('Arial','I',9);
		//nomor halaman
		$this->Cell(0,10,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
	}

	}
//contoh pemanggilan class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();



$pdf->Content();
$pdf->Output();
?>

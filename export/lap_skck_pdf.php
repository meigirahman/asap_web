<?php
require('../plugins/fpdf17/fpdf.php');
require('../inc/config.php');
class PDF extends FPDF
{

	function Header()
{
//Logo
$this->Image('tegal.jpg',10,12);

//Arial bold 15
$this->SetFont('Arial','B',10);
//pindah ke posisi ke tengah untuk membuat judul
$this->Cell(15);
//judul
$this->Cell(30,10,'Laporan Register SKCK',0,0,'L');
$this->Ln(4);
$this->Cell(15);
$this->Cell(30,10,'KECAMATAN BUMIJAWA',0,0,'L');
$this->Ln(4);
$this->Cell(15);
$this->Cell(30,10,'DESA CEMPAKA',0,0,'L');
$this->Ln(4);
$this->Cell(80);
$this->Cell(200,10,'File: Laporan Register SKCK',0,0,'R');
//pindah baris
$this->Ln(20);
//buat garis horisontal
$this->Line(10,25,200,25);
}

// Load data
function LoadData($file)
{
	// Read file lines
	$lines = file($file);
	$data = array();
	foreach($lines as $line)
		$data[] = explode(';',trim($line));
	return $data;
}
function LoadDataFromSQL($sql)
{
	$hasil=mysql_query($sql) or die(mysql_error());

	$data = array();
	while($rows=mysql_fetch_array($hasil)){
		$data[] = $rows;

}
	return $data;
}


// Colored table
function judultabel($namatabel){
$this->Cell(100,10,$namatabel,0,0,'C');
$this->Ln(10);
}
function FancyTable($header, $data)
{
	// Colors, line width and bold font
	$this->SetFillColor(255,165,74);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.3);
	$this->SetFont('','B');
	// Header
	$w = array( 10,30, 50,60,40,40,30,10, 10);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
	// Color and font restoration
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('');
	// Data
	$fill = false;
	$no=1;
	foreach($data as $row)
	{
		
		$this->Cell($w[0],6,$no,'LR',0,'C',$fill);
		$this->Cell($w[1],6,$row[0],'LR',0,'C',$fill);
		$this->Cell($w[2],6,$row[1],'LR',0,'L',$fill);
		$this->Cell($w[3],6,$row[2],'LR',0,'L',$fill);
		$this->Cell($w[4],6,$row[3],'LR',0,'L',$fill);
		$this->Cell($w[5],6,$row[4],'LR',0,'L',$fill);
		$this->Cell($w[6],6,$row[5],'LR',0,'L',$fill);
        $this->Cell($w[7],6,$row[6],'LR',0,'L',$fill);
        $this->Cell($w[8],6,$row[7],'LR',0,'L',$fill);
		$this->Ln();
		$fill = !$fill;
		$no++;
	
	}
	// Closing line
	$this->Cell(array_sum($w),0,'','T');
}

	function Footer()
{
//atur posisi 1.5 cm dari bawah
$this->SetY(-15);
//buat garis horizontal
$this->Line(10,$this->GetY(),200,$this->GetY());
//Arial italic 9
$this->SetFont('Arial','I',9);
//nomor halaman
$this->Cell(0,10,'Halaman '.$this->PageNo().' dari {nb} Developer by Binti Ismahiya',0,0,'R');
}
}

$pdf = new PDF();
// Column headings
$header = array('No', 'Tanggal', 'No Surat', 'Nama','Jenis Kelamin','Tempat','Tanggal Lahir', 'RT', 'RW');
// Data loading

$query="SELECT DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input,
                                                    no_surat, nama, jenis_kelamin,tempat, DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,
                                                    no_rt,no_rw from tb_surat_skck where
                                                    tanggal_input BETWEEN '$firstdate' and '$lastdate'";
 
$data = $pdf->LoadDataFromSQL($query);

$pdf->SetFont('Arial','',11);
$pdf->AliasNbPages();
$pdf->AddPage('L');

$pdf->judultabel('Laporan Register SKCK Desa Cempaka Kec. Bumijawa');
$pdf->FancyTable($header,$data);
$pdf->Output('lapSKCK.pdf','D');
?>

<?php
session_start(); 

define('FPDF_FONTPATH','plugins/fpdf17/font/');
require('plugins/fpdf17/fpdf.php');
include 'koneksi.php';
include 'tgl_indo.php';

class PDF extends FPDF
{
	//Page header
	function Header()
	{
		 if ( $this->PageNo() == 1 )
	 {
		 
		 $this->Image('logomuba.png',15,10,18,20);
		
		$this->SetFont('Arial','B',14);
		$this->Cell(190,7,'PEMERINTAH KABUPATEN MUSI BANYUASIN',0,1,'C');
		$this->SetFont('Arial','B',16);
		$this->Cell(190,7,'DAFTAR TRANSAKSI SALDO AWAL PERSEDIAAN',0,1,'C');
		$this->SetFont('Arial','B',12);
 
		$this->Cell(190,7,'Periode 01 Januari 2021 s.d. 31 Desember 2021',0,1,'C');
  $this->Line(10,$this->GetY(),200,$this->GetY());
		$this->Ln(5);
include 'koneksi.php';
		$o="select * from tb_opd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]'";
        $oo=mysqli_query($konek,$o) or die (mysql_error());
        $opd=mysqli_fetch_object($oo);                                                             

	$this->SetFont('Arial','B',10);
		$this->Cell(190,7,'Perangkat Daerah : '.$opd->nama,0,1,'L'); 
		$this->Ln(5);  
	 }  
 	$this->SetFillColor(180, 180, 190);     
		$this->SetFont('Arial','B',8);
//width height teks border ln posisi
$this->Cell(10,6,'No',1,0,'C',true);
$this->Cell(50,6,'Kode Rekening',1,0,'C',true);
$this->Cell(50,6,'Uraian',1,0,'C',true);
$this->Cell(25,6,'Kuantitas',1,0,'C',true);
$this->Cell(25,6,'Harga Satuan',1,0,'C',true);
$this->Cell(25,6,'Jumlah',1,1,'C',true);
	}
 
	//Page Content
	function Content()
	{
		include 'koneksi.php';
		$map3="SELECT rek4 FROM tb_stok where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and opsi='saldo' GROUP BY rek4 having sum(jumlah)>0 ORDER BY rek4 ASC";
			$map2=mysqli_query($konek,$map3) or die (mysql_error());
			$aw2=0;
			$totm2=0;
			$totk2=0;
			$tots2=0;
			$total2=0;
			
			while($map=mysqli_fetch_object($map2))
			{
				$this->SetFont('Arial','B',8);
			  $this->SetFillColor(100, 150, 250);
			 $this->Cell(10,6,'#',1,0,'C',true); 
			 $this->Cell(50,6,$map->rek4,1,0,'L',true);
			
			$mapp3="SELECT nm_asap FROM ref_mapping where rek_asap='$map->rek4'";
			$mapp2=mysqli_query($konek,$mapp3) or die (mysql_error());
			$mapp=mysqli_fetch_object($mapp2);
			 $this->Cell(125,6,$mapp->nm_asap,1,1,'L',true);
			 
		$this->SetFont('Arial','',8);
		

		$myquery="select * from tb_stok where opsi='saldo' and rek4='$map->rek4' and kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' ";
		$no=1;
		$total1=0;
		$daftar=mysqli_query($konek,$myquery) or die (mysql_error());
		while($dataku=mysqli_fetch_object($daftar))
        {
                           
		$this->Cell(10,6,$no,1,0,'C');
		$this->Cell(50,6,$dataku->kd_brg,1,0);
		$this->Cell(50,6,$dataku->uraian,1,0);
       	$this->Cell(25,6,$dataku->jumlah,1,0,'C');
		$this->Cell(25,6,number_format($dataku->harga_satuan,2,',','.').'',1,0,'R');
		
		$total=$dataku->jumlah*$dataku->harga_satuan;
		 
        $this->Cell(25,6,number_format($total,2,',','.').'',1,1,'R');
                                   
		$total1=$total1+$total;
	 
		$no++;
		}
		$this->SetFont('Arial','B',8);
				 $this->SetFillColor(60, 200, 105);
			$this->Cell(160,6,'Sub Total Persediaan '.$mapp->nm_asap,1,0,'C',true);		
			// $this->Cell(25,6,number_format($aw1,2,',','.').'',1,0,'R',true);	
			// $this->Cell(25,6,number_format($totm1,2,',','.').'',1,0,'R',true);	
			// $this->Cell(25,6,number_format($totk1,2,',','.').'',1,0,'R',true);	
			$this->Cell(25,6,number_format($total1,2,',','.').'',1,1,'R',true);	
			 
			
			$total2=$total2+$total1;
			
			}
         	$this->SetFont('Arial','B',8);
         	  $this->SetFillColor(100, 150, 250);  
		$this->Cell(160,6,'TOTAL PERSEDIAAN',1,0,'C',true);		
		$this->Cell(25,6,number_format($total2,2,',','.').'',1,1,'R',true);		
		
		$this->Ln(20);	
		
		
		$t="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and jab='upb'";
		$tt=mysqli_query($konek,$t) or die (mysql_error());
		$ttd=mysqli_fetch_object($tt);
		
		$t2="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and jab='pengelola'";
		$tt2=mysqli_query($konek,$t2) or die (mysql_error());
		$ttd2=mysqli_fetch_object($tt2);
				
				$this->SetFont('Arial','B',8);					
		
			  $this->SetWidths(array(10,60,40,70,10)); 
		  $l='Disetujui Tanggal : '.tgl_indo($_POST['ttd']) 
		  .utf8_decode(chr(10)).$ttd->jabatan.''.utf8_decode(chr(10)).''.utf8_decode(chr(10)).''.utf8_decode(chr(10)).''.
		  $ttd->nama.''.utf8_decode(chr(10)).'NIP. '.$ttd->nip;
		
		 $r=''.utf8_decode(chr(10)).$ttd2->jabatan.''.utf8_decode(chr(10)).''.utf8_decode(chr(10)).''.utf8_decode(chr(10)).''.
		  $ttd2->nama.''.utf8_decode(chr(10)).'NIP. '.$ttd2->nip;
		
		
		
		  $this->Row2(array('',$l,'',$r,''));
  
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
		$this->Cell(90,6,'ASAP | Daftar Transaksi Saldo Awal',0,0,'L');
		$this->Cell(100,6,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
 
	}

	}
//contoh pemanggilan class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(TRUE,20);
$pdf->AddPage();



$pdf->Content();
$pdf->Output();
?>

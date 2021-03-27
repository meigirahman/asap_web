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
		$this->Cell(310,7,'PEMERINTAH KABUPATEN MUSI BANYUASIN',0,1,'C');
		$this->SetFont('Arial','B',16);
		$this->Cell(310,7,'LAPORAN RINCIAN PERSEDIAAN',0,1,'C');
		$this->SetFont('Arial','B',12);
		$tgl=$_POST['tgl'];
		$this->Cell(310,7,'Periode 01 Januari 2021 s.d. '. tgl_indo($_POST['tgl']).'',0,1,'C');
  $this->Line(10,$this->GetY(),320,$this->GetY());
		$this->Ln(5);
include 'koneksi.php';
		$o="select * from tb_opd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]'";
        $oo=mysqli_query($konek,$o) or die (mysql_error());
        $opd=mysqli_fetch_object($oo);                                                             

	$this->SetFont('Arial','B',10);
		$this->Cell(310,7,'Perangkat Daerah : '.$opd->nama,0,1,'L'); 
		$this->Ln(5);  
	 }

		$this->SetFont('Arial','B',8);
		$this->SetFillColor(180, 180, 190);
		//width height teks border ln posisi
		$this->Cell(10,5,'No','L,T,R',0,'C',true);
		$this->Cell(40,5,'Kode','L,T,R',0,'C',true);
		$this->Cell(65,5,'Nama','L,T,R',0,'C',true);
		$this->Cell(15,5,'Satuan','L,T,R',0,'C',true);
		$this->Cell(25,5,'Saldo','L,T,R',0,'C',true);
		$this->Cell(75,5,'Mutasi',1,0,'C',true); 
		$this->Cell(30,5,'Harga','L,T,R',0,'C',true);
		$this->Cell(40,5,'Jumlah',1,0,'C',true);
		$this->Cell(10,5,'Ket','L,T,R',1,'C',true);

		$this->Cell(10,5,'','L,R,B',0,'C',true);
		$this->Cell(40,5,'Rekening','L,R,B',0,'C',true);
		$this->Cell(65,5,'Barang','L,R,B',0,'C',true);
		$this->Cell(15,5,'','L,R,B',0,'C',true);
		$this->Cell(25,5,'Awal','L,R,B',0,'C',true);
		$this->Cell(25,5,'Masuk',1,0,'C',true); 
		$this->Cell(25,5,'Keluar',1,0,'C',true); 
		$this->Cell(25,5,'Sisa',1,0,'C',true); 
		$this->Cell(30,5,'Satuan','L,R,B',0,'C',true);
		// $this->Cell(25,5,'Saldo Awal',1,0,'C',true);
		// $this->Cell(25,5,'Pembelian',1,0,'C',true);
		// $this->Cell(25,5,'Pemakaian',1,0,'C',true);
		$this->Cell(40,5,'','L,R,B',0,'C',true); 
		$this->Cell(10,5,'','L,R,B',1,'C',true);

		$this->SetFont('Arial','B',7);
		
		$this->Cell(10,4,'1',1,0,'C',true);
		$this->Cell(40,4,'2',1,0,'C',true);
		$this->Cell(65,4,'3',1,0,'C',true);
		$this->Cell(15,4,'4',1,0,'C',true);
		$this->Cell(25,4,'5',1,0,'C',true);
		$this->Cell(25,4,'6',1,0,'C',true); 
		$this->Cell(25,4,'7',1,0,'C',true); 
		$this->Cell(25,4,'8 = (5+6-7)',1,0,'C',true); 
		$this->Cell(30,4,'9',1,0,'C',true); 
		// $this->Cell(25,4,'10 = ( 5 x 9 )',1,0,'C',true); 
		// $this->Cell(25,4,'11 = ( 6 x 9 )',1,0,'C',true); 
		// $this->Cell(25,4,'12 = ( 7 x 9 )',1,0,'C',true); 
		$this->Cell(40,4,'10 = ( 8 x 9 )',1,0,'C',true); 
		$this->Cell(10,4,'11',1,1,'C',true); 
									
	}
 
	//Page Content
	function Content()
	{
		
		include 'koneksi.php';
		 $map3="SELECT rek4 FROM tb_stok where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' GROUP BY rek4 ORDER BY rek4 ASC";
			$map2=mysqli_query($konek,$map3) or die (mysql_error());
			$aw2=0;
			$totm2=0;
			$totk2=0;
			$tots2=0;
			
			while($map=mysqli_fetch_object($map2))
			{
				$this->SetFont('Arial','B',8);
			  $this->SetFillColor(100, 150, 250);
			 $this->Cell(10,6,'#',1,0,'C',true); 
			 $this->Cell(40,6,$map->rek4,1,0,'L',true);
			
			$mapp3="SELECT nm_asap FROM ref_mapping where rek_asap='$map->rek4'";
			$mapp2=mysqli_query($konek,$mapp3) or die (mysql_error());
			$mapp=mysqli_fetch_object($mapp2);
			 $this->Cell(260,6,$mapp->nm_asap,1,1,'L',true);
			 
			$myquery="select *,sum(jumlah) as jumlah from tb_stok where rek4='$map->rek4' and kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and tgl between '2021-01-01' and '$_POST[tgl]' group by kd_brg  ";
			$no=1;
			$totm1=0;
			$totk1=0;
			$tots1=0;
			$aw1=0;
			
			$daftar=mysqli_query($konek,$myquery) or die (mysql_error());
			while($dataku=mysqli_fetch_object($daftar))
			{
				$this->SetFont('Arial','',8);
			 $this->Cell(10,6,$no,1,0,'C'); 
	  
	  $this->Cell(40,6,$dataku->kd_brg,1,0);
		$this->Cell(65,6,substr($dataku->uraian,0,38),1,0);
       	$this->Cell(15,6,$dataku->satuan,1,0,'C'); 
		
			 $awal2="select sum(jumlah) as jumlah from tb_saldo_rinci where kd_brg='$dataku->kd_brg' and kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' group by kd_brg ";
			$awal1=mysqli_query($konek,$awal2) or die (mysql_error());
			$awal=mysqli_fetch_array($awal1);
		   
		   if($awal['jumlah']>0)
		   
			{
			   $this->Cell(25,6,$awal['jumlah'],1,0,'C'); 
			}
			   else
			{
			   $this->Cell(25,6,$sawal=0,1,0,'C'); 
			} 

			
			 $a="select * from tb_stok where kd_brg='$dataku->kd_brg' and kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and tgl between '2021-01-01' and '$_POST[tgl]' order by tgl desc limit 1 ";
			
			$aa=mysqli_query($konek,$a) or die (mysql_error());
		   $harga=mysqli_fetch_object($aa);
		  
		 
			 $mmm="select sum(jumlah) as jlh from tb_stok where kd_brg='$dataku->kd_brg' and opsi='masuk' and kd_opd='$_SESSION[kd_opd]'  and kd_sub='$_SESSION[kd_sub]' and tgl between '2021-01-01' and '$_POST[tgl]' order by harga_satuan desc limit 1 ";
			 $kkk="select sum(positif) as jlh from tb_stok where kd_brg='$dataku->kd_brg' and opsi='keluar' and kd_opd='$_SESSION[kd_opd]'  and kd_sub='$_SESSION[kd_sub]' and tgl between '2021-01-01' and '$_POST[tgl]' order by harga_satuan desc limit 1 ";
			
			$mm=mysqli_query($konek,$mmm) or die (mysql_error());
		   $msk=mysqli_fetch_array($mm);
		   
			$kk=mysqli_query($konek,$kkk) or die (mysql_error());
		   $k=mysqli_fetch_array($kk);
		   
		   $this->Cell(25,6,number_format($masuk=$msk['jlh'],2,',','.').'',1,0,'C'); 
		   
		    
		   if($keluar=$k['jlh']>0) 
		   {
			   $this->Cell(25,6,number_format($keluar=$k['jlh'],2,',','.').'',1,0,'C'); 
			   }
			   else 
			   {
				   $this->Cell(25,6,number_format($keluar=0,2,',','.').'',1,0,'C'); 
				   }
		 
		 
		 
		   $this->Cell(25,6,number_format($sisa=$awal['jumlah']+$masuk-$keluar,2,',','.').'',1,0,'C'); 
			
			$this->Cell(30,6,number_format($hrg=$harga->harga_satuan,2,',','.').'',1,0,'R'); 
			$aw=$awal['jumlah']*$harga->harga_satuan;
			
		 
		
			$totm=$hrg*$masuk;
			$totk=$hrg*$keluar; 
			$this->Cell(40,6,number_format($tots=$hrg*$sisa,2,',','.').'',1,0,'R'); 
			$this->Cell(10,6,'',1,1,'C');

			$aw1=$aw1+$aw;
			$totm1=$totm1+$totm;
			$totk1=$totk1+$totk;
			$tots1=$tots1+$tots;
			$no++;
			 
			}
			
			 
			 $this->SetFont('Arial','B',8);
				 $this->SetFillColor(60, 200, 105);
			$this->Cell(260,6,'Sub Total Persediaan '.$mapp->nm_asap,1,0,'C',true);		
			// $this->Cell(25,6,number_format($aw1,2,',','.').'',1,0,'R',true);	
			// $this->Cell(25,6,number_format($totm1,2,',','.').'',1,0,'R',true);	
			// $this->Cell(25,6,number_format($totk1,2,',','.').'',1,0,'R',true);	
			$this->Cell(40,6,number_format($tots1,2,',','.').'',1,0,'R',true);	
			$this->Cell(10,6,'',1,1,'C',true); 
			
			$aw2=$aw2+$aw1;
			$totm2=$totm2+$totm1;
			$totk2=$totk2+$totk1;
			$tots2=$tots2+$tots1;
			 }
			 
 $this->SetFont('Arial','B',8);
			  $this->SetFillColor(100, 150, 250);
			$this->Cell(260,6,'TOTAL PERSEDIAAN',1,0,'C',true);		
			// $this->Cell(25,6,number_format($aw2,2,',','.').'',1,0,'R',true);	
			// $this->Cell(25,6,number_format($totm2,2,',','.').'',1,0,'R',true);	
			// $this->Cell(25,6,number_format($totk2,2,',','.').'',1,0,'R',true);	
			$this->Cell(40,6,number_format($tots2,2,',','.').'',1,0,'R',true);	
			$this->Cell(10,6,'',1,1,'C',true); 
		 
		
	 
		 
	  
		
		$this->Ln(10);	
		
		
		$t="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and jab='upb'";
		$tt=mysqli_query($konek,$t) or die (mysql_error());
		$ttd=mysqli_fetch_object($tt);
		
		$t2="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and jab='pengelola'";
		$tt2=mysqli_query($konek,$t2) or die (mysql_error());
		$ttd2=mysqli_fetch_object($tt2);
				
				$this->SetFont('Arial','B',8);					
		
			  $this->SetWidths(array(40,80,80,70,20)); 
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
		$this->Line(10,$this->GetY(),320,$this->GetY());
		//Arial italic 9
		$this->SetFont('Arial','I',9);
		//nomor halaman
		$this->Cell(150,6,'ASAP | Laporan Rincian Persediaan',0,0,'L');
		$this->Cell(160,6,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
 
	}

	}
//contoh pemanggilan class
$pdf = new PDF('L','mm',array(215,330));
$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(TRUE,20);
$pdf->AddPage();



$pdf->Content();
$pdf->Output();
?>

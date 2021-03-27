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
		$this->SetFont('Arial','B',16);
		$this->Ln(5);
		
		$this->Cell(200,7,'PEMERINTAH KABUPATEN MUSI BANYUASIN',0,1,'C');
		$this->Cell(200,7,'BERITA ACARA PEMERIKSAAN BARANG PERSEDIAAN',0,1,'C');
		$this->SetFont('Arial','B',12);
		$tgl=$_POST['tgl'];
	 
		$this->Ln(10);

		 
	}
 
	//Page Content
	function Content()
	{
				include 'koneksi.php';
		$this->SetFont('Times','',13);
		 
		
									$o="select * from tb_opd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]'";
                                    
                                    $oo=mysqli_query($konek,$o) or die (mysql_error());
									$opd=mysqli_fetch_object($oo); 

								   
								 
									$t="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and jab='upb'";
                                    $tt=mysqli_query($konek,$t) or die (mysql_error());
                                    $ttd=mysqli_fetch_object($tt);
									
									$t2="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and jab='pengelola'";
                                    $tt2=mysqli_query($konek,$t2) or die (mysql_error());
                                    $ttd2=mysqli_fetch_object($tt2);
									
									 
									 $hari   = date('l', microtime(date_format(new DateTime($_POST['ttd']), 'Y-m-d')));
								 
									 
									 $hari_indonesia = array('Monday'  => 'Senin',
										'Tuesday'  => 'Selasa',
										'Wednesday' => 'Rabu',
										'Thursday' => 'Kamis',
										'Friday' => 'Jumat',
										'Saturday' => 'Sabtu',
										'Sunday' => 'Minggu');
									 
                            
								$this->Cell(200,5,'Pada hari ini tanggal '.tgl_indo($_POST['ttd']).' yang bertanda tangan di bawah ini :',0,1);
								
								$this->Cell(50,8,'Nama Lengkap',0,0);
								$this->Cell(10,8,' : ',0,0);
								$this->Cell(80,8,$ttd->nama,0,1);
								
								$this->Cell(50,8,'Jabatan',0,0);
								$this->Cell(10,8,' : ',0,0);
								$this->Cell(80,8,'Kepala '.$opd->nama,0,1);
								
								$this->Cell(50,8,'NIP',0,0);
								$this->Cell(10,8,' : ',0,0);
								$this->Cell(80,8,$ttd->nip,0,1);
								   

							
								 
								$this->Ln(4);		
								$teks1='Sesuai dengan Peraturan Menteri Dalam Negeri Nomor 19 Tahun 2016 tentang Pedoman Pengelolaan BMD, kami melakukan pemeriksaan setempat atas sisa barang persediaan (stock opname) yang dikelola oleh:';
								$this->MultiCell(190,7,$teks1,0,'J');

								
								$this->Cell(50,8,'Nama Lengkap',0,0);
								$this->Cell(10,8,' : ',0,0);
								$this->Cell(80,8,$ttd2->nama,0,1);
								
								$this->Cell(50,8,'Jabatan',0,0);
								$this->Cell(10,8,' : ',0,0);
								$this->Cell(80,8,'Pengelola Barang '.$opd->nama,0,1);
								
								$this->Cell(50,8,'NIP',0,0);
								$this->Cell(10,8,' : ',0,0);
								$this->Cell(80,8,$ttd2->nip,0,1);

								$this->Ln(4);	
								$teks2='Berdasarkan Keputusan Bupati Musi Banyuasin Nomor ................................ Tanggal ................... ditugaskan mengurus barang berdasarkan hasil pemeriksaan Fisik barang (stock opname) kami mendapatkan hasil sebagai berikut:';
								$this->MultiCell(190,7,$teks2,0,'J');
								
								$this->Ln(2);
								$this->SetFont('Times','B',9);
								$this->SetFillColor(180, 180, 190);
								//width height teks border ln posisi
								$this->Cell(25,8,'Permen 108/2016',1,0,'C',true);
								$this->Cell(70,8,'Uraian',1,0,'C',true);
								$this->Cell(25,8,'Rek Belanja',1,0,'C',true);
								$this->Cell(45,8,'Uraian',1,0,'C',true);
								$this->Cell(30,8,'Jumlah',1,1,'C',true);
								

								
								$this->SetFont('Times','',9);
						 
								  
                                    $no=1;
                                    $nilai1=0;
									$qq1="truncate table sementara";
									mysqli_query($konek,$qq1) or die (mysql_error()); 	
									
									$x="select * from tb_stok group by rek4 having sum(jumlah)>0 ";
                                    
                                    $xx=mysqli_query($konek,$x) or die (mysql_error());
                                    while($xxx=mysqli_fetch_object($xx))
                                    {
										
									$myquery="select *,sum(jumlah) as jumlah from tb_stok where rek4='$xxx->rek4' and kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and tgl between '2021-01-01' and '$_POST[tgl]' group by kd_brg having sum(jumlah)>0 ";
                                    
                                    $daftar=mysqli_query($konek,$myquery) or die (mysql_error());
                                    while($dataku=mysqli_fetch_object($daftar))
                                    {	 
										$a="select harga_satuan from tb_stok where kd_brg='$dataku->kd_brg' and kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' order by tgl desc limit 1 ";
										$aa=mysqli_query($konek,$a) or die (mysql_error());
										$harga=mysqli_fetch_object($aa);

                                   $rek4=$dataku->rek4;
                                   $jlh=$dataku->jumlah;
                                   $hrg=$harga->harga_satuan;
                                   $tot=$dataku->jumlah*$harga->harga_satuan;

								 	$qq="insert into sementara values('$rek4','$jlh','$hrg','$tot','$_SESSION[kd_opd]','$_SESSION[kd_sub]')";
                                    
                                    mysqli_query($konek,$qq) or die (mysql_error()); 	
									
                                    $no++;
                                    }
									}
                                   
									$x="select *,sum(tot) as total from sementara group by rek4 ";
                                    
                                    $xx=mysqli_query($konek,$x) or die (mysql_error());
                                    while($xxx=mysqli_fetch_object($xx))
                                    {
									 
									 
								 
										$a="select * from ref_mapping where rek_asap='$xxx->rek4'";
										$aa=mysqli_query($konek,$a) or die (mysql_error());
										$map=mysqli_fetch_object($aa); 
									 
                                    
                                   
									$this->Cell(25,8,$rek4=$xxx->rek4,1,0,'C');
									$this->Cell(70,8,$rek4=$map->nm_asap,1,0,'C');
                                    $this->Cell(25,8,$rek4=$map->rek_simda,1,0,'C');
                                    $this->Cell(45,8,$rek4=$map->nm_simda,1,0,'C');
                                   
                                    $this->Cell(30,8,number_format($tot=$xxx->total,2,',','.'),1,1,'R');
									
									  
									$nilai1=$nilai1+$tot;
									}
									 
									 	 
			 $this->SetFont('Arial','B',8);
			$this->SetFillColor(180, 180, 190);
			$this->Cell(165,8,'TOTAL PERSEDIAAN',1,0,'C',true);		
			$this->Cell(30,8,number_format($nilai1,2,',','.').'',1,1,'R',true);	
			 
			 

$this->Ln(10);	

		 $this->SetFont('Times','',13);
		  
		 $this->SetWidths(array(150,10,45)); 
		  $t='Saldo menurut Buku Inventaris Barang Persediaan, register dan lain sebagainya berjumlah ';
		  $rp=number_format($nilai1,2,',','.');
		  $this->Row(array($t,':',$rp));
		  
		  $s='Perbedaan positif / Negatif antara saldo persediaan dan saldo Buku Inventaris Barang Persediaan';
		  $this->Row(array($s,':','-')); 
		 
	  	  $r='Penjelasan perbedaan positif / negatif';
		  $this->Row(array($r,':','-'));  
		  	
						 
		$this->Ln(10);	
		
		
		$t="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and jab='upb'";
		$tt=mysqli_query($konek,$t) or die (mysql_error());
		$ttd=mysqli_fetch_object($tt);
		
		$t2="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and jab='pengelola'";
		$tt2=mysqli_query($konek,$t2) or die (mysql_error());
		$ttd2=mysqli_fetch_object($tt2);
									
		$t3="select * from tb_ttd where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]' and jab='pppb'";
		$tt3=mysqli_query($konek,$t3) or die (mysql_error());
		$ttd3=mysqli_fetch_object($tt3);
			 
		$this->SetFont('Times','',13);				 
		$this->Cell(95,6,'Disetujui Tanggal : '.tgl_indo($_POST['ttd']),0,1,'C');

		$this->Cell(95,6,$ttd3->jabatan,0,0,'C'); 
		$this->Cell(95,6,$ttd2->jabatan,0,1,'C');

		$this->Ln(15);	

		$this->Cell(95,6,$ttd3->nama,0,0,'C'); 
		$this->Cell(95,6,$ttd2->nama,0,1,'C');

		$this->Cell(95,6,'NIP. '.$ttd3->nip,0,0,'C'); 
		$this->Cell(95,6,'NIP. '.$ttd2->nip,0,1,'C');
		
		 
		
		$this->Cell(200,6,'Mengetahui',0,1,'C');
		$this->Cell(200,6,$ttd->jabatan,0,1,'C');
  		$this->Ln(15);	
		
		$this->Cell(200,6,$ttd->nama,0,1,'C');
		$this->Cell(200,6,'NIP. '.$ttd->nip,0,1,'C');
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
		$this->Cell(90,6,'printed by ASAP Web Based Application',0,0,'L');
		$this->Cell(100,6,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
 
	}

	}
//contoh pemanggilan class
$pdf = new PDF('P','mm','Legal');
$pdf->AliasNbPages();

$pdf->AddPage();



$pdf->Content();
$pdf->Output();
?>

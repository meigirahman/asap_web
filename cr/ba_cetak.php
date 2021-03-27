<?php
 
 //Memanggil file fungsi konversi tanggal
 include "fungsi_indotgl.php";
 //Memanggil file koneksi database
 include "koneksi.php";



//- Variables - for your RPT and PDF 
echo "Print Report Test"; 
$id=$_GET['id'];
$tgl_lahir=$_GET['tgl'];
   $tanggal=terbilang(tgl_aja($tgl_lahir));
   $bulan=bln_aja($tgl_lahir);
   $tahun=terbilang(thn_aja($tgl_lahir));
   $tgl=tgl_indo($tgl_lahir);

$my_report = "C:\\xampp\\htdocs\\akt\\CR\\ba.rpt"; //rpt source file 
$my_pdf = "C:\\xampp\\htdocs\\akt\\cr\\ba.pdf"; // RPT export to pdf file 
//-Create new COM object-depends on your Crystal Report version 
$ObjectFactory= new COM("CrystalRuntime.Application.8.5") or die ("Error on load"); // call COM port
//$crapp = $ObjectFactory->CreateObject("CrystalDesignRunTime.Application"); // create an instance for Crystal 
$creport = $ObjectFactory->OpenReport($my_report, 1); // call rpt report 

// to refresh data before 

//- Set database logon info - must have 

//$creport->Database->Tables(1)->SetLogOnInfo("localhost", "db_serkat", "root", ""); 

//- field prompt or else report will hang - to get through 
$creport->EnableParameterPrompting = 0;  

//- DiscardSavedData - to refresh then read records 
$creport->DiscardSavedData; 
$creport->ReadRecords(); 

$creport->FormulaSyntax = 0;

$creport->ParameterFields->GetItemByName('id')->AddCurrentValue($id);
$creport->ParameterFields->GetItemByName('tgl')->AddCurrentValue($tanggal);
$creport->ParameterFields->GetItemByName('bln')->AddCurrentValue($bulan);
$creport->ParameterFields->GetItemByName('thn')->AddCurrentValue($tahun);


//export to PDF process 
$creport->ExportOptions->DiskFileName=$my_pdf; //export to pdf 
$creport->ExportOptions->PDFExportAllPages=true; 
$creport->ExportOptions->DestinationType=1; // export to file 
$creport->ExportOptions->FormatType=31; // PDF type 
$creport->Export(false); 

//------ Release the variables ------ 
$creport = null; 
$crapp = null; 
$ObjectFactory = null; 

//------And Now -> Embed the report in the webpage ------ 
// echo "<embed src='C:\xampp\htdocs\fix\page\cetak\ctk_rtrw.pdf'>";

?>


<embed src="..\CR\ba.pdf" type="application/pdf" width="100%" height="700px"/>
                    </div>




<?
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();

if(!isset ($_SESSION['my_session'])){
    header('location:index.php');
}
include "koneksi.php";
include "tanggal.php";
?>

<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script src="js/exporting.js" type="text/javascript"></script>
<script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'Grafik Batang'
         },
         xAxis: {
            categories: ['Nama Pegawai']
         },
         yAxis: {
            title: {
               text: 'Total Nilai'
            }
         },
              series:             
            [
<?php      
// file koneksi php
// $server = "e-tourismofmusibanyuasin.com";
// $username = "k7779004_root";
// $password = "m31g1r4hm4n";
// $database = "k7779004_simantap";


$sql   = "SELECT opsi from tb_stok group by opsi"; // file untuk mengakses ke tabel database
$query = mysql_query( $sql ) or die(mysql_error());         
while($ambil = mysql_fetch_array($query)){
	$opsi=$ambil['opsi'];
	
	
	
	
	$sql_jumlah   = "SELECT positif as jlh frOM tb_stok where opsi='$opsi'";        
	$query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
	while( $data = mysql_fetch_array( $query_jumlah ) ){
	   $jumlahx = $data['jlh'];           
	  }             
	  
	  ?>
	  {
		  name: '<?php echo $opsi; ?>',
		  data: [<?php echo $jumlahx; ?>]
	  },
	  <?php } ?>
]
});
});	
</script>

    <!-- Main content -->
    <section class="content">
     


      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-9">
          <!-- MAP & BOX PANE -->
          <div class="panel-body">
                            <div class="table-responsive">
                             
													   
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
									<tr  style="background: black;color: #fff;"> 
									<th align="center">No</th>
									<th align="center">Perangkat Daerah</th>
									<th align="center">Total Pembelian ASAP</th> 
									<th align="center">Total Pembelian SIMDA</th> 
									<th align="center">Keterangan</th>
									 
									
									 
									</tr>
									</thead>
                                    <?
                                    $myquery="select * from data_opd ";
                                    $no=1;
                                    
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr>
                                   <td align="center"><?php echo $id=$dataku->id?></td>
                                    <td ><?php echo $dataku->opd?></td>
									  <?
								   $sql=mysql_query("select sum(jumlah*harga_satuan) as total from tb_beli_rinci where kd_opd='$id' ") or die(mysql_error());
		 $jlh=mysql_fetch_object($sql);
		
			?>
                                    <td ><?php echo number_format($asap=$jlh->total,2,',','.')?></td>
                                    <td ><?php echo number_format($simda=$dataku->simda,2,',','.')?></td>
                                 
                                
 
		  
 
									<td align="center">
                                    <?if($asap>$simda)
					{echo "<img src='u.png' width='25' />";	}
					else
					{echo "<img src='d.png' width='25' />";	}	
					?>

									   
                                    </td>
                                    </tr>
                                    
                                    <?php
                                    $no++;
                                    }
                                    ?>
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                            </form>
                                    
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
		  
		  

        </div>
        <!-- /.col -->

  <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
			 
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
		 

<?php


$tampilkan = "SELECT COUNT(kd_beli) as jlh from tb_beli where kd_opd='$_SESSION[kd_opd]'";
$query_tampilkan = mysql_query($tampilkan);
if ($query_tampilkan === FALSE) {
    die(mysql_error());
}
while($hasil = mysql_fetch_array($query_tampilkan))
    {
$jlh_srt = $hasil['jlh'];   
    }

?>

	  
            <div class="inner">
              <h3>Grup WhatsApp</h3>

              
            </div>
            <div class="icon">
             <img width="50" src="img/wa.png" />
            </div>
            <a href="https://chat.whatsapp.com/JryThigldUx2zuK2wFxu3I" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
 
        </div>
		
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
		 

<?php


$bb = "SELECT COUNT(kd_beli) as jlh from tb_beli where kd_opd='$_SESSION[kd_opd]'";
$bbb = mysql_query($bb);
if ($query_tampilkan === FALSE) {
    die(mysql_error());
}
while($bl = mysql_fetch_array($bbb))
    {
$bbbb = $bl['jlh'];   
    }

?>

	  
            <div class="inner">
              <h3>Data Pembelian</h3>

              <p><?php echo $bbbb; ?> data pembelian dalam database </p>
            </div>
            <div class="icon">
              <i class="ion ion-compose"></i>
            </div>
            <a href="?p=sph_view" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
 
        </div>
		
		
		
		
		
		        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
		  <?php


$tampilkan = "SELECT COUNT(kd_pakai) as jlh from tb_pakai where kd_opd='$_SESSION[kd_opd]'";
$query_tampilkan = mysql_query($tampilkan);
if ($query_tampilkan === FALSE) {
    die(mysql_error());
}
while($hasil = mysql_fetch_array($query_tampilkan))
    {
$jlh_srt = $hasil['jlh'];   
    }

?>
  

	  
            <div class="inner">
              <h3>Data Pemakaian</h3>

              <p><?php echo $jlh_srt; ?> data pemakaian dalam database </p>
            </div>
            <div class="icon">
              <i class="ion ion-compose"></i>
            </div>
            <a href="?p=aph_view" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
		        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
		  <?php


$tampilkan = "SELECT COUNT(kd_beli) as jlh from tb_beli";
$query_tampilkan = mysql_query($tampilkan);
if ($query_tampilkan === FALSE) {
    die(mysql_error());
}
while($hasil = mysql_fetch_array($query_tampilkan))
    {
$jlh_srt = $hasil['jlh'];   
    }

?>

 
            <div class="inner">
               <h3>Pengumuman</h3>

              <p> klik untuk download</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="?p=ajb_view" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

		 
                <!-- /.col -->
            
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
        <!-- /.col -->
      </div>
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
	<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
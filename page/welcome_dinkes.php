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
									<th><center>No</th>
									<th style="text-align :center; width:500px;">Perangkat Daerah</th>
									
									<th style="text-align :center; width:150px;"align="center">Nilai Belanja<br>ASAP</th> 
									<th style="text-align :center; width:150px;">Nilai Belanja <br>SIMDA</th> 
									 <th style="text-align :center; width:150px;"align="center">Sisa Persediaan</th>
									<th style="text-align :center; width:150px;"align="center">Status</th>
									
									 
									</tr>
									</thead>
                                    <?
                                    $myquery="select * from tb_opd where kd_opd='2' and kd_sub>0";
                                    $no=1;
                                    mysql_query("truncate table rekap")or die (mysql_error());
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
										$id=$dataku->kd_opd;
										$sub=$dataku->kd_sub;
										$nama=$dataku->nama;
										
                                    ?>
                                    <tr>
                                   <td align="center"><?php echo $no; ?></td>
                                    <td ><?php echo $dataku->nama?></td>
									
									
								 
									
									
									  <?
									  if($dataku->kelas=='induk')
										{ 
											$sql=mysql_query("select sum(jumlah*harga_satuan) as total from tb_beli_rinci where kd_opd='$id' ") or die(mysql_error());
										}
									  else
										{ 
											$sql=mysql_query("select sum(jumlah*harga_satuan) as total from tb_beli_rinci where kd_opd='$id' and kd_sub='$sub' ") or die(mysql_error());
										}  
									$jlh=mysql_fetch_object($sql);
									
										?>
                                    <td style="text-align: right;"><?php echo number_format($asap=$jlh->total,2,',','.')?></td>
                                    <td style="text-align: right;"><?php echo number_format($simda=$dataku->simda,2,',','.')?></td>
              
                                    
                                    <?php
                                   
									
									
									 $nilai1=0;
									$qq1="delete from sementara where kd_opd='$id' and kd_sub='$sub'";
									mysql_query($qq1) or die (mysql_error()); 	
									
									$x="select * from tb_stok group by kd_opd,kd_sub,rek4 ";
                                    
                                    $xx=mysql_query($x) or die (mysql_error());
                                  $xxx=mysql_fetch_object($xx);
                                    
										
									$myquery1="select *,sum(jumlah) as jumlah from tb_stok where rek4='$xxx->rek4' and kd_opd='$id' and kd_sub='$sub' group by kd_opd,kd_sub,kd_brg ";
                                    
                                    $daftar1=mysql_query($myquery1) or die (mysql_error());
                                    while($data=mysql_fetch_object($daftar1))
                                    {	 
										$a="select harga_satuan from tb_stok where kd_brg='$data->kd_brg' and kd_opd='$id' and kd_sub='$sub' order by tgl desc limit 1 ";
										$aa=mysql_query($a) or die (mysql_error());
										$harga=mysql_fetch_object($aa);
 
                                   $rek4=$data->rek4;
                                   $jlh=$data->jumlah;
                                   $hrg=$harga->harga_satuan;
                                   $tot=$data->jumlah*$harga->harga_satuan;

								 	$qq="insert into sementara values('$rek4','$jlh','$hrg','$tot','$id','$sub')";
                                    
                                    mysql_query($qq) or die (mysql_error()); 	
									
                                    
                                    }
									
                                   
									$x="select *,sum(tot) as total from sementara where kd_opd='$id' and kd_sub='$sub' group by kd_opd,kd_sub,rek4 ";
                                    
                                    $xx=mysql_query($x) or die (mysql_error());
                                    while($xxx=mysql_fetch_object($xx))
                                    {
									?>
									 
									<?
										$a="select * from ref_mapping where rek_asap='$xxx->rek4'";
										$aa=mysql_query($a) or die (mysql_error());
										$map=mysql_fetch_object($aa); 
									
                             
                                   
									$tot=$xxx->total;
                              
									
									$nilai1=$nilai1+$tot;
									 
									}
									?>
									 
                                    
									 
									<td style="text-align: right; width: 110px;" ><b><?php echo number_format($nilai1,2,',','.')?></td> 
									<td align="center">
                                    <?if($asap>$simda)
									{echo "<img src='u.png' width='25' />";	}
									else
									{echo "<img src='d.png' width='25' />";	}	
									?>

									   
                                    </td>
                                    
									<?
									$no++;
									$belanja=$belanja+$asap;
									$belanjasimda=$belanjasimda+$simda;
									$nilaitot=$nilaitot+$nilai1;
									
									
									mysql_query("insert into rekap (nama,kd_opd,kd_sub,asap,simda,sisa) values ('$nama','$id','$sub','$asap','$simda','$nilai1')")or die (mysql_error());
                                    }
                                    ?>
                                   	<tr  style="background: black;color: #fff;"> 
									<td colspan=2><b><center>Jumlah</td>
								   <td style="text-align: right;"><?php echo number_format($belanja,2,',','.')?></td>
								   <td style="text-align: right;"><?php echo number_format($belanjasimda,2,',','.')?></td>
								   <td style="text-align: right;"><?php echo number_format($nilaitot,2,',','.')?></td>
								   <td></td></tr>
								   
								   
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
          <div class="small-box bg-orange">
		 

  <h3 style="font-size: 20px;">&nbsp;Tercepat Bulan Ini</h3>

	  
           <video width="385" height="220" controls>
  <source src="VIDEO/ASAP.mp4" type="video/mp4">  
</video>
          </div>
 
        </div>	
		
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
		 

 

	  
            <div class="inner">
              <h3 style="font-size: 20px;">email : asap.muba@gmail.com</h3>

              
            </div>
            <div class="icon">
             <img width="40" src="img/mail.png" />
            </div>
            <a href="mailto:asap.muba@gmail.com" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
 
        </div>
		
		 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
		 

 

	  
            <div class="inner">
              <h3 style="font-size: 20px;">Grup WhatsApp</h3>

              
            </div>
            <div class="icon">
             <img width="40" src="img/wa.png" />
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
              <h3 style="font-size: 20px;">Pengumuman</h3>

              
            </div>
            <div class="icon">
              <img width="40" src="img/info.png" />
            </div>
            <a href="?p=sph_view" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
 
        </div>
		
		 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
		 

 

	  
            <div class="inner">
              <h3>Hall of Fame</h3>

              
            </div>
            <div class="icon">
             <img width="40" src="img/win.png" />
            </div>
            <a href="https://chat.whatsapp.com/JryThigldUx2zuK2wFxu3I" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
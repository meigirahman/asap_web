<?
if(!isset ($_SESSION['my_session'])){
    header('location:index.php');
} 
 
$exp="select min(expired) as expired from tb_stok where kd_opd='$_SESSION[kd_opd]' and kd_sub='$_SESSION[kd_sub]'";
                                    
$exp1=mysqli_query($konek,$exp) or die (mysqli_error());
$expp=mysqli_fetch_object($exp1);
if($expp->expired!=null)
{

if($expp->expired<=date("Y-m-d") )
{
	  echo "
        <script type='text/javascript'>
        alert('terdapat barang persediaan yang sudah kadaluarsa');
        
        </script>";
}
}                                
							   
?>

<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script src="js/exporting.js" type="text/javascript"></script>


    <!-- Main content -->
    <section class="content">
     


      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class='col-lg-9'>	
<div class="panel panel-danger">		
<div class="panel-heading">

                            <center>DATA BELANJA ASAP DAN SIMDA</center>
                        </div>									
          <!-- MAP & BOX PANE -->
          <div class="panel-body">
                            <div class="table-responsive">
                             
													   
					  
								<form name="FLaporan" method="post" action="hapus_banyak_skck.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
									<tr><td colspan=5 style="text-align: right;">*Jika nilai belanja pada ASAP lebih kecil dari nilai belanja SIMDA maka status kurang input</td></tr>
									<tr  style="background: #E57739;color: #fff;"> 
									<th style="text-align :center; width:50px;" align="center"><center>No</th>
									<th style="text-align :center; width:700px;">Perangkat Daerah</th>
									
									<? // <th style="text-align :center; width:150px;"align="center">Saldo<br>Awal</th> ?>
									<th style="text-align :center; width:150px;" align="center">Nilai Belanja<br>ASAP</th> 
									<th style="text-align :center; width:150px;">Nilai Belanja <br>LRA SIMDA</th> 
									<? // <th style="text-align :center; width:150px;"align="center">Sisa Persediaan</th> ?>
									<th style="text-align :center; width:100px;"align="center">Status</th>
									
									 
									</tr>
									</thead>
                                    <?
                                    $myquery="select * from tb_opd where kd_sub='0' ";
                                    $no=1;
									$belanja=0;
									$belanjasimda=0;
									$nilaitot=0;
                                    mysqli_query($konek,"truncate table rekap")or die (mysqli_error());
                                    $daftar=mysqli_query($konek,$myquery) or die (mysqli_error());
                                    while($dataku=mysqli_fetch_object($daftar))
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
											$sql=mysqli_query($konek,"select sum(jumlah*harga_satuan) as total from tb_beli_rinci where kd_opd='$id' ") or die(mysqli_error());
										}
									  else
										{ 
											$sql=mysqli_query($konek,"select sum(jumlah*harga_satuan) as total from tb_beli_rinci where kd_opd='$id' and kd_sub='$sub' ") or die(mysqli_error());
										}  
									$jlh=mysqli_fetch_object($sql);
									
									
									$aw=mysqli_query($konek,"select sum(jumlah*harga_satuan) as total from tb_saldo_rinci where kd_opd='$id' and kd_sub='$sub' ") or die(mysqli_error());
								 
									$awal=mysqli_fetch_object($aw);
									
										?>
                                    <?php $awal=$awal->total ?>
                                    <td style="text-align: right;"><?php echo number_format($asap=$jlh->total,2,',','.')?></td>
                                    <td style="text-align: right;"><?php echo number_format($simda=$dataku->simda,2,',','.')?></td>
              
                                    
                                    <?php
                                   
									
									
									 $nilai1=0;
									$qq1="delete from sementara where kd_opd='$id' and kd_sub='$sub'";
									mysqli_query($konek,$qq1) or die (mysqli_error()); 	
									
									$x="select * from tb_stok group by rek4 ";
                                    
                                    $xx=mysqli_query($konek,$x) or die (mysqli_error());
                                 while($xxx=mysqli_fetch_object($xx))
								 {
										
									$myquery1="select *,sum(jumlah) as jumlah from tb_stok where rek4='$xxx->rek4' and kd_opd='$id' and kd_sub='$sub' group by kd_brg";
                                    
                                    $daftar1=mysqli_query($konek,$myquery1) or die (mysqli_error());
                                    while($data=mysqli_fetch_object($daftar1))
                                    {	 
										$a="select harga_satuan from tb_stok where kd_brg='$data->kd_brg' and kd_opd='$id' and kd_sub='$sub' order by tgl desc limit 1 ";
										$aa=mysqli_query($konek,$a) or die (mysqli_error());
										$harga=mysqli_fetch_object($aa);
 
                                   // echo '<br><br>'.$rek4=$data->kd_opd;
                                   // echo '<br>'.$rek4=$data->rek4;
                                   // echo '<br>'.$jlh=$data->jumlah;
                                   // echo '<br>'.$hrg=$harga->harga_satuan;
                                   // echo '<br>'.$tot=$data->jumlah*$harga->harga_satuan;
								   
								   $rek4=$data->kd_opd;
                                   $rek4=$data->rek4;
                                   $jlh=$data->jumlah;
                                   $hrg=$harga->harga_satuan;
                                   $tot=$data->jumlah*$harga->harga_satuan;

								 	$qq="insert into sementara values('$rek4','$jlh','$hrg','$tot','$id','$sub')";
                                    
                                    mysqli_query($konek,$qq) or die (mysqli_error()); 	
									
                                    
                                    }
									
                                   }
									$x="select *,sum(tot) as total from sementara where kd_opd='$id' and kd_sub='$sub' group by kd_opd,kd_sub,rek4 ";
                                    
                                    $xx=mysqli_query($konek,$x) or die (mysqli_error());
                                    while($xxx=mysqli_fetch_object($xx))
                                    {
									?>
									 
									<?
										$a="select * from ref_mapping where rek_asap='$xxx->rek4'";
										$aa=mysqli_query($konek,$a) or die (mysqli_error());
										$map=mysqli_fetch_object($aa); 
									
                             
                                   
									$tot=$xxx->total;
                              
									
									$nilai1=$nilai1+$tot;
									 
									}
									?>
									 
                                    
									 
									<? // <td style="text-align: right; width: 110px;" ><b><?php echo number_format($nilai1,2,',','.')?> 
									<td align="center">
                                    <?if($asap>=$simda)
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
									
									
									mysqli_query($konek,"insert into rekap (nama,kd_opd,kd_sub,asap,simda,sisa,awal) values ('$nama','$id','$sub','$asap','$simda','$nilai1','$awal')")or die (mysqli_error());
                                    }
                                    ?>
                                   	<tr  style="background: black;color: #fff;"> 
									<td colspan=2><b><center>Jumlah</td>
								   <td style="text-align: right;"><?php echo number_format($belanja,2,',','.')?></td>
								   <td style="text-align: right;"><?php echo number_format($belanjasimda,2,',','.')?></td>
								    
								   <td></td></tr>
								   
								   
                                </table>
                            </form>
                                    
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
		  
		  

    </div>                     
</div> 
        <!-- /.col -->

  <!-- /.box-header -->
            <div class='col-lg-3'>	
<div class="panel panel-danger">		
<div class="panel-heading">
                            <center>SIDEBAR MENU</center>
                        </div>									
          <!-- MAP & BOX PANE -->
          <div class="panel-body">
			 
			 
			 
			 
     
          <div  >
		 

  <h3 style="font-size: 20px;">&nbsp;Tercepat Bulan Ini</h3>

	  
           <video width="350" height="220" controls >
  <source src="VIDEO/feb.mp4" type="video/mp4">  
</video>
<style>
    video {
        height: 100%;
        width: 100%;
        object-fit: fill; // use "cover" to avoid distortion
        position: absolute;
    }
</style>
          </div>
 
       
		
        
          <div class="small-box bg-red">
		 

 

	  
            <div class="inner">
              <h3 style="font-size: 20px;">email : asap.muba@gmail.com</h3>

              
            </div>
            <div class="icon">
             <img width="40" src="img/mail.png" />
            </div>
            <a href="mailto:asap.muba@gmail.com" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
 
       
		
		 
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
 
       
		
				
		
		 
          <!-- small box -->
          <div class="small-box bg-blue">
		 

<?php


$bb = "SELECT COUNT(kd_beli) as jlh from tb_beli where kd_opd='$_SESSION[kd_opd]'";
$bbb = mysqli_query($konek,$bb);
if ($query_tampilkan === FALSE) {
    die(mysqli_error());
}
while($bl = mysqli_fetch_array($bbb))
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
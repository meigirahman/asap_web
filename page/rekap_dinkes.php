<?
if(!isset ($_SESSION['my_session'])){
    header('location:index.php');
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
									
								 <th style="text-align :center; width:150px;"align="center">Saldo<br>Awal</th> 
									<th style="text-align :center; width:150px;" align="center">Pembelian<br> </th> 
									<th style="text-align :center; width:150px;">Pemakaian <br> </th> 
									<th style="text-align :center; width:150px;"align="center">Sisa Persediaan</th> 
									<th style="text-align :center; width:100px;"align="center">Status</th>
									
									 
									</tr>
									</thead>
                                    <?
                                    $myquery="select * from tb_opd where kd_opd='2' order by kd_opd,kd_sub";
                                    $no=1;
									$awall=0;
									$belanja=0;
									$pakaii=0;
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
									
									$pk=mysqli_query($konek,"select sum(jumlah*harga_satuan) as total from tb_pakai_rinci where kd_opd='$id' and kd_sub='$sub' ") or die(mysqli_error());
								 
									$pakai=mysqli_fetch_object($pk);
									
									
										?>
                                    <td style="text-align: right;"><?php echo number_format($awal=$awal->total,2,',','.')?></td>
                                    <td style="text-align: right;"><?php echo number_format($asap=$jlh->total,2,',','.')?></td>
                                    <td style="text-align: right;"><?php echo number_format($pakai=$pakai->total,2,',','.')?></td>
                                   <?php  $simda=$dataku->simda;?>
              
                                    
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
									 
                                    
									 
							  <td style="text-align: right; width: 110px;" ><b><?php echo number_format($nilai1,2,',','.')?> 
									<td align="center">
                                    <?if($asap>=$simda)
									{echo "<img src='u.png' width='25' />";	}
									else
									{echo "<img src='d.png' width='25' />";	}	
									?>

									   
                                    </td>
                                    
									<?
									$no++;
									$awall=$awall+$awal;
									$belanja=$belanja+$asap;
									$pakaii=$pakaii+$pakai;
									$belanjasimda=$belanjasimda+$simda;
									$nilaitot=$nilaitot+$nilai1;
									
									
									mysqli_query($konek,"insert into rekap (nama,kd_opd,kd_sub,asap,simda,sisa,awal) values ('$nama','$id','$sub','$asap','$simda','$nilai1','$awal')")or die (mysqli_error());
                                    }
                                    ?>
                                   	<tr  style="background: black;color: #fff;"> 
									<td colspan=2><b><center>Jumlah</td>
								   <td style="text-align: right;"><?php echo number_format($awall,2,',','.')?></td> 
								   <td style="text-align: right;"><?php echo number_format($belanja,2,',','.')?></td> 
								   <td style="text-align: right;"><?php echo number_format($pakaii,2,',','.')?></td> 
								   <td style="text-align: right;"><?php echo number_format($nilaitot,2,',','.')?></td> 
								    
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
           
      <!-- /.row -->
    </section>
    <!-- /.content -->
	<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
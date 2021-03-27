<!DOCTYPE html>
 
<html lang="en">
  
    <div class="panel-body">

      <!-- Main component for a primary marketing message or call to action -->
      
    <?php 
    include "conn.php";
      //$sql = mysqli_query($koneksi, "SELECT t_gr.f_grno, MONTH(t_gr.f_grdate) AS bulan, YEAR(t_gr.f_grdate) AS tahun, SUM(t_gr_detail.f_received_qty) AS total FROM t_gr, t_gr_detail WHERE t_gr.f_grno=t_gr_detail.f_grno AND t_gr_detail.f_partcode='$partcode' AND YEAR(t_gr.f_grdate)='$tahun' AND MONTH(t_gr.f_grdate)='1'");
			$sql = mysqli_query($koneksi, "SELECT count(id_restoran) AS total FROM tb_pajak_restoran where tahun='2017'");
			
            $row = mysqli_fetch_array($sql); 
            
            $sql1 = mysqli_query($koneksi, "SELECT count(id) AS total FROM pajak_hotel where tahun='2017'");
			
            $row1 = mysqli_fetch_array($sql1);
            
            $sql2 = mysqli_query($koneksi, "SELECT COUNT(tanggal_lahir) AS total FROM data WHERE MONTH(tanggal_lahir)='3'");
			
            $row2 = mysqli_fetch_array($sql2);
            
            $sql3 = mysqli_query($koneksi, "SELECT COUNT(tanggal_lahir) AS total FROM data WHERE MONTH(tanggal_lahir)='4'");
			
            $row3 = mysqli_fetch_array($sql3);
            
            $sql4 = mysqli_query($koneksi, "SELECT COUNT(tanggal_lahir) AS total FROM data WHERE MONTH(tanggal_lahir)='5'");
			
            $row4 = mysqli_fetch_array($sql4);
            
            $sql5 = mysqli_query($koneksi, "SELECT COUNT(tanggal_lahir) AS total FROM data WHERE MONTH(tanggal_lahir)='6'");
			
            $row5 = mysqli_fetch_array($sql5);
            
            $sql6 = mysqli_query($koneksi, "SELECT COUNT(tanggal_lahir) AS total FROM data WHERE MONTH(tanggal_lahir)='7'");
			
            $row6 = mysqli_fetch_array($sql6);
            
            $sql7 = mysqli_query($koneksi, "SELECT COUNT(tanggal_lahir) AS total FROM data WHERE MONTH(tanggal_lahir)='8'");
			
            $row7 = mysqli_fetch_array($sql7);
            

            
            ?>
			<table id="TableSiswa" class="table table-striped table-bordered table-hover" border="1" align="center" cellpadding="50">
                <tr  style="background: #276e95;color: #fff;">
                <th>Tahun</th>
                <th>Restoran</th>
                <th>Hotel</th>
                <th>Hiburan</th>
                <th>Sarang<br> Burung Walet</th>
                <th>Reklame</th>
                <th>Air Tanah</th>
                <th>Penerangan<br> Jalan</th>
                <th>Mineral Bukan<br> Logam</th>

                </tr>
            
                <tr>
                <td><b>2017</td>
                <td><?php echo $row['total'];?></td>
                <td><?php echo $row1['total'];?></td>
                <td><?php echo $row2['total'];?></td>
                <td><?php echo $row3['total'];?></td>
                <td><?php echo $row3['total'];?></td>
                <td><?php echo $row3['total'];?></td>
                <td><?php echo $row3['total'];?></td>
                <td><?php echo $row3['total'];?></td>

                </tr> 
            <?php
            $sqlku = mysqli_query($koneksi, "SELECT count(id_restoran) AS total1 FROM tb_pajak_restoran where tahun='2018'");
			$rowku = mysqli_fetch_array($sqlku); 
                
            $sqlku1 = mysqli_query($koneksi, "SELECT count(id) AS total1 FROM pajak_hotel where tahun='2018'");
			$rowku1 = mysqli_fetch_array($sqlku1); 
                
            $sqlku2 = mysqli_query($koneksi, "SELECT SUM(sks) AS total1 FROM data WHERE MONTH(tanggal_lahir)='3'");
			$rowku2 = mysqli_fetch_array($sqlku2); 
                
            $sqlku3 = mysqli_query($koneksi, "SELECT SUM(sks) AS total1 FROM data WHERE MONTH(tanggal_lahir)='4'");
			$rowku3 = mysqli_fetch_array($sqlku3); 
                
            $sqlku4 = mysqli_query($koneksi, "SELECT SUM(sks) AS total1 FROM data WHERE MONTH(tanggal_lahir)='5'");
			$rowku4 = mysqli_fetch_array($sqlku4); 
                
            $sqlku5 = mysqli_query($koneksi, "SELECT SUM(sks) AS total1 FROM data WHERE MONTH(tanggal_lahir)='6'");
			$rowku5 = mysqli_fetch_array($sqlku5); 
               
            $sqlku6 = mysqli_query($koneksi, "SELECT SUM(sks) AS total1 FROM data WHERE MONTH(tanggal_lahir)='7'");
			$rowku6 = mysqli_fetch_array($sqlku6); 
                
            $sqlku7 = mysqli_query($koneksi, "SELECT SUM(sks) AS total1 FROM data WHERE MONTH(tanggal_lahir)='8'");
			$rowku7 = mysqli_fetch_array($sqlku7); 
            ?>
                
                <tr>
                <td><b>2018</td>
                <td><?php echo $rowku['total1'];?></td>
                <td><?php echo $rowku1['total1'];?></td>
                <td><?php echo $rowku2['total1'];?></td>
                <td><?php echo $rowku3['total1'];?></td>
                <td><?php echo $rowku4['total1'];?></td>
                <td><?php echo $rowku5['total1'];?></td>
                <td><?php echo $rowku6['total1'];?></td>
                <td><?php echo $rowku7['total1'];?></td>

                </tr>
        </table>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="dist/js/jquery-1.4.js"></script>
    <!-- <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>-->
    <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="dist/js/jquery.fusioncharts.js"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <!--LOAD HTML KE JQUERY FUSION CHART BERDASARKAN ID TABLE-->
<script>
    $('#TableSiswa').convertToFusionCharts({
        swfPath: "Charts/",
        type: "MSColumn3D",
        data: "#TableSiswa",
        width: "1090",
        height: "350",
        dataFormat: "HTMLTable",
        renderAt: "chart-container",
        dataOptions:{
            chartAttributes:{
                caption: "Data Wajib Pajak",
                xAxisName: "Tahun",
                yAxisName: "Jumlah Wajib Pajak",
                decimalPrecision: "0",
 
            }
        }
    });
	
 
        </script>


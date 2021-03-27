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
            text: 'Data Wajib Pajak'
         },
         xAxis: {
            categories: ['Pajak Restoran']
         },
         yAxis: {
            title: {
               text: 'Jumlah Wajib Pajak'
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


$sql   = "SELECT * from tb_penduduk group by jenis_kelamin"; // file untuk mengakses ke tabel database
$query = mysql_query( $sql ) or die(mysql_error());         
while($ambil = mysql_fetch_array($query)){
	$jk=$ambil['jenis_kelamin'];
	$sql_jumlah   = "SELECT  COUNT(*) as jlh frOM tb_penduduk where jenis_kelamin='$jk'";        
	$query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
	while( $data = mysql_fetch_array( $query_jumlah ) ){
	   $jumlahx = $data['jlh'];           
	  }             
	 ?>
	 {
	  name: '<?php echo $jk; ?>',
	  data: [<?php echo $jumlahx; ?>]
	  },
	  <?php } ?>
]
});
});	
</script>

    <!-- Main content -->
    <section class="content">
     

      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Data Wajib Pajak</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-11 col-sm-8">
					<div id="container" style="min-width: 100%; height: 400px; margin: 0 auto">
					</div>
                </div>
              </div>
             </div>
          </div>
		</div>
       
  <!-- /.box-header -->
            
            <!-- ./box-body -->
        <!-- /.col -->
      </div>
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
	<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
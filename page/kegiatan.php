 <?php
 
$konek = mysqli_connect("localhost","root","","rka");
 
    //form add kiba
	echo "<form action='' method='POST' enctype='multipart/form-data' class='form-horizontal'>";


       echo "
<div class=\"row\">
 <div class=\"box col-md-12\">
  <div class=\"box-inner\">
 
  


			<div class='panel-body'>		
		";
	
	$sql_data   = "select * from ref_keg where kd_prog='$_GET[kd_prog]' ";
	
	$mysql_data = mysqli_query($konek, $sql_data) or die ("Query Data Error :" .mysql_error()); 
	
	echo"		
			<table class=\"table table-striped table-bordered bootstrap-datatable datatable responsive\" id=\"saldo\">
			<thead>
			<tr>
				<th>No</th>
				<th>Nama Kegiatan</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
	";

	$no=1;
	while($data=mysqli_fetch_array($mysql_data))
	{ 
	echo "
		  <tr>
		  <td>$no</td>
		 
		  <td>$data[nm_keg]</td>

				  <td>
					<center>
					   <a href='?p=belanja&kd_prog=$data[kd_prog]&kd_keg=$data[kd_keg]' class='btn btn-primary btn-sm'>
						<span class='glyphicon glyphicon-edit'>Pilih</span> 
					  </a>
					  
					</center>
				  </td>
			  </tr>
			 ";
	$no++;
	}
	
echo "</tbody></table>
        </div>

	</div>


</div><!--/row-->

								 
		    <!--/tutup kolom2--></div>	

		
      <!--/tutup box--> 
	  </div>
   
 </div>
 </div>
 </div>


</div>

</form><!--/row-->";
								

<?php		
include "tanggal.php";		
include "koneksi.php";
?>

<link rel="stylesheet" href="css/themes/base/jquery-ui.css" />
   <script src="js/jquery-1.9.1.js"></script>
   <script src="js/ui/jquery-ui.js"></script>
   <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
   
   
<html>
	<head>
    <title> ENTRY DATA</title>
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<div id="wrapper">
          <div id="page-wrapper">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
 
                            
							<div class="col-lg-6">
                              <form role="form" name="tes" method="post" action="home.php?p=rek_simpan">

                                 
                                </div>
                                <!-- /.col-lg-6 (nested) -->
								

								<div class="col-lg-12">
                                  <div class="panel panel-success">
									<div class="panel-heading">
									  <center><b>Form Input DATA</b></center>
									</div>
                                </div>
                                </div>
						
                                
								
								

								
								<div class="col-lg-12">
									<div class="form-group">
										<label> Rekening 1 </label> 
										 <select class="form-control" name="kd1" id="kd1">
                                    <option value="-" selected></option>
                                    <?php
                                    $q = mysql_query("select * from rek1"); 
                                    while ($row1 = mysql_fetch_array($q))
									{
                                      echo "<option required='' value='".$row1['kd1']."'>".$row1['kd1']. ' | ' .$row1['nm1']."</option>";
                                    }
                                    ?>
                                    </select>
									</div>
									
																		<div class="form-group">
										<label>  Rekening 2</label> 
										 <select class="form-control" name="kd2" id="kd2">
                                    <option value="-" selected></option>
 
                                    </select>
									</div>
									
																		<div class="form-group">
										<label>  Rekening 3</label> 
										 <select class="form-control" name="kd3" id="kd3">
                                    <option value="-" selected></option>
 
                                    </select>
									</div>
																											<div class="form-group">
										<label>  Rekening 4</label> 
										 <select class="form-control" name="kd4" id="kd4">
                                    <option value="-" selected></option>
 
                                    </select>
									</div>																	<div class="form-group">
										<label>  Rekening 5</label> 
										 <select class="form-control" name="kd5" id="kd5"  >
                                    <option value="-" selected></option>
 
                                    </select>
									</div>
								 <div class="form-group">
									 
										 <select class="form-control" name="kd6" id="kd6"  >
									</div>
									
									 
									</div>
									
									
 
 
							 
                            
								<script>
									$("#kd1").change(function(){
										var kd1 = $("#kd1").val();
										$.ajax({
											type: "POST",
											dataType: "html",
											url: "rek1.php",
											data: "kd1="+kd1,
											success: function(msg){

												if(msg == ''){
													alert('Tidak ada data');
												}

												else{
													$("#kd2").html(msg);                                                     
												}
											}
										});  });
										
										$("#kd2").change(function(){
										var kd1 = $("#kd1").val();
										var kd2 = $("#kd2").val();
										$.ajax({
											type: "POST",
											dataType: "html",
											url: "rek2.php",
											data: "kd1="+kd1+"&kd2="+kd2,
											success: function(msg){

												if(msg == ''){
													alert('Tidak ada data');
												}

												else{
													$("#kd3").html(msg);                                                     
												}
											}
										});  });
										
											$("#kd3").change(function(){
										var kd1 = $("#kd1").val();
										var kd2 = $("#kd2").val();
										var kd3 = $("#kd3").val();
										$.ajax({
											type: "POST",
											dataType: "html",
											url: "rek3.php",
											data: "kd1="+kd1+"&kd2="+kd2+"&kd3="+kd3,
											success: function(msg){

												if(msg == ''){
													alert('Tidak ada data');
												}

												else{
													$("#kd4").html(msg);                                                     
												}
											}
										});  });
										
											$("#kd4").change(function(){
										var kd1 = $("#kd1").val();
										var kd2 = $("#kd2").val();
										var kd3 = $("#kd3").val();
										var kd4 = $("#kd4").val();
										$.ajax({
											type: "POST",
											dataType: "html",
											url: "rek4.php",
											data: "kd1="+kd1+"&kd2="+kd2+"&kd3="+kd3+"&kd4="+kd4,
											success: function(msg){

												if(msg == ''){
													alert('Tidak ada data');
												}

												else{
													$("#kd5").html(msg);                                                     
												}
											}
										});  });
										
										
											$("#kd5").change(function(){
										var kd1 = $("#kd1").val();
										var kd2 = $("#kd2").val();
										var kd3 = $("#kd3").val();
										var kd4 = $("#kd4").val();
										var kd5 = $("#kd5").val();
										$.ajax({
											type: "POST",
											dataType: "html",
											url: "rek5.php",
											data: "kd1="+kd1+"&kd2="+kd2+"&kd3="+kd3+"&kd4="+kd4+"&kd5="+kd5,
											success: function(msg){

												if(msg == ''){
													alert('Tidak ada data');
												}

												else{
													$("#kd6").html(msg);                                                     
												}
											}
										});  });
										
	
								</script>
                      
 
									
								</div>
								
                                <div class="col-lg-12">
                                  <div align="center"> 
                                    <input name="fok" type="submit" id="fok" value="Simpan" class="btn btn-primary">
                                    <input name="fulang" type="reset" id="fulang" value="Reset" class="btn btn-default">
                                    <input name="fulang2" type="button" id="fulang2" value="Batal" onClick="javascript:history.back()" class="btn btn-warning">
                                  </div>
                                </div>
								 
                                </form>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) --> 
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
	</body>
										
</html>

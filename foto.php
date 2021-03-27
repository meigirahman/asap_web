<html>
<head>
	<meta charset="UTF-8">
	<title>Pop Up Gambar Bootstrap</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		img{width: 200px; height:200px;}
	</style>
</head>
<body>
<center>
	<h1>Cara Membuat Pop Up Gambar dengan Bootstrap</h1>
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	 <img src="foto/ceceh.png" alt="" class="img-responsive">
	</button>
 
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Cara Membuat Pop UP Gambar dengan Bootstrap</h4>
	      </div>
	      <div class="modal-body">
	      	<center>	
	        	<img src="foto/ceceh.png" alt="" class="img-responsive">
	        </center>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	
	      </div>
	    </div>
	  </div>
	</div>
</center>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
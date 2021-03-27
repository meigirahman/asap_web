function kirim_form(){
	 	 
	
	 var aset1 = $("#rek1").val();
        var aset2 = $("#rek2").val();
        var aset3 = $("#rek3").val();
        var aset4 = $("#rek4").val();
        var aset5 = $("#rek5").val();
	$.ajax({
		//Alamat url harap disesuaikan dengan lokasi script pada komputer anda
		url	     : 'cari_aset5.php',
		type     : 'POST',
		dataType : 'html',
		data     : "kd_aset1="+aset1+"&&kd_aset2="+aset2+"&&kd_aset3="+aset3+"&&kd_aset4="+aset4+"&&kd_aset5="+aset5,
		success  : function(data){
			 $("#kd_beli").val(data);
		},
	})
}
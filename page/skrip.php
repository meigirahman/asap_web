<?php
echo "
	<script>

	function copytextbox() {
		document.getElementById('dengan-rupiah').value = document.getElementById('a2').value;
	}
		function copytextbox2() {
		document.getElementById('dengan-rupiah2').value = document.getElementById('b2').value;
	}

	
	function aa() {
		document.getElementById('rek1').value = document.getElementById('aset1').value;
		document.getElementById('rek2').value = document.getElementById('aset2').value;
		document.getElementById('rek3').value = document.getElementById('aset3').value;
		document.getElementById('rek4').value = document.getElementById('aset4').value;
		document.getElementById('rek5').value = document.getElementById('aset5').value;
	}	

	/* Dengan Rupiah */
	var dengan_rupiah = document.getElementById('dengan-rupiah');
	var dengan_rupiah2 = document.getElementById('dengan-rupiah2');
	var a2 = document.getElementById('a2');
	
	a2.addEventListener('keyup', function(e)
	{
		dengan_rupiah.value = formatCurrency(this.value);
	});
	
		var b2 = document.getElementById('b2');
	
	b2.addEventListener('keyup', function(e)
	{
		dengan_rupiah2.value = formatCurrency2(this.value);
	});
	
	
	/* Fungsi */
	function formatCurrency(num) {

        num = num.toString().replace(/\Rp|/g,'');
        if(isNaN(num))
            num = '0';
        sign = (num == (num = Math.abs(num)));
        num = Math.floor(num*100+0.50000000001);
        cents = num%100;
        num = Math.floor(num/100).toString();
        if(cents<10)
            cents = '0' + cents;
        for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
            num = num.substring(0,num.length-(4*i+3))+'.'+
            num.substring(num.length-(4*i+3));
        return ((sign)?'':'-') + 'Rp ' + num + ',' + cents;

    }
	
		function formatCurrency2(num) {

        num = num.toString().replace(/\Rp|/g,'');
        if(isNaN(num))
            num = '0';
        sign = (num == (num = Math.abs(num)));
        num = Math.floor(num*100+0.50000000001);
        cents = num%100;
        num = Math.floor(num/100).toString();
        if(cents<10)
            cents = '0' + cents;
        for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
            num = num.substring(0,num.length-(4*i+3))+'.'+
            num.substring(num.length-(4*i+3));
        return ((sign)?'':'-') + 'Rp ' + num + ',' + cents;

    }
	
	function formatRupiah(angka, prefix)
	{
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split	= number_string.split(','),
			sisa 	= split[0].length % 3,
			rupiah 	= split[0].substr(0, sisa),
			ribuan 	= split[0].substr(sisa).match(/\d{3}/gi);
			
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
		
		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}
</script>
";
?>
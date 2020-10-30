<html>
<head>
<title>Perhitungan</title>
</head>
<body>
<div class="perhitungan">
	<li>
	<label for ="nama"> Harga/Kg :</label>
	<input type="text" name="" id="harga">
	</li>
	<li>
	<label for ="jumlah"> Jumlah Berat :</label>
	<input type="text" name="" id="jumlah">
	</li>	
	<li>
	<label for ="total">= Total :</label>
	<input type="text" name="" id="total">
	</li>
	</div>
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type ="text/javascript">
		$(".perhitungan").keyup(function(){
			var harga = parseInt($("#harga").val())
			var jumlah = parseInt($("#jumlah").val())
			
			var total = harga * jumlah;
			$("#total").attr("value",total)
			
			});
	</script>
</body>
</html>
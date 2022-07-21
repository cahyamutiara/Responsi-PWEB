<!DOCTYPE html>
<html>
<head>
	<title>Tugas Pemrograman Web</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
	.main-page {
		background: url(header2.jpg);
		color: black;
		padding: 20px;
	}
	.main {
		font-family: helvetica;
	}
	.form {
		font-family: helvetica;
	}
	.p1 {
		margin: 20px;
	}
	.p2 {
		margin: 20px;
	}
	.w3-sidebar {
		background-color: #EFEAD8;
		font-family: helvetica;
		width: 25%;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<div style="margin: 0 10%">
		<div class="main-page">
  		<h1 align="center"><font face="fantasy">~ WELCOME ~</font></h1>
		</div>
		<div class="main">
			<h3 style="background-color: #D0C9C0; padding: 5px; padding-left: 10px;">BIODATA</h3>
			<p style="padding-left: 10px;">Nama : Cahya Mutiara</p>
			<p style="padding-left: 10px;">NIM : 2100018450</p>
			<p style="padding-left: 10px;">Kelas : I</p><br>
			<p style="padding-left: 10px;"><i>Web ini dibuat dengan tujuan untuk memenuhi responsi mata kuliah Praktikum Pemrograman Web.</i></p><br>
		</div>
		<div class="form">
			<h3 style="background-color: #D0C9C0; padding: 5px; padding-left: 10px">HARGA ONGKIR</h3>
			<form id="MyForm" target="_blank" method="post" style="padding-left: 10px">
				<label for="name">Nama :</label>
				<input type="text" id="name" name="name"><br><br>
				<label for="distance">Jarak :</label>
				<input type="text" id="distance" name="distance"><br><br>
				<label for="address">Alamat :</label>
				<input type="text" id="address" name="address"><br><br>
				<input type="button" value="Submit" onclick="submitform()">
				<input type="reset" value="Clear">
			</form>
		</div>
	</div> 
	<script type="text/javascript">
		function submitform() {
				$.ajax( {
					data: $('#MyForm').serialize(),
					type: "post",
					url: 'ongkir.php',
					success: function(response) {
						var jsonData = JSON.parse(response);
						if (jsonData.success == "1")
						{
							alert(`Harga ongkir: ${jsonData.deliveryPrice}`);
						}
						else {
							alert(`ERROR: ${jsonData.message}`);
						}
					}
    				});
    			return false;
		}
	</script> 
</body>
</html>

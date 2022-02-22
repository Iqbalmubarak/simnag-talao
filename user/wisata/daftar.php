<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-02.jpg);">
					<span class="login100-form-title-1">
						Tambah Wisata
					</span>
				</div>

				


				<form class="login100-form validate-form" action="daftar_pro.php" method="post" enctype="multipart/form-data" >
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Foto</span>
						<input class="input100" type="file" 
						name="my_image2">
						
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="d_name" id="d_name" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">lokasi</span>
						<input class="input100" type="text" name="d_kk" id="d_kk" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Tentang</span>
						<input rows="15" class="input100" type="text" name="d_nik" id="d_nik" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Tentang</span>
						<input rows="15" class="input100" type="text" name="d_kelamin" id="d_kelamin" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Tentang</span>
						<input rows="15" class="input100" type="text" name="d_password" id="d_password" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Tentang</span>
						<input rows="15" class="input100" type="text" name="d_status" id="d_status" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Tentang</span>
						<input rows="15" class="input100" type="text" name="d_hub" id="d_hub" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<a class="login100-form-btn" style="background-color: grey;"  href="../a_index.php">
						Kembali</a>
					
					<button class="login100-form-btn"  type="submit" 
						name="submit2"
						value="Upload">
						Tambah
					</button>
					
					<p><a style="font-weight: bold;">Catatan :</a><a> Untuk setiap paragraf baru, silahkan tambahkan<a style="font-weight: bold;"> &lt;br&gt;&lt;br&gt; </a>di kalimat terkahir.</a></p>
				</div>
			</form>
		</div>
	</div>
</div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
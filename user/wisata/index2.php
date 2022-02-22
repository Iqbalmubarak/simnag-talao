<?php
session_start();
include('../ifnotloginadmin.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SIMNag - Nagari Pasia Laweh</title>
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
						Tambah Berita
					</span>
				</div>

				


				<form class="login100-form validate-form" action="acontoh_pro2.php" method="post" enctype="multipart/form-data" >


					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Foto</span>
						<input class="input100" type="file" 
						name="my_image2">
						
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Kategori</span>
						  <select class="form-control show-tick ms select2" data-placeholder="Select" name="b_cat" id="b_cat">
                                <option>Pilih Kategori</option>
                                <option value="Politik" >Politik</option>
                                <option value="Ekonomi" >Ekonomi</option>
                                <option value="Wisata" >Wisata</option>
                                <option value="Pendidikan" >Pendidikan</option>
                                <option value="Pemerintah" >Pemerintah</option>
                            </select> 
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">judul</span>
						<input class="input100" type="text" name="b_title" id="b_title" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required" style="display:none;">
						<span class="label-input100">lokasi</span>
						<input class="input100" type="text" name="b_date" id="b_date" value="<?php date_default_timezone_set("Asia/jakarta"); echo date('j/n/Y'); ?>  <?php date_default_timezone_set("Asia/Jakarta"); echo date('h:i A'); ?>" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Berita</span>
						<textarea rows="15" class="input100" type="text" name="b_message" id="b_mesaage" placeholder="Enter username"></textarea>
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Penulis</span>
						<input class="input100" type="text" name="b_author" id="b_author" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<a class="login100-form-btn" style="background-color: grey;"  href="../a_berita_view.php">
						Kembali</a>		
					<button class="login100-form-btn"  type="submit" 
						name="submit2"
						value="Upload">
						Tambah
					</button>		
					
					
				</div>
				<br><br>
				<p><a style="font-weight: bold;">Catatan :</a><a> Untuk setiap paragraf baru, silahkan tambahkan<a style="font-weight: bold;"> &lt;br&gt;&lt;br&gt; </a>di kalimat terkahir.</a></p>
				
				
				
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
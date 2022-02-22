
<?php
session_start();
require_once('../db_connect.php');
// require_once('library.php');


$ad_email = $_SESSION['ad_email'];
$sqlquery = "SELECT * FROM admin
WHERE ad_email='$ad_email' ";
$result = $connection->query($sqlquery) or die($connection->error);
$sqlqueryresult = $connection ->query($sqlquery);


$sqlquery2 = "SELECT * FROM kegiatan WHERE k_id='".$_GET["k_id"]."'  ";
$sqlqueryresult2 = mysqli_query($connection,$sqlquery2);

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
						Update Potensi Kekayaan Nagari
					</span>
				</div>
				<?php                           
				foreach ($sqlqueryresult2 as $key) {

					$k_id = $key['k_id'];
					$k_title = $key['k_title'];
					$k_date = $key['k_date'];
					$k_message = $key['k_message'];
					
					$k_image = $key['k_image'];





				} ?>
				


				<form class="login100-form validate-form" action="index3_update_pro.php" method="POST" name="form3" onsubmit="return validation()" enctype="multipart/form-data" >
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Foto</span>
						<img src="kegiatan_img/<?php echo $k_image ?>" width="250" height="150">
						
					</div>
					<input style="display: none;" type="text" name="k_id" id="k_id" value="<?php echo $k_id ?>" >

					

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">judul</span>
						<input class="input100" type="text" name="k_title" id="k_title" value="<?php echo $k_title ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required" >
						<span class="label-input100">Tanggal Publish</span>
						<input class="input100" type="text" name="k_date" id="k_date" value="<?php echo $k_date ?>" readonly placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Berita</span>
						<textarea rows="15" class="input100" type="text" name="k_message" id="k_mesaage" value=""><?php echo $k_message ?></textarea>
						<span class="focus-input100"></span>
					</div>

				

					<div class="container-login100-form-btn">
						<a class="login100-form-btn" style="background-color: grey;"  href="../a_index.php">
						Kembali</a>

						<a style="background-color: #46b6fe; font-weight:bold; font-size:12px;"  type="submit" href="javascript: submitform()" name="submit"  class="login100-form-btn">Update</a>
						
					</button>
					<script type="text/javascript">
                                    function submitform()
                                    {
                                      document.form3.submit();
                                  }
                              </script>
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
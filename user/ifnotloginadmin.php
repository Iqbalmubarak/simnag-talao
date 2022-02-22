<?php
if (!isset($_SESSION['ad_email'])) {
	header("Location: sign-in3.php");
	echo "gg";
}
?>
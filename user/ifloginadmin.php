<?php
if (isset($_SESSION["ad_email"])) {
	header("Location: user/a_index.php");
	echo "gg";
}
?>
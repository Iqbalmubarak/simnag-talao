<?php
session_start();

include 'db_connect.php';




	
	$query = "INSERT INTO admin (ad_email, ad_password) VALUES ('".$_POST['ad_email']."', '".$_POST['ad_password']."')";
	
$result = $connection ->query ($query);
if(!empty($result))
{ ?>
    <script>
	alert('Selamat admin sudah di tambah');
	window.location.href = "super_index.php";
	</script>
    <?php
	
} else {
	?>
    <script>
	alert('Tambahan admin tidak berhasil. Sila diulang kembali.');
	window.location.href = "super_index.php";
	</script>
    <?php
}

	?>
	
	
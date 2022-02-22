<?php
session_start();

include '../db_connect.php';

$query3 = "INSERT INTO notif (notif_kk, notif_message, notif_logo, notif_icon, notif_title ) VALUES ('".$_POST['l_pelaporkkk']."', '".$_POST['notif_message']."', '".$_POST['notif_logo']."', '".$_POST['notif_icon']."','".$_POST['notif_title']."')" ;
$result3 = mysqli_query($connection,$query3);
	
	$query = "INSERT INTO lapor (l_type, l_cat , l_title, l_message, l_date, l_loc, 
l_namainstansi, l_date2, l_status, l_anonim, l_pelaporkk, l_pelapornik, l_badge ) VALUES ('".$_POST['l_type']."', '".$_POST['l_cat']."', '".$_POST['l_title']."', '".$_POST['l_message']."', '".$_POST['l_date']."', '".$_POST['l_loc']."' , 
'".$_POST['l_namainstansi']."', '".$_POST['l_date2']."', '".$_POST['l_status']."', '".$_POST['l_anonim']."', '".$_POST['l_pelaporkkk']."', '".$_POST['l_pelapornikk']."','badge-warning' )";

	
$result = $connection ->query ($query);
if(!empty($result))
{ ?>
    <script>
	alert('Selamat pengaduan anda sudah diterima');
	window.location.href = "simnag_lapor.php";
	</script>
    <?php
	
} else {
	?>
    <script>
	alert('Pengaduan tidak berhasil. Sila diulang kembali.');
	window.location.href = "simnag_lapor.php";
	</script>
    <?php
}

	?>
	
	
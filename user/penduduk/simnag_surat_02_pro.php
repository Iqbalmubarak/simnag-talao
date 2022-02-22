<?php
session_start();

include '../db_connect.php';

$query3 = "INSERT INTO notif (notif_kk, notif_message, notif_logo, notif_icon, notif_title ) VALUES ('".$_POST['s_p_kk']."', '".$_POST['notif_message']."', '".$_POST['notif_logo']."', '".$_POST['notif_icon']."','".$_POST['notif_title']."')" ;
$result3 = mysqli_query($connection,$query3);


	$query = "INSERT INTO surat (
	s_status, 
	s_badge, 
	s_date, 
	s_title, 
	s_p_kk, 
	s_p_nik, 
	s_p_name, 
	s_p_tanggal_l, 
	s_p_tempat_l, 
	s_p_kelamin, 
	s_p_agama, 
	s_p_status, 
	s_p_pek,
	s_filepath, 
	s_p_alamat ) 

	VALUES 

	(

	'".$_POST['s_status']."', 
	'".$_POST['s_badge']."', 
	'".$_POST['s_date']."', 
	'".$_POST['s_title']."',  
	'".$_POST['s_p_kk']."', 
	'".$_POST['s_p_nik']."',
	'".$_POST['s_p_name']."',
	'".$_POST['s_p_tanggal_l']."', 
	'".$_POST['s_p_tempat_l']."', 
	'".$_POST['s_p_kelamin']."', 
	'".$_POST['s_p_agama']."', 
	'".$_POST['s_p_status']."', 
	'".$_POST['s_p_pek']."', 
	'".$_POST['s_filepath']."', 
	'".$_POST['s_p_alamat']."'
    
    )" ;
	
$result = $connection ->query ($query);
if(!empty($result))
{ ?>
    <script>
	alert('Permohonan cetak surat anda telah berhasil. Silahkan menunggu 2X24 Jam untuk proses yang akan dilakukan');
	window.location.href = "simnag_surat.php";
	</script>
    <?php
	
} else {
	?>
    <script>
	alert('Cetak surat anda tidak berhasil. Sila diulang kembali.');
	window.location.href = "simnag_surat_02.php";
	</script>
    <?php
}

	?>
	
	
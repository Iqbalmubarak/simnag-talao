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
	'".$_POST['s_p_pek']."', 
	'".$_POST['s_filepath']."', 
	'".$_POST['s_p_alamat']."'
    )" ;

$result = $connection ->query ($query);

  $sql = "SELECT * FROM surat ORDER BY s_id DESC LIMIT 1";
$result2 = $connection ->query ($sql);
while ($key=$result2 -> fetch_assoc()) {
    $surat_id = $key['s_id'];
}


	$query = "INSERT INTO surat_tanah (
  surat_id,
  s9_nama2,
  s9_nik2,
  s9_tempat2,
  s9_tanggal2,
  s9_pekerjaan2,
  s9_jk2,
  s9_suku2,
  s9_alamat2,
  s9_utara,
  s9_selatan,
  s9_barat,
  s9_timur ) 
  

	VALUES 

	(
  '".$surat_id."',
  '".$_POST['s9_nama2']."',
	'".$_POST['s9_nik2']."',
	'".$_POST['s9_tempat2']."',
	'".$_POST['s9_tanggal2']."',
	'".$_POST['s9_pekerjaan2']."',
	'".$_POST['s9_jk2']."',
	'".$_POST['s9_suku2']."',
	'".$_POST['s9_alamat2']."',
	'".$_POST['s9_utara']."',
  '".$_POST['s9_selatan']."',
	'".$_POST['s9_barat']."',
	'".$_POST['s9_timur']."'
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
  alert('Permohonan Cetak surat anda tidak berhasil. Sila diulang kembali.');
  window.location.href = "simnag_surat_09.php";
</script>
<?php
}

	?>
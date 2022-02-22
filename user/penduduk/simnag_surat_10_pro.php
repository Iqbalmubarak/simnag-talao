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
	s_p_name, 
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
	'".$_POST['s_p_name']."',
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

	$query = "INSERT INTO surat_ternak (
  surat_id,
  s10_warnat,
  s10_jkt,
  s10_umurt,
  s10_tandukt,
  s10_sopir,
  s10_umurs,
  s10_peks,
  s10_alamats,
  s10_kendaraans,
  s10_nopols,
  s10_tujuans
  ) 
  

	VALUES 

	(
  '".$surat_id."',
  '".$_POST['s10_warnat']."',
	'".$_POST['s10_jkt']."',
	'".$_POST['s10_umurt']."',
	'".$_POST['s10_tandukt']."',
	'".$_POST['s10_sopir']."',
	'".$_POST['s10_umurs']."',
	'".$_POST['s10_peks']."',
	'".$_POST['s10_alamats']."',
	'".$_POST['s10_kendaraans']."',
  '".$_POST['s10_nopols']."',
	'".$_POST['s10_tujuans']."'
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
  window.location.href = "simnag_surat_10.php";
</script>
<?php
}

	?>
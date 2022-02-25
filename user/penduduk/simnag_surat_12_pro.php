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
    s_p_tanggal_l, 
	s_p_tempat_l,
    s_p_nik,
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
    '".$_POST['s_p_tanggal_l']."', 
	'".$_POST['s_p_tempat_l']."',
	'".$_POST['s_p_nik']."',
	'".$_POST['s_p_alamat']."'
    )" ;
$result = $connection ->query ($query);

$sql = "SELECT * FROM surat ORDER BY s_id DESC LIMIT 1";
$result2 = $connection ->query ($sql);
while ($key=$result2 -> fetch_assoc()) {
    $surat_id = $key['s_id'];
}

	$query = "INSERT INTO surat_kurang_mampu (
  surat_id,
  s12_nama_ayah,
  s12_nik_ayah,
  s12_tempat_l_ayah,
  s12_tanggal_l_ayah,
  s12_pek_ayah,
  s12_agama_ayah,
  s12_alamat_ayah,
  s12_nama_ibu,
  s12_nik_ibu,
  s12_tempat_l_ibu,

  s12_tanggal_l_ibu,
  s12_pek_ibu,
  s12_agama_ibu,
  s12_alamat_ibu
  ) 
  

	VALUES 

	(
    '".$surat_id."',
    '".$_POST['s12_nama_ayah']."',
	'".$_POST['s12_nik_ayah']."',
	'".$_POST['s12_tempat_l_ayah']."',
	'".$_POST['s12_tanggal_l_ayah']."',
	'".$_POST['s12_pek_ayah']."',
	'".$_POST['s12_agama_ayah']."',
	'".$_POST['s12_alamat_ayah']."',
	'".$_POST['s12_nama_ibu']."',
	'".$_POST['s12_nik_ibu']."',
    '".$_POST['s12_tempat_l_ibu']."',
	'".$_POST['s12_tanggal_l_ibu']."',
	'".$_POST['s12_pek_ibu']."',
    '".$_POST['s12_agama_ibu']."',
	'".$_POST['s12_alamat_ibu']."'
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
    window.location.href = "simnag_surat_12.php";
</script>
<?php
}

	?>
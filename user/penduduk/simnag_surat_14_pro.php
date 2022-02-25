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
	'".$_POST['s_p_nik']."',
	'".$_POST['s_p_alamat']."'
    )" ;
$result = $connection ->query ($query);

$sql = "SELECT * FROM surat ORDER BY s_id DESC LIMIT 1";
$result2 = $connection ->query ($sql);
while ($key=$result2 -> fetch_assoc()) {
    $surat_id = $key['s_id'];
}

	$query = "INSERT INTO surat_jualbeli_ternak (
    surat_id,
    s14_warna_ternak,
    s14_jk_ternak,
    s14_umur_ternak,
    s14_tanduk_ternak,
    s14_tanda_ternak,
    s14_nama_dijual,
    s14_nik_dijual,
    s14_pek_dijual,
    s14_alamat_dijual,
    s14_nama_dibawa,
    s14_nik_dibawa,
    s14_kend_dibawa,
    s14_nopol_dibawa,
    s14_tujuan_dibawa
    ) 

	VALUES 

	(
    '".$surat_id."',
    '".$_POST['s14_warna_ternak']."',
	'".$_POST['s14_jk_ternak']."',
	'".$_POST['s14_umur_ternak']."',
	'".$_POST['s14_tanduk_ternak']."',
	'".$_POST['s14_tanda_ternak']."',
	'".$_POST['s14_nama_dijual']."',
	'".$_POST['s14_nik_dijual']."',
	'".$_POST['s14_pek_dijual']."',
	'".$_POST['s14_alamat_dijual']."',
    '".$_POST['s14_nama_dibawa']."',
	'".$_POST['s14_nik_dibawa']."',
	'".$_POST['s14_kend_dibawa']."',
    '".$_POST['s14_nopol_dibawa']."',
	'".$_POST['s14_tujuan_dibawa']."'
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
    window.location.href = "simnag_surat_14.php";
</script>
<?php
}

	?>
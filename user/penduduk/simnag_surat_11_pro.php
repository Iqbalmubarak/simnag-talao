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

	$query = "INSERT INTO surat_nikah (
    surat_id,
    s11_kewarganegaraan,
    s11_statuslk,
    s11_statuspr,
    s11_terdahulu,
    s11_nama2,
    s11_nik2,
    s11_tempat2,
    s11_tanggal2,
    s11_kewarganegaraan2,
    s11_agama2,
    s11_pekerjaan2,
    s11_alamat2,
    s11_nama3,
    s11_nik3,
    s11_tempat3,
    s11_tanggal3,
    s11_kewarganegaraan3,
    s11_agama3,
    s11_pekerjaan3,
    s11_alamat3,
    s11_csuami,
    s11_cistri,
    s11_hatajam,
    s11_tempat_akad,
    s11_suami,
    s11_istri,
    s11_tanggal_penetapan,
    s11_pengadilan_agama,
    s11_csuami2,
    s11_bin_csuami2,
    s11_nik_csuami2,
    s11_tempat_csuami2,
    s11_tanggal_csuami2,
    s11_kewarganegaraan_csuami2,
    s11_agama_csuami2,
    s11_pek_csuami2,
    s11_alamat_csuami2,
    s11_cistri2,
    s11_bin_cistri2,
    s11_nik_cistri2,
    s11_tempat_cistri2,
    s11_tanggal_cistri2,
    s11_kewarganegaraan_cistri2,
    s11_agama_cistri2,
    s11_pek_cistri2,
    s11_alamat_cistri2
)   

	VALUES 

	(
    '".$surat_id."',
    '".$_POST['s11_kewarganegaraan']."',
	'".$_POST['s11_statuslk']."',
	'".$_POST['s11_statuspr']."',
	'".$_POST['s11_terdahulu']."',
	'".$_POST['s11_nama2']."',
	'".$_POST['s11_nik2']."',
	'".$_POST['s11_tempat2']."',
	'".$_POST['s11_tanggal2']."',
	'".$_POST['s11_kewarganegaraan2']."',
    '".$_POST['s11_agama2']."',
    '".$_POST['s11_pekerjaan2']."',
	'".$_POST['s11_alamat2']."',
	'".$_POST['s11_nama3']."',
	'".$_POST['s11_nik3']."',
	'".$_POST['s11_tempat3']."',
	'".$_POST['s11_tanggal3']."',
	'".$_POST['s11_kewarganegaraan3']."',
	'".$_POST['s11_agama3']."',
	'".$_POST['s11_pekerjaan3']."',
    '".$_POST['s11_alamat3']."',
    '".$_POST['s11_csuami']."',
	'".$_POST['s11_cistri']."',
	'".$_POST['s11_hatajam']."',
	'".$_POST['s11_tempat_akad']."',
	'".$_POST['s11_suami']."',
	'".$_POST['s11_istri']."',
	'".$_POST['s11_tanggal_penetapan']."',
	'".$_POST['s11_pengadilan_agama']."',
	'".$_POST['s11_csuami2']."',
    '".$_POST['s11_bin_csuami2']."',
    '".$_POST['s11_nik_csuami2']."',
	'".$_POST['s11_tempat_csuami2']."',
	'".$_POST['s11_tanggal_csuami2']."',
	'".$_POST['s11_kewarganegaraan_csuami2']."',
	'".$_POST['s11_agama_csuami2']."',
	'".$_POST['s11_pek_csuami2']."',
	'".$_POST['s11_alamat_csuami2']."',
	'".$_POST['s11_cistri2']."',
	'".$_POST['s11_bin_cistri2']."',
    '".$_POST['s11_nik_cistri2']."',
    '".$_POST['s11_tempat_cistri2']."',
	'".$_POST['s11_tanggal_cistri2']."',
	'".$_POST['s11_kewarganegaraan_cistri2']."',
	'".$_POST['s11_agama_cistri2']."',
	'".$_POST['s11_pek_cistri2']."',
	'".$_POST['s11_alamat_cistri2']."'
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
    window.location.href = "simnag_surat_11.php";
</script>
<?php
}

	?>
<?php
session_start();

include '../db_connect.php';


	$query = "INSERT INTO penduduk (p_kk, p_nik2, p_nik, p_name, p_l_tempat, p_l_tanggal, kelamin, p_suku, agama, p_alamat, p_hub, pend, p_pend_nama, pek, p_pek_nama, p_telp ) VALUES ('".$_POST['nokk']."', '".$_POST['k_nik2']."', '".$_POST['k_nik']."', '".$_POST['k_name']."',  '".$_POST['k_l_tempat']."', '".$_POST['k_l_tanggal']."','".$_POST['kelamin']."','".$_POST['k_suku']."', '".$_POST['agama']."', '".$_POST['k_alamat']."', '".$_POST['k_hub']."', '".$_POST['pend']."', '".$_POST['k_pend_nama']."', '".$_POST['pek']."',  '".$_POST['k_pek_nama']."',  '".$_POST['p_telp']."')" ;
	
$result = $connection ->query ($query);
if(!empty($result))
{ ?>
    <script>
	alert('Selamat keluarga anda sudah terdaftar');
	window.location.href = "simnag_biodata.php";
	</script>
    <?php
	
} else {
	?>
    <script>
	alert('Pendaftaran tidak berhasil. Sila diulang kembali.');
	window.location.href = "simnag_biodata_addkeluarga.php";
	</script>
    <?php
}

	?>
	
	
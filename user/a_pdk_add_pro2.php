<?php
session_start();

include 'db_connect.php';


	$query = "INSERT INTO keluarga (p_kk, k_nik, k_name, k_telp, k_l_tempat, k_l_tanggal, kelamin, k_suku, agama, k_alamat, k_hub, pend, k_pend_nama, pek, k_pek_nama ) VALUES ('".$_POST['nokkk']."', '".$_POST['k_nik']."', '".$_POST['k_name']."', '".$_POST['k_telp']."', '".$_POST['k_l_tempat']."', '".$_POST['k_l_tanggal']."','".$_POST['k_kelamin']."','".$_POST['k_suku']."', '".$_POST['k_agama']."', '".$_POST['k_alamat']."', '".$_POST['k_hub']."', '".$_POST['k_pend']."', '".$_POST['k_pend_nama']."', '".$_POST['k_pek']."',  '".$_POST['k_pek_nama']."')" ;
	
$result = $connection ->query ($query);
if(!empty($result))
{ ?>
    <script>
	alert('Selamat data penduduk sudah terdaftar');
	window.location.href = "a_pdk_view.php";
	</script>
    <?php
	
} else {
	?>
    <script>
	alert('Pendaftaran tidak berhasil. Sila diulang kembali.');
	window.location.href = "a_pdk_view.php";
	</script>
    <?php
}

	?>
	
	
<?php
session_start();

include 'db_connect.php';


	$query = "INSERT INTO penduduk (p_kk, p_nik, p_name, p_telp, p_password, p_l_tempat, p_l_tanggal, kelamin, p_suku, agama, p_alamat, p_hub, pend, p_pend_nama, pek, p_pek_nama ) VALUES ('".$_POST['nokk']."', '".$_POST['p_nik']."', '".$_POST['p_name']."', '".$_POST['p_telp']."', '".$_POST['p_password']."', '".$_POST['p_l_tempat']."', '".$_POST['p_l_tanggal']."','".$_POST['p_kelamin']."','".$_POST['p_suku']."', '".$_POST['p_agama']."', '".$_POST['p_alamat']."', '".$_POST['p_hub']."', '".$_POST['p_pend']."', '".$_POST['p_pend_nama']."', '".$_POST['p_pek']."',  '".$_POST['p_pek_nama']."')" ;
	
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
	
	
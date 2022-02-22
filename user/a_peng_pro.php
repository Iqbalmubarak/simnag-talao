<?php
session_start();

include 'db_connect.php';




	
	$query = "INSERT INTO pengumuman (peng_message, peng_date) VALUES ('".$_POST['peng_message']."', '".$_POST['peng_date']."')";
	
$result = $connection ->query ($query);
if(!empty($result))
{ ?>
    <script>
	alert('Selamat berita sudah di tambah');
	window.location.href = "a_berita_add.php";
	</script>
    <?php
	
} else {
	?>
    <script>
	alert('Tambahan berita tidak berhasil. Sila diulang kembali.');
	window.location.href = "a_berita_add.php";
	</script>
    <?php
}

	?>
	
	
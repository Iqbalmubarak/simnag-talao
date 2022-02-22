<?php
session_start();

include 'db_connect.php';




	
	$query = "INSERT INTO berita (b_cat, b_title, b_message, b_date, b_author) VALUES ('".$_POST['b_cat']."', '".$_POST['b_title']."' , '".$_POST['b_message']."' , '".$_POST['b_date']."' , '".$_POST['b_author']."')";
	
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
	
	
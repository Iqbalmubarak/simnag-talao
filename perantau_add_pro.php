<?php
session_start();

include 'db_connect.php';

  
  $query = "INSERT INTO perantau (per_nik, per_name, per_pek, per_address, per_country, per_prov, per_wa) VALUES ('".$_POST['per_nik']."', '".$_POST['per_name']."', '".$_POST['per_pek']."', '".$_POST['per_address']."', '".$_POST['per_country']."',  '".$_POST['per_prov']."', '".$_POST['per_wa']."')";
  
$result = $connection ->query ($query);
if(!empty($result))
{ ?>
    <script>
  alert('Selamat nama anda sudah terdaftar');
  window.location.href = "perantau.php";
  </script>
    <?php
  
} else {
  ?>
    <script>
  alert('Pendaftaran tidak berhasil. Sila diulang kembali.');
  window.location.href = "perantau.php";
  </script>
    <?php
}

  ?>
  
  
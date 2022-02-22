<?php
session_start();

include 'db_connect.php';




  $query = "INSERT INTO pn_sekolah ( pn_sek_tingkat, pn_sek_nama, pn_sek_jor, pn_sek_guru, pn_sek_siswa ) VALUES ('".$_POST['pn_sek_tingkat']."','".$_POST['pn_sek_nama']."','".$_POST['pn_sek_jor']."','".$_POST['pn_sek_guru']."','".$_POST['pn_sek_siswa']."')" ;


 
$result = mysqli_query($connection,$query);
if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Tambah Tempat Pendidikan Baru Berhasil.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_profilnagari.php?\">";

} 
else {
    //echo $sql;
    $msg2 = "Tambah Tempat Pendidikan tidak berhasil.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_profilnagari.php?\">";
}


  ?>
  
  
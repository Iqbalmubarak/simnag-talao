<?php
session_start();

include 'db_connect.php';




  $query = "INSERT INTO pn_pdk ( pn_pdk_jor, pn_pdk_pdk, pn_pdk_kk ) VALUES ('".$_POST['pn_pdk_jor']."','".$_POST['pn_pdk_pdk']."','".$_POST['pn_pdk_kk']."')" ;


 
$result = mysqli_query($connection,$query);
if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Tambah Jumlah Penduduk Baru Berhasil.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_profilnagari.php?\">";

} 
else {
    //echo $sql;
    $msg2 = "Tambah Jumlah Penduduk tidak berhasil.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_profilnagari.php?\">";
}


  ?>
  
  
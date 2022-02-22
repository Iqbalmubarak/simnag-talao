<?php
session_start();

include 'db_connect.php';




  $query = "INSERT INTO pn_pek ( pn_pek_nama, pn_pek_jumlah ) VALUES ('".$_POST['pn_pek_nama']."','".$_POST['pn_pek_jumlah']."')" ;


 
$result = mysqli_query($connection,$query);
if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Tambah Pekerjaan Baru Berhasil.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_profilnagari.php?\">";

} 
else {
    //echo $sql;
    $msg2 = "Tambah Pekerjaan Baru tidak berhasil.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_profilnagari.php?\">";
}


  ?>
  
  
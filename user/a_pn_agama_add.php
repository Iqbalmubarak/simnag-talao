<?php
session_start();

include 'db_connect.php';




  $query = "INSERT INTO pn_agama ( pn_agama_jor, pn_agama_1, pn_agama_2, pn_agama_3, pn_agama_4 ) VALUES ('".$_POST['pn_agama_jor']."','".$_POST['pn_agama_1']."','".$_POST['pn_agama_2']."','".$_POST['pn_agama_3']."','".$_POST['pn_agama_4']."')" ;


 
$result = mysqli_query($connection,$query);
if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Tambah Jorong Baru Berhasil.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_profilnagari.php?\">";

} 
else {
    //echo $sql;
    $msg2 = "Tambah Jorong Baru tidak berhasil.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_profilnagari.php?\">";
}


  ?>
  
  
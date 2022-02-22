<?php 


session_start();
require_once('db_connect.php');



  $pn_pek_id= $_POST["pn_pek_id"];
  $pn_pek_jumlah= $_POST["pn_pek_jumlah"];
  $pn_pek_nama= $_POST["pn_pek_nama"];
 

 


$sql = "UPDATE pn_pek SET 



pn_pek_jumlah='$pn_pek_jumlah',
pn_pek_nama='$pn_pek_nama'

WHERE pn_pek_id='$pn_pek_id'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Update successful.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_profilnagari.php\">";

} 
else {
    //echo $sql;
    $msg2 = "Update unsuccessful. Please try again.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_pn_pek_edit.php?pn_pek_id='".$_POST["pn_pek_id"]."'\">";
}

?>
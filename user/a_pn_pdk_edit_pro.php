<?php 


session_start();
require_once('db_connect.php');



  $pn_pdk_id= $_POST["pn_pdk_id"];
  $pn_pdk_jor= $_POST["pn_pdk_jor"];
  $pn_pdk_pdk= $_POST["pn_pdk_pdk"];
  $pn_pdk_kk= $_POST["pn_pdk_kk"];

  

 


$sql = "UPDATE pn_pdk SET 


pn_pdk_jor='$pn_pdk_jor',
pn_pdk_pdk='$pn_pdk_pdk',
pn_pdk_kk='$pn_pdk_kk'

WHERE pn_pdk_id='$pn_pdk_id'";

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
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_pn_agama_edit.php?p_id='".$_POST["pn_pdk_id"]."'\">";
}

?>
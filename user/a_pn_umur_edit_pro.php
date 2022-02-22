<?php 


session_start();
require_once('db_connect.php');



  $pn_agama_id= $_POST["pn_agama_id"];
  $pn_agama_jor= $_POST["pn_agama_jor"];
  $pn_agama_1= $_POST["pn_agama_1"];
  $pn_agama_2= $_POST["pn_agama_2"];
  $pn_agama_3= $_POST["pn_agama_3"];
  $pn_agama_4= $_POST["pn_agama_4"];
  

 


$sql = "UPDATE pn_agama SET 


pn_agama_jor='$pn_agama_jor',
pn_agama_1='$pn_agama_1',
pn_agama_2='$pn_agama_2',
pn_agama_3='$pn_agama_3',
pn_agama_4='$pn_agama_4'

WHERE pn_agama_id='$pn_agama_id'";

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
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_pn_agama_edit.php?p_id='".$_POST["pn_agama_id"]."'\">";
}

?>
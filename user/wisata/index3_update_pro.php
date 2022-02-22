<?php 


session_start();
require_once('../db_connect.php');


  $k_id= $_POST["k_id"];
  $k_message= $_POST["k_message"];
  $k_title= $_POST["k_title"];
  


$sql = "UPDATE kegiatan SET 

k_message='$k_message',
k_title='$k_title'

WHERE k_id='$k_id'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Update successful.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=../a_keg_view.php\">";

} 
else {
    //echo $sql;
    $msg2 = "Update unsuccessful. Please try again.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=../a_keg_view.php?b_id='".$_POST["b_id"]."'\">";
}

?>
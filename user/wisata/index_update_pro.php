<?php 


session_start();
require_once('../db_connect.php');


  $w_id= $_POST["w_id"];
  $w_desc= $_POST["w_desc"];
  $w_name= $_POST["w_name"];
  $w_location= $_POST["w_location"];
  


$sql = "UPDATE wisata SET 


w_desc='$w_desc',
w_name='$w_name',
w_location='$w_location'

WHERE w_id='$w_id'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Update successful.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=../a_wisata_view.php\">";

} 
else {
    //echo $sql;
    $msg2 = "Update unsuccessful. Please try again.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=../a_wisata_view.php?w_id='".$_POST["w_id"]."'\">";
}

?>
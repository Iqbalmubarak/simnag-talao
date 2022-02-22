<?php 


session_start();
require_once('../db_connect.php');


  $b_id= $_POST["b_id"];
  $b_cat= $_POST["b_cat"];
  $b_message= $_POST["b_message"];
  $b_title= $_POST["b_title"];
  


$sql = "UPDATE berita SET 
b_cat='$b_cat',
b_message='$b_message',
b_title='$b_title'

WHERE b_id='$b_id'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Update successful.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=../a_berita_view.php\">";

} 
else {
    //echo $sql;
    $msg2 = "Update unsuccessful. Please try again.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=../a_berita_view.php?b_id='".$_POST["b_id"]."'\">";
}

?>
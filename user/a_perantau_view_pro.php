<?php 


session_start();
require_once('db_connect.php');



  $per_id= $_POST["per_idd"];
  $per_nik= $_POST["per_nik"];
  $per_name= $_POST["per_name"];
  $per_pek= $_POST["per_pek"];
  $per_address= $_POST["per_address"];
  $per_country= $_POST["per_country"];
   $per_prov= $_POST["per_prov"];
    $per_wa= $_POST["per_wa"];
  

 


$sql = "UPDATE perantau SET 


per_nik='$per_nik',
per_name='$per_name',
per_pek='$per_pek',
per_address='$per_address',
per_country='$per_country',
per_prov='$per_prov',
per_wa='$per_wa'

WHERE per_id='$per_id'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Update successful.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_perantau.php\">";

} 
else {
    //echo $sql;
    $msg2 = "Update unsuccessful. Please try again.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_perantau_view.php?per_id='".$_POST["per_id"]."'\">";
}

?>
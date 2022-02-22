<?php 


session_start();
require_once('db_connect.php');
require_once('library.php');


$query3 = "INSERT INTO notif (notif_kk, notif_message, notif_logo, notif_icon, notif_title ) VALUES ('".$_POST['notif_kkk']."', '".$_POST['notif_message']."', '".$_POST['notif_logo']."', '".$_POST['notif_icon']."','".$_POST['notif_title']."')" ;
$result3 = mysqli_query($connection,$query3);

  $l_id= $_POST["l_id"];
  $l_badge= $_POST["l_badge"];
  $l_status= $_POST["l_status"];
  
$sql = "UPDATE lapor SET 
l_status='$l_status',
l_badge='$l_badge'


WHERE l_id='$l_id'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Update successful.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_pdk_lapor.php\">";

} 
else {
    //echo $sql;
    $msg2 = "Update unsuccessful. Please try again.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_pdk_lapor_view.php?l_id='".$_POST["l_id"]."'\">";
}

?>
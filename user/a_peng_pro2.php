<?php 


session_start();
require_once('db_connect.php');
require_once('library.php');



  $peng_id= $_POST["peng_id"];
  $peng_message= $_POST["peng_message"];
  $peng_date= $_POST["peng_date"]; 
 

$query3 = "INSERT INTO notif (notif_kk, notif_message, notif_logo, notif_icon, notif_title ) VALUES ('simnag', '$peng_message', '".$_POST['notif_logo']."', '".$_POST['notif_icon']."','".$_POST['notif_title']."')" ;
$result3 = mysqli_query($connection,$query3);



$sql = "UPDATE pengumuman SET 
peng_message='$peng_message',
peng_date='$peng_date'


WHERE peng_id='$peng_id'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Update successful.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_peng.php\">";

} 
else {
    //echo $sql;
    $msg2 = "Update unsuccessful. Please try again.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_peng.php?l_id='".$_POST["l_id"]."'\">";
}

?>
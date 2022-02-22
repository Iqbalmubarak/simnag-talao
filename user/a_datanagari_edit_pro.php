<?php 


session_start();
require_once('db_connect.php');
require_once('library.php');

  $n_id= $_POST["n_idd"];
  $n_address= $_POST["n_address"];
  $n_email= $_POST["n_email"];
  $n_kontak1= $_POST["n_kontak1"];
  $n_kontak2= $_POST["n_kontak2"];
  $n_kontak3= $_POST["n_kontak3"];
  $n_kontak4= $_POST["n_kontak4"];
  
  


    
 


$sql = "UPDATE nagari SET 

n_address='$n_address',
n_email='$n_email',
n_kontak1='$n_kontak1',
n_kontak2='$n_kontak2',
n_kontak3='$n_kontak3',
n_kontak4='$n_kontak4'


WHERE n_id='$n_id'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Update successful.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_datanagari.php\">";

} 
else {
    //echo $sql;
    $msg2 = "Update unsuccessful. Please try again.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_datanagari.php>";
}

?>
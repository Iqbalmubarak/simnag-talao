<?php
session_start();

include 'db_connect.php';

  $query2=mysqli_query($connection, "SELECT max(folder_id) as folder_id from folder");
  $result2=mysqli_fetch_array($query2);
  $folder_id=$result2['folder_id']+1;
  $dir="arsip/$folder_id";
  mkdir($dir);


  $query = "INSERT INTO folder ( folder_name, folder_parent ) VALUES ('".$_POST['folder_name']."','".$_POST['folder_parent']."')" ;
 
$result = mysqli_query($connection,$query);
if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Tambah Folder Baru Berhasil.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_arsip_file.php?folder_id=$folder_id\">";

} 
else {
    //echo $sql;
    $msg2 = "Tambah Folder Baru tidak berhasil.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_arsip_file.php?folder_id=$folder_id\">";
}


  ?>
  
  
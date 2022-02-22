<?php 

if (isset($_POST['submit2']) && isset($_FILES['my_image2'])) {
  include "../db_connect.php";

  echo "<pre>";
  print_r($_FILES['my_image2']);
  echo "</pre>";


  $img_name = $_FILES['my_image2']['name'];
  $img_size = $_FILES['my_image2']['size'];
  $tmp_name = $_FILES['my_image2']['tmp_name'];
  $error = $_FILES['my_image2']['error'];

   $d_kk=$_POST['d_kk'];
   $d_name=$_POST['d_name'];
   $d_nik=$_POST['d_nik'];
   $d_kelamin=$_POST['d_kelamin'];
   $d_password=$_POST['d_password'];
   $d_status=$_POST['d_status'];
   $d_hub=$_POST['d_hub'];
   




  if ($error === 0) {
    if ($img_size > 1250000) {
      $em = "Sorry, your file is too large.";
        header("Location: index.php?error=$em");
    }else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("jpg", "jpeg", "png"); 

      if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
        $img_upload_path = 'foto_kk/'.$new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);

        // Insert into Database
        $sql = "INSERT INTO daftar (d_fotokk, d_kk, d_name, d_nik, d_kelamin, d_password, d_status, d_hub ) 
                VALUES('$new_img_name', '$d_kk' , '$d_name' ,  '$d_nik' ,  '$d_kelamin' ,  '$d_password',  '$d_status' ,  '$d_hub' )";
        mysqli_query($connection, $sql);
        header("Location: index.php");
      }else {
        $em = "You can't upload files of this type";
            header("Location: index.php?error=$em");
      }
    }
  }else {
    $em = "unknown error occurred!";
    header("Location: index.php?error=$em");
  }

}else {
  header("Location: index.php");
}

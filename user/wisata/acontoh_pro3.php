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

   $k_title=$_POST['k_title'];
   $k_date=$_POST['k_date'];
   $k_message=$_POST['k_message'];
   


  if ($error === 0) {
    if ($img_size > 1250000 ) {
      $em = "Maaf File kamu terlalu besar.";
        header("Location: index3.php?error=$em");
    }else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("jpg", "jpeg", "png"); 

      if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
        $img_upload_path = 'kegiatan_img/'.$new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);

        // Insert into Database
        $sql = "INSERT INTO kegiatan(k_image, k_title, k_date, k_message) 
                VALUES('$new_img_name', '$k_title' ,  '$k_date' ,  '$k_message')";
        mysqli_query($connection, $sql);
        header("Location: index3.php");
      }else {
        $em = "You can't upload files of this type";
            header("Location: index3.php?error=$em");
      }
    }
  }else {
    $em = "unknown error occurred!";
    header("Location: index3.php?error=$em");
  }

}else {
  header("Location: index3.php");
}
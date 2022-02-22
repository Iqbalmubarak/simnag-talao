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


   $b_cat=$_POST['b_cat'];
   $b_title=$_POST['b_title'];
   $b_date=$_POST['b_date'];
   $b_message=$_POST['b_message'];
   $b_author=$_POST['b_author'];
   




  if ($error === 0) {
    if ($img_size > 1250000) {
      $em = "Sorry, your file is too large.";
        header("Location: index2.php?error=$em");
    }else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("jpg", "jpeg", "png"); 

      if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
        $img_upload_path = 'berita_img/'.$new_img_name ;
        move_uploaded_file($tmp_name, $img_upload_path);

        // Insert into Database
        $sql = "INSERT INTO berita(b_image, b_cat, b_title, b_date, b_message, b_author) 
                VALUES('$new_img_name', '$b_cat' , '$b_title' ,  '$b_date' ,  '$b_message',  '$b_author' )";
        mysqli_query($connection, $sql);
        header("Location: index2.php");
      }else {
        $em = "You can't upload files of this type";
            header("Location: index2.php?error=$em");
      }
    }
  }else {
    $em = "unknown error occurred!";
    header("Location: index2.php?error=$em");
  }

}else {
  header("Location: ../a_berita_view.php");
}
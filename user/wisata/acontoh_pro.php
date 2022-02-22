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

   $w_name=$_POST['w_name'];
   $w_location=$_POST['w_location'];
   $w_desc=$_POST['w_desc'];
   




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
        $img_upload_path = 'wisata_img/'.$new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);

        // Insert into Database
        $sql = "INSERT INTO wisata(w_image, w_name, w_location, w_desc) 
                VALUES('$new_img_name', '$w_name' , '$w_location' ,  '$w_desc' )";
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
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

   $n_id=$_POST['n_idd'];
   
    


  if ($error === 0) {
    if ($img_size > 1250000) {
      $em = "Sorry, your file is too large.";
        header("Location: a_datanagari.php?error=$em");
    }else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("jpg", "jpeg", "png", "pdf", "doc", "html", "sql", "txt", "php", "docx", "xls"); 

      if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
        $img_upload_path = '../images/utama/'.$new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);

        // Insert into Database
        $sql = "UPDATE nagari SET n_image2='$new_img_name' WHERE n_id='$n_id'";
        mysqli_query($connection, $sql);
        header("Location: a_datanagari.php");
      }else {
        $em = "You can't upload files of this type";
            header("Location: a_datanagari.php?error=$em");
      }
    }
  }else {
    $em = "unknown error occurred!";
    header("Location: a_datanagari.php");
  }

}else {
  header("Location: a_datanagari.php");
}

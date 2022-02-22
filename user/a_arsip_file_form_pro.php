<?php 

if (isset($_POST['submit2']) && isset($_FILES['my_image2'])) {
  include "../db_connect.php";

  echo "<pre>";
  print_r($_FILES['my_image2']);
  echo "</pre>";


  $img_name = $_FILES['my_image2']['name'];
  $img_size = $_FILES['my_image2']['size'];
  $tmp_name = $_FILES['my_image2']['tmp_name'];
  $type_name = $_FILES['my_image2']['type'];
  $error = $_FILES['my_image2']['error'];

   $folder_id=$_POST['folder_idd'];
   
    


  if ($error === 0) {
    if ($img_size > 1250000) {
      $em = "Sorry, your file is too large.";
        header("Location: a_arsip_file_form.php?error=$em");
    }else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("jpg", "jpeg", "png", "pdf", "doc", "html", "sql", "txt", "php", "docx", "xls","xlsx","xlsm","xlsb","xltm","xlt","xla","xlr","zip","rar","tar"); 

      if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
        $img_upload_path = 'arsip/'.$folder_id.'/'.$img_name;
        move_uploaded_file($tmp_name, $img_upload_path);

        // Insert into Database
        $sql = "INSERT INTO files (file_name, folder_id, file_type, file_size, file_tmp ) 
                VALUES('$img_name', '$folder_id', '$img_ex', '$img_size', '$type_name')";
        mysqli_query($connection, $sql);
        header("Location: a_arsip_file.php?folder_id=$folder_id");
      }else {
        $em = "You can't upload files of this type";
            header("Location: a_arsip_file_form.php?error=$em");
      }
    }
  }else {
    $em = "unknown error occurred!";
    header("Location: a_arsip_file_form.php?folder_id=$folder_id");
  }

}else {
  header("Location: a_arsip_file.php?folder_id=$folder_id");
}

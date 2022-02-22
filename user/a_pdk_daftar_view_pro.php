

<?php
session_start();

include 'db_connect.php';

$d_status= $_POST["d_status"];
$d_id= $_POST["d_idd"];


$sql = "UPDATE daftar SET d_id='$d_id', d_status='$d_status' WHERE d_id='$d_id'";

$result2 = mysqli_query($connection,$sql);

if(!empty($result2))
{ 
    //echo $sql;
    $msg2 = "Update successful.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_pdk_daftar.php\">";

} 
else {
    //echo $sql;
    $msg2 = "Update unsuccessful. Please try again.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_pdk_daftar_view.php?d_id='".$_POST["d_id"]."'\">";
}

$query3 = "INSERT INTO notif (notif_kk, notif_message, notif_logo, notif_icon, notif_title ) VALUES ('".$_POST['nokk']."', '".$_POST['notif_message']."', '".$_POST['notif_logo']."', '".$_POST['notif_icon']."','".$_POST['notif_title']."')" ;
$result3 = mysqli_query($connection,$query3);

$query4 = "INSERT INTO login (p_kk, p_password ) VALUES ('".$_POST['nokk']."', '".$_POST['p_password']."')" ;

$result4 = mysqli_query($connection,$query4);

$query = "INSERT INTO penduduk (p_kk, p_nik, p_name, p_password, kelamin, p_hub, p_fotokk ) VALUES ('".$_POST['nokk']."', '".$_POST['p_nik']."', '".$_POST['p_name']."', '".$_POST['p_password']."','".$_POST['p_kelamin']."', '".$_POST['p_hub']."', '".$_POST['p_fotokkk']."')" ;

$result = mysqli_query($connection,$query);
if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Tambah Penduduk Berhasil.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_pdk_daftar.php\">";

} 
else {
    //echo $sql;
    $msg2 = "Tambah penduduk tidak berhasil.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_pdk_daftar_view.php?d_id='".$_POST["d_id"]."'\">";
}

	?>
	
	
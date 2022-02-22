<?php 


session_start();
require_once('db_connect.php');



  $k_nik= $_POST["k_nik"];
  $k_name= $_POST["k_name"];
  $k_l_tempat= $_POST["k_l_tempat"];
  $k_l_tanggal= $_POST["k_l_tanggal"];
  $k_l_tanggal= $_POST["k_l_tanggal"];
  $kelamin= $_POST["kelamin"];
  $k_suku= $_POST["k_suku"];
  $agama= $_POST["agama"];
  $k_alamat= $_POST["k_alamat"];
  $pend= $_POST["pend"];
  $k_pend_nama= $_POST["k_pend_nama"];
  $pek= $_POST["pek"];
  $k_telp= $_POST["k_telp"];
  $k_pek_nama= $_POST["k_pek_nama"];
    $p_kk= $_POST["p_kk"];
    $k_hub= $_POST["k_hub"];

 


$sql = "UPDATE keluarga SET 


k_hub='$k_hub',
k_telp='$k_telp',
p_kk='$p_kk',
k_pek_nama='$k_pek_nama',
pek='$pek',
k_pend_nama='$k_pend_nama',
pend='$pend',
k_alamat='$k_alamat',
agama='$agama',
k_suku='$k_suku',
kelamin='$kelamin',
k_l_tanggal='$k_l_tanggal',
k_l_tempat='$k_l_tempat',
k_nik='$k_nik',
k_name='$k_name'

WHERE k_nik='$k_nik'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Update successful.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_pdk_view.php\">";

} 
else {
    //echo $sql;
    $msg2 = "Update unsuccessful. Please try again.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=a_pdk_view.php?p_id='".$_POST["p_id"]."'\">";
}

?>
<?php 


session_start();
include('ifnotloginadmin2.php');
require_once('../db_connect.php');


 
  $p_kk= $_POST["p_kk"];
  $p_nik2= $_POST["p_nik2"];
  $p_nik= $_POST["p_nik"];
  $p_name= $_POST["p_name"];
  $p_l_tempat= $_POST["p_l_tempat"];
  $p_l_tanggal= $_POST["p_l_tanggal"];
  $p_l_tanggal= $_POST["p_l_tanggal"];
  $kelamin= $_POST["kelamin"];
  $p_suku= $_POST["p_suku"];
  $agama= $_POST["agama"];
  $p_alamat= $_POST["p_alamat"];
  $pend= $_POST["pend"];
  $p_pend_nama= $_POST["p_pend_nama"];
  $pek= $_POST["pek"];
  $p_telp= $_POST["p_telp"];
  $p_pek_nama= $_POST["p_pek_nama"];
 
    $p_hub= $_POST["p_hub"];

 


$sql = "UPDATE penduduk SET 


p_hub='$p_hub',
p_nik='$p_nik',
p_telp='$p_telp',
p_pek_nama='$p_pek_nama',
pek='$pek',
p_pend_nama='$p_pend_nama',
pend='$pend',
p_alamat='$p_alamat',
agama='$agama',
p_suku='$p_suku',
kelamin='$kelamin',
p_l_tanggal='$p_l_tanggal',
p_l_tempat='$p_l_tempat',
p_name='$p_name'

WHERE p_nik2='$p_nik2'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
    //echo $sql;
    $msg2 = "Update successful.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=simnag_biodata.php\">";

} 
else {
    //echo $sql;
    $msg2 = "Update unsuccessful. Please try again.";
    echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0; url=simnag_biodata.php?p_id='".$_POST["p_id"]."'\">";
}

?>
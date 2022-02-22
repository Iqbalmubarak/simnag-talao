<?php 

session_start();
require_once('../db_connect.php');






$sql = "UPDATE penduduk SET p_name='".$pp_name."' WHERE p_kk='".$_POST["pp_kk"]."' AND p_nik='".$_POST["pp_nik"]."'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
	//echo $sql;
	$msg2 = "Update successful.";
	echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
	echo "<meta http-equiv=\"refresh\" content=\"0; url=simnag_biodata_edit.php\">";

} 
else {
	//echo $sql;
	$msg2 = "Update unsuccessful. Please try again.";
	echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
	echo "<meta http-equiv=\"refresh\" content=\"0; url=simnag_biodata_edit.php?id='".$_POST["p_nik"]."'\">";
}

?>
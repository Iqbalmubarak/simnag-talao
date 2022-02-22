<?php
session_start();

include '../db_connect.php';

$sql = "DELETE FROM keluarga WHERE k_nik='".$_REQUEST['k_nik']."'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
?>
    <script>
	alert('Delete successful.');
	window.location.href = "simnag_biodata.php";
	</script>

<?php
} 
else 
{
?>
    <script>
	alert('Delete unsuccessful. Please try again.');
	window.location.href = "simnag_biodata.php";
	</script>
<?php
}
?>
<?php
session_start();

include 'db_connect.php';

$sql = "DELETE FROM daftar WHERE d_id='".$_REQUEST['d_id']."'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
?>
    <script>
    alert('Delete successful.');
    window.location.href = "a_pdk_daftar.php";
    </script>

<?php
} 
else 
{
?>
    <script>
    alert('Delete unsuccessful. Please try again.');
    window.location.href = "a_pdk_daftar.php";
    </script>
<?php
}
?>
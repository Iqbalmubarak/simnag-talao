<?php
session_start();

include 'db_connect.php';

$sql = "DELETE FROM lapor WHERE l_id='".$_REQUEST['l_id']."'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
?>
    <script>
    alert('Delete successful.');
    window.location.href = "a_pdk_lapor.php";
    </script>

<?php
} 
else 
{
?>
    <script>
    alert('Delete unsuccessful. Please try again.');
    window.location.href = "a_pdk_lapor.php";
    </script>
<?php
}
?>
<?php
session_start();

include 'db_connect.php';

$sql = "DELETE FROM admin WHERE ad_id='".$_REQUEST['ad_id']."'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
?>
    <script>
    alert('Delete successful.');
    window.location.href = "super_index.php";
    </script>

<?php
} 
else 
{
?>
    <script>
    alert('Delete unsuccessful. Please try again.');
    window.location.href = "super_index.php";
    </script>
<?php
}
?>
<?php
session_start();

include 'db_connect.php';

$sql = "DELETE FROM perantau WHERE per_id='".$_REQUEST['per_id']."'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
?>
    <script>
    alert('Delete successful.');
    window.location.href = "a_perantau.php";
    </script>

<?php
} 
else 
{
?>
    <script>
    alert('Delete unsuccessful. Please try again.');
    window.location.href = "a_perantau.php";
    </script>
<?php
}
?>
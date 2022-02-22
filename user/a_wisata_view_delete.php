<?php
session_start();

include 'db_connect.php';

$sql = "DELETE FROM wisata WHERE w_id='".$_REQUEST['w_id']."'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
?>
    <script>
    alert('Delete successful.');
    window.location.href = "a_wisata_view.php";
    </script>

<?php
} 
else 
{
?>
    <script>
    alert('Delete unsuccessful. Please try again.');
    window.location.href = "a_wisata_view.php";
    </script>
<?php
}
?>
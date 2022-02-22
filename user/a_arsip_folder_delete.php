


<?php
session_start();

include 'db_connect.php';

$sql = "DELETE FROM folder WHERE folder_id='".$_REQUEST['folder_id']."'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
?>
    <script>
    alert('Delete successful.');
    window.location.href = "a_arsip.php";
    </script>

<?php
} 
else 
{
?>
    <script>
    alert('Delete unsuccessful. Please try again.');
    window.location.href = "a_arsip.php";
    </script>
<?php
}








?>
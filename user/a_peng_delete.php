<?php
session_start();

include 'db_connect.php';

$sql = "DELETE FROM pengumuman WHERE peng_id='".$_REQUEST['peng_id']."'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
?>
    <script>
    alert('Delete successful.');
    window.location.href = "a_peng.php";
    </script>

<?php
} 
else 
{
?>
    <script>
    alert('Delete unsuccessful. Please try again.');
    window.location.href = "a_peng.php";
    </script>
<?php
}
?>
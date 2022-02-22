<?php
session_start();

include 'db_connect.php';

$sql = "DELETE FROM surat WHERE s_id='".$_REQUEST['s_id']."'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
?>
    <script>
    alert('Delete successful.');
    window.location.href = "a_surat.php";
    </script>

<?php
} 
else 
{
?>
    <script>
    alert('Delete unsuccessful. Please try again.');
    window.location.href = "a_surat.php";
    </script>
<?php
}
?>
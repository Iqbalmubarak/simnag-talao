<?php
session_start();

include 'db_connect.php';

$sql = "DELETE FROM penduduk WHERE p_kk='".$_REQUEST['p_kk']."'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
?>
    <script>
    alert('Delete successful.');
    window.location.href = "a_pdk_view.php";
    </script>

<?php
} 
else 
{
?>
    <script>
    alert('Delete unsuccessful. Please try again.');
    window.location.href = "a_pdk_view.php";
    </script>
<?php
}
?>
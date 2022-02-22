<?php
session_start();

include 'db_connect.php';

$sql = "DELETE FROM pn_pdk WHERE pn_pdk_id='".$_REQUEST['pn_pdk_id']."'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
?>
    <script>
    alert('Delete successful.');
    window.location.href = "a_profilnagari.php";
    </script>

<?php
} 
else 
{
?>
    <script>
    alert('Delete unsuccessful. Please try again.');
    window.location.href = "a_profilnagari.php";
    </script>
<?php
}
?>
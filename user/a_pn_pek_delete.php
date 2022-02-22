<?php
session_start();

include 'db_connect.php';

$sql = "DELETE FROM pn_pek WHERE pn_pek_id='".$_REQUEST['pn_pek_id']."'";

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
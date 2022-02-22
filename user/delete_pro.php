<?php
session_start();

include 'db_connect.php';

$sql = "DELETE FROM marks WHERE m_id='".$_REQUEST['m_id']."'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
?>
    <script>
    alert('Delete successful.');
    window.location.href = "a_berita_view.php";
    </script>

<?php
} 
else 
{
?>
    <script>
    alert('Delete unsuccessful. Please try again.');
    window.location.href = "a_berita_view.php";
    </script>
<?php
}
?>
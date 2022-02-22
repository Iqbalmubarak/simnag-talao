

<?php
session_start();

include 'db_connect.php';

$query3 = "INSERT INTO notif (notif_kk, notif_message, notif_logo, notif_icon, notif_title ) VALUES ('".$_REQUEST['l_pelaporkk']."', 'Pengaduan anda tentang ( ".$_REQUEST['l_title']." ) berhasil diproses ! Terima Kasih atas kontribusinya', '', 'bg-green','".$_REQUEST['l_type']."')" ;
$result3 = mysqli_query($connection,$query3);


$sql = "UPDATE lapor SET l_badge='badge-success', l_status='Sudah Diproses' WHERE l_id='".$_REQUEST['l_id']."'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
?>
    <script>
    alert('Update successful.');
    window.location.href = "a_pdk_lapor.php";
    </script>

<?php
} 
else 
{
?>
    <script>
    alert('Update unsuccessful. Please try again.');
    window.location.href = "a_pdk_lapor.php";
    </script>
<?php
}

?>
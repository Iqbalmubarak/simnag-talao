

<?php
session_start();

include 'db_connect.php';

$query3 = "INSERT INTO notif (notif_kk, notif_message, notif_logo, notif_icon, notif_title ) VALUES ('".$_REQUEST['s_p_kk']."', 'Permohonan cetak surat ( ".$_REQUEST['s_title']." ) Tidak Berhasil !. Silahkan tanya operator Nagari', '', 'bg-orange','Permohonan Surat')" ;
$result3 = mysqli_query($connection,$query3);

$sql = "UPDATE surat SET s_badge='badge-danger', s_status='Ditolak' WHERE s_id='".$_REQUEST['s_id']."'";

$result = mysqli_query($connection,$sql);

if(!empty($result))
{ 
?>
    <script>
    alert('Update successful.');
    window.location.href = "a_surat.php";
    </script>

<?php
} 
else 
{
?>
    <script>
    alert('Update unsuccessful. Please try again.');
    window.location.href = "a_surat.php";
    </script>
<?php
}

?>
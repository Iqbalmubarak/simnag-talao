

<?php
session_start();

include 'db_connect.php';

$query3 = "INSERT INTO notif (notif_kk, notif_message, notif_logo, notif_icon, notif_title ) VALUES ('".$_POST['s_p_kk']."', 'Permohonan cetak surat ( ".$_POST['s_title']." ) berhasil !. Silahkan segera mengambil surat di kantor Wali Nagari', '', 'bg-orange','Permohonan Surat')" ;
$result3 = mysqli_query($connection,$query3);

$query3 = "INSERT INTO surat_ttd (surat_id, ttd_id ) VALUES ('".$_POST['s_id']."','".$_POST['ttd_id']."')" ;
$result3 = mysqli_query($connection,$query3);


$sql = "UPDATE surat SET s_badge='badge-success', s_status='Sudah Diproses' WHERE s_id='".$_POST['s_id']."'";

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
<?php
session_start();
include('ifnotloginadmin.php');
require_once('db_connect.php');
// require_once('library.php');


$ad_email = $_SESSION['ad_email'];
$sqlquery = "SELECT * FROM admin
WHERE ad_email='$ad_email' ";
$result = $connection->query($sqlquery) or die($connection->error);
$sqlqueryresult = $connection ->query($sqlquery);

$sqlquery2 = "SELECT * FROM surat WHERE s_id='".$_GET["s_id"]."'  ";
$sqlqueryresult2 = mysqli_query($connection,$sqlquery2);

$sqlsurat = "SELECT COUNT(*) AS `total3` FROM `surat` WHERE s_status='Dalam Proses' ";
$surat = $connection ->query($sqlsurat);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Rekomendasi e-KTP</title>
	<style type="text/css">

	table {
		border-style: double;
		border-width: 3px;
		border-color: white;
	}
	table tr .text2 {
		text-align: right;
		font-size: 14px;
	}
	table tr .text {
		text-align: center;
		font-size: 14px;
	}
	table tr td {
		font-size: 14px;
	}

	@page { size: auto;  margin: 0mm; }

</style>
</head>
<body onload="window.print()">
	<?php                           
	foreach ($sqlqueryresult2 as $key) {

		$s_id = $key['s_id'];
		$s_status = $key['s_status'];
		$s_date = $key['s_date'];
		$s_p_kk = $key['s_p_kk'];
		$s_p_nik = $key['s_p_nik'];

		$s_p_name = $key['s_p_name'];
		$s_p_tanggal_l = $key['s_p_tanggal_l'];
		$s_p_tempat_l = $key['s_p_tempat_l'];

		$s_p_kelamin = $key['s_p_kelamin'];

		$s_p_agama = $key['s_p_agama'];
		$s_p_status = $key['s_p_status'];
		$s_p_pek = $key['s_p_pek'];
		$s_p_alamat = $key['s_p_alamat'];
		
$p_jabatan=NULL;
$p_nama=NULL;
  $sql5 = "SELECT * FROM surat_ttd INNER JOIN penandatangan ON surat_ttd.ttd_id=penandatangan.id WHERE surat_id='".$_GET["s_id"]."'";
  $result7 = $connection ->query ($sql5);
  while ($key=$result7 -> fetch_assoc()) {
    $p_nama = $key['nama'];
    $p_jabatan = $key['jabatan'];
}





	} ?>
	<center><br><br><br>
		<table>
			<tr>
				<td><img src="assets/logo.png" width="90" height="100"></td>
				<td>
					<center>
						<font size="5">PEMERINTAH KABUPATEN SOLOK SELATAN</font><br>
						<font size="5">KECAMATAN SANGIR BALAI JANGGO</font><br>
						<font size="5">NAGARI TALAO SUNGAI KUNYIT</font><br>
						<font size="2">Alamat : Jalan Raya Talao&emsp;&emsp;&emsp;&emsp;Email : talaookee@gmail.com&emsp;&emsp;&emsp;&emsp;Kode Pos : 27781</font><br>
					</center>
				</td>
			</tr>
			<tr>
				<td colspan="20"><hr></td>
			</tr>
		</table>
		<table width="625">
			<tr class="text2">
				<td>Nomer</td>
				<td widht="100">: 476/<?php echo $s_id ?>/Kepend/WN.TSK 2021</td>
				<td widht="500">Talao, <?php echo $s_date ?></td>
			</tr>
			<tr>
				<td>Lamp</td>
				<td width="564">: -</td>
				<td width="564">Kepada Yth,</td>
			</tr>
			<tr>
				<td>Perihal</td>
				<td width="564">: <b>Rekomendasi Pembuatan KK</b></td>
				<td width="564"><b>Dinas Kependudukan dan</b></td>
			</tr>
			<tr>
				<td></td>
				<td width="564"></td>
				<td width="564"><b>Pencatatan Sipil</b></td>
			</tr>
			<tr>
				<td></td>
				<td width="564"></td>
				<td width="564">di</td>
			</tr>
			<tr>
				<td></td>
				<td width="564"></td>
				<td width="564">&nbsp &nbsp Padang Aro</td>
			</tr>
		</table>
		<table width="625">
			<tr>
				<td>
					<font size="2">Dengan  hormat,</font>
				</td>
			</tr>
		</table>
		<table width="625">
			<tr>
				<td>
					<font size="2">&nbsp &nbsp &nbsp &nbsp Bersama ini kami Mohon Bapak kiranya dapat membuatkan <b>Kartu Keluarga (KK)</b> baru kepada Warga kami yang tersebut dibawah ini :</font>
				</td>
			</tr>
		</table>
		<br>
	</table>
	<!-- Database -->
	<table>
		<tr class="text2">
			<td width="50"></td>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td width="541"> <b><?php echo $s_p_name ?></b></td>
		</tr>
		<tr>
			<td width="50"></td>
			<td>NIK</td>
			<td>:</td>
			<td width="525"> <?php echo $s_p_nik ?></td>
		</tr>
		<tr>
			<td width="50"></td>
			<td>Tempat/Tgl lahir</td>
			<td>:</td>
			<td width="525"> <?php echo $s_p_tempat_l ?>, <?php echo $s_p_tanggal_l ?></td>
		</tr>
		<tr>
			<td width="50"></td>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td width="525"> <?php echo $s_p_kelamin ?></td>
		</tr>
		<tr>
			<td width="50"></td>
			<td>Agama</td>
			<td>:</td>
			<td width="525"> <?php echo $s_p_agama ?></td>
		</tr>
		<tr>
			<td width="50"></td>
			<td>Status</td>
			<td>:</td>
			<td width="525"> <?php echo $s_p_status ?></td>
		</tr>
		<tr>
			<td width="50"></td>
			<td>Pekerjaan</td>
			<td>:</td>
			<td width="525"> <?php echo $s_p_pek ?></td>
		</tr>
		<tr>
			<td width="50"></td>
			<td>Alamat</td>
			<td>:</td>
			<td width="525"> <?php echo $s_p_alamat ?></td>
		</tr>
	</table>
	<!-- Database -->
	<br>
	<table width="625">
		<tr>
			<td>
				<font size="2">Demikian surat ini kami sampaikan, atas bantuan Bapak diucapkan terima kasih.</font>
			</td>
		</tr>
	</table>
	<br>
	<table width="625">
		<tr>
			<td width="430"><br><br><br><br></td>
			<td class="text" align="center"> 
				<?php if($p_jabatan!=NULL){ echo $p_jabatan ;} ?><br><br><br><br><b><u><?php if($p_nama!=NULL){ echo $p_nama ;} ?></u></b>
			</td>
		</tr>
	</table>
</center>
</body>
<script>

setTimeout(window.close, 500);
</script>
</html>
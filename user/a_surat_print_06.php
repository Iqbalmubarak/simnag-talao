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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surat Keterangan Berdomisili</title>
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

    .left {
      text-align: left;
    }

    .right {
      text-align: right;
    }

    .center {
      text-align: center;
    }

    .justify {
      text-align: justify;
    }

    @page {
      size: auto;
      margin: 0mm;
    }
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
		$s6_hari = $key['s6_hari'];
		$s6_tanggal = $key['s6_tanggal'];
		$s6_jam = $key['s6_jam'];
		$s6_tempat = $key['s6_tempat'];
		$s6_alasan = $key['s6_alasan'];
	}

$p_jabatan=NULL;
$p_nama=NULL;
  $sql5 = "SELECT * FROM surat_ttd INNER JOIN penandatangan ON surat_ttd.ttd_id=penandatangan.id WHERE surat_id='".$_GET["s_id"]."'";
  $result7 = $connection ->query ($sql5);
  while ($key=$result7 -> fetch_assoc()) {
    $p_nama = $key['nama'];
    $p_jabatan = $key['jabatan'];
} 
?>

  <center>
    <table>
      <tr>
        <td><img src="assets/logo.png" width="90" height="90"></td>
        <td>
          <center>
            <font size="5">PEMERINTAH KABUPATEN SOLOK SELATAN</font><br>
            <font size="5">KECAMATAN SANGIR BALAI JANGGO</font><br>
            <font size="5">NAGARI TALAO SUNGAI KUNYIT</font><br>
            <font size="2">Alamat : Jalan Raya Talao</font> &emsp;&emsp;&emsp;
            <font size="2">E-mail : talaooke@gmail.com</font> &emsp;&emsp;&emsp;
            <font size="2">Kode Pos : 27781</font>
          </center>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <hr>
        </td>
      </tr>
      <table width="625">
        <tr>
          <td>
            <center>
              <font size="4"><U><b>SURAT KETERANGAN MENINGGAL DUNIA</b></U></font><br>
              <font size="3">Nomor : 470/&emsp;&emsp;/Kepend/WN.TSK/2021</font>
            </center>
          </td>
        </tr>
      </table>
    </table>
    <table width="625">
      <tr>
        <td>
          <p style="text-indent:50px;">Yang bertanda tangan dibawah ini Wali Nagali Talao Sungai Kunyit Kecamatan Sangir
            Balai
            Janggo Kabupaten Solok Selatan dengan ini menerangkan bahwa:
          </p>
        </td>
      </tr>
    </table>
    </table>
    <table width="625">
      <tr class="left">
        <td>&emsp;&emsp;&emsp;Nama</td>
        <td>:</td>
        <td width=70%><b><?php echo $s_p_name; ?></b></td>
      </tr>
      <tr class="left">
        <td>&emsp;&emsp;&emsp;Tempat Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $s_p_tempat_l.", ".$s_p_tanggal_l; ?></td>
      </tr>
      <tr class="left">
        <td>&emsp;&emsp;&emsp;Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $s_p_kelamin; ?></td>
      </tr>
      <tr class="left">
        <td>&emsp;&emsp;&emsp;Agama</td>
        <td>:</td>
        <td><?php echo $s_p_agama; ?></td>
      </tr>
      <tr class="left">
        <td>&emsp;&emsp;&emsp;Alamat</td>
        <td>:</td>
        <td><?php echo $s_p_alamat; ?></td>
      </tr>
      </font>
    </table>
    <table width="625">
      <tr>
        <td>
          <p style="text-indent:50px;">Yang mana nama tersebut telah meninggal dunia pada :
          </p>
        </td>
      </tr>
    </table>
    <table width="625">
      <tr class="left">
        <td>&emsp;&emsp;&emsp;Hari</td>
        <td>:</td>
        <td width=70%><?php echo $s6_hari; ?></td>
      </tr>
      <tr class="left">
        <td>&emsp;&emsp;&emsp;Tanggal</td>
        <td>:</td>
        <td><?php echo $s6_tanggal; ?></td>
      </tr>
      <tr class="left">
        <td>&emsp;&emsp;&emsp;Jam</td>
        <td>:</td>
        <td><?php echo $s6_jam; ?></td>
      </tr>
      <tr class="left">
        <td>&emsp;&emsp;&emsp;Tempat</td>
        <td>:</td>
        <td><?php echo $s6_tempat; ?></td>
      </tr>
      <tr class="left">
        <td>&emsp;&emsp;&emsp;Meninggal karena</td>
        <td>:</td>
        <td><?php echo $s6_alasan; ?></td>
      </tr>
      </font>
    </table>
    <table width="625">
      <tr>
        <td>
          <p style="text-indent:50px;">Demikian Surat Keterangan Meninggal Dunia ini dibuat, untuk dapat dipergunakan
            sebagaimana mestinya.
          </p>
        </td>
      </tr>
    </table>
    <br>
    <table width="625">
      <tr>
        <td width="430"><br><br><br><br></td>
        <td width="300">
          <table>
            <tr>
              <td width="100">Dibuat di</td>
              <td>:</td>
              <td>Talao Sungai Kunyit</td>
            </tr>
            <tr>
              <td width="100">Pada Tanggal</td>
              <td>:</td>
              <td><?php echo $s_date ?></td>
            </tr>
            <tr>
              <td colspan="3">
                <hr>
              </td>
            </tr>
            <tr>
              <td colspan="3">a.n Pj Wali Nagari Talao Sungai kunyit</td>
            </tr>
            <tr>
              <td colspan="3" style="text-align: center;"><?php if($p_jabatan!=NULL){ echo $p_jabatan ;} ?></td>
            </tr>

          </table>
        </td>

      </tr>
      <tr>
        <td width="430"><br><br><br><br></td>
        <td width="300">
          <table>
            <tr>
              <td colspan="3">
              <td><br><br><br>
                <center><b><u>
                      <font style="text-align: center;margin-left: 50px;"><?php if($p_nama!=NULL){ echo $p_nama ;} ?></font>
                    </u></b></center>
              </td>
        </td>
      </tr>
    </table>
    </td>
    </tr>
    </table>
  </center>

</body>
<script>
  setTimeout(window.close, 500);
</script>

</html>
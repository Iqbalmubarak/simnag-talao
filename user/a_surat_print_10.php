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
		$s_p_tujuan = $key['s_p_tujuan'];
		$s_p_jorong = $key['s_p_jorong'];
	}
  $sql4 = "SELECT * FROM surat_ternak WHERE surat_id='$s_id'";
  $result6 = $connection ->query ($sql4);
  while ($key=$result6 -> fetch_assoc()) {
    $s10_warnat = $key['s10_warnat'];
    $s10_jkt = $key['s10_jkt'];
    $s10_umurt = $key['s10_umurt'];
    $s10_tandukt = $key['s10_tandukt'];
    $s10_sopir = $key['s10_sopir'];
    $s10_umurs = $key['s10_umurs'];
    $s10_peks = $key['s10_peks'];
    $s10_alamats = $key['s10_alamats'];
    $s10_kendaraans = $key['s10_kendaraans'];
    $s10_nopols = $key['s10_nopols'];
    $s10_tujuans = $key['s10_tujuans'];
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
        <td><img src="assets/logo.png" width="90" height="90">
        </td>
        <td>
          <center>
            <font size="5">PEMERINTAH KABUPATEN SOLOK
              SELATAN</font><br>
            <font size="5">KECAMATAN SANGIR BALAI JANGGO
            </font><br>
            <font size="5">NAGARI TALAO SUNGAI KUNYIT</font>
            <br>
            <font size="2">Alamat : Jalan Raya
              Talao&emsp;&emsp;&emsp;&emsp;Email :
              talaookee@gmail.com&emsp;&emsp;&emsp;&emsp;Kode
              Pos : 27781</font><br>
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
              <font size="3"><U><b>SURAT KETERANGAN
                    KEPEMILIKAN TERNAK</b></U>
              </font><br>
              <font size="3">Nomor :
                524/&emsp;&emsp;/WN.TSK/2021</font>
            </center>
          </td>
        </tr>
      </table>
    </table>
    <br>
    <table width="625">
      <tr>
        <td>
          Yang bertanda tangan di bawah ini Wali Nagari Talao
          Sungai Kunyit
          Kecamatan Sangir Balai Janggo Kabupaten Solok
          Selatan dengan ini menerangkan bahwa :
        </td>
      </tr>
    </table>
    </table>
    <table width="625">
      <tr class="left">
        <td>&emsp;&emsp;&emsp;Nama</td>
        <td>:</td>
        <td width=70%><?php echo $s_p_name; ?>
        </td>
      </tr>
      <tr>
        <td>&emsp;&emsp;&emsp;Umur</td>
        <td>:</td>
        <td><?php echo $s_p_name; ?></td>
      </tr>
      <tr>
        <td>&emsp;&emsp;&emsp;Pekerjaan</td>
        <td>:</td>
        <td><?php echo $s_p_pek; ?></td>
      </tr>
      <tr>
        <td>&emsp;&emsp;&emsp;Alamat</td>
        <td>:</td>
        <td><?php echo $s_p_alamat; ?></td>
      </tr>
    </table>
    <table width="625">
      <tr>
        <td>
          Orang tersebut diatas betul memiliki Ternak Sapi
          dengan ciri-ciri sebagai berikut :
        </td>
      </tr>
    </table>
    <table width="625">
      <tr class="left">
        <td>&emsp;&emsp;&emsp;Warna </td>
        <td>:</td>
        <td width=70%><?php echo $s10_warnat; ?></td>
      </tr>
      <tr>
        <td>&emsp;&emsp;&emsp;Jenis Kelamin</td>
        <td>:</td>
        <td width="400"><?php echo $s10_jkt; ?></td>
      </tr>
      <tr>
        <td>&emsp;&emsp;&emsp;Umur</td>
        <td>:</td>
        <td width="400"><?php echo $s10_umurt; ?></td>
      </tr>
      <tr>
        <td>&emsp;&emsp;&emsp;Tanduk</td>
        <td>:</td>
        <td width="400"><?php echo $s10_tandukt; ?></td>
      </tr>
    </table>
    <table width="625">
      <tr>
        <td>
          Ternak sapi tersebut dibawa oleh :
        </td>
      </tr>
    </table>
    <table width="625">
      <tr class="left">
        <td>&emsp;&emsp;&emsp;Nama Sopir </td>
        <td>:</td>
        <td width=70%><?php echo $s10_sopir; ?></td>
      </tr>
      <tr>
        <td>&emsp;&emsp;&emsp;Umur</td>
        <td>:</td>
        <td><?php echo $s10_umurs; ?></td>
      </tr>
      <tr>
        <td>&emsp;&emsp;&emsp;Pekerjaan</td>
        <td>:</td>
        <td><?php echo $s10_peks; ?></td>
      </tr>
      <tr>
        <td>&emsp;&emsp;&emsp;Alamat</td>
        <td>:</td>
        <td><?php echo $s10_alamats; ?></td>
      </tr>
      <tr>
        <td>&emsp;&emsp;&emsp;Jenis Kendaraan</td>
        <td>:</td>
        <td><?php echo $s10_kendaraans; ?></td>
      </tr>
      <tr>
        <td>&emsp;&emsp;&emsp;Nomor Polisi</td>
        <td>:</td>
        <td><?php echo $s10_nopols; ?></td>
      </tr>
      <tr>
        <td>&emsp;&emsp;&emsp;Tujuan</td>
        <td>:</td>
        <td><?php echo $s10_tujuans; ?></td>
      </tr>
    </table>
    <table width="625">
      <tr>
        <td>
          Demikian surat keterangan kepemilikan ternak ini
          dikeluarkan, agar dapat di pergunakan sebagaimana
          mestinya.
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
              <td width="100">Dikeluarkan di</td>
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
              <td colspan="3">a.n Pj Wali Nagari Talao
                Sungai kunyit</td>
            </tr>
            <tr>
              <td colspan="3" style="text-align: center;">
                <?php if($p_jabatan!=NULL){ echo $p_jabatan ;} ?></td>
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
                      <font style="text-align: center;margin-left: 50px;">
                        <?php if($p_nama!=NULL){ echo $p_nama ;} ?></font>
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
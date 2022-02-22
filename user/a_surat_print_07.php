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
		$s7_kelurahan = $key['s7_kelurahan'];
		$s7_kecamatan = $key['s7_kecamatan'];
		$s7_kabupaten = $key['s7_kabupaten'];
		$s7_provinsi = $key['s7_provinsi'];
		$s7_pindah = $key['s7_pindah'];
		$s7_p_kelurahan = $key['s7_p_kelurahan'];
		$s7_p_kecamatan = $key['s7_p_kecamatan'];
		$s7_p_kabupaten = $key['s7_p_kabupaten'];
		$s7_p_provinsi = $key['s7_p_provinsi'];
		$s7_p_alasan = $key['s7_p_alasan'];
		$s7_p_pengikut = $key['s7_p_pengikut'];

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
        <td><img src="../assets/images/logo_solsel.PNG" width="90" height="90">
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
        <td colspan="20">
          <hr>
        </td>
      </tr>
    </table>
    <table width="625">
      <tr class="text2">
        <td>Nomer</td>
        <td widht="200">: 476/&emsp;/Kepend/WN.TSK 2021</td>
        <td widht="500">Talao, 25 Oktober 2021</td>
      </tr>
      <tr>
        <td>Lamp</td>
        <td width="564">: -</td>
        <td width="564">Kepada Yth,</td>
      </tr>
      <tr>
        <td>Perihal</td>
        <td width="564">: <b>Rekomendasi Pindah</b></td>
        <td width="564"><b>Camat Sangir Balai Janggo</b></td>
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
          <font size="2">Dengan hormat,</font>
        </td>
      </tr>
    </table>
    <table width="625">
      <tr>
        <td>
          <font size="2">&nbsp &nbsp &nbsp &nbsp Yang bertanda
            tangan dibawah ini Wali Nagari Talao Sungai
            Kunyit Kecamatan Sangir Balai Janggo Kabupaten
            Solok Selatan, dengan ini menerangkan bahwa :
          </font>
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
        <td width="541"><b><?php echo $s_p_name; ?></b></td>
      </tr>
      <tr>
        <td width="50"></td>
        <td>NIK</td>
        <td>:</td>
        <td width="525"><?php echo $s_p_nik; ?></td>
      </tr>
      <tr>
        <td width="50"></td>
        <td>Tempat lahir</td>
        <td>:</td>
        <td width="525"> <?php echo $s_p_tempat_l ; ?>
        </td>
      </tr>
      <tr>
        <td width="50"></td>
        <td>Tgl lahir</td>
        <td>:</td>
        <td width="525"> <?php echo $s_p_tanggal_l ; ?>
        </td>
      </tr>
      <tr>
        <td width="50"></td>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td width="525"><?php echo $s_p_kelamin ; ?></td>
      </tr>
      <tr>
        <td width="50"></td>
        <td>Agama</td>
        <td>:</td>
        <td width="525"><?php echo $s_p_agama ; ?></td>
      </tr>
      <tr>
        <td width="50"></td>
        <td>Status</td>
        <td>:</td>
        <td width="525"><?php echo $s_p_status ; ?></td>
      </tr>
      <tr>
        <td width="50"></td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td width="525"><?php echo $s_p_pek ; ?></td>
      </tr>
      <tr>
        <td width="50"></td>
        <td>Alamat</td>
        <td>:</td>
        <td width="525"><?php echo $s_p_alamat ; ?></td>
      </tr>
      <tr>
        <td width="50"></td>
        <td></td>
        <td></td>
        <td width="525"></td>
      </tr>
      <tr>
        <td width="50"></td>
        <td></td>
        <td></td>
        <td width="525"></td>
      </tr>
      <tr>
        <td width="50"></td>
        <td></td>
        <td></td>
        <td width="525"></td>
      </tr>

      <tr>
        <td width="50"></td>
        <td></td>
        <td></td>
        <td width="525">
          <table style="margin-top: -10px; margin-left: -5px;">
            <tr>
              <td>Desa/Kelurahan</td>
              <td>:</td>
              <td><?php echo $s7_kelurahan; ?></td>
            </tr>
            <tr>
              <td>Kecamatan </td>
              <td>:</td>
              <td><?php echo $s7_kecamatan ; ?></td>
            </tr>
            <tr>
              <td>Kabupaten </td>
              <td>:</td>
              <td><?php echo $s7_kabupaten ; ?></td>
            </tr>
            <tr>
              <td>Provinsi </td>
              <td>:</td>
              <td><?php echo $s7_provinsi ; ?></td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td width="50"></td>
        <td>Bermaksud Pindah ke </td>
        <td>:</td>
        <td width="525">
          <?php echo  $s7_pindah; ?>
        </td>
      </tr>
      <tr>
        <td width="50"></td>
        <td></td>
        <td></td>
        <td width="525"></td>
      </tr>
      <tr>
        <td width="50"></td>
        <td></td>
        <td></td>
        <td width="525"></td>
      </tr>
      <tr>
        <td width="50"></td>
        <td></td>
        <td></td>
        <td width="525"></td>
      </tr>
      <tr>
        <td width="50"></td>
        <td></td>
        <td></td>
        <td width="525"></td>
      </tr>
      <tr>
        <td width="50"></td>
        <td></td>
        <td></td>
        <td width="525">
          <table style="margin-top: -10px; margin-left: -5px;">
            <tr>
              <td>Desa/Kelurahan</td>
              <td>:</td>
              <td><?php echo $s7_p_kelurahan ; ?></td>
            </tr>
            <tr>
              <td>Kecamatan </td>
              <td>:</td>
              <td><?php echo $s7_p_kecamatan ; ?></td>
            </tr>
            <tr>
              <td>Kabupaten </td>
              <td>:</td>
              <td><?php echo $s7_p_kabupaten ; ?></td>
            </tr>
            <tr>
              <td>Provinsi </td>
              <td>:</td>
              <td><?php echo $s7_p_provinsi ; ?></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td width="50"></td>
        <td>Alasan Pindah </td>
        <td>:</td>
        <td width="525">
          <?php echo $s7_p_alasan ; ?>
        </td>
      </tr>
      <tr>
        <td width="50"></td>
        <td>Pengikut </td>
        <td>:</td>
        <td width="525">
          <?php echo $s7_p_pengikut ; ?>
        </td>
      </tr>
    </table>
    <!-- Database -->
    <br>
    <table width="625">
      <tr>
        <td>
          <font size="2">Demikian surat ini kami berikan
            kepada yang bersangkutan untuk dapat
            dipergunakan sebagaimana mestinya.</font>
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
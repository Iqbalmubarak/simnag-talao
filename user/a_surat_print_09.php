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
  $sql4 = "SELECT * FROM surat_tanah WHERE surat_id='$s_id'";
  $result6 = $connection ->query ($sql4);
  while ($key=$result6 -> fetch_assoc()) {
    $s9_nama2 = $key['s9_nama2'];
    $s9_nik2 = $key['s9_nik2'];
    $s9_tempat2 = $key['s9_tempat2'];
    $s9_tanggal2 = $key['s9_tanggal2'];
    $s9_pekerjaan2 = $key['s9_pekerjaan2'];
    $s9_jk2 = $key['s9_jk2'];
    $s9_suku2 = $key['s9_suku2'];
    $s9_alamat2 = $key['s9_alamat2'];
    $s9_utara = $key['s9_utara'];
    $s9_selatan = $key['s9_selatan'];
    $s9_barat = $key['s9_barat'];
    $s9_timur = $key['s9_timur'];
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
    <table width="625">
      <tr>
        <td>
          <center>
            <font size="3"><U><b>SURAT KETERANGAN JUAL BELI
                  TANAH</b></U></font><br>
          </center>
        </td>
      </tr>
    </table>
    <br>
    <table width="625">
      <tr>
        <td>
          <font size="2">Yang bertanda tangan di bawah ini
            warga Nagari Talao Sungai Kunyit selaku PIHAK
            PERTAMA ( I ) :
          </font>
        </td>
      </tr>
    </table>
    </table>
    <!-- Database -->
    <table>
      <tr class="text2">
        <td width="80"></td>
        <td>Nama</td>
        <td>:</td>
        <td width="541"><?php echo $s_p_name; ?></td>
      </tr>
      <tr>
        <td width="80"></td>
        <td>NIK</td>
        <td>:</td>
        <td width="525"><?php echo $s_p_nik; ?></td>
      </tr>
      <tr>
        <td width="80"></td>
        <td>Tempat lahir</td>
        <td>:</td>
        <td width="525"><?php echo $s_p_tempat_l; ?></td>
      </tr>
      <tr>
        <td width="80"></td>
        <td>Tanggal lahir</td>
        <td>:</td>
        <td width="525"><?php echo $s_p_tanggal_l; ?></td>
      </tr>
      <tr>
        <td width="80"></td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td width="525"><?php echo $s_p_pek; ?></td>
      </tr>
      <tr>
        <td width="80"></td>
        <td>Alamat</td>
        <td>:</td>
        <td width="525"><?php echo $s_p_alamat; ?></td>
      </tr>
    </table>
    </table>
    <!-- Database -->
    <br>
    <table width="625">
      <tr>
        <td>
          <font size="2">&emsp;&emsp; Dengan ini menerangkan
            bahwa saya telah menjual tanah milik saya
            sendiri berupa
            sebidang Tanah Kebun Kopi dengan luas ± 2 Ha
            yang di bayar secara kontan dengan harga
            <b>Rp.80.000.000 (Lima
              Puluh Juta Rupiah)</b> kepada nama yang
            tersebut di bawah ini selaku PIHAK KEDUA (II) :
          </font>
        </td>
      </tr>
    </table>
    </table>
    <!-- Database -->
    <table>
      <tr class="text2">
        <td width="80"></td>
        <td>Nama</td>
        <td>:</td>
        <td width="541"> <?php echo $s9_nama2; ?></td>
      </tr>
      <tr>
        <td width="80"></td>
        <td>NIK</td>
        <td>:</td>
        <td width="525"> <?php echo $s9_nik2; ?></td>
      </tr>
      <tr>
        <td width="80"></td>
        <td>Tempat lahir</td>
        <td>:</td>
        <td width="525"> <?php echo $s9_tempat2; ?></td>
      </tr>
      <tr>
        <td width="80"></td>
        <td>Tanggal lahir</td>
        <td>:</td>
        <td width="525"> <?php echo $s9_tanggal2; ?></td>
      </tr>
      <tr>
        <td width="80"></td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td width="525"><?php echo $s9_pekerjaan2; ?></td>
      </tr>
      <tr>
        <td width="80"></td>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td width="525"> <?php echo $s9_jk2; ?></td>
      </tr>
      <tr>
        <td width="80"></td>
        <td>Suku</td>
        <td>:</td>
        <td width="525"><?php echo $s9_suku2; ?></td>
      </tr>
      <tr>
        <td width="80"></td>
        <td>Alamat</td>
        <td>:</td>
        <td width="525">
          <?php echo $s9_alamat2; ?>
        </td>
      </tr>
    </table>
    <!-- Database -->
    <table width="625">
      <tr>
        <td>
          <font size="2">&emsp;&emsp;Jual beli ini terjadi
            atas dasar suka sama suka tanpa ada paksaan dari
            pihak
            manapun, tanah tersebut berada di <b>Sako Kanan
              Jorong</b> Talao Nagari Talao Sungai Kunyit
            Kecamatan Sangir
            Balai Janggo Kabupaten Solok Selatan, dengan
            batas sepadan sebagai berikut</font>
        </td>
      </tr>
    </table>
    <!-- Database -->
    <table>
      <tr class="text2">
        <td width="150"></td>
        <td width="100">Sebelah Utara</td>
        <td>:</td>
        <td width="541"><?php echo $s9_utara; ?></td>
      </tr>
      <tr class="text2">
        <td width="150"></td>
        <td>Sebelah Selatan</td>
        <td>:</td>
        <td width="541"><?php echo $s9_selatan; ?></td>
      </tr>
      <tr class="text2">
        <td width="150"></td>
        <td>Sebelah Barat</td>
        <td>:</td>
        <td width="541"> <?php echo $s9_barat; ?></td>
      </tr>
      <tr class="text2">
        <td width="150"></td>
        <td>Sebelah Timur</td>
        <td>:</td>
        <td width="541"><?php echo $s9_timur; ?></td>
      </tr>
    </table>
    <!-- Database -->
    <br>
    <table width="625">
      <tr>
        <td>
          <font size="2">&emsp;&emsp;Demikian surat keterangan
            jual beli ini kami buat dengan sebenar nya,
            apabila telah
            ditanda tangani oleh kedua belah pihak, berikut
            beserta saksi-saksi, maka tanah tersebut menjadi
            sah milik
            <b>PIHAK KEDUA</b> dan tidak bisa di ganggu
            gugat oleh pihak manapun, Semoga dapat
            dipergunakan sebagaimana
            mestinya.</font>
        </td>
      </tr>
    </table>
    <br>
    <table width="625">
      <tr>
        <td width="10"></td>
        <td width="450"></td>
        <td>Talao, <?php echo $s_date ?></td>
      </tr>
      <tr>
        <td width="10"></td>
        <td width="450">PIHAK KEDUA</td>
        <td>PIHAK PERTAMA</td>
      </tr>
      <tr>
        <td width="10"></td>
        <td width="450"></td>
        <td>
          <div style="height:0;width:70%;padding-bottom:30%;outline: 1px solid black;">
            <div>
              <center>Materai <br>
                10.000</center>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td width="10"></td>
        <td width="450"><b><u>REFO MARSAL SAPUTRA </u></b></td>
        <td><b><u>REPESAH</u></b></td>
      </tr>
      <tr>
        <td width="10"></td>
        <td width="450"><br></td>
        <td></td>
      </tr>
      <tr>
        <td width="10"> </td>
        <td width="400">
          <font style="margin-left: 50px;">Saksi-saksi</font>
        </td>
        <td width="200">Mengetahui batas sepadan :</td>
      </tr>
    </table>
    <br>
    <table>
      <tr>
        <td width="10"></td>
        <td width="100"><b><u>NADIR</u></b></td>
        <td width="300"><b><u>WARNI</u></b></td>
        <td width="120"><b><u>RINU WATI</u></b></td>
        <td><b><u>RAHIMI</u></b></td>
      </tr>
    </table>
    <br>
    <br>
    <br>
    <font>Diketahui Oleh:</font>
    <table>
      <tr>
        <td width="">Nomor : 510/&emsp;/Pel/WN.TSK/2021</td>
        <td width="260"></td>
        <td width="159"></td>
      </tr>
      <tr>
        <td width="300"><?php if($p_jabatan!=NULL){ echo $p_jabatan ;} ?></td>
        <td width="150">
          <font style="text-align: left;">Mamak Kepala Suku
          </font>
        </td>
        <td width="100">Kepala Jorong Talao</td>
      </tr>
    </table>
    <br>
    <br>
    <br>
    <table>
      <tr>
        <td width=""><b><u><?php if($p_nama!=NULL){ echo $p_nama ;} ?></u></b></td>
        <td width="260"><b><u>AMRAN</u></b></td>
        <td width="159"><b><u>DARMITO</u></b></td>
      </tr>
      <tr>
        <td width="300"></td>
        <td width="150"> Dt. Bandaro Mudo</td>
        <td width="100"></td>
      </tr>
    </table>
  </center>


</body>
<script>
  setTimeout(window.close, 500);
</script>

</html>
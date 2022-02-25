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

$p_kk = $_SESSION['p_kk'];




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

    .table-border {
      border: 1px solid black;
      border-collapse: collapse;
    }

    .table-border th {
      border: 1px solid black;
      border-collapse: collapse;
      padding: 10px;
    }

    .table-border tr td {
      border: 1px solid black;
      border-collapse: collapse;
      padding: 10px;
    }
  </style>
</head>

<body onload="window.print()">
  <?php                           
	foreach ($sqlqueryresult2 as $key) {

		$s_id = $key['s_id'];
		$s_status = $key['s_status'];
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
	}

  $sql4 = "SELECT * FROM surat_waris WHERE surat_id='$s_id'";
  $result6 = $connection ->query ($sql4);
  while ($key=$result6 -> fetch_assoc()) {
    $s13_kewarganegaraan = $key['s13_kewarganegaraan'];
}

$sqlquery3 = "SELECT * FROM penduduk WHERE p_kk='".$p_kk."' AND NOT p_nik='$s_p_nik' ";
$sqlqueryresult3 = mysqli_query($connection,$sqlquery3);

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
            <font size="2">Alamat : Jalan Raya Talao&emsp;&emsp;&emsp;&emsp;Email :
              talaookee@gmail.com&emsp;&emsp;&emsp;&emsp;Kode Pos : 27781</font><br>
          </center>
        </td>
      </tr>
      <tr>
        <td colspan="20">
          <hr width="100%" size="2%" noshade color="black">
        </td>
        <!-- <td colspan="20"><hr style="height:5px;border:none;background-color:rgb(0, 0, 0);"></td> -->
      </tr>
    </table>
    <table width="625">
      <tr class="text2">
        <td>Nomor</td>
        <td widht="200">: 470/&emsp;&emsp;/Kepend/WN.TSK/2021</td>
        <td widht="500">Talao, 21 Oktober 2021</td>
      </tr>
      <tr>
        <td>Lamp</td>
        <td width="564">: -</td>
        <td width="564">Kepada Yth,</td>
      </tr>
      <tr>
        <td>Perihal</td>
        <td width="564">: <b>Rekomendasi Ahli Waris</b></td>
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
        <td width="564">&nbsp &nbsp Tempat</td>
      </tr>
    </table>
    <table width="625">
      <tr>
        <td>
          Dengan hormat,
        </td>
      </tr>
    </table>
    <table width="625">
      <tr>
        <td>
          &nbsp &nbsp &nbsp &nbsp Bersama ini kami Mohon Bapak kiranya dapat Memberikan
          Rekomendasi Ahli Waris kepada Warga kami yang tersebut dibawah ini :
        </td>
      </tr>
    </table>
    <br>
    </table>
    <!-- Database -->
    <table width="700">
      <tr class="text2">
        <td width="0"></td>
        <td width="150">Nama Lengkap</td>
        <td>:</td>
        <td> <?php echo $s_p_name; ?></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td width="180"></td>
        <td>NIK</td>
        <td>:</td>
        <td width="525"> <?php echo $s_p_nik; ?></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td width="180"></td>
        <td>Tempat lahir</td>
        <td>:</td>
        <td width="525"> <?php echo $s_p_tempat_l; ?></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td width="180"></td>
        <td>Tanggal lahir</td>
        <td>:</td>
        <td width="525"> <?php echo $s_p_tanggal_l; ?></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td width="180"></td>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td width="525"> <?php echo $s_p_kelamin; ?></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td width="180"></td>
        <td>Kewarganegaraan</td>
        <td>:</td>
        <td width="525"> <?php echo $s13_kewarganegaraan; ?></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td width="180"></td>
        <td>Agama</td>
        <td>:</td>
        <td width="525"> <?php echo $s_p_agama; ?></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td width="180"></td>
        <td>Status</td>
        <td>:</td>
        <td width="525"> <?php echo $s_p_status; ?></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td width="180"></td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td width="525">  <?php echo $s_p_pek; ?></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="text2">
        <td width="0"></td>
        <td width="150"></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td width="180"></td>
        <td>Alamat</td>
        <td>:</td>
        <td width="525">  <?php echo $s_p_alamat; ?></td>
      </tr>
    </table>
    <!-- Database -->
    <br>
    <table width="625">
      <tr>
        <td>
          Selanjutnya nama tersebut diatas mempunyai Ahli Waris dan mengenai segala sesuatu yang
          berhubungan dengan beliau/ almarhum/ ah tersebut telah diserahkan kepada:
        </td>
      </tr>
    </table>
    <br>
    <table class="table-border" width="625">
      <th class="table-border">NO</th>
      <th class="table-border">NAMA</th>
      <th class="table-border">NIK</th>
      <th class="table-border">TEMPAT/TANGGAL LAHIR</th>
      <th class="table-border">HUBUNGAN KELUARGA</th>
      <tr class="table-border">
        <?php
          foreach ($sqlqueryresult3 as $key) {
            $p_kk = $key['p_kk'];
            $p_nik = $key['p_nik'];
            $p_name = $key['p_name'];
            $p_l_tanggal = $key['p_l_tanggal'];
            $p_l_tempat = $key['p_l_tempat'];
            $p_hub = $key['p_hub'];
            $agama = $key['agama'];
            $pek = $key['pek'];
            ?>
        
        <td>
          <center>1.</center>
        </td>
        <td>
          <center><?php echo $p_name ; ?></center>
        </td>
        <td>
          <center><?php echo $p_nik; ?></center>
        </td>
        <td>
          <center><?php echo $p_l_tempat ; ?> / <?php echo $p_l_tanggal ; ?></center>
        </td>
        <td>
          <center><?php echo $p_hub ; ?></center>
        </td>
      </tr>
      <?php } ?>

    </table>

    <br>
    <table width="625">
      <tr>
        <td>
          Demikian surat ini kami sampaikan, atas bantuan Bapak diucapkan terima kasih.
        </td>
      </tr>
    </table>
    <br>
    <table width="800">
      <tr>
        <td width="400"><br><br><br><br></td>
        <td class="text" align="center">
          a.n Pj Wali Nagari Talao Sungai Kunyit <br><?php if($p_jabatan!=NULL){ echo $p_jabatan ;} ?>
          <br><br><br><br><br><b><u><?php if($p_nama!=NULL){ echo $p_nama ;} ?></u></b>
        </td>
      </tr>
    </table>
  </center>


</body>
<script>
  setTimeout(window.close, 500);
</script>

</html>
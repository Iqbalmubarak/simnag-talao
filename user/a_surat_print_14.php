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
		$s_p_status = $key['s_p_status'];
		$s_p_pek = $key['s_p_pek'];
		$s_p_alamat = $key['s_p_alamat'];
	}
  $sql4 = "SELECT * FROM surat_jualbeli_ternak WHERE surat_id='$s_id'";
    $result6 = $connection ->query ($sql4);
    while ($key=$result6 -> fetch_assoc()) {
        $s14_warna_ternak = $key['s14_warna_ternak'];
        $s14_jk_ternak = $key['s14_jk_ternak'];
        $s14_umur_ternak = $key['s14_umur_ternak'];
        $s14_tanduk_ternak = $key['s14_tanduk_ternak'];
        $s14_tanda_ternak = $key['s14_tanda_ternak'];
        $s14_nama_dijual = $key['s14_nama_dijual'];
        $s14_nik_dijual = $key['s14_nik_dijual'];
        $s14_pek_dijual = $key['s14_pek_dijual'];
        $s14_alamat_dijual = $key['s14_alamat_dijual'];
        $s14_nama_dibawa = $key['s14_nama_dibawa'];
        $s14_nik_dibawa = $key['s14_nik_dibawa'];
        $s14_kend_dibawa = $key['s14_kend_dibawa'];
        $s14_nopol_dibawa = $key['s14_nopol_dibawa'];
        $s14_tujuan_dibawa = $key['s14_tujuan_dibawa'];
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
                    <hr width="100%" size="2%" noshade color="black">
                </td>
                <!-- <td colspan="20"><hr style="height:5px;border:none;background-color:rgb(0, 0, 0);"></td> -->
            </tr>
        </table>
        <table width="625">
            <tr>
                <td>
                    <center>
                        <font size="3"><U><b>SURAT KETERANGAN JUAL BELI
                                    TERNAK</b></U></font><br>
                        <font size="3">Nomor :
                            524/&emsp;&emsp;/WN.TSK-2021</font>
                    </center>
                </td>
            </tr>
        </table>
        <table width="625" style="text-indent:50px;">
            <tr>
                <td>
                    Yang bertanda tangan dibawah ini Wali Nagari Talao
                    Sungai Kunyit Kecamatan Sangir Balai Janggo
                    Kabupaten Solok Selatan. Dengan ini menerangkan:
                </td>
            </tr>
        </table>

        </table>
        <!-- Database -->
        <table width="700">
            <tr class="text2">
                <td width="0"></td>
                <td width="150">Nama</td>
                <td>:</td>
                <td><?php echo $s_p_name; ?></td>
            </tr>
            </tr>
            <tr>
                <td width="180"></td>
                <td>NIK</td>
                <td>:</td>
                <td><?php echo $s_p_nik; ?></td>
            </tr>
            <tr>
                <td width="180"></td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?php echo $s_p_pek; ?></td>
            </tr>
            <tr>
                <td width="180"></td>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $s_p_alamat; ?></td>
            </tr>
        </table>
        <!-- Database -->

        <table width="625">
            <tr>
                <td>
                    Orang tersebut diatas betul memiliki ternak <b>SAPI
                        / <s>KAMBING</s>/ <s>KERBAU</s></b> dengan
                    ciri-ciri sebagai berikut:
                </td>
            </tr>
        </table>
        <!-- Database -->
        <table width="700">
            <tr class="text2">
                <td width="0"></td>
                <td width="150">Warna</td>
                <td>:</td>
                <td><?php echo $s14_warna_ternak; ?></td>
            </tr>
            </tr>
            <tr>
                <td width="140"></td>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td> <?php echo $s14_jk_ternak; ?></td>
            </tr>
            <tr>
                <td width="140"></td>
                <td>Umur</td>
                <td>:</td>
                <td><?php echo $s14_umur_ternak; ?></td>
            </tr>
            <tr>
                <td width="140"></td>
                <td>Tanduk</td>
                <td>:</td>
                <td> <?php echo $s14_tanduk_ternak; ?>
                </td>
            </tr>
            <tr>
                <td width="140"></td>
                <td>Tanda Tanda Lain</td>
                <td>:</td>
                <td><?php echo $s14_tanda_ternak; ?></td>
            </tr>
        </table>
        <!-- Database -->
        <table width="625">
            <tr>
                <td>
                    Ternak tersebut dijual kepada:
                </td>
            </tr>
        </table>
        <!-- Database -->
        <table width="700">
            <tr class="text2">
                <td width="0"></td>
                <td width="150">Nama</td>
                <td>:</td>
                <td><?php echo $s14_nama_dijual; ?></td>
            </tr>
            </tr>
            <tr>
                <td width="140"></td>
                <td>NIK</td>
                <td>:</td>
                <td> <?php echo $s14_nik_dijual; ?></td>
            </tr>
            <tr>
                <td width="140"></td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?php echo $s14_pek_dijual; ?></td>
            </tr>
            <tr>
                <td width="140"></td>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $s14_alamat_dijual; ?></td>
            </tr>
        </table>
        <!-- Database -->
        <table width="625">
            <tr>
                <td>
                    Ternak tersebut dibawa oleh:
                </td>
            </tr>
        </table>
        <!-- Database -->
        <table width="700">
            <tr class="text2">
                <td width="0"></td>
                <td width="150">Nama</td>
                <td>:</td>
                <td><?php echo $s14_nama_dibawa; ?></td>
            </tr>
            </tr>
            <tr>
                <td width="140"></td>
                <td>NIK</td>
                <td>:</td>
                <td> <?php echo $s14_nik_dibawa; ?></td>
            </tr>
            <tr>
                <td width="140"></td>
                <td>Jenis Kendaraan</td>
                <td>:</td>
                <td><?php echo $s14_kend_dibawa; ?></td>
            </tr>
            <tr>
                <td width="140"></td>
                <td>Nomor Polisi</td>
                <td>:</td>
                <td><?php echo $s14_nopol_dibawa; ?></td>
            </tr>
            <tr>
                <td width="140"></td>
                <td>Tujuan</td>
                <td>:</td>
                <td> <?php echo $s14_tujuan_dibawa; ?>
                </td>
            </tr>
        </table>
        <!-- Database -->
        <table width="625">
            <tr>
                <td>
                    Surat ini berlaku untuk satu ekor ternak dan untuk
                    hari/ tanggal yang telah dicantumkan. Demikian surat
                    keterangan jual beli ternak ini kami berikan kepada
                    yang bersangkutan untuk dapat dipergunakan
                    sebagaimana mestinya
                </td>
            </tr>
        </table>
        <table width="650">
            <tr>
                <td width="300"></td>
                <td width="400">
                    <table>
                        <tr>
                            <td width="100">Dibuat di</td>
                            <td>:</td>
                            <td>Talao Sungai Kunyit</td>
                        </tr>
                        <tr>
                            <td width="100">Pada Tanggal</td>
                            <td>:</td>
                            <td> <?php echo $s_date ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <center><?php if($p_jabatan!=NULL){ echo $p_jabatan ;} ?></center>
                            </td>
                        </tr>
                        <tr>

                        </tr>

                    </table>
                </td>

            </tr>
            <tr>
                <td width="430"></td>
                <td width="300">
                    <table>
                        <tr>
                            <td colspan="3">
                            <td><br><br><br>
                                <center><b>
                                        <font style="text-align: center;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                            <u><?php if($p_nama!=NULL){ echo $p_nama ;} ?></u></font>
                                    </b></center>
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
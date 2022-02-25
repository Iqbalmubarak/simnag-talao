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
        $s_p_kelamin = $key['s_p_kelamin'];
        $s_p_agama = $key['s_p_agama'];
		$s_p_pek = $key['s_p_pek'];
		$s_p_alamat = $key['s_p_alamat'];
	}
  $sql4 = "SELECT * FROM surat_nikah WHERE surat_id='$s_id'";
    $result6 = $connection ->query ($sql4);
    while ($key=$result6 -> fetch_assoc()) {
        $s11_kewarganegaraan = $key['s11_kewarganegaraan'];
        $s11_statuslk = $key['s11_statuslk'];
        $s11_statuspr = $key['s11_statuspr'];
        $s11_terdahulu = $key['s11_terdahulu'];
        $s11_nama2 = $key['s11_nama2'];
        $s11_nik2 = $key['s11_nik2'];
        $s11_tempat2 = $key['s11_tempat2'];
        $s11_tanggal2 = $key['s11_tanggal2'];
        $s11_kewarganegaraan2 = $key['s11_kewarganegaraan2'];
        $s11_agama2 = $key['s11_agama2'];
        $s11_pekerjaan2 = $key['s11_pekerjaan2'];
        $s11_alamat2 = $key['s11_alamat2'];
        $s11_nama3 = $key['s11_nama3'];
        $s11_nik3 = $key['s11_nik3'];
        $s11_tempat3 = $key['s11_tempat3'];
        $s11_tanggal3 = $key['s11_tanggal3'];
        $s11_kewarganegaraan3 = $key['s11_kewarganegaraan3'];
        $s11_agama3 = $key['s11_agama3'];
        $s11_pekerjaan3 = $key['s11_pekerjaan3'];
        $s11_alamat3 = $key['s11_alamat3'];
        $s11_csuami = $key['s11_csuami'];
        $s11_cistri = $key['s11_cistri'];
        $s11_hatajam = $key['s11_hatajam'];
        $s11_tempat_akad = $key['s11_tempat_akad'];
        $s11_suami = $key['s11_suami'];
        $s11_istri = $key['s11_istri'];
        $s11_tanggal_penetapan = $key['s11_tanggal_penetapan'];
        $s11_pengadilan_agama = $key['s11_pengadilan_agama'];
        $s11_csuami2 = $key['s11_csuami2'];
        $s11_bin_csuami2 = $key['s11_bin_csuami2'];
        $s11_nik_csuami2 = $key['s11_nik_csuami2'];
        $s11_tempat_csuami2 = $key['s11_tempat_csuami2'];
        $s11_tanggal_csuami2 = $key['s11_tanggal_csuami2'];
        $s11_kewarganegaraan_csuami2 = $key['s11_kewarganegaraan_csuami2'];
        $s11_agama_csuami2 = $key['s11_agama_csuami2'];
        $s11_pek_csuami2 = $key['s11_pek_csuami2'];
        $s11_alamat_csuami2 = $key['s11_alamat_csuami2'];
        $s11_cistri2 = $key['s11_cistri2'];
        $s11_bin_cistri2 = $key['s11_bin_cistri2'];
        $s11_nik_cistri2 = $key['s11_nik_cistri2'];
        $s11_tempat_cistri2 = $key['s11_tempat_cistri2'];
        $s11_tanggal_cistri2 = $key['s11_tanggal_cistri2'];
        $s11_kewarganegaraan_cistri2 = $key['s11_kewarganegaraan_cistri2'];
        $s11_agama_cistri2 = $key['s11_agama_cistri2'];
        $s11_pek_cistri2 = $key['s11_pek_cistri2'];
        $s11_alamat_cistri2 = $key['s11_alamat_cistri2'];
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
        <div style="page-break-after:always;">
            <table>
                <tr>
                    <td>KEPUTUSAN DIREKTUR JENDRAL BIMBINGAN MASYARAKAT ISLAM</td>
                </tr>
                <tr>
                    <td>NOMOR 473</td>
                </tr>
                <tr>
                    <td>TENTANG</td>
                </tr>
                <tr>
                    <td>PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</td>
                </tr>
            </table>

            <font>FORMULIR PENGANTAR NIKAH</font>
            <table width="625">
                <tr>
                    <td width="500px"></td>
                    <td><b>Model N1</b></td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td width="250px"><b>KANTOR WALI NAGARI</b></td>
                    <td>: Talao Sungai Kunyit</td>
                </tr>
                <tr>
                    <td width="250px"><b>KECAMATAN</b></td>
                    <td>: Sangir Balai Janggo</td>
                </tr>
                <tr>
                    <td width="250px"><b>KABUPATEN/KOTA</b></td>
                    <td>: Solok Selatan</td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td>
                        <br>
                        <center>
                            <font size="3"><U><b>PENGANTAR NIKAH</b></U></font><br>
                            <font size="3">Nomor : 459/&emsp;&emsp;/AG/-2021</font>
                        </center>
                    </td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td>
                        Yang bertanda tangan dibawah ini menjelaskan dengan sesungguhnya bahwa:
                    </td>
                </tr>
            </table>
            <!-- Database -->
            <table width="625">
                <tr class="text2">
                    <td width="450">1. Nama Lengkap dan Alias</td>
                    <td>:</td>
                    <td width="600"> <?php echo $s_p_name; ?></td>
                </tr>
                </tr>
                <tr>
                    <td>2. Nomor Induk Kependudukan (NIK)</td>
                    <td>:</td>
                    <td> <?php echo $s_p_nik; ?></td>
                    </td>
                </tr>
                <tr>
                    <td>3. Jenis Kelamin</td>
                    <td>:</td>
                    <td> <?php echo $s_p_kelamin; ?></td>
                    </td>
                </tr>
                <tr>
                    <td>4. Tempat Lahir</td>
                    <td>:</td>
                    <td> <?php echo $s_p_tempat_l; ?></td>
                </tr>
                <tr>
                    <td>5. Tanggal Lahir</td>
                    <td>:</td>
                    <td> <?php echo $s_p_tanggal_l; ?></td>
                </tr>
                <tr>
                    <td>6. Kewarganegaraan</td>
                    <td>:</td>
                    <td> <?php echo $s11_kewarganegaraan; ?></td>
                </tr>
                <tr>
                    <td>7. Agama</td>
                    <td>:</td>
                    <td> <?php echo $s_p_agama; ?></td>
                </tr>
                <tr>
                    <td>8. Pekerjaan</td>
                    <td>:</td>
                    <td> <?php echo $s_p_pek; ?></td>
                </tr>
                <tr>
                    <td>9. Alamat</td>
                    <td>:</td>
                    <td> <?php echo $s_p_alamat; ?></td>
                </tr>
                <tr>
                    <td>10. Status Perkawinan</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td width="20px"></td>
                                <td>a)</td>
                                <td>Laki-laki : Jejaka, Duda atau Beristri ke</td>
                            </tr>
                        </table>
                    </td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_statuslk; ?></td>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td width="20px"></td>
                                <td>b)</td>
                                <td>Perempuan : Perawan, Janda</td>
                            </tr>
                        </table>
                    </td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_statuspr; ?></td>
                </tr>
                <tr>
                    <td>11. Nama Istri atau Suami Terdahulu</td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_terdahulu; ?></td>
                </tr>
            </table>
            <!-- Database -->
            <table width="625">
                <tr>
                    <td>
                        Adalah benar anak dari perkawinan Seorang Pria
                    </td>
                </tr>
            </table>
            <!-- Database -->
            <table width="625">
                <tr class="text2">
                    <td width="500">Nama Lengkap dan Alias</td>
                    <td>:</td>
                    <td>  <?php echo $s11_nama2; ?> </td>
                </tr>
                <tr>
                    <td>Nomor Induk Kependudukan (NIK)</td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_nik2; ?></tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_tempat2; ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_tanggal2; ?></td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_kewarganegaraan2; ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_agama2; ?></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_pekerjaan2; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_alamat2; ?></td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td>
                        Dengan seorang wanita
                    </td>
                </tr>
            </table>
            <table width="625">
                <tr class="text2">
                    <td width="500">Nama Lengkap dan Alias</td>
                    <td>:</td>
                    <td> <?php echo $s11_nama3; ?></td>
                </tr>
                <tr>
                    <td>Nomor Induk Kependudukan (NIK)</td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_nik3; ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_tempat3; ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_tanggal3; ?></td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_kewarganegaraan3; ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_agama3; ?></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_pekerjaan3; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td width="525"> <?php echo $s11_alamat3; ?></td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td>
                        Demikian surat pengantar ini dibuat dengan mengingat sumpah jabatan dan untuk
                        dipergunakan sebagaimana mestinya.
                    </td>
                </tr>
            </table>
            <table width="800">
                <tr>
                    <td width="400"><br><br><br><br></td>
                    <td class="text" align="center">
                        Talao, <?php echo $s_date ?> <br> a.n Pj Wali Nagari Talao Sungai Kunyit <br><?php if($p_jabatan!=NULL){ echo $p_jabatan ;} ?> <br><br><br><b><u><?php if($p_nama!=NULL){ echo $p_nama ;} ?></u></b>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Page 2 -->
        <div style="page-break-after:always;">
            <table>
                <tr>
                    <td>KEPUTUSAN DIREKTUR JENDRAL BIMBINGAN MASYARAKAT ISLAM</td>
                </tr>
                <tr>
                    <td>NOMOR 473 TAHUN 2020</td>
                </tr>
                <tr>
                    <td>TENTANG</td>
                </tr>
                <tr>
                    <td>PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</td>
                </tr>
            </table>

            <font>FORMULIR PERMOHONAN KEHENDAK NIKAH</font>
            <table width="625">
                <tr>
                    <td width="500px"></td>
                    <td width="220px">
                        <center><b>Model N-2</b></center>
                    </td>
                </tr>
                <tr>
                    <td width="500px"></td>
                    <td>Talao, 08 Desember 2021</td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td width="100px">Perihal</td>
                    <td>: Permohonan Kehendak Nikah</td>
                    <td width="200px"></td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td>Kepada Yth,</td>
                </tr>
                <tr>
                    <td>Kepala KUA Kecamatan Sangir Balai Janggo</td>
                </tr>
                <tr>
                    <td>di Sungai Kunyit</td>
                </tr>
            </table>
            <br>
            <table width="625">
                <tr>
                    <td style="text-indent:50px;">
                        Dengan hormat, kami mengajukan permohonan kehendak nikah untuk atas nama :
                    </td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td width="200px">Calon suami</td>
                    <td>:</td>
                    <td> <?php echo $s11_csuami; ?></td>
                </tr>
                <tr>
                    <td width="200px">Calon istri</td>
                    <td>:</td>
                    <td> <?php echo $s11_cistri; ?></td>
                </tr>
                <tr>
                    <td width="200px">Hari/Tanggal/Jam</td>
                    <td>:</td>
                    <td> <?php echo $s11_hatajam; ?></td>
                </tr>
                <tr>
                    <td width="200px">Tempat akad nikah</td>
                    <td>:</td>
                    <td> <?php echo $s11_tempat_akad; ?></td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td style="text-indent:50px;">
                        Bersama ini kami sampaikan surat-surat yang diperlukan untuk diperiksa sebagai
                        berikut :
                    </td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td width="20px">1.</td>
                    <td>Surat pengantar nikah dari Wali Nagari/Kelurahan</td>
                </tr>
                <tr>
                    <td width="20px">2.</td>
                    <td>Surat persetujuan calon mempelai</td>
                </tr>
                <tr>
                    <td width="20px">3.</td>
                    <td>Fotokopi KTP</td>
                </tr>
                <tr>
                    <td width="20px">4.</td>
                    <td>Fotokopi akte kelahiran</td>
                </tr>
                <tr>
                    <td width="20px">5.</td>
                    <td>Fotokopi kartu keluarga</td>
                </tr>
                <tr>
                    <td width="20px">6.</td>
                    <td>Paspoto 2x3 = 3 lembar berlatar belakang biru ( harus berhijab bagi perempuan )
                    </td>
                </tr>
                <tr>
                    <td width="20px"></td>
                    <td style="text-indent:60px;">4x6 = 2 lembar berlatar belakang biru ( berpeci, rapi
                        bagi laki-laki )
                    </td>
                </tr>
                <tr>
                    <td width="20px">7.</td>
                    <td>Akta Cerai (Asli) bagi Duda/Janda cerai hidup</td>
                </tr>
                <tr>
                    <td width="20px">8.</td>
                    <td>Surat keterangan kematian bagi Duda / Janda cerai mati</td>
                </tr>
                <tr>
                    <td width="20px">9.</td>
                    <td>Surat Izin Atasan bagi TNI, POLRI dan PNS</td>
                </tr>
                <tr>
                    <td width="20px">10.</td>
                    <td>.........................................................</td>
                </tr>
                <tr>
                    <td width="20px">11.</td>
                    <td>.........................................................</td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td style="text-indent:50px;">
                        Demikian permohonan ini kami sampaikan, kiranya dapat diperiksa, dihadiri dan
                        dicatat sesuai dengan ketentuan peraturan perundang-undangan.
                    </td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td width="1200px"></td>
                    <td width="220px">Wassalam,</td>
                </tr>
                <tr>
                    <td width="500px"></td>
                    <td width="220px">Pemohon</td>
                </tr>
                <tr>
                    <td width="200px">Diterima tanggal ................................20</td>
                    <td width="500px"></td>
                </tr>
                <tr>
                    <td width="200px">Yang menerima,</td>
                    <td width="500px"></td>
                </tr>
                <tr>
                    <td width="200px">Kepala KUA/Penghulu</td>
                    <td width="500px"></td>
                </tr>
                <tr>
                    <td width="1200px"></td>
                    <td width="220px"></td>
                </tr>
                <tr>
                    <td width="1200px"></td>
                    <td width="220px"><u><b>BURSAN</b></u></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td width="200px">........................................</td>
                    <td width="500px"></td>
                </tr>
            </table>
        </div>
        <!-- Page 3 -->
        <div style="page-break-after:always;">
            <table>
                <tr>
                    <td>KEPUTUSAN DIREKTUR JENDRAL BIMBINGAN MASYARAKAT ISLAM</td>
                </tr>
                <tr>
                    <td>NOMOR 473 TAHUN 2020</td>
                </tr>
                <tr>
                    <td>TENTANG</td>
                </tr>
                <tr>
                    <td>PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</td>
                </tr>
            </table>

            <font>FORMULIR PERMOHONAN PENCATATAN ISBAT</font>
            <table width="625">
                <tr>
                    <td width="500px"></td>
                    <td width="220px">
                        <center><b>Model N3</b></center>
                    </td>
                </tr>
                <tr>
                    <td width="500px"></td>
                    <td>.......................2021</td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td width="100px">Perihal</td>
                    <td>: Permohonan Pencatatan Isbat</td>
                    <td width="200px"></td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td>Kepada Yth,</td>
                </tr>
                <tr>
                    <td>Kepala KUA Kecamatan /PPN LN</td>
                </tr>
                <tr>
                    <td>di Sungai Kunyit</td>
                </tr>
            </table>
            <br>
            <table width="625">
                <tr>
                    <td style="text-indent:50px;">
                        Dengan hormat, kami mengajukan permohonan pencatatan isbat untuk atas nama :
                    </td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td width="200px">Suami</td>
                    <td>:</td>
                    <td> <?php echo $s11_suami; ?>
                    </td>
                </tr>
                <tr>
                    <td width="200px">Istri</td>
                    <td>:</td>
                    <td> <?php echo $s11_istri; ?></td>
                </tr>
                <tr>
                    <td width="200px">Tanggal Penetapan</td>
                    <td>:</td>
                    <td> <?php echo $s11_tanggal_penetapan; ?></td>
                </tr>
                <tr>
                    <td width="200px">Pengadilan Agama</td>
                    <td>:</td>
                    <td> <?php echo $s11_pengadilan_agama; ?></td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td style="text-indent:50px;">
                        Bersama ini kami sampaikan surat-surat yang diperlukan untuk diperiksa sebagai
                        berikut :
                    </td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td width="20px">1.</td>
                    <td>Putusan Isbat</td>
                </tr>
                <tr>
                    <td width="20px">2.</td>
                    <td>Fotocopy KTP</td>
                </tr>
                <tr>
                    <td width="20px">3.</td>
                    <td>Fotokopi Kartu Keluarga</td>
                </tr>
                <tr>
                    <td width="20px">4.</td>
                    <td>Paspoto 2x3 = 3 lembar berlatar belakang biru</td>
                </tr>
                <tr>
                    <td width="20px">5.</td>
                    <td>..........................</td>
                </tr>
                <tr>
                    <td width="20px">6.</td>
                    <td>..........................</td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td style="text-indent:50px;">
                        Demikian permohonan ini kami sampaikan, kiranya dapat di periksa, dihadiri dan di
                        catat sesuai dengan ketentuan peraturan perundang-undangan.
                    </td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td width="1200px"></td>
                    <td width="220px">Wassalam,</td>
                </tr>
                <tr>
                    <td width="500px"></td>
                    <td width="220px">Pemohon</td>
                </tr>
                <tr>
                    <td width="200px">Diterima tanggal ................................</td>
                    <td width="500px"></td>
                </tr>
                <tr>
                    <td width="200px">Yang menerima,</td>
                    <td width="500px"></td>
                </tr>
                <tr>
                    <td width="200px">Kepala KUA/PPN LN</td>
                    <td width="500px"></td>
                </tr>
                <tr>
                    <td width="1200px"></td>
                    <td width="220px"></td>
                </tr>
                <tr>
                    <td width="1200px"></td>
                    <td width="220px"><u><b>ROMI HERIYANTO</b></u></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td width="200px">........................................</td>
                    <td width="500px"></td>
                </tr>
            </table>
        </div>

        <!-- Page 4 -->
        <div style="page-break-after:always;">
            <table>
                <tr>
                    <td>KEPUTUSAN DIREKTUR JENDRAL BIMBINGAN MASYARAKAT ISLAM</td>
                </tr>
                <tr>
                    <td>NOMOR 473 TAHUN 2020</td>
                </tr>
                <tr>
                    <td>TENTANG</td>
                </tr>
                <tr>
                    <td>PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td width="500px"></td>
                    <td width="220px">
                        <center><b>Model N-4</b></center>
                    </td>
                </tr>
            </table>

            <font><u>PERSETUJUAN CALON PENGANTIN</u></font> <br><br>
            <table width="625">
                <tr>
                    <td>
                        Yang bertanda tangan di bawah ini :
                    </td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td width="20px">A.</td>
                    <td width="250px">Calon Suami :</td>
                    <td width="20px"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1. Nama lengkap dan alias</td>
                    <td>:</td>
                    <td> <?php echo $s11_csuami2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2. Bin</td>
                    <td>: </td>
                    <td> <?php echo $s11_bin_csuami2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3. Nomor Induk Kependudukan</td>
                    <td>:</td>
                    <td> <?php echo $s11_nik_csuami2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4. Tempat Lahir</td>
                    <td>:</td>
                    <td> <?php echo $s11_tempat_csuami2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5. Tanggal Lahir</td>
                    <td>:</td>
                    <td> <?php echo $s11_tanggal_csuami2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6. Kewarganegaraan</td>
                    <td>:</td>
                    <td> <?php echo $s11_kewarganegaraan_csuami2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7. Agama</td>
                    <td>:</td>
                    <td> <?php echo $s11_agama_csuami2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>8. Pekerjaan</td>
                    <td>:</td>
                    <td> <?php echo $s11_pek_csuami2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>9. Alamat</td>
                    <td>:</td>
                    <td> <?php echo $s11_alamat_csuami2; ?> </td>
                </tr>
            </table>
            <table width="625">
                <tr>
                    <td width="20px">B.</td>
                    <td width="250px">Calon Istri :</td>
                    <td width="20px"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1. Nama lengkap dan alias</td>
                    <td>: </td>
                    <td> <?php echo $s11_cistri2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2. Bin</td>
                    <td>:</td>
                    <td> <?php echo $s11_bin_cistri2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3. Nomor Induk Kependudukan</td>
                    <td>:</td>
                    <td> <?php echo $s11_nik_cistri2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4. Tempat Lahir</td>
                    <td>:</td>
                    <td> <?php echo $s11_tempat_cistri2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5. Tanggal Lahir</td>
                    <td>:</td>
                    <td> <?php echo $s11_tanggal_cistri2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6. Kewarganegaraan</td>
                    <td>:</td>
                    <td> <?php echo $s11_kewarganegaraan_cistri2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7. Agama</td>
                    <td>: </td>
                    <td> <?php echo $s11_agama_cistri2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>8. Pekerjaan</td>
                    <td>: </td>
                    <td> <?php echo $s11_pek_cistri2; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>9. Alamat</td>
                    <td>:</td>
                    <td> <?php echo $s11_alamat_cistri2; ?> </td>
                </tr>
            </table>
            <table width="700">
                <tr>
                    <td>
                        Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran sendiri,
                        tanpa ada paksaan dari siapapun juga, setuju untuk melangsungkan perkawinan. <br>
                        Demikian surat persetujuan ini dibuat untuk digunakan seperlunya.
                    </td>
                </tr>
            </table> <br>
            <table width="625">
                <tr>
                    <td width="100"></td>
                    <td width="300"></td>
                    <td width="200">Talao, <?php echo $s_date ?></td>
                </tr>
                <tr>
                    <td>
                        <center>Calon Istri</center>
                    </td>
                    <td></td>
                    <td>
                        <center>Calon Suami</center>
                    </td>
                </tr>
                <tr>
                    <td><br><br><br>
                        <center><u><b>YAHDIANI</b></u></center>
                    </td>
                    <td></td>
                    <td><br><br><br>
                        <center><u><b>BURSAN</b></u></center>
                    </td>
                </tr>
            </table>

        </div>


    </center>


</body>
<script>
    setTimeout(window.close, 500);
</script>

</html>
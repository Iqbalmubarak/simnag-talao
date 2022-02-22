<?php
session_start();
include('ifnotloginadmin2.php');
require_once('../db_connect.php');
// require_once('library.php');


$p_kk = $_SESSION['p_kk'];
$sqlquery = "SELECT * FROM penduduk INNER JOIN lapor
ON lapor.l_pelaporkk=penduduk.p_kk WHERE penduduk.p_kk='$p_kk' AND lapor.l_anonim='2' ";
$result = $connection->query($sqlquery) or die($connection->error);
$sqlqueryresult = $connection ->query($sqlquery);

$sql = "SELECT * FROM penduduk
WHERE  p_hub='Kepala Keluarga' AND p_kk='$p_kk'";
$result2 = $connection ->query ($sql);


$p_nik2 = $_GET['p_nik2'];

$sql4 = "SELECT * FROM penduduk WHERE p_nik2='$p_nik2'";
$result6 = $connection ->query ($sql4);
while ($key=$result6 -> fetch_assoc()) {
    $p_name = $key['p_name'];
    $p_nik = $key['p_nik'];
    $p_l_tempat = $key['p_l_tempat'];
    $p_l_tanggal = $key['p_l_tanggal'];
    $kelamin = $key['kelamin'];
    $agama = $key['agama'];
    $pek = $key['pek'];
    $p_alamat = $key['p_alamat'];
}

$d=strtotime("today");

?>

<!doctype html>
<html class="no-js " lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>:: SIMNag :: Home</title>
    <link rel="icon" href="" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css" />
    <link rel="stylesheet" href="../assets/plugins/charts-c3/plugin.css" />

    <link rel="stylesheet" href="../assets/plugins/morrisjs/morris.min.css" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/style.min.css">
</head>

<body class="theme-blush">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="" width="48" height="48" alt="SISTEM INFORMASI NAGARI">
            </div>
            <p>Please wait...</p>
        </div>
    </div>



    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <div class="navbar-brand">
            <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
            <a href="index.php"><img src="../assets/images/KM_logo.png" style="width: 180px; height: auto;" width="25"
                    alt="Aero"></a>
        </div>
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info">
                        <div class="detail">
                            <?php                           
                        while ($key=$result2 -> fetch_assoc()) {

                            $name = $key['p_name'];



                            ?>
                            <a><?php echo $name ?></a>

                            <?php
                        }
                        ?>
                        </div>
                    </div>
                </li>
                <li><a href="index.php"><i class="zmdi zmdi-home"></i><span>Beranda</span></a></li>
                <li><a href="simnag_biodata.php"><i class="zmdi zmdi-hc-fw"></i><span>Data Pribadi</span></a>

                </li>
                <li><a href="simnag_notif.php"><i class="zmdi zmdi-notifications"></i><span>Notifikasi</span>
                        <div class="notify"><span class="heartbit"></span><span style="background-color:red;"
                                class="point"></span></div>
                    </a>
                </li>

                <li><a href="simnag_status.php"><i class="zmdi zmdi-hc-fw"></i><span>Status</span></a></li>


                <li class="active open"><a href="simnag_surat.php"><i
                            class="zmdi zmdi-hc-fw"></i><span>E-Surat</span></a>

                </li>
                <li><a href="simnag_lapor.php"><i class="zmdi zmdi-hc-fw"></i> <span>Aduan/Aspirasi</span></a></li>
                <li><a href="../logout.php"><i class="zmdi zmdi-power"></i><span>Log out</span></a></li>



            </ul>
        </div>
    </aside>

    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs sm">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i
                        class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i
                        class="zmdi zmdi-comments"></i></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="setting">
                <div class="slim_scroll">
                    <div class="card">
                        <h6>Theme Option</h6>
                        <div class="light_dark">
                            <div class="radio">
                                <input type="radio" name="radio1" id="lighttheme" value="light" checked="">
                                <label for="lighttheme">Light Mode</label>
                            </div>
                            <div class="radio mb-0">
                                <input type="radio" name="radio1" id="darktheme" value="dark">
                                <label for="darktheme">Dark Mode</label>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h6>Color Skins</h6>
                        <ul class="choose-skin list-unstyled">
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush" class="active">
                                <div class="blush"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <h6>General Settings</h6>
                        <ul class="setting-list list-unstyled">
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Report Panel Usage</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">Email Redirect</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox3" type="checkbox" checked="">
                                    <label for="checkbox3">Notifications</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">Auto Updates</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox5" type="checkbox" checked="">
                                    <label for="checkbox5">Offline</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox6" type="checkbox" checked="">
                                    <label for="checkbox6">Location Permission</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane right_chat" id="chat">
                <div class="slim_scroll">
                    <div class="card">
                        <ul class="list-unstyled">
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Sophia <small class="float-right">11:00AM</small></span>
                                            <span class="message">There are many variations of passages of Lorem Ipsum
                                                available</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Grayson <small class="float-right">11:30AM</small></span>
                                            <span class="message">All the Lorem Ipsum generators on the</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Isabella <small
                                                    class="float-right">11:31AM</small></span>
                                            <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="me">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">John <small class="float-right">05:00PM</small></span>
                                            <span class="message">It is a long established fact that a reader</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Alexander <small
                                                    class="float-right">06:08PM</small></span>
                                            <span class="message">Richard McClintock, a Latin professor</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <section class="content">
        <div class="body_scroll">
            <img style="width: 100%; height: auto;" src="../assets/images/ok3.png">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Cetak Surat Keterangan Jual Beli Tanah</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card">

                                <div class="body">


                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane in active">
                                            <p>

                                                <form class="form-horizontal row-fluid" action="simnag_surat_09_pro.php" method="POST"
                                                    name="form1" onsubmit="return validation()">
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
                                                                <td width="541"><input class="form-control col-sm-5"
                                                                        type="text" id="s_p_name" name="s_p_name"
                                                                        value="<?php echo $p_name ; ?>" readonly></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="80"></td>
                                                                <td>NIK</td>
                                                                <td>:</td>
                                                                <td width="525"> <input class="form-control col-sm-5"
                                                                        type="text" id="s_p_nik" name="s_p_nik"
                                                                        value="<?php echo $p_nik ; ?>" readonly></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="80"></td>
                                                                <td>Tempat lahir</td>
                                                                <td>:</td>
                                                                <td width="525"><input class="form-control col-sm-5"
                                                                        type="text" id="s_p_tempat_l"
                                                                        name="s_p_tempat_l"
                                                                        value="<?php echo $p_l_tempat ; ?>" readonly></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="80"></td>
                                                                <td>Tanggal lahir</td>
                                                                <td>:</td>
                                                                <td width="525"><input class="form-control col-sm-5"
                                                                        type="text" id="s_p_tanggal_l"
                                                                        name="s_p_tanggal_l"
                                                                        value="<?php echo $p_l_tanggal ; ?>" readonly></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="80"></td>
                                                                <td>Pekerjaan</td>
                                                                <td>:</td>
                                                                <td width="525"> <input class="form-control col-sm-5"
                                                                        type="text" id="s_p_pek" name="s_p_pek"
                                                                        value="<?php echo $pek ; ?>" readonly></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="80"></td>
                                                                <td>Alamat</td>
                                                                <td>:</td>
                                                                <td width="525"><input class="form-control col-sm-5"
                                                                        type="text" id="s_p_alamat" name="s_p_alamat"
                                                                        value="<?php echo $p_alamat ; ?>" readonly></td>
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
                                                                <td width="541"> <input class="form-control col-sm-5"
                                                                                    type="text" id="s9_nama2"
                                                                                    name="s9_nama2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="80"></td>
                                                                <td>NIK</td>
                                                                <td>:</td>
                                                                <td width="525"> <input class="form-control col-sm-5"
                                                                                    type="text" id="s9_nik2"
                                                                                    name="s9_nik2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="80"></td>
                                                                <td>Tempat lahir</td>
                                                                <td>:</td>
                                                                <td width="525"> <input class="form-control col-sm-5"
                                                                                    type="text" id="s9_tempat2"
                                                                                    name="s9_tempat2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="80"></td>
                                                                <td>Tanggal lahir</td>
                                                                <td>:</td>
                                                                <td width="525"> <input class="form-control col-sm-5"
                                                                                    type="date" id="s9_tanggal2"
                                                                                    name="s9_tanggal2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="80"></td>
                                                                <td>Pekerjaan</td>
                                                                <td>:</td>
                                                                <td width="525">  <input class="form-control col-sm-5"
                                                                                    type="text" id="s9_pekerjaan2"
                                                                                    name="s9_pekerjaan2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="80"></td>
                                                                <td>Jenis Kelamin</td>
                                                                <td>:</td>
                                                                <td width="525"> <input class="form-control col-sm-5"
                                                                                    type="text" id="s9_jk2"
                                                                                    name="s9_jk2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="80"></td>
                                                                <td>Suku</td>
                                                                <td>:</td>
                                                                <td width="525">  <input class="form-control col-sm-5"
                                                                                    type="text" id="s9_suku2"
                                                                                    name="s9_suku2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="80"></td>
                                                                <td>Alamat</td>
                                                                <td>:</td>
                                                                <td width="525">
                                                                    <textarea class="form-control col-sm-5" type="text"
                                                                        id="s9_alamat2"
                                                                        name="s9_alamat2"> </textarea>
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
                                                                <td>Sebelah Utara</td>
                                                                <td>&emsp;&emsp;&emsp;&emsp;&emsp;</td>
                                                                <td>:</td>
                                                                <td width="541"><input class="form-control col-sm-5"
                                                                                    type="text" id="s9_utara"
                                                                                    name="s9_utara"></td>
                                                            </tr>
                                                            <tr class="text2">
                                                                <td width="150"></td>
                                                                <td>Sebelah Selatan</td>
                                                                <td>&emsp;&emsp;&emsp;&emsp;&emsp;</td>
                                                                <td>:</td>
                                                                <td width="541"><input class="form-control col-sm-5"
                                                                                    type="text" id="s9_selatan"
                                                                                    name="s9_selatan"></td>
                                                            </tr>
                                                            <tr class="text2">
                                                                <td width="150"></td>
                                                                <td>Sebelah Barat</td>
                                                                <td>&emsp;&emsp;&emsp;&emsp;&emsp;</td>
                                                                <td>:</td>
                                                                <td width="541"> <input class="form-control col-sm-5"
                                                                                    type="text" id="s9_barat"
                                                                                    name="s9_barat"></td>
                                                            </tr>
                                                            <tr class="text2">
                                                                <td width="150"></td>
                                                                <td>Sebelah Timur</td>
                                                                <td>&emsp;&emsp;&emsp;&emsp;&emsp;</td>
                                                                <td>:</td>
                                                                <td width="541"><input class="form-control col-sm-5"
                                                                                    type="text" id="s9_timur"
                                                                                    name="s9_timur"></td>
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
                                                                <td>Talao, <?php echo date("d F Y", $d) ?></td>
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
                                                                    <div
                                                                        style="height:0;width:70%;padding-bottom:30%;outline: 1px solid black;">
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
                                                                <td width="300">Pj Wali Nagari Talao Sungai Kunyit</td>
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
                                                                <td width=""><b><u>PURWANTO</u></b></td>
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
                                                    <input style="display: none;" type="text" id="s_p_kk" name="s_p_kk"
                                                        class="form-control col-sm-3" value="<?php echo $p_kk ?>">
                                                    <input style="display: none;" type="text" id="s_badge"
                                                        name="s_badge" class="form-control col-sm-3"
                                                        value="badge-warning">
                                                    <input style="display: none;" type="text" id="s_status"
                                                        name="s_status" class="form-control col-sm-3"
                                                        value="Dalam Proses">
                                                    <input style="display: none;" type="text" id="s_title"
                                                        name="s_title" class="form-control col-sm-3"
                                                        value="Surat Keterangan Jual Beli Tanah">
                                                    <input style="display: none;" type="text" id="s_date" name="s_date"
                                                        class="form-control col-sm-3"
                                                        value="<?php echo date("d F Y", $d) ?>">
                                                    <input style="display: none;" type="text" id="s_filepath"
                                                        name="s_filepath" class="form-control col-sm-3"
                                                        value="a_surat_print_09.php">


                                                    <input style="display:none" type="text" id="notif_message"
                                                        name="notif_message" class="form-control"
                                                        value="Permohonan cetak surat ( Surat Keterangan Jual Beli Tanah ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih"
                                                        placeholder="...." required>
                                                    <input style="display:none" type="text" id="notif_title"
                                                        name="notif_title" class="form-control" value="Permohonan Surat"
                                                        placeholder="...." required>
                                                    <input style="display:none" type="text" id="notif_logo"
                                                        name="notif_logo" class="form-control" value=""
                                                        placeholder="...." required>
                                                    <input style="display:none" type="text" id="notif_icon"
                                                        name="notif_icon" class="form-control" value="bg-orange"
                                                        placeholder="...." required>


                                                    <div class="col-sm-2 offset-sm-3">


                                                        <a style="background-color:#009688;"
                                                            class="btn btn-primary waves-effect btn-lg" type="submit"
                                                            href="javascript: submitform()" name="submit"><i
                                                                class="zmdi zmdi-hc-fw"></i> Cetak</a>
                                                    </div><br><br>
                                                </form>
                                            </p>



                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
    </section>



    <script type="text/javascript">
        function submitform() {
            document.form1.submit();
        }
    </script>

    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
    <script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

    <script src="../assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
    <script src="../assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
    <script src="../assets/bundles/c3.bundle.js"></script>

    <script src="../assets/bundles/mainscripts.bundle.js"></script>
    <script src="../assets/js/pages/index.js"></script>
</body>


</html>
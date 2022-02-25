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
                        <h2>Cetak Surat Keterangan Jual Beli Ternak</h2>
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

                                                <form class="form-horizontal row-fluid" action="simnag_surat_14_pro.php"
                                                    method="POST" name="form1" onsubmit="return validation()">
                                                    <center>
                                                        <table>
                                                            <tr>
                                                                <td><img src="../assets/images/logo_solsel.png"
                                                                        width="90" height="90"></td>
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
                                                                <td><input class="form-control col-sm-5" type="text"
                                                                id="s_p_name" name="s_p_name"
                                                                value="<?php echo $p_name ; ?>" readonly></td>
                                                            </tr>
                                                            </tr>
                                                            <tr>
                                                                <td width="180"></td>
                                                                <td>NIK</td>
                                                                <td>:</td>
                                                                <td> <input class="form-control col-sm-5" type="text"
                                                                id="s_p_nik" name="s_p_nik"
                                                                value="<?php echo $p_nik ; ?>" readonly></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="180"></td>
                                                                <td>Pekerjaan</td>
                                                                <td>:</td>
                                                                <td> <input class="form-control col-sm-5" type="text"
                                                                id="s_p_pek" name="s_p_pek" value="<?php echo $pek ; ?>"
                                                                readonly></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="180"></td>
                                                                <td>Alamat</td>
                                                                <td>:</td>
                                                                <td><input class="form-control col-sm-5" type="text"
                                                                id="s_p_alamat" name="s_p_alamat"
                                                                value="<?php echo $p_alamat ; ?>" readonly></td>
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
                                                                <td><input class="form-control col-sm-5" type="text"
                                                                id="s14_warna_ternak" name="s14_warna_ternak"></td>
                                                            </tr>
                                                            </tr>
                                                            <tr>
                                                                <td width="140"></td>
                                                                <td>Jenis Kelamin</td>
                                                                <td>:</td>
                                                                <td> <input class="form-control col-sm-5" type="text"
                                                                id="s14_jk_ternak" name="s14_jk_ternak"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="140"></td>
                                                                <td>Umur</td>
                                                                <td>:</td>
                                                                <td><input class="form-control col-sm-5" type="text"
                                                                id="s14_umur_ternak" name="s14_umur_ternak"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="140"></td>
                                                                <td>Tanduk</td>
                                                                <td>:</td>
                                                                <td> <input class="form-control col-sm-5" type="text"
                                                                id="s14_tanduk_ternak" name="s14_tanduk_ternak"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="140"></td>
                                                                <td>Tanda Tanda Lain</td>
                                                                <td>:</td>
                                                                <td><input class="form-control col-sm-5" type="text"
                                                                id="s14_tanda_ternak" name="s14_tanda_ternak"></td>
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
                                                                <td><input class="form-control col-sm-5" type="text"
                                                                id="s14_nama_dijual" name="s14_nama_dijual"></td>
                                                            </tr>
                                                            </tr>
                                                            <tr>
                                                                <td width="140"></td>
                                                                <td>NIK</td>
                                                                <td>:</td>
                                                                <td> <input class="form-control col-sm-5" type="text"
                                                                id="s14_nik_dijual" name="s14_nik_dijual"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="140"></td>
                                                                <td>Pekerjaan</td>
                                                                <td>:</td>
                                                                <td> <input class="form-control col-sm-5" type="text"
                                                                id="s14_pek_dijual" name="s14_pek_dijual"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="140"></td>
                                                                <td>Alamat</td>
                                                                <td>:</td>
                                                                <td><textarea class="form-control col-sm-5"
                                                                type="text" id="s14_alamat_dijual"
                                                                name="s14_alamat_dijual"> </textarea></td>
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
                                                                <td><input class="form-control col-sm-5" type="text"
                                                                id="s14_nama_dibawa" name="s14_nama_dibawa"></td>
                                                            </tr>
                                                            </tr>
                                                            <tr>
                                                                <td width="140"></td>
                                                                <td>NIK</td>
                                                                <td>:</td>
                                                                <td> <input class="form-control col-sm-5" type="text"
                                                                id="s14_nik_dibawa" name="s14_nik_dibawa"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="140"></td>
                                                                <td>Jenis Kendaraan</td>
                                                                <td>:</td>
                                                                <td><input class="form-control col-sm-5" type="text"
                                                                id="s14_kend_dibawa" name="s14_kend_dibawa"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="140"></td>
                                                                <td>Nomor Polisi</td>
                                                                <td>:</td>
                                                                <td><input class="form-control col-sm-5" type="text"
                                                                id="s14_nopol_dibawa" name="s14_nopol_dibawa"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="140"></td>
                                                                <td>Tujuan</td>
                                                                <td>:</td>
                                                                <td> <input class="form-control col-sm-5" type="text"
                                                                id="s14_tujuan_dibawa" name="s14_tujuan_dibawa"></td>
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
                                                                            <td>04 Oktober 2021</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3">
                                                                                <hr>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3">
                                                                                <center>a.n Pj Wali Nagari Talao Sungai
                                                                                    kunyit Sekretaris nagari</center>
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
                                                                                            <font
                                                                                                style="text-align: center;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                <u>AFRIWES,M.Pd.I</u></font>
                                                                                        </b></center>
                                                                            </td>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        </td>
                                                        </tr>
                                                        </table>
                                                    </center> <br><br>
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
                                                        value="Surat Keterangan Jual Beli Ternak">
                                                    <input style="display: none;" type="text" id="s_date" name="s_date"
                                                        class="form-control col-sm-3"
                                                        value="<?php echo date("d F Y", $d) ?>">
                                                    <input style="display: none;" type="text" id="s_filepath"
                                                        name="s_filepath" class="form-control col-sm-3"
                                                        value="a_surat_print_14.php">


                                                    <input style="display:none" type="text" id="notif_message"
                                                        name="notif_message" class="form-control"
                                                        value="Permohonan cetak surat ( Surat Keterangan Jual Beli Ternak ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih"
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
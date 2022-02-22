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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
</head>
<style type="text/css">
    .video-container {
        position: relative;
        padding-bottom: 100%;
        height: 100%;

    }

    .video-container iframe,
    .video-container object,
    .video-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        margin: 0px;
    }
</style>

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

                            $p_name = $key['p_name'];



                            ?>
                            <a><?php echo $p_name ?></a>

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
                        <h2>Cetak Surat</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <p>Extend the default collapse behavior to create an accordion with the panel component.
                                </p>
                                <select id="p_nik2" class="form-control selectpicker" data-live-search="true">
                                    <?php $sql2 = "SELECT * FROM penduduk
                                    WHERE p_kk='$p_kk'";
                                    $result3 = $connection ->query ($sql2);  
                                    
                                    while ($key=$result3 -> fetch_assoc()) {
                                        $p_name = $key['p_name'];
                                        $p_nik = $key['p_nik2'];
                                    ?>
                                    <option value="<?php echo $p_nik; ?>"><?php echo $p_name; ?></option>
                                    <?php } ?>
                                </select>
                                <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingOne_1">
                                            <h4 class="panel-title"> <a role="button" data-toggle="collapse"
                                                    data-parent="#accordion_1" href="#collapseOne_1"
                                                    aria-expanded="true" aria-controls="collapseOne_1"><i
                                                        class="zmdi zmdi-hc-fw"></i> Surat Rekomendasi e-KTP</a> </h4>
                                        </div>
                                        <div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel"
                                            aria-labelledby="headingOne_1">
                                            <div class="panel-body"> Syarat-syaratnya :<br><br>
                                                <li>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute,</li>
                                                <li>non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid</li>
                                                <li>single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</li>
                                                <li>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                                    farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of
                                                    them
                                                    accusamus labore sustainable VHS.</li><br> <a
                                                    class="btn btn-primary btn-sm" href="#" onclick="surat_01()"><i
                                                        class="zmdi zmdi-hc-fw"></i>Cetak</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingTwo_1">
                                            <h4 class="panel-title"> <a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion_1"
                                                    href="#collapseTwo_1" aria-expanded="false"
                                                    aria-controls="collapseTwo_1"><i class="zmdi zmdi-hc-fw"></i> Surat
                                                    Rekomendasi KK</a> </h4>
                                        </div>
                                        <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo_1">
                                            <div class="panel-body"> Syarat-syaratnya :<br><br>
                                                <li>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute,</li>
                                                <li>non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid</li>
                                                <li>single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</li>
                                                <li>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                                    farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of
                                                    them
                                                    accusamus labore sustainable VHS.</li><br> <a
                                                    class="btn btn-primary btn-sm" href="#" onclick="surat_02()"><i
                                                        class="zmdi zmdi-hc-fw"></i>Cetak</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="heading5">
                                            <h4 class="panel-title"> <a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion_1" href="#collapse5"
                                                    aria-expanded="false" aria-controls="collapse5"><i
                                                        class="zmdi zmdi-hc-fw"></i> Surat Keterangan Berdomisili </a>
                                            </h4>
                                        </div>
                                        <div id="collapse5" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="heading5">
                                            <div class="panel-body"> Syarat-syaratnya :<br><br>
                                                <li>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute,</li>
                                                <li>non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid</li>
                                                <li>single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</li>
                                                <li>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                                    farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of
                                                    them
                                                    accusamus labore sustainable VHS.</li><br> <a
                                                    class="btn btn-primary btn-sm" href="#" onclick="surat_03()"><i
                                                        class="zmdi zmdi-hc-fw"></i>Cetak</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="heading9">
                                            <h4 class="panel-title"> <a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion_1" href="#collapse9"
                                                    aria-expanded="false" aria-controls="collapse9"><i
                                                        class="zmdi zmdi-hc-fw"></i> Surat Keterangan Usaha </a> </h4>
                                        </div>
                                        <div id="collapse9" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="heading9">
                                            <div class="panel-body"> Syarat-syaratnya :<br><br>
                                                <li>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute,</li>
                                                <li>non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid</li>
                                                <li>single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</li>
                                                <li>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                                    farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of
                                                    them
                                                    accusamus labore sustainable VHS.</li><br> <a
                                                    class="btn btn-primary btn-sm" href="#" onclick="surat_04()"><i
                                                        class="zmdi zmdi-hc-fw"></i>Cetak</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="heading4">
                                            <h4 class="panel-title"> <a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion_1" href="#collapse4"
                                                    aria-expanded="false" aria-controls="collapse4"><i
                                                        class="zmdi zmdi-hc-fw"></i> Surat Keterangan Beda Nama KK dan
                                                    KTP </a> </h4>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="heading4">
                                            <div class="panel-body"> Syarat-syaratnya :<br><br>
                                                <li>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute,</li>
                                                <li>non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid</li>
                                                <li>single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</li>
                                                <li>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                                    farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of
                                                    them
                                                    accusamus labore sustainable VHS.</li><br> <a
                                                    class="btn btn-primary btn-sm" href="#" onclick="surat_05()"><i
                                                        class="zmdi zmdi-hc-fw"></i>Cetak</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="heading10">
                                            <h4 class="panel-title"> <a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion_1" href="#collapse10"
                                                    aria-expanded="false" aria-controls="collapse9"><i
                                                        class="zmdi zmdi-hc-fw"></i> Surat Meninggal Dunia </a> </h4>
                                        </div>
                                        <div id="collapse10" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="heading10">
                                            <div class="panel-body"> Syarat-syaratnya :<br><br>
                                                <li>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute,</li>
                                                <li>non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid</li>
                                                <li>single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</li>
                                                <li>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                                    farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of
                                                    them
                                                    accusamus labore sustainable VHS.</li><br> <a
                                                    class="btn btn-primary btn-sm" href="#" onclick="surat_06()"><i
                                                        class="zmdi zmdi-hc-fw"></i>Cetak</a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingThree_1">
                                            <h4 class="panel-title"> <a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion_1"
                                                    href="#collapseThree_1" aria-expanded="false"
                                                    aria-controls="collapseThree_1"><i class="zmdi zmdi-hc-fw"></i>
                                                    Surat Rekomendasi Pindah </a> </h4>
                                        </div>
                                        <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingThree_1">
                                            <div class="panel-body"> Syarat-syaratnya :<br><br>
                                                <li>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute,</li>
                                                <li>non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid</li>
                                                <li>single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</li>
                                                <li>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                                    farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of
                                                    them
                                                    accusamus labore sustainable VHS.</li><br> <a
                                                    class="btn btn-primary btn-sm" href="#" onclick="surat_07()"><i
                                                        class="zmdi zmdi-hc-fw"></i>Cetak</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="heading6">
                                            <h4 class="panel-title"> <a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion_1" href="#collapse6"
                                                    aria-expanded="false" aria-controls="collapse6"><i
                                                        class="zmdi zmdi-hc-fw"></i> Surat Keterangan Bersaudara </a>
                                            </h4>
                                        </div>
                                        <div id="collapse6" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="heading6">
                                            <div class="panel-body"> Syarat-syaratnya :<br><br>
                                                <li>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute,</li>
                                                <li>non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid</li>
                                                <li>single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</li>
                                                <li>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                                    farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of
                                                    them
                                                    accusamus labore sustainable VHS.</li><br> <a
                                                    class="btn btn-primary btn-sm" href="#" onclick="surat_08()"><i
                                                        class="zmdi zmdi-hc-fw"></i>Cetak</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="heading7">
                                            <h4 class="panel-title"> <a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion_1" href="#collapse7"
                                                    aria-expanded="false" aria-controls="collapse7"><i
                                                        class="zmdi zmdi-hc-fw"></i> Surat Keterangan Jual Beli Tanah
                                                </a> </h4>
                                        </div>
                                        <div id="collapse7" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="heading7">
                                            <div class="panel-body"> Syarat-syaratnya :<br><br>
                                                <li>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute,</li>
                                                <li>non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid</li>
                                                <li>single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</li>
                                                <li>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                                    farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of
                                                    them
                                                    accusamus labore sustainable VHS.</li><br> <a
                                                    class="btn btn-primary btn-sm" href="#" onclick="surat_09()"><i
                                                        class="zmdi zmdi-hc-fw"></i>Cetak</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="heading8">
                                            <h4 class="panel-title"> <a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion_1" href="#collapse8"
                                                    aria-expanded="false" aria-controls="collapse8"><i
                                                        class="zmdi zmdi-hc-fw"></i> Surat Keterangan Kepemilikan
                                                    Ternak </a> </h4>
                                        </div>
                                        <div id="collapse8" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="heading8">
                                            <div class="panel-body"> Syarat-syaratnya :<br><br>
                                                <li>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute,</li>
                                                <li>non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid</li>
                                                <li>single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</li>
                                                <li>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                                    farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of
                                                    them
                                                    accusamus labore sustainable VHS.</li><br> <a
                                                    class="btn btn-primary btn-sm" href="#" onclick="surat_10()"><i
                                                        class="zmdi zmdi-hc-fw"></i>Cetak</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="heading8">
                                            <h4 class="panel-title"> <a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion_1" href="#collapse14"
                                                    aria-expanded="false" aria-controls="collapse14"><i
                                                        class="zmdi zmdi-hc-fw"></i> Surat Pengantar Nikah</a> </h4>
                                        </div>
                                        <div id="collapse14" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="heading8">
                                            <div class="panel-body"> Syarat-syaratnya :<br><br>
                                                <li>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute,</li>
                                                <li>non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid</li>
                                                <li>single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</li>
                                                <li>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                                    farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of
                                                    them
                                                    accusamus labore sustainable VHS.</li><br> <a
                                                    class="btn btn-primary btn-sm" href="#" onclick="surat_11()"><i
                                                        class="zmdi zmdi-hc-fw"></i>Cetak</a>
                                            </div>
                                        </div>

                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="heading8">
                                            <h4 class="panel-title"> <a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion_1" href="#collapse10"
                                                    aria-expanded="false" aria-controls="collapse10"><i
                                                        class="zmdi zmdi-hc-fw"></i> Surat Keterangan Kurang Mampu</a> </h4>
                                        </div>
                                        <div id="collapse10" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="heading8">
                                            <div class="panel-body"> Syarat-syaratnya :<br><br>
                                                <li>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute,</li>
                                                <li>non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid</li>
                                                <li>single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</li>
                                                <li>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                                    farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of
                                                    them
                                                    accusamus labore sustainable VHS.</li><br> <a
                                                    class="btn btn-primary btn-sm" href="#" onclick="surat_12()"><i
                                                        class="zmdi zmdi-hc-fw"></i>Cetak</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="heading8">
                                            <h4 class="panel-title"> <a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion_1" href="#collapse11"
                                                    aria-expanded="false" aria-controls="collapse11"><i
                                                        class="zmdi zmdi-hc-fw"></i> Surat Rekomendasi Ahli Waris</a> </h4>
                                        </div>
                                        <div id="collapse11" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="heading8">
                                            <div class="panel-body"> Syarat-syaratnya :<br><br>
                                                <li>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute,</li>
                                                <li>non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid</li>
                                                <li>single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</li>
                                                <li>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                                    farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of
                                                    them
                                                    accusamus labore sustainable VHS.</li><br> <a
                                                    class="btn btn-primary btn-sm" href="#" onclick="surat_13()"><i
                                                        class="zmdi zmdi-hc-fw"></i>Cetak</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="heading8">
                                            <h4 class="panel-title"> <a class="collapsed" role="button"
                                                    data-toggle="collapse" data-parent="#accordion_1" href="#collapse12"
                                                    aria-expanded="false" aria-controls="collapse12"><i
                                                        class="zmdi zmdi-hc-fw"></i> Surat Keterangan Jual Beli Ternak</a> </h4>
                                        </div>
                                        <div id="collapse12" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="heading8">
                                            <div class="panel-body"> Syarat-syaratnya :<br><br>
                                                <li>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute,</li>
                                                <li>non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid</li>
                                                <li>single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</li>
                                                <li>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                                    farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of
                                                    them
                                                    accusamus labore sustainable VHS.</li><br> <a
                                                    class="btn btn-primary btn-sm" href="#" onclick="surat_14()"><i
                                                        class="zmdi zmdi-hc-fw"></i>Cetak</a>
                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Jquery Core Js -->
    <script src="../assets/js/pages/jquery-3.1.1.min.js"></script>
    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
    <script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

    <script src="../assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
    <script src="../assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
    <script src="../assets/bundles/c3.bundle.js"></script>

    <script src="../assets/bundles/mainscripts.bundle.js"></script>
    <script src="../assets/js/pages/index.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js">
    </script>

    <script>
        $(document).ready(function(){        
            $('select').selectpicker();
        })

        function surat_01(){
            let p_nik2 = $('#p_nik2').val();
            location.href = "simnag_surat_01.php?p_nik2="+p_nik2;
        }

        function surat_02(){
            let p_nik2 = $('#p_nik2').val();
            location.href = "simnag_surat_02.php?p_nik2="+p_nik2;
        }

        function surat_03(){
            let p_nik2 = $('#p_nik2').val();
            location.href = "simnag_surat_03.php?p_nik2="+p_nik2;
        }

        function surat_04(){
            let p_nik2 = $('#p_nik2').val();
            location.href = "simnag_surat_04.php?p_nik2="+p_nik2;
        }

        function surat_05(){
            let p_nik2 = $('#p_nik2').val();
            location.href = "simnag_surat_05.php?p_nik2="+p_nik2;
        }

        function surat_06(){
            let p_nik2 = $('#p_nik2').val();
            location.href = "simnag_surat_06.php?p_nik2="+p_nik2;
        }

        function surat_07(){
            let p_nik2 = $('#p_nik2').val();
            location.href = "simnag_surat_07.php?p_nik2="+p_nik2;
        }

        function surat_08(){
            let p_nik2 = $('#p_nik2').val();
            location.href = "simnag_surat_08.php?p_nik2="+p_nik2;
        }

        function surat_09(){
            let p_nik2 = $('#p_nik2').val();
            location.href = "simnag_surat_09.php?p_nik2="+p_nik2;
        }

        function surat_10(){
            let p_nik2 = $('#p_nik2').val();
            location.href = "simnag_surat_10.php?p_nik2="+p_nik2;
        }

        function surat_11(){
            let p_nik2 = $('#p_nik2').val();
            location.href = "simnag_surat_11.php?p_nik2="+p_nik2;
        }
        
        function surat_12(){
            let p_nik2 = $('#p_nik2').val();
            location.href = "simnag_surat_12.php?p_nik2="+p_nik2;
        }

        function surat_13(){
            let p_nik2 = $('#p_nik2').val();
            location.href = "simnag_surat_13.php?p_nik2="+p_nik2;
        }

        function surat_14(){
            let p_nik2 = $('#p_nik2').val();
            location.href = "simnag_surat_14.php?p_nik2="+p_nik2;
        }

    </script>

</body>


</html>
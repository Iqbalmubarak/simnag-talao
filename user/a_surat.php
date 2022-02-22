<?php
session_start();
include('ifnotloginadmin.php');
require_once('db_connect.php');

$ad_email = $_SESSION['ad_email'];
$sqlquery = "SELECT * FROM admin
WHERE ad_email='$ad_email' ";
$result = $connection->query($sqlquery) or die($connection->error);
$sqlqueryresult = $connection ->query($sqlquery);


$sqlquery2 = "SELECT * FROM surat
WHERE s_status='Dalam Proses' ORDER BY s_id DESC ";
$result2 = $connection->query($sqlquery2) or die($connection->error);
$sqlqueryresult2 = $connection ->query($sqlquery2);

$sqlall = "SELECT * FROM surat
ORDER BY s_id ASC ";
$resultall = $connection->query($sqlall) or die($connection->error);
$sqlqueryresultall = $connection ->query($sqlall);

$sqlquery3 = "SELECT * FROM daftar
WHERE d_status='1' ORDER BY d_id DESC ";
$result3 = $connection->query($sqlquery3) or die($connection->error);
$sqlqueryresult3 = $connection ->query($sqlquery3);

$sqlquery4 = "SELECT COUNT(*) AS `total` FROM `daftar` WHERE d_status='1' ";
$result4 = $connection->query($sqlquery4) or die($connection->error);
$sqlqueryresult4 = $connection ->query($sqlquery4);

$sqlquery5 = "SELECT COUNT(*) AS `total2` FROM `lapor` WHERE l_status='Dalam Proses' ";
$result5 = $connection->query($sqlquery5) or die($connection->error);
$sqlqueryresult5 = $connection ->query($sqlquery5);

$sqlsurat = "SELECT COUNT(*) AS `total3` FROM `surat` WHERE s_status='Dalam Proses' ";
$surat = $connection ->query($sqlsurat);



?>
<!doctype html>
<html class="no-js " lang="en">


<head>
    <<link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Favicon-->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- JQuery DataTable Css -->
        <link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
        <!-- Custom Css -->
        <link rel="stylesheet" href="assets/css/style.min.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
        <title>:: SIMNag :: Home</title>
        <link rel="icon" href="" type="image/x-icon"> <!-- Favicon-->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css" />
        <link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css" />

        <link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
        <!-- Custom Css -->
        <link rel="stylesheet" href="assets/css/style.min.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
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
            <a href="a_index.php"><img src="assets/images/KM_logo.png" style="width: 180px; height: auto;" width="25"
                    alt="Aero"></a>
        </div>
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info">
                        <div class="detail">
                            <?php                           
                           while ($key=$sqlqueryresult -> fetch_assoc()) {
                            $ad_name = $key['ad_name'];
                            ?>

                            <div class="detail">
                                <a><?php echo $ad_name ?></a>


                            </div>
                            <?php
                        }
                        ?>

                        </div>
                    </div>
                </li>
                <li><a href="a_index.php"><i class="zmdi zmdi-home"></i><span>Beranda</span></a></li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-assignment"></i><span>Penduduk<div class="notify"><span
                                    class="heartbit"></span><span style="background-color:red;" class="point"></span>
                            </div></span></a>
                    <ul class="ml-menu">
                        <li><a href="a_pdk_view.php">Data Penduduk</a></li>

                        <li><a href="a_ubah.php">Perubahan Data<div class="notify"><span class="heartbit"></span><span
                                        style="background-color:red;" class="point"></span></div></a></li>
                        <li><a href="a_perantau.php">Perantau</a></li>

                    </ul>
                </li>

                <li> <a href="javascript:void(4);" class="menu-toggle"><i
                            class="zmdi zmdi-hc-fw"></i><span>SIMNagari</span></a>
                    <ul class="ml-menu">
                        <li class="active"><a href="a_profilnagari.php">Profil Nagari</a></li>
                        <li><a href="a_datanagari.php">Data Website</a></li>
                        <li><a href="a_peng.php">Pengumuman</a></li>
                        <li><a href="a_berita_view.php">Berita</a></li>
                        <li><a href="a_wisata_view.php">Wisata</a></li>
                        <li><a href="a_keg_view.php">P. Kekayaan</a></li>
                    </ul>
                </li>
                <?php  while ($key=$sqlqueryresult4 -> fetch_assoc()) {  $total = $key['total'];?>
                <li><a href="a_pdk_daftar.php"><i class="zmdi zmdi-hc-fw"></i><span>Pendaftaran</span><span
                            class="badge badge-danger" style="color:white;"><?php echo $total ?></span></a></li>
                <?php }?>
                <?php  while ($key=$sqlqueryresult5 -> fetch_assoc()) {  $total2 = $key['total2'];?>
                <li><a href="a_pdk_lapor.php"><i class="zmdi zmdi-hc-fw"></i><span>Pengaduan</span><span
                            class="badge badge-danger" style="color:white;"><?php echo $total2 ?></span>
                    </a></li>
                <?php }?>
                <?php  while ($key=$surat -> fetch_assoc()) {  $total3 = $key['total3'];?>
                <li class="active open"><a href="a_surat.php"><i class="zmdi zmdi-hc-fw"></i><span>Surat</span><span
                            class="badge badge-danger" style="color:white;"><?php echo $total3 ?></span>
                    </a></li>
                <?php }?>


                <li><a href="a_arsip.php"><i class="zmdi zmdi-hc-fw"></i><span>E-Arsip</span></a></li>
                <li><a href="a_datagrafik.php"><i class="zmdi zmdi-hc-fw"></i><span>Data Grafik</span></a></li>
                <li><a href="logout.php"><i class="zmdi zmdi-power"></i><span>Log out</span></a></li>



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
                                        <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
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
                                        <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
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
                                        <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
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
                                        <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
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
                                        <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
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

    <section class="content">
        <div class="">
            <img style="width: 100%; height: auto;" src="assets/images/a_ok3.png">

        </div>
        </div>
    </section>
    <section class="content contact">
        <div class="body_scroll">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>PERMOHONAN SURAT</strong>
                                </h2>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="alert alert-danger">
                                    <a style="text-align: center;"><strong>PERMOHONAN SURAT ( BELUM DIPROSES
                                            )</strong></a>
                                </div>
                                <div class="card" id="card-tandatangan" style="display:none">
                                    <div class="body">
                                        <h2 class="card-inside-title">Surat ditandatangani oleh</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                            <form class="form-horizontal row-fluid" action="a_surat_update.php" method="POST"
                                                    name="form1" onsubmit="return validation()">
                                                        <select id="ttd_id" name="ttd_id" class="form-control selectpicker"
                                                            data-live-search="true">
                                                            <?php $sql2 = "SELECT * FROM penandatangan";
                                                                $result3 = $connection ->query ($sql2);  
                                                                
                                                                while ($key=$result3 -> fetch_assoc()) {
                                                                    $nama = $key['nama'];
                                                                    $id = $key['id'];
                                                                ?>
                                                            <option value="<?php echo $id; ?>">
                                                                <?php echo $nama; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <input style="display:none" type="text" id="s_id" name="s_id"
                                                            class="form-control" value="" placeholder="...." required>
                                                        <input style="display:none" type="text" id="s_p_kk"
                                                            name="s_p_kk" class="form-control" value=""
                                                            placeholder="...." required>
                                                        <input style="display:none" type="text" id="s_title"
                                                            name="s_title" class="form-control" value=""
                                                            placeholder="...." required>
                                                        <button onclick="$('#card-tandatangan').hide('500');"
                                                            type="button" class="btn btn-default">Batalkan</button>
                                                        <a style="background-color:#009688;"
                                                            class="btn btn-primary waves-effect" type="submit"
                                                            href="javascript: submitform()" name="submit">Submit</a>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">

                                    <table class="table table-hover mb-0 c_list c_table">
                                        <thead>
                                            <tr>

                                                <th data-breakpoints="xs sm md">Action</th>
                                                <th>Jenis Surat</th>
                                                <th data-breakpoints="xs">Nama</th>
                                                <th data-breakpoints="xs sm md">NIK</th>
                                                <th data-breakpoints="xs">Tanggal</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    while ($row = $result2 ->fetch_assoc())
                                    {
                                        ?>
                                            <tr>
                                                <td>

                                                    <a onclick="window.open('<?php echo $row['s_filepath']; ?>?s_id=<?php echo $row['s_id']; ?>')"
                                                        class="btn btn-primary btn-sm"><i style="color:white;"
                                                            class="zmdi zmdi-hc-fw"></i></a>

                                                    <!-- <a href="a_surat_ttd_01.php?s_id=<?php echo $row['s_id']; ?>"
                                                        class="btn btn-info btn-sm"><i style="color:white;"
                                                            class="zmdi zmdi-hc-fw"></i></a> -->

                                                    <!-- <a class="btn btn-success btn-sm"
                                                        href="a_surat_update.php?s_id=<?php echo $row['s_id']; ?>&amp;s_p_kk=<?php echo $row['s_p_kk']; ?>&amp;s_title=<?php echo $row['s_title']; ?>"
                                                        onclick="return confirm('Apakah surat sudah di cetak ?');"><i
                                                            style="color:white;" class="zmdi zmdi-hc-fw"></i></a> -->

                                                    <a class="btn btn-success btn-sm" href="javascript:void(0)"
                                                        onclick="openform(<?php echo $row['s_id']?>,<?php echo $row['s_p_kk'];?>,'<?php echo $row['s_title'];?>')"><i
                                                            style="color:white;" class="zmdi zmdi-hc-fw"></i></a>


                                                    <a href="a_surat_update2.php?s_id=<?php echo $row['s_id']; ?>&amp;s_p_kk=<?php echo $row['s_p_kk']; ?>&amp;s_title=<?php echo $row['s_title']; ?>"
                                                        onclick="return confirm('Permohonan ditolak ?');"
                                                        class="btn btn-danger btn-sm"><i style="color:white;"
                                                            class="zmdi zmdi-hc-fw"></i></a>

                                                </td>
                                                <td>
                                                    <span><?php echo $row['s_title']; ?></span>
                                                </td>
                                                <td>
                                                    <span><a><?php echo $row['s_p_name']; ?></a></span>
                                                </td>
                                                <td>
                                                    <span><?php echo $row['s_p_nik']; ?></span>
                                                </td>
                                                <td>
                                                    <span><?php echo $row['s_made']; ?></span>
                                                </td>

                                            </tr>
                                            <?php
                                    }
                                    ?>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="content contact">
        <div class="body_scroll">


            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="header">
                                <div class="alert alert-success">
                                    <a style="text-align: center;"><strong>SELURUH DATA PERMOHONNA SURAT</strong></a>
                                </div>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                            data-toggle="dropdown" role="button" aria-haspopup="true"
                                            aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right slideUp">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                        </ul>
                                    </li>
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table
                                        class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Jenis Surat</th>
                                                <th>Nama</th>
                                                <th>NIK</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Jenis Surat</th>
                                                <th>Nama</th>
                                                <th>NIK</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                    while ($row = $resultall ->fetch_assoc())
                                    {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['s_id']; ?></td>
                                                <td><?php echo $row['s_title']; ?></td>
                                                <td><?php echo $row['s_p_name']; ?></td>
                                                <td><?php echo $row['s_p_nik']; ?></td>
                                                <td><?php echo $row['s_made']; ?></td>
                                                <td><span
                                                        class="badge <?php echo $row['s_badge']; ?>"><?php echo $row['s_status']; ?></span>
                                                </td>
                                                <td>
                                                    <button
                                                        onclick="window.open('<?php echo $row['s_filepath']; ?>?s_id=<?php echo $row['s_id']; ?>')"
                                                        class="btn btn-warning btn-sm"><i
                                                            class="zmdi zmdi-hc-fw"></i></button>
                                                    <a href="a_surat_delete.php?s_id=<?php echo $row['s_id']; ?>"
                                                        onclick="return confirm('Anda yakin untuk menghapus ?');"
                                                        class="btn btn-danger btn-sm"><i
                                                            class="zmdi zmdi-hc-fw"></i></a>
                                                </td>
                                            </tr>

                                            <?php
                                    }
                                    ?>




                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
        function submitform2() {
            document.form2.submit();
        }

        function openform(s_id, s_p_kk, s_title) {
            $('#card-tandatangan').toggle(500);
            $('#s_id').val(s_id);
            $('#s_p_kk').val(s_p_kk);
            $('#s_title').val(s_title);
        }
    </script>




    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
    <script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
    <script src="assets/bundles/c3.bundle.js"></script>


    <script src="assets/js/pages/index.js"></script>

    <script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <!-- Jquery DataTable Plugin Js -->
    <script src="assets/bundles/datatablescripts.bundle.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"> </script>

    <script>
        $(document).ready(function () {
            $('select').selectpicker();
        })
    </script>

</body>


</html>
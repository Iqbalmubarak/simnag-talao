<?php
session_start();
include('ifnotloginadmin2.php');
require_once('../db_connect.php');
// require_once('library.php');


$p_kk = $_SESSION['p_kk'];
$sqlquery = "SELECT * FROM penduduk
WHERE p_kk='$p_kk' ";
$result = $connection->query($sqlquery) or die($connection->error);
$sqlqueryresult = $connection ->query($sqlquery);



$sql = "SELECT * FROM penduduk
WHERE  p_hub='Kepala Keluarga' AND p_kk='$p_kk'";
$result2 = $connection ->query ($sql);

$sql2 = "SELECT * FROM penduduk
WHERE  p_hub='Kepala Keluarga' AND p_kk='$p_kk'";
$result3 = $connection ->query ($sql2);

$sql3 = "SELECT * FROM penduduk
WHERE  p_hub='Kepala Keluarga' AND p_kk='$p_kk'";
$result4 = $connection ->query ($sql3);


$sql5 = "SELECT * FROM penduduk INNER JOIN keluarga
ON  penduduk.p_kk=keluarga.p_kk WHERE penduduk.p_kk='$p_kk'";
$result5 = $connection ->query ($sql5);


$sql6 = "SELECT * FROM penduduk
WHERE  p_hub='Kepala Keluarga' AND p_kk='$p_kk'";
$result6 = $connection ->query ($sql6);

$sql7 = "SELECT * FROM penduduk
WHERE  p_hub='Kepala Keluarga' AND p_kk='$p_kk'";
$result7 = $connection ->query ($sql7);

$sql8 = "SELECT * FROM penduduk INNER JOIN keluarga
ON  penduduk.p_kk=keluarga.p_kk WHERE penduduk.p_kk='$p_kk'";
$result8 = $connection ->query ($sql8);


$sql9 = "SELECT * FROM penduduk
WHERE  p_hub='Kepala Keluarga' AND p_kk='$p_kk'";
$result9 = $connection ->query ($sql9);

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
        <link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
        <link rel="stylesheet" href="../assets/plugins/charts-c3/plugin.css"/>

        <link rel="stylesheet" href="../assets/plugins/morrisjs/morris.min.css" />
        <!-- Custom Css -->
        <link rel="stylesheet" href="../assets/css/style.min.css">

        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/plugins/charts-c3/plugin.css"/>
        <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css"/>
        <link rel="stylesheet" href="../assets/plugins/charts-c3/plugin.css"/>
        <!-- Custom Css -->
        <link rel="stylesheet" href="../assets/css/style.min.css">
        <script src="..//jquery.js"></script>
        <script src="..//build/jquery.datetimepicker.full.min.js"></script>

        <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Bootstrap Material Datetime Picker Css -->
        <link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
        <!-- Bootstrap Select Css -->
        <link href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- Custom Css -->
        <link  rel="stylesheet" href="../assets/css/style.min.css">
    </head>
   
<body class="theme-blush">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="" width="48" height="48" alt="SISTEM INFORMASI NAGARI"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Main Search -->
    <div id="search">
        <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
        <form>
          <input type="search" value="" placeholder="Search..." />
          <button type="submit" class="btn btn-primary">Search</button>
      </form>
  </div>



  <!-- Left Sidebar -->
  <aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.php"><img src="../assets/images/KM_logo.png" style="width: 180px; height: auto;" width="25" alt="Aero"></a>
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
           <li ><a href="index.php"><i class="zmdi zmdi-home"></i><span>Beranda</span></a></li>
            <li ><a href="simnag_biodata.php"><i class="zmdi zmdi-hc-fw"></i><span>Data Pribadi</span></a>
               
            </li>
            <li ><a href="simnag_notif.php"><i class="zmdi zmdi-notifications"></i><span>Notifikasi</span>
                <div class="notify" ><span  class="heartbit"></span><span style="background-color:red;" class="point"></span></div>
            </a>
           </li>

            <li ><a href="simnag_status.php"><i class="zmdi zmdi-hc-fw"></i><span>Status</span></a></li>
            

            <li ><a href="simnag_surat.php"><i class="zmdi zmdi-hc-fw"></i><span>E-Surat</span></a>
                
            </li>
            <li class="active open" ><a href="simnag_lapor.php"><i class="zmdi zmdi-hc-fw"></i> <span>Aduan/Aspirasi</span></a></li>
            <li><a href="../logout.php"><i class="zmdi zmdi-power"></i><span>Log out</span></a></li>


            
        </ul>
    </div>
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs sm">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
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
                        <li data-theme="purple"><div class="purple"></div></li>
                        <li data-theme="blue"><div class="blue"></div></li>
                        <li data-theme="cyan"><div class="cyan"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="blush" class="active"><div class="blush"></div></li>
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
                                        <span class="message">There are many variations of passages of Lorem Ipsum available</span>
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
                                        <span class="name">Isabella <small class="float-right">11:31AM</small></span>
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
                                        <span class="name">Alexander <small class="float-right">06:08PM</small></span>
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
    <div class="">
        <img style="width: 100%; height: auto;" src="../assets/images/lapor.png">
        <div class="block-header">

            <div class="row">

                <div class="col-lg-7 col-md-6 col-sm-12">


                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>

            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="card">


                                    <div class="body"> 


                                        <p>Proses Pengaduan :</p>
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs p-0 mb-3 nav-tabs-warning">

                                            <li class="nav-item "><a class="nav-link active" data-toggle="tab" href="#home_only_icon_title" style="font-weight:bold; font-size: 15px;" >01</a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile_only_icon_title" style="font-weight:bold; font-size: 15px;">02</a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages_only_icon_title" style="font-weight:bold; font-size: 15px;">03</a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings_only_icon_title" style="font-weight:bold; font-size: 15px;">04</a></li>
                                        </ul>                        
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane in active" id="home_only_icon_title">
                                                <b>1. TULIS LAPORAN</b>
                                                <p style="font-style: italic;"> Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap </p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="profile_only_icon_title">
                                                <b>2. PROSES VERIFIKASI</b>
                                                <p style="font-style: italic;"> Dalam 3 hari, laporan Anda akan diverifikasi dan diteruskan kepada instansi berwenang </p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="messages_only_icon_title">
                                                <b>3. PROSES TINDAK LANJUT</b>
                                                <p style="font-style: italic;"> Dalam 5 hari, instansi akan menindaklanjuti dan membalas laporan Anda </p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="settings_only_icon_title">
                                                <b>4. SELESAI</b>
                                                <p style="font-style: italic;">Laporan Anda akan terus ditindaklanjuti hingga terselesaikan </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header">

                            <ul class="header-dropdown">

                            </ul>
                        </div>
                        <div class="body">

                            <p>Pilih Tipe Laporan</p>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs p-0 mb-3">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">PENGADUAN</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">ASPIRASI</a></li>

                            </ul> 

                            <!-- Tab panes -->
                             <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                            <div class="tab-content">
                                

                                <div role="tabpanel" class="tab-pane in active" id="home">
                                    <br><br>
                                    <b>PENGADUAN</b>
                                    
                                        <p> <form id="form_validation" method="POST" action="simnag_lapor_pro.php" method="POST" name="form1" onsubmit="return validation()">

                                              <select class="form-control show-tick ms select2" id="l_pelapornikk" name="l_pelapornikk" data-placeholder="Select">

                                                <option>Pilih Nama Pelapor</option>
                                                  <?php while ($row = $result6 ->fetch_assoc()) { ?>
                                                <option value="<?php echo $row['p_nik']; ?>"><?php echo $row['p_name']; ?></option>
                                                 <?php } ?>
                                                 <?php while ($row = $result5 ->fetch_assoc()) { ?>
                                                <option value="<?php echo $row['k_nik']; ?>" ><?php echo $row['k_name']; ?></option>
                                                <?php } ?>
                                                
                                            </select><br>

                                        <?php                           
                                    while ($key=$result3 -> fetch_assoc()) {
                                        $p_kk = $key['p_kk'];
                                        $p_nik = $key['p_nik'];
                                        $p_password = $key['p_password'];
                                        $p_name = $key['p_name'];
                                        ?>





                                            <div  class="form-group col-md-2 form-control-label" style="display:none">                                    
                                                <input type="text" readonly  id="l_type" name="l_type" class="form-control" placeholder="Type" value="Pengaduan" />
                                            </div>
                                            <div  class="form-group col-md-2 form-control-label" style="display:none">                                    
                                                <input type="text" readonly  id="l_status" name="l_status" class="form-control" placeholder="Status" value="Dalam Proses" />
                                            </div>
                                            <div  class="form-group col-md-2 form-control-label" style="display:none">                                    
                                                <input type="text" readonly  id="l_pelaporkkk" name="l_pelaporkkk" class="form-control" placeholder="No. KK" value="<?php echo $key['p_kk']; ?>" />
                                            </div>
                                           



                                            
                                            <div class="form-group" style="display:none">                                    
                                                <input type="text" class="form-control" id="pindah4" name="pindah4" placeholder="Judul Laporan" />
                                            </div>
                                            
                                            <select class="form-control show-tick ms select2" id="l_cat" name="l_cat" data-placeholder="Select">

                                                <option>Pilih Kategori Laporan</option>
                                                <option value="Bencana Alam">Bencana Alam</option>
                                                <option value="Fasilitas Umum" >Fasilitas Umum</option>
                                                <option value="Protokol Kesehatan">Protokol Kesehatan</option>
                                                <option value="Keresahan">Keresahan</option>



                                            </select><br>


                                            <div class="form-group">                                    
                                                <input type="text" class="form-control" id="l_title" name="l_title" placeholder="Judul Laporan" />
                                            </div>
                                            <div class="form-group">
                                                <textarea rows="4" class="form-control no-resize" id="l_message" name="l_message" placeholder="Ketik laporan anda..."></textarea>
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                                </div>
                                                <input type="text" class="form-control datepicker" id="l_date" name="l_date" placeholder="Tanggal dan waktu kejadian...">
                                            </div><br>
                                            <div class="form-group">                                   
                                                <input type="text" class="form-control" id="l_loc" name="l_loc" placeholder="Ketik Lokasi Kejadian" />
                                            </div>
                                            <div class="form-group" style="display:none" >                                   
                                                <input type="text" class="form-control" type="date" id="l_date2" name="l_date2" class="form-control" id="datetimepicker"  value="<?php date_default_timezone_set("Asia/jakarta"); echo date('j.n.Y'); ?> <?php date_default_timezone_set("Asia/Jakarta"); echo date('h:i:s A'); ?>" placeholder="Ketik Lokasi Kejadian" />
                                            </div>





                                            <div class="form-group">                                   
                                                <input type="text" class="form-control" id="l_namainstansi" name="l_namainstansi" placeholder="Ketik Instansi Tujuan" />
                                            </div>

                                            

                                            <div class="form-group" style="display:none" >                                   
                                                <input type="text" class="form-control" id="pindah5" name="l_anonim" id="l_anonim" placeholder="Ketik Instansi Tujuan" required>
                                            </div>
                                            

                                            <div class="form-group">

                                                <input class="myRadio" id="yes" type="radio" name="gender" value="1" oninput="generateFullName1()"> Rahasia &nbsp;
                                                <script type="text/javascript">
                                                    function generateFullName1()
                                                    {
                                                        document.getElementById('pindah5').value = 
                                                        document.getElementById('yes').value;

                                                    }
                                                </script>
                                                <input class="myRadio" id="no" type="radio" name="gender" value="2" oninput="generateFullName2()"> Tidak Rahasia<br><br>
                                                <script type="text/javascript">
                                                    function generateFullName2()
                                                    {
                                                        document.getElementById('pindah5').value = 
                                                        document.getElementById('no').value;

                                                    }
                                                </script>

                                                <div style="font-size: 10px;" class="col-md-5 alert alert-danger">
                                                    <strong>CATATAN :</strong><br><br>
                                                    <strong>Rahasia</strong> Laporan anda tidak akan tersimpan di <a href="simnag_status.php">Status laporan</a> Anda <br>
                                                    
                                                </div>
                                            </div>
                                             <input style="display:none" type="text"  id="notif_message" name="notif_message" class="form-control" value="Selamat, pengaduan anda sedang di proses oleh operator nagari. Proses akan dilakukan selama 24 jam atau 2 hari. Terima Kasih" placeholder="...." required>
                                 <input style="display:none" type="text"  id="notif_title" name="notif_title" class="form-control" value="Pengaduan" placeholder="...." required>
                                 <input style="display:none" type="text"  id="notif_logo" name="notif_logo" class="form-control" value="" placeholder="...." required>
                                 <input style="display:none" type="text"  id="notif_icon" name="notif_icon" class="form-control" value="bg-green" placeholder="...." required>

                                            



                                            <a style="background-color: red; font-weight:bold; font-size:15px;" href="javascript: submitform()" name="submit"  class="btn btn-raised btn-primary waves-effect">LAPOR !</a>
                                            <script type="text/javascript">
                                                function submitform()
                                                {
                                                  document.form1.submit();
                                              }
                                          </script>
                                      </form>
                                       <?php
                          }
                          ?>

                                  </p>
                              </div>
                              <div role="tabpanel" class="tab-pane" id="profile">
                                <br><br>
                                <b>ASPIRASI</b>

                                <p> <form id="form_validation2" method="POST" action="simnag_lapor_pro.php" method="POST" name="form2" onsubmit="return validation2()">

                                    <select class="form-control show-tick ms select2" id="l_pelapornikk" name="l_pelapornikk" data-placeholder="Select">

                                                <option>Pilih Nama Pelapor</option>
                                                  <?php while ($row = $result9 ->fetch_assoc()) { ?>
                                                <option value="<?php echo $row['p_nik']; ?>"><?php echo $row['p_name']; ?></option>
                                                 <?php } ?>
                                                 <?php while ($row = $result8 ->fetch_assoc()) { ?>
                                                <option value="<?php echo $row['k_nik']; ?>" ><?php echo $row['k_name']; ?></option>
                                                <?php } ?>
                                                
                                            </select><br>


                                     <?php                           
                                    while ($key=$result7 -> fetch_assoc()) {
                                        $p_kk = $key['p_kk'];
                                        $p_nik = $key['p_nik'];
                                        $p_password = $key['p_password'];
                                        $p_name = $key['p_name'];
                                        ?>


                                    <div  class="form-group col-md-2 form-control-label" style="display:none">                                    
                                        <input type="text" readonly  id="l_type" name="l_type" class="form-control" placeholder="Nama" value="Aspirasi" />
                                    </div>
                                    <div  class="form-group col-md-2 form-control-label" style="display:none">                                    
                                        <input type="text" readonly  id="l_status" name="l_status" class="form-control" placeholder="Nama" value="Dalam Proses" />
                                    </div>
                                    <div  class="form-group col-md-2 form-control-label" style="display:none">                                    
                                        <input type="text" readonly  id="l_pelaporkkk" name="l_pelaporkkk" class="form-control" placeholder="Nama" value="<?php echo $key['p_kk']; ?>" />
                                    </div>


                                

                                    <div class="form-group"  style="display:none">                                    
                                        <input type="text" class="form-control" id="pindah4" name="pindah4" placeholder="Judul Laporan" />
                                    </div>

                                    <select class="form-control show-tick ms select2" id="l_cat" name="l_cat" data-placeholder="Select">

                                        <option>Pilih Kategori Laporan</option>
                                        <option value="Bencana Alam">Bencana Alam</option>
                                        <option value="Fasilitas Umum" >Fasilitas Umum</option>
                                        <option value="Protokol Kesehatan">Protokol Kesehatan</option>
                                        <option value="Keresahan">Keresahan</option>



                                    </select><br>


                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" id="l_title" name="l_title" placeholder="Judul Laporan" />
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="4" class="form-control no-resize" id="l_message" name="l_message" placeholder="Ketik laporan anda..."></textarea>
                                    </div>

                                    <div class="input-group" style="display:none" >
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control datepicker" id="l_date" name="l_date" value="----" placeholder="Tanggal dan waktu kejadian...">
                                    </div>
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" id="l_loc" name="l_loc" placeholder="Ketik Lokasi Kejadian" />
                                    </div>
                                    <div class="form-group" style="display:none" >                                   
                                        <input type="text" class="form-control" type="date" id="l_date2" name="l_date2" class="form-control" id="datetimepicker"  value="<?php date_default_timezone_set("Asia/jakarta"); echo date('j.n.Y'); ?> <?php date_default_timezone_set("Asia/Jakarta"); echo date('h:i:s A'); ?>" placeholder="Ketik Lokasi Kejadian" />
                                    </div>





                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" id="l_namainstansi" name="l_namainstansi" placeholder="Ketik Instansi Tujuan" />
                                    </div>
                                    <div class="form-group" style="display:none" >                                   
                                        <input type="text" class="form-control" id="pindah6" name="l_anonim" id="l_anonim" placeholder="Ketik Instansi Tujuan" />
                                    </div>

                                    <div class="form-group">

                                        <input class="myRadio" id="yes1" type="radio" name="gender" value="1" oninput="generateFullNamea()"> Rahasia &nbsp;
                                        <script type="text/javascript">
                                            function generateFullNamea()
                                            {
                                                document.getElementById('pindah6').value = 
                                                document.getElementById('yes1').value;

                                            }
                                        </script>
                                        <input class="myRadio" id="no1" type="radio" name="gender" value="2" oninput="generateFullNameb()"> Tidak Rahasia<br><br>
                                        <script type="text/javascript">
                                            function generateFullNameb()
                                            {
                                                document.getElementById('pindah6').value = 
                                                document.getElementById('no1').value;

                                            }
                                        </script>

                                        <div style="font-size: 10px;" class="col-md-5 alert alert-danger">
                                            <strong>CATATAN :</strong><br><br>
                                            <strong>Rahasia</strong> Laporan anda tidak akan tersimpan di Status laporan anda<br>
                                           
                                        </div>
                                    </div>
                                    <input style="display:none" type="text"  id="notif_message" name="notif_message" class="form-control" value="Aspirasi anda sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih" placeholder="...." required>
                                 <input style="display:none" type="text"  id="notif_title" name="notif_title" class="form-control" value="Aspirasi" placeholder="...." required>
                                 <input style="display:none" type="text"  id="notif_logo" name="notif_logo" class="form-control" value="" placeholder="...." required>
                                 <input  style="display:none" type="text"  id="notif_icon" name="notif_icon" class="form-control" value="bg-green" placeholder="...." required>



                                    <a style="background-color: red; font-weight:bold; font-size:15px;" href="javascript: submitform2()" name="submit"  class="btn btn-raised btn-primary waves-effect">LAPOR !</a>
                                    <script type="text/javascript">
                                        function submitform2()
                                        {
                                          document.form2.submit();
                                      }
                                  </script>
                              </form>
                              <?php
                          }
                          ?>
                      </p>
                  </div>

              </div>
          </div>

          <div class="body">


          </div>
      </div>
  </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">


    </div>


</div>
</div>
</section>


<!-- Jquery Core Js --> 
<script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="../assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="../assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="../assets/bundles/c3.bundle.js"></script>

<script src="../assets/bundles/mainscripts.bundle.js"></script>
<script src="../assets/js/pages/index.js"></script>

<script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 
<link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

<script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="../assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js --> 
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 

<script src="../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="../assets/js/pages/forms/basic-form-elements.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 



<script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 
<script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="../assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js --> 
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 

<script src="../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="../assets/js/pages/forms/basic-form-elements.js"></script>




</body>


</html>
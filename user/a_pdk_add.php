﻿<?php
session_start();
include('ifnotloginadmin.php');
require_once('db_connect.php');
// require_once('library.php');


$ad_email = $_SESSION['ad_email'];
$sqlquery = "SELECT * FROM admin
WHERE ad_email='$ad_email' ";
$result = $connection->query($sqlquery) or die($connection->error);
$sqlqueryresult = $connection ->query($sqlquery);

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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
        <title>:: SIMNag :: Home</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Favicon-->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/plugins/dropify/css/dropify.min.css">

        <!-- Custom Css -->
        <link rel="stylesheet" href="assets/css/style.min.css">
        <link rel="icon" href="" type="image/x-icon"> <!-- Favicon-->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
        <link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css"/>

        <link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
        <!-- Custom Css -->
        <link rel="stylesheet" href="assets/css/style.min.css">

             <link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
        <!-- Custom Css -->
        <link rel="stylesheet" href="assets/css/style.min.css">

        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Bootstrap Material Datetime Picker Css -->
        <link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
        <!-- Bootstrap Select Css -->
        <link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- Custom Css -->
        <link  rel="stylesheet" href="assets/css/style.min.css">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    
<body class="theme-blush">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="" width="48" height="48" alt="SISTEM INFORMASI NAGARI"></div>
            <p>Please wait...</p>
        </div>
    </div>



    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <div class="navbar-brand">
            <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
            <a href="a_index.php"><img src="assets/images/KM_logo.png" style="width: 180px; height: auto;" width="25" alt="Aero"></a>
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
               <li ><a href="a_index.php"><i class="zmdi zmdi-home"></i><span>Beranda</span></a></li>
            <li class="active open"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Penduduk<div class="notify" ><span  class="heartbit"></span><span style="background-color:red;" class="point"></span></div></span></a>
                <ul class="ml-menu">
                    <li class="active"><a href="a_pdk_view.php">Data Penduduk</a></li>
                   
                    <li><a href="a_ubah.php">Perubahan Data<div class="notify" ><span  class="heartbit"></span><span style="background-color:red;" class="point"></span></div></a></li>                
                    <li><a href="a_perantau.php">Perantau</a></li>
                    
                </ul>
            </li>
            
            <li> <a href="javascript:void(4);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i><span>SIMNagari</span></a>
                <ul class="ml-menu">
                    <li ><a href="a_profilnagari.php">Profil Nagari</a></li>
                    <li><a href="a_datanagari.php">Data Website</a></li>
                    <li><a href="a_peng.php">Pengumuman</a></li> 
                    <li><a href="a_berita_view.php">Berita</a></li> 
                    <li><a href="a_wisata_view.php">Wisata</a></li>
                    <li><a href="a_keg_view.php">P. Kekayaan</a></li>                        
                </ul>
            </li>
             <?php  while ($key=$sqlqueryresult4 -> fetch_assoc()) {  $total = $key['total'];?>
             <li><a href="a_pdk_daftar.php"><i class="zmdi zmdi-hc-fw"></i><span>Pendaftaran</span><span class="badge badge-danger" style="color:white;"><?php echo $total ?></span></a></li>
             <?php }?>
              <?php  while ($key=$sqlqueryresult5 -> fetch_assoc()) {  $total2 = $key['total2'];?>
              <li><a href="a_pdk_lapor.php"><i class="zmdi zmdi-hc-fw"></i><span>Pengaduan</span><span class="badge badge-danger" style="color:white;"><?php echo $total2 ?></span>
              </a></li>
              <?php }?>
              <?php  while ($key=$surat -> fetch_assoc()) {  $total3 = $key['total3'];?>
              <li ><a href="a_surat.php"><i class="zmdi zmdi-hc-fw"></i><span>Surat</span><span class="badge badge-danger" style="color:white;"><?php echo $total3 ?></span>
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

    <section class="content">
        <div class="">
            <img style="width: 100%; height: auto;" src="assets/images/a_ok3.png">
            <div class="block-header">

                <div class="row">

                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <ul class="breadcrumb">
                            <li><a style="background-color:grey;" href="a_pdk_add.php" class="btn btn-primary waves-effect btn-lg"><i class="zmdi zmdi-hc-fw"></i>TAMBAH </a></li>
                            &nbsp;
                             
                             <li><a style="background-color:#04BE5B;" href="a_pdk_view.php" class="btn btn-primary waves-effect btn-lg"><i class="zmdi zmdi-hc-fw"></i> VIEW</a></li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    
                </div>
            </div>

            <div class="container-fluid">
             <div class="row clearfix">
                <div class="col-md-12">
                    <h2>Tambah Data Penduduk</h2>
                    <div class="card">
                        
                        <div class="body">
                            
                                        
                             <div class="body">
                                 
                            

                            <p>Pilih tambah data penduduk</p>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs p-0 mb-3">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">KEPALA KELUARGA</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">ANGGOTA KELUARGA</a></li>

                            </ul> 

                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane in active" id="home">
                                    <br><br>
                                    <b>KEPALA KELUARGA</b>
                                  
                                        <p>  <form id="form_validation" method="POST" action="a_pdk_add_pro.php" method="POST" name="form1" onsubmit="return validation()">
                                            
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                    <label for="email_address_2">No KK :</label>
                                                </div>
                                                <div class="col-lg-3 col-md-10 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" id="nokk" name="nokk" class="form-control" placeholder="....." maxlength="16" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                    <label for="email_address_2">Password </label>

                                                </div>
                                                <div class="col-lg-3 col-md-10 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text"  id="p_password" name="p_password" class="form-control"  placeholder="....." required>
                                                        <small style="font-style:italic;">Hanya untuk "Kepala Keluarga"</small>
                                                    </div>
                                                </div>
                                            </div><br><br>

                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                    <label for="email_address_2">NIK</label>
                                                </div>
                                                <div class="col-lg-3 col-md-10 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" id="p_nik" name="p_nik" class="form-control" maxlength="16"  placeholder="....." required>
                                                      
                                                    </div>
                                                </div>
                                            </div>

                                           
                                            


                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                    <label for="email_address_2">Nama</label>
                                                </div>
                                                <div class="col-lg-3 col-md-10 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" id="p_name" name="p_name" class="form-control"  placeholder="....." required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                    <label for="email_address_2">Status Hubungan</label>
                                                </div>
                                                <div class="col-lg-3 col-md-10 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" id="p_hub" readonly name="p_hub" value="Kepala Keluarga" class="form-control"  placeholder="....." required>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">No HP</label>
                                            </div>
                                            <div class="col-lg-3 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="p_telp" name="p_telp" class="form-control"  placeholder="....." required>
                                                </div>
                                            </div>
                                        </div>

                                            

                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                    <label for="email_address_2">Tempat Lahir</label>
                                                </div>
                                                <div class="col-lg-3 col-md-10 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text"  id="p_l_tempat" name="p_l_tempat" class="form-control" placeholder="....." required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                    <label for="email_address_2">Tanggal Lahir</label>
                                                </div>
                                                <div class="input-group col-md-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control datepicker" id="p_l_tanggal" name="p_l_tanggal"  placeholder="....." required>
                                                </div>
                                            </div><br><br>

                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                    <label for="email_address_2">Jenis Kelamin</label>
                                                </div>
                                                <div class="col-lg-3 col-md-10 col-sm-3">
                                                    <div class="form-group">
                                                       <select class="form-control show-tick ms select2" id="p_kelamin" name="p_kelamin" data-placeholder="Select" required>
                                                        <option disabled></option>
                                                        <option>Laki-laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Suku</label>
                                            </div>
                                            <div class="col-lg-3 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="p_suku" name="p_suku" class="form-control"  placeholder="....." required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Agama</label>
                                            </div>
                                            <div class="col-lg-3 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                   <select class="form-control show-tick ms select2" id="p_agama" name="p_agama" data-placeholder="Select" required>
                                   <option disabled>.....</option>
                                   <option value="Islam">Islam</option>
                                   <option value="Kristen">Kristen</option>
                                   <option value="Katolik">Katolik</option>
                                   <option value="Hindu">Hindu</option>
                                   <option value="Buddha">Buddha</option>
                                   <option value="Konghucu">Konghucu</option>
                               </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Alamat </label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <textarea type="text"  id="p_alamat" name="p_alamat"  class="form-control" placeholder="....." required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Pendidikan Terakhir</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-1">
                                                <div class="form-group">
                                                   <select class="form-control show-tick ms select2" id="p_pend" name="p_pend" data-placeholder="Select" required> 
                                                    <option disabled></option>
                                                    <option>Tidak Pernah Sekolah</option>
                                                    <option>Belum Masuk TK/PAUD</option>
                                                    <option>Putus Sekolah</option>
                                                    <option>Sedang D-3/Sederajat</option>
                                                    <option>Sedang S-1/Sederajat</option>
                                                    <option>Sedang S-2/Sederajat</option>

                                                    <option>Sedang S-3/Sederajat</option>
                                                    <option>Sedang SD/Sederajat</option>
                                                    <option>Sedang SMA/Sederajat</option>
                                                    <option>Sedang SMP/Sederajat</option>
                                                    <option>Sedang TK/PAUD</option>



                                                    <option>Tamat D-3/Sederajat</option>
                                                    <option>Tamat S-1/Sederajat</option>
                                                    <option>Tamat S-2/Sederajat</option>
                                                    <option>Tamat S-3/Sederajat</option>
                                                    <option>Tamat SD/Sederajat</option>

                                                    <option>Tamat SMA/Sederajat</option>
                                                    <option>Tamat SMP/Sederajat</option>
                                                    <option>Tidak dapat membaca</option>
                                                    <option>Tidak Diketahui</option>
                                                    

                                                    <option>Tidak Tamat SD/Sederajat</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                            <label for="email_address_2">Nama Instansi</label>
                                        </div>
                                        <div class="col-lg-6 col-md-10 col-sm-6">
                                            <div class="form-group">
                                                <input type="text"  id="p_pend_nama" name="p_pend_nama" class="form-control"  placeholder="....." required>
                                            </div>
                                        </div>
                                    </div><br><br>

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                            <label for="email_address_2">Status Pekerjaan</label>
                                        </div>
                                        <div class="col-lg-4 col-md-10 col-sm-4">
                                            <div class="form-group">
                                             <select class="form-control show-tick ms select2" id="p_pek" name="p_pek" data-placeholder="Select" required> 
                                                <option disabled></option>
                                                <option>BELUM/TIDAK BEKERJA</option>
                                                <option>AKUNTAN</option>
                                                <option>ANGGOTA BPK</option>
                                                <option>ANGGOTA DPD</option>
                                                <option>ANGGOTA DPR RI</option>
                                                <option>ANGGOTA DPRD KAB. KOTA</option>

                                                <option>ANGGOTA DPRD PROP</option>
                                                <option>ANGGOTA MAHKAMAH KONSTITUSI</option>
                                                <option>APOTEKER</option>
                                                <option>ARSITEK</option>
                                                



                                                <option>BIARAWATI</option>
                                                <option>BIDAN</option>
                                                <option>BUPATI</option>
                                                <option>BURUH HARIAN LEPAS</option>
                                                <option>BURUH MIGRAN</option>

                                                <option>BURUH NELAYAN/PERIKANAN</option>
                                                <option>BURUH PETERNAKAN</option>
                                                <option>BURUH TANI/PERKEBUNAN</option>
                                                <option>DOKTER</option>
                                                <option>DOSEN</option>


                                                <option>DUTA BESAR</option>
                                                <option>GUBERNUR</option>
                                                <option>GURU</option>
                                                <option>IMAM MASJID</option>
                                                <option>INDUSTRI</option>

                                                <option>JURU MASAK</option>
                                                <option>KARYAWAN BUMN</option>
                                                <option>KARYAWAN HONORER</option>
                                                <option>KARYAWAN SWASTA</option>
                                                <option>KEPALA DESA</option>


                                                <option>KEPOLISIAN RI</option>
                                                <option>KONSTRUKSI</option>
                                                <option>KONSULTAN</option>
                                                <option>MEKANIK</option>
                                                <option>MENGURUS RUMAH TANGGA</option>

                                                <option>NELAYAN/PERIKANAN</option>
                                                <option>NOTARIS</option>
                                                <option>PARAJI</option>
                                                <option>PARANORMAL</option>
                                                <option>PASTOR</option>


                                                <option>PEDAGANG</option>
                                                <option>PEGAWAI NEGERI SIPIL (PNS)</option>
                                                <option>PELAJAR/MAHASISWA</option>
                                                <option>PELAUT</option>
                                                <option>PEMBANTU RUMAH TANGGA</option>

                                                <option>PENATA BUSANA</option>
                                                <option>PENATA RAMBUT</option>
                                                <option>PENATA RIAS</option>
                                                <option>PENDETA</option>
                                                <option>PENELITI</option>


                                                <option>PENGACARA</option>
                                                <option>PENSIUNAN</option>
                                                <option>PENTERJEMAH</option>
                                                <option>PENYIAR RADIO</option>
                                                <option>PENYIAR TELEVISI</option>

                                                <option>PERANCANG BUSANA</option>
                                                <option>PERANGKAT DESA</option>
                                                <option>PERAWAT</option>
                                                <option>PERDAGANGAN</option>
                                                <option>PETANI/PEKEBUN</option>


                                                <option>PETERNAK</option>
                                                <option>PIALANG</option>
                                                <option>PILOT</option>
                                                <option>PRESIDEN</option>
                                                <option>PROMOTOR ACARA</option>

                                                <option>PSIKIATER/PSIKOLOG</option>
                                                <option>SENIMAN</option>
                                                <option>SOPIR</option>
                                                <option>TABIB</option>
                                                <option>TENTARA NASIONAL INDONESIA (TNI)</option>


                                                <option>Tidak Diketahui</option>
                                                <option>TRANSPORTASI</option>
                                                <option>TUKANG BATU</option>
                                                <option>TUKANG CUKUR</option>
                                                <option>TUKANG GIGI</option>

                                                <option>TUKANG JAHIT</option>
                                                <option>TUKANG KAYU</option>
                                                <option>TUKANG LAS/PANDAI BESI</option>
                                                <option>TUKANG LISTRIK</option>
                                                <option>TUKANG SOL SEPATU</option>


                                                <option>USTADZ/MUBALIGH</option>
                                                <option>WAKIL BUPATI</option>
                                                <option>WAKIL GUBERNUR</option>
                                                <option>WAKIL PRESIDEN</option>
                                                <option>WAKIL WALIKOTA</option>

                                                 <option>WALIKOTA</option>
                                                <option>WARTAWAN</option>
                                                <option>WIRASWASTA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                        <label for="email_address_2">Nama Instansi</label>
                                    </div>
                                    <div class="col-lg-6 col-md-10 col-sm-6">
                                        <div class="form-group">
                                            <input type="text"  id="p_pek_nama" name="p_pek_nama" class="form-control" placeholder="....." required>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-8 offset-sm-2">

                                    <a style="background-color: grey; font-weight:bold; " href="simnag_biodata.php" type="button" class="btn btn-raised btn-primary btn-round waves-effect">KEMBALI</a>
                                    <a type="submit" href="javascript: submitform()" name="submit" class="btn btn-raised btn-primary btn-round waves-effect">TAMBAH</a>
                                </div>
                                 <script type="text/javascript">
                                                function submitform()
                                                {
                                                  document.form1.submit();
                                              }
                                          </script>



                            </form>
                                      
                                  </p>
                              </div>
                              <div role="tabpanel" class="tab-pane" id="profile">
                                <br><br>
                                <b>ANGGOTA KELUARGA</b>
                                
                                <p>  <form id="form_validation2" method="POST" action="a_pdk_add_pro2.php" method="POST" name="form2" onsubmit="return validation2()">
                                            
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                    <label for="email_address_2">No KK :</label>
                                                </div>
                                                <div class="col-lg-3 col-md-10 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" id="nokkk" name="nokkk" class="form-control" maxlength="16" placeholder="....." required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                    <label for="email_address_2">NIK</label>
                                                </div>
                                                <div class="col-lg-3 col-md-10 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" id="k_nik" name="k_nik" class="form-control" maxlength="16"  placeholder="....." required>
                                                 </div>
                                                </div>
                                            </div>

                                           
                                            <div class="row clearfix" style="display:none" >
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">

                                                </div>
                                                <div class="col-lg-3 col-md-10 col-sm-3">
                                                    <div class="form-group checkbox">
                                                        <input id="remember_me" type="checkbox" oninput="generateFullName5()">
                                                        <label for="remember_me">
                                                            Belum punya
                                                        </label>
                                                    </div>
                                                </div>
                                            </div><br><br>



                                           

                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                    <label for="email_address_2">Nama</label>
                                                </div>
                                                <div class="col-lg-3 col-md-10 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text" id="k_name" name="k_name" class="form-control"  placeholder="....." required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                    <label for="email_address_2">Status Hubungan</label>
                                                </div>
                                                <div class="col-lg-3 col-md-10 col-sm-3">
                                                    <div class="form-group">
                                                        <select class="form-control show-tick ms select2" id="k_hub" name="k_hub" data-placeholder="Select" required>
                                                            <option disabled>....</option>
                                                           
                                                            <option value="Istri">Istri</option>
                                                            <option value="Anak">Anak</option>
                                                            <option value="Famili Lain">Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">No HP</label>
                                            </div>
                                            <div class="col-lg-3 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="k_telp" name="k_telp" class="form-control"  placeholder="....." required>
                                                </div>
                                            </div>
                                        </div>

                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                    <label for="email_address_2">Tempat Lahir</label>
                                                </div>
                                                <div class="col-lg-3 col-md-10 col-sm-3">
                                                    <div class="form-group">
                                                        <input type="text"  id="k_l_tempat" name="k_l_tempat" class="form-control" placeholder="....." required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                    <label for="email_address_2">Tanggal Lahir</label>
                                                </div>
                                                <div class="input-group col-md-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control datepicker" id="k_l_tanggal" name="k_l_tanggal"  placeholder="....." required>
                                                </div>
                                            </div><br><br>

                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                    <label for="email_address_2">Jenis Kelamin</label>
                                                </div>
                                                <div class="col-lg-3 col-md-10 col-sm-3">
                                                    <div class="form-group">
                                                       <select class="form-control show-tick ms select2" id="k_kelamin" name="k_kelamin" data-placeholder="Select" required>
                                                        <option disabled></option>
                                                        <option value="Laki-Laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Suku</label>
                                            </div>
                                            <div class="col-lg-3 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="k_suku" name="k_suku" class="form-control"  placeholder="....." required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Agama</label>
                                            </div>
                                            <div class="col-lg-3 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                   <select class="form-control show-tick ms select2" id="k_agama" name="k_agama" data-placeholder="Select" required>
                                   <option disabled>.....</option>
                                   <option value="Islam">Islam</option>
                                   <option value="Kristen">Kristen</option>
                                   <option value="Katolik">Katolik</option>
                                   <option value="Hindu">Hindu</option>
                                   <option value="Buddha">Buddha</option>
                                   <option value="Konghucu">Konghucu</option>
                               </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Alamat </label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <textarea type="text"  id="k_alamat" name="k_alamat"  class="form-control" placeholder="....." required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Pendidikan Terakhir</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-1">
                                                <div class="form-group">
                                                   <select class="form-control show-tick ms select2" id="k_pend" name="k_pend" data-placeholder="Select" required> 
                                                    <option disabled></option>
                                                    <option>Tidak Pernah Sekolah</option>

                                                    <option>Belum Masuk TK/PAUD</option>
                                                    <option>Putus Sekolah</option>
                                                    <option>Sedang D-3/Sederajat</option>
                                                    <option>Sedang S-1/Sederajat</option>
                                                    <option>Sedang S-2/Sederajat</option>

                                                    <option>Sedang S-3/Sederajat</option>
                                                    <option>Sedang SD/Sederajat</option>
                                                    <option>Sedang SMA/Sederajat</option>
                                                    <option>Sedang SMP/Sederajat</option>
                                                    <option>Sedang TK/PAUD</option>



                                                    <option>Tamat D-3/Sederajat</option>
                                                    <option>Tamat S-1/Sederajat</option>
                                                    <option>Tamat S-2/Sederajat</option>
                                                    <option>Tamat S-3/Sederajat</option>
                                                    <option>Tamat SD/Sederajat</option>

                                                    <option>Tamat SMA/Sederajat</option>
                                                    <option>Tamat SMP/Sederajat</option>
                                                    <option>Tidak dapat membaca</option>
                                                    <option>Tidak Diketahui</option>
                                                    
                                                    <option>Tidak Tamat SD/Sederajat</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                            <label for="email_address_2">Nama Kampus</label>
                                        </div>
                                        <div class="col-lg-6 col-md-10 col-sm-6">
                                            <div class="form-group">
                                                <input type="text"  id="k_pend_nama" name="k_pend_nama" class="form-control"  placeholder="....." required>
                                            </div>
                                        </div>
                                    </div><br><br>

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                            <label for="email_address_2">Status Pekerjaan</label>
                                        </div>
                                        <div class="col-lg-4 col-md-10 col-sm-4">
                                            <div class="form-group">
                                             <select class="form-control show-tick ms select2" id="k_pek" name="k_pek" data-placeholder="Select" required> 
                                                <option disabled></option>
                                                <option>BELUM/TIDAK BEKERJA</option>
                                                <option>AKUNTAN</option>
                                                <option>ANGGOTA BPK</option>
                                                <option>ANGGOTA DPD</option>
                                                <option>ANGGOTA DPR RI</option>
                                                <option>ANGGOTA DPRD KAB. KOTA</option>

                                                <option>ANGGOTA DPRD PROP</option>
                                                <option>ANGGOTA MAHKAMAH KONSTITUSI</option>
                                                <option>APOTEKER</option>
                                                <option>ARSITEK</option>
                                                



                                                <option>BIARAWATI</option>
                                                <option>BIDAN</option>
                                                <option>BUPATI</option>
                                                <option>BURUH HARIAN LEPAS</option>
                                                <option>BURUH MIGRAN</option>

                                                <option>BURUH NELAYAN/PERIKANAN</option>
                                                <option>BURUH PETERNAKAN</option>
                                                <option>BURUH TANI/PERKEBUNAN</option>
                                                <option>DOKTER</option>
                                                <option>DOSEN</option>


                                                <option>DUTA BESAR</option>
                                                <option>GUBERNUR</option>
                                                <option>GURU</option>
                                                <option>IMAM MASJID</option>
                                                <option>INDUSTRI</option>

                                                <option>JURU MASAK</option>
                                                <option>KARYAWAN BUMN</option>
                                                <option>KARYAWAN HONORER</option>
                                                <option>KARYAWAN SWASTA</option>
                                                <option>KEPALA DESA</option>


                                                <option>KEPOLISIAN RI</option>
                                                <option>KONSTRUKSI</option>
                                                <option>KONSULTAN</option>
                                                <option>MEKANIK</option>
                                                <option>MENGURUS RUMAH TANGGA</option>

                                                <option>NELAYAN/PERIKANAN</option>
                                                <option>NOTARIS</option>
                                                <option>PARAJI</option>
                                                <option>PARANORMAL</option>
                                                <option>PASTOR</option>


                                                <option>PEDAGANG</option>
                                                <option>PEGAWAI NEGERI SIPIL (PNS)</option>
                                                <option>PELAJAR/MAHASISWA</option>
                                                <option>PELAUT</option>
                                                <option>PEMBANTU RUMAH TANGGA</option>

                                                <option>PENATA BUSANA</option>
                                                <option>PENATA RAMBUT</option>
                                                <option>PENATA RIAS</option>
                                                <option>PENDETA</option>
                                                <option>PENELITI</option>


                                                <option>PENGACARA</option>
                                                <option>PENSIUNAN</option>
                                                <option>PENTERJEMAH</option>
                                                <option>PENYIAR RADIO</option>
                                                <option>PENYIAR TELEVISI</option>

                                                <option>PERANCANG BUSANA</option>
                                                <option>PERANGKAT DESA</option>
                                                <option>PERAWAT</option>
                                                <option>PERDAGANGAN</option>
                                                <option>PETANI/PEKEBUN</option>


                                                <option>PETERNAK</option>
                                                <option>PIALANG</option>
                                                <option>PILOT</option>
                                                <option>PRESIDEN</option>
                                                <option>PROMOTOR ACARA</option>

                                                <option>PSIKIATER/PSIKOLOG</option>
                                                <option>SENIMAN</option>
                                                <option>SOPIR</option>
                                                <option>TABIB</option>
                                                <option>TENTARA NASIONAL INDONESIA (TNI)</option>


                                                <option>Tidak Diketahui</option>
                                                <option>TRANSPORTASI</option>
                                                <option>TUKANG BATU</option>
                                                <option>TUKANG CUKUR</option>
                                                <option>TUKANG GIGI</option>

                                                <option>TUKANG JAHIT</option>
                                                <option>TUKANG KAYU</option>
                                                <option>TUKANG LAS/PANDAI BESI</option>
                                                <option>TUKANG LISTRIK</option>
                                                <option>TUKANG SOL SEPATU</option>


                                                 <option>USTADZ/MUBALIGH</option>
                                                <option>WAKIL BUPATI</option>
                                                <option>WAKIL GUBERNUR</option>
                                                <option>WAKIL PRESIDEN</option>
                                                <option>WAKIL WALIKOTA</option>

                                                 <option>WALIKOTA</option>
                                                <option>WARTAWAN</option>
                                                <option>WIRASWASTA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                        <label for="email_address_2">Nama Instansi</label>
                                    </div>
                                    <div class="col-lg-6 col-md-10 col-sm-6">
                                        <div class="form-group">
                                            <input type="text"  id="k_pek_nama" name="k_pek_nama" class="form-control" placeholder="....." required>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-8 offset-sm-2">

                                    <a style="background-color: grey; font-weight:bold; " href="a_index.php" type="button" class="btn btn-raised btn-primary btn-round waves-effect">KEMBALI</a>
                                    <a type="submit" href="javascript: submitform2()" name="submit" class="btn btn-raised btn-primary btn-round waves-effect">TAMBAH</a>
                                </div>
                                 <script type="text/javascript">
                                                function submitform2()
                                                {
                                                  document.form2.submit();
                                              }
                                          </script>



                            </form>
                              
                        </p>



                        </div>
                    </div>
                </div>                    
            </div>

            
            
        </div>
    </div>
</section>




<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/bundles/c3.bundle.js"></script>


<script src="assets/js/pages/index.js"></script>

<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js --> 
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/forms/basic-form-elements.js"></script>
</body>
</body>


</html>
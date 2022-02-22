<?php
session_start();
include('ifnotloginadmin.php');
require_once('db_connect.php');

$ad_email = $_SESSION['ad_email'];
$sqlquery = "SELECT * FROM admin
WHERE ad_email='$ad_email' ";
$result = $connection->query($sqlquery) or die($connection->error);
$sqlqueryresult = $connection ->query($sqlquery);

$sqlquery2 = "SELECT * FROM pengumuman
ORDER BY peng_id DESC";
$result2 = $connection->query($sqlquery2) or die($connection->error);
$sqlqueryresult2 = $connection ->query($sqlquery2);

$sqlquery3 = "SELECT * FROM pengumuman
ORDER BY peng_id LIMIT 1";
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

$sqlpektotal = "SELECT SUM(pn_pek_jumlah) AS `totalpek` FROM pn_pek";
$pektotal = $connection ->query($sqlpektotal);

$sqlagama = "SELECT * FROM pn_agama";
$pn_agama = $connection->query($sqlagama) or die($connection->error);
$agama = $connection ->query($sqlagama);

$sqlpdk = "SELECT * FROM pn_pdk";
$pn_pdk = $connection->query($sqlpdk) or die($connection->error);
$pdk = $connection ->query($sqlpdk);

$sqlpek = "SELECT * FROM pn_pek";
$pn_pek = $connection->query($sqlpek) or die($connection->error);
$pek = $connection ->query($sqlpek);

$sqlsek = "SELECT * FROM pn_sekolah";
$pn_sek = $connection->query($sqlsek) or die($connection->error);
$sek = $connection ->query($sqlsek);

$sqlumur = "SELECT * FROM pn_umur";
$pn_umur = $connection->query($sqlumur) or die($connection->error);
$umur = $connection ->query($sqlumur);

$sqlumur2 = "SELECT * FROM pn_umur";
$pn_umur2 = $connection->query($sqlumur2) or die($connection->error);
$umur2 = $connection ->query($sqlumur2);


$sqlumur3 = "SELECT * FROM pn_umur";
$pn_umur3 = $connection->query($sqlumur3) or die($connection->error);
$umur3 = $connection ->query($sqlumur3);



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

        <!-- Custom Css -->
        <link rel="stylesheet" href="assets/css/style.min.css">
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/footable-bootstrap/css/footable.bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/footable-bootstrap/css/footable.standalone.min.css">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jquery-steps/jquery.steps.css">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jquery-steps/jquery.steps.css">

<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">
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
            <li > <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Penduduk<div class="notify" ><span  class="heartbit"></span><span style="background-color:red;" class="point"></span></div></span></a>
                <ul class="ml-menu">
                    <li ><a href="a_pdk_view.php">Data Penduduk</a></li>
                   
                    <li><a href="a_ubah.php">Perubahan Data<div class="notify" ><span  class="heartbit"></span><span style="background-color:red;" class="point"></span></div></a></li>                
                    <li><a href="a_perantau.php">Perantau</a></li>
                    
                </ul>
            </li>
            
            <li class="active open"> <a href="javascript:void(4);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i><span>SIMNagari</span></a>
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
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>PROFIL NAGARI</h2>
                   
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                
            </div>
        </div>
        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>jumlah penduduk</strong> Menurut Agama</h2>
                            <ul class="header-dropdown">

                               
                                <li class="remove">
                                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal" style="background-color:#04BE5B;" href=""><i style="color:white;" class="zmdi zmdi-hc-fw"></i>Tambah</a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <div id="chart-donut-agama" style="height: 17rem"></div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover c_table mb-0">
                                            
                                            <tr>
                                        <th>Nama Jorong</th>
                                        <th>Islam</th>
                                        <th>Kristen</th>
                                        <th>Hindu</th>
                                        <th>-</th>
                                         </tr>
                                    <tbody>
                                        <?php
                                    while ($row = $pn_agama ->fetch_assoc())
                                    {
                                        ?>
                                    <tr>
                                        <td><?php echo $row['pn_agama_jor']; ?></td>
                                        <td><?php echo $row['pn_agama_1']; ?></td>
                                        <td><?php echo $row['pn_agama_2']; ?></td>
                                        <td><?php echo $row['pn_agama_3']; ?></td>
                                        <td><?php echo $row['pn_agama_4']; ?></td>
                                        <td> <a class="btn btn-primary btn-sm" href="a_pn_agama_edit.php?pn_agama_id=<?php echo $row['pn_agama_id']; ?>" role="button" href="" ><i class="zmdi zmdi-hc-fw"></i></a>
                                        <a href="a_pn_agama_delete.php?pn_agama_id=<?php echo $row['pn_agama_id']; ?>" onclick="return confirm('Anda yakin untuk menghapus ?');" role="button" class="btn btn-danger btn-sm" ><i class="zmdi zmdi-delete"></i></a></td>
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


            <div class="row clearfix">
                <div class="col-lg-8 col-md-12">
                    <div class="card visitors-map">
                        <div class="header">
                            <h2><strong>JUMLAH</strong> Penyebaran Penduduk</h2>
                            <ul class="header-dropdown">
                                
                               
                                <li class="remove">
                                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal2" style="background-color:#04BE5B;"  href=""><i class="zmdi zmdi-hc-fw" style="color:white;"></i>Tambah</a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th width="40%" >Nama Jorong</th>
                                        <th>Total Penduduk</th>
                                        <th>Total KK</th>
                                        <th>-</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    while ($row = $pn_pdk ->fetch_assoc())
                                    {
                                        ?>
                                    <tr>
                                        <td width="40%"><?php echo $row['pn_pdk_jor']; ?></td>
                                        <td><?php echo $row['pn_pdk_pdk']; ?></td>
                                        <td><?php echo $row['pn_pdk_kk']; ?></td>
                                        <td><a href="a_pn_pdk_edit.php?pn_pdk_id=<?php echo $row['pn_pdk_id']; ?>" role="button" class="btn btn-primary btn-sm" href="" ><i class="zmdi zmdi-hc-fw"></i></a>
                                        <a href="a_pn_pdk_delete.php?pn_pdk_id=<?php echo $row['pn_pdk_id']; ?>" onclick="return confirm('Anda yakin untuk menghapus ?');" role="button" class="btn btn-danger btn-sm" ><i class="zmdi zmdi-delete"></i></a> </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                   
                                                                          
                                </tbody>
                            </table>                                    
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Lapangan</strong> Pekerjaan</h2>
                            <ul class="header-dropdown">
                                
                              
                                <li class="remove">
                                      <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal3" style="background-color:#04BE5B;"  href=""><i class="zmdi zmdi-hc-fw" style="color:white;"></i>Tambah</a>
                                </li>
                            </ul>
                        </div>
                       
                        <div class="table-responsive">
                            <table class="table table-hover c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th>Pekerjaan</th>
                                        <th>Jumlah</th>
                                        <th>-</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = $pn_pek ->fetch_assoc())
                                    {
                                        ?>
                                    <tr>
                                        <td><?php echo $row['pn_pek_nama']; ?></td>
                                        <td><?php echo $row['pn_pek_jumlah']; ?></td>
                                        <td><a href="a_pn_pek_edit.php?pn_pek_id=<?php echo $row['pn_pek_id']; ?>" role="button" class="btn btn-primary btn-sm" href="" ><i class="zmdi zmdi-hc-fw"></i></a>
                                        <a href="a_pn_pek_delete.php?pn_pek_id=<?php echo $row['pn_pek_id']; ?>" onclick="return confirm('Anda yakin untuk menghapus ?');" role="button" class="btn btn-danger btn-sm" ><i class="zmdi zmdi-delete"></i></a> </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    
                                    <tr style="background-color:#d4d4d4;">
                                         <?php  while ($key=$pektotal -> fetch_assoc()) {  $totalpek = $key['totalpek'];?>
                                        <td>Jumlah</td>
                                        <td><?php echo $totalpek ?></td>
                                        <?php }?>
                                        <td>-</td>
                                      
                                    </tr>
                                    
                                     
                                                                                                                     
                                </tbody>
                            </table>                                    
                        </div>
                    </div>
                </div>
            </div>

          
            <!--<div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Jumlah penduduk</strong> Menurut Kelompok Umur dan Jenis kelamin</h2>
                            <ul class="header-dropdown">
                                
                                <li class="remove">
                                      <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal2" style="background-color:#04BE5B;"  href=""><i class="zmdi zmdi-hc-fw" style="color:white;"></i>Tambah</a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                   <div id="chart-bar-umur" class="c3_chart"></div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>-->

            <div class="row clearfix">
                <div class="col-lg-14 col-md-12">
                    <div class="card visitors-map">
                        <div class="header">
                             <h2><strong>Jumlah penduduk</strong> Menurut Kelompok Umur dan Jenis kelamin</h2>
                            <ul class="header-dropdown">
                                
                               
                                <li class="remove">
                                     <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal4" style="background-color:#04BE5B;"  href=""><i class="zmdi zmdi-hc-fw" style="color:white;" ></i>Edit</a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th width="5%">Umur</th>
                                         <?php
                                    while ($row = $pn_umur3 ->fetch_assoc())
                                    {
                                        ?>
                                        <th><?php echo $row['pn_umur_cat']; ?></th>
                                        <?php
                                    }
                                    ?>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <tr>
                                        <td>Laki-Laki</td>
                                         <?php
                                    while ($row = $pn_umur ->fetch_assoc())
                                    {
                                        ?>
                                        <td><?php echo $row['pn_umur_l']; ?></td>
                                         <?php
                                    }
                                    ?>
                                                                           
                                       
                                    </tr>
                                     <tr>
                                        <td>Perempuan</td>
                                       
                                    <?php
                                    while ($row = $pn_umur2 ->fetch_assoc())
                                    {
                                        ?>
                                        <td><?php echo $row['pn_umur_p']; ?></td>
                                         <?php
                                    }
                                    ?>
                                        
                                       
                                    </tr>
                                    
                                    
                                   
                                                                          
                                </tbody>
                            </table>                                    
                        </div>
                    </div>
                </div>                   
            </div>

             <div class="row clearfix">
                <div class="col-lg-14 col-md-12">
                    <div class="card visitors-map">
                        <div class="header">
                            <h2><strong>JUMLAH</strong> Tempat Pendidikan</h2>
                            <ul class="header-dropdown">
                                
                               
                                <li class="remove">
                                     <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal4" style="background-color:#04BE5B;"  href=""><i class="zmdi zmdi-hc-fw" style="color:white;"></i>Tambah</a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Tingkat</th>
                                        <th width="40%">Nama Sekolah</th>
                                        <th>Jorong</th>
                                        <th>Jumlah Guru</th>
                                        <th>Jumlah Murid</th>
                                        <th>-</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = $pn_sek ->fetch_assoc())
                                    {
                                        ?>
                                    <tr>
                                        <td><?php echo $row['pn_sek_id']; ?></td>
                                        <td><?php echo $row['pn_sek_tingkat']; ?></td>
                                        <td><?php echo $row['pn_sek_nama']; ?></td>
                                        <td><?php echo $row['pn_sek_jor']; ?></td>
                                        <td><?php echo $row['pn_sek_guru']; ?></td>
                                        <td><?php echo $row['pn_sek_siswa']; ?></td>
                                        <td> <a class="btn btn-primary btn-sm" href="a_pn_sek_edit.php?pn_sek_id=<?php echo $row['pn_sek_id']; ?>" role="button" href="" ><i class="zmdi zmdi-hc-fw"></i></a>
                                        <a href="a_pn_sek_delete.php?pn_sek_id=<?php echo $row['pn_sek_id']; ?>" onclick="return confirm('Anda yakin untuk menghapus ?');" role="button" class="btn btn-danger btn-sm" ><i class="zmdi zmdi-delete"></i></a></td>
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


<script type="text/javascript">
    function submitform()
    {
      document.form1.submit();
  }
  function submitform2()
    {
      document.form2.submit();
  }
  function submitform3()
    {
      document.form3.submit();
  }
  function submitform4()
    {
      document.form4.submit();
  }
</script>

<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Jorong menurut agama</h4>
            </div>
            <div class="modal-body"> 
                <form id="form_validation" method="POST" action="a_pn_agama_add.php" method="POST" name="form1" onsubmit="return validation()">
                                <label for="email_address">Nama Jorong :</label>
                                <div class="form-group">                                
                                    <input type="text" id="pn_agama_jor" name="pn_agama_jor" class="form-control" placeholder="Ketik nama Jorong baru">
                                    
                                </div>
                                <label for="email_address">Jumlah Penduduk :</label>
                                
                                <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Muslim</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="pn_agama_1" name="pn_agama_1" class="form-control"  placeholder="....." value="0" required>
                                                </div>
                                            </div>
                                </div>

                                <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Kristen</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="pn_agama_2" name="pn_agama_2" class="form-control"  placeholder="....." value="0" required>
                                                </div>
                                            </div>
                                </div>

                                <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Buddha</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="pn_agama_3" name="pn_agama_3" class="form-control"  placeholder="....." value="0" required>
                                                </div>
                                            </div>
                                </div>

                                <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Hindu</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="pn_agama_4" name="pn_agama_4" class="form-control"  placeholder="....." value="0" required>
                                                </div>
                                            </div>
                                </div>
                                                          
                            <div class="modal-footer">
                                <a type="submit" href="javascript: submitform()" name="submit" class="btn btn-raised btn-primary btn-round waves-effect">TAMBAH</a>
               
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>  
            </form>
        </div>
            
        </div>
    </div>
</div>

<div class="modal fade" id="defaultModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Penyebaran penduduk</h4>
            </div>
            <div class="modal-body"> 
                <form id="form_validation" method="POST" action="a_pn_pdk_add.php" method="POST" name="form2" onsubmit="return validation()">
                                <label for="email_address">Nama Jorong :</label>
                                <div class="form-group">                                
                                    <input type="text" id="pn_pdk_jor" name="pn_pdk_jor" class="form-control" placeholder="Ketik nama Jorong baru">
                                    
                                </div>
                              
                                
                                <div class="row clearfix">
                                            <div class="col-lg-6 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Total penduduk</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="pn_pdk_pdk" name="pn_pdk_pdk" class="form-control"  placeholder="....." value="0" required>
                                                </div>
                                            </div>
                                </div>

                                <div class="row clearfix">
                                            <div class="col-lg-6 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Total KK</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="pn_pdk_kk" name="pn_pdk_kk" class="form-control"  placeholder="....." value="0" required>
                                                </div>
                                            </div>
                                </div>

                               

                                
                                                          
                            <div class="modal-footer">
                                <a type="submit" href="javascript: submitform2()" name="submit" class="btn btn-raised btn-primary btn-round waves-effect">TAMBAH</a>
               
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>  
            </form>
        </div>
            
        </div>
    </div>
</div>

<div class="modal fade" id="defaultModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Lapangan Pekerjaan</h4>
            </div>
            <div class="modal-body"> 
                <form id="form_validation" method="POST" action="a_pn_pek_add.php" method="POST" name="form3" onsubmit="return validation()">
                                
                              
                                
                                <div class="row clearfix">
                                            <div class="col-lg-6 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Nama Pekerjaan</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="pn_pek_nama" name="pn_pek_nama" class="form-control"  placeholder="....." value="" required>
                                                </div>
                                            </div>
                                </div>

                                <div class="row clearfix">
                                            <div class="col-lg-6 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Jumlah Pekerja</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="pn_pek_jumlah" name="pn_pek_jumlah" class="form-control"  placeholder="....." value="0" required>
                                                </div>
                                            </div>
                                </div>

                               

                                
                                                          
                            <div class="modal-footer">
                                <a type="submit" href="javascript: submitform3()" name="submit" class="btn btn-raised btn-primary btn-round waves-effect">TAMBAH</a>
               
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>  
            </form>
        </div>
            
        </div>
    </div>
</div>

<div class="modal fade" id="defaultModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Tempat Pendidikan</h4>
            </div>
            <div class="modal-body"> 
                <form id="form_validation" method="POST" action="a_pn_sek_add.php" method="POST" name="form4" onsubmit="return validation()">
                                
                              
                                
                                <div class="row clearfix">
                                            <div class="col-lg-6 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Tingkat</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                     <select class="form-control show-tick ms select2"  id="pn_sek_tingkat" name="pn_sek_tingkat" data-placeholder="Select" required>
                                                            
                                                            <option value="PAUD">PAUD</option>
                                                            <option value="TK">TK</option>
                                                             <option value="SD">SD</option>
                                                              <option value="SMP">SMP</option>
                                                               <option value="SMA">SMA</option>
                                                                <option value="PT">Perguruan Tinggi</option>
                                                               
                                                        </select>
                                                </div>
                                            </div>
                                </div>

                                <div class="row clearfix">
                                            <div class="col-lg-6 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Nama Sekolah</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="pn_sek_nama" name="pn_sek_nama" class="form-control"  placeholder="....."  required>
                                                </div>
                                            </div>
                                </div>
                                <div class="row clearfix">
                                            <div class="col-lg-6 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Nama Jorong</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="pn_sek_jor" name="pn_sek_jor" class="form-control"  placeholder="....."  required>
                                                </div>
                                            </div>
                                </div>
                                <div class="row clearfix">
                                            <div class="col-lg-6 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Jumlah Guru</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="pn_sek_guru" name="pn_sek_guru" class="form-control"  placeholder="....." value="0" required>
                                                </div>
                                            </div>
                                </div>
                                <div class="row clearfix">
                                            <div class="col-lg-6 col-md-2 col-sm24 form-control-label">
                                                <label for="email_address_2">Jumlah Siswa</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  id="pn_sek_siswa" name="pn_sek_siswa" class="form-control"  placeholder="....." value="0" required>
                                                </div>
                                            </div>
                                </div>

                               

                                
                                                          
                            <div class="modal-footer">
                                <a type="submit" href="javascript: submitform4()" name="submit" class="btn btn-raised btn-primary btn-round waves-effect">TAMBAH</a>
               
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>  
            </form>
        </div>
            
        </div>
    </div>
</div>


<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/c3.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/pages/charts/c3.js"></script>

</body>


</html>
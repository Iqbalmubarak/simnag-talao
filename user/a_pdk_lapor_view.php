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


$sqlquery2 = "SELECT * FROM lapor,penduduk WHERE l_id='".$_GET["l_id"]."'  ";
$sqlqueryresult2 = mysqli_query($connection,$sqlquery2);

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
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Favicon-->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- JQuery DataTable Css -->
        <link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
        <!-- Custom Css -->
        <link  rel="stylesheet" href="assets/css/style.min.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
        <title>:: SIMNag :: Home</title>
        <link rel="icon" href="" type="image/x-icon"> <!-- Favicon-->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
        <link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css"/>

        <link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
        <!-- Custom Css -->
        <link rel="stylesheet" href="assets/css/style.min.css">
    </head>
   
<body class="theme-blush" >

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
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Penduduk<div class="notify" ><span  class="heartbit"></span><span style="background-color:red;" class="point"></span></div></span></a>
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
              <li class="active open"><a href="a_pdk_lapor.php"><i class="zmdi zmdi-hc-fw"></i><span>Pengaduan</span><span class="badge badge-danger" style="color:white;"><?php echo $total2 ?></span>
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

<!-- Main Content -->

<section class="content">
    <div class="">
        <img style="width: 100%; height: auto;" src="assets/images/lapor.png">
        <div class="block-header">

            <div class="row">

                <div class="col-lg-7 col-md-6 col-sm-12">


                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>

            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">





                            <!-- Tab panes -->
                            <div class="tab-content ">
                                

                                <div role="tabpanel" class="tab-pane in active" id="home" >

                                    <b style="font-weight:bold; font-size:25px;">PENGADUAN</b>
                                    <?php                           
                                    foreach ($sqlqueryresult2 as $key) {

                                        $l_id = $key['l_id'];
                                        $l_type = $key['l_type'];
                                        $l_cat = $key['l_cat'];
                                        $l_title = $key['l_title'];
                                        $l_message = $key['l_message'];

                                        $l_date = $key['l_date'];
                                        $l_loc = $key['l_loc'];
                                        $l_namainstansi = $key['l_namainstansi'];

                                        $l_pelapornik = $key['l_pelapornik'];

                                        $l_date2 = $key['l_date2'];
                                        $l_pelaporkk = $key['l_pelaporkk'];
                                        $l_status = $key['l_status'];





                                    } ?>
                                    <p> 


                                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                                        <div class="row">                                
                                            <div class="col-md-6 col-sm-6">
                                                <p>Nomor ID Laporan : <?php echo $l_id ?> </p>
                                                <p>Jenis Laporan : <a style="font-weight:bold; font-size:15px; color: red;"><?php echo $l_type ?></a> </p>

                                            </div>
                                            <div class="col-md-6 col-sm-6 text-right">
                                                <p ><strong>Laporan dibuat : </strong><?php echo $l_date ?></p>
                                                <p ><strong>Status: </strong> <span class="badge badge-success"><?php echo $l_status ?></span></p>                                    
                                            </div>
                                        </div>


                                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                                        <div class="row">                                
                                         <div class="col-md-6 col-sm-6">
                                            <p class="mb-0">No. KK Pelapor : <strong><?php echo $l_pelaporkk ?></strong> </p>
                                            <p class="mb-0">NIK Pelapor : <a style="font-weight:bold; font-size:20px; color: green;"><?php echo $l_pelapornik ?></a>   <a class="button badge badge-danger" style="background-color: grey; display:none;"href="a_pdk_view_edit.php?p_nik=<?php echo $l_pelapornik ?>">lihat</a></p>
                                            
                                            

                                            <br>
                                            <p class="mb-0">Waktu kejadian : <strong><?php echo $l_date ?></strong> </p>
                                            <p class="mb-0">Lokasi kejadian : <strong><?php echo $l_loc ?></strong> </p>
                                            <p class="mb-0">Nama Instansi Terkait : <strong><?php echo $l_namainstansi ?> </strong></p>   
                                            <br>
                                            <p class="mb-0">Judul : <a style="font-weight:bold; font-size:18px;"><?php echo $l_pelapornik ?></a> </p> <br>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span>Laporan :</span>
                                        <textarea readonly="" rows="10" class="form-control no-resize" id="l_message" name="l_message" value="" placeholder="Ketik laporan anda..."><?php echo $l_message ?></textarea>
                                    </div><br>

                                    

                                    <form action="a_pdk_lapor_view_pro.php" method="POST" name="form3" onsubmit="return validation()">
                                        <input style="display: none;" type="text" name="l_id" id="l_id" value="<?php echo $l_id ?>" >

                                        <input style="display: none;" type="text" name="l_status" id="l_status" value="Sudah Selesai" >

                                        <a style="background-color: #9E9E9E; font-weight:bold; font-size:12px;" href="a_pdk_lapor.php"  class="btn btn-raised btn-primary waves-effect">Kembali</a>

                                        <a style="background-color:#46b6fe ; font-weight:bold; color: white; font-size:12px;"  onclick="window.open('a_pdk_lapor_view_print.php?l_id=<?php echo $l_id ?>')"  class="btn btn-raised btn-primary waves-effect"><i class="zmdi zmdi-hc-fw"></i> Print</a>

                                        <a style="background-color: #04BE5B; font-weight:bold; font-size:12px;"  type="submit" href="javascript: submitform()" name="submit"  class="btn btn-raised btn-primary waves-effect">Sudah di proses</a>
                                       
                                        

                                        <input style="display:none" type="text"  id="l_badge" name="l_badge" class="form-control" value="badge-success" placeholder="...." required>


                                        <input style="display:none" type="text"  id="notif_kkk" name="notif_kkk" class="form-control" value="<?php echo $l_pelaporkk ?>" placeholder="...." required>

                                         <input style="display:none" type="text"  id="notif_message" name="notif_message" class="form-control" value="<?php echo $l_type ?> anda sudah di teirma oleh operator dan akan segera di tindak lanjuti. Terima Kasih" placeholder="...." required>
                                 <input style="display:none" type="text"  id="notif_title" name="notif_title" class="form-control" value="<?php echo $l_type ?>" placeholder="...." required>
                                 <input style="display:none" type="text"  id="notif_logo" name="notif_logo" class="form-control" value="" placeholder="...." required>
                                 <input style="display:none" type="text"  id="notif_icon" name="notif_icon" class="form-control" value="bg-green" placeholder="...." required>
                                 


                                    </form>
                                    <script type="text/javascript">
                                    function submitform()
                                    {
                                      document.form3.submit();
                                  }
                              </script>

                       
                                
                          </p>
                      </div>
                  </div>
              </div>
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





<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

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


</body>
</body>
 <script>
        function printDiv() {
            var divContents = document.getElementById("GFG").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write('<body > <h1>Div contents are <br>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>

</html>
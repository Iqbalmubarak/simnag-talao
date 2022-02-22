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

$sql3 = "SELECT * FROM notif
WHERE  notif_kk='$p_kk' OR notif_kk='simnag' ORDER BY notif_time DESC";
$result3 = $connection ->query ($sql3);






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
            <li><a href="simnag_biodata.php"><i class="zmdi zmdi-hc-fw"></i><span>Data Pribadi</span></a>
               
            </li>
            <li class="active open"><a href="simnag_notif.php"><i class="zmdi zmdi-notifications"></i><span>Notifikasi</span>
                <div class="notify" ><span  class="heartbit"></span><span style="background-color:red;" class="point"></span></div>
            </a>

           </li>

            <li ><a href="simnag_status.php"><i class="zmdi zmdi-hc-fw"></i><span>Status</span></a></li>
            

            <li><a href="simnag_surat.php"><i class="zmdi zmdi-hc-fw"></i><span>E-Surat</span></a>
                
            </li>
            <li ><a href="simnag_lapor.php"><i class="zmdi zmdi-hc-fw"></i> <span>Aduan/Aspirasi</span></a></li>
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

    <!-- Main Content --><section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Notifikasi</h2>
                    <ul class="breadcrumb">
                        
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-sm-12">
                    <ul class="cbp_tmtimeline">
                         <?php
                                        while ($row = $result3 ->fetch_assoc())
                                        {
                                            ?>
                        <li>
                            <div class="cbp_tmicon <?php echo $row['notif_icon']; ?>"><i class="zmdi zmdi-hc-fw"><?php echo $row['notif_logo']; ?></i></div>
                            <div class="cbp_tmlabel">
                                <div class="cbp_tmtime">
                                    <span><?php echo $row['notif_time']; ?></span>
                                </div>
                                <h5><span></span><a ><?php echo $row['notif_title']; ?></a> </h5>
                                <p><?php echo $row['notif_message']; ?></p>
                                <span></span>
                            </div>
                        </li>
                         <?php
                                        }
                                        ?>
                                        
                       <!-- <li>
                            <div class="cbp_tmicon bg-orange"> <i class="zmdi zmdi-hc-fw"></i></div>
                            <div class="cbp_tmlabel">
                                <div class="cbp_tmtime">
                                    <span>2019-11-04 03:45AM</span> <span>Today</span>
                                </div>
                                <h5><a href="">Cetak surat</a></h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abt</p>
                            </div>
                        </li>
                         <li>
                            <div class="cbp_tmicon bg-green"> <i class="zmdi zmdi-case"></i></div>
                            <div class="cbp_tmlabel">
                                <div class="cbp_tmtime">
                                    <span>2019-11-04 03:45AM</span> <span>Today</span>
                                </div>
                                <h5><a href="javascript:void(0);">Job Meeting</a></h5>
                                <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
                            </div>
                        </li>
                         <li>
                            <div class="cbp_tmicon bg-red"> <i class="zmdi zmdi-hc-fw"></i></div>
                            <div class="cbp_tmlabel">
                                <div class="cbp_tmtime">
                                    <span>2019-11-04 03:45AM</span> <span>Today</span>
                                </div>
                                <h5><a href="javascript:void(0);">Website Maintenance</a></h5>
                                <p>Update website pada<strong>12 Nov 2021 18:00 - 22:00</strong> Today.</p>
                            </div>
                        </li>
                        <li>
                            <div class="cbp_tmicon bg-orange"> <i class="zmdi zmdi-hc-fw"></i></div>
                            <div class="cbp_tmlabel">
                                <div class="cbp_tmtime">
                                    <span>2019-11-04 03:45AM</span> <span>Today</span>
                                </div>
                                <h5><a href="">Cetak surat</a></h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abt</p>
                            </div>
                        </li>
                        <li>
                            <div class="cbp_tmicon bg-red"> <i class="zmdi zmdi-hc-fw"></i></div>
                            <div class="cbp_tmlabel">
                                <div class="cbp_tmtime">
                                    <span>2019-11-04 03:45AM</span> <span>Today</span>
                                </div>
                                <h5><a href="javascript:void(0);">Website Maintenance</a></h5>
                                <p>Update website pada<strong>12 Nov 2021 18:00 - 22:00</strong> Today.</p>
                            </div>
                        </li>
                        <li>
                            <div class="cbp_tmicon bg-red"> <i class="zmdi zmdi-hc-fw"></i></div>
                            <div class="cbp_tmlabel">
                                <div class="cbp_tmtime">
                                    <span>2019-11-04 03:45AM</span> <span>Today</span>
                                </div>
                                <h5><a href="javascript:void(0);">Website Maintenance</a></h5>
                                <p>Update website pada<strong>12 Nov 2021 18:00 - 22:00</strong> Today.</p>
                            </div>
                        </li>
                        <li>
                            <div class="cbp_tmicon bg-red"> <i class="zmdi zmdi-hc-fw"></i></div>
                            <div class="cbp_tmlabel">
                                <div class="cbp_tmtime">
                                    <span>2019-11-04 03:45AM</span> <span>Today</span>
                                </div>
                                <h5><a href="javascript:void(0);">Website Maintenance</a></h5>
                                <p>Update website pada<strong>12 Nov 2021 18:00 - 22:00</strong> Today.</p>
                            </div>
                        </li>-->
                         
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function (){
   var table = $('#example').DataTable({
      dom: 'frt',
      ajax: 'https://gyrocode.github.io/files/jquery-datatables/arrays.json',
      drawCallback: function(){
         // If there is some more data
         if($('#btn-example-load-more').is(':visible')){
            // Scroll to the "Load more" button
            $('html, body').animate({
               scrollTop: $('#btn-example-load-more').offset().top
            }, 1000);
         }

         // Show or hide "Load more" button based on whether there is more data available
         $('#btn-example-load-more').toggle(this.api().page.hasMore());
      }      
   });
 
   // Handle click on "Load more" button
   $('#btn-example-load-more').on('click', function(){  
      // Load more data
      table.page.loadMore();
   });
});
</script>
   
   

<!-- Jquery Core Js --> 
<script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="../assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="../assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="../assets/bundles/c3.bundle.js"></script>

<script src="../assets/bundles/mainscripts.bundle.js"></script>
<script src="../assets/js/pages/index.js"></script>
</body>


</html>
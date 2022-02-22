<?php
session_start();
include('ifnotloginadmin.php');
require_once('db_connect.php');

$s_username = $_SESSION['s_username'];
$sqlquery = "SELECT * FROM superadmin
WHERE s_username='$s_username' ";
 $result = $connection->query($sqlquery) or die($connection->error);
$sqlqueryresult = $connection ->query($sqlquery);

$sqlquery2 = "SELECT * FROM pengumuman
ORDER BY peng_id DESC";
$result2 = $connection->query($sqlquery2) or die($connection->error);
$sqlqueryresult2 = $connection ->query($sqlquery2);

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
    </head>
    <a href="https://api.whatsapp.com/send?phone=6281266339246&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float20" target="_blank">
        <i style="font-size:50px;  text-align:center;" class="zmdi zmdi-hc-fw"></i>
    </a>
    <style type="text/css">
    

    .float20{
      position:fixed;
      width:60px;
      height:60px;
      bottom:40px;
      right:40px;
      background-color:RED;
      color:#FFF;
      border-radius:50px;
      text-align:center;

      box-shadow: 2px 2px 3px #999;
      z-index:50;
  }

  .my-float20{
      margin-top:16px;
  }

</style>
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
            <li><a href="a_index.php"><i class="zmdi zmdi-home"></i><span>Beranda</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Data Penduduk</span></a>
                <ul class="ml-menu">
                    <li><a href="a_pdk_add.php">Add</a></li>
                    <li><a href="a_pdk_view.php">View</a></li>
                    <li style="display: none;"><a href="a_pdk_mohon.php">Permohonan</a></li>

                    <li><a href="a_pdk_lapor.php">Laporan</a></li>
                    
                </ul>
            </li>
            <li > <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i><span>Berita</span></a>
                <ul class="ml-menu">
                    <li><a href="wisata/index2.php">Add</a></li>
                    <li><a href="a_berita_view.php">View</a></li>                    
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i><span>Kegiatan</span></a>
                <ul class="ml-menu">
                    <li><a href="wisata/index3.php">Add</a></li>
                    <li><a href="a_keg_view.php">View</a></li>                    
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i><span>Wisata</span></a>
                <ul class="ml-menu">
                    <li><a href="wisata/index.php">Add</a></li>
                    <li><a href="a_wisata_view.php">View</a></li>                    
                </ul>
            </li>
            
            <li ><a href="a_datagrafik.php"><i class="zmdi zmdi-hc-fw"></i><span>Data Grafik</span></a></li>
            <li class="active open"><a href="a_peng.php"><i class="zmdi zmdi-hc-fw"></i><span>Pengumuman</span></a></li>
            <li><a href="a_perantau.php"><i class="zmdi zmdi-hc-fw"></i><span>Perantau</span></a></li>
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
                    <h2>Buat Pengumuman</h2>
                   
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
         <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">

                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form class="form-horizontal" action="a_peng_pro.php" method="POST" name="form1" onsubmit="return validation()">
                            
                           <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="email_address_2">Pengumuman</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="peng_message" name="peng_message" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                   
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="form-group">
                                        <small><?php date_default_timezone_set("Asia/jakarta"); echo date('j.n.Y'); ?> <?php date_default_timezone_set("Asia/Jakarta"); echo date('h:i:s A'); ?></small>
                                         <input style="display: none;" type="text" id="peng_date" name="peng_date" class="form-control" value="<?php date_default_timezone_set("Asia/jakarta"); echo date('j.n.Y'); ?> <?php date_default_timezone_set("Asia/Jakarta"); echo date('h:i:s A'); ?>">
                                       
                                    </div>
                                </div>
                            </div>
                           


                            <div class="row clearfix">


                                <div class="col-sm-8 offset-sm-2">
                                 <div class="body">

                                    <a class="btn btn-raised btn-primary btn-round waves-effect" type="submit" href="javascript: submitform()" name="submit"> ADD</a>


                                    <div class="collapse" id="collapseExample">
                                        <div class="well alert alert-success">
                                            <strong>Selamat ! </strong>Data anda sudah di update !</div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>                    
        </div>



    </div>
</div>
</section>
<section class="content">
        <div class="body_scroll">
          
            <div class="container-fluid">
                <!-- Basic Examples -->


                <!-- Exportable Table -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tanggal</th>
                                                <th>Pesan</th>
                                               
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Tanggal</th>
                                                <th>Pesan</th>
                                               
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                        while ($row = $result2 ->fetch_assoc())
                                        {
                                            ?>

                                            <tr>
                                                <td><?php echo $row['peng_id']; ?></td>
                                                <td><?php echo $row['peng_date']; ?></td>
                                                <td><?php echo $row['peng_message']; ?></td>
                                                
                                                <td> <button class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i></button>
                                                    <button href="a_peng_delete.php?b_id=<?php echo $row['peng_id']; ?>" onclick="return confirm('Anda yakin untuk menghapus ?');" class="btn btn-default btn-sm"><i class="zmdi zmdi-delete"></i></button>
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
    function submitform()
    {
      document.form1.submit();
  }
</script>



<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/bundles/c3.bundle.js"></script>

<script src="assets/js/pages/index.js"></script>
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/dropify/js/dropify.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/forms/dropify.js"></script>


</body>


</html>
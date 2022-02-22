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

$sqlquery3 = "SELECT * FROM folder
ORDER BY folder_id DESC";
$result3 = $connection->query($sqlquery3) or die($connection->error);
$sqlqueryresult3 = $connection ->query($sqlquery3);

$sqlquery4 = "SELECT COUNT(*) AS `total` FROM `daftar` WHERE d_status='1' ";
$result4 = $connection->query($sqlquery4) or die($connection->error);
$sqlqueryresult4 = $connection ->query($sqlquery4);

$sqlquery5 = "SELECT COUNT(*) AS `total2` FROM `lapor` WHERE l_status='Dalam Proses' ";
$result5 = $connection->query($sqlquery5) or die($connection->error);
$sqlqueryresult5 = $connection ->query($sqlquery5);

$sqlquery6 = "SELECT * FROM files WHERE folder_id='".$_GET["folder_id"]."' ORDER BY file_made DESC";
$sqlqueryresult6 = mysqli_query($connection,$sqlquery6);

$sqlquery7 = "SELECT * FROM folder WHERE folder_id='".$_GET["folder_id"]."'";
$sqlqueryresult7 = mysqli_query($connection,$sqlquery7);
$sqlqueryresult9 = mysqli_query($connection,$sqlquery7);

$sqlquery8 = "SELECT * FROM folder WHERE folder_parent='".$_GET["folder_id"]."'";
$sqlqueryresult8 = mysqli_query($connection,$sqlquery8);

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
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/footable-bootstrap/css/footable.bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/footable-bootstrap/css/footable.standalone.min.css">
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
            
            <li> <a href="javascript:void(4);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i><span>SIMNagari</span></a>
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
              <li ><a href="a_pdk_lapor.php"><i class="zmdi zmdi-hc-fw"></i><span>Pengaduan</span><span class="badge badge-danger" style="color:white;"><?php echo $total2 ?></span>
              </a></li>
              <?php }?>
              <?php  while ($key=$surat -> fetch_assoc()) {  $total3 = $key['total3'];?>
              <li ><a href="a_surat.php"><i class="zmdi zmdi-hc-fw"></i><span>Surat</span><span class="badge badge-danger" style="color:white;"><?php echo $total3 ?></span>
              </a></li>
              <?php }?>
              
              
              <li class="active open"><a href="a_arsip.php"><i class="zmdi zmdi-hc-fw"></i><span>E-Arsip</span></a></li>
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
                    <h2>E-Arsip</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="file-dashboard.html">File Manager</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <button class="btn btn-success btn-icon float-right" type="button"><i class="zmdi zmdi-upload"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2">
                        <div class="body big_icon storage">
                            <h6>Storage</h6>
                            <h2>32GB <small class="info">of 1Tb</small></h2>                            
                            <div class="progress m-t-10">
                            <div class="progress-bar l-green" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2">
                        <div class="body big_icon documents">
                            <h6>Documents</h6>
                            <h2>2GB <small class="info">of 1Tb</small></h2>                            
                            <div class="progress m-t-10">
                            <div class="progress-bar l-blush" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;"></div>
                            </div>
                        </div>
                    </div>
                </div>                    
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2">
                        <div class="body big_icon images">
                            <h6>Images</h6>
                            <h2>20GB <small class="info">of 1Tb</small></h2>
                            <div class="progress m-t-10">
                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2">
                        <div class="body big_icon media_w">
                            <h6>Media</h6>
                            <h2>10GB <small class="info">of 1Tb</small></h2>                            
                            <div class="progress m-t-10">
                                <div class="progress-bar l-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <ul class="nav nav-tabs pl-0 pr-0">
                           <div class="btn-group">
                            <a type="button" class="btn btn-default waves-effect" onclick="history.back()" href="a_arsip.php" ><i class="zmdi zmdi-hc-fw"></i> Kembali</a>
                            <button type="button" style="background-color:#04BE5B;" class="btn btn-default waves-effect" data-toggle="modal" data-target="#defaultModal"><i class="zmdi zmdi-hc-fw"></i> New Folder</button>
                           <?php                           
    while ($key=$sqlqueryresult7 -> fetch_assoc()) {
      $folder_idd = $key['folder_id'];
      ?>
                            <a type="button" style="background-color:#03A9F4;" class="btn btn-default waves-effect" href="a_arsip_file_form.php?folder_id=<?php echo $folder_idd ?>"><?php
    }
    ?><i class="zmdi zmdi-upload"></i>  Upload File</a>
                                       
                                       
                                    </div>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="list_view">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0 c_table">
                                        <thead>
                                            <tr>
                                                <th width="50%" >Name</th>
                                                
                                                <th data-breakpoints="xs sm md">Last Modified</th>
                                                 <th data-breakpoints="xs">File size</th>
                                                <th data-breakpoints="xs">File type</th>
                                               
                                                <th data-breakpoints="xs">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                              while ($row = $sqlqueryresult8 ->fetch_assoc())
                                            {
                                            ?>
                                            <tr>
                                                <td>
                                                    <span><i class="zmdi zmdi-folder w25"></i>
                                                        <a class="link" href="a_arsip_file.php?folder_id=<?php echo $row['folder_id']; ?>"><?php echo $row['folder_name']; ?></a>
                                                    </span>
                                                </td>
                                                
                                                <td><span class="date"><?php echo $row['folder_made']; ?></span></td>
                                                <td><span class="date">-</span></td>
                                                 <td><span class="date">-</span></td>
                                                <td><a href="a_arsip_folder_delete.php?folder_id=<?php echo $row['folder_id']; ?>" onclick="return confirm('Anda yakin untuk menghapus ?');" class="btn btn-danger btn-sm"><i style="color:white;" class="zmdi zmdi-hc-fw"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                            <?php
                                              while ($row = $sqlqueryresult6 ->fetch_assoc())
                                            {
                                                $img_arr= array('png','jpg','jpeg','gif','psd','tif');
                        $doc_arr =array('doc','docx');
                        $pdf_arr =array('pdf','ps','eps','prn');
                        $icon ='fa-file';
                        if(in_array(strtolower($row['file_type']),$img_arr))
                            $icon ='zmdi-image w25';
                        if(in_array(strtolower($row['file_type']),$doc_arr))
                            $icon ='zmdi-file-text w25 text-amber';
                        if(in_array(strtolower($row['file_type']),$pdf_arr))
                            $icon ='zmdi-collection-pdf w25 text-blush';
                        if(in_array(strtolower($row['file_type']),['xlsx','xls','xlsm','xlsb','xltm','xlt','xla','xlr']))
                            $icon ='zmdi-chart w25 text-green';
                        if(in_array(strtolower($row['file_type']),['zip','rar','tar']))
                            $icon ='zmdi-file-text w25 text-amber';
                                            ?>
                                            <tr>
                                                <td>
                                                    <span><i class="zmdi <?php echo $icon ?>"></i>
                                                        <a ><?php echo $row['file_name']; ?></a>
                                                    </span>
                                                </td>
                                              
                                                <td><span class="date"><?php echo $row['file_made']; ?></span></td>
                                                <td><span class="date"><?php echo ($row['file_size']/1000); ?> KB</span></td>
                                                <td><span class="date"><?php echo $row['file_type']; ?></span></td>
                                                <td>
                                                    <a  href="arsip/<?php echo $row['folder_id']; ?>/<?php echo $row['file_name']; ?>" target="_blank" class="btn btn-warning btn-sm"><i class="zmdi zmdi-hc-fw"></i></a>
                                                    
                                            <a href="arsip/<?php echo $row['folder_id']; ?>/<?php echo $row['file_name']; ?>" download class="btn btn-success btn-sm"><i class="zmdi zmdi-hc-fw"></i></a>

                                            <a href="a_arsip_file_delete.php?file_id=<?php echo $row['file_id']; ?>" onclick="return confirm('Anda yakin untuk menghapus ?');" class="btn btn-danger btn-sm"><i style="color:white;" class="zmdi zmdi-hc-fw"></i></a>

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
    </div>
</section>


<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Folder</h4>
            </div>
            <div class="modal-body"> 
                <form id="form_validation" method="POST" action="a_arsip_folder_add_pro.php" method="POST" name="form1" onsubmit="return validation()">
                                <label for="email_address">Nama Folder</label>
                                <div class="form-group">                                
                                    <input type="text" id="folder_name" name="folder_name" class="form-control" placeholder="Ketik nama folder baru">
                                    <?php                           
                           while ($key=$sqlqueryresult9 -> fetch_assoc()) {
                            $folder_id = $key['folder_id'];
                            ?>
                                     <input style="display:none;" type="text" id="folder_parent" name="folder_parent" class="form-control" placeholder="Ketik nama folder baru" value="<?php echo $folder_id ?>">
                                      <?php
                        }
                        ?>
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



<script type="text/javascript">
    function submitform()
    {
      document.form1.submit();
  }
</script>
<script>
        $(document).ready(function(){
            var dataTable = $('#empTable').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                //'searching': false, // Remove default Search Control
                'ajax': {
                    'url':'search/ajaxfile.php',
                    'data': function(data){
                        // Read values
                        var gender = $('#searchByGender').val();
                        var name = $('#searchByName').val();

                        // Append to data
                        data.searchByGender = gender;
                        data.searchByName = name;
                    }
                },
                'columns': [
                    { data: 'emp_name' },
                    { data: 'email' },
                    { data: 'gender' },
                    { data: 'salary' },
                    { data: 'city' },
                ]
            });

            $('#searchByName').keyup(function(){
                dataTable.draw();
            });

            $('#searchByGender').change(function(){
                dataTable.draw();
            });
        });
        </script>

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


<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/footable.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>    
<script src="assets/js/pages/tables/footable.js"></script><!-- Custom Js -->


</body>


</html>
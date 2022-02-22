<?php
session_start();
include('ifnotloginadmin.php');
require_once('db_connect.php');

$ad_email = $_SESSION['ad_email'];
$sqlquery = "SELECT * FROM admin
WHERE ad_email='$ad_email' ";
$result = $connection->query($sqlquery) or die($connection->error);
$sqlqueryresult = $connection ->query($sqlquery);

$sqlquery2 = "SELECT * FROM daftar
WHERE d_status='1' ORDER BY d_id DESC ";
$result2 = $connection->query($sqlquery2) or die($connection->error);
$sqlqueryresult2 = $connection ->query($sqlquery2);

$sqlquery3 = "SELECT * FROM nagari
WHERE n_id='1'";
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
            <li > <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Penduduk<div class="notify" ><span  class="heartbit"></span><span style="background-color:red;" class="point"></span></div></span></a>
                <ul class="ml-menu">
                    <li ><a href="a_pdk_view.php">Data Penduduk</a></li>
                   
                    <li><a href="a_ubah.php">Perubahan Data<div class="notify" ><span  class="heartbit"></span><span style="background-color:red;" class="point"></span></div></a></li>                
                    <li><a href="a_perantau.php">Perantau</a></li>
                    
                </ul>
            </li>
            
            <li class="active open"> <a href="javascript:void(4);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i><span>SIMNagari</span></a>
                <ul class="ml-menu">
                    <li><a href="a_profilnagari.php">Profil Nagari</a></li>
                    <li class="active"><a href="a_datanagari.php">Data Website</a></li>
                    <li><a href="a_peng.php">Pengumuman</a></li> 
                    <li><a href="a_berita_view.php">Berita</a></li> 
                    <li><a href="a_wisata_view.php">Wisata</a></li>
                     <li><a href="a_keg_view.php">P. Kekayaan</a></li>                        
                </ul>
            </li>
             <?php  while ($key=$sqlqueryresult4 -> fetch_assoc()) {  $total = $key['total'];?>
             <li ><a href="a_pdk_daftar.php"><i class="zmdi zmdi-hc-fw"></i><span>Pendaftaran</span><span class="badge badge-danger" style="color:white;"><?php echo $total ?></span></a></li>
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



<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Data Website SIMNag</h2>
                    
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
               
            </div>
        </div>
        <?php                           
    while ($key=$sqlqueryresult3 -> fetch_assoc()) {
     
     $n_kontak1 = $key['n_kontak1'];
     $n_kontak2 = $key['n_kontak2'];
     $n_kontak3 = $key['n_kontak3'];
     $n_kontak4 = $key['n_kontak4'];
     $n_email = $key['n_email'];
     $n_address = $key['n_address'];
     $n_id = $key['n_id'];
     $n_image1 = $key['n_image1'];
     $n_image2 = $key['n_image2'];
     $n_image3 = $key['n_image3'];


     
  ?>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="body product_item">
                            
                            <img src="../images/utama/<?php echo $n_image1 ?>"  style="height:150px; width: 100%;" alt="Product" class="img-fluid cp_img" />
                            <div class="product_details">
                                <a href="ec-product-detail.html">Slide Foto 1</a>
                                                               
                            </div>
                            <div class="action">
                               
                                <a type="button" style="background-color:#04BE5B;" class="btn btn-default waves-effect" href="a_datanagari_image.php?n_id=<?php echo $n_id ?>">Ubah Foto</a>
                            </div>
                        </div>
                    </div>                
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="body product_item">
                          
                           <img src="../images/utama/<?php echo $n_image2 ?>"  style="height:150px; width: 100%;" alt="Product" class="img-fluid cp_img" />
                            <div class="product_details">
                                <a href="ec-product-detail.html">Slide Foto 2</a>
                                                               
                            </div>
                            <div class="action">
                               <a type="button" style="background-color:#04BE5B;" class="btn btn-default waves-effect" href="a_datanagari_image2.php?n_id=<?php echo $n_id ?>">Ubah Foto</a>
                            </div>
                        </div>
                    </div>                
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="body product_item">
                           
                            <img src="../images/utama/<?php echo $n_image3 ?>"  style="height:150px; width: 100%;" alt="Product" class="img-fluid cp_img" />
                            <div class="product_details">
                                <a href="ec-product-detail.html">Slide Foto 3</a>
                                                                
                            </div>
                            <div class="action">
                               <a type="button" style="background-color:#04BE5B;" class="btn btn-default waves-effect" href="a_datanagari_image3.php?n_id=<?php echo $n_id ?>">Ubah Foto</a>
                            </div>
                        </div>
                    </div>                
                </div>
                
            </div>
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                       
                        <div class="body">
                            <form class="form-horizontal" action="a_datanagari_edit_pro.php" method="POST" name="form3" onsubmit="return validation()">
                                
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">Alamat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="n_address" name="n_address" class="form-control" value="<?php echo $key['n_address']; ?>">
                                            <input style="display: none;" type="text" id="n_idd" name="n_idd" class="form-control" value="<?php echo $key['n_id']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">E-mail</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="n_email" name="n_email" class="form-control" value="<?php echo $key['n_email']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2" style="font-weight: bolder;" >KONTAK :</label>
                                    </div>
                                   
                                </div><br>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">Whatsapp Admin</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-3">
                                        <div class="form-group">
                                            <input type="text" id="n_kontak1" name="n_kontak1" class="form-control" value="<?php echo $key['n_kontak1']; ?>">
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">Polisi</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="n_kontak2" name="n_kontak2" class="form-control" value="<?php echo $key['n_kontak2']; ?>">
                                        </div>
                                    </div>
                                </div>

                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">Rumah Sakit</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="n_kontak3" name="n_kontak3" class="form-control" value="<?php echo $key['n_kontak3']; ?>">
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">Damkar</label>
                                    </div>
                                    <div class="col-lg-3 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="n_kontak4" name="n_kontak4" class="form-control" value="<?php echo $key['n_kontak4']; ?>">
                                        </div>
                                    </div>
                                </div>

                               
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-8 offset-sm-2">
                                        
                                          <a style="background-color: #04BE5B; font-weight:bold; font-size:12px;"  type="submit" href="javascript: submitform()" name="submit"  class="button btn login100-form-btn">UBAH DATA</a>
                                    </div>
                                </div>
                            </form>
                            <script type="text/javascript">
                                    function submitform()
                                    {
                                      document.form3.submit();
                                  }
                              </script>
                            <?php
     }
 ?>
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


</html>
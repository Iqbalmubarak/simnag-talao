<?php
session_start();
include('ifnotloginadmin2.php');
require_once('../db_connect.php');
// require_once('library.php');


$p_kk = $_SESSION['p_kk'];
$sqlquery = "SELECT * FROM penduduk
WHERE p_kk='$p_kk' AND p_hub='Kepala Keluarga'";
$result = $connection->query($sqlquery) or die($connection->error);
$sqlqueryresult = $connection ->query($sqlquery);


$sql = "SELECT * FROM penduduk  WHERE p_kk='$p_kk' AND p_hub IN ('Istri','Anak','Famili Lain')";
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
        <link rel="icon" href="" type="../image/x-icon"> <!-- Favicon-->
        <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
        <link rel="stylesheet" href="../assets/plugins/charts-c3/plugin.css"/>

        <link rel="stylesheet" href="../assets/plugins/morrisjs/morris.min.css" />
        <!-- Custom Css -->
        <link rel="stylesheet" href="../assets/css/style.min.css">
    </head>
    

<body class="theme-blush">
  <?php                           
  while ($key=$sqlqueryresult -> fetch_assoc()) {
    $p_kk = $key['p_kk'];
    $p_nik = $key['p_nik'];
    $p_password = $key['p_password'];
    $p_name = $key['p_name'];
    $p_l_tempat = $key['p_l_tempat'];

    $p_l_tanggal = $key['p_l_tanggal'];
    $kelamin = $key['kelamin'];
    $p_suku = $key['p_suku'];
    $agama = $key['agama'];
    $p_alamat = $key['p_alamat'];

    $p_hub = $key['p_hub'];
    $p_telp = $key['p_telp'];
    $pend = $key['pend'];
    $p_pend_nama = $key['p_pend_nama'];
    $pek = $key['pek'];
    $p_pek_nama = $key['p_pek_nama'];
     $p_fotokk = $key['p_fotokk'];




    ?>
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="" width="48" height="48" alt="SISTEM INFORMASI NAGARI"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>


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
                            <a><?php echo $p_name ?></a>

                        </div>
                    </div>
                </li>
                <li ><a href="index.php"><i class="zmdi zmdi-home"></i><span>Beranda</span></a></li>
            <li class="active open"><a href="simnag_biodata.php"><i class="zmdi zmdi-hc-fw"></i><span>Data Pribadi</span></a>
               
            </li>
            <li ><a href="simnag_notif.php"><i class="zmdi zmdi-notifications"></i><span>Notifikasi</span>
                <div class="notify" ><span  class="heartbit"></span><span style="background-color:red;" class="point"></span></div>
            </a>
           </li>

            <li ><a href="simnag_status.php"><i class="zmdi zmdi-hc-fw"></i><span>Status</span></a></li>
            

            <li ><a href="simnag_surat.php"><i class="zmdi zmdi-hc-fw"></i><span>E-Surat</span></a>
                
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
                                        <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
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
            <img style="width: 100%; height: auto;" src="../assets/images/ok3.png">   
        </div>
    </div>


</section>
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Biodata</h2>
                    <ul class="breadcrumb">

                        <li class="breadcrumb-item">Beranda</li>
                        <li class="breadcrumb-item active">Profil</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>

            </div>
        </div> 
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card mcard_3">
                        <div class="body">
                            <a href=""><img src="../assets/images/profil2.jpg" class="rounded-circle shadow " alt="profile-image"></a>
                            <h4 class="m-t-10"><?php echo $p_name ?></h4>
                            <small>Kepala Keluarga</small>                            
                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                             <div class="header">
                            <h2><strong>Foto</strong> KARTU KELUARGA</h2>
                        </div>
                             <iframe style="height:200px; width: 100%; border-style:solid;" src="../foto_kk/<?php echo $p_fotokk ?>" alt="#" /></iframe>

                             <a  href="../foto_kk/<?php echo $p_fotokk ?>" target="_blank" class="btn btn-warning btn-sm"><i class="zmdi zmdi-hc-fw"></i></a>
                             <a href="../foto_kk/<?php echo $p_fotokk ?>" download class="btn btn-primary btn-sm"><i class="zmdi zmdi-hc-fw"></i></a>
                             <a href="arsip/<?php echo $row['folder_id']; ?>/<?php echo $row['file_name']; ?>" download class="btn btn-success btn-sm">Ubah</a>
                             
                              
                                            

                           
                        </div>
                    </div>  

                </div>

                <div class="col-lg-8 col-md-12">

                    <div class="card">
                        <div class="header">

                        </div>
                        <div class="body">

                            <p>Silahkan lengkapkan data anda.</p>

                            <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                             <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingTwo_1">
                                    <h4 style="background-color: #ee2558;" class="panel-title"> <a style="color:white;" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse0" aria-expanded="false"
                                        aria-controls="collapse0"><i class="zmdi zmdi-hc-fw"></i> Akun SIMNag <i class="zmdi zmdi-hc-fw"></i></a> </h4>
                                    </div>
                                    <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                                        <div class="panel-body"> 
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                                    <label for="email_address_2">No. KK</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8">
                                                    <div class="form-group">
                                                        <input type="text" id="email_address_2" class="form-control" value="<?php echo $p_kk ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                                    <label for="email_address_2">Password</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8">
                                                    <div class="form-group">
                                                        <input type="text" id="email_address_2" class="form-control" value=" <?php echo $p_password ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row clearfix">



                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div  class="panel-heading" role="tab" id="headingOne_1">
                                        <h4  style="background-color: #ee2558;" class="panel-title"> <a style="color:white;" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1"><i class="zmdi zmdi-hc-fw"></i> Data Personal <i class="zmdi zmdi-hc-fw"></i></a> </h4>
                                    </div>
                                    <div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
                                        <div class="panel-body"> 
                                            <form class="form-horizontal">
                                                <div class="row clearfix">
                                                    <div class="col-lg-5 col-md-2 col-sm-4 form-control-label">
                                                        <label for="email_address_2"><bold>NIK : </bold><a><?php echo $p_nik ?></a></label>
                                                    </div>
                                                    
                                                </div>

                                                <div class="row clearfix">
                                                    <div class="col-lg-5 col-md-2 col-sm-4 form-control-label">
                                                        <label for="email_address_2"><bold>Nama : </bold><a><?php echo $p_name ?></a></label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-5 col-md-2 col-sm-4 form-control-label">
                                                        <label for="email_address_2">Tempat Lahir : <?php echo $p_l_tempat ?></label>
                                                    </div>

                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-5 col-md-2 col-sm-4 form-control-label">
                                                        <label for="email_address_2">Tanggal Lahir : <?php echo $p_l_tanggal ?></label>
                                                    </div>
                                                </div>
                                                
                                                <div class="row clearfix">
                                                    <div class="col-lg-5 col-md-2 col-sm-4 form-control-label">
                                                        <label for="email_address_2">Jenis Kelamin : <?php echo $kelamin ?></label>
                                                    </div>

                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-5 col-md-2 col-sm-4 form-control-label">
                                                        <label for="email_address_2">Suku : <?php echo $p_suku ?></label>
                                                    </div>

                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-5 col-md-2 col-sm-4 form-control-label">
                                                        <label for="email_address_2">Agama : <?php echo $agama ?></label>
                                                    </div>
                                                    
                                                </div>

                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-2 col-sm-4 form-control-label">
                                                        <label for="email_address_2">Alamat : <?php echo $p_alamat ?></label>
                                                    </div>

                                                </div>

                                                <div class="row clearfix">
                                                    <div class="col-lg-5 col-md-2 col-sm-4 form-control-label">
                                                        <label for="email_address_2">No HP : <?php echo $p_telp ?></label>
                                                    </div>
                                                </div>



                                                <div class="row clearfix">



                                                </div>
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" role="tab" id="headingTwo_1">
                                        <h4 style="background-color:#ee2558;" class="panel-title"> <a style="color:white;" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false"
                                            aria-controls="collapseTwo_1"><i class="zmdi zmdi-hc-fw"></i> Pendidikan <i class="zmdi zmdi-hc-fw"></i></a> </h4>
                                        </div>
                                        <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
                                            <div class="panel-body"> 

                                             <form class="form-horizontal">



                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 form-control-label">
                                                        <label for="email_address_2">Pendidkan terakhir</label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                                        <div class="form-group">
                                                            <input type="text" id="email_address_2" class="form-control" value="<?php echo $pend ?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 form-control-label">
                                                        <label for="email_address_2">Nama Instansi</label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                                        <div class="form-group">
                                                            <input type="text" id="email_address_2" class="form-control" value="<?php echo $p_pend_nama ?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row clearfix">



                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" role="tab" id="headingThree_1">
                                        <h4 style="background-color:#ee2558;" class="panel-title"> <a style="color:white;" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false"
                                            aria-controls="collapseThree_1"><i class="zmdi zmdi-hc-fw"></i> Pekerjaan <i class="zmdi zmdi-hc-fw"></i></a> </h4>
                                        </div>
                                        <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1" >
                                            <div class="panel-body">


                                                <form class="form-horizontal">


                                                    <div class="row clearfix">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 form-control-label">
                                                            <label for="email_address_2">Bekerja sebagai</label>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                                            <div class="form-group">
                                                                <input type="text" id="email_address_2" class="form-control" value="<?php echo $pek ?>" disabled>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row clearfix">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 form-control-label">
                                                            <label for="email_address_2">Nama Instansi</label>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                                            <div class="form-group">
                                                                <input type="text" id="email_address_2" class="form-control" value="<?php echo $p_pek_nama ?>" disabled>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    
                                                </form>
                                            </div>


                                        </div>
                                        <form action="simnag_biodata_edit2.php" name="contoh" method="POST"> 

                                            <input style="display: none;" type="text" name="p_kk" id="p_kk" value="<?php echo $key['p_kk']; ?>">
                                            <a href="javascript: submitform()" name="submit" class="btn btn-default waves-effect m-r-20 btn-raised btn-primary  waves-effect"><i class="zmdi zmdi-hc-fw"></i> Ubah Data </a>
                                            <script type="text/javascript">
                                                function submitform()
                                                {
                                                  document.contoh.submit();
                                              }
                                          </script>
                                      </form>
                                  </div>

                              </div>
                          </div>

                      </div>

                      <div class="card">
                        <div class="header">
                            <h2><strong>BIODATA</strong> KELUARGA</h2>
                        </div>
                        <div>
                           <form action="simnag_biodata_addkeluarga.php" name="contoh2" method="POST"> 

                            <input type="text" name="p_kk" id="p_kk" value="<?php echo $key['p_kk']; ?>">
                            <a style="background-color:#04BE5B; " href="javascript: submitform2()" name="submit" class="btn btn-default waves-effect m-r-20"><i class="zmdi zmdi-hc-fw"></i> Tambah anggota keluarga </a>
                            <script type="text/javascript">
                                function submitform2()
                                {
                                  document.contoh2.submit();
                              }
                          </script>
                      </form>
                  </div>
                  <?php
              }
              ?>
              <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                       <div class="table-responsive">
                        <table class="table table-hover c_table theme-color datatable-1 table table-bordered" >
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>



                                <?php
                                while ($row = $result2 ->fetch_assoc())
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['p_nik']; ?></td>
                                        <td><strong><a ><?php echo $row['p_name']; ?></a></strong></td>

                                        <td><a ><?php echo $row['p_hub']; ?></a></td>
                                       
                                    <td>

                                       
                                      <a href="simnag_biodata_edit.php?p_nik2=<?php echo $row['p_nik2']; ?>" class="btn btn-default btn-sm"><i class="zmdi zmdi-eye"></i> View</a>

                                      <a href="simnag_biodata_pro_delete.php?p_nik=<?php echo $row['p_nik']; ?>" onclick="return confirm('Anda yakin untuk menghapus ?');" class="btn btn-default btn-sm"><i class="zmdi zmdi-delete"></i> Delete</a>
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
</div>
</section>


<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Anggota Keluarga</h4>
            </div>
            <div class="modal-body"> <div class="row clearfix">

                <div class="col-lg-10 col-md-10 col-sm-8">
                    <div class="form-group">
                        <input type="text" id="email_address_2" class="form-control" value="" placeholder="Nama">
                    </div>
                </div>
            </div>
            <div class="row clearfix">

                <div class="col-lg-10 col-md-10 col-sm-8">
                    <div class="form-group">
                        <input type="text" id="email_address_2" class="form-control" value="" placeholder="Hubungan">
                    </div>
                </div>
            </div>

            <div class="row clearfix">

                <div class="col-lg-10 col-md-10 col-sm-8">
                    <div class="form-group">
                        <select class="form-control show-tick ms select2" data-placeholder="Select">


                            <option>----</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>


                        </select>
                    </div>
                </div>
            </div>
            <div class="row clearfix">

                <div class="col-lg-10 col-md-10 col-sm-8">
                    <div class="form-group">
                        <input type="text" id="email_address_2" class="form-control" value="" placeholder="Tanggal Lahir">
                    </div>
                </div>
            </div> </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-round waves-effect" data-dismiss="modal">TAMBAH</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">TUTUP</button>
            </div>
        </div>
    </div>
</div>

<!-- Default Size -->
<div class="modal fade" id="defaultModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Edit Anggota Keluarga</h4>
            </div>
            <div class="modal-body"> <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                    <label for="email_address_2">Nama</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8">
                    <div class="form-group">
                        <input type="text" id="email_address_2" class="form-control" value="Fulan Binti FUlan">
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                    <label for="email_address_2">Hubungan</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8">
                    <div class="form-group">
                        <input type="text" id="email_address_2" class="form-control" value="Anak">
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                    <label for="email_address_2">Gender</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8">
                    <div class="form-group">
                        <select class="form-control show-tick ms select2" data-placeholder="Select">


                            <option>----</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>


                        </select>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                    <label for="email_address_2">Tanggal Lahir</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8">
                    <div class="form-group">
                        <input type="text" id="email_address_2" class="form-control" value="12/09/1990">
                    </div>
                </div>
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default btn-round waves-effect" data-dismiss="modal">SAVE CHANGES</button>
            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        $('.datatable-1').dataTable();
        $('.dataTables_paginate').addClass("btn-group datatable-pagination");
        $('.dataTables_paginate > a').wrapInner('<span />');
        $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
        $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
    } );
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
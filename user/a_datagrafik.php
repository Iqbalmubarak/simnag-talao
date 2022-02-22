<?php
session_start();
include('ifnotloginadmin.php');
require_once('db_connect.php');
// require_once('library.php');



 


  $query = "SELECT a.kelamin as kelamin, count(a.kelamin) as number FROM ( SELECT kelamin FROM penduduk UNION ALL SELECT kelamin FROM keluarga ) as a GROUP BY a.kelamin";  
 $result10 = mysqli_query($connection, $query);
 
  $query2 = "SELECT a.agama as p_agama, count(a.agama) as number FROM ( SELECT agama FROM penduduk UNION ALL SELECT agama FROM keluarga ) as a GROUP BY a.agama";  
 $result20 = mysqli_query($connection, $query2);

  $query3 = "SELECT a.pend as p_pend, count(a.pend) as number FROM ( SELECT pend FROM penduduk UNION ALL SELECT pend FROM keluarga ) as a GROUP BY a.pend";  
 $result30 = mysqli_query($connection, $query3);

  $query4 = "SELECT a.pek as p_pek, count(a.pek) as number FROM ( SELECT pek FROM penduduk UNION ALL SELECT pek FROM keluarga ) as a GROUP BY a.pek";  
 $result40 = mysqli_query($connection, $query4);



 $query5= "SELECT b_cat, count(*) as number FROM berita GROUP BY b_cat";  
 $result50 = mysqli_query($connection, $query5);  

 $query6= "SELECT l_type, count(*) as number FROM lapor GROUP BY l_type";  
 $result60 = mysqli_query($connection, $query6);

  $query7= "SELECT l_cat, count(*) as number FROM lapor GROUP BY l_cat";  
 $result70 = mysqli_query($connection, $query7);  

 $query8= "SELECT per_country, count(*) as number FROM perantau GROUP BY per_country";  
 $result80 = mysqli_query($connection, $query8);  


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
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
        <link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css"/>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Custom Css -->
        <link  rel="stylesheet" href="assets/css/style.min.css">

        <title>:: Aero Bootstrap4 Admin :: C3 Chart</title>
        <!-- Favicon-->
       
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css"/>
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css"/>
        <link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css"/>
        <!-- Custom Css -->
        <link rel="stylesheet" href="assets/css/style.min.css">
        <!-- Custom Css -->
        <link rel="stylesheet" href="assets/css/style.min.css">

        <script type="text/javascript" src="chart/js/fusioncharts.js"></script>
        <script type="text/javascript" src="chart/js/themes/fusioncharts.theme.fusion.js"></script>

        <script src="chart/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="chart/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="chart/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="chart/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="chart/scripts/flot/jquery.flot.pie.js" type="text/javascript"></script>
        <script src="chart/scripts/common.js" type="text/javascript"></script>

    </head>
    <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float20" target="_blank">
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
              <li><a href="a_surat.php"><i class="zmdi zmdi-hc-fw"></i><span>Surat</span><span class="badge badge-danger" style="color:white;"><?php echo $total2 ?></span>
              </a></li>
              
              
              <li><a href="a_arsip.php"><i class="zmdi zmdi-hc-fw"></i><span>E-Arsip</span></a></li>
              <li  class="active open"><a href="a_datagrafik.php"><i class="zmdi zmdi-hc-fw"></i><span>Data Grafik</span></a></li>
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
    <div class="body_scroll">
     <img style="width: 100%; height: auto;" src="assets/images/a_ok4.png">
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart); 
           google.charts.setOnLoadCallback(drawChart2); 
           google.charts.setOnLoadCallback(drawChart3); 
           google.charts.setOnLoadCallback(drawChart4);
           google.charts.setOnLoadCallback(drawChart5); 
           google.charts.setOnLoadCallback(drawChart6);  
           google.charts.setOnLoadCallback(drawChart7); 
           google.charts.setOnLoadCallback(drawChart8);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result10))  
                          {  
                               echo "['".$row["kelamin"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                console.log(data)
                var options = {  
                      title: 'Jenis Kelamin',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  

           function drawChart2()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Agama', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result20))  
                          {  
                               echo "['".$row["p_agama"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Agama',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
                chart.draw(data, options);  
           }  
           function drawChart3()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Pendidikan', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result30))  
                          {  
                               echo "['".$row["p_pend"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Status Pendidikan',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart3'));  
                chart.draw(data, options);  
           }
            function drawChart4()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Pekerjaan', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result40))  
                          {  
                               echo "['".$row["p_pek"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Status Pekerjaan',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart4'));  
                chart.draw(data, options);  
           }
            function drawChart5()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Kategori', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result50))  
                          {  
                               echo "['".$row["b_cat"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Berita',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart5'));  
                chart.draw(data, options);  
           } 
           function drawChart6()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Tipe Laporan', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result60))  
                          {  
                               echo "['".$row["l_type"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Tipe Laporan',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart6'));  
                chart.draw(data, options);  
           }
           function drawChart7()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Kategori Laporan', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result70))  
                          {  
                               echo "['".$row["l_cat"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Kategori Laporan',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart7'));  
                chart.draw(data, options);  
           }
           function drawChart8()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Perantau', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result80))  
                          {  
                               echo "['".$row["per_country"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Perantau',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart8'));  
                chart.draw(data, options);  
           }    
           </script> 

                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2><strong>PENDUDUK</strong></h2>
                                </div>
                                <div class="body">
                                    <div id="piechart"  style="width: auto; height: 300px; background-color: red;"></div>  
                                </div>
                                
                            </div>                    
                        </div>

                         <div class="col-lg-12 col-md-12">
                            <div class="card">
                                
                                <div class="body">
                                    <div id="piechart2"  style="width: auto; height: 300px; background-color: red;"></div>  
                                </div>
                                
                            </div>                    
                        </div>

                         <div class="col-lg-12 col-md-12">
                            <div class="card">
                                
                                <div class="body">
                                    <div id="piechart3"  style="width: auto; height: 300px; background-color: red;"></div>  
                                </div>
                                
                            </div>                    
                        </div>

                         <div class="col-lg-12 col-md-12">
                            <div class="card">
                                
                                <div class="body">
                                    <div id="piechart4"  style="width: auto; height: 300px; background-color: red;"></div>  
                                </div>
                                
                            </div>                    
                        </div>
                         <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                         <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2><strong>Kategori Berita</strong></h2>
                                </div>
                                <div class="body">
                                    <div id="piechart5"  style="width: auto; height: 300px; background-color: red;"></div>  
                                </div>
                                
                            </div>                    
                        </div>

                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                         <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2><strong>Jenis Laporan</strong></h2>
                                </div>
                                <div class="body">
                                    <div id="piechart6"  style="width: auto; height: 300px; background-color: red;"></div>  
                                </div>
                                
                            </div>                    
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                
                                <div class="body">
                                    <div id="piechart7"  style="width: auto; height: 300px; background-color: red;"></div>  
                                </div>
                                
                            </div>                    
                        </div>

                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                         <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2><strong>Perantau</strong></h2>
                                </div>
                                <div class="body">
                                    <div id="piechart8"  style="width: auto; height: 300px; background-color: red;"></div>  
                                </div>
                                
                            </div>                    
                        </div>



                       



                    </div>
                </div>
            </div>
        </section>
    </section>

    <script>

        window.onload = function(){

        // Line chart from swirlData for dashReport
        var ctx = document.getElementById("dashReport").getContext("2d");
        window.myLine = new Chart(ctx).Line(swirlData, {
            responsive: true,
            scaleShowVerticalLines: false,
            scaleBeginAtZero : true,
            multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
        }); 
        
        // Pie Chart from doughutData
        var doctx = document.getElementById("chart-area3").getContext("2d");
        window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

        // Dougnut Chart from doughnutData
        var doctx = document.getElementById("chart-area4").getContext("2d");
        window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

    }
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

</body>
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/c3.bundle.js"></script>


<script src="assets/js/pages/charts/c3.js"></script>
<!-- Jquery Core Js -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->



<script src="assets/bundles/mainscripts.bundle.js"></script>





</html>
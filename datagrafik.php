<?php
session_start();
require_once('db_connect.php');
// require_once('library.php');


  $query = "SELECT a.kelamin as p_kelamin, count(a.kelamin) as number FROM ( SELECT kelamin FROM penduduk UNION ALL SELECT kelamin FROM keluarga ) as a GROUP BY a.kelamin";  
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


?>
<!doctype html>
    <html class="no-js " lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
        <title>:: SIMNag :: Home</title>
         <link rel="shortcut icon" type="image/png" href="/favicon2.png"/>
        <link rel="icon" href="" type="user/image/x-icon"> <!-- Favicon-->
        <link rel="stylesheet" href="user/assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="user/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
        <link rel="stylesheet" href="user/assets/plugins/charts-c3/plugin.css"/>
        <link rel="icon" href="user/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="user/assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Custom Css -->
        <link  rel="stylesheet" href="user/assets/css/style.min.css">

        <title>:: Aero Bootstrap4 Admin :: C3 Chart</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="user/assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="user/assets/plugins/charts-c3/plugin.css"/>



        <!-- Custom Css -->
        <link rel="stylesheet" href="user/assets/css/style.min.css">
    </head>
    
    
    <body class="theme-blush">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img class="zmdi-hc-spin" src="" width="48" height="48" alt="SISTEM INFORMASI NAGARI"></div>
                <p>Please wait...</p>
            </div>
        </div>



        


        <!-- Main Content -->

        <section class="content">

            <div class="body_scroll">

             <img style="width: 100%; height: auto;" src="user/assets/images/a_ok4.png">
             <div class="block-header">
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
                               echo "['".$row["p_kelamin"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
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


             </div>

             <div class="container-fluid">
                <div class="row">
                 
                
                <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2><strong>PENDUDUK</strong></h2>
                                </div>
                                <div class="body">
                                    <div id="piechart"  style="width: auto; height: 300px; "></div>  
                                </div>
                                
                            </div>                    
                        </div>

                         <div class="col-lg-12 col-md-12">
                            <div class="card">
                                
                                <div class="body">
                                    <div id="piechart2"  style="width: auto; height: 300px;"></div>  
                                </div>
                                
                            </div>                    
                        </div>

                         <div class="col-lg-12 col-md-12">
                            <div class="card">
                                
                                <div class="body">
                                    <div id="piechart3"  style="width: auto; height: 300px; "></div>  
                                </div>
                                
                            </div>                    
                        </div>

                         <div class="col-lg-12 col-md-12">
                            <div class="card">
                                
                                <div class="body">
                                    <div id="piechart4"  style="width: auto; height: 300px; "></div>  
                                </div>
                                
                            </div>                    
                        </div>
                         <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                        
                        

                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                         <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2><strong>Perantau</strong></h2>
                                </div>
                                <div class="body">
                                    <div id="piechart8"  style="width: auto; height: 300px; "></div>  
                                </div>
                                
                            </div>                    
                        </div>



            </div>
            <div class="mail-submit mb-4">
                <a style="height: 50px; font-size:20px;" href="index.php" class="btn btn-danger btn-block"><i style="font-size:20px;" class="zmdi zmdi-hc-fw"></i> Beranda </a>
            </div>
            <br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br>
                       

        </div>
    </div>
</section>
</section>



<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="user/assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="user/assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="user/assets/bundles/c3.bundle.js"></script>

<script src="user/assets/bundles/mainscripts.bundle.js"></script>
<script src="user/assets/js/pages/index.js"></script>

</body>
<script src="user/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="user/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="user/assets/bundles/c3.bundle.js"></script>

<script src="user/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="user/assets/js/pages/charts/c3.js"></script>


</html>
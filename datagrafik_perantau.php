<?php
session_start();
require_once('db_connect.php');
// require_once('library.php');


$query = "SELECT p_kelamin, count(*) as number FROM penduduk GROUP BY p_kelamin";  
$result10 = mysqli_query($connection, $query);  

$query2 = "SELECT p_agama, count(*) as number FROM penduduk GROUP BY p_agama";  
$result20 = mysqli_query($connection, $query2);  

$query3 = "SELECT p_pend, count(*) as number FROM penduduk GROUP BY p_pend";  
$result30 = mysqli_query($connection, $query3);  

$query4= "SELECT p_pek, count(*) as number FROM penduduk GROUP BY p_pek";  
$result40 = mysqli_query($connection, $query4);

$query5= "SELECT b_cat, count(*) as number FROM berita GROUP BY b_cat";  
$result50 = mysqli_query($connection, $query5);  

$query6= "SELECT l_type, count(*) as number FROM lapor GROUP BY l_type";  
$result60 = mysqli_query($connection, $query6);

$query7= "SELECT l_cat, count(*) as number FROM lapor GROUP BY l_cat";  
$result70 = mysqli_query($connection, $query7);  

$query8= "SELECT per_country, count(*) as number FROM perantau GROUP BY per_country";  
$result80 = mysqli_query($connection, $query8);  

$query9= "SELECT per_prov, count(*) as number FROM perantau GROUP BY per_prov";  
$result90 = mysqli_query($connection, $query9);  


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
            
           
           google.charts.setOnLoadCallback(drawChart8);
            google.charts.setOnLoadCallback(drawChart9)
           
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
                      title: 'Perantau ( Negara )',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart8'));  
                chart.draw(data, options);  
           }  

           function drawChart9()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Perantau', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result90))  
                          {  
                               echo "['".$row["per_prov"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Perantau di Indonesia ( Provinsi )',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart9'));  
                chart.draw(data, options);  
           }    
           </script> 


             </div>

             <div class="container-fluid">
                <div class="row">
                 
                
                

                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                         <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2><strong>Perantau</strong></h2>
                                </div>
                                <div class="body">
                                    <div id="piechart8"  style="width: auto; height: 400px; "></div>  
                                </div>
                                
                            </div>                    
                        </div>

                         <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2><strong>Perantau</strong></h2>
                                </div>
                                <div class="body">
                                    <div id="piechart9"  style="width: auto; height: 400px; "></div>  
                                </div>
                                
                            </div>                    
                        </div>



            </div>
            <div class="mail-submit mb-4">
                <a style="height: 50px; font-size:20px;" href="index.php" class="btn btn-danger btn-block"><i style="font-size:20px;" class="zmdi zmdi-hc-fw"></i> Beranda </a>
            </div>
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
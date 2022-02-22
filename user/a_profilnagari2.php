<?php

require_once('db_connect.php');




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




<section class="content">
    <div class="body_scroll">
        <img style="width: 100%; height: auto;" src="assets/images/a_ok4.png">
       
        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>jumlah penduduk</strong> Menurut Agama</h2>
                            <ul class="header-dropdown">

                               
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
                                        <th>Buddha</th>
                                         </tr>
                                    <tbody>
                                    <tr>
                                        <td>Sungai Jerinjing</td>
                                        <td>1454</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Talao</td>
                                        <td>495</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Sungai Keruh</td>
                                        <td>949</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Sungai Talang</td>
                                        <td>1549</td>
                                        <td>36</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                                             
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
                                
                               
                            </ul>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th width="40%" >Nama Jorong</th>
                                        <th>Total Penduduk</th>
                                        <th>Total KK</th>
                                        <th>%</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="40%">Sungai Jerinjing</td>
                                        <td>2,009</td>
                                        <td>3,591</td>
                                        <td>7.01% </td>
                                    </tr>
                                    <tr>
                                        <td>Talao</td>
                                        <td>1,129</td>
                                        <td>1,361</td>
                                        <td>3.01% </td>
                                    </tr>
                                    <tr>
                                        <td>Sungai Keruh</td>
                                        <td>2,009</td>
                                        <td>2,901</td>
                                        <td>9.01% </td>
                                    </tr>
                                    <tr>
                                        <td>Sungai Talang</td>
                                        <td>954</td>
                                        <td>901</td>
                                        <td>5.71% </td>
                                    </tr>
                                    <tr style="background-color:#d4d4d4;">
                                        <td>Jumlah</td>
                                        <td>4,236</td>
                                        <td>4,591</td>
                                        <td>9.15% </td>
                                    </tr>
                                                                          
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
                                
                                
                            </ul>
                        </div>
                       
                        <div class="table-responsive">
                            <table class="table table-hover c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th>Pekerjaan</th>
                                        <th>Jumlah</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PNS</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>PT. TKA</td>
                                        <td>1268</td>
                                    </tr>
                                    <tr>
                                        <td>PT. KSI</td>
                                        <td>1064</td>
                                    </tr>
                                    <tr>
                                        <td>PT. SJAL</td>
                                        <td>317</td>
                                    </tr>
                                     <tr>
                                        <td>Wira Swasta</td>
                                        <td>48</td>
                                    </tr>
                                    <tr>
                                        <td>Petani</td>
                                        <td>88</td>
                                    </tr>
                                    <tr>
                                        <td>Tukang</td>
                                        <td>3</td>
                                    </tr>
                                    <tr style="background-color:#d4d4d4;">
                                        <td>Jumlah</td>
                                        <td>4,236</td>
                                      
                                    </tr>
                                     
                                                                                                                     
                                </tbody>
                            </table>                                    
                        </div>
                    </div>
                </div>
            </div>

          
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Jumlah penduduk</strong> Menurut Kelompok Umur dan Jenis kelamin</h2>
                            <ul class="header-dropdown">
                                
                              
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
            </div>

            <div class="row clearfix">
                <div class="col-lg-14 col-md-12">
                    <div class="card visitors-map">
                        <div class="header">
                            <h2><strong>JUMLAH</strong> Tempat Pendidikan</h2>
                            <ul class="header-dropdown">
                                
                               
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>PAUD</td>
                                        <td>PAUD Asoka</td>
                                        <td>Sungai Keruh</td>
                                        <td>2</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>TK</td>
                                        <td>TK Yayasan Tidar Kerinci Agung</td>
                                        <td>Sungai Talang</td>
                                        <td>4</td>
                                        <td>50</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>TK</td>
                                        <td>TK Mutiara Bunda</td>
                                        <td>Sungai  Jerinjing</td>
                                        <td>2</td>
                                        <td>25</td>
                                    </tr>
                                     <tr>
                                        <td>3</td>
                                        <td>SD</td>
                                        <td>SDN 01 Talao Sungai Kunyit</td>
                                        <td>Sungai Jerinjing</td>
                                        <td>10</td>
                                        <td>127</td>
                                    </tr>
                                     <tr>
                                        <td>4</td>
                                        <td>SD</td>
                                        <td>SDS 01 YTKA</td>
                                        <td>Sungai Talang</td>
                                        <td>14</td>
                                        <td>302</td>
                                    </tr>
                                     <tr>
                                        <td>5</td>
                                        <td>SMP</td>
                                        <td>SMP 20 Solok Selatan</td>
                                        <td>Talao</td>
                                        <td>11</td>
                                        <td>96</td>
                                    </tr>
                                     <tr>
                                        <td>6</td>
                                        <td>TK</td>
                                        <td>TK Mutiara Bunda</td>
                                        <td>Sungai  Jerinjing</td>
                                        <td>2</td>
                                        <td>25</td>
                                    </tr>
                                   
                                                                          
                                </tbody>
                            </table>                                    
                        </div>
                    </div>
                </div>                   
            </div>
<div class="mail-submit mb-4">
                <a style="height: 50px; font-size:20px;" href="../index.php" class="btn btn-danger btn-block"><i style="font-size:20px;" class="zmdi zmdi-hc-fw"></i> Beranda </a>
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




<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/c3.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/pages/charts/c3.js"></script>

</body>


</html>
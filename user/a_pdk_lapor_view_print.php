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
   
<body onload="window.print()" >

    <!-- Page Loader -->
   



    <!-- Left Sidebar -->
    

<!-- Right Sidebar -->


<!-- Main Content -->

<section >
    <div class="">
        <img style="width: 100%; height: auto;" src="assets/images/lapor.png">
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
    

</div>
</div>
</section>
<script>

setTimeout(window.close, 500);
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
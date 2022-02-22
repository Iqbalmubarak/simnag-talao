<?php
session_start();
include('ifnotloginadmin2.php');
require_once('../db_connect.php');
// require_once('library.php');


$ad_email = $_SESSION['ad_email'];
$sqlquery = "SELECT * FROM admin
WHERE ad_email='$ad_email' ";
$result = $connection->query($sqlquery) or die($connection->error);
$sqlqueryresult = $connection ->query($sqlquery);

$sqlquery2 = "SELECT * FROM surat WHERE s_id='".$_GET["s_id"]."'  ";
$sqlqueryresult2 = mysqli_query($connection,$sqlquery2);

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
    <link rel="icon" href="" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css" />
    <link rel="stylesheet" href="../assets/plugins/charts-c3/plugin.css" />

    <link rel="stylesheet" href="../assets/plugins/morrisjs/morris.min.css" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/style.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style type="text/css">
    .video-container {
        position: relative;
        padding-bottom: 100%;
        height: 100%;

    }

    .video-container iframe,
    .video-container object,
    .video-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        margin: 0px;
    }

    table {
        border-style: double;
        border-width: 3px;
        border-color: white;
    }

    table tr .text2 {
        text-align: right;
        font-size: 14px;
    }

    table tr .text {
        text-align: center;
        font-size: 14px;
    }

    table tr td {
        font-size: 14px;
    }
</style>

<body class="theme-blush">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="" width="48" height="48" alt="SISTEM INFORMASI NAGARI">
            </div>
            <p>Please wait...</p>
        </div>
    </div>



    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <div class="navbar-brand">
            <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
            <a href="index.php"><img src="../assets/images/KM_logo.png" style="width: 180px; height: auto;" width="25"
                    alt="Aero"></a>
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
                <li><a href="index.php"><i class="zmdi zmdi-home"></i><span>Beranda</span></a></li>
                <li><a href="simnag_biodata.php"><i class="zmdi zmdi-hc-fw"></i><span>Data Pribadi</span></a>

                </li>
                <li><a href="simnag_notif.php"><i class="zmdi zmdi-notifications"></i><span>Notifikasi</span>
                        <div class="notify"><span class="heartbit"></span><span style="background-color:red;"
                                class="point"></span></div>
                    </a>
                </li>

                <li><a href="simnag_status.php"><i class="zmdi zmdi-hc-fw"></i><span>Status</span></a></li>


                <li class="active open"><a href="simnag_surat.php"><i
                            class="zmdi zmdi-hc-fw"></i><span>E-Surat</span></a>

                </li>
                <li><a href="simnag_lapor.php"><i class="zmdi zmdi-hc-fw"></i> <span>Aduan/Aspirasi</span></a></li>
                <li><a href="../logout.php"><i class="zmdi zmdi-power"></i><span>Log out</span></a></li>



            </ul>
        </div>
    </aside>

    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs sm">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i
                        class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i
                        class="zmdi zmdi-comments"></i></a></li>
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
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush" class="active">
                                <div class="blush"></div>
                            </li>
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
                                            <span class="message">There are many variations of passages of Lorem Ipsum
                                                available</span>
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
                                            <span class="name">Isabella <small
                                                    class="float-right">11:31AM</small></span>
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
                                            <span class="name">Alexander <small
                                                    class="float-right">06:08PM</small></span>
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
            <img style="width: 100%; height: auto;" src="../assets/images/ok3.png">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <a style="background-color:grey;" href="wisata/index2.php"
                            class="btn btn-primary waves-effect btn-lg"><i class="zmdi zmdi-hc-fw"></i>Kembali</a>


                        <h2><i class="zmdi zmdi-hc-fw"></i>Surat Rekomendasi e-KTP</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body"><br>

                                <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-primary"><br><br><br><br><br><br>
                                        <center><br><br><br>
		<table>
			<tr>
				<td><img src="assets/logo.png" width="90" height="100"></td>
				<td>
					<center>
						<font size="5">PEMERINTAH KABUPATEN SOLOK SELATAN</font><br>
						<font size="5">KECAMATAN SANGIR BALAI JANGGO</font><br>
						<font size="5">NAGARI TALAO SUNGAI KUNYIT</font><br>
						<font size="2">Alamat : Jalan Raya Talao&emsp;&emsp;&emsp;&emsp;Email : talaookee@gmail.com&emsp;&emsp;&emsp;&emsp;Kode Pos : 27781</font><br>
					</center>
				</td>
			</tr>
			<tr>
				<td colspan="20"><hr></td>
			</tr>
		</table>
		<table width="625">
			<tr class="text2">
				<td>Nomer</td>
				<td widht="100">: 476/<?php echo $s_id ?>/Kepend/WN.TSK 2021</td>
				<td widht="500">Talao, <?php echo $s_date ?></td>
			</tr>
			<tr>
				<td>Lamp</td>
				<td width="564">: -</td>
				<td width="564">Kepada Yth,</td>
			</tr>
			<tr>
				<td>Perihal</td>
				<td width="564">: <b>Rekomendasi E-KTP</b></td>
				<td width="564"><b>Dinas Kependudukan dan Pencatatan</b></td>
			</tr>
			<tr>
				<td></td>
				<td width="564"></td>
				<td width="564"><b>Sipil (DISDUKCAPIL)</b></td>
			</tr>
			<tr>
				<td></td>
				<td width="564"></td>
				<td width="564">di</td>
			</tr>
			<tr>
				<td></td>
				<td width="564"></td>
				<td width="564">&nbsp &nbsp Padang Aro</td>
			</tr>
		</table>
		<table width="625">
			<tr>
				<td>
					<font size="2">Dengan  hormat,</font>
				</td>
			</tr>
		</table>
		<table width="625">
			<tr>
				<td>
					<font size="2">&nbsp &nbsp &nbsp &nbsp Bersama ini kami Mohon Bapak kiranya dapat membuat <b>Elektronik Kartu Tanda Penduduk (E-KTP)</b> kepada Warga kami yang tersebut dibawah ini :</font>
				</td>
			</tr>
		</table>
		<br>
	</table>
	<!-- Database -->
	<table>
		<tr class="text2">
			<td width="50"></td>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td width="541"> <b><?php echo $s_p_name ?></b></td>
		</tr>
		<tr>
			<td width="50"></td>
			<td>NIK</td>
			<td>:</td>
			<td width="525"> <?php echo $s_p_nik ?></td>
		</tr>
		<tr>
			<td width="50"></td>
			<td>Tempat/Tgl lahir</td>
			<td>:</td>
			<td width="525"> <?php echo $s_p_tempat_l ?>, <?php echo $s_p_tanggal_l ?></td>
		</tr>
		<tr>
			<td width="50"></td>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td width="525"> <?php echo $s_p_kelamin ?></td>
		</tr>
		<tr>
			<td width="50"></td>
			<td>Agama</td>
			<td>:</td>
			<td width="525"> <?php echo $s_p_agama ?></td>
		</tr>
		<tr>
			<td width="50"></td>
			<td>Status</td>
			<td>:</td>
			<td width="525"> <?php echo $s_p_status ?></td>
		</tr>
		<tr>
			<td width="50"></td>
			<td>Pekerjaan</td>
			<td>:</td>
			<td width="525"> <?php echo $s_p_pek ?></td>
		</tr>
		<tr>
			<td width="50"></td>
			<td>Alamat</td>
			<td>:</td>
			<td width="525"> <?php echo $s_p_alamat ?></td>
		</tr>
	</table>
	<!-- Database -->
	<br>
	<table width="625">
		<tr>
			<td>
				<font size="2">Demikian surat ini kami sampaikan, atas bantuan Bapak diucapkan terima kasih.</font>
			</td>
		</tr>
	</table>
	<br>
	<table width="625">
		<tr>
			<td width="430"><br><br><br><br></td>
			<td class="text" align="center"> 
				a.n PJ Wali Nagari Talao Sungai Kunyit Sekretaris Nagari<br><br><br><br><b><u>AFRIWES, M.Pd.I</u></b>
			</td>
		</tr>
	</table>
</center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script type="text/javascript">
        function submitform() {
            document.form3.submit();
        }
    </script>




    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
    <script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

    <script src="../assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
    <script src="../assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
    <script src="../assets/bundles/c3.bundle.js"></script>

    <script src="../assets/bundles/mainscripts.bundle.js"></script>
    <script src="../assets/js/pages/index.js"></script>
</body>


</html>
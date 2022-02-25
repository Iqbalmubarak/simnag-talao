<?php
session_start();
include('ifnotloginadmin2.php');
require_once('../db_connect.php');
// require_once('library.php');


$p_kk = $_SESSION['p_kk'];
$sqlquery = "SELECT * FROM penduduk INNER JOIN lapor
ON lapor.l_pelaporkk=penduduk.p_kk WHERE penduduk.p_kk='$p_kk' AND lapor.l_anonim='2' ";
$result = $connection->query($sqlquery) or die($connection->error);
$sqlqueryresult = $connection ->query($sqlquery);

$sql = "SELECT * FROM penduduk
WHERE  p_hub='Kepala Keluarga' AND p_kk='$p_kk'";
$result2 = $connection ->query ($sql);

$p_nik2 = $_GET['p_nik2'];

$sql4 = "SELECT * FROM penduduk WHERE p_nik2='$p_nik2'";
$result6 = $connection ->query ($sql4);
while ($key=$result6 -> fetch_assoc()) {
    $p_name = $key['p_name'];
    $p_nik = $key['p_nik'];
    $p_l_tempat = $key['p_l_tempat'];
    $p_l_tanggal = $key['p_l_tanggal'];
    $kelamin = $key['kelamin'];
    $agama = $key['agama'];
    $pek = $key['pek'];
    $p_alamat = $key['p_alamat'];
}

$d=strtotime("today");

function hitung_umur($tanggal_lahir){
	$birthDate = new DateTime($tanggal_lahir);
	$today = new DateTime("today");
	$y = $today->diff($birthDate)->y;

	return $y;
}
$umur = hitung_umur($p_l_tanggal);


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
</head>

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
            <div class="notify"><span class="heartbit"></span><span style="background-color:red;" class="point"></span>
            </div>
          </a>
        </li>

        <li><a href="simnag_status.php"><i class="zmdi zmdi-hc-fw"></i><span>Status</span></a></li>


        <li class="active open"><a href="simnag_surat.php"><i class="zmdi zmdi-hc-fw"></i><span>E-Surat</span></a>

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
      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a>
      </li>
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
    <div class="body_scroll">
      <img style="width: 100%; height: auto;" src="../assets/images/ok3.png">
      <div class="block-header">
        <div class="row">
          <div class="col-lg-7 col-md-6 col-sm-12">
            <h2>Cetak Surat Pengantar Nikah</h2>
          </div>
        </div>
      </div>
      <div class="container-fluid">

        <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card">

                <div class="body">


                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane in active">
                      <p>

                        <form class="form-horizontal row-fluid" action="simnag_surat_11_pro.php" method="POST"
                          name="form1" onsubmit="return validation()">
                          <center>
                            <div style="page-break-after:always;">
                              <table>
                                <tr>
                                  <td>KEPUTUSAN DIREKTUR JENDRAL BIMBINGAN MASYARAKAT ISLAM</td>
                                </tr>
                                <tr>
                                  <td>NOMOR 473</td>
                                </tr>
                                <tr>
                                  <td>TENTANG</td>
                                </tr>
                                <tr>
                                  <td>PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</td>
                                </tr>
                              </table>

                              <font>FORMULIR PENGANTAR NIKAH</font>
                              <table width="625">
                                <tr>
                                  <td width="500px"></td>
                                  <td><b>Model N1</b></td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td width="250px"><b>KANTOR WALI NAGARI</b></td>
                                  <td>: Talao Sungai Kunyit</td>
                                </tr>
                                <tr>
                                  <td width="250px"><b>KECAMATAN</b></td>
                                  <td>: Sangir Balai Janggo</td>
                                </tr>
                                <tr>
                                  <td width="250px"><b>KABUPATEN/KOTA</b></td>
                                  <td>: Solok Selatan</td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td>
                                    <br>
                                    <center>
                                      <font size="3"><U><b>PENGANTAR NIKAH</b></U></font><br>
                                      <font size="3">Nomor : 459/&emsp;&emsp;/AG/-2021</font>
                                    </center>
                                  </td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td>
                                    Yang bertanda tangan dibawah ini menjelaskan dengan sesungguhnya bahwa:
                                  </td>
                                </tr>
                              </table>
                              <!-- Database -->
                              <table width="625">
                                <tr class="text2">
                                  <td width="450">1. Nama Lengkap dan Alias</td>
                                  <td>:</td>
                                  <td width="600"> <input class="form-control col-sm-8" type="text" id="s_p_name"
                                      name="s_p_name" value="<?php echo $p_name ; ?>" readonly></td>
                                </tr>
                                </tr>
                                <tr>
                                  <td>2. Nomor Induk Kependudukan (NIK)</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s_p_nik" name="s_p_nik"
                                      value="<?php echo $p_nik ; ?>" readonly></td>
                                  </td>
                                </tr>
                                <tr>
                                  <td>3. Jenis Kelamin</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s_p_kelamin"
                                      name="s_p_kelamin" value="<?php echo $kelamin ; ?>" readonly></td>
                                  </td>
                                </tr>
                                <tr>
                                  <td>4. Tempat Lahir</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s_p_tempat_l"
                                      name="s_p_tempat_l" value="<?php echo $p_l_tempat ; ?>" readonly></td>
                                </tr>
                                <tr>
                                  <td>5. Tanggal Lahir</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s_p_tanggal_l"
                                      name="s_p_tanggal_l" value="<?php echo $p_l_tanggal ; ?>" readonly></td>
                                </tr>
                                <tr>
                                  <td>6. Kewarganegaraan</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_kewarganegaraan"
                                      name="s11_kewarganegaraan"></td>
                                </tr>
                                <tr>
                                  <td>7. Agama</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s_p_agama" name="s_p_agama"
                                      value="<?php echo $agama ; ?>" readonly></td>
                                </tr>
                                <tr>
                                  <td>8. Pekerjaan</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s_p_pek" name="s_p_pek"
                                      value="<?php echo $pek ; ?>" readonly></td>
                                </tr>
                                <tr>
                                  <td>9. Alamat</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s_p_alamat" name="s_p_alamat"
                                      value="<?php echo $p_alamat ; ?>" readonly></td>
                                </tr>
                                <tr>
                                  <td>10. Status Perkawinan</td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>
                                    <table>
                                      <tr>
                                        <td width="20px"></td>
                                        <td>a)</td>
                                        <td>Laki-laki : Jejaka, Duda atau Beristri ke</td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text" id="s11_statuslk"
                                      name="s11_statuslk"></td>
                                </tr>
                                <tr>
                                  <td>
                                    <table>
                                      <tr>
                                        <td width="20px"></td>
                                        <td>b)</td>
                                        <td>Perempuan : Perawan, Janda</td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text" id="s11_statuspr"
                                      name="s11_statuspr"></td>
                                </tr>
                                <tr>
                                  <td>11. Nama Istri atau Suami Terdahulu</td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text" id="s11_terdahulu"
                                      name="s11_terdahulu"></td>
                                </tr>
                              </table>
                              <!-- Database -->
                              <table width="625">
                                <tr>
                                  <td>
                                    Adalah benar anak dari perkawinan Seorang Pria
                                  </td>
                                </tr>
                              </table>
                              <!-- Database -->
                              <table width="625">
                                <tr class="text2">
                                  <td width="500">Nama Lengkap dan Alias</td>
                                  <td>:</td>
                                  <td> <input class="form-control col-sm-8" type="text" id="s11_nama2" name="s11_nama2">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Nomor Induk Kependudukan (NIK)</td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text" id="s11_nik2"
                                      name="s11_nik2"></td>
                                </tr>
                                <tr>
                                  <td>Tempat Lahir</td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text" id="s11_tempat2"
                                      name="s11_tempat2"></td>
                                </tr>
                                <tr>
                                  <td>Tanggal Lahir</td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text" id="s11_tanggal2"
                                      name="s11_tanggal2"></td>
                                </tr>
                                <tr>
                                  <td>Kewarganegaraan</td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text"
                                      id="s11_kewarganegaraan2" name="s11_kewarganegaraan2"></td>
                                </tr>
                                <tr>
                                  <td>Agama</td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text" id="s11_agama2"
                                      name="s11_agama2"></td>
                                </tr>
                                <tr>
                                  <td>Pekerjaan</td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text" id="s11_pekerjaan2"
                                      name="s11_pekerjaan2"></td>
                                </tr>
                                <tr>
                                  <td>Alamat</td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text" id="s11_alamat2"
                                      name="s11_alamat2"></td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td>
                                    Dengan seorang wanita
                                  </td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr class="text2">
                                  <td width="500">Nama Lengkap dan Alias</td>
                                  <td>:</td>
                                  <td> <input class="form-control col-sm-8" type="text" id="s11_nama3" name="s11_nama3">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Nomor Induk Kependudukan (NIK)</td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text" id="s11_nik3"
                                      name="s11_nik3"></td>
                                </tr>
                                <tr>
                                  <td>Tempat Lahir</td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text" id="s11_tempat3"
                                      name="s11_tempat3"></td>
                                </tr>
                                <tr>
                                  <td>Tanggal Lahir</td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text" id="s11_tanggal3"
                                      name="s11_tanggal3"></td>
                                </tr>
                                <tr>
                                  <td>Kewarganegaraan</td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text"
                                      id="s11_kewarganegaraan3" name="s11_kewarganegaraan3"></td>
                                </tr>
                                <tr>
                                  <td>Agama</td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text" id="s11_agama3"
                                      name="s11_agama3"></td>
                                </tr>
                                <tr>
                                  <td>Pekerjaan</td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text" id="s11_pekerjaan3"
                                      name="s11_pekerjaan3"></td>
                                </tr>
                                <tr>
                                  <td>Alamat</td>
                                  <td>:</td>
                                  <td width="525"><input class="form-control col-sm-8" type="text" id="s11_alamat3"
                                      name="s11_alamat3"></td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td>
                                    Demikian surat pengantar ini dibuat dengan mengingat sumpah jabatan dan untuk
                                    dipergunakan sebagaimana mestinya.
                                  </td>
                                </tr>
                              </table>
                              <table width="800">
                                <tr>
                                  <td width="400"><br><br><br><br></td>
                                  <td class="text" align="center">
                                    Talao, 10 Desember 2021 <br> a.n Pj Wali Nagari Talao Sungai Kunyit <br>Sekretaris
                                    Nagari <br><br><br><b><u>AFRIWES, M.Pd.I</u></b>
                                  </td>
                                </tr>
                              </table>
                            </div>

                            <!-- Page 2 -->
                            <div style="page-break-after:always;">
                              <table>
                                <tr>
                                  <td>KEPUTUSAN DIREKTUR JENDRAL BIMBINGAN MASYARAKAT ISLAM</td>
                                </tr>
                                <tr>
                                  <td>NOMOR 473 TAHUN 2020</td>
                                </tr>
                                <tr>
                                  <td>TENTANG</td>
                                </tr>
                                <tr>
                                  <td>PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</td>
                                </tr>
                              </table>

                              <font>FORMULIR PERMOHONAN KEHENDAK NIKAH</font>
                              <table width="625">
                                <tr>
                                  <td width="500px"></td>
                                  <td width="220px">
                                    <center><b>Model N-2</b></center>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="500px"></td>
                                  <td>Talao, 08 Desember 2021</td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td width="100px">Perihal</td>
                                  <td>: Permohonan Kehendak Nikah</td>
                                  <td width="200px"></td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td>Kepada Yth,</td>
                                </tr>
                                <tr>
                                  <td>Kepala KUA Kecamatan Sangir Balai Janggo</td>
                                </tr>
                                <tr>
                                  <td>di Sungai Kunyit</td>
                                </tr>
                              </table>
                              <br>
                              <table width="625">
                                <tr>
                                  <td style="text-indent:50px;">
                                    Dengan hormat, kami mengajukan permohonan kehendak nikah untuk atas nama :
                                  </td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td width="200px">Calon suami</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_csuami" name="s11_csuami">
                                  </td>
                                </tr>
                                <tr>
                                  <td width="200px">Calon istri</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_cistri" name="s11_cistri">
                                  </td>
                                </tr>
                                <tr>
                                  <td width="200px">Hari/Tanggal/Jam</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_hatajam"
                                      name="s11_hatajam"></td>
                                </tr>
                                <tr>
                                  <td width="200px">Tempat akad nikah</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_tempat_akad"
                                      name="s11_tempat_akad"></td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td style="text-indent:50px;">
                                    Bersama ini kami sampaikan surat-surat yang diperlukan untuk diperiksa sebagai
                                    berikut :
                                  </td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td width="20px">1.</td>
                                  <td>Surat pengantar nikah dari Wali Nagari/Kelurahan</td>
                                </tr>
                                <tr>
                                  <td width="20px">2.</td>
                                  <td>Surat persetujuan calon mempelai</td>
                                </tr>
                                <tr>
                                  <td width="20px">3.</td>
                                  <td>Fotokopi KTP</td>
                                </tr>
                                <tr>
                                  <td width="20px">4.</td>
                                  <td>Fotokopi akte kelahiran</td>
                                </tr>
                                <tr>
                                  <td width="20px">5.</td>
                                  <td>Fotokopi kartu keluarga</td>
                                </tr>
                                <tr>
                                  <td width="20px">6.</td>
                                  <td>Paspoto 2x3 = 3 lembar berlatar belakang biru ( harus berhijab bagi perempuan )
                                  </td>
                                </tr>
                                <tr>
                                  <td width="20px"></td>
                                  <td style="text-indent:60px;">4x6 = 2 lembar berlatar belakang biru ( berpeci, rapi
                                    bagi laki-laki )
                                  </td>
                                </tr>
                                <tr>
                                  <td width="20px">7.</td>
                                  <td>Akta Cerai (Asli) bagi Duda/Janda cerai hidup</td>
                                </tr>
                                <tr>
                                  <td width="20px">8.</td>
                                  <td>Surat keterangan kematian bagi Duda / Janda cerai mati</td>
                                </tr>
                                <tr>
                                  <td width="20px">9.</td>
                                  <td>Surat Izin Atasan bagi TNI, POLRI dan PNS</td>
                                </tr>
                                <tr>
                                  <td width="20px">10.</td>
                                  <td>.........................................................</td>
                                </tr>
                                <tr>
                                  <td width="20px">11.</td>
                                  <td>.........................................................</td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td style="text-indent:50px;">
                                    Demikian permohonan ini kami sampaikan, kiranya dapat diperiksa, dihadiri dan
                                    dicatat sesuai dengan ketentuan peraturan perundang-undangan.
                                  </td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td width="1200px"></td>
                                  <td width="220px">Wassalam,</td>
                                </tr>
                                <tr>
                                  <td width="500px"></td>
                                  <td width="220px">Pemohon</td>
                                </tr>
                                <tr>
                                  <td width="200px">Diterima tanggal ................................20</td>
                                  <td width="500px"></td>
                                </tr>
                                <tr>
                                  <td width="200px">Yang menerima,</td>
                                  <td width="500px"></td>
                                </tr>
                                <tr>
                                  <td width="200px">Kepala KUA/Penghulu</td>
                                  <td width="500px"></td>
                                </tr>
                                <tr>
                                  <td width="1200px"></td>
                                  <td width="220px"></td>
                                </tr>
                                <tr>
                                  <td width="1200px"></td>
                                  <td width="220px"><u><b>BURSAN</b></u></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td width="200px">........................................</td>
                                  <td width="500px"></td>
                                </tr>
                              </table>
                            </div>
                            <!-- Page 3 -->
                            <div style="page-break-after:always;">
                              <table>
                                <tr>
                                  <td>KEPUTUSAN DIREKTUR JENDRAL BIMBINGAN MASYARAKAT ISLAM</td>
                                </tr>
                                <tr>
                                  <td>NOMOR 473 TAHUN 2020</td>
                                </tr>
                                <tr>
                                  <td>TENTANG</td>
                                </tr>
                                <tr>
                                  <td>PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</td>
                                </tr>
                              </table>

                              <font>FORMULIR PERMOHONAN PENCATATAN ISBAT</font>
                              <table width="625">
                                <tr>
                                  <td width="500px"></td>
                                  <td width="220px">
                                    <center><b>Model N3</b></center>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="500px"></td>
                                  <td>.......................2021</td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td width="100px">Perihal</td>
                                  <td>: Permohonan Pencatatan Isbat</td>
                                  <td width="200px"></td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td>Kepada Yth,</td>
                                </tr>
                                <tr>
                                  <td>Kepala KUA Kecamatan /PPN LN</td>
                                </tr>
                                <tr>
                                  <td>di Sungai Kunyit</td>
                                </tr>
                              </table>
                              <br>
                              <table width="625">
                                <tr>
                                  <td style="text-indent:50px;">
                                    Dengan hormat, kami mengajukan permohonan pencatatan isbat untuk atas nama :
                                  </td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td width="200px">Suami</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_suami" name="s11_suami">
                                  </td>
                                </tr>
                                <tr>
                                  <td width="200px">Istri</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_istri" name="s11_istri">
                                  </td>
                                </tr>
                                <tr>
                                  <td width="200px">Tanggal Penetapan</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_tanggal_penetapan"
                                      name="s11_tanggal_penetapan"></td>
                                </tr>
                                <tr>
                                  <td width="200px">Pengadilan Agama</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_pengadilan_agama"
                                      name="s11_pengadilan_agama"></td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td style="text-indent:50px;">
                                    Bersama ini kami sampaikan surat-surat yang diperlukan untuk diperiksa sebagai
                                    berikut :
                                  </td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td width="20px">1.</td>
                                  <td>Putusan Isbat</td>
                                </tr>
                                <tr>
                                  <td width="20px">2.</td>
                                  <td>Fotocopy KTP</td>
                                </tr>
                                <tr>
                                  <td width="20px">3.</td>
                                  <td>Fotokopi Kartu Keluarga</td>
                                </tr>
                                <tr>
                                  <td width="20px">4.</td>
                                  <td>Paspoto 2x3 = 3 lembar berlatar belakang biru</td>
                                </tr>
                                <tr>
                                  <td width="20px">5.</td>
                                  <td>..........................</td>
                                </tr>
                                <tr>
                                  <td width="20px">6.</td>
                                  <td>..........................</td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td style="text-indent:50px;">
                                    Demikian permohonan ini kami sampaikan, kiranya dapat di periksa, dihadiri dan di
                                    catat sesuai dengan ketentuan peraturan perundang-undangan.
                                  </td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td width="1200px"></td>
                                  <td width="220px">Wassalam,</td>
                                </tr>
                                <tr>
                                  <td width="500px"></td>
                                  <td width="220px">Pemohon</td>
                                </tr>
                                <tr>
                                  <td width="200px">Diterima tanggal ................................</td>
                                  <td width="500px"></td>
                                </tr>
                                <tr>
                                  <td width="200px">Yang menerima,</td>
                                  <td width="500px"></td>
                                </tr>
                                <tr>
                                  <td width="200px">Kepala KUA/PPN LN</td>
                                  <td width="500px"></td>
                                </tr>
                                <tr>
                                  <td width="1200px"></td>
                                  <td width="220px"></td>
                                </tr>
                                <tr>
                                  <td width="1200px"></td>
                                  <td width="220px"><u><b>ROMI HERIYANTO</b></u></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td width="200px">........................................</td>
                                  <td width="500px"></td>
                                </tr>
                              </table>
                            </div>

                            <!-- Page 4 -->
                            <div style="page-break-after:always;">
                              <table>
                                <tr>
                                  <td>KEPUTUSAN DIREKTUR JENDRAL BIMBINGAN MASYARAKAT ISLAM</td>
                                </tr>
                                <tr>
                                  <td>NOMOR 473 TAHUN 2020</td>
                                </tr>
                                <tr>
                                  <td>TENTANG</td>
                                </tr>
                                <tr>
                                  <td>PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td width="500px"></td>
                                  <td width="220px">
                                    <center><b>Model N-4</b></center>
                                  </td>
                                </tr>
                              </table>

                              <font><u>PERSETUJUAN CALON PENGANTIN</u></font> <br><br>
                              <table width="625">
                                <tr>
                                  <td>
                                    Yang bertanda tangan di bawah ini :
                                  </td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td width="20px">A.</td>
                                  <td>Calon Suami :</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>1. Nama lengkap dan alias</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_csuami2"
                                      name="s11_csuami2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>2. Bin</td>
                                  <td>: </td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_bin_csuami2"
                                      name="s11_bin_csuami2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>3. Nomor Induk Kependudukan</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_nik_csuami2"
                                      name="s11_nik_csuami2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>4. Tempat Lahir</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_tempat_csuami2"
                                      name="s11_tempat_csuami2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>5. Tanggal Lahir</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_tanggal_csuami2"
                                      name="s11_tanggal_csuami2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>6. Kewarganegaraan</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_kewarganegaraan_csuami2"
                                      name="s11_kewarganegaraan_csuami2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>7. Agama</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_agama_csuami2"
                                      name="s11_agama_csuami2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>8. Pekerjaan</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_pek_csuami2"
                                      name="s11_pek_csuami2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>9. Alamat</td>
                                  <td>:</td>
                                  <td><textarea class="form-control col-sm-8" type="text" id="s11_alamat_csuami2"
                                      name="s11_alamat_csuami2"> </textarea> </td>
                                </tr>
                              </table>
                              <table width="625">
                                <tr>
                                  <td width="20px">B.</td>
                                  <td>Calon Istri :</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>1. Nama lengkap dan alias</td>
                                  <td>: </td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_cistri2"
                                      name="s11_cistri2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>2. Bin</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_bin_cistri2"
                                      name="s11_bin_cistri2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>3. Nomor Induk Kependudukan</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_nik_cistri2"
                                      name="s11_nik_cistri2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>4. Tempat Lahir</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_tempat_cistri2"
                                      name="s11_tempat_cistri2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>5. Tempat dan Tanggal Lahir</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_tanggal_cistri2"
                                      name="s11_tanggal_cistri2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>6. Kewarganegaraan</td>
                                  <td>:</td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_kewarganegaraan_cistri2"
                                      name="s11_kewarganegaraan_cistri2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>7. Agama</td>
                                  <td>: </td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_agama_cistri2"
                                      name="s11_agama_cistri2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>8. Pekerjaan</td>
                                  <td>: </td>
                                  <td><input class="form-control col-sm-8" type="text" id="s11_pek_cistri2"
                                      name="s11_pek_cistri2"></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>9. Alamat</td>
                                  <td>:</td>
                                  <td><textarea class="form-control col-sm-8" type="text" id="s11_alamat_cistri2"
                                      name="s11_alamat_cistri2"> </textarea> </td>
                                </tr>
                              </table>
                              <table width="700">
                                <tr>
                                  <td>
                                    Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran sendiri,
                                    tanpa ada paksaan dari siapapun juga, setuju untuk melangsungkan perkawinan. <br>
                                    Demikian surat persetujuan ini dibuat untuk digunakan seperlunya.
                                  </td>
                                </tr>
                              </table> <br>
                              <table width="625">
                                <tr>
                                  <td width="100"></td>
                                  <td width="300"></td>
                                  <td width="200">Talao, 10 Desember 2021</td>
                                </tr>
                                <tr>
                                  <td>
                                    <center>Calon Istri</center>
                                  </td>
                                  <td></td>
                                  <td>
                                    <center>Calon Suami</center>
                                  </td>
                                </tr>
                                <tr>
                                  <td><br><br><br>
                                    <center><u><b>YAHDIANI</b></u></center>
                                  </td>
                                  <td></td>
                                  <td><br><br><br>
                                    <center><u><b>BURSAN</b></u></center>
                                  </td>
                                </tr>
                              </table>

                            </div>

                    
                    </center><br><br>
                    <input style="display: none;" type="text" id="s_p_kk" name="s_p_kk" class="form-control col-sm-3"
                      value="<?php echo $p_kk ?>">
                    <input style="display: none;" type="text" id="s_badge" name="s_badge" class="form-control col-sm-3"
                      value="badge-warning">
                    <input style="display: none;" type="text" id="s_status" name="s_status"
                      class="form-control col-sm-3" value="Dalam Proses">
                    <input style="display: none;" type="text" id="s_title" name="s_title" class="form-control col-sm-3"
                      value="Surat Pengantar Nikah">
                    <input style="display: none;" type="text" id="s_date" name="s_date" class="form-control col-sm-3"
                      value="<?php echo date("d F Y", $d) ?>">
                    <input style="display: none;" type="text" id="s_filepath" name="s_filepath"
                      class="form-control col-sm-3" value="a_surat_print_11.php">


                    <input style="display:none" type="text" id="notif_message" name="notif_message" class="form-control"
                      value="Permohonan cetak surat ( Surat Pengantar Nikah ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih"
                      placeholder="...." required>
                    <input style="display:none" type="text" id="notif_title" name="notif_title" class="form-control"
                      value="Permohonan Surat" placeholder="...." required>
                    <input style="display:none" type="text" id="notif_logo" name="notif_logo" class="form-control"
                      value="" placeholder="...." required>
                    <input style="display:none" type="text" id="notif_icon" name="notif_icon" class="form-control"
                      value="bg-orange" placeholder="...." required>


                    <div class="col-sm-2 offset-sm-3">


                      <a style="background-color:#009688;" class="btn btn-primary waves-effect btn-lg" type="submit"
                        href="javascript: submitform()" name="submit"><i class="zmdi zmdi-hc-fw"></i> Cetak</a>
                    </div><br><br>

                    </form>
                    </p>



                  </div>

                </div>
              </div>
            </div>
          </div>
  </section>

  <script type="text/javascript">
    function submitform() {
      document.form1.submit();
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
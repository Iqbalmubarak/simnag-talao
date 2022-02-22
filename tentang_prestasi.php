<?php

session_start();
require_once('db_connect.php');
require_once('library.php');

$sqlquery3 = "SELECT * FROM nagari
WHERE n_id='1'";
$result3 = $connection->query($sqlquery3) or die($connection->error);
$sqlqueryresult3 = $connection ->query($sqlquery3);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <?php                           
    while ($key=$sqlqueryresult3 -> fetch_assoc()) {
     $n_name = $key['n_name'];
     $n_kontak1 = $key['n_kontak1'];
     $n_email = $key['n_email'];
     $n_address = $key['n_address'];
      $n_color = $key['n_color'];
  ?>
  <title> Nagari <?php echo $n_name ?></title>
   <link rel="shortcut icon" type="image/png" href="/favicon2.png"/>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- site icons -->
  <link rel="icon" href="images/fevicon/fevicon0.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Site css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- responsive css -->
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- colors css -->
  <link rel="stylesheet" href="css/colors1.css" />
  <!-- custom css -->
  <link rel="stylesheet" href="css/custom.css" />
  <!-- wow Animation css -->
  <link rel="stylesheet" href="css/animate.css" />
  <!-- revolution slider css -->
  <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
  <link rel="stylesheet" type="text/css" href="revolution/css/layers.css" />
  <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css" />
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a  href="https://api.whatsapp.com/send?phone=<?php echo $key['n_kontak1']; ?>&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float2" target="_blank"> Bantuan 
      <i class="fab fa-whatsapp my-float"></i>
    </a>
    <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-nrw1{font-size:10px;text-align:center;vertical-align:top}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
    <style>
    .footer {
      position: sticky;
      bottom: 0;
      left: 0;
      width: 100%;

      display: grid;
      place-items: center;
      padding: 20px;
    }
    .float2{
      position:fixed;
      width:150px;
      height:30px;
      bottom:10px;
      right:20px;
      background-color:<?php echo $n_color ?>;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      font-size:20px;
      box-shadow: 2px 2px 2px #9999;
      z-index:100;
      border: 1.5px solid;
    }

    .my-float2{
      margin-top:10px;
    }

    @media only screen and (device-width: 320px){
      #header_top {
        display:none;
      }
    }


  </style>
  <body id="default_theme" class="it_service">
    <!-- loader -->
    <div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_4.png" alt="#" /> </div>
    <!-- end loader -->
    <!-- header -->
    <header id="default_header" class="header_style_1">
      <!-- header top -->
      <div class="header_top">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="full">
                <div class="topbar-left">
                   <ul class="list-inline">
                     <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight"><?php echo $n_address ?></span> </li>
                  <li> <span class="topbar-label"><i class="fas fa-envelope"></i></span> <span class="topbar-hightlight"><a href=""><?php echo $n_email ?></a></span> </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 right_section_header_top">
              <div class="float-left">
                <div class="social_icon">
                  <ul class="list-inline">
                    <li><a class="fab fa-facebook-square" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>         
                    <li><a class="fab fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                    <li><a class="fab fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
                  </ul>
                </div>
              </div>
              <div class="float-right">
                <div class="make_appo"> <a class="btn white_btn" href="user/sign-in.php">Log In</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end header top -->
      <!-- header bottom -->
      <div class="header_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
              <!-- logo start -->
              <div class="logo"> <a href="index.php"><img src="images/logo_nagari_002.png" alt="logo" /></a> </div>
              <!-- logo end -->
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
              <!-- menu start -->
              <div class="menu_side">
                <div id="navbar_menu">
                  <ul class="first-ul">
                    <li> <a href="index.php">Beranda</a>

                    </li>

                    <li class="active" ><a>Profil</a>
                      <ul>
                      <li><a href="tentang_lambang.php">Lambang Nagari</a></li>
                      <li><a href="tentang_visimisi.php">Visi dan Misi</a></li>
                      <li><a href="tentang_struktur.php">Struktur Organisasi</a></li>
                      <li><a href="tentang_sejarahpemerintah.php">Sejarah</a></li>
                      <li><a href="tentang_peta.php">Peta Nagari</a></li>
                      
                      <li><a href="tentang_hukum.php">Produk Hukum</a></li>
                      <li><a href="tentang_prestasi.php">Prestasi Nagari</a></li>
                    <li><a href="tentang_pokek.php">Potensi Kekayaan Nagari</a></li>
                    </ul>

                  </li>


                  
                </li>
                
                <li> <a href="perantau.php">PERANTAU</a>
                </li>
                <li> <a href="">NAGARI TAGEH</a>
                 <ul>
                  <li><a href="wisata.php">Tageh Wisata</a></li>
                  <li><a href="">Tageh Ekonomi<small style="font-style: italic;" > Soon !</small></a></li>
                  <li><a href="t_kesehatan.php">Tageh Kesehatan<small style="font-style: italic;" > Soon !</small> </a></li>
                  <li><a href="t_pendidikan.php">Tageh Pendidikan<small style="font-style: italic;" > Soon !</small></a></li>
                  <li><a href="t_pangan.php">Tageh Pangan<small style="font-style: italic;" > Soon !</small></a></li>
                  <li><a href="t_keimanan.php">Tageh Keimanan<small style="font-style: italic;" > Soon !</small></a></li>
                  <li><a href="t_bundo.php">Tageh Bundokanduang<small style="font-style: italic;" > Soon !</small></a></li>

                  <li><a href="t_rangmudo.php">Tageh Rang Mudo<small style="font-style: italic;" > Soon !</small></a></li>
                  <li><a href="t_informasi.php">Tageh Informasi<small style="font-style: italic;" > Soon !</small></a></li>
                  <li><a href="t_bencana.php">Tageh Bencana<small style="font-style: italic;" > Soon !</small></a></li>
                  <li><a href="t_keamanan.php">Tageh Keamanan<small style="font-style: italic;" > Soon !</small></a></li>
                  <li><a href="tentang_hukum.php">Tageh Hukum</a></li>


                </ul>
              </li>
              <li> <a  href="kontak.php">KONTAK</a>

              </li>
            </ul>
          </div>
          <div class="search_icon">
            <ul>
              <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- menu end -->
      </div>
    </div>
  </div>
</div>
<!-- header bottom end -->
</header>
<!-- end header -->
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Prestasi Nagari</h1>
              <ol class="breadcrumb">
                
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 it_service_policy">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">

          <div class="col-md-12">
            <div class="full">    <!-- <p><table class="tg">
<thead>
  <tr>
    <th class="tg-0lax">No</th>
    <th class="tg-0lax">Nama Lomba</th>
    <th class="tg-0lax">Prestasi</th>
    <th class="tg-0lax">Piagam</th>
    <th class="tg-0lax">Tahun</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-baqh"><span style="color:#000">1</span></td>
    <td class="tg-nrw1"><span style="color:#000">TURNAMEN BOLA VOLI MINI ANTAR INSTANSI DAN NAGARI</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2018</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">2</span></td>
    <td class="tg-baqh"><span style="color:#000">PENGELOLA HUTAN DESA/NAGARI LOMBAWANA LESTARI</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA II</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT PROVINSI</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">3</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA PENYULUHAN KADER POSYANDU</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA III</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">4</span></td>
    <td class="tg-baqh"><span style="color:#000">PESERTA PELATIHAN KADER KESEHATAN LINGKUNGAN</span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">5</span></td>
    <td class="tg-baqh"><span style="color:#000">KEBERHASILAN DALAM PENCAPAIAN TARGET KINERJA DALAM PENERIMAAN PAJAK BUMI &amp; BANGUNAN SEBELUM TANGGAL 17 AGUSTUS</span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000"> </span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">6</span></td>
    <td class="tg-baqh"><span style="color:#000">KERJASAMA PENEMPATAN MAHASISWA KKN TEMATIK</span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000"> </span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">7</span></td>
    <td class="tg-baqh"><span style="color:#000">PENCAPAIAN PENERIMAAN PAJAK BUMI DAN BANGUNAN PEDESAAN DAN PERKOTAAN (PBB-P2)</span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000"> </span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">8</span></td>
    <td class="tg-baqh"><span style="color:#000">KERJASAMA DALAM MENYUKSESKAN KULIAH KERJA NYATA UNIVERSITA</span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000"> </span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">9</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA GIPI AWARD </span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT PROVINSI</span></td>
    <td class="tg-baqh"><span style="color:#000">2020</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">10</span></td>
    <td class="tg-baqh"><span style="color:#000">LEMBAGA PENGELOLA HUTAN DESA/NAGARI (HN/HD)</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA III</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT PROVINSI</span></td>
    <td class="tg-baqh"><span style="color:#000">2020</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">11</span></td>
    <td class="tg-baqh"><span style="color:#000">WEB-SEMINAR (WEBINER) KERJASAMA UNIVERSITAS ANDALAS MELALUI PUSAT PENGEMBANGAN NAGARI/NAGARI DEVELOPMENT CENTER (NDC) DENGAN INSTANSI SUMBAR DAN KANTOR STAF" KESIAPAN NAGARI/DESA MENUJU ERA NEW-NORMAL DALAM PANDEMI COVID-19</span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000"> </span></td>
    <td class="tg-baqh"><span style="color:#000">2020</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">12</span></td>
    <td class="tg-baqh"><span style="color:#000">KESUKSESAN DALAM PENYALURAN BANTUAN LANGSUNG TUNAI (BLT) DANA DESA</span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000"> </span></td>
    <td class="tg-baqh"><span style="color:#000">2020</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">13</span></td>
    <td class="tg-baqh"><span style="color:#000">PENILAIAN KOMPETENSI DAN TRANSPARASI DANA DESA</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA II</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT PROVINSI</span></td>
    <td class="tg-baqh"><span style="color:#000">2020</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">14</span></td>
    <td class="tg-baqh"><span style="color:#000">PENEMPATAN PESERTA DIDIK DALAM KEGIATAN ON JOB TRAINING/MAGANG KEJURUAN OTOMATISASI KELOLA PERKANTORAN</span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000"> </span></td>
    <td class="tg-baqh"><span style="color:#000">2020</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">15</span></td>
    <td class="tg-baqh"><span style="color:#000">SEBAGAI NARASUMBER DALAM WEB SEMINAR (WEBINAR)SERIES 6 KERJASAMA ANTARA KAWAL COVID-19 SUMBAR DENGAN NAGARI DEVELOPMENT CENTER (NDC) UNAND NAGARI DI SUMATERA BARAT DITENGAH WABAH COVID-19</span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000"> </span></td>
    <td class="tg-baqh"><span style="color:#000">2020</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">16</span></td>
    <td class="tg-baqh"><span style="color:#000">PENATAAN DESA SERTA TEKNIS PENETAPAN DAN PENEGASAN BATAS DESA/NAGARI</span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000"> </span></td>
    <td class="tg-baqh"><span style="color:#000">2021</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">17</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA NAGARI TAGEH RUMAH GADANG/KAMPUNG TANGGUH NUSANTARA</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT PROVINSI</span></td>
    <td class="tg-baqh"><span style="color:#000">2021</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">18</span></td>
    <td class="tg-baqh"><span style="color:#000">NAGARI DAN WALINAGARI TAGEH DI BIDANG HUKUM</span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000"> </span></td>
    <td class="tg-baqh"><span style="color:#000">2021</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">19</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA AK<?php echo $n_color ?>ITASI PERPUSTAKAAN</span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAA </span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT NASIONAL</span></td>
    <td class="tg-baqh"><span style="color:#000">2021</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">20</span></td>
    <td class="tg-baqh"><span style="color:#000">PEMBANGUNAN NAGARI BERBASIS KEUNGGULAN LOKAL</span></td>
    <td class="tg-baqh"><span style="color:#000">SERTIFIKAT PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000"> </span></td>
    <td class="tg-baqh"><span style="color:#000">2020</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">21</span></td>
    <td class="tg-baqh"><span style="color:#000">PROGRAM DOKTOR STUDI KEBIJAKAN FAKULTAS ILMU SOSIAL DAN ILMU POLITIK UNIVERSITAS ANDALAS</span></td>
    <td class="tg-baqh"><span style="color:#000">SERTIFIKAT PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000"> </span></td>
    <td class="tg-baqh"><span style="color:#000">2021</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">22</span></td>
    <td class="tg-baqh"><span style="color:#000">L0MBA BOLA KAKI TINGKAT ANAK-ANAK </span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA II</span></td>
    <td class="tg-baqh"><span style="color:#000"> </span></td>
    <td class="tg-baqh"><span style="color:#000">2020</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">23</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA SEPAK TAKRAW</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2020</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">24</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA NYANYI LAGU MINANG </span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KABUPATEN</span></td>
    <td class="tg-baqh"><span style="color:#000">2018</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">25</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA NYANYI LAGU MINANG </span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2017</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">26</span></td>
    <td class="tg-baqh"><span style="color:#000">PAAR</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KABUPATEN</span></td>
    <td class="tg-baqh"><span style="color:#000">2020</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">27</span></td>
    <td class="tg-baqh"><span style="color:#000">POSYANTEK</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KABUPATEN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">28</span></td>
    <td class="tg-baqh"><span style="color:#000">POSYANTEK</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA II</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT PRIVINSI</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">29</span></td>
    <td class="tg-baqh"><span style="color:#000">KATEGORI LPHN LOMBA WANA LESTARI</span></td>
    <td class="tg-baqh"><span style="color:#000">TERBAIK III</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT PROVINSI</span></td>
    <td class="tg-baqh"><span style="color:#000">2020</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">30</span></td>
    <td class="tg-baqh"><span style="color:#000">GERAKAN PKK DAN KATEGORI POKJA I (PAAR)</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KABUPATEN</span></td>
    <td class="tg-baqh"><span style="color:#000">2020</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">31</span></td>
    <td class="tg-baqh"><span style="color:#000">NAGARI TAGEH</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT POLRES BKT</span></td>
    <td class="tg-baqh"><span style="color:#000">2021</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">32</span></td>
    <td class="tg-baqh"><span style="color:#000">NAGARI TAGEH</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT POLDA SUMBAR</span></td>
    <td class="tg-baqh"><span style="color:#000">2021</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">33</span></td>
    <td class="tg-baqh"><span style="color:#000">PPKM</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT POLDA </span></td>
    <td class="tg-baqh"><span style="color:#000">2021</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">34</span></td>
    <td class="tg-baqh"><span style="color:#000">PROGRAM VAKSINASI TERBANYAK  NAGARI PASIA LAWEH OLEH BABINSA DAN KHAMTIBMAS</span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT POLDA</span></td>
    <td class="tg-baqh"><span style="color:#000">2021</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">35</span></td>
    <td class="tg-baqh"><span style="color:#000">GAPURA </span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA II</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">36</span></td>
    <td class="tg-baqh"><span style="color:#000">PAWAI ALEGORIS</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">37</span></td>
    <td class="tg-baqh"><span style="color:#000">TAKRAW</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA II</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">38</span></td>
    <td class="tg-baqh"><span style="color:#000">PIMPONG</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA III</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2020</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">39</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA KELOMPOK DASAWISMA BERPRESTASI OLEH DASAWISMA SYUKRA II</span></td>
    <td class="tg-baqh"><span style="color:#000">TERBAIK III</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KABUPATEN</span></td>
    <td class="tg-baqh"><span style="color:#000">2021</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">40</span></td>
    <td class="tg-baqh"><span style="color:#000">EKSPOSE DASAWISMA</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA II</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2018</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">41</span></td>
    <td class="tg-baqh"><span style="color:#000">IMPLEMENTASI TEKNOLOGI UNTUK MEWUJUDKAN KEMANDIRIAN NAGARI DAN PENGEMBANGAN UNAND MELALUI KKN-PPM 2019</span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM UCAPAN TERIMAKASIH</span></td>
    <td class="tg-baqh"><span style="color:#000"> </span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">42</span></td>
    <td class="tg-baqh"><span style="color:#000">VOLI TINGKAT SD</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KABUPATEN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">43</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA RANDAI</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT UMUM SE KOTA BUKITTINGGI</span></td>
    <td class="tg-baqh"><span style="color:#000">2017</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">44</span></td>
    <td class="tg-baqh"><span style="color:#000">PELATIHAN PENGKAJIAN KEBUTUHAN PASCA BENCANA (JITU PASNA)</span></td>
    <td class="tg-baqh"><span style="color:#000">PIAGAM PENGHARGAAN</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KABUPATEN</span></td>
    <td class="tg-baqh"><span style="color:#000">2021</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">45</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA PLSN 2N BIDANG NYANYI TINGKAT SD</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA II</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2017</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">46</span></td>
    <td class="tg-baqh"><span style="color:#000">PEMBUKAAN REKENING TERBANYAK </span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA II</span></td>
    <td class="tg-baqh"><span style="color:#000"> </span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">47</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA MELUKIS TINGKAT TK</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2018</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">48</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA MEWARNAI TINGKAT TK</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2018</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">49</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA MEMBACA DOA</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA II</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2018</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">50</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA KOLASE</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KABUPATEN</span></td>
    <td class="tg-baqh"><span style="color:#000">2018</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">51</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA KOLASE</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KABUPATEN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">52</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA MTQ TINGKAT SD</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA III</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">53</span></td>
    <td class="tg-baqh"><span style="color:#000">PENTAS RAMADHAN</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">54</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA PIANIKA</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA III</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2020</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">55</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA TARI</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA I</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">56</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA NYANYI SOLO</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA 1</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">57</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA PANTOMIM</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA II</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">58</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA TARI KREASI</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA II</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2018</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">59</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA NYANYI SOLO</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA II</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2018</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">60</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA PIANIKA</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA III</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">61</span></td>
    <td class="tg-baqh"><span style="color:#000">LOMBA OLIMPIADE SAINS</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA II</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
  <tr>
    <td class="tg-baqh"><span style="color:#000">62</span></td>
    <td class="tg-baqh"><span style="color:#000">VOLI PUTRA GUGUS II</span></td>
    <td class="tg-baqh"><span style="color:#000">JUARA III</span></td>
    <td class="tg-baqh"><span style="color:#000">TINGKAT KECAMATAN</span></td>
    <td class="tg-baqh"><span style="color:#000">2019</span></td>
  </tr>
</tbody>
</table>

      

              </p>-->
            </div>
          </div>

        </div>
      </div>
      <div class="col-md-3">
        <div class="side_bar">
          <div class="side_bar_blog">
          
            <div class="side_bar_search">
              <div class="input-group stylish-input-group">
                
                 </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->
  <!-- section -->

  <!-- end section -->
  <!-- section -->

  <!-- End Model search bar -->

  <!-- Bottom Navbar -->
  <nav style="background-color: <?php echo $n_color ?>; box-shadow: -5px -3px 5px -5px black; " class="navbar navbar-dark navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none p-0">
    <link rel="stylesheet" href=
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
  </link>
  <ul class="navbar-nav nav-justified w-100">
    <li class="nav-item">
      <a style="color: white;" href="index.php" class="nav-link text-center">
        <i style="font-size:large;" class="fa fa-home my-float"></i>
        <span class="small d-block">Beranda</span>
      </a>
    </li>
    <li class="nav-item">
      <a style="color: white;" href="berita1.php" class="nav-link text-center">
        <i style="font-size:large;" class="fas fa-newspaper my-float"></i>

        <span class="small d-block">Berita</span>
      </a>
    </li>
    <li class="nav-item dropup">
      <a style="color: white;" href="kontak.php" class="nav-link text-center" >

       <i style="font-size:large;" class="fas fa-headset my-float"></i>
       <span class="small d-block">Kontak</span>
     </a>
     <!-- Dropup menu for profile -->

   </li>
   <li class="nav-item dropup">
    <a style="color: white;" href="user/sign-in.php" class="nav-link text-center" >
     <i style="font-size:large;" class="fas fa-user  my-float"></i>
     <span class="small d-block">Log In</span>
   </a>
   <!-- Dropup menu for profile -->

 </li>
</ul>
</nav>


<!-- footer -->

<div class="footer">
 <div class="cprt">
  <p> © Copyrights 2021 Design by www.designxcafe.com</p>
</div>
<?php
     }
 ?>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="js/menumaker.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>

<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
</body>
</html>

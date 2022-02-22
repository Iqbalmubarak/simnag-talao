<?php

session_start();
require_once('db_connect.php');
require_once('library.php');


$sqlquery = "SELECT peng_message FROM pengumuman
WHERE peng_id=(SELECT max(peng_id) FROM pengumuman) ";
$result = $connection->query($sqlquery) or die($connection->error);
$sqlqueryresult = $connection ->query($sqlquery);


$sqlquery2 = "SELECT * FROM berita
ORDER BY b_id DESC LIMIT 3";
$result2 = $connection->query($sqlquery2) or die($connection->error);
$sqlqueryresult2 = $connection ->query($sqlquery2);

$sqlquery3 = "SELECT * FROM nagari
WHERE n_id='1'";
$result3 = $connection->query($sqlquery3) or die($connection->error);
$sqlqueryresult3 = $connection ->query($sqlquery3);

$sqlquery4 = "SELECT * FROM nagari
WHERE n_id='1'";
$result4 = $connection->query($sqlquery4) or die($connection->error);
$sqlqueryresult4 = $connection ->query($sqlquery4);


$sqlquery5 = "SELECT * FROM nagari
WHERE n_id='1'";
$result5 = $connection->query($sqlquery5) or die($connection->error);
$sqlqueryresult5 = $connection ->query($sqlquery5);

$sqlquery6 = "SELECT * FROM nagari
WHERE n_id='1'";
$result6 = $connection->query($sqlquery6) or die($connection->error);
$sqlqueryresult6 = $connection ->query($sqlquery6);

$sqlquery7 = "SELECT * FROM nagari
WHERE n_id='1'";
$result7 = $connection->query($sqlquery7) or die($connection->error);
$sqlqueryresult7 = $connection ->query($sqlquery7);


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
      $n_color = $key['n_color'];
  ?>
  <title> Nagari <?php echo $n_name ?></title>
   <?php
                                }
                                ?>
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
    <?php                           
    while ($key=$sqlqueryresult5 -> fetch_assoc()) {
     $n_kontak1 = $key['n_kontak1'];
  ?>
    <a  href="https://api.whatsapp.com/send?phone=<?php echo $key['n_kontak1']; ?>&text=Hello+%3A%0D%0AAlfin+%3A%0D%0A%0D%0AName<?php echo $key['n_kontak1']; ?>" class="float2" target="_blank"> Bantuan 
      <i class="fab fa-whatsapp my-float"></i>
    </a>
   <?php
                                }
                                ?>
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

    .container3 {
      position: relative;
      width: 100%;
      height: 100px;
      overflow: hidden;
      padding-top: 100%; /* 1:1 Aspect Ratio */
    }

    .responsive-iframe3 {
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      width: 100%;
      height: 100%;
      border: none;
    }
    .container4 {
      position: relative;
      width: 100%;
      height: 100px;
      overflow: hidden;
      padding-top: 100%; /* 1:1 Aspect Ratio */
    }

    .responsive-iframe4 {
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      width: 100%;
      height: 100%;
      border: none;
    }

    * {
      box-sizing: border-box;
    }

    .flex-container {
      display: flex;
      flex-wrap: wrap;
      font-size: 30px;
      text-align: center;
    }

    .flex-item-left {
      background-color:    #ffe6e6;
      padding: 10px;
      flex: 20%;
    }

    .flex-item-right {
      background-color:  #ff4d4d;
      padding: 10px;
      flex: 80%;
    }

    /* Responsive layout - makes a one column-layout instead of a two-column layout */
    @media (max-width: 800px) {
      .flex-item-right, .flex-item-left {
        flex: 100%;
      }
    }

    @media screen and (min-width: 15px) {
      marquee.p_text {
        font-size: 20px;
      }
    }

    @media screen and (max-width: 10px) {
      marquee.p_text  {
        font-size: 5px;
      }
    }

  </style>
  <body id="default_theme" class="it_service">
    <!-- loader -->
    <div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_4.png" alt="#" /></div>
    <!-- end loader -->
    <!-- header -->
    <header id="default_header header" class="header header_style_1">
      <!-- header top -->
      <div class="header_top">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="full">
                <div class="topbar-left">
                 <ul class="list-inline">
                  <?php                           
    while ($key=$sqlqueryresult4 -> fetch_assoc()) {
     $n_address = $key['n_address'];
     $n_email = $key['n_email'];
  ?>
                  <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight"><?php echo $n_address ?></span> </li>
                  <li> <span class="topbar-label"><i class="fas fa-envelope"></i></span> <span class="topbar-hightlight"><a href=""><?php echo $n_email ?></a></span> </li>
                  <?php
                                }
                                ?>
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
                  <li> <a class="active" href="index.php">Beranda</a>

                  </li>

                  <li><a href="">Profil</a>
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
            <li> <a href="kontak.php">KONTAK</a>

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
<!-- section -->
<div id="slider" class="section main_slider">
  <div class="container-fuild">
    <div class="row">
      <?php                           
    while ($key=$sqlqueryresult6 -> fetch_assoc()) {
     $n_name = $key['n_name'];
     $n_image1 = $key['n_image1'];
     $n_image2 = $key['n_image2'];
     $n_image3 = $key['n_image3'];
  ?>
      <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
          <ul>
            <li data-index="rs-1812" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/utama/<?php echo $n_image1 ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Smart Economy" data-description="">
              <!-- MAIN IMAGE -->
              <img src="images/utama/<?php echo $n_image1 ?>"  alt="#"  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
              <!-- LAYERS -->
              <!-- LAYER NR. BG -->
              <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
              id="slide-270-layer-1012" 
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
              data-width="full"
              data-height="full"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
              data-transform_out="s:300;s:300;" 
              data-start="750" 
              data-basealign="slide" 
              data-responsive_offset="on" 
              data-responsive="off"
              style="z-index: 5;background-color:<?php echo $n_color ?>;border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
              id="slide-18-layer-912" 
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
              data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
              data-width="500"
              data-height="140"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
              data-mask_in="x:0px;y:0px;" 
              data-mask_out="x:inherit;y:inherit;" 
              data-start="2000" 
              data-responsive_offset="on" 
              style="z-index: 5;background-color:<?php echo $n_color ?>;border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
              id="slide-18-layer-112" 
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
              data-fontsize="['70','70','70','35']"
              data-lineheight="['70','70','70','50']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
              data-start="1000" 
              data-splitin="chars" 
              data-splitout="none" 
              data-responsive_offset="on" 
              data-elementdelay="0.05" 
              style="z-index: 6; white-space: nowrap; text-transform: uppercase;"><?php echo $n_name ?></div>
              <!-- LAYER NR. 3 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
              id="slide-18-layer-412" 
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
              data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
              data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
              data-start="1500" 
              data-splitin="none" 
              data-splitout="none" 
              data-responsive_offset="on" 
              style="z-index: 7; white-space: nowrap;"><a style="font-weight: bold; font-size: 1.5vw; font-style: italic;">SMART ECONOMY</a></div>
            </li>
            <li data-index="rs-181" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/utama/<?php echo $n_image2 ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Smart Environment" data-description="">
              <!-- MAIN IMAGE -->
              <img src="images/utama/<?php echo $n_image2 ?>"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
              <!-- LAYERS -->
              <!-- LAYER NR. BG -->
              <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
              id="slide-270-layer-101" 
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
              data-width="full"
              data-height="full"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
              data-transform_out="s:300;s:300;" 
              data-start="750" 
              data-basealign="slide" 
              data-responsive_offset="on" 
              data-responsive="off"
              style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
              id="slide-18-layer-91" 
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
              data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
              data-width="500"
              data-height="140"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
              data-mask_in="x:0px;y:0px;" 
              data-mask_out="x:inherit;y:inherit;" 
              data-start="2000" 
              data-responsive_offset="on" 
              style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
              id="slide-18-layer-11" 
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
              data-fontsize="['70','70','70','35']"
              data-lineheight="['70','70','70','50']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
              data-start="1000" 
              data-splitin="chars" 
              data-splitout="none" 
              data-responsive_offset="on" 
              data-elementdelay="0.05" 
              style="z-index: 6; white-space: nowrap; text-transform: uppercase;" ><?php echo $n_name ?></div>
              <!-- LAYER NR. 3 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
              id="slide-18-layer-41" 
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
              data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
              data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
              data-start="1500" 
              data-splitin="none" 
              data-splitout="none" 
              data-responsive_offset="on" 
              style="z-index: 7; white-space: nowrap;"><a style="font-weight: bold; font-size: 1.5vw; font-style: italic;">SMART ENVIRONMENT</a></div>
            </li>
            <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/utama/<?php echo $n_image3 ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Smart Society" data-description="">
              <!-- MAIN IMAGE -->
              <img src="images/utama/<?php echo $n_image3 ?>"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
              <!-- LAYERS -->
              <!-- LAYER NR. BG -->
              <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
              id="slide-270-layer-10" 
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
              data-width="full"
              data-height="full"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
              data-transform_out="s:300;s:300;" 
              data-start="750" 
              data-basealign="slide" 
              data-responsive_offset="on" 
              data-responsive="off"
              style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
              id="slide-18-layer-9" 
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
              data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
              data-width="500"
              data-height="140"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
              data-mask_in="x:0px;y:0px;" 
              data-mask_out="x:inherit;y:inherit;" 
              data-start="2000" 
              data-responsive_offset="on" 
              style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
              id="slide-18-layer-1" 
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
              data-fontsize="['70','70','70','35']"
              data-lineheight="['70','70','70','50']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
              data-start="1000" 
              data-splitin="chars" 
              data-splitout="none" 
              data-responsive_offset="on" 
              data-elementdelay="0.05" 
              style="z-index: 6; white-space: nowrap; text-transform: uppercase;"><?php echo $n_name ?></div>
              <!-- LAYER NR. 3 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
              id="slide-18-layer-4" 
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
              data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
              data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
              data-start="1500" 
              data-splitin="none" 
              data-splitout="none" 
              data-responsive_offset="on" 
              style="z-index: 7; white-space: nowrap;"><a style="font-weight: bold; font-size: 1.5vw; font-style: italic;">SMART SOCIETY</a></div>
            </li>

          </ul>
          <div class="tp-static-layers"></div>
           <?php
                                }
                                ?>
        </div>
      </div>
    </div>
  </div>
  <div class="flex-container">
    <div class="flex-item-left" style="font-size: 20px; font-weight:bold;">PENGUMUMAN !</div>
    <div class="flex-item-right"><marquee class="p_text" style=" color: white;" direction="left"><?php                           
    while ($key=$sqlqueryresult -> fetch_assoc()) {
      $peng_message = $key['peng_message'];
      ?>


      <?php echo $peng_message ?>



      <?php
    }
    ?>
  </marquee></div>
</div>
</div>

<!-- end section -->
<!-- section -->
<div class="section padding_layout_1">


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="text_align_center">

            <h2></h2>

          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Selamat datang</h2>
            <p class="large">Website Resmi Nagari <?php echo $n_name ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <?php
      while ($row = $result2 ->fetch_assoc())
      {
        ?>

        <div class="col-md-4">
          <div class="full blog_colum">
            <div class="blog_feature_img"> <img style="height:360px;" src="user/wisata/berita_img/<?php echo $row['b_image']; ?>" alt="#" /> </div>
            <div class="post_time">
              <p><i class="fa fa-clock-o"></i> <?php echo $row['b_date']; ?></p>
            </div>
            <div class="blog_feature_head">
              <h4><?php echo $row['b_title']; ?></h4>
            </div>
            <div class="blog_feature_cont">
              <p><?php echo substr($row['b_message'],0,100); ?><a href="berita2.php?b_id=<?php echo $row['b_id']; ?>" style="font-weight:bold; font-style:italic;"> more</a></p>
            </div>
          </div>
          </div> <?php
        }
        ?>
        
        <div class="center"><a style="background-color: <?php echo $n_color ?>;" class="btn main_bt" href="berita1.php">BERITA LAINNYA <i class="fas fa-caret-right"></i></a></div>
      </div>
    </div>


    
  </div>

</div>
</div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1 light_silver gross_layout">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>PROFIL NAGARI</h2>
            <p class="large">Berikut adalah profil penduduk di dalam nagari.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <style>
          .pie-chart {
            background:
            radial-gradient(
              circle closest-side,
              transparent 61%,
              white 0
              ),
            conic-gradient(
              #4e79a7 0,
              #4e79a7 62.3%,
              #f28e2c 0,
              #f28e2c 100%
              );
            position: relative;
            width: 400px;
            min-height: 250px;
            margin: 20px;
            border-radius: 25px;
            outline: 1px solid #ccc;
          }
          .pie-chart h2 {
            position: absolute;
            margin: 1rem;
          }
          .pie-chart cite {
            position: absolute;
            bottom: 0;
            font-size: 80%;
            padding: 1rem;
            color: gray;
          }
          .pie-chart figcaption {
            position: absolute;
            bottom: 1em;
            right: 1em;
            font-size: smaller;
            text-align: right;
          }
          .pie-chart span:after {
            display: inline-block;
            content: "";
            width: 0.8em;
            height: 0.8em;
            margin-left: 0.4em;
            height: 0.8em;
            border-radius: 0.2em;
            background: currentColor;
          }

          .pie-chart2 {
            background:
            radial-gradient(
              circle closest-side,
              transparent 61%,
              white 0
              ),
            conic-gradient(
              #4e79a7 0,
              #4e79a7 10.8%,
              #f28e2c 0,
              #f28e2c 37.7%,
              #e15759 0,
              #e15759 86.1%,
              #76b7b2 0,
              #76b7b2 96.9%,
              #59a14f 0,
              #59a14f 100%
              );
            position: relative;
            width: 400px;
            min-height: 250px;
            margin: 20px;
            border-radius: 25px;
            outline: 1px solid #ccc;
          }
          .pie-chart2 cite {
            position: absolute;
            bottom: 0;
            font-size: 80%;
            padding: 1rem;
            color: gray;
          }
          .pie-chart2 figcaption {
            position: absolute;
            bottom: 1em;
            right: 1em;
            font-size: smaller;
            text-align: right;
          }
          .pie-chart2 span:after {
            display: inline-block;
            content: "";
            width: 0.8em;
            height: 0.8em;
            margin-left: 0.4em;
            height: 0.8em;
            border-radius: 0.2em;
            background: currentColor;
          }

          .pie-chart3 {
            background:
            radial-gradient(
              circle closest-side,
              transparent 61%,
              white 0
              ),
            conic-gradient(
              #4e79a7 0,
              #4e79a7 34.8%,
              #f28e2c 0,
              #f28e2c 70.6%,
              #e15759 0,
              #e15759 77%,
              #76b7b2 0,
              #76b7b2 100%
              );
            position: relative;
            width: 400px;
            min-height: 250px;
            margin: 20px;
            border-radius: 25px;
            outline: 1px solid #ccc;
          }
          .pie-chart3 cite {
            position: absolute;
            bottom: 0;
            font-size: 80%;
            padding: 1rem;
            color: gray;
          }
          .pie-chart3 figcaption {
            position: absolute;
            bottom: 1em;
            right: 1em;
            font-size: smaller;
            text-align: right;
          }
          .pie-chart3 span:after {
            display: inline-block;
            content: "";
            width: 0.8em;
            height: 0.8em;
            margin-left: 0.4em;
            height: 0.8em;
            border-radius: 0.5em;
            background: currentColor;
          }
        </style>
        <div class="container3"> 
          <iframe style="margin: ;
          width: 100%;
          border: 3px solid <?php echo $n_color ?>;
          padding: 10px;
          height: 680px;"class="responsive-iframe3" src="user/a_profilnagari2.php"></iframe>
        </div>


      </div>

    </div>

  </div>
  <div class="center"><a style="background-color: <?php echo $n_color ?>;" class="btn main_bt" href="user/a_profilnagari2.php">LEBIH LENGKAP <i class="fas fa-caret-right"></i></a></div>
</div>
</div>
<!-- end section -->
<!-- section -->



<!-- end section -->
<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
           
          </div>
        </div>
      </div>
    </div>

     <div class="row">
      <div class="col-md-4">
        <div class="full">
          <div class="service_blog_inner">
            <div class="icon text_align_left"><img src="images/it_service/si1.png" alt="#" /></div>
            <h4 class="service-heading text_align_cente">MASYARAKAT CERDAS</h4>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="full">
          <div class="service_blog_inner">
            <div class="icon text_align_left"><img src="images/it_service/si2.png" alt="#" /></div>
            <h4 class="service-heading text_align_cente">LINGKUNGAN CERDAS</h4>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="full">
          <div class="service_blog_inner">
            <div class="icon text_align_left"><img src="images/it_service/si3.png" alt="#" /></div>
            <h4 class="service-heading text_align_cente">EKONOMI CERDAS</h4>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
          </div>
        </div>
      </div>
    </div>  
  </div>
    






  </div>

  <!-- end section -->
  <!-- section -->
  <div class="section padding_layout_1 testmonial_section white_fonts">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="main_heading text_align_left">
              <h2 style="text-transform: none;">SIMNag Mobile Soon !</h2>
              <p class="large">Download Aplikasi Sistem Informasi Nagari.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-7">
          <div class="full">
            <div id="testimonial_slider" style="display: none;" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
                <li data-target="#testimonial_slider" data-slide-to="1"></li>
                <li data-target="#testimonial_slider" data-slide-to="2"></li>
              </ul>
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="testimonial-container">
                    <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                    I am really satisfied with my first laptop service. </div>
                    <div class="testimonial-photo"> <img src="images/it_service/client1.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                    <div class="testimonial-meta">
                      <h4>Maria Anderson</h4>
                      <span class="testimonial-position">CFO, Tech NY</span> </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="testimonial-container">
                      <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                      I am really satisfied with my first laptop service. </div>
                      <div class="testimonial-photo"> <img src="images/it_service/client2.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                      <div class="testimonial-meta">
                        <h4>Maria Anderson</h4>
                        <span class="testimonial-position">CFO, Tech NY</span> </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="testimonial-container">
                        <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                        I am really satisfied with my first laptop service. </div>
                        <div class="testimonial-photo"> <img src="images/it_service/client3.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                        <div class="testimonial-meta">
                          <h4>Maria Anderson</h4>
                          <span class="testimonial-position">CFO, Tech NY</span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="full"> </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end section -->
        <!-- section -->
        <div class="section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="full">
                  <div class="contact_us_section">
                    <div class="call_icon"> <img src="images/it_service/phone_icon.png" alt="#" /> </div>
                    <div class="inner_cont">
                      <h2>SIMNag App</h2>
                      <p>Sekarang anda sudah bisa akses SIMNag melalui aplikasi.</p>
                    </div>
                    <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="">SOON !</a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end section -->
        <!-- section -->
        <div class="section padding_layout_1" style="padding: 50px 0;">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="full">

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end section -->
        <!-- Modal -->
        <div class="modal fade" id="search_bar" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
                    <div class="navbar-search">
                      <form action="#" method="get" id="search-global-form" class="search-global">
                        <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                        <button class="search-global__btn"><i class="fa fa-search"></i></button>
                        <div class="search-global__note">Begin typing your search above and press return to search.</div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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



   <!-- End Model search bar -->
   <!-- footer -->
   <div class="footer">
     <div class="cprt">
      <p> © Copyrights 2021 Design by www.designxcafe.com</p>
    </div>
  </div>
  <!-- end footer -->
  <!-- js section -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- menu js -->
  <script src="js/menumaker.js"></script>
  <!-- wow animation -->
  <script src="js/wow.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- revolution js files -->
  <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
  <!-- map js -->

  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
  <!-- end google map js -->
</body>
</html>

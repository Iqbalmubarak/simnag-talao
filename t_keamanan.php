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
                
                <li ><a>Profil</a>
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
            <li class="active" > <a href="">NAGARI TAGEH</a>
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
              <h1 class="page-title">TAGEH KEAMANAN</h1>
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


<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row" style="margin-bottom: 0px;">
          <div class="col-md-12">
            <div class="full margin_bottom_30">
              <div class="accordion border_circle">
                <div class="bs-example">
                  <div class="panel-group" id="accordion" style="margin-top:;">
                    <div class="panel panel-default">
                      <h3>Tentang TAGEH Keamanan</h3>
                     <img style="width: 800px; height:auto;" class="margin_bottom_30_all" src="images/it_service/tageh/tageh9.jpg" alt="#">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in nibh risus. Quisque facilisis velit vestibulum arcu scelerisque egestas. Sed a fringilla erat, at egestas massa. Vivamus vulputate elementum est, vel bibendum mauris molestie vitae. Quisque vitae neque condimentum, dapibus arcu ut, porttitor diam. Quisque elementum porttitor lacus non pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent tellus eros, placerat vel lacus cursus, auctor interdum tortor. Vivamus imperdiet at turpis mollis mattis. Praesent non turpis elit. Ut malesuada fermentum dignissim. Suspendisse mattis interdum quam et auctor. Cras mattis nisl quis felis feugiat iaculis.<br><br>

Donec sollicitudin quis elit a interdum. Sed egestas orci non mattis ornare. Phasellus sit amet dolor sed eros posuere lacinia quis at mi. Duis non sodales velit. Maecenas mauris ligula, porttitor ac vestibulum non, suscipit vitae dui. Quisque hendrerit orci vitae nulla dignissim, in accumsan tellus porta. Sed molestie eu elit sit amet ornare. Sed ornare eros sed eros varius, vel ultricies lectus imperdiet. Duis eu euismod nunc. Nullam et ultrices ante, non luctus dolor. Cras ut ultricies urna.<br><br>

Aliquam cursus tempus erat, et scelerisque massa pretium facilisis. Sed vulputate nulla eros, sit amet pulvinar nibh mollis sed. Aliquam et risus at velit tempor posuere eget vitae neque. Vivamus eu ante cursus, tincidunt erat quis, pretium lacus. Donec sodales laoreet commodo. Cras ultrices elementum facilisis. Vestibulum sit amet enim mi. In vitae tellus in urna blandit pulvinar at sed nibh. Phasellus dapibus condimentum posuere. Donec vitae nibh sed metus convallis scelerisque quis eget elit. Curabitur posuere dignissim metus, aliquam porta purus consequat a.<br><br></p>
                        
                      </div>
                      

                    </div>

                  </div>
                </div>
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
</div>
<?php
     }
 ?>
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

<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
</body>
</html>

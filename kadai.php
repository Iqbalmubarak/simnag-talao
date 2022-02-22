<?php

session_start();
require_once('db_connect.php');
require_once('library.php');

if(isset($_SESSION["un"]))
  unset($_SESSION["un"]);
  
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
  <title>Nagari Kamang Mudiak</title>
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
<a  href="https://api.whatsapp.com/send?phone=&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float2" target="_blank">Bantuan 
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
                <ul class="list-inline">
                    <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">Kamang Mudiak, Agam Regency, West Sumatra 26152</span> </li>
                  <li> <span class="topbar-label"><i class="fas fa-envelope"></i></span> <span class="topbar-hightlight"><a href="">kamangmudiak.nagari002@gmail.com</a></span> </li>
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
                
                <li><a href="">Profil</a>
                 <ul>
                    <li><a href="tentang_lambang.php">Lambang Nagari</a></li>
                    <li><a href="tentang_visimisi.php">Visi dan Misi</a></li>
                    <li><a href="tentang_struktur.php">Struktur Organisasi</a></li>
                    <li><a href="tentang_sejarahpemerintah.php">Sejarah</a></li>
                    <li><a href="tentang_peta.php">Peta Nagari</a></li>
                                      
                    <li><a href="tentang_hukum.php">Produk Hukum</a></li>
                    <li><a href="tentang_prestasi.php">Prestasi Nagari<small style="font-style: italic;" > Soon !</small></a></li>
                    <li><a href="">Potensi Kekayaan Nagari<small style="font-style: italic;" > Soon !</small></a></li>
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
                <h1 class="page-title">Tageh Eknonomi</h1>
                <ol class="breadcrumb">
                  <li><a href="index.php">Beranda</a></li>
                  <li class="active">Tageh Ekonomi</li>
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
  <div class="section padding_layout_1 product_list_main">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row">

            <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
              <div class="product_list">
                <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/kedai_1.jpg" alt=""> </div>
                <div class="product_detail_btm">
                  <div class="center">
                    <h4><a href="it_shop_detail.php">Resto Kesukaan Mama</a></h4>
                  </div>
                  <div class="starratin">
                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  </div>
                  <div class="product_price">
                    <p><span class="">Menu makanan kesukaan mama dengan resepi turun menurun berbasis restoran online. Ada banyak macam menu makanan yang bisa kamu coba. Ayo pesan sekarang !</span><br> <a class="btn sqaure_bt" href="kadai2.php">Lihat</a></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
              <div class="product_list">
                <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/kedai_2.jpg" alt=""> </div>
                <div class="product_detail_btm">
                  <div class="center">
                    <h4><a href="it_shop_detail.php">Warung Hj Maemunah</a></h4>
                  </div>
                  <div class="starratin">
                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  </div>
                  <div class="product_price">
                    <p><span class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus lacus ut tortor rutrum, sed venenatis quam rhoncus. Ut bibendum placerat ante at faucibus.</span><br> <a class="btn sqaure_bt" href="">Lihat</a></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
              <div class="product_list">
                <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/kedai_3.jpg" alt=""> </div>
                <div class="product_detail_btm">
                  <div class="center">
                    <h4><a href="it_shop_detail.php">Burger Anywayy</a></h4>
                  </div>
                  <div class="starratin">
                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  </div>
                  <div class="product_price">
                    <p><span class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus lacus ut tortor rutrum, sed venenatis quam rhoncus. Ut bibendum placerat ante at faucibus.</span><br> <a class="btn sqaure_bt" href="">Lihat</a></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
              <div class="product_list">
                <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/kedai_4.png" alt=""> </div>
                <div class="product_detail_btm">
                  <div class="center">
                    <h4><a href="it_shop_detail.php">Bumbu Mama</a></h4>
                  </div>
                  <div class="starratin">
                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  </div>
                  <div class="product_price">
                    <p><span class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus lacus ut tortor rutrum, sed venenatis quam rhoncus. Ut bibendum placerat ante at faucibus.</span><br> <a class="btn sqaure_bt" href="">Lihat</a></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
              <div class="product_list">
                <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/kedai_5.png" alt=""> </div>
                <div class="product_detail_btm">
                  <div class="center">
                    <h4><a href="it_shop_detail.php">Ada Kuliner</a></h4>
                  </div>
                  <div class="starratin">
                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  </div>
                  <div class="product_price">
                    <p><span class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus lacus ut tortor rutrum, sed venenatis quam rhoncus. Ut bibendum placerat ante at faucibus.</span><br> <a class="btn sqaure_bt" href="">Lihat</a></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
              <div class="product_list">
                <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/kedai_6.jpg" alt=""> </div>
                <div class="product_detail_btm">
                  <div class="center">
                    <h4><a href="it_shop_detail.php">Mie Pangsit Ayam Kribo</a></h4>
                  </div>
                  <div class="starratin">
                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  </div>
                  <div class="product_price">
                    <p><span class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus lacus ut tortor rutrum, sed venenatis quam rhoncus. Ut bibendum placerat ante at faucibus.</span><br> <a class="btn sqaure_bt" href="">Lihat</a></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
              <div class="product_list">
                <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/kedai_7.png" alt=""> </div>
                <div class="product_detail_btm">
                  <div class="center">
                    <h4><a href="it_shop_detail.php">Mie Pedas Amanah</a></h4>
                  </div>
                  <div class="starratin">
                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  </div>
                  <div class="product_price">
                    <p><span class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus lacus ut tortor rutrum, sed venenatis quam rhoncus. Ut bibendum placerat ante at faucibus.</span><br> <a class="btn sqaure_bt" href="">Lihat</a></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
              <div class="product_list">
                <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/kedai_8.jpg" alt=""> </div>
                <div class="product_detail_btm">
                  <div class="center">
                    <h4><a href="it_shop_detail.php">Kedai Kopi 666</a></h4>
                  </div>
                  <div class="starratin">
                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  </div>
                  <div class="product_price">
                    <p><span class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus lacus ut tortor rutrum, sed venenatis quam rhoncus. Ut bibendum placerat ante at faucibus.</span><br> <a class="btn sqaure_bt" href="">Lihat</a></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
              <div class="product_list">
                <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/kedai_9.png" alt=""> </div>
                <div class="product_detail_btm">
                  <div class="center">
                    <h4><a href="it_shop_detail.php">Sudut Santap</a></h4>
                  </div>
                  <div class="starratin">
                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  </div>
                  <div class="product_price">
                    <p><span class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus lacus ut tortor rutrum, sed venenatis quam rhoncus. Ut bibendum placerat ante at faucibus.</span><br> <a class="btn sqaure_bt" href="">Lihat</a></p>
                  </div>
                </div>
              </div>
            </div>

            
          </div>
        </div>
        <div class="col-md-3">
          <div class="side_bar">
            <div class="side_bar_blog">
              <h4>SEARCH</h4>
              <div class="side_bar_search">
                <div class="input-group stylish-input-group">
                  <input class="form-control" placeholder="Search" type="text">
                  <span class="input-group-addon">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span> </div>
                </div>
              </div>
              <div class="side_bar_blog">
                <h4>Mau di iklankan ?</h4>
                <p>Jika anda adalah penduduk asli Nagari Kamang Mudiak, anda bisa mengiklankan semua jenis produk di website ini</p>
                <a class="btn sqaure_bt" href="it_service.php">Daftar</a> </div>
                <div class="side_bar_blog">
                 
                  
                </div>
                <div class="side_bar_blog">
                 
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end section -->
      
          
            
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

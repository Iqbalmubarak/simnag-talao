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
<!-- zoom effect -->
<link rel='stylesheet' href='css/hizoom.css'>
<!-- end zoom effect -->
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
<body id="default_theme" class="it_shop_detail">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
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
                    <li><a href="kegiatan.php" style="font-weight:bold; color: <?php echo $n_color ?>;">Kegiatan</a></li>                   
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
              <h1 class="page-title">Detil Kadai</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Beranda</a></li>
                <li><a a href="kadai.php">Kadai</a></li>
                <li class="active">Detil Kadai</li>
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
<div class="section padding_layout_1 product_detail">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="product_detail_feature_img hizoom hi2">
              <div class='hizoom hi2'> <img src="images/it_service/kadai/kedai_1.jpg" alt="#" /> </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
            <div class="product-heading">
              <h2>Kesukaan Mama Resto</h2>
            </div>
            <div class="product-detail-side"> <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="review">(5 customer review)</span> </div>
            <div class="detail-contant">
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. 
                Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<br><br>
                <span class="stock" style="font-weight:bold;" >Opening Hour : <br> ( Senin - Jumat | 7:00 - 16:00 )</span> </p>
              
            </div>
            <div class="share-post"> <a href="#" class="share-text">Share</a>
              <ul class="social_icons">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="tab_bar_section">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Description</a> </li>
                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Reviews (2)</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="description" class="tab-pane active">
                    <div class="product_desc">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum elit. Morbi eu arcu ipsum. Aliquam lobortis accumsan quam ac convallis. 
                        Fusce elit mauris, aliquet at odio vel, convallis vehicula nisi. Morbi vitae porttitor dolor. Integer eget metus sem. Nam venenatis mauris vel leo pulvinar, 
                        id rutrum dui varius. Nunc ac varius quam, non convallis magna. Donec suscipit commodo dapibus.<br>
                        <br>
                        Vestibulum et ullamcorper ligula. Morbi bibendum tempor rutrum. 
                        Pelle tesque auctor purus id molestie ornare.Donec eu lobortis risus. Pellentesque sed aliquam lorem. Praesent pulvinar lorem vel mauris ultrices posuere. 
                        Phasellus elit ex, gravida a semper ut, venenatis vitae diam. Nullam eget leo massa. Aenean eu consequat arcu, vitae scelerisque quam. Suspendisse risus turpis, 
                        pharetra a finibus vitae, lobortis et mi.</p>
                    </div>
                  </div>
                  <div id="reviews" class="tab-pane fade">
                    <div class="product_review">
                      <h3>Reviews (2)</h3>
                      <div class="commant-text row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                          <div class="profile"> <img class="img-responsive" src="images/it_service/client1.png" alt="#"> </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8">
                          <h5>David</h5>
                          <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                          <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                          <p class="msg">ThisThis book is a treatise on the theory of ethics, very popular during the Renaissance. 
                            The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet.. </p>
                        </div>
                      </div>
                      <div class="commant-text row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                          <div class="profile"> <img class="img-responsive" src="images/it_service/client2.png" alt="#"> </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8">
                          <h5>Jack</h5>
                          <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                          <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                          <p class="msg">Nunc augue purus, posuere in accumsan sodales ac, euismod at est. Nunc faccumsan ermentum consectetur metus placerat mattis. Praesent mollis justo felis, accumsan faucibus mi maximus et. Nam hendrerit mauris id scelerisque placerat. Nam vitae imperdiet turpis</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="full review_bt_section">
                            <div class="float-right"> <a class="btn sqaure_bt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Leave a Review</a> </div>
                          </div>
                          <div class="full">
                            <div id="collapseExample" class="full collapse commant_box">
                              <form accept-charset="UTF-8" action="index.php" method="post">
                                <input id="ratings-hidden" name="rating" type="hidden">
                                <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." requi<?php echo $n_color ?>=""></textarea>
                                <div class="full_bt center">
                                  <button class="btn sqaure_bt" type="submit">Save</button>
                                </div>
                              </form>
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
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="main_heading text_align_left" style="margin-bottom: 30px;">
                <h3>Produk yang dijual</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-8 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/menu_4.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.php">Pempek Lembang</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p> <span class="new_price">Rp25.000</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-8 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/menu_2.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.php">Gado-gado</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="new_price">Rp25.000</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-8 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/menu_3.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.php">Bakso Urat</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="new_price"> Rp12.490</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-8 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/menu_5.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.php">Bakso Urat</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="new_price"> Rp12.490</span></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-8 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/menu_6.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.php">Bakso Urat</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="new_price"> Rp12.490</span></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-8 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/menu_7.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.php">Bakso Urat</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="new_price"> Rp12.490</span></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-8 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/menu_8.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.php">Bakso Urat</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="new_price"> Rp12.490</span></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-8 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/kadai/menu_9.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.php">Bakso Urat</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="new_price"> Rp12.490</span></p>
                </div>
              </div>
            </div>
          </div>

           

            

        </div>
      </div>
      
    </div>
    <div class="contact_us_section">
            <div class="call_icon"> <img src="images/it_service/phone_icon.png" alt="#" /> </div>
            <div class="inner_cont">
              <h2>Pesan di sini</h2>
              <p>Yuk, hubungi admin kami di talian di sini.</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202.">PESAN !</a> </div>
          </div>
  </div>

</div>
<!-- end section -->
<!-- section -->


        
        
<!-- end section -->
<!-- section -->

<!-- end section -->
<!-- section -->

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
<!-- End Model search bar -->
<!-- footer -->
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
<!-- zoom effect -->
<script src='js/hizoom.js'></script>
<script>
        $('.hi1').hiZoom({
            width: 300,
            position: 'right'
        });
        $('.hi2').hiZoom({
            width: 400,
            position: 'right'
        });
    </script>
</body>
</html>

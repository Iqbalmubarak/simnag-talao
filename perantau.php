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

              <li class="active"> <a href="perantau.php">PERANTAU</a>
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
              <h1 class="page-title">HALAMAN PERANTAU</h1>
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
<!-- section -->
<div class="section padding_layout_1 it_service_policy">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">

          <div class="col-md-12">
            <div class="full">
             <h3>Para Perantauan</h3>
             <img class="margin_bottom_30_all" src="images/it_service/perantau2.jpg" alt="#">
             <p>Sejak pada zaman dahulu, orang Minang memiliki jiwa dagang dan semangat merantau. Dua hal ini sulit dipisahkan dan telah melekat dalam diri serta jiwa masyarakat Minangkabau.<br><br>

              Banyaknya perantau Minang yang sukses menimbulkan banyak pertanyaan, apa kunci membuat orang Minang mampu bertahan diperantauan. Apakah nasib yang memaksa atau kesuksesan yang mudah dicapai?<br><br>

              Berdasarkan catatan sejarah dan pengalaman para perantau Minang dari beberapa daerah mereka mampu bertahan karena bisa menempatkan diri dan selalu berpedoman pada falsafah “Dima bumi dipijak, disitu langik dijunjuang”.<br><br>

              Bahkan tak jarang, perantau Minang gampang sekali untuk mendapatkan kepercayaan karena mampu beradaptasi dan bergaul.<br><br></p>
              <div class="container3"> 
                <iframe style="margin: ;
                width: 100%;
                border: 3px solid <?php echo $n_color ?>;
                padding: 10px;
                height: 780px;"class="responsive-iframe3" src="datagrafik_perantau.php"></iframe>

              </div><br>






            </p>
          </div>
        </div>

      </div>
    </div><div class="col-md-3">
      <div class="side_bar">
        <div class="side_bar_blog">
          <h4>DAFTAR PERANTAU</h4>
          <div class="side_bar_search">
            <div class="panel-body">
              <p><div class="form_section">
                <form class="form_contant" action="perantau_add_pro.php" method="POST" name="form1" onsubmit="return validation()">
                  <fieldset>
                    <div class="row">
                      <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input class="field_custom" placeholder="Nama Lengkap" name="per_name" id="per_name" type="text" requigreen />
                      </div>
                      <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input class="field_custom" placeholder="NIK/Paspor" name="per_nik" id="per_nik" type="text" requigreen />
                      </div>
                      <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input class="field_custom" placeholder="No. HP / Whatsapp" name="per_wa" id="per_wa" type="text" requigreen />
                      </div>
                     
                      <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h6>Merantau di ( Negara ) :</h6>
                        <select class="form-control show-tick ms select2 " data-placeholder="Select" name="per_country" id="per_country">
                          <option value="Indonesia">Lainnya</option>
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Åland Islands">Åland Islands</option>
                          <option value="Albania">Albania</option>
                          <option value="Algeria">Algeria</option>
                          <option value="American Samoa">American Samoa</option>
                          <option value="Andorra">Andorra</option>
                          <option value="Angola">Angola</option>
                          <option value="Anguilla">Anguilla</option>
                          <option value="Antarctica">Antarctica</option>
                          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Armenia">Armenia</option>
                          <option value="Aruba">Aruba</option>
                          <option value="Australia">Australia</option>
                          <option value="Austria">Austria</option>
                          <option value="Azerbaijan">Azerbaijan</option>
                          <option value="Bahamas">Bahamas</option>
                          <option value="Bahrain">Bahrain</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Barbados">Barbados</option>
                          <option value="Belarus">Belarus</option>
                          <option value="Belgium">Belgium</option>
                          <option value="Belize">Belize</option>
                          <option value="Benin">Benin</option>
                          <option value="Bermuda">Bermuda</option>
                          <option value="Bhutan">Bhutan</option>
                          <option value="Bolivia">Bolivia</option>
                          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                          <option value="Botswana">Botswana</option>
                          <option value="Bouvet Island">Bouvet Island</option>
                          <option value="Brazil">Brazil</option>
                          <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                          <option value="Brunei Darussalam">Brunei Darussalam</option>
                          <option value="Bulgaria">Bulgaria</option>
                          <option value="Burkina Faso">Burkina Faso</option>
                          <option value="Burundi">Burundi</option>
                          <option value="Cambodia">Cambodia</option>
                          <option value="Cameroon">Cameroon</option>
                          <option value="Canada">Canada</option>
                          <option value="Cape Verde">Cape Verde</option>
                          <option value="Cayman Islands">Cayman Islands</option>
                          <option value="Central African Republic">Central African Republic</option>
                          <option value="Chad">Chad</option>
                          <option value="Chile">Chile</option>
                          <option value="China">China</option>
                          <option value="Christmas Island">Christmas Island</option>
                          <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                          <option value="Colombia">Colombia</option>
                          <option value="Comoros">Comoros</option>
                          <option value="Congo">Congo</option>
                          <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                          <option value="Cook Islands">Cook Islands</option>
                          <option value="Costa Rica">Costa Rica</option>
                          <option value="Cote D'ivoire">Cote D'ivoire</option>
                          <option value="Croatia">Croatia</option>
                          <option value="Cuba">Cuba</option>
                          <option value="Cyprus">Cyprus</option>
                          <option value="Czech Republic">Czech Republic</option>
                          <option value="Denmark">Denmark</option>
                          <option value="Djibouti">Djibouti</option>
                          <option value="Dominica">Dominica</option>
                          <option value="Dominican Republic">Dominican Republic</option>
                          <option value="Ecuador">Ecuador</option>
                          <option value="Egypt">Egypt</option>
                          <option value="El Salvador">El Salvador</option>
                          <option value="Equatorial Guinea">Equatorial Guinea</option>
                          <option value="Eritrea">Eritrea</option>
                          <option value="Estonia">Estonia</option>
                          <option value="Ethiopia">Ethiopia</option>
                          <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                          <option value="Faroe Islands">Faroe Islands</option>
                          <option value="Fiji">Fiji</option>
                          <option value="Finland">Finland</option>
                          <option value="France">France</option>
                          <option value="French Guiana">French Guiana</option>
                          <option value="French Polynesia">French Polynesia</option>
                          <option value="French Southern Territories">French Southern Territories</option>
                          <option value="Gabon">Gabon</option>
                          <option value="Gambia">Gambia</option>
                          <option value="Georgia">Georgia</option>
                          <option value="Germany">Germany</option>
                          <option value="Ghana">Ghana</option>
                          <option value="Gibraltar">Gibraltar</option>
                          <option value="Greece">Greece</option>
                          <option value="Greenland">Greenland</option>
                          <option value="Grenada">Grenada</option>
                          <option value="Guadeloupe">Guadeloupe</option>
                          <option value="Guam">Guam</option>
                          <option value="Guatemala">Guatemala</option>
                          <option value="Guernsey">Guernsey</option>
                          <option value="Guinea">Guinea</option>
                          <option value="Guinea-bissau">Guinea-bissau</option>
                          <option value="Guyana">Guyana</option>
                          <option value="Haiti">Haiti</option>
                          <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                          <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                          <option value="Honduras">Honduras</option>
                          <option value="Hong Kong">Hong Kong</option>
                          <option value="Hungary">Hungary</option>
                          <option value="Iceland">Iceland</option>
                          <option value="India">India</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                          <option value="Iraq">Iraq</option>
                          <option value="Ireland">Ireland</option>
                          <option value="Isle of Man">Isle of Man</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Jamaica">Jamaica</option>
                          <option value="Japan">Japan</option>
                          <option value="Jersey">Jersey</option>
                          <option value="Jordan">Jordan</option>
                          <option value="Kazakhstan">Kazakhstan</option>
                          <option value="Kenya">Kenya</option>
                          <option value="Kiribati">Kiribati</option>
                          <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                          <option value="Korea, Republic of">Korea, Republic of</option>
                          <option value="Kuwait">Kuwait</option>
                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                          <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                          <option value="Latvia">Latvia</option>
                          <option value="Lebanon">Lebanon</option>
                          <option value="Lesotho">Lesotho</option>
                          <option value="Liberia">Liberia</option>
                          <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                          <option value="Liechtenstein">Liechtenstein</option>
                          <option value="Lithuania">Lithuania</option>
                          <option value="Luxembourg">Luxembourg</option>
                          <option value="Macao">Macao</option>
                          <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                          <option value="Madagascar">Madagascar</option>
                          <option value="Malawi">Malawi</option>
                          <option value="Malaysia">Malaysia</option>
                          <option value="Maldives">Maldives</option>
                          <option value="Mali">Mali</option>
                          <option value="Malta">Malta</option>
                          <option value="Marshall Islands">Marshall Islands</option>
                          <option value="Martinique">Martinique</option>
                          <option value="Mauritania">Mauritania</option>
                          <option value="Mauritius">Mauritius</option>
                          <option value="Mayotte">Mayotte</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                          <option value="Moldova, Republic of">Moldova, Republic of</option>
                          <option value="Monaco">Monaco</option>
                          <option value="Mongolia">Mongolia</option>
                          <option value="Montenegro">Montenegro</option>
                          <option value="Montserrat">Montserrat</option>
                          <option value="Morocco">Morocco</option>
                          <option value="Mozambique">Mozambique</option>
                          <option value="Myanmar">Myanmar</option>
                          <option value="Namibia">Namibia</option>
                          <option value="Nauru">Nauru</option>
                          <option value="Nepal">Nepal</option>
                          <option value="Netherlands">Netherlands</option>
                          <option value="Netherlands Antilles">Netherlands Antilles</option>
                          <option value="New Caledonia">New Caledonia</option>
                          <option value="New Zealand">New Zealand</option>
                          <option value="Nicaragua">Nicaragua</option>
                          <option value="Niger">Niger</option>
                          <option value="Nigeria">Nigeria</option>
                          <option value="Niue">Niue</option>
                          <option value="Norfolk Island">Norfolk Island</option>
                          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                          <option value="Norway">Norway</option>
                          <option value="Oman">Oman</option>
                          <option value="Pakistan">Pakistan</option>
                          <option value="Palau">Palau</option>
                          <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                          <option value="Panama">Panama</option>
                          <option value="Papua New Guinea">Papua New Guinea</option>
                          <option value="Paraguay">Paraguay</option>
                          <option value="Peru">Peru</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Pitcairn">Pitcairn</option>
                          <option value="Poland">Poland</option>
                          <option value="Portugal">Portugal</option>
                          <option value="Puerto Rico">Puerto Rico</option>
                          <option value="Qatar">Qatar</option>
                          <option value="Reunion">Reunion</option>
                          <option value="Romania">Romania</option>
                          <option value="Russian Federation">Russian Federation</option>
                          <option value="Rwanda">Rwanda</option>
                          <option value="Saint Helena">Saint Helena</option>
                          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                          <option value="Saint Lucia">Saint Lucia</option>
                          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                          <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                          <option value="Samoa">Samoa</option>
                          <option value="San Marino">San Marino</option>
                          <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                          <option value="Saudi Arabia">Saudi Arabia</option>
                          <option value="Senegal">Senegal</option>
                          <option value="Serbia">Serbia</option>
                          <option value="Seychelles">Seychelles</option>
                          <option value="Sierra Leone">Sierra Leone</option>
                          <option value="Singapore">Singapore</option>
                          <option value="Slovakia">Slovakia</option>
                          <option value="Slovenia">Slovenia</option>
                          <option value="Solomon Islands">Solomon Islands</option>
                          <option value="Somalia">Somalia</option>
                          <option value="South Africa">South Africa</option>
                          <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                          <option value="Spain">Spain</option>
                          <option value="Sri Lanka">Sri Lanka</option>
                          <option value="Sudan">Sudan</option>
                          <option value="Suriname">Suriname</option>
                          <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                          <option value="Swaziland">Swaziland</option>
                          <option value="Sweden">Sweden</option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                          <option value="Taiwan">Taiwan</option>
                          <option value="Tajikistan">Tajikistan</option>
                          <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Timor-leste">Timor-leste</option>
                          <option value="Togo">Togo</option>
                          <option value="Tokelau">Tokelau</option>
                          <option value="Tonga">Tonga</option>
                          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                          <option value="Tunisia">Tunisia</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Turkmenistan">Turkmenistan</option>
                          <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                          <option value="Tuvalu">Tuvalu</option>
                          <option value="Uganda">Uganda</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United Arab Emirates">United Arab Emirates</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="United States">United States</option>
                          <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                          <option value="Uruguay">Uruguay</option>
                          <option value="Uzbekistan">Uzbekistan</option>
                          <option value="Vanuatu">Vanuatu</option>
                          <option value="Venezuela">Venezuela</option>
                          <option value="Viet Nam">Viet Nam</option>
                          <option value="Virgin Islands, British">Virgin Islands, British</option>
                          <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                          <option value="Wallis and Futuna">Wallis and Futuna</option>
                          <option value="Western Sahara">Western Sahara</option>
                          <option value="Yemen">Yemen</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                      </div><br><br><br><br>
                      <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h6 >Jika merantau di Indonesia ( Provinsi ) :</h6>
                        <select class="form-control show-tick ms select2 " data-placeholder="Select" name="per_prov" id="per_prov">

                          <option value="Lainnya">Lainnya</option>
                          <option value="aceh">Aceh</option>
                          <option value="Sumut">Sumatera Utara</option>
                          <option value="sumbar">Sumatera Barat</option>
                          <option value="Riau">Riau</option>
                          <option value="Jambi">Jambi</option>
                          <option value="Sumsel">Sumatera Selatan</option>
                          <option value="Bengkulu">Bengkulu</option>
                          <option value="Lampung">Lampung</option>
                          <option value="BaBel">Kep. Bangka Belitung</option>
                          <option value="kepRiau">Kepulauan Riau</option>
                          <option value="Jakarta">Jakarta</option>
                          <option value="Jabar">Jawa Barat</option>
                          <option value="Banten">Banten</option>
                          <option value="Jateng">Jawa Tengah</option>
                          <option value="Yogyakarta">Yogyakarta</option>
                          <option value="Jatim">Jawa Timur</option>
                          <option value="Kalbar">Kalimantan Barat</option>
                          <option value="Kalteng">Kalimantan Tengah</option>
                          <option value="Kalsel">Kalimantan Selatan</option>
                          <option value="Kaltim">Kalimantan Timur</option>
                          <option value="Kaltra">Kalimantan Utara</option>
                          <option value="Bali">Bali</option>
                          <option value="NTT">Nusa Tenggara Timur</option>
                          <option value="NTB">Nusa Tenggara Barat</option>
                          <option value="Sulut">Sulawesi Utara</option>
                          <option value="Sulteng">Sulawesi Tengah</option>
                          <option value="Sulsel">Sulawesi Selatan</option>
                          <option value="Sultengg">Sulawesi Tenggara</option>
                          <option value="Sulbar">Sulawesi Barat</option>
                          <option value="Gorontalo">Gorontalo</option>
                          <option value="Maluku">Maluku</option>
                          <option value="Maluku Utara">Maluku Utara</option>
                          <option value="Papua">Papua</option>
                          <option value="Papua Barat">Papua Barat</option>
                        </select>
                      </div><br><br><br>
                       <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input class="field_custom" placeholder="Alamat di rantau" name="per_address" id="per_address" type="text" requigreen />
                      </div>
                      <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input class="field_custom" placeholder="Bekerja sebagai" name="per_pek" id="per_pek" type="text" requigreen />
                      </div>


                      <a type="submit" href="javascript: submitform()" name="submit"  style="background-color:grey;" class="btn btn-primary btn-block waves-effect waves-light">DAFTAR</a>
                    </div>
                  </fieldset>
                </form>
              </div></p>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>
</div>


<script type="text/javascript">
  function submitform()
  {
    document.form1.submit();
  }
</script>






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

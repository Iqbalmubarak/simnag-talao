<!doctype html>
    <html class="no-js " lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

        <title>:: SIMNag :: Sign in</title>
        <!-- Favicon-->
        <link rel="icon" href="" type="image/x-icon">
        <!-- Custom Css -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.min.css">
    </head>
    <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float20" target="_blank">
        <i style="font-size:50px;  text-align:center;" class="zmdi zmdi-hc-fw"></i>
    </a>
    <style type="text/css">
    

    .float20{
      position:fixed;
      width:60px;
      height:60px;
      bottom:40px;
      right:40px;
      background-color:RED;
      color:#FFF;
      border-radius:50px;
      text-align:center;

      box-shadow: 2px 2px 3px #999;
      z-index:50;
  }

  .my-float20{
      margin-top:16px;
  }

</style>

<body class="theme-blush">

    <div class="authentication">    
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <form class="card auth_form" action="sign-up_pro.php" method="POST" name="form1" onsubmit="return validation()">
                        <div class="header">
                            <img class="logo" style="width: 250px; height: auto;" src="assets/images/KM_logo.png" alt="">

                            
                            <a style="font-weight: bold;"><span>PENDAFTARAN AKUN</span></a><br><br>
                            <small style="">Pendaftaran akun hanya bisa dilakukan<br>oleh <a style="font-weight:bold;" >Kepala Keluarga</a> sahaja.</small>
                        </div>
                        <div class="body">
                         <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="p_name" >
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-hc-fw"></i> </span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="No KTP" name="p_nik" maxlength="16"> 
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-hc-fw"></i></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="No KK" name="p_kk" maxlength="16">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-hc-fw"></i></span>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Password" name="p_password">
                            <div class="input-group-append">                                
                                <span class="input-group-text"><i class="zmdi zmdi-hc-fw"></i></span>
                            </div>                            
                        </div>
                        <div class="input-group mb-3" style="display:none">
                            <input type="text" class="form-control" placeholder="Password" name="p_hub" value="Kepala Keluarga" >
                            <div class="input-group-append">                                
                                <span class="input-group-text"><i class="zmdi zmdi-hc-fw"></i></span>
                            </div>                            
                        </div>
                        <div class="input-group mb-3">
                            <select class="form-control show-tick ms select2" data-placeholder="Select" name="p_kelamin">
                                <option>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" >Laki-laki</option>
                                <option value="Perempuan" >Perempuan</option>

                            </select>                            
                        </div>
                     
                        <a type="submit" href="javascript: submitform()" name="submit"  style="background-color:grey;" class="btn btn-primary btn-block waves-effect waves-light">DAFTAR</a>                        

                        <a href="sign-in2.php" style="background-color:red;" class="btn btn-primary btn-block waves-effect waves-light">KEMBALI</a> 
                        <div class="signin_with mt-3">
                         <label for="remember_me">Butuh Bantuan? <a href="">Klik di sini</a></label>
                     </div>
                 </div>
             </form>
             <div class="copyright text-center">
                &copy;
                <script>document.write(new Date().getFullYear())</script>,
                <span><a href="templatespoint.net" style="color:grey;">DesignXCafe</a></span>
            </div>
        </div>
        <div class="col-lg-8 col-sm-12">
            <div class="card">
                <img src="assets/images/login_penduduk.jpg" alt="Sign Up" />
            </div>
        </div>
        

        <script type="text/javascript">

            function submitform()
            {
              document.form1.submit();
          }
      </script>
  </div>
</div>
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> <!-- Bootstrap Colorpicker Js --> 
<script src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js --> 
<script src="assets/plugins/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js --> 
<script src="assets/plugins/jquery-spinner/js/jquery.spinner.js"></script> <!-- Jquery Spinner Plugin Js --> 
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js --> 
<script src="assets/plugins/nouislider/nouislider.js"></script> <!-- noUISlider Plugin Js -->

<script src="assets/plugins/select2/select2.min.js"></script> <!-- Select2 Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/forms/advanced-form-elements.js"></script> 

<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> <!-- Bootstrap Colorpicker Js --> 
<script src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js --> 
<script src="assets/plugins/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js --> 
<script src="assets/plugins/jquery-spinner/js/jquery.spinner.js"></script> <!-- Jquery Spinner Plugin Js --> 
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js --> 
<script src="assets/plugins/nouislider/nouislider.js"></script> <!-- noUISlider Plugin Js -->

<script src="assets/plugins/select2/select2.min.js"></script> <!-- Select2 Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/forms/advanced-form-elements.js"></script> 





</body>
</body>


</html>
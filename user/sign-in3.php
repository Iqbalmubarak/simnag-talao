﻿

<!doctype html>
<html class="no-js " lang="en">
<?php
    if(isset($_POST["submit"])){

        if(!empty($_POST['ad_email']) && !empty($_POST['ad_password'])) {
            session_start();
            include("db_connect.php");
            $ad_email=$_POST['ad_email'];
            $ad_password=$_POST['ad_password'];

            $query="SELECT * FROM admin WHERE ad_email='$ad_email' AND ad_password='$ad_password'";
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
            $count = mysqli_num_rows($result);

            if($count == 1)
            {

                $_SESSION['ad_email']=$ad_email;
                /* Redirect browser */
                header("Location: a_index.php");

            }
            else {
                echo "Invalid E-mail or password!";
            }

        } else {
            echo "";
        }
    }
    ?>
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
<a href="https://api.whatsapp.com/send?phone=6285271805037&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float20" target="_blank">
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
               
                <form class="card auth_form" method="POST" name="insertImage" action="sign-in3.php" onsubmit="return validateForm()">
                    <div class="header">
                        <img class="logo" style="width: 250px; height: auto;" src="assets/images/KM_logo.png" alt="">
                        
                        <h5>Log In</h5>
                        <span>Hanya untuk ADMIN</span>
                    </div>
                    <div class="body">
                       
                        <div class="input-group mb-3">
                            <input type="text" name="ad_email" id="ad_email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                            </div>
                        </div>                        
                        <div class="input-group mb-3">
                            <input type="password" name="ad_password" id="ad_password" class="form-control" placeholder="Enter your password">
                            <div class="input-group-append">                                
                                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                            </div>                            
                        </div>
                        <div >
                           
                           
                        </div>
                    
                            <button id="submit" type="submit" name="submit" style="background-color:grey;" class="btn btn-primary btn-block waves-effect waves-light">LOGIN</button>                        
                       

                        <a href="sign-in.php" style="background-color:red;" class="btn btn-primary btn-block waves-effect waves-light">KEMBALI</a> 
                        <div class="signin_with mt-3">
                             
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
                    <img src="assets/images/login_admin.jpg" alt="Sign Up" />
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
</body>
    <script>
function validateForm() {
    var x = document.forms["insertImage"]["ad_email","ad_password"].value;
    if (x == null || x == "") {
        alert("Harus di isi semua kolom");
        return false;
    }
}
</script>

</html>
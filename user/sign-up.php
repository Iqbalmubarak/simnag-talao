<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts2/icomoon/style.css">

    <link rel="stylesheet" href="css2/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css2/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css2/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>SIMNag V2</title>
  </head>
  <style type="text/css">
      
  </style>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
            
          <img src="assets/images/register2.png" alt="Image" class="img-fluid">

        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">

             
            </div>
            <form action="sign-up_pro.php" method="post" enctype="multipart/form-data" >

               

              <div class="form-group first">

                 <a ><i class="fa fa-upload"></i>  Upload KK</a>

                <input placeholder="Nama" type='file' id="getFile" name="my_image2"  required>
               
              </div>

              <div class="form-group last mb-4">
                
                <input type="text" class="form-control" name="d_name" id="d_name" required placeholder="Nama">  
              </div>

               <div class="form-group last mb-4">
                
                <input type="text" class="form-control" name="d_kk" id="d_kk" required placeholder="No KK" maxlength="16">  
              </div>

               <div class="form-group last mb-4">
                
                <input type="text" class="form-control" name="d_nik" id="d_nik" required placeholder="No NIK" maxlength="16">  
              </div>

               <div class="form-group last mb-4">
              
                <input type="text" class="form-control" name="d_password" id="d_password" required placeholder="Password">  
              </div>
               

               

              <div class="form-group last mb-4">
              
                <select class="form-control" name="d_kelamin" required>
                              
                                <option value="Laki-laki" >Laki-laki</option>
                                <option value="Perempuan" >Perempuan</option>

                </select>
              </div>

              

               <div class="form-group last mb-4">
                
                <input style="display: none;" type="text" class="form-control" name="d_status" id="d_status" value="1">
              </div>

         
               <div class="form-group last mb-4">
                
                <input style="display: none;" type="text" class="form-control" name="d_hub" id="d_hub" value="Kepala Keluarga">
              </div>
              
              
              <input style="background-color:red;" type="submit" type="submit" name="submit2" value="DAFTAR" class="btn text-white btn-block btn-primary">

               <a href="sign-in2.php" style="background-color:grey; height: 40px;s" type="submit" type="submit" name="submit2" value="KEMBALI" class="btn text-white btn-block btn-primary">KEMBALI<a>

              
              
              <!--<div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>-->
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js2/jquery-3.3.1.min.js"></script>
    <script src="js2/popper.min.js"></script>
    <script src="js2/bootstrap.min.js"></script>
    <script src="js2/main.js"></script>
  </body>
</html>
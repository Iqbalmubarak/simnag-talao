<?php

session_start();
require_once('db_connect.php');
require_once('library.php');

$sqlquery3 = "SELECT * FROM nagari
WHERE n_id='1'";
$result3 = $connection->query($sqlquery3) or die($connection->error);
$sqlqueryresult3 = $connection ->query($sqlquery3);

  
?>
<!doctype html>
<html lang="en">
<?php                           
    while ($key=$sqlqueryresult3 -> fetch_assoc()) {
     $n_name = $key['n_name'];
     $n_kontak1 = $key['n_kontak1'];
     $n_email = $key['n_email'];
     $n_address = $key['n_address'];
      $n_color = $key['n_color'];
  ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="fonts2/icomoon/style.css">

    <link rel="stylesheet" href="css2/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css2/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css2/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <title> Nagari <?php echo $n_name ?></title>
  </head>
  <style type="text/css">
      
  </style>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
            
          

        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">

             
            </div>
            <img src="assets/images/register4.png" alt="Image" class="img-fluid"><br><br>
            
               <a href="sign-in2.php" style="background-color:grey; height: 40px;s" type="submit" type="submit" name="submit2" value="KEMBALI" class="btn text-white btn-block btn-primary">KEMBALI<a><br>
                 <a style="background-color:red; height: 40px;s" class="btn text-white btn-block btn-primary" href="https://api.whatsapp.com/send?phone=<?php echo $key['n_kontak1']; ?>&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."><i class="fa fa-phone"></i>   OPERATOR NAGARI<a>
            
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  <?php
     }
 ?>
    <script src="js2/jquery-3.3.1.min.js"></script>
    <script src="js2/popper.min.js"></script>
    <script src="js2/bootstrap.min.js"></script>
    <script src="js2/main.js"></script>
  </body>
</html>
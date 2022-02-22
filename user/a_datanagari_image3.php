<?php
session_start();
include('ifnotloginadmin.php');
require_once('db_connect.php');

$ad_email = $_SESSION['ad_email'];
$sqlquery = "SELECT * FROM admin
WHERE ad_email='$ad_email' ";
$result = $connection->query($sqlquery) or die($connection->error);
$sqlqueryresult = $connection ->query($sqlquery);

$sqlquery2 = "SELECT * FROM pengumuman
ORDER BY peng_id DESC";
$result2 = $connection->query($sqlquery2) or die($connection->error);
$sqlqueryresult2 = $connection ->query($sqlquery2);

$sqlquery3 = "SELECT n_id FROM nagari WHERE n_id='".$_GET["n_id"]."'";
$result3 = $connection->query($sqlquery3) or die($connection->error);
$sqlqueryresult3 = $connection ->query($sqlquery3);

$sqlquery4 = "SELECT n_id FROM nagari WHERE n_id='".$_GET["n_id"]."'";
$result4 = $connection->query($sqlquery4) or die($connection->error);
$sqlqueryresult4 = $connection ->query($sqlquery4);

$sqlsurat = "SELECT COUNT(*) AS `total3` FROM `surat` WHERE s_status='Dalam Proses' ";
$surat = $connection ->query($sqlsurat);

?>
<!DOCTYPE html>
<html>
<style>

body {
  background: #555;
}
.content {
  
  margin: auto;
  background: white;
  position: absolute;
  top: 30%;
  left: 30%;
  width: 30%;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.a {
  width: 100%;
  background-color: grey;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

</style>
<body>


<div class="content">
  <label for="lname">Upload File</label><br><br>
  <form action="a_datanagari_image_pro3.php" method="post" enctype="multipart/form-data">
   
    <input type="file" id="getFile" name="my_image2" placeholder="Your name.."><br><br>


                        
                        <?php                           
                           while ($key=$sqlqueryresult3 -> fetch_assoc()) {
                            $n_id = $key['n_id'];
                            ?>

                         <input style="display:none" type="text" id="n_idd" name="n_idd" placeholder="Your last name.." value="<?php echo $n_id ?>">
    <?php
                        }
                        ?>
   
    
  
    <input style="background-color:#04BE5B;" type="submit" type="submit" name="submit2" value="UPLOAD" class="btn text-white btn-block btn-primary">
  </form>
 
                            <a type="button" href="a_datanagari.php"><i class="zmdi zmdi-upload"></i> Close</a>
                           
</div>

</body>
</html>



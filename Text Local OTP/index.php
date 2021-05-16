<head>
      <title>Verify OTP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
<style>
  body {
  background-image: url("bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  }
</style>
</head>


  <?php
$servername = "localhost";
$username = "adminboys12345";
$password = "root@123";
$dbname = "imarcat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>	  
	 
	 <?php
$DB_host = "localhost";
$DB_user = "adminboys12345";
$DB_pass = "root@123";
$DB_name = "imarcat";

 try
 {
     $DBcon = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
     echo "ERROR : ".$e->getMessage();
 }
?>
 
 
<?php
    $product_name = $_REQUEST['product_name'];
?>


<?php
    if(isset($_POST['verifyotp']))
	{
          $otp = $_POST['otp'];
          if($_COOKIE['otp'] == $otp)
           {
              $qry="UPDATE ads_data SET mobile_verification='yes' WHERE product_name='$product_name';";
              $result3 = $conn->query($qry);
               if($conn->query($qry))
               {
                 $successful = 'yes';  
               }
               else
               {
                 $successful = 'no'; 
               }
              
              echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sucessfull Mobile Verification.Our Admin Will Contact You Soon.');
    window.location.href='http://imarcat.com';
    </script>");
           }
           else
           {
              echo "Please Enter The Correct OTP";
           }
        }
?>
<div style="margin-top:15%;" class="container">
  <div class="card bg-light text-dark">
    <div class="card-body">
        <form method="post">
            <div class="row">
                <div class="col-sm-3">
                </div>  
                <div class="col-sm-3">
                  <input class="form-control" type="text" name="otp" id="otp" placeholder="otp">  
                </div>    
                <div class="col-sm-3">
                  <center><button class="btn btn-primary" type="submit" name="verifyotp" id="verifyotp">Verify OTP</button></center>  
                </div>    
                <div class="col-sm-3">
                </div> 
            </div>    
        </form>
    </div>
  </div>
</div>





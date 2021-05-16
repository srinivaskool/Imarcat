<?php 
  session_start(); 

  if (!isset($_SESSION['marketer_id'])) {
      
    $_SESSION['product_name'] = $product_name;
    $_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['marketer_id']);
  	header("location: login.php");
  }
?>

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
$marketer_id = $_SESSION['marketer_id'];
?>
   
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
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
<body>
    <div style="margin-top:5%;" class="container">
    <div style="padding:30px;" class="card bg-light text-dark">
        <div class="card-body">
            <h4><center> Upload Your Profile Picture</center></h4><br>
             <div class="row">
             <div class="col-sm-3">
             </div>    
             <div class="col-sm-3">
                   <form method="POST" action="upload_profile_picture.php" enctype="multipart/form-data">
                              <input type="file" name="image" required>
                              
             </div>      
             <div class="col-sm-3">
                <center> <input class="btn btn-primary btn-sm" type="submit"  value="Submit" > </center>
                    </form>
             </div>   
               <div class="col-sm-3">
             </div>
    </div>
     </div>
      </div>
       </div>
        </div>
    
    
    
    
</body>
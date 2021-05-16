<?php
session_start(); 
$product_name = $_SESSION['product_name'];
?>

<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login For Marketing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="css/jquerytour.css" />
	  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Roboto|Roboto+Condensed" rel="stylesheet">
  <style>
.imarcat_text{
font-weight: 700;
font-size: 20px;
color: #B91B1B;
}

.sign_text{
font-family: Poppins;
font-style: normal;
font-weight: 700;
font-size: 25px;
color: #583F3F;
}

input[type=text],input[type=number],input[type=email],input[type=password], select {
  width: 100%;
  padding: 6px 8px;
  margin: 2px 0;
  display: inline-block;
  border: 2px solid #B5B4B4;
  background: #e8e8e8;
  border-radius: 5px;
  box-sizing: border-box;
}

label{
 font-family: Poppins;
font-style: normal;
font-weight: 400;
font-size: 13px;
line-height:10px;
margin-top :8px;
color: #735A5A;
}

.btn{
background: #3392E9;
border-radius: 30px;
padding:8px;
width:100%;
margin-top:15px;
color:white;
}

</style>
</head>
<body style="font-family: 'Poppins', sans-serif;background-color:#E5E5E5;">
  
  <nav style="font-size:20px;padding:0px;font-family: 'Roboto Condensed', sans-serif;background-color:#0b1953" class="navbar navbar-expand-sm bg-company-red navbar-dark fixed-top"> 
 <a style="font-family: 'K2D', sans-serif;color:#ffb600;padding-left:75px;font-size: 35px;font-weight: bold;text-transform: uppercase;" class="navbar-brand" href="http://imarcat.com/"><b>&nbsp;i-marcat&nbsp;</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse"  id="collapsibleNavbar">
  
  <ul style="padding-right:75px;" class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        &nbsp;My Profile
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="profile">Marketer Profile</a>
        <a class="dropdown-item" href="company_profile">Company Profile</a>
      </div>
    </li>
   <li class="nav-item">
      <a class="nav-link" href="marketing">&nbsp;Drop Your Product&nbsp;</a>
    </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">&nbsp;Ready For Marketing</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="products?category=Electronics">&nbsp;Electronics & Technology&nbsp;</a>
        <a class="dropdown-item" href="products?category=Automobiles">&nbsp;Automobiles & Industry&nbsp;</a>
        <a class="dropdown-item" href="products?category=Food">&nbsp;Food & Retail&nbsp;</a>
        <a class="dropdown-item" href="products?category=Finance">&nbsp;Finance & Banking&nbsp;</a>
        <a class="dropdown-item" href="products?category=General">General Marketing</a>
      </div>
    </li>
  </ul>
    </div>  
</nav>
  <br><br><br>
    <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Forgot Password</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h5>You will receive a email with the credentials to login...</h5>
          <br>
<form method="post" action="forgot_password.php">
  	  <label>Enter Email Id</label>
  	  <input class="form-control" type="email" name="email_id">
  	  <br>
  	  <center><button  type="submit" class="btn-primary" name="forgot_password">Submit</button></center>
</form>
        </div>
      </div>
    </div>
  </div>


<?php
if (isset($_POST['login_user'])) {
  $marketer_id = mysqli_real_escape_string($db, $_POST['marketer_id']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  	$password = md5($password);
  	$query = "SELECT * FROM marketers WHERE marketer_id='$marketer_id' AND password='$password'";
  	
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	    
  	  $_SESSION['marketer_id'] = $marketer_id;

  	  if($product_name == NULL)
  	  {
  	        	 ?>
  	  <script>
    window.location = 'profile.php';
        </script>
        <?php
  	  }
  	  else
  	  {
  	        	 ?>
  	  <script>
  	   var currString = "<?php echo $product_name ?>";
    window.location = "imarketing?product_name=" + currString;
        </script>
        <?php
  	  }
  	}else {
		$message = "Wrong marketer Id/password combination";
	    echo "<script type='text/javascript'>alert('$message');</script>";
  		array_push($errors, "Wrong marketer Id/password combination");
  	}
  }


?>

<div style="margin-top:10px;" class="container">
   <div class="row">
    <div class="col-sm-1">
    </div>
     <div class="col-sm-10">
         
  <div class="card-group">
    <div style="border-left: 6px solid #DC1313;padding:20px;" class="card bg-white">
      <div class="card-body">
          <div class="imarcat_text">I-MARCAT</div>
          <br>
          <div class="sign_text">Sign Up (For Marketers)</div>
          <br>
         
         <form class="form" method="post" action="register.php">
  	<div class="input-group">
  	  <label>NAME</label>
  	  <input type="text" name="name" value="" placeholder="Enter Name" required>
  	</div>
	<div class="input-group">
  	  <label>CONTACT NO.</label>
  	  <input type="number" name="contact" value="" placeholder="Enter Contact Number" required>
  	</div>
  	<div class="input-group">
  	  <label>EMAIL</label>
  	  <input type="email" name="email" value="" placeholder="Enter Email" required>
  	</div>
	<div class="input-group">
  	  <label>SOCIAL PROFILE LINK(LINKEDIN/FACEBOOK)</label>
  	  <input type="text" name="social_link" value="" placeholder="Enter Social Profile Link" required>
  	</div>
  	<div class="input-group">
  	  <label>MARKETING EXPERIENCE</label>
	  <div style="width:100%;" class="select">
	   <select name="experience" required>
	    <option value="Begginner"> Begginner</option>
	    <option value="1-2 years"> 1-2 years  </option>
	    <option value="2-3 years"> 2-3 years  </option>
	    <option value="3-4 years"> 3-4 years   </option>
	    <option value="Over 4 years"> Over 4 years  </option>
	   </select>
	  </div>
 <br>
  	</div>
  	<div class="input-group">
  	  <label>REFERAL CODE (OPTIONAL)</label>
  	  <input type="text" name="ref_code" value="" placeholder="Enter Referal Code">
  	</div>
  	<div style="font-size:14px;line-height:35px;">
  	    By registering you agree to our <a href=""> terms and conditions</a>
    </div>
  	<div>
  	  <center><button type="submit" class="btn" name="reg_user">GET STARTED</button></center>
  	</div>
  </form>
      </div>
    </div>
    <div style="background-color: #DC1313;padding:20px;opacity:0.93;" class="card">
      <div class="card-body">
          
          
          <div style="color:white;" class="imarcat_text">I-MARCAT</div>
          <br>
          <div class="sign_text">Sign In (For Marketers)</div>
          <br>
          
          
          <form class="form" method="post" action="login.php">

  	<div class="input-group">
  		<label style="color:white;">MARKETER ID</label>
  		<input type="text" name="marketer_id" placeholder="Enter Marketer ID" required>
  	</div>
  	<div class="input-group">
  		<label style="color:white;">PASSWORD</label>
  		<input type="password" name="password" placeholder="Enter Password" required>
  	</div>
  	<label style="color:white;cursor:pointer;"> <a data-toggle="modal" data-target="#myModal">FORGOT PASSWORD ?</a></label>
  		<center><button type="submit" class="btn" name="login_user">SIGN IN</button></center>
  </form>
          
          <br><br><br>
          
          <div style="width:100%;height:30%;background:url(login-image.png);background-position: center;background-repeat: no-repeat;background-size: cover;opacity:0.15;">
          </div>
          
      </div>
    </div>  
  </div>
  </div>
      <div class="col-sm-1">
    </div>
</div>
</div>
  </div>
</div>
</body>
</html>





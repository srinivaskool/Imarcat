<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Company Login Portal</title>
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
color: white;
}

.btn{
background: #EA3515;
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


<div style="margin-top:8%;" class="container">
   <div class="row">
    <div class="col-sm-3">
    </div>
     <div class="col-sm-6">
 <div style="border-left: 6px solid #EA3515;background-color: #15caea;" class="card">
      <div class="card-body">
          
          <div style="color:white;" class="imarcat_text">I-MARCAT</div>
          <br>
          <div class="sign_text">Sign In (For Company)</div>
          <br>

  <form class="form" method="post" action="company_login.php">
  	<div class="input-group">
  	<label style="color:white;">COMPANY ID</label>
  		<input type="text" name="company_id" placeholder="Enter Marketer ID" required>
  	</div>
  	<div class="input-group">
  		<label style="color:white;">PASSWORD</label>
  		<input type="password" name="password" placeholder="Enter Password" required>
  	</div>
  		<center><button type="submit" class="btn" name="login_company">Login To Your Account</button></center>
  	<center><label><br>
  		Not yet a member of Imarcat? Contact our admin (+91 - 8367770505)</a>
  	</center></label>
  	
  </form>
  </div>
  </div>
  
  </div>
  </div>
  <div class="col-sm-3">
    </div>
    </div>
  
  
  
  
</body>
</html>

<?php
$db = mysqli_connect('localhost', 'adminboys12345', 'root@123', 'imarcat');



if (isset($_POST['login_company'])) {
  $company_id = mysqli_real_escape_string($db, $_POST['company_id']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  	$password = md5($password);
  	$query = "SELECT * FROM company_data WHERE company_id='$company_id' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
 
  	  $_SESSION['company_id'] = $company_id;
  	  ?>
  	  <script>
  	   window.location = 'company_profile.php';
  	  </script>
  	    	  <?php
  	}else {
		$message = "Wrong marketer Id/password combination";
	    echo "<script type='text/javascript'>alert('$message');</script>";
  		array_push($errors, "Wrong Company Id/ Password combination");
  	}
  }

?>
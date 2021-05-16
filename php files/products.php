<!DOCTYPE html>
<html lang="en">
<head>
<title>I-MARCAT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Roboto|Anton|Oswald|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
	  	  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Roboto|Roboto+Condensed" rel="stylesheet">
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
 $category=$_REQUEST['category'];
?>
	  
<style>

  .headlineorange {
    font-family: Calibri, "Helvetica", san-serif;
    line-height: 1.5em;
    color: black;
    font-size: 30px;
    position: relative;
  
}

.headlineorange:after {
    content:' ';
    position: absolute;
    display:block;
    width: 100px;
    margin: 0 2%;
    border:2px solid #e5e4e1;
    border-radius:4px;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    box-shadow:inset 0 1px 1px rgba(0, 0, 0, .05);
    -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .05);
    -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .05);
  left: 48%;
  transform: translateX(-50%);
}

.grandhtext {
  background-color: white;
  color: black;
  font-size: 7vw; 
  font-weight: bold;
  margin: 0 auto;
  padding: 10px;
  width: 60%;
  text-align: center;
  position: absolute;
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);
  mix-blend-mode: screen;
}

  @media only screen and (max-width: 480px) {
       h1 { font-size: 20px !important; }
       h2 { font-size: 22px !important; }
       h3 { font-size: 18px !important; }
       h5 { font-size: 16px !important; }
       p  { font-size: 18px !important; }
     }
a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

a:hover {
    text-decoration: none;
}

a:active {
    text-decoration: none;
}
  body, html {
    height: 100%;
    margin: 0;
}
  body {
      position: relative;
      font-family: 'Merriweather', serif;
  }
  .bg {
    /* The image used */
    background-image: url("ezgif.com-gif-maker.gif");
	filter: opacity(95%);
    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-repeat: no-repeat;
    background-size: cover;
  }
  .headline {
    font-family: Calibri, "Helvetica", san-serif;
    line-height: 1.5em;
    color: black;
    font-size: 30px;
    position: relative;
  
}
.headline:after {
    content:' ';
    position: absolute;
    display:block;
    width: 100px;
    margin: 0 2%;
    border:2px solid orange;
    border-radius:4px;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    box-shadow:inset 0 1px 1px rgba(0, 0, 0, .05);
    -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .05);
    -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .05);
  left: 48%;
  transform: translateX(-50%);
}
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  bottom:40%;
  width: auto;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}
.container123 .title{
  color: #1a1a1a;
  text-align: center;
  margin-bottom: 10px;
}

.content123 {
  position: relative;
  width: 90%;
  max-width: 400px;
  margin: auto;
  overflow: hidden;
}

.content123 .content123-overlay {
  background: rgba(0,0,0,0.7);
  position: absolute;
  height: 99%;
  width: 100%;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  opacity: 0;
  -webkit-transition: all 0.4s ease-in-out 0s;
  -moz-transition: all 0.4s ease-in-out 0s;
  transition: all 0.4s ease-in-out 0s;
}

.content123:hover .content123-overlay{
  opacity: 1;
}

.content123-image{
  width: 100%;
}

.content123-details {
  position: absolute;
  text-align: center;
  padding-left: 1em;
  padding-right: 1em;
  width: 100%;
  top: 50%;
  left: 50%;
  opacity: 0;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.content123:hover .content123-details{
  top: 50%;
  left: 50%;
  opacity: 1;
}

.content123-details h3{
  color: #fff;
  font-weight: 500;
  letter-spacing: 0.15em;
  margin-bottom: 0.5em;
  text-transform: uppercase;
}

.content123-details p{
  color: #fff;
  font-size: 0.8em;
}


@media screen and (max-width: 640px){
  .container123{
    display: block;
    width: 50%;
  }
}

@media screen and (min-width: 900px){
  .container123{
    width: 25%;
  }
}


h1,h2 {
  font-weight: 200;
  margin: 0.4em 0;
}
h1 { font-size: 3.5em; }
h2 {
  color: #888;
  font-size: 2em;
}
.hidden {
  opacity:0;
}

.console-container {
  font-family:Khula;
  font-size:3em;
  text-align:center;
  height:200px;
  width:100%;
  display:block;
  position:absolute;
  color:white;
  top:-150px;
  bottom:0;
  left:0;
  right:0;
  margin:auto;
}
.console-underscore {
   display:inline-block;
  position:relative;
  top:-0.14em;
  left:10px;
}

@media screen and (max-width: 480px){

.console-container {
  font-family:Khula;
  font-size:2em;
  text-align:center;
  height:200px;
  width:100%;
  display:block;
  position:absolute;
  color:white;
  bottom:0px;
  top:90%;
  left:0;
  right:0;
  margin:auto;
}
.console-underscore {
   display:inline-block;
  position:relative;
  top:-0.14em;
  left:10px;
}
 }
.fa {
  padding: 15px;
  font-size: 24px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa-facebook:hover {
    background-color:grey;
}

.fa-twitter:hover {
    background-color:grey;
}

.fa-linkedin:hover {
    background-color:grey;
}

.fa-youtube:hover {
    background-color:grey;
}

.fa-instagram:hover {
    background-color:grey;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
.fa-phone:hover {
    color:blue;
}
.fa-map-marker:hover{
    color:yellow;
}
.material-icons:hover{
    color:red;
}
 .div123 {
  background: #f1f1f1;
  font-family: 'Merriweather', sans-serif;
  padding: 1em;
}

form {
  max-width: 600px;
  text-align: center;
  margin: 20px auto;
}
form input, form textarea {
  border: 0;
  outline: 0;
  padding: 1em;
  -moz-border-radius: 8px;
  -webkit-border-radius: 8px;
  border-radius: 8px;
  display: block;
  width: 100%;
  margin-top: 1em;
  font-family: 'Merriweather', sans-serif;
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  resize: none;
}
form input:focus, form textarea:focus {
  -moz-box-shadow: 0 0px 2px #e74c3c !important;
  -webkit-box-shadow: 0 0px 2px #e74c3c !important;
  box-shadow: 0 0px 2px #e74c3c !important;
}
form #input-submit {
  color: white;
  background: #e74c3c;
  cursor: pointer;
}
form #input-submit:hover {
  -moz-box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
  -webkit-box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
  box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
}
form textarea {
  height: 200px;
}

.half {
  float: left;
  width: 48%;
  margin-bottom: 1em;
}

.right {
  width: 50%;
}

.left {
  margin-right: 2%;
}

@media (max-width: 480px) {
  .half {
    width: 100%;
    float: none;
    margin-bottom: 0;
  }
}
.wrap {
  height: 100%;
  position: relative;
  overflow: hidden;
}
.wrap .bg123{
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  background: url("colortheory.jpg") no-repeat center center;
  background-size: cover;
  -webkit-transform: scale(1.5);
          transform: scale(1.5);
}

  .bg-success123
 {
 background-color:  #5680E9;
 } 
   .bg-info123123123123
 {
 background-color: #5AB9EA;
 } 
  .bg-danger123
 {
 background-color:  #84CEEB;
 } 
   .bg-secondary123
 {
 background-color:  #C1C8E4;
 } 
  .bg-srini1234
 {
 background-color:  #8860D0;
 } 
   .bg-srini123
 {
 background-color:  #F64C72;
 } 
   .bg-light
   {
    background-color:  #E7E7E7;
   }
   

   .srinivassection
   {
	 width:100%;
	 height:100%;
	 padding-top:60px;
	 padding-left:30px;
	 padding-right:30px;
   }

  @media only screen and (max-width: 480px) {
       .srinivassection
	   {
	      width:100%;
	      padding:25px;
		  height:auto;
	   }
     }

 .bg-company-red
 {
 background-color:black;
 } 


.row > div[class*='col-'] {
  display: flex;
  flex:1 0 auto;
}
  </style>
</head>
<body style="background-color:#FFA500;" data-spy="scroll" data-target=".navbar" data-offset="50">
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

<div style="background-color:#FFA500;padding-top:60px;padding-bottom:60px;font-family: 'Montserrat', sans-serif;" id="cat1" class="srinivassection">
<?php
if ($category=='Electronics') {
   $heading = "Electronics & Technology";
}
elseif ($category=='Automobiles') {
    $heading = "Automobiles & Industry";
} 
elseif ($category=='Food') {
    $heading = "Food & Retail";
}
elseif ($category=='Finance') {
   $heading = "Finance & Banking";
}
elseif ($category=='General') {
    $heading = "General Marketing";
}
?>
<br>
  <center><h3 class="headlineorange"><?php echo $heading; ?></h3></center><br>
<div class="container-fluid">
          <div class="row">
               <?php
               $sql = "SELECT * FROM ads_data WHERE category='$category' AND admin='yes'  ORDER BY id DESC;";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
               ?>
              
               
    <div style="margin-bottom :30px;" class="col-sm-3">          
    <div class="card">
      <div class="card-body">
       <div class="row">
      <div class="col-sm-2">
	  <img style="width:30px;height:30px;" src="upload/<?php echo  $row["image"]; ?>">
	  </div>
	  <div class="col-sm-10">
	  <h5><b>  <?php echo  $row["company_name"]; ?></b></h5>
	  </div>
	  </div> 
	  <hr>
	  <img style="width:100%;height:200px;" src="upload/<?php echo  $row["image2"]; ?>">
	  <hr>
	  <center><h5> <b> <?php echo  $row["product_name"]; ?> </b></h5></center>
	  <font style="font-size:12px;">  <?php echo  $row["description"]; ?></font><br>
	 <font style="font-size:14px;"><b>Mode Of Marketing</b> : <?php echo  $row["mode_of_selling"]; ?></font>
	  	 <hr>
    <h6> <b>Incentives </b> :  <?php echo  $row["food"]; ?></h6> 
       <h6> <b>Incentives For Food & Travel</b> : <?php echo  $row["travel"]; ?></h6>  
        <h6> <b>Incentives For Accomidation</b> :  <?php echo  $row["accomidation"]; ?></h6>
      <h6> <b>Other Incentives </b> :  <?php echo  $row["incentive"]; ?></h6>
      <hr>
	  <center><a target="_blank" href="upload/<?php echo  $row["image3"]; ?>">Download Brochure</a><br><br>
	  <a href="imarketing?product_name=<?php echo  $row["product_name"]; ?>"><button type="button" class="btn btn-primary">Ready For Marketing</button></a> </center>
</div>
  </div>  

</div> 
  <?php
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

  <br><br>
  </div>
  <br><br>
</div>
  </div>
</body>
</html>

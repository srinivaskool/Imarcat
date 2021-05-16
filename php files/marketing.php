<!doctype html>
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
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700,600,800&display=swap" rel="stylesheet">
 <title>I-MARCAT</title>
<?php
$target_dir = "images/ads";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>


<?php
$target_dir = "images/ads";
$target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
$uploadOk3 = 1;
?>


<?php
$target_dir = "images/ads";
$target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$uploadOk2 = 1;
?>

<html lang="en">
 <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
  <meta name="Generator" content="EditPlus速">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>

 <style>
 body {
 padding:50px;
}

@media only screen and (max-width: 600px) {
  body {
    padding:0px;
  }
}
 .bg-company-red
 {
 background-color:black;
 } 

input[type=text],input[type=number],input[type=email],input[type=password], select,textarea {
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
font-size: 12px;
line-height:10px;
margin-top :10px;
color: #FFFFFF;
text-transform: uppercase;
}

.btn{
background: #3392E9;
border-radius: 30px;
padding:8px;
width:40%;
color:white;
}

 </style>

</head>
<body style="color:white;background-color:#E5E5E5;">
 
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

    <br><br>
    
     <div style="background-color: #DC1313;" class="container-fluid">
   <br> <h6 style="font-family: Poppins;
font-style: normal;
font-weight: 700;
font-size: 21px;
line-height: 123.4%;
text-align: center;">DROP YOUR PRODUCT</h6>
    <div class="row">
<div style="background-color: #DC1313;padding:40px;" class="col-sm-4">
<h6 style="font-style: normal;color:#3D3232;
font-weight: 700;
font-size: 18px;
line-height: 103.4%;
text-align:center">--Company Information--</h6>

<form action="insert_backend.php" method="post" enctype="multipart/form-data" class="f1">

<div class="input-group">
   <Label> COMPANY NAME </label>
    <input type="text" name="company_name" Placeholder="Enter Company Name" required/>
</div>

<div class="input-group">
   <Label>Product Incharge Name </label>
    <input type="text" name="person_name" Placeholder="Enter Product Incharge Name" required/>
</div>


<div class="input-group">
   <Label> Contact Number </label>
    <input type="text" name="contact"  placeholder="For Number Verification" required/>
</div>


<div class="input-group">
   <Label> Email ID </label>
    <input type="text" name="email"  Placeholder="Enter Email ID"  required/>
</div>

<div>
     <label>Select Company Logo to upload:&nbsp;&nbsp;&nbsp;&nbsp; </label>
    <input class="custom-file-upload"  type="file" name="fileToUpload" id="fileToUpload">
</div>

<div style="display:none;">
   <Label> Admin </label>
    <input type="hidden" name="admin" value="no"/>
</div>


        
        
      </div>
<div style="background-color: #DC1313;padding:40px;" class="col-sm-4">
<h6 style="font-style: normal;color:#3D3232;
font-weight: 700;
font-size: 18px;
line-height: 103.4%;
text-align:center">--Product Information--</h6>


<div class="input-group">
<label> PRODUCT CATEGORY </label>
    <div style="width:100%;"  class="select">
	<select name="category" required>
	   <option value=""> Select Product Category </option>
	   <option value="Electronics"> Electronics & Technology  </option>
	   <option value="Automobiles"> Automobiles & Industry  </option>
	   <option value="Food">Food & Retail</option>
	   <option value="Finance"> Finance & Banking </option>
	   <option value="General">General Marketing</option>
	</select>
    </div>
</div>  


<div class="input-group">
   <Label> Product Name</label>
    <input type="text" name="product_name" Placeholder="Product Name"   required/>
</div>



<div class="input-group">
   <Label class="control-label">Product Description </label>
    <textarea rows="2" col="50" type="text" name="description"  maxlength="60" placeholder="Description(max of 60 characters)" required/></textarea>
</div>

     <label> Mode of Marketing </label>
<div class="select">
	<select name="mode_of_selling" required>
	   <option value=""> Select Mode of Marketing </option>
	   <option value="Digital Marketing"> Digital Marketing  </option>
	   <option value="Direct Marketing"> Direct Marketing </option>
	   <option value="Internet Marketing"> Internet Marketing </option>
	   <option value="Multilevel Marketing"> Multilevel Marketing </option>
	   <option value="Global Marketing"> Global Marketing </option>
	   <option value="Affiliate Marketing"> Affiliate Marketing </option>
	   <option value="Content Marketing"> Content Marketing   </option>
	   <option value="Retail Marketing"> Retail Marketing </option>
	   <option value="Digital and Direct Marketing"> Digital and Direct Marketing </option>
	   <option value="All Marketting Options"> All Marketting Options </option>
	</select>
</div>


<div class="input-group">
<label> Marketing Region </label>
<div style="width:100%;" class="select">
	<select name="training" required>
	   <option value="">Select State</option>
<option value="All Over India">All Over India</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
	</select>
</div>
</div>

<div>
     <label>Select Product Image to upload: &nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input class="custom-file-upload"  type="file" name="fileToUpload2" id="fileToUpload2">
</div>

<div>
     <label>Select Product Brochure to upload:&nbsp; </label>
    <input class="custom-file-upload" type="file" name="fileToUpload3" id="fileToUpload3">
</div>





       
      </div>
      <div style="background-color: #DC1313;padding:40px;" class="col-sm-4">
<h6 style="font-style: normal;color:#3D3232;
font-weight: 700;
font-size: 18px;
line-height: 103.4%;
text-align:center">--Incentives Information--</h6>
       
<div class="input-group">       
<label> Incentive (Per Month Perks)  </label>
<div  style="width:100%;" class="select">
	<select name="food" required>
	   <option value=""> Select Incentive (Per Month Perks) </option>
	   <option value="No Pay">No Pay</option>
	   <option value="0 to 5000 PM">0 to 5000 PM</option>
	   <option value="5000 to 10000 PM">5000 to 10000 PM</option>
	   <option value="10000 to 20000 PM"> 10000 to 20000 PM</option>
	   <option value="20000 to 30000 PM">  20000 to 30000 PM </option>
	   <option value="30000 to 40000 PM"> 30000 to 40000 PM  </option>
	   <option value="40000 PM Above"> 40000 PM Above </option>
	</select>
</div>
</div>
 
<div class="input-group"> 
<label> Incentive for Food & Travel </label>
<div  style="width:100%;" class="select">
	<select name="travel" required>
	   <option value=""> Select Incentive for Food & Travel </option>
	   <option value="yes"> Yes </option>
	    <option value="no"> No </option>
	</select>
</div>
</div>

<div class="input-group">
<label> Incentive for Accomidation </label>
<div  style="width:100%;" class="select">
	<select name="accomidation" required>
	   <option value=""> Select Incentive for Accomidation </option>
	   <option value="yes"> Yes </option>
	    <option value="no"> No </option>
	</select>
</div>
</div>
 
 
 
 
<div class="input-group">
   <Label> Other Incentives </label>
    <textarea rows="3" col="50" type="text" name="incentive" maxlength="60" placeholder="Enter Other Incentives (max of 60 characters)" required/></textarea>
</div>
       
       <form action="insert_backend.php" method="post" enctype="multipart/form-data" class="f1">
       
      </div>
    </div>
    
    <hr style="display: block; height: 1px;
    border: 0; border-top: 1px solid #ffffff;">
    <p style="font-family: Poppins;
font-style: normal;
font-weight: 400;
font-size: 15px;
line-height: 125.4%;
margin-top:25px;
text-align: center;">I-marCat is platform for freelance marketers and business owners.<br>We are not charging anything from both the parties.</p>
 <center> <input type="checkbox" class="checkbox-inline"  onchange="document.getElementById('sendNewSms').disabled = !this.checked;" />By Clicking The Checkbox You Are Agreeing To Our Terms And Conditions </center><br>
          <center><input class="btn" disabled="true" type="submit" name="submit" class="inputButton" id="sendNewSms" value="GET STARTED" /></center>
          
          </form>
          <br><br>
  </div>
  
 </body>
 
 

</html>

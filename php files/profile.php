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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="css/jquerytour.css" />
	  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Roboto|Roboto+Condensed" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,600,800&display=swap" rel="stylesheet">
    <style>
  body {
  background-image: url("bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  padding:50px;
font-family: Poppins;
font-style: normal;
font-weight: 400;
  }
  
  .input-group {
  margin: 10px 0px 10px 0px;
}
 label {
  display: block;
  text-align: left;
  margin: 5px;
  font-weight: 500;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}

a:link {
  color: #DC1313;
}

/* visited link */
a:visited {
  color: #DC1313;
}

/* mouse over link */
a:hover {
  color: #DC1313;
}

/* selected link */
a:active {
  color: #DC1313;
}
  </style>
</head>
<body>
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

<div class="container">
    <div style="padding:30px;margin-top:80px;border-left: 6px solid #DC1313;" class="card bg-light text-dark">
        <div class="card-body">
            
             <div class="row">
            <div class="col-sm-2">
                            <?php
               $sql5 = "SELECT * FROM marketers WHERE marketer_id ='$marketer_id'";
               $result5 = $conn->query($sql5);
               if ($result5->num_rows > 0) {
               while($row5 = $result5->fetch_assoc()) {
                   $image = $row5["profile_image"];
            ?>
            <center><img style="width:100px;height:100px;" src="<?php echo $image; ?>"><br><br>
            <a href="change_profile_image.php"><h6 style="font-size:16px;font-weight:600;">CHANGE IMAGE</h6></a> 
            <?php
    }
} else {
    echo "No profile picture";
}

?> </center>
            </div>  
            
            <?php
               $sql1 = "SELECT * FROM marketers WHERE marketer_id = '$marketer_id';";
               $result1 = $conn->query($sql1);
               if ($result1->num_rows > 0) {
               while($row1 = $result1->fetch_assoc()) {
?>
				
<?php
				         $name =   $row1["name"];
				         $email =  $row1["email"];
				         $contact = $row1["contact"];
				         $social_link = $row1["social_link"];
				         $social_link_2 = $row1["social_link_2"];
				         $experience = $row1["experience"];
				         $coins = $row1["coins"];
				         $rating = $row1["rating"];
				         $referal_code =$row1["referal_code"];
?>

        <div class="col-sm-2">
<h5 style="font-size:16px;font-weight:600;">Name </h5>
<h5 style="font-size:16px;font-weight:600;">Email Id  </h5>
<h5 style="font-size:16px;font-weight:600;">Contact </h5>
<h5 style="font-size:16px;font-weight:600;">Referal Code </h5>
            </div> 
            
        <div class="col-sm-3">
<h5 style="font-size:16px;"><?php echo $name; ?></h5>
<h5 style="font-size:16px;"><?php echo $email; ?></h5>
<h5 style="font-size:16px;"><?php echo $contact; ?></h5>
<h5 style="font-size:16px;"><?php echo $referal_code; ?></h5>
            </div> 
            
            
           <div class="col-sm-2">
<h5 style="font-size:16px;font-weight:600;">Marketer  Id </h5>
<h5 style="font-size:16px;font-weight:600;">Profile Link 1  </h5>
<h5 style="font-size:16px;font-weight:600;">Profile Link 2 </h5>
<h5 style="font-size:16px;font-weight:600;">Experience  </h5>
            </div>          
            
             <div class="col-sm-3">
<h5 style="font-size:16px;"><?php echo $marketer_id; ?></h5>
<h5 style="font-size:16px;"><a href="<?php echo $social_link; ?>"> <?php echo $social_link; ?> </a></h5>
<h5 style="font-size:16px;">
    
    <?php
        if($social_link_2 != NULL)
        {
            ?>
            <a href="<?php echo $social_link_2; ?>"> <?php echo $social_link_2; ?> </a>
            <?php
        }
        else
        {
            ?>
           <a style="cursor:pointer;" data-toggle="modal" data-target="#Profile_Modal"> Add Another Profile Link Here </a>
           <?php
        }

?>
    
</h5>
<h5 style="font-size:16px;"> <?php echo $experience; ?></h5>
            </div>  
            </div>
 <?php
    }
} else {
    echo "Create your account!";
}
?>  
<center>
     <h4 style="font-size:22px;font-weight:600;"> Imarcat Coins :- <b><?php echo $coins; ?></b> <img src="super-coin.png"></h4>
     <h4 style="font-size:22px;font-weight:600;"> Rating :- <b><?php echo $rating ;?></b> /5.</h4>
</center>     
<div class="row">
<div class="col-sm-4">
    <br> <center><button style="background-color:#DC1313;border:0px;" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Password_Modal">Change Your password</button> </center>
</div>
<div class="col-sm-4">
   <br>  <center><button style="background-color:#DC1313;border:0px;" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Profile_Modal">Edit Your Profile</button> </center>
</div>
<div class="col-sm-4">
     <br> <center>	 <a href="index.php?logout='1'"><button style="background-color:#DC1313;border:0px;" class="btn btn-primary btn-sm">Logout</button></a> </center>
</div>
</div>
</div>
</div>
</div>



  <div class="modal fade" id="Password_Modal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title">Change password</h4>
        </div>

        <div class="modal-body">
<form method="post" action="change_password.php">
    <div style="display:none;" class="form-group">
  	  <label>Enter New Password</label>
  	  <input class="form-control" type="text" name="marketer_id"  value="<?php echo $marketer_id;?>" >
  	</div>
  	<div class="form-group">
  	  <label>Enter New Password</label>
  	  <input class="form-control" type="password" id="myInput" name="password_1" required>
  	</div>
	<div class="form-group">
  	  <label>Re-Enter New Password</label>
  	  <input class="form-control" type="password" id="myInput2" name="password_2" required>
  	</div>
  	<input type="checkbox" onclick="myFunction()">Show Password
  	  <br><center><button  type="submit" class="btn btn-primary" name="save_password">Save Password</button></center>
</form>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  
    <div class="modal fade" id="Profile_Modal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title">Edit Your Profile</h4>
        </div>

        <div class="modal-body">
  <form method="post" action="edit_profile.php">
  	<div class="form-group">
  	  <label>Name</label>
  	  <input  class="form-control" type="text" name="name" value="<?php echo $name; ?>">
  	</div>
	<div class="form-group">
  	  <label>Contact</label>
  	  <input  class="form-control" type="number" name="contact" value="<?php echo $contact; ?>">
  	</div>
  	<div class="form-group">
  	  <label>Email</label>
  	  <input  class="form-control" type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	<div class="form-group">
  	  <label>Social Profile Link(Linkedin/Facebook)</label>
  	  <input  class="form-control" type="text" name="social_link" value="<?php echo $social_link; ?>">
  	</div>
  	<div class="form-group">
  	  <label>Another Social Profile Link(Linkedin/Facebook)</label>
  	  <input  class="form-control" type="text" name="social_link_2" value="<?php echo $social_link_2; ?>" placeholder="Not Mandatory">
  	</div>
  	<div class="form-group">
  	  <label>Marketing Experience</label>
	  <div class="select">
	   <select  class="form-control" name="experience" required>
	    <option value="Begginner"> Begginner</option>
	    <option value="1-2 years"> 1-2 years  </option>
	    <option value="2-3 years"> 2-3 years  </option>
	    <option value="3-4 years"> 3-4 years   </option>
	    <option value="Over 4 years"> Over 4 years  </option>
	   </select>
	  </div>
  	</div>
  	 <br><center>
  	  <button type="submit" class="btn btn-primary" name="save_changes">Save Changes</button></center>
  </form>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


<br><br>


<div style="margin-top:5%;" class="container">
    <div style="padding:30px;padding:30px;margin-top:80px;border-left: 6px solid #DC1313;" class="card bg-light text-dark">
        <div style="font-size:18px;font-weight:800px;" class="card-body">
        <img style="width:50px;height:50px;" src="bi-icon-9.jpg"> <b> Dashboard : </b>  <br><br>
            <center>
            
            
              

<?php
               $sql3 = "SELECT * FROM applicants WHERE marketer_id ='$marketer_id'";
               $result3 = $conn->query($sql3);
               if ($result3->num_rows > 0) {
                   ?>
                    <div class="container">        
    <div class="table-responsive">          
  <table style="background-color:#770404;color:white;" class="table">
    <thead>
      <tr>
        <th>Company Name</th>
        <th>Product Name</th>
        <th>Mode of Marketing</th>
        <th>Status</th>
        <th>Rating</th>
      </tr>
    </thead>
    <tbody>
        <?php
               while($row3 = $result3->fetch_assoc()) {
                   $product_name = $row3["product_name"];
?>
        
        <tr>
        <td>
            <?php
               $sql4 = "SELECT * FROM ads_data WHERE product_name ='$product_name'";
               $result4 = $conn->query($sql4);
               if ($result4->num_rows > 0) {
               while($row4 = $result4->fetch_assoc()) {
                   $mode_of_selling =  $row4["mode_of_selling"];
            ?>
            
            
            <?php echo $row4["company_name"]; ?>
            
            <?php
    }
} else {
    echo "0 results";
}

?> 
        </td>
         <td><?php echo $row3["product_name"]; ?></td>
         <td><?php echo  $mode_of_selling; ?></td>
        <td>
            <?php
            if($row3["selected"] == 'yes')
            {
                ?>
                <h6 style="color:green"> Selected </h6>
                <?php
            }
            if($row3["selected"] == 'no')
            {
                 ?>
                <h6 style="color:blue"> Applied </h6>
                <?php
            }
             if($row3["selected"] == 'not')
            {
                 ?>
                <h6 style="color:red"> Not Selected </h6>
                <?php
            }
            ?>
        </td>
        <td>
            <?php
            if($row3["rating"] == NULL)
            {
                echo "-----";
            }
            if($row3["rating"] != 'NULL')
            {
                echo $row3["rating"];
            }
            ?>
        </td>
        </tr>
<?php
    }
} else {
    echo "Not applied for marketing yet..";
}

?> 
               
</tbody>
  </table>
</div>
</div>
</div>
</div> 

<br><br><br>


<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  
  var y = document.getElementById("myInput2");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>

</body>

   
   
    	

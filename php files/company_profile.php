<?php 
  session_start(); 

  if (!isset($_SESSION['company_id'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: company_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['company_id']);
  	header("location: company_login.php");
  }
  
  $company_id = $_SESSION['company_id'] 
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
<html>
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Roboto|Anton|Oswald|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,600,800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Roboto|Roboto+Condensed" rel="stylesheet">
	<title>Home</title>
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

.star{
    
    color: #ccc;
    cursor: pointer;
    transition: all 0.2s linear;
}
.star-checked{
    color: gold;
}
#result{
    display: none;
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
    
    
            
<div style="margin-top:5%;" class="container-fluid">
    <div style="padding:30px;margin-top:80px;border-left: 6px solid #DC1313;" class="card bg-light text-dark">
        <div class="card-body">
             <?php
               $sql = "SELECT * FROM company_data WHERE company_id = '$company_id'";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
                   $company_name = $row["company_name"]; 
                   $email = $row["email"]; 
    }
} else {
    echo "0 results";
}

?> 
    
                <div class="row">
                  <div class="col sm-3">
                              <center>
<?php
               $sql7 = "SELECT * FROM ads_data WHERE company_name = '$company_name'";
               $result7 = $conn->query($sql7);
               if ($result7->num_rows > 0) {
               while($row7 = $result7->fetch_assoc()) {
                   $image = $row7["image"];
    }
} else {
    echo "0 results";
}

?> 
               <img style="width:100px;height:100px;" src="upload/<?php echo $image; ?>">
                              </center>
                  </div>
                  
                  <div class="col sm-2">
                      <h5 style="font-size:16px;font-weight:600;"> Company Id </h5>
                      <h5 style="font-size:16px;font-weight:600;"> Compnay Name </h5>
                      <h5 style="font-size:16px;font-weight:600;"> Email Id </h5>
                  </div>
                    <div class="col sm-2">
                        <?php echo $_SESSION['company_id']; ?><br>
                        <?php echo $company_name; ?><br>
                           <?php echo $email; ?><br>
                  </div>
                  
                   <div class="col sm-5">
                        <h5 style="font-size:16px;font-weight:600;"> Hire Best Marketers According to Their Ratings Without Hesitation Freely Only From Imarcat</h5>
                            <center>	 <a href="index.php?logout='1'"><button style="background-color:#DC1313;border:0px;" class="btn btn-primary btn-sm">Logout</button></a> </center>
                  </div>  
                  
                </div>    
                
                <?php  if (isset($_SESSION['company_id'])) : ?>
        </div>
    </div>
</div>




    	  <?php
               $sql1 = "SELECT * FROM ads_data WHERE company_name = '$company_name' AND admin='yes'";
               $result1 = $conn->query($sql1);
               if ($result1->num_rows > 0) {
               while($row1 = $result1->fetch_assoc()) {
                   
                   ?>
                   
                   <div style="margin-top:5%;" class="container-fluid">
    <div style="padding:30px;margin-top:80px;border-left: 6px solid #DC1313;" class="card bg-light text-dark">
        <div class="card-body"><center>
                   
                   <?php
                   $product_name = $row1["product_name"];
                   ?>
                   <h4 style="color:#770404;font-weight:600"><center><?php echo $product_name; ?></center></h4><br>

        
        <?php
                   
               $sql2= "SELECT * FROM applicants WHERE product_name = '$product_name' AND selected!='not' ";
               $result2 = $conn->query($sql2);
               if ($result2->num_rows > 0) {
                      
                      
                      ?>                
 <div class="container-fluid">         
    <div class="table-responsive">          
  <table style="background-color:#770404;color:white;" class="table">
    <thead>
      <tr>
        <th>Reject</th> 
        <th>Marketer Id</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Marketed For</th>
        <th>Rating</th>
        <th>Hire</th>
      </tr>
    </thead>
    <tbody>
        
        <?php
               while($row2 = $result2->fetch_assoc()) {
                   
                $marketer_id = $row2["marketer_id"];
                   
    ?>      
    

      <tr>
        <td>
            <form  method="post" action="reject_marketer.php">
             <div style="display:none;" class="form-group">
                <label for="marketer_id" class="control-label">Marketer Id*</label>
                    <input type="hidden" id="marketer_id" name="marketer_id" value="<?php echo  $marketer_id;?>">                                                                                                     
            </div>
            <div style="display:none;" class="form-group">
                <label for="product_name" class="control-label">Product Name*</label>
                    <input type="hidden" id="product_name" name="product_name" value="<?php echo  $product_name;?>">                                                                                                     
            </div>
            <button class="btn btn-danger btn-sm" name="submit" id="Submit"> Reject </button>
            </form>    
        </td>      
        <td><?php echo $row2["marketer_id"]; ?></td>
        <td><?php echo $row2["name"]; ?></td>
        <td><?php echo $row2["contact"]; ?></td>
               <?php
               $sql4 = "SELECT * FROM marketers WHERE marketer_id ='$marketer_id'";
               $result4 = $conn->query($sql4);
               if ($result4->num_rows > 0) {
               while($row4 = $result4->fetch_assoc()) {
                   $coins = $row4["coins"];
                   $rating = $row4["rating"];
    }
} 
?> 
        <td><?php echo (($coins - 10)/50) ; ?> Products</td>
        <td><?php echo $rating; ?></td>
        <?php 
        if($row2["selected"]=="yes")
        {
        ?>
        <td><button class="btn btn-primary btn-sm" disabled> Selected </button>
        <?php
        if($row2["rating"] === NULL)
        {
        ?>
        <td>
            <input type="hidden" value="<?php echo $marketer_id; ?>" id="marketer_id">
            <input type="hidden" id="product_name" value="<?php echo  $product_name;?>">
 <div class="container123">
        <div id="star-container">
            
            <a href="rating_hired_marketer.php?marketer_id=<?php echo $marketer_id;?>&product_name=<?php echo $product_name; ?>&rating=1"> <i class="fa fa-star fa-2x star" id="star-1"></i></a>
            <a href="rating_hired_marketer.php?marketer_id=<?php echo $marketer_id;?>&product_name=<?php echo $product_name; ?>&rating=2"> <i class="fa fa-star fa-2x star" id="star-2"></i></a>
            <a href="rating_hired_marketer.php?marketer_id=<?php echo $marketer_id;?>&product_name=<?php echo $product_name; ?>&rating=3"> <i class="fa fa-star fa-2x star" id="star-3"></i></a>
            <a href="rating_hired_marketer.php?marketer_id=<?php echo $marketer_id;?>&product_name=<?php echo $product_name; ?>&rating=4"> <i class="fa fa-star fa-2x star" id="star-4"></i></a>
            <a href="rating_hired_marketer.php?marketer_id=<?php echo $marketer_id;?>&product_name=<?php echo $product_name; ?>&rating=5"> <i class="fa fa-star fa-2x star" id="star-5"></i></a>
            
        </div>
        <div id="result"></div>
    </div>
        </td>
        <?php
        }
        else
        {
        ?>
        <td><button class="btn btn-primary btn-sm" disabled> Rated Already </button></td>  
        </td>
        <?php
        }
        }
        else
        {
        ?>
        <td><form  method="post" action="company_approval.php">
                              <div style="display:none;" class="form-group">
                                  <label for="marketer_id" class="control-label">Marketer Id*</label>
                                  <input type="hidden" id="marketer_id" name="marketer_id" value="<?php echo  $marketer_id;?>">                                                                                                     
                              </div>
                              <div style="display:none;" class="form-group">
                                  <label for="product_name" class="control-label">Product Name*</label>
                                  <input type="hidden" id="product_name" name="product_name" value="<?php echo  $product_name;?>">                                                                                                     
                              </div>
                              <button class="btn btn-primary btn-sm" name="submit" id="Submit"> Hire </button>
                          </form></td>    
        <?php
        }
        ?>
      </tr>


<?php
               }
} else {
    echo "<h5><center>No Marketer Applied Yet...</center></h5>";
    echo "<br>";
}
        ?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
<?php            
    }
} else {
    echo "No Products are available";
    echo "<br>";
}

?> 
    	

    <?php endif ?>

</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
<script>

$(document).ready(function(){
    /*STAR RATING*/
 
    $('.star').on("mouseover",function(){
        //get the id of star
        var star_id = $(this).attr('id');
        switch (star_id){
            case "star-1":
                $("#star-1").addClass('star-checked');
                break;
            case "star-2":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                break;
            case "star-3":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                $("#star-3").addClass('star-checked');
                break;
            case "star-4":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                $("#star-3").addClass('star-checked');
                $("#star-4").addClass('star-checked');
                break;
            case "star-5":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                $("#star-3").addClass('star-checked');
                $("#star-4").addClass('star-checked');
                $("#star-5").addClass('star-checked');
                break;
        }
    }).mouseout(function(){
        //remove the star checked class when mouseout
        $('.star').removeClass('star-checked');
    });
 
     
    $('.star').click(function(){
        //get the stars index from it id
        var star_index = $(this).attr("id").split("-")[1],
            marketer_id = $("#marketer_id").val(),
            product_name = $("#product_name").val(),//store the product id in variable
            star_container = $(this).parent(), //get the parent container of the stars
            result_div = $("#result"); //result div
         
        $.ajax({
            url: "store_rating.php",
            type: "POST",
            data: {star:star_index,marketer_id:marketer_id,product_name:product_name},
            beforeSend: function(){
                star_container.hide(); //hide the star container
                result_div.show().html("Loading..."); //show the result div and display a loadin message
            },
            success: function(data){
                result_div.html(data);
            }
        });
    });
 
});

</script>	

</body>
</html>
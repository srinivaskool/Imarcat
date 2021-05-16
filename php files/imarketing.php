<?php
 $product_name=$_REQUEST['product_name'];
?>

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
 <style>
  .bg-company-red
 {
 background-color:black;
 } 
 </style>
 
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
               $sql = "SELECT * FROM ads_data WHERE product_name='$product_name';";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
               $company_email =$row["email"];
               $product_name=$row["product_name"];
               ?>
               
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


               
  <div style="margin-top:5%;color:white;" class="container">     
    <div class="row">

      <div class="col-sm-3 ">
  
      </div>
      
            <div class="col-sm-6 bg-info" style="padding:50px;background-color:#ffa500;" >
                
                 <?php  if (isset($_SESSION['marketer_id'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['marketer_id']; ?></strong></p>
    	
    	
    	<?php
    	$marketer_id = $_SESSION['marketer_id'];
    	?>
    	
    	
    	<?php
               $sql2 = "SELECT * FROM marketers WHERE marketer_id = '$marketer_id';";
               $result2 = $conn->query($sql2);
               if ($result2->num_rows > 0) {
               while($row2 = $result2->fetch_assoc()) {
        ?>
				
				<?php
				         $name =   $row2["name"];
				         $email =  $row2["email"];
				         $contact = $row2["contact"];
				         $social_link = $row2["social_link"];
				         $experience = $row2["experience"];
				?>
<?php
    }
} else {
    echo "0 results";
}

?> 		 

            <h3><center><?php echo  $product_name;?></center></h3>
            <br>
            I-marCat is platform for freelance marketers & business owners.
We are not charging anything from both the parties.<br><br>

                         <a id="bussintyfy">
                          <form  method="post" action="insert-data1.php">
                           <div style="display:none;" class="form-group">
                                  <label for="fullname" class="control-label">Full Name*</label>
                                  <input class="form-control" id="fullname" name="fullname" value="<?php echo  $name ?>" title="">
                                  <span class="help-block"></span>
                              </div>	
                               
                              <div style="display:none;" class="form-group">
                                  <label for="contact" class="control-label"> Contact Number*</label>
                                  <input type="number" class="form-control" id="contact" name="contact" value="<?php echo  $contact ?>">                                                                                                      
                                  <span class="help-block"></span>
                              </div>
							  
			      <div style="display:none;" class="form-group">
                                  <label for="email" class="control-label"> Email ID*</label>
                                  <input type="email" class="form-control" id="email" name="email" value="<?php echo  $email ?>">                                                                                                      
                                  <span class="help-block"></span>
                              </div>
                              
                              <div style="display:none;" class="form-group">
                                  <label for="profile" class="control-label">Social Profile Link(Linkedin/Facebook)*</label>
                                  <input class="form-control" id="profile" name="profile" value="<?php echo  $social_link ?>">                                                                                                      
                                  <span class="help-block"></span>
                              </div>
                              
                              <div style="display:none;" class="form-group">
                                  <label for="company_email" class="control-label">Company Email ID*</label>
                                  <input type="hidden" id="company_email" name="company_email" value="<?php echo  $company_email; ?>">                                                                                                     
                              </div>
                              
                              <div style="display:none;" class="form-group">
                                  <label for="product_name" class="control-label">Product Name*</label>
                                  <input type="hidden" id="product_name" name="product_name" value="<?php echo  $product_name;?>">                                                                                                     
                              </div>
                              
                              <div style="display:none;" class="form-group">
                                  <label for="product_name" class="control-label">Marketer ID*</label>
                                  <input type="hidden" id="marketer_id" name="marketer_id" value="<?php echo  $marketer_id;?>">                                                                                                     
                              </div>
                              
                              <div style="display:none;" class="form-group">
                                  <label for="product_name" class="control-label">Experience*</label>
                                  <input type="hidden" id="experience" name="experience" value="<?php echo  $experience;?>">                                                                                                     
                              </div>
                              
                              
                              
<?php
               $sql2 = "SELECT * FROM applicants WHERE marketer_id = '$marketer_id' AND product_name = '$product_name';";
               $result2 = $conn->query($sql2);
               if ($result2->num_rows > 0) {
               while($row2 = $result2->fetch_assoc()) {
                  
            if($row2["selected"] == 'yes')
            {
                ?>
                 <button  style="background-color: #20517a;color:white;" type="submit" class="btn btn-success123 btn-block" name="submit" id="Submit" disabled> Selected </button><br>
                <?php
            }
            if($row2["selected"] == 'no')
            {
                 ?>
                <button  style="background-color: #20517a;color:white;" type="submit" class="btn btn-success123 btn-block" name="submit" id="Submit" disabled>  Applied Already </button><br>
                <?php
            }
             if($row2["selected"] == 'not')
            {
                 ?>
                 <button  style="background-color: #20517a;color:white;" type="submit" class="btn btn-success123 btn-block" name="submit" id="Submit" disabled> Not Selected </button><br>
                <?php
            }

    }
} else {
    ?>
     <button style="background-color: #20517a;color:white;" type="submit" class="btn btn-success123 btn-block" name="submit" id="Submit">Ready For Marketing </button><br>
<?php

}

?> 		 





                          
                              
                              
                              
                              
                             
                            <h6 style="text-allign:center" id="message1"></h6>
                          </form>
                          
    <?php endif ?>
        
      </div>
      
      
            <div class="col-sm-3 ">
        
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

</body>
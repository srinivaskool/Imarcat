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
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Roboto|Roboto+Condensed" rel="stylesheet">
	<title>Rate Hired Marketer</title>
	    <style>
  body {
  background-image: url("bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  }
  </style>
</head>
<body>
    
    <?php
               $sql = "SELECT * FROM company_data WHERE company_id = '$company_id'";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
                   $company_name = $row["company_name"]; 
    }
} else {
    echo "0 results";
}

?> 

 <?php
               $sql1 = "SELECT * FROM ads_data WHERE company_name = '$company_name' AND admin='yes'";
               $result1 = $conn->query($sql1);
               if ($result1->num_rows > 0) {
               while($row1 = $result1->fetch_assoc()) {
                   
                   ?>
                   
                   <div style="margin-top:5%;" class="container">
    <div style="padding:30px;" class="card bg-light text-dark">
        <div class="card-body"><center>
                   
                   <?php
                   $product_name = $row1["product_name"];
                   ?>
                   
                    <h4><center><?php echo $product_name; ?></center></h4><br>
                   
 <div class="container">         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Marketer Id</th>
        <th>Product Name</th>
        <th>Marketer Name</th>
        <th>Rate</th>
      </tr>
    </thead>
    <tbody>
        
        <?php
                   
               $sql2= "SELECT * FROM applicants WHERE product_name = '$product_name' AND selected = 'yes' ";
               $result2 = $conn->query($sql2);
               if ($result2->num_rows > 0) {
               while($row2 = $result2->fetch_assoc()) {
                   
                $marketer_id = $row2["marketer_id"];
                   
    ?>      
    

      <tr>
        <td><?php echo $row2["marketer_id"]; ?></td>
        <td><?php echo $product_name ?></td>
        <td><?php echo $row2["name"]; ?></td>
        <?php 
        if($row2["rating"] === NULL)
        {
        ?>
        <td>
            <form  method="post" action="rating_hired_marketer.php">
            <input type="int" name="rating" id="rating" placeholder="For 1 to 5">
             <div style="display:none;" class="form-group">
                <label for="marketer_id" class="control-label">Marketer Id*</label>
                    <input type="hidden" id="marketer_id" name="marketer_id" value="<?php echo  $marketer_id;?>">                                                                                                     
            </div>
            <div style="display:none;" class="form-group">
                <label for="product_name" class="control-label">Product Name*</label>
                    <input type="hidden" id="product_name" name="product_name" value="<?php echo  $product_name;?>">                                                                                                     
            </div>
            <button class="btn btn-primary" name="submit" id="Submit"> Submit </button>
            </form>
        </td>
        <?php
        }
        else
        {
        ?>
        <td><button class="btn btn-primary" disabled> Rated Already </button></td>  
      </tr>
      
          
        <?php
        }
        ?>


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
    
</body>
</html>
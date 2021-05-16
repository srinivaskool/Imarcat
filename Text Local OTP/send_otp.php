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
               $sql2 = "SELECT * FROM ads_data WHERE product_name='$product_name';";
               $result2 = $conn->query($sql2);
               if ($result2->num_rows > 0) {
               while($row2 = $result2->fetch_assoc()) {

               require('textlocal.class.php');
               require('credentials.php');
         $textlocal = new Textlocal(false,false,'PMji+g5GWAw-nSGwyU6SgutNrWNn3VFiXg9OEFuRnp');
         $numbers = array($row2['contact']);
         $sender = 'TXTLCL';
	 $otp = mt_rand(100000,999999);
         $message = "Hello ".$row2['name']." The Otp is ". $otp;
         try {
              $result = $textlocal->sendSms($numbers, $message, $sender);
			  setcookie('otp',$otp);
			  echo "OTP sent succesfully";
             } 
		 catch (Exception $e) {
              die('Error: ' . $e->getMessage());
                              }
       echo ("<script LANGUAGE='JavaScript'>window.location.href='http://imarcat.com/OTP/index.php?product_name=$product_name';</script>");
?>


<?php
}
}
?>
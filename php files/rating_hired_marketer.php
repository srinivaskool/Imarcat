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
$marketer_id = $_REQUEST['marketer_id'];
$product_name = $_REQUEST['product_name'];

$rating = $_REQUEST['rating'];

echo "Wait. You are getting Redirected.";

$qry="UPDATE applicants SET rating = '$rating' WHERE marketer_id = '$marketer_id' AND product_name = '$product_name'";


if(mysqli_query($conn, $qry)){
    header('Location:marketer_update_rating.php?marketer_id='.$marketer_id);
          	}
     else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
?> 


  









					  
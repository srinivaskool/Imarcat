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
$marketer_id = $_POST['marketer_id'];
$product_name = $_POST['product_name'];




               $sql = "SELECT * FROM marketers WHERE marketer_id='$marketer_id'";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
                   
                   $email = $row["email"];
                   $name = $row["name"];
               }
} else {
    echo "0 results";
}


$qry="UPDATE applicants SET selected = 'not',rating=NULL WHERE marketer_id = '$marketer_id' AND product_name = '$product_name'";

	if(mysqli_query($conn, $qry)){
	    
   echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Rejected The Marketer');
    window.location.href='http://imarcat.com/company_profile.php';
    </script>");
     }
     else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 ?>











					  
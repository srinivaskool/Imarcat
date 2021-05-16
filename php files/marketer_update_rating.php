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


 $sql2 = "SELECT * FROM applicants WHERE marketer_id = '$marketer_id'";
               $result2 = $conn->query($sql2);
               if ($result2->num_rows > 0) {
               while($row2 = $result2->fetch_assoc()) {
                   
                   $sum = $sum + $row2["rating"];
                   
                   if($row2["rating"] !== NULL)
                   {
                       $num = $num + 1;
                   }
                   
                   $original_rating = $sum/$num;
                   
                   $original_rating = round($original_rating, 2);
               }
} else {
    echo "0 results";
}

$qry2="UPDATE marketers SET rating = '$original_rating' WHERE marketer_id = '$marketer_id'";

if(mysqli_query($conn, $qry2)){
   echo ("<script LANGUAGE='JavaScript'>
   window.alert('Succesfully Rated The Marketer');
    window.location.href='http://imarcat.com/company_profile.php';
    </script>");
    }
     else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
				
         
?> 












					  
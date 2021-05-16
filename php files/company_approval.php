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
                   $coins = $row["coins"];
                   $updated_coins = $coins + 50;
               }
} else {
    echo "0 results";
}


$qry="UPDATE applicants SET selected = 'yes' WHERE marketer_id = '$marketer_id' AND product_name = '$product_name'";

$qry2="UPDATE marketers SET coins = '$updated_coins' WHERE marketer_id = '$marketer_id'";


            $to=$email;
            $subject=" You Are Hired !!! ";
            $body="
                  <html>
                      <body>
                         <br><center> Hi  $name .<br> You are hired for marketing $product_name from Imarcat. Cheers !!!<br>
                         50 coins are added to your account.So now you have $updated_coins coins.
                         <br></center>
                      </body>
                  </html>
                  ";          
             $headers = "MIME-Version: 1.0" . "\r\n";
             $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            mail($to,$subject,$body,$headers); 
                   
	
	if(mysqli_query($conn, $qry)){
	    
	    	if(mysqli_query($conn, $qry2)){
   echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Hired The Marketer');
    window.location.href='http://imarcat.com/company_profile.php';
    </script>");
     }
     }
     else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 ?>











					  
<?php
session_start();

// initializing variables
$name = "";
$contact   = "";
$email = "";
$social_link = "";
$experience = "";
$ref_code = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'adminboys12345', 'root@123', 'imarcat');


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

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $social_link = mysqli_real_escape_string($db, $_POST['social_link']);
  $experience = mysqli_real_escape_string($db, $_POST['experience']);
  $ref_code = mysqli_real_escape_string($db, $_POST['ref_code']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($social_link)) { array_push($errors, "Social Profile Link is required"); }
  if (empty($contact)) { array_push($errors, "Contact is required"); }
  if (empty($experience)) { array_push($errors, "Experience is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM marketers WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
	  
	function getRandomWord($len = 8) {
    $word = array_merge(range('a', 'z'), range('A', 'Z'), range(0,9));
    shuffle($word);
    return substr(implode($word), 0, $len);}

    $password_1 =  getRandomWord();
    
	function getRandomCode($len = 6) {
    $code = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($code);
    return substr(implode($code), 0, $len);}    
    
    $referal_code = getRandomCode();
    
               $sql = "SELECT * FROM marketers WHERE referal_code='$ref_code'";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {

            $original_marketer_id = $row['marketer_id'];
            $original_coins = $row['coins'];
            $ref_id_true = 1;
            $original_coins = $original_coins + 10;
            
        $qry2 = "UPDATE marketers SET coins = '$original_coins' WHERE marketer_id='$original_marketer_id'";
			  
  	mysqli_query($db, $qry2);
            
    }
} else {
    echo "Referal Code is not Correct";
    $ref_id_true = 0;
}

    
	
  	$password = md5($password_1);//encrypt the password before saving in the database
	
	$comon_string = "Imar";
	$marketer_id = $comon_string.(rand(100000,999999));
	
	if($ref_id_true)
	{
	        $coins = 15;
	}
	else
	{
	        $coins = 10;
	}
	
    $rating = 5;
  	$query = "INSERT INTO marketers(name, email, contact ,social_link, experience,marketer_id,password,referal_code,coins,rating) 
  			  VALUES('$name', '$email', '$contact', '$social_link','$experience','$marketer_id','$password','$referal_code','$coins','$rating')";
			  
  	mysqli_query($db, $query);
  	
  	$to=$email;
            $subject=" Your Login Credentials";
            $body="
                   <html>
                       <body>
                         <center> Hi <?php echo $name;?> your Login Credentials are :</center>
                           <table>
                               <tr>Marketer Id
                                   <td>$marketer_id</td>
                               </tr>
                                <tr>Password
                               <td>$password_1</td>
                               </tr>
                           </table><br><br>
                       </body>
                   </html>
                  ";          
             $headers = "MIME-Version: 1.0" . "\r\n";
             $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            mail($to,$subject,$body,$headers); 

  	
  	header('location: login_credentials_generator.php');
  }
}

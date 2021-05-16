
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
  body {
  background-image: url("bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  }
  </style>
</head>
<body>
	  


<div style="margin-top:5%;" class="container">
    <div style="padding:30px;" class="card bg-light text-dark">
        <div class="card-body">
            <center>
                  <h4><center>	Done. The Credentials will be mailed to company email id. Please login to your account to hire the marketers.  </h4>
                  <br>
                  <h5><a href="company_login.php">Login To Your Account</a></h5>
                  </center>
            </center>               
        </div> 
    </div>  
</div>
            
    
<?php

if (isset($_POST['reg_company'])) {
    
$db = mysqli_connect('localhost', 'adminboys12345', 'root@123', 'imarcat');

$company_name = mysqli_real_escape_string($db, $_POST['company_name']);
$email = mysqli_real_escape_string($db, $_POST['email']);


    function getRandomWord($len = 8) {
    $word = array_merge(range('a', 'z'), range('A', 'Z'), range(0,9));
    shuffle($word);
    return substr(implode($word), 0, $len);
}

    $password_1 =  getRandomWord();
	
  	$password = md5($password_1);
	
	$comon_string = "Imar";
	$company_id = $comon_string.(rand(1000000,9999999));
	

  	$query = "INSERT INTO company_data (company_name,email,company_id,password) VALUES ('$company_name','$email','$company_id','$password')";
			  
  	mysqli_query($db, $query);
  	
      	$to=$email;
            $subject=" Your Login Credentials";
            $body="
                   <html>
                       <body>
                         <center> Your Login Credentials are :</center>
                           <table>
                               <tr>Company Id
                                   <td>$company_id</td>
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
  	
  	echo "<script type='text/javascript'>
  	alert('Successful.');
  	</script>";
  	
}
?>

   
    	

</body>

   





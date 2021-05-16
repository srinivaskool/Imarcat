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
$fullname=$_POST['fullname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$company_email=$_POST['company_email'];
$product_name=$_POST['product_name'];
$profile=$_POST['profile'];
$marketer_id = $_POST['marketer_id'];
$experience = $_POST['experience'];
$selected = "no";

$qry="insert into applicants (marketer_id,name,email,contact,profile,experience,product_name,company_email,selected)values('".$marketer_id."','".$fullname."','".$email."','".$contact."','".$profile."','".$experience."','".$product_name."','".$company_email."','".$selected."')";

 $to=$company_email;
            $subject="Someone Wants To Work To Your Company ";
            $body="
                   <html>
                       <body>
                         <center> Information about the Marketer :</center>
                           <table>
                               <tr>Marketer Id
                                   <td>$marketer_id</td>
                               </tr>
                               <tr>Name
                                   <td>$fullname</td>
                               </tr>
                                <tr>Email Id
                               <td>$email</td>
                               </tr>
                               <tr>Contact Number
                                   <td>$contact</td>
                               </tr>
                               <tr>Experience
                                   <td>$experience</td>
                               </tr>
                               <tr>Profile
                                   <td>$profile</td>
                               </tr>
                                <tr>Product Name
                                   <td>$product_name</td>
                               </tr>
                           </table><br><br>
                       </body>
                   </html>
                  ";          
             $headers = "MIME-Version: 1.0" . "\r\n";
             $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            mail($to,$subject,$body,$headers); 
	
	
	
	if(mysqli_query($conn, $qry)){
   echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sucessfully Submited ...(Our Admin Will get Back To You)');
    window.location.href='http://imarcat.com';
    </script>");
     } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



 ?>











					  
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
$email_id = $_POST['email_id'];
?>

<?php
if(isset($_POST['forgot_password']))
{
    
               $sql3 = "SELECT * FROM marketers WHERE email = '$email_id'";
               $result3 = $conn->query($sql3);
               if ($result3->num_rows > 0) {
               while($row3 = $result3->fetch_assoc()) {
                   $marketer_id = $row3['marketer_id'];
            
    function getRandomWord($len = 8) {
    $word = array_merge(range('a', 'z'), range('A', 'Z'), range(0,9));
    shuffle($word);
    return substr(implode($word), 0, $len);}    
                
            $password_1 =  getRandomWord();
	
  	        $password = md5($password_1);   
                
    $qry="UPDATE marketers SET password = '$password' WHERE marketer_id = '$marketer_id'";
            

    if(mysqli_query($conn, $qry))
    {
                    $to=$email_id;
            $subject=" Your Login Credentials";
            $body="
                   <html>
                       <body>
                         <center> Your Login Credentials are :</center>
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
        
        
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Credentials sucessfully sent to your Email Id');
    window.location.href='login.php';
    </script>");
    }
     else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
         
     }
          
    }
} else 
{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('There is no Imarcat account linked to this Email Id');
    window.location.href='login.php';
    </script>");
}

    
   
}
?> 


  


<?php 
  session_start(); 

  if (!isset($_SESSION['marketer_id'])) {

    $_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['marketer_id']);
  	header("location: login.php");
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
$marketer_id = $_SESSION['marketer_id'];
?>


<?php
$password_1 = $_POST['password_1'];
$password_2 = $_POST['password_2'];

if(isset($_POST['save_password']))
{
    if($password_1 == $password_2)
    {
        
        
        $password = md5($password_1);
        $qry="UPDATE marketers SET password = '$password' WHERE marketer_id = '$marketer_id'";
    
    if(mysqli_query($conn, $qry))
    {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Password changed sucessfully');
    window.location.href='profile.php';
    </script>");
    }
     else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);}
        
    }
    else
    {
          echo ("<script LANGUAGE='JavaScript'>
    window.alert('Passwords did not match');
    window.location.href='profile.php';
    </script>");
    }
}
?> 


  







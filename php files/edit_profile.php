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

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$experience = $_POST['experience'];
$social_link = $_POST['social_link'];
$social_link_2 = $_POST['social_link_2'];



if(isset($_POST['save_changes']))
{

    $qry="UPDATE marketers SET name = '$name',email = '$email',contact = '$contact',experience = '$experience',social_link = '$social_link',social_link_2 = '$social_link_2' WHERE marketer_id = '$marketer_id';";
    
    if(mysqli_query($conn, $qry))
    {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sucessfully Updated Your Profile');
    window.location.href='profile.php';
    </script>");
    }
     else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);}
        
}
?> 


  







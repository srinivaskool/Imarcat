<?php 
  session_start(); 

  if (!isset($_SESSION['marketer_id'])) {
      
    $_SESSION['product_name'] = $product_name;
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
$marketer_id = $_SESSION['marketer_id'];
?>

<?php

$link = mysqli_connect("localhost", "adminboys12345", "root@123", "imarcat");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
        $image = $_POST["image"];
        
    $fileinfo1=PATHINFO($_FILES["image"]["name"]);
	$newFilename1=$fileinfo1['filename'].'.'.$fileinfo1['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"profile_images/" . $newFilename1);
	$location1="profile_images/" . $newFilename1;
	
	
$qry="UPDATE marketers SET profile_image = '$location1' WHERE marketer_id = '$marketer_id';";

	if(mysqli_query($link, $qry)){
    echo "Profile Picture Updated Successfully.";
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Profile Picture Updated Successfully');
    window.location.href='http://imarcat.com/profile.php';
    </script>");
    
     } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
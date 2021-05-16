<?PHP
$server="localhost";
$username="adminboys12345";
$password="root@123";
$db="imarcat";

$conn= mysqli_connect($server,$username,$password,$db);
?>

<?php
    
    $arg1=$_REQUEST["name"];
    $arg2=$_REQUEST["email"];
    $arg3=$_REQUEST["photoUrl"];
    
$qry="insert into credentials(name,email,photoUrl)values('".$arg1."','".$arg2."','".$arg3."')";

if(mysqli_query($conn,$qry)===true)
	{
		echo "SignUp successfully";  
		echo "<script>window.location.href = 'http://www.imarcat.com/google_login/mainpage.php'</script>";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>
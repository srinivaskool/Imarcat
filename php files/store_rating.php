<?php
        $star = htmlentities($_POST['star']);
        $marketer_id = htmlentities($_POST['marketer_id']);
        $product_name = htmlentities($_POST['product_name']);
        
        echo "Rating...";

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

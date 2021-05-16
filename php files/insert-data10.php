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
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$description=$_POST['description'];

if($fullname!=""&&$email!==""&&$description!="")
{
$stmt = $DBcon->prepare("INSERT INTO contact_us
(
    fullname,
    email,
    description
    
) VALUES
(
    :fullname,
    :email,
    :description
    
)");

$stmt->bindparam(':fullname', $fullname);
$stmt->bindparam(':email', $email);
$stmt->bindparam(':description', $description);

}

if($stmt->execute())
{
  $res=" Submitted Successful";
  echo json_encode($res);
}
else {
  $error="Not Inserted,Some Probelm occur.";
  echo json_encode($error);
}
 ?>

						  
						  
<?php
include('db.php');
$name=$_POST['name'];
$phone_number=$_POST['phone_number'];
$email=$_POST['email'];
$query=$_POST['query'];

if($name!=""&&$phone_number!=""&&$email!=""&&$query!="")
{
$stmt = $DBcon->prepare("INSERT INTO contact_details
(
    name,
    phone_number,
    email,
    query
) VALUES
(
    :name,
    :phone_number,
    :email,
    :query
)");



$stmt->bindparam(':name', $name);
$stmt->bindparam(':phone_number', $phone_number);
$stmt->bindparam(':email', $email);
$stmt->bindparam(':query', $query);


}

if($stmt->execute())
{
  $res="Thanks For Submitting Your Query.Will Get Back To You Soon";
  echo json_encode($res);
}
else {
  $error="Not Inserted,Some Probelm occur.";
  echo json_encode($error);
}



 ?>
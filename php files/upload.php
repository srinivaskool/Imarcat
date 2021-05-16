<?php

	$link = mysqli_connect("localhost", "adminboys12345", "root@123", "imarcat");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
	$fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'].'.'.$fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
	$location="upload/" . $newFilename;
	
	$fileinfo2=PATHINFO($_FILES["image2"]["name"]);
	$newFilename2=$fileinfo2['filename'].'.'.$fileinfo2['extension'];
	move_uploaded_file($_FILES["image2"]["tmp_name"],"upload/" . $newFilename2);
	$location2="upload/" . $newFilename2;
	
	
	$fileinfo3=PATHINFO($_FILES["image3"]["name"]);
	$newFilename3=$fileinfo3['filename'].'.'.$fileinfo3['extension'];
	move_uploaded_file($_FILES["image3"]["tmp_name"],"upload/" . $newFilename3);
	$location3="upload/" . $newFilename3;
 
	$sql="insert into image_tb (img_location) values ('$location')";
	
	if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
     } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sucessfully Submited ...(Our Admin Will get Back To You)');
    window.location.href='http://imarcat.com/new1.php';
    </script>");
?>
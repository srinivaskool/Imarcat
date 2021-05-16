<?php

	$link = mysqli_connect("localhost", "adminboys12345", "root@123", "imarcat");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
        $name=$_POST["name"];
        $email=$_POST["email"];

        
	$fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'].'.'.$fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload100/" . $newFilename);
	$location="upload100/" . $newFilename;
	
	$fileinfo2=PATHINFO($_FILES["image2"]["name"]);
	$newFilename2=$fileinfo2['filename'].'.'.$fileinfo2['extension'];
	move_uploaded_file($_FILES["image2"]["tmp_name"],"upload100/" . $newFilename2);
	$location2="upload100/" . $newFilename2;
	
	
	$fileinfo3=PATHINFO($_FILES["image3"]["name"]);
	$newFilename3=$fileinfo3['filename'].'.'.$fileinfo3['extension'];
	move_uploaded_file($_FILES["image3"]["tmp_name"],"upload100/" . $newFilename3);
	$location3="upload100/" . $newFilename3;
 
	
	
$qry="insert into single_form(name,email,image,image2,image3)values('".$name1."','".$email."','".$location."','".$location2."','".$location3."')";
	
	
	
	if(mysqli_query($link, $qry)){
    echo "Records added successfully.";
     } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sucessfully Submited ...(Our Admin Will get Back To You)');
    window.location.href='http://imarcat.com/single_page_form.php';
    </script>");
?>
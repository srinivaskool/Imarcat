<?php

	$link = mysqli_connect("localhost", "adminboys12345", "root@123", "imarcat");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
        $watermark=$_POST["watermark"];
        $font_size=$_POST["font_size"];
        $watermark_place=$_POST["watermark_place"];
        $watermark_color=$_POST["watermark_color"];
        $font_style=$_POST["font_style"];
        $logo_place=$_POST["logo_place"];
        
        
        
	$fileinfo1=PATHINFO($_FILES["logo"]["name"]);
	$newFilename1=$fileinfo1['filename'].'.'.$fileinfo1['extension'];
	move_uploaded_file($_FILES["logo"]["tmp_name"],"watermark/" . $newFilename1);
	$location1="watermark/" . $newFilename1;
	
 
	$fileinfo2=PATHINFO($_FILES["video"]["name"]);
	$newFilename2=$fileinfo2['filename'].'.'.$fileinfo2['extension'];
	move_uploaded_file($_FILES["video"]["tmp_name"],"watermark/" . $newFilename2);
	$location2="watermark/" . $newFilename2;
	
$qry="insert into join_marketman(fullname,email,description,image)values('".$watermark."','".$font_size."','".$watermark_place."','".$watermark_color."','".$font_style."','".$logo_place."','".$location1."','".$location2."')";
	
	
	
	if(mysqli_query($link, $qry)){
    echo "Records added successfully.";
     } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sucessfully Submited ...(Our Admin Will get Back To You)');
    window.location.href='http://imarcat.com/';
    </script>");
?>
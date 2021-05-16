<!doctype html>

<?php

include_once("dbconnect.php");
if(isset($_POST["submit"]))
{
    $arg1=$_POST["category"];
    $arg2=$_POST["company_name"];
    $arg3=$_POST["product_name"];
    $arg4=$_POST["food"];
    $arg5=$_POST["travel"];
    $arg6=$_POST["accomidation"];
    $arg7=$_POST["incentive"];
    $arg8=$_POST["description"];
    $arg9=$_POST["mode_of_selling"];
    $arg10=$_POST["training"];
    $arg11=$_POST["person_name"];
    $arg12=$_POST["contact"];
    $arg13=$_POST["email"];
    $arg14=$_POST["admin"];
    $img=$_FILES["fileToUpload"]["name"];
    $img2=$_FILES["fileToUpload2"]["name"];
    $img3=$_FILES["fileToUpload3"]["name"];
    $targetimg=rename($img,$arg3);
    
    
        $fileinfo=PATHINFO($_FILES["fileToUpload"]["name"]);
	$newFilename=$fileinfo['filename'].'.'.$fileinfo['extension'];
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"upload/" . $newFilename);
	$location="upload/" . $newFilename;
	
	$fileinfo2=PATHINFO($_FILES["fileToUpload2"]["name"]);
	$newFilename2=$fileinfo2['filename'].'.'.$fileinfo2['extension'];
	move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"],"upload/" . $newFilename2);
	$location2="upload/" . $newFilename2;
	
	
	$fileinfo3=PATHINFO($_FILES["fileToUpload3"]["name"]);
	$newFilename3=$fileinfo3['filename'].'.'.$fileinfo3['extension'];
	move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"],"upload/" . $newFilename3);
	$location3="upload/" . $newFilename3;
    
    
       $to="ajachintu@gmail.com";
            $subject="imarcat - Marketing Man is ready to market your product ";
            $body="
                   <html>
                       <body>
                         <center> These Are The given Details :</center>
                           <table>
                               <tr>Category
                                   <td>$arg1</td>
                               </tr>
                                <tr>Company Name
                               <td>$arg2</td>
                               </tr>
                                <tr>Product Name
                               <td>$arg3</td>
                               </tr>
                               <tr>Description
                                   <td>$arg8</td>
                               </tr>
                                <tr>Person Name
                                   <td>$arg11</td>
                               </tr>
                               <tr>Contact Number
                                   <td>$arg12</td>
                               </tr>
                                <tr>Email Id
                               <td>$arg13</td>
                               </tr>
                                <tr>Incentive
                               <td>$arg7</td>
                               </tr>
                               <tr>Mode Of Selling
                                   <td>$arg9</td>
                               </tr>
                           </table><br><br>
                       </body>
                   </html>
                  ";          
             $headers = "MIME-Version: 1.0" . "\r\n";
             $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            mail($to,$subject,$body,$headers); 
    
    
    

$qry="insert into ads_data(category,company_name,product_name,food,travel,	accomidation,incentive,description,mode_of_selling,training,name,contact,email,image,image2,image3,admin)values('".$arg1."','".$arg2."','".$arg3."','".$arg4."','".$arg5."','".$arg6."','".$arg7."','".$arg8."','".$arg9."','".$arg10."','".$arg11."','".$arg12."','".$arg13."','".$img."','".$img2."','".$img3."','no')";

if(mysqli_query($conn,$qry)===true)
	{
		echo "Update successfully";
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sucessfully Submited.Please Complete Mobile Verification.');
    window.location.href='http://imarcat.com/OTP/send_otp.php?product_name=$arg3';
    </script>");
	}
	else
	{
		echo mysqli_error($conn);
	}
}
?>

<html lang="en">
 <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
  
  <meta name="Generator" content="EditPlus
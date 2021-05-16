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
 $category=$_REQUEST['category'];
 $type=$_REQUEST['type'];
 $city=$_REQUEST['city'];
 $locality=$_REQUEST['locality'];
 $min_budget=$_REQUEST['min_budget'];
 if($min_budget=="")
 {
     $min_budget = 1;
 }
 $max_budget=$_REQUEST['max_budget'];
 if($max_budget=="")
 {
     $max_budget = 100000;
 }
 ?>


 <?php
               $sql = "SELECT * FROM property WHERE category LIKE '%".$category."%'  AND type='$type' AND city='$city' AND ( locality LIKE '%".$locality."%' ) AND ( budget BETWEEN '$min_budget' AND '$max_budget' );";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
               ?>
              
               
	  <h4><b> Name is <?php echo  $row["name"]; ?></b></h4>
          <h4><b> Square feet is <?php echo  $row["square_feet"]; ?></b></h4>
          <h4><b> Budget is <?php echo  $row["budget"]; ?></b></h4>
          
        <?php  
          
          }
          }
          else
          {
          echo"No Results Found";
          }
          
          ?>

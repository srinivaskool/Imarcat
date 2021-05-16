<!DOCTYPE html>
<html>
<head>
  <title>Register The Company</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register The Company. The Company email id will receive a mail with the credentials </h2>
  </div>
	
  <form class="form" method="post" action="reg_comp.php">
  	<div class="input-group">
  	  <label>Company Name</label>
  	  <input type="text" name="company_name" value="" required>
  	</div>
  		<div class="input-group">
  	  <label>Company Email</label>
  	  <input type="email" name="email" value="" required>
  	</div>
 <br>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_company">Register The Company</button>
  	</div>
  </form>
</body>
</html>
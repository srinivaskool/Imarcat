 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>I-MARCAT</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Roboto|Anton|Oswald|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
	  <style>
.bg-company-red
 {
 background-color:black;
 } 
	  </style>
     <body>
     <nav style="padding:0px;" class="navbar navbar-expand-sm bg-company-red navbar-dark fixed-top"> 
 <a style="font-family: 'K2D', sans-serif;color:#ffb600;padding-left:75px;font-size: 35px;font-weight: bold;text-transform: uppercase;" class="navbar-brand" href="http://imarcat.com"><b>&nbsp;i-marcat&nbsp;</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse"  id="collapsibleNavbar">
  <ul style="padding-right:75px;" class="navbar-nav ml-auto">
   <li class="nav-item">
      <a class="nav-link" href="http://imarcat.com">&nbsp;Home&nbsp;</a>
   </li>
  </ul>
    </div>  
</nav>




     <div class="container">     
    <div class="row">
      <div class="col-sm-2">
      </div>
  <div style="background-color:#E7E7E7;" class="col-sm-8">
     <br><br><br><br>
      <center><h3> Upload The Pictures For Revalidation (Step 2/2)</h3></center>
      <br>
      <form method="POST" action="upload.php" enctype="multipart/form-data">	
      Upload The Company Logo :&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;<input type="file" name="image"><br><br>
      Upload The Product Image :	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="image2"><br><br>
      Upload The Product Brochure :	&nbsp;<input type="file" name="image3"><br><br>
      
   
      <hr> 
      Here comes the terms and conditions like I-marCat is platform for freelance marketers & business owners. We are not charging anything from both the parties.
      <hr>

        <input type="checkbox"  onchange="document.getElementById('sendNewSms').disabled = !this.checked;" />By Ticking The Checbox You Agree To Our Terms And Conditions
      <br><br>
          <center><input class="btn btn-primary"  type="submit"  class="inputButton"  value=" Submit " /></center>
      
      </form>
      </div>
       <div class="col-sm-2">
      </div>
    </div>
   </div>
   
	</body>

<?PHP
$server="localhost";
$username="adminboys12345";
$password="root@123";
$db="imarcat";

$conn= mysqli_connect($server,$username,$password,$db);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
.btn {
  width: 30%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  cursor:pointer;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

.google {
  background-color: #dd4b39;
  color: white;
}

</style>


<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyC7yxvhDAUAEpyIOVVq1WFEvckoIQ_KAi4",
    authDomain: "login-edbac.firebaseapp.com",
    databaseURL: "https://login-edbac.firebaseio.com",
    projectId: "login-edbac",
    storageBucket: "",
    messagingSenderId: "29751944644"
  };
  firebase.initializeApp(config);
</script>


<a><button onclick = "googleSignin()" class="google btn"><i class="fa fa-google fa-fw"></i> Login with Gmail</button></a>

<a><button onclick = "googleSignOut()" class="google btn"><i class="fa fa-google fa-fw"></i> Logout with Gmail</button></a>

<script>
var provider = new firebase.auth.GoogleAuthProvider();
var name, email, photoUrl;
function googleSignin() {
   firebase.auth()
   
   .signInWithPopup(provider).then(function(result) {
      var token = result.credential.accessToken;
      var user = result.user;
		
      console.log(token)
      console.log(user)
      
         var user = firebase.auth().currentUser;
   
   if (user != null) {
     user.providerData.forEach(function (profile) {
       window.location.href = 'http://www.imarcat.com/google_login/check.html';
     
    console.log("Sign-in provider: " + profile.providerId);
    console.log("  Provider-specific UID: " + profile.uid);
    consule.log("  Name: " + profile.displayName);
    console.log("  Email: " + profile.email);
    console.log("  Photo URL: " + profile.photoURL);
   
     name = profile.displayName;
     email = profile.email;
     photoUrl = profile.photoURL;
     
     document.write(name); 
    
    $.ajax({
            type: "POST",
            url: "insert_user_data.php",
            data: {
			
        name:name,
        email:email,
	photoUrl:photoUrl
			
			},
            dataType: "JSON",
            success: function(data) {
            alert("Sucessful");
            },
            error: function(err) {
            alert("All Required Fields Are Not Entered");
            }
        });
                    
 
    });

    
   }
      
   }).catch(function(error) {
      
   });
   

 

}

function googleSignOut() {
   firebase.auth().signOut()
	
   .then(function() {
      console.log('Signout Succesfull')
   }, function(error) {
      console.log('Signout Failed')  
   });
}
</script>


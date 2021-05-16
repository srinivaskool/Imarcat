<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
<script>
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
      var name = firebase.auth().currentUser.displayName;
      console.log(name);
  } else {
    window.location.href = 'http://www.imarcat.com/google_login/index.php';
  }
});
</script>
</head>



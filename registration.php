<!DOCTYPE html>
<html>
<title>Movie Recommendation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="page_2.css">
</head>
<body>
<?php
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
    $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string

    $password = stripslashes($_REQUEST['psw']);

    $age = stripslashes($_REQUEST['age']);

    $country = stripslashes($_REQUEST['country']);
    $gender = stripslashes($_REQUEST['gender']);


    //Checking is user existing in the database or not
       $url = 'https://f909b9e4.eu-gb.apigw.appdomain.cloud/moviegenie/signup';
       $data = array('action' => 'signup', 'user_id' => $username, 'password' => $password, 'age'=> $age, 'country'=> $country, 'gender'=> $gender);
       $options = array(
        'http' => array(
        'header'  => "Content-type: application/json",
        'method'  => 'POST',
        'content' => json_encode($data),
    )
);

$context  = stream_context_create($options);
$result = file_get_contents( $url, false, $context );
$response = json_decode( $result );
if($response->Status == 200){
   $msg = $msg = $response->Success->message; 
    echo "<script>
    alert('$msg');
    window.location = 'login.php'</script>"; 


//     "<div class='form'>
// <h3> Successful</h3>
// <br/>Click here to <a href='login.php'>Login</a></div>";
    // header("Location: index.php");
} else{
  $msg = $msg = $response->Error->message; 
    echo "<script>
    alert('$msg');
    window.location = 'registration.php'</script>"; 




//     "<div class='form'>
// <h3>SOme error</h3>
// <br/>To go back to <a href='registration.php'>Registration</a></div>
// <br/>Click here to <a href='login.php'>Login</a></div>";
    }
}else{
?>
<nav class="navbar navbar-expand-sm navbar-dark">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link"  href="index.php" style="font-weight: bolder; color: white; font-family: Helvetica, sans-serif, fantasy; font-size: 1em;opacity: 0.7; padding: 10px 20px;
  background-color:darkred;
  color:white;">Home</a>
            </ul>
        </div>
        <div class="mx-auto order-0">
            <a class="navbar-brand" href="#"><img src="image/movie_genie.png" style="width: 10em; color: black;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
            </button>
         </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" id="btn" href="" onclick="fun()" style="font-weight: bolder; color: white; font-family: Helvetica, sans-serif, fantasy; font-size: 1em; opacity: 0.7; padding: 10px 20px;
  background-color:darkred;
  color:white;margin-right: 3em;" href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="btn" href="" onclick="fun()" style="font-weight: bolder; color: white; font-family: Helvetica, sans-serif, fantasy; font-size: 1em; opacity: 0.7; padding: 10px 20px;
  background-color:darkred;
  color:white;margin-right: 3em;" href="#">Contact Us</a>
                </li>
            </ul>
         </div>
    </nav>
    <hr>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signins">
                    <div class="card-body" style="border-width:3.5px; background-color: black; opacity: 0.8;transform: translate(5%,5%);">
                         <center><button class="btn btn-lg" id="btn"  name= "SIGN UP" style="background-color: black; width: 13em; height: 2em;">SIGN UP</button></center><hr>
                         <form class="form-signin" action="" method="POST">
                            <div class="form-label-group">
                                <label>User Name</label>
                                <input type="text" id="name" class="form-control"  name="username" required style="background-color: black; border-color: darkred;border-width: 2px; color: white;">
                                <div class="form-label-group">
                                    <label for="inputPassword">Password</label>
                                    <input type="password" id="inputPassword" class="form-control" name="psw" required style="background-color: black; border-color: darkred;border-width: 2px; color: white;">
                                    <div class="form-label-group">
                                    <label>Age</label>
                                    <input type="text" id="aget" class="form-control" name="age" required style="background-color: black; border-color: darkred;border-width: 2px; color: white;">
                                    <div class="form-label-group">
                                    <label>Country</label>
                                    <input type="text" id="country" class="form-control" name="country" required style="background-color: black; border-color: darkred;border-width: 2px; color: white;">
                                    <div class="form-label-group">
                                    <label for="gender">Gender</label>
                                    <select id="gender" name="gender" required style="width: 100%;  background-color: black; border-color: darkred; border-width: 2px;">
    <option value="gender"></option>
  <option value="male">Male</option>
  <option value="female">Female</option>

</select>
                                    
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                </div>
                                <center>
                                    <button class="btn btn-lg" id="btn" type="submit"  name= "submit" style="background-color: darkred;">Sign Up</button>
                                </center><br>
                                
                            </div>
                         </form>
                    </div>
                </div>
             </div>
        </div>
     </div>
    </div>
<?php } ?>
<script>
  function fun(){
  alert("Sorry, Currently you cannot view the page");
  }
</script>
</body>
</html>

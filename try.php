<!DOCTYPE html>
<html lang="en">
<head>
  <title>Movie Recommendation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://sweetalert.js.org/assets/sweetalert/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="page_2.css">
</head>

<?php
session_start();
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
  $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string

  $password = stripslashes($_REQUEST['psw']);

  //Checking is user existing in the database or not
       $url = 'https://f909b9e4.eu-gb.apigw.appdomain.cloud/moviegenie/signup';
     $data = array('action' => 'login', 'user_id' => $username, 'password' => $password);
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
    $_SESSION['username'] = $username;
     $_SESSION['token'] = $response->Success->AuthToken;
     //echo $_SESSION['token'];
    header("Location: index.php");
}
else{
  $msg = $response->Error->message;
  echo "<script>
    alert($msg);
    window.location = 'login.php'</script>";
    // header("Location: login.php");
  }
  
    }else{
?>
<body>
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

          <a class="navbar-brand" shref="#"><img src="image/movie_genie.png" style="width: 10em; color: black; opacity: 0.7"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
          </button>
       </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" id="btn" href="" onclick="fun()" style="font-weight: bolder; color: white; font-family: Helvetica, sans-serif, fantasy; font-size: 1em;opacity: 0.7; padding: 10px 20px;
  background-color:darkred;
  color:white;margin-right: 3em;" ><i class="fa fa-user" ></i>&nbsp;&nbsp;Account</a>
          </li>
              <li class="nav-item">
                  <a class="nav-link" style="font-weight: bolder; color: white; font-family: Helvetica, sans-serif, fantasy; font-size: 1em;opacity: 0.7; padding: 10px 20px;
  background-color:darkred;
  color:white;" href="registration.php">Register</a>
              </li>
          </ul>
       </div>
  </nav>
  
  <hr>
  
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signins">
          <div class="card-body" style="border-width:3.5px; background-color: black; opacity: 0.8;">
            <center><button class="btn btn-lg" id="btn"  name= "SIGN UP" style="background-color: black; width: 13em; height: 2em;">SIGN IN</button></center><hr>
            <!-- <h4 class="card-title text-center" style="color: white; font-weight: bold;">SIGN IN</h4><hr> -->
             <form class="form" action="#" method="POST" name="login">
              <div class="form-label-group">
                <label>User Name</label>
                <input type="text" id="name" class="form-control"  name="username" required style="background-color: black; border-color: darkred;border-width: 2px; color: white;">
                <div class="form-label-group">
                  <label for="inputPassword">Password</label>
                  <input type="password" id="inputPassword" class="form-control" name="psw" required style="background-color: black; border-color: darkred;border-width: 2px; color: white;">           
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                </div>
                <center>
                  <button class="btn btn-lg" id="btn" type="submit"  name= "submit" style="background-color: darkred;">Login</button>
                </center><br>
                <h5>New User?<a href="registration.php" style=" font-weight: bolder;color: darkred">Register</a></h5>
                <h5>Forgot Password? <a href= "password_reset.php" style=" font-weight: bolder;color: darkred">Reset</a></h5>
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
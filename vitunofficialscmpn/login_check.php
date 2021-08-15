<?php

$email_recieved = $_GET['email'];
$password_recieved = $_GET['pass'];

if (($email_recieved == "satej.bhave@vit.edu.in" || $email_recieved == "8898244012" ) && $password_recieved == "satej2002" ) {
    setcookie("email", "satej.bhave@vit.edu.in");
    header('Location: '."https://vitunofficialscmpn.epizy.com/home.html");


}else {
  echo "Wrong Auth Credentials";
}




 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Loading...</title>
   </head>
   <body>
   </body>
 </html>

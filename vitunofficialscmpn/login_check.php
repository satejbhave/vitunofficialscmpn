<?php

$db_host = "sql204.epizy.com";
$db_database_name = "epiz_28885414_chat_database";
$db_username = "epiz_28885414";
$db_password = "t2ewUEX0rRrGi9";
$connection = mysqli_connect($db_host , $db_username,$db_password , $db_database_name);


$email_recieved = $_GET['email'];
$password_recieved = $_GET['pass'];

if (($email_recieved == "satej.bhave@vit.edu.in" || $email_recieved == "8898244012" ) && $password_recieved == "satej2002" ) {
    setcookie("email", "satej.bhave@vit.edu.in");
    $date = date("d-m-y");
    $time = date("h:i:sa");
    $sql = "INSERT INTO `AuthCheckTrigger`( `Name`, `Date`, `Time`, `EmailOrUID`) VALUES ('$email_recieved','$date','$time','Email')";
    if ($connection->query($sql) == true) {
      echo "Data Added Successfully";
    }else {
      echo "Error: $sql <br> <h1> $connection->error </h1> <br>";
    }
    
    $connection->close();
    echo "Connection Closed";
  
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

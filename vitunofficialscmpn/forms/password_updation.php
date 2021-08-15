<?php



$db_host = "sql204.epizy.com";
$db_database_name = "epiz_28885414_auth_database";
$db_username = "epiz_28885414";
$db_password = "t2ewUEX0rRrGi9";
$connection = mysqli_connect($db_host , $db_username,$db_password , $db_database_name);

$email_recieved = $_GET['email'];
$password_recieved = $_GET['pass'];

echo "Connecting <br>";

$sql = "UPDATE `LoginTable` SET `password`='$password_recieved' WHERE `email`='$email_recieved'";

$result = $connection->query($sql);
echo "Requesting <br>";

$connection->close();
echo "Connection Closed";

header('Location: '."https://vitunofficialscmpn.epizy.com/home.html");







 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Loading...</title>
   </head>
   <body>
   </body>
 </html>

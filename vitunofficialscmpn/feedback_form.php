<?php



$db_host = "sql204.epizy.com";
$db_database_name = "epiz_28885414_chat_database";
$db_username = "epiz_28885414";
$db_password = "t2ewUEX0rRrGi9";
$connection = mysqli_connect($db_host , $db_username,$db_password , $db_database_name);


$feedback_recieved = $_GET['feedback'];
$date_recieved = $_GET['date'];

$sql = "INSERT INTO `FeedbackBasicTable` (`DateColumn`, `FeedbackColumn`) VALUES ('$date_recieved', '$feedback_recieved')";


echo "Requesting <br>";

header('Location: '."https://vitunofficialscmpn.epizy.com/home.html");
if ($connection->query($sql) == true) {
  echo "Data Added Successfully";
}else {
  echo "Error: $sql <br> <h1> $connection->error </h1> <br>";
}

$connection->close();
echo "Connection Closed";








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

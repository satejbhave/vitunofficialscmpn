<?php



$db_host = "sql204.epizy.com";
$db_database_name = "epiz_28885414_auth_database";
$db_username = "epiz_28885414";
$db_password = "t2ewUEX0rRrGi9";
$connection = mysqli_connect($db_host , $db_username,$db_password , $db_database_name);

$email_recieved = $_REQUEST['email'];
$password_recieved = $_GET['pass'];
echo "Connecting <br>"+$email_recieved;

$sql = "SELECT `uid`, `email`, `password`, `phonenumber` FROM `LoginTable`";

$result = $connection->query($sql);
echo "Requesting <br>";

$sizeOfArray = 0 ;

if ($result->num_rows > 0) {
  // output data of each row
  echo "Searching <br>";

  while($row = $result->fetch_assoc()) {
    $uid =  $row["uid"];
    $email =  $row["email"];
    $pass =  $row["password"];
    $phone = $row["phonenumber"];
    echo "<br>";
    echo "<br>"+$email + "<br>"+$email_recieved + "<br>";


    if (strpos($email, $email_recieved) !== false) {

      setcookie("email2", $email);
      setcookie("password", $pass);
      setcookie("uid", $uid);
      setcookie("phone", $phone);

//      header('Location: '."https://vitunofficialscmpn.epizy.com/home.html");

    }



  }


  } else {

    setcookie("email", "na");
    setcookie("password", "na");
    setcookie("uid", "na");
    setcookie("phone", "na");
    echo "No Result Found";
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

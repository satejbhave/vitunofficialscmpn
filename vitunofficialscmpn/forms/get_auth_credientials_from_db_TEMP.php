<?php


$db_host = "sql204.epizy.com";
$db_database_name = "epiz_28885414_auth_database";
$db_username = "epiz_28885414";
$db_password = "t2ewUEX0rRrGi9";
$connection = mysqli_connect($db_host , $db_username,$db_password , $db_database_name);

$email_recieved = $_GET['email'];
$password_recieved = $_GET['pass'];
echo "Connecting <br>";

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
    $phone =  $row["phonenumber"];

    if ($email_recieved == $email) {
      if ($password_recieved == $pass) {

        //save in cookies
        setcookie("email", $email, time() + (86400 * 90), "/"); // 86400 = 1 day
        setcookie("password", $pass, time() + (86400 * 90), "/"); // 86400 = 1 day
        setcookie("uid", $uid, time() + (86400 * 90), "/"); // 86400 = 1 day
        setcookie("phonenumber", $phone, time() + (86400 * 90), "/"); // 86400 = 1 day

      }else{
        setcookie("email", $email, time() + (86400 * 90), "/"); // 86400 = 1 day
        setcookie("password", "UnIdentified", time() + (86400 * 90), "/"); // 86400 = 1 day
        setcookie("uid", $uid, time() + (86400 * 90), "/"); // 86400 = 1 day
        setcookie("phonenumber", $phone, time() + (86400 * 90), "/"); // 86400 = 1 day
      }
    }else{

        setcookie("email", "na", time() + (86400 * 90), "/"); // 86400 = 1 day
        setcookie("password", "na", time() + (86400 * 90), "/"); // 86400 = 1 day
        setcookie("uid", "na", time() + (86400 * 900), "/"); // 86400 = 1 day
        setcookie("phonenumber", "na", time() + (86400 * 90), "/"); // 86400 = 1 day    }


    $sizeOfArray = $sizeOfArray +1 ;
  }


} else {
  // NO RESULT FOUND
  setcookie("email", "na", time() + (86400 * 90), "/"); // 86400 = 1 day
  setcookie("password", "na", time() + (86400 * 90), "/"); // 86400 = 1 day
  setcookie("uid", "na", time() + (86400 * 900), "/"); // 86400 = 1 day
  setcookie("phonenumber", "na", time() + (86400 * 90), "/"); // 86400 = 1 day    }
}

$connection->close();

//header('Location: '."https://vitunofficialscmpn.epizy.com/home.html");











 ?>

<?php

header('Content-Type:application/json');

$common_message = "na";


if(isset($_GET['email'])){
    $student_email_recieved = $_GET['email'];

    switch ($student_email_recieved) {

        case 'satej.bhave@vit.edu.in':
            $message = "na";
            echo json_encode(['error_code'=>'0' ,'common_message'=> $common_message , 'message'=> $message , 'type'=>'null']);
            break;
        
        case 'shreya':
            $message = "na";
            echo json_encode(['error_code'=>'0' ,'common_message'=> $common_message , 'message'=> $message , 'type'=>'null']);
            break;
            

        default:
          echo json_encode(['error_code'=>'2' ,'common_message'=>'na' , 'message'=>'Unknown Email Found' , 'type'=>'null']);
        break;
    }



}else{
    echo json_encode(['error_code'=>'1' ,'common_message'=>'na' , 'message'=>'No Email Found' , 'type'=>'null']);
}






?>
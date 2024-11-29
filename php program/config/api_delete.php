<?php

header("Access-Control-Allow-Methods: DELETE");
header("Content-Type: application/json");

include_once "config.php";

$c1 = new Config();
$c1->connectDatabase();

 if($_SERVER['REQUEST_METHOD']=='DELETE'){
    
    $res = file_get_contents("php://input");
    parse_str($res,$data);
    $id = $data['id'];
    $status= $c1->deleteDatabase($id);

    if($status){ 
        $arr['status'] = 'Student detail deleted successfully !';
    }
    else{
        $arr['msg'] = 'Failed to delete student details !';
    }
 
 }
else{
    $arr['error'] = 'Only DELETE HTTP requests are allow !';
}
echo json_encode($arr);


?>
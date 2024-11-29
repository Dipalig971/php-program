<?php 
header("Access-Control-Allow-Methods: PUT,PATCH");
header("Content-Type: application/json");

include_once "config.php";

$c1 = new Config();
$c1->connectDatabase();
if($_SERVER['REQUEST_METHOD'] == "PUT" || $_SERVER['REQUEST_METHOD'] == "PATCH"){
    $res = file_get_contents("php://input");
    parse_str($res,$data);

    $id = $data['id'];
    $name = $data['name'];
    $age = $data['age'];
    $phone = $data['phone'];

    $result = $c1->updateDatabase($id,$name,$age,$phone);

    if($result){
        $arr['status'] = "Student detail updated successfully";
    }
    else{
        $arr['error'] = "Student detail updatation is failed!!";
    }


}
else{
    $arr['err'] = "Only PUT & PATCH methods are allowed!!";
}

echo json_encode($arr);

?>
<?php

header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

include_once "config.php";

$c1 = new Config();
$c1->connectDatabase();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $phone = $_REQUEST['phone'];

    $res = $c1->insertDatabase($name, $age, $phone);
    if ($res) {
        $arr['status'] = "Record insertaion successfully!";
    } else {
        $arr["error"] = "Record insertaion Failed!!!";
    
    }

} else {
    $arr["msg"] = "Only POST requests are allowed!";
   
}
echo json_encode($arr);

?>
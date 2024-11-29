<?php

header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json");

include_once "config.php";

$c1 = new Config();
$c1->connectDatabase();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $data = [];
    $res = $c1->selectDatabase();
    $result = mysqli_fetch_assoc($res);

    while ($result = mysqli_fetch_assoc($res)) {
        array_push($data, $result);
    }
} else {
    $arr["msg"] = "Only GET HTTP requests are allowed!";
}
echo json_encode($data);

?>
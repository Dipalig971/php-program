<?php

header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

include_once "auth_config.php";

$c1 = new AuthConfig();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $res = $c1->signIn($email, $password);
    if ($res) {
        $arr['status'] = "You have signed in successfully!!";
    } else {
        $arr['error'] = "Invalid email or password.Please try again!!";
    }
} else {
    $arr['err'] = "Only POST method is allowed !!";
}

echo json_encode($arr);
?>

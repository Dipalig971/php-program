
<?php
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

include_once "auth_config.php";

$c1 = new AuthConfig();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $res = $c1->signUp($name, $email, $password);
    if ($res) {
        $arr['status'] = "Sign up successful!!!!";
    } else {
        $arr['error'] = "Sign up failed.Please try again !";
    }
} else {
    $arr['err'] = "Only POST method is allowed !!";
}

echo json_encode($arr);
?>


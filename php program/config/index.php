<?php
include_once "config.php";

$c1 = new Config();
$c1->connectDatabase();



if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];

    $c1->insertDatabase($name, $age, $phone);
}

if (isset($_POST['show'])) {
    header('Location : show_data.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <center>
<div class="container mt-4">
<div class="border p-7 rounded border-3 ">
    
        <br>
        <h1>Student Detail</h1>
        <br>
        <div class="col-4">
            <form method="POST" action="">
                <input class="form-control" name="name" placeholder="Student Name" required>
                <br>
                <input class="form-control" name="age" placeholder="Age" required>
                <br>
                <input class="form-control" name="phone" placeholder="Phone number" required>
                <br>
                <button type="submit" name="submit" class="btn btn-dark">Add details</button>
                <button type="submit" onclick="location.href='show_data.php'" name="show" class="btn btn-info">Show Data</button>
            </form>
        </div>
        <br>
</div>
</div>

       
       
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>student form proper gender course address add  





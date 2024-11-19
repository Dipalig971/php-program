<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php

include_once"config.php";

$c1 = new Config();
$c1->connectDatabase();

if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $phone = $_REQUEST['phone'];

    $c1->insertDatabase($name, $age, $phone);
}

?>
    <center>
    <br><br>
    <h1>STUDENT INFORMATION</h1><br><br>
    <form>
    <div class="col-4">
    <input  class="form-control" name="name" placeholder="Student name"><br>
    <input  class="form-control" name="age" placeholder="Student age"><br>
    <input  class="form-control" name="	phone" placeholder="Phone number"><br>
    <button type="submit" class="btn btn-dark">Submit</button>
    </div>
    </form>
    </center>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
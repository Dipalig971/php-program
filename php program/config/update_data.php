<?php

        session_start();

        include_once "config.php";

        $c1 = new Config();
        $c1->connectDatabase();

        $id = $_SESSION['id'];
        $name = $_SESSION['name'];
        $age = $_SESSION['age'];
        $phone = $_SESSION['phone'];


        if (isset($_REQUEST['submit'])) {
            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            $phone = $_REQUEST['phone'];
            $c1->updateDatabase($id, $name, $age, $phone);
            header("Location: show_data.php");
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
<div class="border p-7 rounded border-3">
    
        <br>
        <h1>Update data</h1>
        <br>
        <div class="col-4">
            <form method="POST" action="">
                <input class="form-control" name="name" placeholder="Student Name" value="<?php echo $name; ?>"  required>
                <br>
                <input class="form-control" name="age" placeholder="Age"  value="<?php echo $age; ?>" required>
                <br>
                <input class="form-control" name="phone" placeholder="Phone number"  value="<?php echo $phone; ?>"  required>
                <br>
                <button type="submit" name="submit" class="btn btn-dark">Update</button>
                
            </form>
        </div>
        <br>
</div>
</div>

       
       
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
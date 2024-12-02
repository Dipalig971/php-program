<?php
session_start();
include_once "config.php";

$c1 = new Config();
$c1->connectDatabase();
$result = $c1->selectDatabase();

if (isset($_REQUEST['delete'])) {
    $id = $_REQUEST['deleteId'];

    $c1->deleteDatabase($id);
    header('Refresh:0');
}

if(isset($_REQUEST['edit'])) {
    $_SESSION['id'] = $_REQUEST['deleteId'];
    $_SESSION['name'] = $_REQUEST['name'];
    $_SESSION['age'] = $_REQUEST['age'];
    $_SESSION['phone'] = $_REQUEST['phone'];

    echo $_REQUEST['name'];
    header("Location:update_data.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <br><br>
    <h4 class="card-title text-center mb-4">Student Data</h4>
    <div class="container mt-5">
        <div class="border p-8 rounded border-3">
            <div class="card-body">

                <table class="table table-striped">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Actions</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($res = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <th scope="row"><?php echo $res['id']; ?></th>
                                <td><?php echo $res['name']; ?></td>
                                <td><?php echo $res['age']; ?></td>
                                <td><?php echo $res['phone']; ?></td>
                                <td>
                               <form method="post">
                               <input type="hidden" name="deleteId" value="<?php echo $res['id']; ?>">
                                            <input type="hidden" name="name" value="<?php echo $res['name']; ?>">
                                            <input type="hidden" name="age" value="<?php echo $res['age']; ?>">
                                            <input type="hidden" name="phone" value="<?php echo $res['phone']; ?>">
                               <button name='edit' class="btn btn-info">Edit</button>
                               <button name='delete' class="btn btn-danger">delete</button>
                               </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> <!-- Icons -->
</body>


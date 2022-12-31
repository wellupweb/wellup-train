<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // var_dump($_POST['fullname']);
        $fullname = $_POST['fullname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="fullname">
        <input type="text" name="middlename">
        <input type="text" name="lastname">
        <input type="submit">
    </form>
</body>
</html>
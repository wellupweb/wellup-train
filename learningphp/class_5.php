<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // var_dump($_POST['fullname']);
        $aladin = $_POST['aladin'];
        $jesmine = $_POST['jesmine'];

        echo $aladin;
        echo $jesmine;

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
        <input type="text" name="aladin">
        <input type="text" name="jesmine">
        <input type="submit">
    </form>
</body>
</html>
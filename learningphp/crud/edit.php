<?php
$link = new mysqli("localhost", "root", "", "ebaly");
$firstname = $lastname = $id = "";
if(isset($_GET['info_id'])){
    $info_id = $_GET['info_id'];
    $table_data = $link->query("select * from info where id = $info_id");
    $result = $table_data->fetch_assoc();
    $firstname = $result['firstname'];
    $lastname = $result['lastname'];
    $info_id = $result['id'];
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $id = $_POST['info_id'];


    if (empty($firstname) || empty($lastname)) {
        echo "Field Required";
    } else {

        $update_row = $link->query("update info 
        set 
        firstname = '$firstname' ,
        lastname = '$lastname'
        where id = $id
        ");
        if ($update_row) {
            header('Location: index.php');
        }
    }
}







?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP In PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">

        <h2 class="bg-warning text-white p-3 text-center">INFO FORM</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <input type="hidden" name="info_id" value="<?php echo $info_id; ?>">
            <div class="mb-3">
                <label for="numberOne" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>">
            </div>
            <div class="mb-3">
                <label for="numberTwo" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
<?php
$link = new mysqli("localhost", "root", "", "ebaly");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    if (empty($firstname) || empty($lastname)) {
        echo "Field Required";
    } else {
        $insert_row = $link->query("insert into info(firstname,lastname) values('$firstname','$lastname')");

        if ($insert_row) {
            echo "Inserted successfully";
        }
    }
}

$table_data = $link->query("select * from info order by firstname asc");
if($table_data->num_rows > 0){
    $results = $table_data->fetch_all();
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP In PHP</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <h2 class="bg-warning text-white p-3 text-center">INFO FORM</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <div class="mb-3">
                <label for="numberOne" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" id="numberOne">
            </div>
            <div class="mb-3">
                <label for="numberTwo" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="numberTwo">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;  
                foreach ($results as $result) {
                    $i++;  ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $result[1]; ?></td>
                    <td><?php echo $result[2]; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        
        </table>
    </div>

</body>

</html>
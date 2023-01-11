<?php 
    include "Calculator.php";
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $numberOne = intval($_POST['numberOne']);
        $numberTwo = intval($_POST['numberTwo']);

        $calc = new Calculator();
        $calc->add($numberOne,$numberTwo);
        $calc->multi($numberOne,$numberTwo);
        $calc->subs($numberOne,$numberTwo);
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

        <h2 class="bg-warning text-white p-3 text-center">CALCULATION FORM</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <div class="mb-3">
                <label for="numberOne" class="form-label">Number One</label>
                <input type="number" class="form-control" name="numberOne" id="numberOne">
            </div>
            <div class="mb-3">
                <label for="numberTwo" class="form-label">Number Two</label>
                <input type="number" class="form-control" name="numberTwo" id="numberTwo">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   
</body>

</html>
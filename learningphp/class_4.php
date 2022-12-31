<?php 
    $fullname = $age = $email = $phone_number = $website = $comment = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fullname = validate($_POST['fullname']);
        $age = validate($_POST['age']);
        $email = validate($_POST['email']);
        $phone_number = validate($_POST['phone_number']);
        $website = validate($_POST['website']);
        $comment = validate($_POST['comment']);

        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <h2 class="text-center text-warning">Submit Your Form</h2>
   
    <div class="container">
        <ul class="list-group mb-3">
            <li class="list-group-item"><?php  echo "Full Name: $fullname"; ?></li>
            <li class="list-group-item"><?php echo "Age: $age"; ?></li>
            <li class="list-group-item"><?php echo "Email: $email"; ?></li>
            <li class="list-group-item"><?php echo "Phone Number: $phone_number"; ?></li>
            <li class="list-group-item"><?php echo "Website: $website"; ?></li>
            <li class="list-group-item"><?php echo "Comment: $comment"; ?></li>
        </ul>
        <hr>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" name="fullname" class="form-control" id="fullname">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age </label>
                <input type="number" name="age" class="form-control" id="age">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="number" name="phone_number" class="form-control" id="phone_number">
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="text" name="website" class="form-control" id="website">
            </div>

            <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
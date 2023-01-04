<?php 
    $fullname = $age = $email = $phone_number = $website = $comment = $image = "";
    $errfullname = $errage = $erremail = $errphone_number = $errwebsite = $errcomment = "";

    // define("KING","ABDUL HAMID KHAN");

    // echo KING;
   
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['fullname'])){
            $errfullname = "<div class='alert alert-danger' role='alert'> Full name is required!! </div> ";
        }else{
            $fullname = validate($_POST['fullname']);
        }

        if(empty($_POST['age'])){
            $errage = "<div class='alert alert-danger' role='alert'> Age is required!! </div> ";
        }else{
            $age = validate($_POST['age']);
        }

        if(empty($_POST['email'])){
            $erremail = "<div class='alert alert-danger' role='alert'> Email is required!! </div> ";
        }elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $erremail = "<div class='alert alert-danger' role='alert'> Invalid Email!! </div> ";
        }else{
            $email = validate($_POST['email']);
        }

        if(empty($_POST['phone_number'])){
            $errphone_number = "<div class='alert alert-danger' role='alert'> Phone is required!! </div> ";
        }else{
            $phone_number = validate($_POST['phone_number']);
        }

        if(!filter_var($_POST['website'],FILTER_VALIDATE_URL)){
            $errwebsite = "<div class='alert alert-danger' role='alert'> Invalid URL!! </div> ";
        }else{
            $website = validate($_POST['website']);
        }

        $imagename = $_FILES['imagewellup']['name'];
        $imagetmp = $_FILES['imagewellup']['tmp_name'];
        move_uploaded_file($imagetmp,'images/'.$imagename);

        $image = 'images/'.$imagename;

        echo "Uploaded Successfully";


        $comment = validate($_POST['comment']);

 
       
    }
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
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
            <li class="list-group-item"><?php echo "Image: "; ?> <img src="<?php echo $image; ?>" alt=""> </li>
        </ul>
        <hr>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data"  method="POST">
            <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" name="fullname" class="form-control" id="fullname">
                <?php echo $errfullname; ?>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age </label>
                <input type="number" name="age" class="form-control" id="age">
                <?php echo $errage; ?>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
                <?php echo $erremail; ?>
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="number" name="phone_number" class="form-control" id="phone_number">
                <?php echo $errphone_number; ?>
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="text" name="website" class="form-control" id="website">
                <?php echo $errwebsite; ?>
            </div>

            <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="imagewellup">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
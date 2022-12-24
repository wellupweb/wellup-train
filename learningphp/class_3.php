<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
       $name = $_REQUEST['username'];
       if(empty($name)){
           echo "<p style='color: red; background:black;padding: 20px;'> Field Must Be Required</p>";
       }else{
           echo "<p style='color: white; background:black;padding: 20px;'>Name: ". $name . "</p>";
       }
    }
?>

<!-- <h4>SERVER</h4> -->

<?php  //echo $_SERVER['PHP_SELF'] . "<br>"; ?>
<?php //echo $_SERVER['SERVER_NAME'] . "<br>"; ?>
<?php //echo $_SERVER['SERVER_SOFTWARE'] . "<br>"; ?>

<h4> Request Method </h4>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" >
    <input type="text" name="username">
    <input type="submit">
</form>


<a href="test.php?email=armanhossen591@gmail.com&message=This is your email">Send You Info</a>

<form action="test.php" method="GET" >
    <input type="text" name="email">
    <input type="text" name="message">
    <input type="submit">
</form>


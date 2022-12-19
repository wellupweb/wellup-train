<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <?php $joe = "Hello world"; ?>

    <h3>Print_r</h3>
    <pre>
    <h2> <?php print_r(array("hello","hey"))  ; ?> </h2>
    </pre>

    <h3>Var_Dump</h3>
    <pre>
    <h2> <?php var_dump(array("hello","hey"))  ; ?> </h2>
    </pre>

    <h3>Echo</h3>
    <pre>
    <h2> <?php echo $joe  ; ?> </h2>
    </pre>

    <h3>Print</h3>
    <pre>
    <h2> <?php print $joe  ; ?> </h2>
    </pre>


    <h2>Data Types</h2>

    <h4>Numbers</h4> 
    <?php echo 20; ?>

    <h4>String</h4>
    <?php echo "Hello shanti";  ?>
    
    <h4>Array</h4> 
    <?php print_r(array("Hello","World")); ?>

    <h4>Objects</h4> 
    <?php 
        class Hello
        {
            public function hey(){
                return "Done";
            }
        }
        
        $hello = new Hello();
        var_dump($hello->hey())
    ?>
    
    <h4>Boolean</h4> 
    <?php 
        var_dump(true);
        var_dump(false);
    ?>


</body>
</html>
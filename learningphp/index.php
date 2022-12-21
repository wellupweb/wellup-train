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
            public $football = "Messi";
            public function hey(){
                return "Done";
            }
        }
        
        $hello = new Hello();
        var_dump($hello)
    ?>
    
    <h4>Boolean</h4> 
    <?php 
        var_dump(true);
        var_dump(false);
    ?>


    <h4>While Loop</h4>

    <?php
        $i = 10;
        while ($i <= 10) {
            echo "Its Counting ". $i . "<br>";
            $i++;
        }

     
    ?>

    <h4>Do While Loop</h4>
    
    <?php
    $a = 10;
        do {
            echo "Its Counting ". $a . "<br>";
            $a++;
        } while ($a <= 10);
    ?>

    <h4>For Loop</h4>

    <?php 
        
        for ($j=0; $j <= 10 ; $j++) { 
            echo "Its Counting ". $j . "<br>";
        }
    ?>

    <h4>Foreach Loop</h4>

    <?php 
        $countries = array("c1" => "Germany","c2" => "Uganada");
       
        foreach ($countries as $country) {
            echo "The country is ". $country . "<br>";
        }
    ?>

    <h4>Function</h4>
    <?php
        function HelloWorld($text){
            return "The message is ". $text;
        }

       echo HelloWorld("Messi");
    ?>

    <h4> Variable Scope </h4>
    <?php
    $x = 10;
    $GLOBALS['z'] = 15;
    function sum1(){
        
        $a = 3;
        $b = 4;
        echo $GLOBALS['z'] + $GLOBALS['x'] . "<br>";
    }

    function sum2(){
        $i = 5;
        $j = 6;
        echo $i;
    }

    sum1();
    sum2();
    ?>

    <h4>Super Global Variable</h4>
<!-- 
    $_GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET -->







</body>
</html>